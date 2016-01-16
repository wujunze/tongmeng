/* 
* @Author: Administrator
* @Date:   2015-07-13 02:06:15
* @Last Modified by:   Administrator
* @Last Modified time: 2015-07-13 02:06:41
*/

$(function(){
 $(".gallery .product").each(function(){
 //$(this).find(".pro_imgli").eq(0).css("display","block");
 $(this).find(".pro_imgli").eq(0).css("display","block").siblings().css("display","none");
 });
 $(".gallery .hd").each(function(index,obj){
 $(this).find("li").eq(0).addClass("on");
 $(this).find("li img").each(function(jdex,item){
 $(item).hoverDelay({
 hoverDuring:200,
 hoverEvent:function(){
 $(".gallery .product").eq(index).find(".pro_imgli").css("display","none");
 $(".gallery .product").eq(index).find(".pro_imgli").eq(jdex).css("display","block");
 $(item).parent().parent().addClass("on").siblings().removeClass("on");
 }
 });
 });
 });
});
var categoryParentIdKey = parseInt('0');
$(function (){
 
 var menuH1 =$("div.cate_menu>h1");
 var menuH1span2 =$("div.cate_menu>h1>span.treeright");
 var menuUl = $("div.cate_menu>ul");
 menuUl.hide();
 menuH1.each(function(i){
 
 
 var h1Obj = $(this);
 h1Obj.click(function(){
 menuUl.hide();
 menuH1span2.html('+');
 var hideOrShow = h1Obj.find(">span.treeright").html();
 if(hideOrShow == '+'){
 h1Obj.find(">span.treeright").html('-');
 menuUl.eq(i).show();
 }else{
 h1Obj.find(">span.treeright").html('+');
 menuUl.eq(i).hide();
 }
 });
 
 menuH1.eq(categoryParentIdKey).trigger("click");
 });
 
});