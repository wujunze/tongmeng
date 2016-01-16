function obj2str(o)
{		
		    var r = [];
			if(typeof o =="string") return "\""+o.replace(/([\'\"\\])/g,"\\$1").replace(/(\n)/g,"\\n").replace(/(\r)/g,"\\r").replace(/(\t)/g,"\\t")+"\"";
			if(typeof o =="undefined") return "undefined";
			if(typeof o == "object"){				
				if(o===null) return "null";
				else if(!o.sort){
					for(var i in o)
					{		
						if(i!="toJSONString") //增加判断，清除对object原型的定义加入到json中
						r.push("\""+i+"\""+":"+obj2str(o[i]));
					}
					r="{"+r.join()+"}";
				}else{
					for(var i =0;i<o.length;i++)
						r.push(obj2str(o[i]))
					r="["+r.join()+"]"
				}
				return r;
			}
			return o.toString();
		//结束			
}
	

//下面开始重写调用tojson的一些ajax方法，主要针对common.js

/* *
 * 添加商品到购物车
 */
function addToCart(goodsId, parentId)
{
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var formBuy      = document.forms['ECS_FORMBUY'];

  // 检查是否有商品规格
  if (formBuy)
  {
    spec_arr = getSelectedAttributes(formBuy);

    if (formBuy.elements['number'])
    {
      number = formBuy.elements['number'].value;
    }
  }

  goods.spec     = spec_arr;
  goods.goods_id = goodsId;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);

  Ajax.call('flow.php?step=add_to_cart', 'goods=' + obj2str(goods), addToCartResponse, 'POST', 'JSON');
}
