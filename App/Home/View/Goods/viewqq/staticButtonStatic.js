window.onerror = function(){return true;};
if(!live800)var live800={};
if(!live800.Sys)live800.Sys={};
if(!live800.utils)live800.utils={};

var isMobile = (function(a){
	if(a) a=a.toLowerCase();
	var deviceKeys=["iPhone","iPad","iPod","Android","Mobile","Linux","SymbianOS","BlackBerry","Phone"];
	for ( var i = 0; i < deviceKeys.length; i++) {
		var index =a.indexOf(deviceKeys[i].toLowerCase());
		if(index!=-1){
			return true;
		}		
	}
	return false;
})(navigator.userAgent);
var isSougou = (function(a){
	if(a) a=a.toLowerCase();
	var index = a.indexOf("se 2.x");
	if(index!=-1){
		return true;
	}else return false;
})(navigator.userAgent);
var isyl = (typeof releaseVersion !="undefined")&&releaseVersion=="yl";
var isOpenNewTab = isMobile||isSougou||isyl;

//proxy function 
if(live800_codeType=="steady"){
	if (!window.Sys){
		window.Sys=live800.Sys;	
	}else{
		if(!window.Sys.getObj)window.Sys.getObjt=live800.Sys.getObj;
	}
};
if(!StaticIcon_generate)var StaticIcon_generate=function(){return live800.globalStaticIcon.generate();};
/**
 * Sys utils
 */
live800.Sys.urlDecode=function(str){
	if("undefined" == typeof decodeURIComponent){
		return unescape(str).replace(/\+/g, ' ').replace(/%2B/g,'+');
  	} else {
		return unescape(str).replace(/\+/g, ' ').replace(/%2B/g,'+');
  	}
};
live800.Sys.getObj=function(objId){if (document.getElementById)return document.getElementById(objId);else if (document.all)return document.all(objId);};
live800.Sys.urlToParams=function(urlContent){
	cmdMap = new Array();
	cmdParams = new Array();
    pos = -1;
    while (true)
	{
        newPos = urlContent.indexOf('&', pos+1);
        if (newPos>=0) {
            encodedProperty = urlContent.substring(pos+1, newPos);
        }
        else {
            encodedProperty = urlContent.substring(pos+1, urlContent.length);
        }

        equalsPos = encodedProperty.indexOf('=');
        paramName = encodedProperty.substring(0, equalsPos);
        paramValue = live800.Sys.urlDecode(encodedProperty.substring(equalsPos+1, encodedProperty.length));

        cmdParams[paramName] = paramValue;

        if (newPos==-1) {
            break;
        }
        pos = newPos;
    }
	return cmdParams;
};
live800.utils.paramsToUrl=function(params){
	var urlString="";
	for(var i in params){
		if(params[i]!=""&&(typeof params[i]!="function")){
			urlString+=params[i]+"&";
		}
	}
	return urlString.substring(0,urlString.length-1);
};
live800.utils.getTimestampPara=function(){
	return "timestamp="+new Date().getTime();
};
live800.utils.getParam=function(){
		var paramUrl="";
		var getCookie=this.getCookie;
		if(getCookie("operatorId")!=null&&typeof getCookie("operatorId")!="undefined"&&getCookie("operatorId").length!=0&&getCookie("operatorId")!="undefined"){
			paramUrl="operatorId="+getCookie("operatorId");
		}
		if(getCookie("skillId")!=null&&getCookie("skillId")!="undefined"&&getCookie("skillId").length!=0&&getCookie("skillId")!="undefined"){
			paramUrl=paramUrl+"&skillId="+getCookie("skillId");
		}
		return paramUrl;
};
live800.utils.setCookie=function(name,value){
	var Days = 30;
    var exp  = new Date();    //new Date("December 31, 9998");
        exp.setTime(exp.getTime() + Days*24*60*60*1000);
        document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString() + ";path=/";
};
live800.utils.setSessionCookie=function(name,value){
	  document.cookie = name + "="+ escape (value) + ";path=/";
};
live800.utils.getCookie=function(name){
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
	arr=document.cookie.match(reg);
    if(arr){return unescape(arr[2]);}else{return null;}
};
live800.utils.isCookie=function(){
        document.cookie = "testcookie=testvalue";
		var cookiestr = new String(document.cookie);
		var cookiename = "testcookie=testvalue";
		var beginpos = cookiestr.indexOf(cookiename);
		if (beginpos != -1) {
			return true;
		} else {
			return false;
		}
};
live800.utils.delCookie=function(name){
	 var exp = new Date();
        exp.setTime(exp.getTime() - 1);
   	 var cval=this.getCookie(name);
        if(cval!=null){document.cookie= name + "="+cval+";expires="+exp.toGMTString();}
};
live800.utils.setLiveCookie=function(){
	this.delCookie("operatorId");
	this.delCookie("skillId");
	var params=live800.params;
	if(typeof params["live800_operator"]!="undefined"&&params["live800_operator"].length!=0&&params["live800_operator"]!="undefined")
	{
		this.setCookie("operatorId",params["live800_operator"]);
	}
	if(typeof params["live800_skill"]!="undefined"&&params["live800_skill"].length!=0&&params["live800_skill"]!="undefined")
	{
		this.setCookie("skillId",params["live800_skill"]);
	}
};
live800.utils.getGid=function(){
	if(typeof jid!="undefined"){
		return "jid="+jid;
	}else{
	return "";}
};
live800.utils.getParam=function(){
	var url="";
	var params = live800.Sys.urlToParams(live800_configContent);
	if(typeof params["live800_operator"]!="undefined"&&params["live800_operator"].length!=0&&params["live800_operator"]!="undefined"){
		url="operatorId="+params["live800_operator"];
	}
	if(typeof params["live800_skill"]!="undefined"&&params["live800_skill"].length!=0&&params["live800_skill"]!="undefined"){
		url=url+"skillId="+params["live800_skill"];
	}
	return url;
};
live800.utils.getTrustfulVisitorInfo=function(){
	var visitorInfoUrl="";
	if(typeof trustfulInfo!="undefined"&&trustfulInfo.length>0&&trustfulInfo!=null&&trustfulInfo!="null"){
		visitorInfoUrl="info="+trustfulInfo;
	}
	return visitorInfoUrl;
};
live800.utils.URLEncode=function(Str){
	if(Str==null||Str=="")
    {return "";}
  	var newStr="";
  function toCase(sStr){
    return sStr.toString(16).toUpperCase();
    }
  for(var i=0,icode,len=Str.length;i<len;i++){
    icode=Str.charCodeAt(i);
    if( icode<0x10){
      newStr+="%0"+icode.toString(16).toUpperCase();}
    else if(icode<0x80){
      if(icode==0x20){
        newStr+="+";}
      else if((icode>=0x30&&icode<=0x39)||(icode>=0x41&&icode<=0x5A)||(icode>=0x61&&icode<=0x7A)){
        newStr+=Str.charAt(i);}
      else{
        newStr+="%"+toCase(icode);}
      }
    else if(icode<0x800){
      newStr+="%"+toCase(0xC0+(icode>>6));
      newStr+="%"+toCase(0x80+icode%0x40);
      }
    else{
      newStr+="%"+toCase(0xE0+(icode>>12));
      newStr+="%"+toCase(0x80+(icode>>6)%0x40);
      newStr+="%"+toCase(0x80+icode%0x40);
      }
    }
  return newStr;
};
live800.utils.getEnterUrl=function(){
	var url="";
	if(null == enterurl || enterurl=="null"){
		enterurl=document.URL;}
	url=enterurl;
	return "enterurl="+url;
};

live800.navigateToUrl=function(url,targetWndName,attr,aTag){
	try{parent.closeMini();}catch(e){;}
	var wnd,link=document.getElementById("live800:link");
	if(isOpenNewTab){
		aTag.setAttribute('href',url);
		return true;
	}
	targetWndName = targetWndName+new Date().getTime();
	if(document.all&&isNeedCheckDomainBinding){
		if(document.URL.indexOf("preview.jsp")>-1){
			wnd=window.open(url,targetWndName,attr);
		}else{
			try {
				wnd=window.open("about:blank",targetWndName,attr);
				link.target=targetWndName;
				link.href=url;
				link.click();	
			} catch (e) {
				//wnd=window.open(url,name,attr);
				aTag.setAttribute('href',url);
				return true;
			}
		}
	}else{
		wnd=window.open(url,targetWndName,attr);
	}
	if(typeof wnd !="undefined"){
		wnd.focus();
	}
	return false;
};

//static Object

live800.StaticIcon=function(inLogger, inPreferences){
	this.logger = inLogger;
	this.preferences = inPreferences;
};
live800.StaticIcon.prototype={
	start:function(){
	    this.setSessionPageReferrer();
	    this.setSessionFirstEnterUrl();
		this.generate();
		
	},
	setSessionFirstEnterUrl:function(){
	   var firstEnterUrl = live800.utils.getCookie("firstEnterUrlInSession");
	   if(firstEnterUrl==null){
	   firstEnterUrl = window.location;
	   if(firstEnterUrl == null){
	   firstEnterUrl = " ";
	   }
	    live800.utils.setSessionCookie("firstEnterUrlInSession",firstEnterUrl);
	   }
	},
	isBaidu:function(refurl){
		var regStr = /[a-zA-Z0-9\u4E00-\u9FA5][\-a-zA-Z0-9\u4E00-\u9FA5]{0,62}(\.[a-zA-Z0-9\u4E00-\u9FA5][\-a-zA-Z0-9\u4E00-\u9FA5]{0,62})+/gi;
		var darr = refurl.match(regStr);
		if (darr && darr[0].indexOf(".baidu.")>0) {
			return true;;
		}else{
			return false;
		}
	},getBDParam:function(refurl,keys){
		var wd = null;
		for (var i = 0, length = keys.length; i < length; i++) {
			var start = refurl.indexOf(keys[i]);
			if(start>0){
				var end = refurl.indexOf("&",start+1);
				if(end<0){
					end = refurl.length;
				}
				wd = [keys[i],refurl.substring(start+keys[i].length,end)];
				break;
			}
		}
		return wd;
	},getBaiduWd:function(refurl){
		var keys = ["&wd=","&word=","&rqwd=","?wd=","?word=","?rqwd="];
		return this.getBDParam(refurl,keys);
	},getBDEqid:function(refurl){ 
		var keys = ["&eqid=","?eqid="];
		return this.getBDParam(refurl,keys);
	},
	setSessionPageReferrer:function(){
    	//get session ref,if ref == null ,try get from document. 		
		var dfer = live800.utils.getCookie("pageReferrInSession");
		if(dfer === null || dfer === ""){
			dfer = document.referrer;
			if(dfer !== null && dfer !== ""){
				var maxRefLen = 700;
				if(dfer.length >maxRefLen){
					var tempRef = dfer.substring(0,maxRefLen);
					var isbd = this.isBaidu(dfer);
					if(isbd){
						//if baidu,pagereffer  length maybe > maxRefLen,
						var wdArray = this.getBaiduWd(dfer);
						if(wdArray !== null){							
							var tempWd = this.getBaiduWd(tempRef);					
							if(tempWd === null){
								tempRef = tempRef + wdArray[0] + wdArray[1];
							}else{
								if(wdArray[1] !== tempWd[1]){
									tempRef = tempRef.replace(wdArray[0], wdArray[0]+wdArray[1]+"&");
								}
							}
						}
						
						var eqidArray = this.getBDEqid(dfer);
						if(eqidArray !== null){							
							var tempEqid = this.getBDEqid(tempRef);					
							if(tempEqid === null){
								tempRef = tempRef + eqidArray[0] + eqidArray[1];
							}else{
								if(eqidArray[1] !== tempEqid[1]){
									tempRef = tempRef.replace(eqidArray[0], eqidArray[0]+eqidArray[1]+"&");
								}
							}
						}
					}
					dfer = tempRef;
				}
				live800.utils.setSessionCookie("pageReferrInSession",dfer);
			}
		}
	},

	generate:function(){
		if((typeof live800_codeType)=="undefined"){live800_codeType="null";}
		var layerHtml;
		var param=live800.utils.getParam();
		layerHtml= '<a id="live800iconlink" target="_blank" href="javascript:void(0)" onclick="return live800.navigateToUrl(\''+this.getChatboxUrl()+'\', \'chatbox'+ this.preferences["companyID"]+ '\', globalWindowAttribute,this);">';
		layerHtml += '<img name="live800icon" id="live800icon" src="' + this.preferences["protocol"] + "://" + this.preferences["baseUrl"] + this.preferences["baseWebapp"] + '/SurferServer?cmd=111&companyID=' + this.preferences["companyID"] +"&configID="+this.preferences["configID"]+ '&online=' + this.preferences["online"] + '&offline=' + this.preferences["offline"] +(param!=""?"&"+param:"")+'"  border="0" />';
		layerHtml += '</a>';
		 
		if(!document.getElementById("live800:link")){
			 layerHtml += this.getLive800LinkHtml();
			 
		 }
		 if(live800_codeType=="custom"||live800_codeType==null||live800_codeType==""||live800_codeType=="null"){
		   // alert((typeof live800_renderid)=="undefined");
			if((typeof live800_renderid)=="undefined"){
			   document.write(layerHtml);
			}
			else{
			layerHtml = layerHtml.replace(/&/g, '&amp;');
			document.getElementById(live800_renderid).innerHTML=layerHtml;
			}
			
		}
		if(live800_codeType=="steady2"||live800_codeType=="steady"){
			return layerHtml;
		}
	},startFlowCapacity:function(){
	  if(live800.utils.isCookie() && document.body.getAttribute("lim:VisitorCapacity") != "1"){
	   document.body.setAttribute("lim:VisitorCapacity","1");
	   var capacityCookie = live800.utils.getCookie("VisitorCapacity");
	   if(capacityCookie == null || capacityCookie == ''){
	   var execurl = this.preferences["protocol"] + "://" + this.preferences["baseUrl"] + this.preferences["baseWebapp"]+"/SurferServer?cmd=115&companyID="+this.preferences["companyID"];
	   var capacityImg =  new Image();
	   capacityImg.onload=function(){live800.utils.setSessionCookie("VisitorCapacity","1"); };
	   capacityImg.src=execurl;
		     
	   }
	 }
	},
	getChatboxUrl:function(){
		var urlString="";
			urlString+=this.preferences["protocol"] + "://" + this.preferences["baseUrl"] + this.preferences["baseWebapp"] + this.preferences["baseChatHtmlDir"] +"/chatbox.jsp"+jsessionId+"?";
			urlString+="companyID="+this.preferences["companyID"];
			urlString+="&configID="+this.preferences["configID"];
			if(typeof live800_Language!="undefined"){
				urlString += "&lan=" + live800_Language;
			}
		var utils=live800.utils;
		var pagereferrinsession=utils.getCookie("pageReferrInSession");
		if(pagereferrinsession==null || pagereferrinsession==" ")pagereferrinsession="";
		pagereferrinsession = "pagereferrer="+utils.URLEncode(pagereferrinsession);
		
		var firstenterurlinsession=utils.getCookie("firstEnterUrlInSession");
		if(firstenterurlinsession==null || firstenterurlinsession==" ")firstenterurlinsession="";
		firstenterurlinsession = "firstEnterUrl="+utils.URLEncode(firstenterurlinsession);
		
		var pagetitle;
		if (document.title.length > 80) {
			pagetitle = utils.URLEncode(document.title.substring(0, 80));
		} else {
			pagetitle = utils.URLEncode(document.title);
		}
		pagetitle = "pagetitle="+pagetitle;
		var params={
			"jid":utils.getGid(),
			"enterUrl":utils.getEnterUrl(),
			"param":utils.getParam(),
			"info":utils.getTrustfulVisitorInfo(),
			"timestamp":utils.getTimestampPara(),
			"pageReferr":pagereferrinsession,
			"firstEnterUrl":firstenterurlinsession,
			"pagetitle":pagetitle
		};
		urlString+="&"+utils.paramsToUrl(params);
		return urlString;
	},
	getLive800LinkHtml:function(){
	     var live800link = "<a href='javascript:void(0);' id='live800:link' style='visibility:hidden;position:absolute;top:0px;right:0px;'>&#160;</a>";
	     return live800link;
	}
	
};
 
live800.params=live800.Sys.urlToParams(live800_configContent);
live800.utils.setLiveCookie();
if(live800_companyID == null || live800_companyID == ""){alert("miss companyID");}else{
var params=live800.params;
var lim_protocol=document.location.protocol.substring(0,document.location.protocol.length-1);
preferences = new Array();
preferences["companyID"] = live800_companyID;
preferences["configID"] = live800_configID;
preferences["online"] =  (params["live800_online"] !=null ? params["live800_online"] : "");
preferences["offline"] =  (params["live800_offline"] !=null ? params["live800_offline"] : "");
preferences["protocol"] = (lim_protocol=="file")?"http":lim_protocol;
preferences["baseUrl"] = live800_baseUrl;
preferences["baseHtmlUrl"] = live800_baseHtmlUrl;
preferences["baseWebapp"] = live800_baseWebApp;
preferences["baseChatHtmlDir"] = live800_baseChatHtmlDir;
preferences["visitorIDInSession"] = preferences["companyID"] + "chater";
var globalStaticIcon = new live800.StaticIcon("", preferences);
	if (document.body.getAttribute('lim:initchat') != "1") {
		globalStaticIcon.start();
		live800.globalStaticIcon=globalStaticIcon;
	}
setTimeout("globalStaticIcon.startFlowCapacity()",5000);
}