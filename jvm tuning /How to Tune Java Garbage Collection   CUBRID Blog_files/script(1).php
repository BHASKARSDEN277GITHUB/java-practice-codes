/* file: ./common/js/x.js */
/** 
 * x.js compiled from X 4.0 with XC 0.27b. 
 * Distributed by GNU LGPL. For copyrights, license, documentation and more visit Cross-Browser.com 
 * Copyright 2001-2005 Michael Foster (Cross-Browser.com)
 **/
function xDeprecate(funcName){var msg='DEPRECATED : '+funcName+'() is deprecated function.';if(typeof console=='object'&&typeof console.log=='function'){console.log(msg);}}
var xOp7Up,xOp6Dn,xIE4Up,xIE4,xIE5,xIE6,xNN4,xUA=navigator.userAgent.toLowerCase();if(window.opera){var i=xUA.indexOf('opera');if(i!=-1){var v=parseInt(xUA.charAt(i+6));xOp7Up=v>=7;xOp6Dn=v<7;}}
else if(navigator.vendor!='KDE'&&document.all&&xUA.indexOf('msie')!=-1){xIE4Up=parseFloat(navigator.appVersion)>=4;xIE4=xUA.indexOf('msie 4')!=-1;xIE5=xUA.indexOf('msie 5')!=-1;xIE6=xUA.indexOf('msie 6')!=-1;}
else if(document.layers){xNN4=true;}
var xMac=xUA.indexOf('mac')!=-1;var xFF=xUA.indexOf('firefox')!=-1;function xAddEventListener(e,eT,eL,cap)
{xDeprecate('xAddEventListener');if(!(e=xGetElementById(e)))return;eT=eT.toLowerCase();if((!xIE4Up&&!xOp7Up)&&e==window){if(eT=='resize'){window.xPCW=xClientWidth();window.xPCH=xClientHeight();window.xREL=eL;xResizeEvent();return;}
if(eT=='scroll'){window.xPSL=xScrollLeft();window.xPST=xScrollTop();window.xSEL=eL;xScrollEvent();return;}}
var eh='e.on'+eT+'=eL';if(e.addEventListener)e.addEventListener(eT,eL,cap);else if(e.attachEvent)e.attachEvent('on'+eT,eL);else eval(eh);}
function xResizeEvent()
{xDeprecate('xResizeEvent');if(window.xREL)setTimeout('xResizeEvent()',250);var cw=xClientWidth(),ch=xClientHeight();if(window.xPCW!=cw||window.xPCH!=ch){window.xPCW=cw;window.xPCH=ch;if(window.xREL)window.xREL();}}
function xScrollEvent()
{xDeprecate('xScrollEvent');if(window.xSEL)setTimeout('xScrollEvent()',250);var sl=xScrollLeft(),st=xScrollTop();if(window.xPSL!=sl||window.xPST!=st){window.xPSL=sl;window.xPST=st;if(window.xSEL)window.xSEL();}}
function xAppendChild(oParent,oChild)
{xDeprecate('xAppendChild');if(oParent.appendChild)return oParent.appendChild(oChild);else return null;}
function xClientHeight()
{xDeprecate('xClientHeight');var h=0;if(xOp6Dn)h=window.innerHeight;else if(document.compatMode=='CSS1Compat'&&!window.opera&&document.documentElement&&document.documentElement.clientHeight)
h=document.documentElement.clientHeight;else if(document.body&&document.body.clientHeight)
h=document.body.clientHeight;else if(xDef(window.innerWidth,window.innerHeight,document.width)){h=window.innerHeight;if(document.width>window.innerWidth)h-=16;}
return h;}
function xClientWidth()
{xDeprecate('xClientWidth');var w=0;if(xOp6Dn)w=window.innerWidth;else if(document.compatMode=='CSS1Compat'&&!window.opera&&document.documentElement&&document.documentElement.clientWidth)
w=document.documentElement.clientWidth;else if(document.body&&document.body.clientWidth)
w=document.body.clientWidth;else if(xDef(window.innerWidth,window.innerHeight,document.height)){w=window.innerWidth;if(document.height>window.innerHeight)w-=16;}
return w;}
function xCreateElement(sTag)
{xDeprecate('xCreateElement');if(document.createElement)return document.createElement(sTag);else return null;}
function xDef()
{xDeprecate('xDef');for(var i=0;i<arguments.length;++i){if(typeof(arguments[i])=='undefined')return false;}
return true;}
function xDeleteCookie(name,path)
{xDeprecate('xDeleteCookie');if(xGetCookie(name)){document.cookie=name+"="+"; path="+((!path)?"/":path)+"; expires="+new Date(0).toGMTString();}}
function xDisplay(e,s)
{xDeprecate('xDisplay');if(!(e=xGetElementById(e)))return null;if(e.style&&xDef(e.style.display)){if(xStr(s))e.style.display=s;return e.style.display;}
return null;}
function xEvent(evt)
{xDeprecate('xEvent');var e=evt||window.event;if(!e)return;if(e.type)this.type=e.type;if(e.target)this.target=e.target;else if(e.srcElement)this.target=e.srcElement;if(e.relatedTarget)this.relatedTarget=e.relatedTarget;else if(e.type=='mouseover'&&e.fromElement)this.relatedTarget=e.fromElement;else if(e.type=='mouseout')this.relatedTarget=e.toElement;if(xOp6Dn){this.pageX=e.clientX;this.pageY=e.clientY;}
else if(xDef(e.pageX,e.pageY)){this.pageX=e.pageX;this.pageY=e.pageY;}
else if(xDef(e.clientX,e.clientY)){this.pageX=e.clientX+xScrollLeft();this.pageY=e.clientY+xScrollTop();}
if(xDef(e.offsetX,e.offsetY)){this.offsetX=e.offsetX;this.offsetY=e.offsetY;}
else if(xDef(e.layerX,e.layerY)){this.offsetX=e.layerX;this.offsetY=e.layerY;}
else{this.offsetX=this.pageX-xPageX(this.target);this.offsetY=this.pageY-xPageY(this.target);}
if(e.keyCode){this.keyCode=e.keyCode;}
else if(xDef(e.which)&&e.type.indexOf('key')!=-1){this.keyCode=e.which;}
this.shiftKey=e.shiftKey;this.ctrlKey=e.ctrlKey;this.altKey=e.altKey;}
function xFirstChild(e,t)
{xDeprecate('xFirstChild');var c=e?e.firstChild:null;if(t)while(c&&c.nodeName!=t){c=c.nextSibling;}
else while(c&&c.nodeType!=1){c=c.nextSibling;}
return c;}
function xGetBodyWidth(){xDeprecate('xGetBodyWidth');var cw=xClientWidth();var sw=window.document.body.scrollWidth;return cw>sw?cw:sw;}
function xGetBodyHeight(){xDeprecate('xGetBodyHeight');var cw=xClientHeight();var sw=window.document.body.scrollHeight;return cw>sw?cw:sw;}
function xGetComputedStyle(oEle,sProp,bInt)
{xDeprecate('xGetComputedStyle');var s,p='undefined';var dv=document.defaultView;if(dv&&dv.getComputedStyle){s=dv.getComputedStyle(oEle,'');if(s)p=s.getPropertyValue(sProp);}
else if(oEle.currentStyle){var a=sProp.split('-');sProp=a[0];for(var i=1;i<a.length;++i){c=a[i].charAt(0);sProp+=a[i].replace(c,c.toUpperCase());}
p=oEle.currentStyle[sProp];}
else return null;return bInt?(parseInt(p)||0):p;}
function xGetCookie(name)
{xDeprecate('xGetCookie');var value=null,search=name+"=";if(document.cookie.length>0){var offset=document.cookie.indexOf(search);if(offset!=-1){offset+=search.length;var end=document.cookie.indexOf(";",offset);if(end==-1)end=document.cookie.length;value=unescape(document.cookie.substring(offset,end));}}
return value;}
function xGetElementById(e)
{xDeprecate('xGetElementById');if(typeof(e)!='string')return e;if(document.getElementById)e=document.getElementById(e);else if(document.all)e=document.all[e];else e=null;return e;}
function xGetElementsByAttribute(sTag,sAtt,sRE,fn)
{xDeprecate('xGetElementsByAttribute');var a,list,found=new Array(),re=new RegExp(sRE,'i');list=xGetElementsByTagName(sTag);for(var i=0;i<list.length;++i){a=list[i].getAttribute(sAtt);if(!a){a=list[i][sAtt];}
if(typeof(a)=='string'&&a.search(re)!=-1){found[found.length]=list[i];if(fn)fn(list[i]);}}
return found;}
function xGetElementsByClassName(c,p,t,f)
{xDeprecate('xGetElementsByClassName');var found=new Array();var re=new RegExp('\\b'+c+'\\b','i');var list=xGetElementsByTagName(t,p);for(var i=0;i<list.length;++i){if(list[i].className&&list[i].className.search(re)!=-1){found[found.length]=list[i];if(f)f(list[i]);}}
return found;}
function xGetElementsByTagName(t,p)
{xDeprecate('xGetElementsByTagName');var list=null;t=t||'*';p=p||document;if(xIE4||xIE5){if(t=='*')list=p.all;else list=p.all.tags(t);}
else if(p.getElementsByTagName)list=p.getElementsByTagName(t);return list||new Array();}
function xGetURLArguments()
{xDeprecate('xGetURLArguments');var idx=location.href.indexOf('?');var params=new Array();if(idx!=-1){var pairs=location.href.substring(idx+1,location.href.length).split('&');for(var i=0;i<pairs.length;i++){nameVal=pairs[i].split('=');params[i]=nameVal[1];params[nameVal[0]]=nameVal[1];}}
return params;}
function xHeight(e,h)
{xDeprecate('xHeight');if(!(e=xGetElementById(e)))return 0;if(xNum(h)){if(h<0)h=0;else h=Math.round(h);}
else h=-1;var css=xDef(e.style);if(e==document||e.tagName.toLowerCase()=='html'||e.tagName.toLowerCase()=='body'){h=xClientHeight();}
else if(css&&xDef(e.offsetHeight)&&xStr(e.style.height)){if(h>=0){var pt=0,pb=0,bt=0,bb=0;if(document.compatMode=='CSS1Compat'){var gcs=xGetComputedStyle;pt=gcs(e,'padding-top',1);if(pt!==null){pb=gcs(e,'padding-bottom',1);bt=gcs(e,'border-top-width',1);bb=gcs(e,'border-bottom-width',1);}
else if(xDef(e.offsetHeight,e.style.height)){e.style.height=h+'px';pt=e.offsetHeight-h;}}
h-=(pt+pb+bt+bb);if(isNaN(h)||h<0)return null;else e.style.height=h+'px';}
h=e.offsetHeight;}
else if(css&&xDef(e.style.pixelHeight)){if(h>=0)e.style.pixelHeight=h;h=e.style.pixelHeight;}
return h;}
function xHex(sn,digits,prefix)
{xDeprecate('xHex');var p='';var n=Math.ceil(sn);if(prefix)p=prefix;n=n.toString(16);for(var i=0;i<digits-n.length;++i){p+='0';}
return p+n;}
function xHide(e){xDeprecate('xHide');return xVisibility(e,0);}
function xInnerHtml(e,h)
{xDeprecate('xInnerHtml');if(!(e=xGetElementById(e))||!xStr(e.innerHTML))return null;var s=e.innerHTML;if(xStr(h)){e.innerHTML=h;}
return s;}
function xLeft(e,iX)
{xDeprecate('xLeft');if(!(e=xGetElementById(e)))return 0;var css=xDef(e.style);if(css&&xStr(e.style.left)){if(xNum(iX))e.style.left=iX+'px';else{iX=parseInt(e.style.left);if(isNaN(iX))iX=0;}}
else if(css&&xDef(e.style.pixelLeft)){if(xNum(iX))e.style.pixelLeft=iX;else iX=e.style.pixelLeft;}
return iX;}
function xMoveTo(e,x,y)
{xDeprecate('xMoveTo');xLeft(e,x);xTop(e,y);}
function xName(e)
{xDeprecate('xName');if(!e)return e;else if(e.id&&e.id!="")return e.id;else if(e.name&&e.name!="")return e.name;else if(e.nodeName&&e.nodeName!="")return e.nodeName;else if(e.tagName&&e.tagName!="")return e.tagName;else return e;}
function xNextSib(e,t)
{xDeprecate('xNextSib');var s=e?e.nextSibling:null;if(t)while(s&&s.nodeName!=t){s=s.nextSibling;}
else while(s&&s.nodeType!=1){s=s.nextSibling;}
return s;}
function xNum()
{xDeprecate('xNum');for(var i=0;i<arguments.length;++i){if(isNaN(arguments[i])||typeof(arguments[i])!='number')return false;}
return true;}
function xOffsetLeft(e)
{xDeprecate('xOffsetLeft');if(!(e=xGetElementById(e)))return 0;if(xDef(e.offsetLeft))return e.offsetLeft;else return 0;}
function xOffsetTop(e)
{xDeprecate('xOffsetTop');if(!(e=xGetElementById(e)))return 0;if(xDef(e.offsetTop))return e.offsetTop;else return 0;}
function xPad(s,len,c,left)
{xDeprecate('xPad');if(typeof s!='string')s=s+'';if(left){for(var i=s.length;i<len;++i)s=c+s;}
else{for(i=s.length;i<len;++i)s+=c;}
return s;}
function xPageX(e)
{xDeprecate('xPageX');if(!(e=xGetElementById(e)))return 0;var x=0;while(e){if(xDef(e.offsetLeft))x+=e.offsetLeft;e=xDef(e.offsetParent)?e.offsetParent:null;}
return x;}
function xPageY(e)
{xDeprecate('xPageY');if(!(e=xGetElementById(e)))return 0;var y=0;while(e){if(xDef(e.offsetTop))y+=e.offsetTop;e=xDef(e.offsetParent)?e.offsetParent:null;}
return y;}
function xParent(e,bNode)
{xDeprecate('xParent');if(!(e=xGetElementById(e)))return null;var p=null;if(!bNode&&xDef(e.offsetParent))p=e.offsetParent;else if(xDef(e.parentNode))p=e.parentNode;else if(xDef(e.parentElement))p=e.parentElement;return p;}
function xPreventDefault(e)
{xDeprecate('xPreventDefault');if(e&&e.preventDefault)e.preventDefault()
else if(window.event)window.event.returnValue=false;}
function xPrevSib(e,t)
{xDeprecate('xPrevSib');var s=e?e.previousSibling:null;if(t)while(s&&s.nodeName!=t){s=s.previousSibling;}
else while(s&&s.nodeType!=1){s=s.previousSibling;}
return s;}
function xRemoveEventListener(e,eT,eL,cap)
{xDeprecate('xRemoveEventListener');if(!(e=xGetElementById(e)))return;eT=eT.toLowerCase();if((!xIE4Up&&!xOp7Up)&&e==window){if(eT=='resize'){window.xREL=null;return;}
if(eT=='scroll'){window.xSEL=null;return;}}
var eh='e.on'+eT+'=null';if(e.removeEventListener)e.removeEventListener(eT,eL,cap);else if(e.detachEvent)e.detachEvent('on'+eT,eL);else eval(eh);}
function xResizeTo(e,w,h)
{xDeprecate('xResizeTo');xWidth(e,w);xHeight(e,h);}
function xScrollLeft(e,bWin)
{xDeprecate('xScrollLeft');var offset=0;if(!xDef(e)||bWin||e==document||e.tagName.toLowerCase()=='html'||e.tagName.toLowerCase()=='body'){var w=window;if(bWin&&e)w=e;if(w.document.documentElement&&w.document.documentElement.scrollLeft)offset=w.document.documentElement.scrollLeft;else if(w.document.body&&xDef(w.document.body.scrollLeft))offset=w.document.body.scrollLeft;}
else{e=xGetElementById(e);if(e&&xNum(e.scrollLeft))offset=e.scrollLeft;}
return offset;}
function xScrollTop(e,bWin)
{xDeprecate('xScrollTop');var offset=0;if(!xDef(e)||bWin||e==document||e.tagName.toLowerCase()=='html'||e.tagName.toLowerCase()=='body'){var w=window;if(bWin&&e)w=e;if(w.document.documentElement&&w.document.documentElement.scrollTop)offset=w.document.documentElement.scrollTop;else if(w.document.body&&xDef(w.document.body.scrollTop))offset=w.document.body.scrollTop;}
else{e=xGetElementById(e);if(e&&xNum(e.scrollTop))offset=e.scrollTop;}
return offset;}
function xSetCookie(name,value,expire,path)
{xDeprecate('xSetCookie');document.cookie=name+"="+escape(value)+
((!expire)?"":("; expires="+expire.toGMTString()))+"; path="+((!path)?"/":path);}
function xShow(e){xDeprecate('xShow');return xVisibility(e,1);}
function xStr(s)
{xDeprecate('xStr');for(var i=0;i<arguments.length;++i){if(typeof(arguments[i])!='string')return false;}
return true;}
function xTop(e,iY)
{xDeprecate('xTop');if(!(e=xGetElementById(e)))return 0;var css=xDef(e.style);if(css&&xStr(e.style.top)){if(xNum(iY))e.style.top=iY+'px';else{iY=parseInt(e.style.top);if(isNaN(iY))iY=0;}}
else if(css&&xDef(e.style.pixelTop)){if(xNum(iY))e.style.pixelTop=iY;else iY=e.style.pixelTop;}
return iY;}
function xVisibility(e,bShow)
{xDeprecate('xVisibility');if(!(e=xGetElementById(e)))return null;if(e.style&&xDef(e.style.visibility)){if(xDef(bShow))e.style.visibility=bShow?'visible':'hidden';return e.style.visibility;}
return null;}
function xWidth(e,w)
{xDeprecate('xWidth');if(!(e=xGetElementById(e)))return 0;if(xNum(w)){if(w<0)w=0;else w=Math.round(w);}
else w=-1;var css=xDef(e.style);if(e==document||e.tagName.toLowerCase()=='html'||e.tagName.toLowerCase()=='body'){w=xClientWidth();}
else if(css&&xDef(e.offsetWidth)&&xStr(e.style.width)){if(w>=0){var pl=0,pr=0,bl=0,br=0;if(document.compatMode=='CSS1Compat'){var gcs=xGetComputedStyle;pl=gcs(e,'padding-left',1);if(pl!==null){pr=gcs(e,'padding-right',1);bl=gcs(e,'border-left-width',1);br=gcs(e,'border-right-width',1);}
else if(xDef(e.offsetWidth,e.style.width)){e.style.width=w+'px';pl=e.offsetWidth-w;}}
w-=(pl+pr+bl+br);if(isNaN(w)||w<0)return null;else e.style.width=w+'px';}
w=e.offsetWidth;}
else if(css&&xDef(e.style.pixelWidth)){if(w>=0)e.style.pixelWidth=w;w=e.style.pixelWidth;}
return w;}
function xZIndex(e,uZ)
{xDeprecate('xZIndex');if(!(e=xGetElementById(e)))return 0;if(e.style&&xDef(e.style.zIndex)){if(xNum(uZ))e.style.zIndex=uZ;uZ=parseInt(e.style.zIndex);}
return uZ;}
function xStopPropagation(evt)
{xDeprecate('xStopPropagation');if(evt&&evt.stopPropagation)evt.stopPropagation();else if(window.event)window.event.cancelBubble=true;}
/* file: ./common/js/common.js */
/**
 * @file common.js
 * @author NHN (developers@xpressengine.com)
 * @brief 몇가지 유용한 & 기본적으로 자주 사용되는 자바스크립트 함수들 모음
 **/

if(jQuery)jQuery.noConflict();(function($){var UA=navigator.userAgent.toLowerCase();$.os={Linux:/linux/.test(UA),Unix:/x11/.test(UA),Mac:/mac/.test(UA),Windows:/win/.test(UA)};$.os.name=($.os.Windows)?'Windows':($.os.Linux)?'Linux':($.os.Unix)?'Unix':($.os.Mac)?'Mac':'';window.XE={loaded_popup_menus:new Array(),addedDocument:new Array(),checkboxToggleAll:function(){var itemName='cart';var options={wrap:null,checked:'toggle',doClick:false};switch(arguments.length){case 1:if(typeof(arguments[0])=="string"){itemName=arguments[0];}else{$.extend(options,arguments[0]||{});}
break;case 2:itemName=arguments[0];$.extend(options,arguments[1]||{});}
if(options.doClick==true)options.checked=null;if(typeof(options.wrap)=="string")options.wrap='#'+options.wrap;if(options.wrap){var obj=$(options.wrap).find('input[name='+itemName+']:checkbox');}else{var obj=$('input[name='+itemName+']:checkbox');}
if(options.checked=='toggle'){obj.each(function(){$(this).attr('checked',($(this).attr('checked'))?false:true);});}else{(options.doClick==true)?obj.click():obj.attr('checked',options.checked);}},displayPopupMenu:function(ret_obj,response_tags,params){var target_srl=params["target_srl"];var menu_id=params["menu_id"];var menus=ret_obj['menus'];var html="";if(this.loaded_popup_menus[menu_id]){html=this.loaded_popup_menus[menu_id];}else{if(menus){var item=menus['item'];if(typeof(item.length)=='undefined'||item.length<1)item=new Array(item);if(item.length){for(var i=0;i<item.length;i++){var url=item[i].url;var str=item[i].str;var icon=item[i].icon;var target=item[i].target;var styleText="";var click_str="";if(icon)styleText=" style=\"background-image:url('"+icon+"')\" ";switch(target){case"popup":click_str=" onclick=\"popopen(this.href,'"+target+"'); return false;\"";break;case"self":break;case"javascript":click_str=" onclick=\""+url+"; return false; \"";url="#";break;default:click_str=" onclick=\"window.open(this.href); return false;\"";break;}
html+='<li '+styleText+'><a href="'+url+'"'+click_str+'>'+str+'</a></li> ';}}}
this.loaded_popup_menus[menu_id]=html;}
if(html){var area=$('#popup_menu_area').html('<ul>'+html+'</ul>');var areaOffset={top:params['page_y'],left:params['page_x']};if(area.outerHeight()+areaOffset.top>$(window).height()+$(window).scrollTop())
areaOffset.top=$(window).height()-area.outerHeight()+$(window).scrollTop();if(area.outerWidth()+areaOffset.left>$(window).width()+$(window).scrollLeft())
areaOffset.left=$(window).width()-area.outerWidth()+$(window).scrollLeft();area.css({top:areaOffset.top,left:areaOffset.left}).show();}}}})(jQuery);jQuery(function($){if(!$('#popup_menu_area').length){var menuObj=$('<div>').attr('id','popup_menu_area').css({display:'none',zIndex:9999});$(document.body).append(menuObj);}
$(document).click(function(evt){var area=$('#popup_menu_area');if(!area.length)return;area.hide();var targetObj=$(evt.target);if(!targetObj.length)return;if(targetObj.length&&$.inArray(targetObj.attr('nodeName'),['DIV','SPAN','A'])==-1)targetObj=targetObj.parent();if(!targetObj.length||$.inArray(targetObj.attr('nodeName'),['DIV','SPAN','A'])==-1)return;var class_name=targetObj.attr('className');if(class_name.indexOf('_')<=0)return;var class_name_list=class_name.split(' ');var menu_id='';var menu_id_regx=/^([a-zA-Z]+)_([0-9]+)$/;for(var i=0,c=class_name_list.length;i<c;i++){if(menu_id_regx.test(class_name_list[i])){menu_id=class_name_list[i];}}
if(!menu_id)return;var tmp_arr=menu_id.split('_');var module_name=tmp_arr[0];var target_srl=tmp_arr[1];if(!module_name||!target_srl||target_srl<1)return;var action_name="get"+module_name.substr(0,1).toUpperCase()+module_name.substr(1,module_name.length-1)+"Menu";var params=new Array();params["target_srl"]=target_srl;params["mid"]=params["cur_mid"]=current_mid;params["cur_act"]=current_url.getQuery('act');params["menu_id"]=menu_id;params["page_x"]=evt.pageX;params["page_y"]=evt.pageY;if(typeof(xeVid)!='undefined')params["vid"]=xeVid;var response_tags=new Array("error","message","menus");if(typeof(XE.loaded_popup_menus[menu_id])!='undefined'){XE.displayPopupMenu(params,response_tags,params);return;}
show_waiting_message=false;exec_xml(module_name,action_name,params,XE.displayPopupMenu,response_tags,params);show_waiting_message=true;});if($.browser.msie){$('select').each(function(i,sels){var disabled_exists=false;var first_enable=new Array();for(var j=0;j<sels.options.length;j++){if(sels.options[j].disabled){sels.options[j].style.color='#CCCCCC';disabled_exists=true;}else{first_enable[i]=(first_enable[i]>-1)?first_enable[i]:j;}}
if(!disabled_exists)return;sels.oldonchange=sels.onchange;sels.onchange=function(){if(this.options[this.selectedIndex].disabled){this.selectedIndex=first_enable[i];}else{if(this.oldonchange)this.oldonchange();}};if(sels.selectedIndex>=0&&sels.options[sels.selectedIndex].disabled)sels.onchange();});}
var drEditorFold=$('.xe_content .fold_button');if(drEditorFold.size()){var fold_container=$('div.fold_container',drEditorFold);$('button.more',drEditorFold).click(function(){$(this).hide().next('button').show().parent().next(fold_container).show();});$('button.less',drEditorFold).click(function(){$(this).hide().prev('button').show().parent().next(fold_container).hide();});}});String.prototype.getQuery=function(key){var idx=this.indexOf('?');if(idx==-1)return null;var query_string=this.substr(idx+1,this.length);var args={};query_string.replace(/([^=]+)=([^&]*)(&|$)/g,function(){args[arguments[1]]=arguments[2];});var q=args[key];if(typeof(q)=="undefined")q="";return q;}
String.prototype.setQuery=function(key,val){var idx=this.indexOf('?');var uri=this;uri=uri.replace(/#$/,'');if(idx!=-1){uri=this.substr(0,idx);var query_string=this.substr(idx+1,this.length);var args=new Array();query_string.replace(/([^=]+)=([^&]*)(&|$)/g,function(){args[arguments[1]]=arguments[2];});args[key]=val;var q_list=new Array();for(var i in args){if(!args.hasOwnProperty(i))continue;var arg=args[i];if(!arg.toString().trim())continue;arg=decodeURI(arg);q_list[q_list.length]=i+'='+arg;}
uri=uri+"?"+q_list.join("&");}else{if(val.toString().trim())uri=uri+"?"+key+"="+val;}
var re=/https:\/\/([^:\/]+)(:\d+|)/i;var check=re.exec(uri);if(check)
{var toReplace="http://"+check[1];if(typeof(http_port)!='undefined'&&http_port!=80)
{toReplace+=":"+http_port;}
uri=uri.replace(re,toReplace);}
var bUseSSL=false;if(typeof(enforce_ssl)!='undefined'&&enforce_ssl)
{bUseSSL=true;}
else if(typeof(ssl_actions)!='undefined'&&typeof(ssl_actions.length)!='undefined'&&uri.getQuery('act')){var act=uri.getQuery('act');for(i=0;i<ssl_actions.length;i++){if(ssl_actions[i]==act){bUseSSL=true;break;}}}
if(bUseSSL)
{var re=/http:\/\/([^:\/]+)(:\d+|)/i;var check=re.exec(uri);if(check)
{var toReplace="https://"+check[1];if(typeof(https_port)!='undefined'&&https_port!=443)
{toReplace+=":"+https_port;}
uri=uri.replace(re,toReplace);}}
return encodeURI(uri);}
String.prototype.trim=function(){return this.replace(/(^\s*)|(\s*$)/g,"");}
function xSleep(sec){sec=sec/1000;var now=new Date();var sleep=new Date();while(sleep.getTime()-now.getTime()<sec){sleep=new Date();}}
function isDef(){for(var i=0;i<arguments.length;++i){if(typeof(arguments[i])=="undefined")return false;}
return true;}
var winopen_list=new Array();function winopen(url,target,attribute){if(typeof(xeVid)!='undefined'&&url.indexOf(request_uri)>-1&&!url.getQuery('vid'))url=url.setQuery('vid',xeVid);try{if(target!="_blank"&&winopen_list[target]){winopen_list[target].close();winopen_list[target]=null;}}catch(e){}
if(typeof(target)=='undefined')target='_blank';if(typeof(attribute)=='undefined')attribute='';var win=window.open(url,target,attribute);win.focus();if(target!="_blank")winopen_list[target]=win;}
function popopen(url,target){if(typeof(target)=="undefined")target="_blank";if(typeof(xeVid)!='undefined'&&url.indexOf(request_uri)>-1&&!url.getQuery('vid'))url=url.setQuery('vid',xeVid);winopen(url,target,"left=0,top=0,width="+(screen.width-20)+",height="+(screen.height-100)+",scrollbars=no,resizable=yes,toolbars=no");}
function sendMailTo(to){location.href="mailto:"+to;}
function move_url(url,open_wnidow){if(!url)return false;if(typeof(open_wnidow)=='undefined')open_wnidow='N';if(open_wnidow=='N'){open_wnidow=false;}else{open_wnidow=true;}
if(/^\./.test(url))url=request_uri+url;if(open_wnidow){winopen(url);}else{location.href=url;}
return false;}
function displayMultimedia(src,width,height,options){var html=_displayMultimedia(src,width,height,options);if(html)document.writeln(html);}
function _displayMultimedia(src,width,height,options){if(src.indexOf('files')==0)src=request_uri+src;var defaults={wmode:'transparent',allowScriptAccess:'sameDomain',quality:'high',flashvars:'',autostart:false};var params=jQuery.extend(defaults,options||{});var autostart=(params.autostart&&params.autostart!='false')?'true':'false';delete(params.autostart);var clsid="";var codebase="";var html="";if(/\.(gif|jpg|jpeg|bmp|png)$/i.test(src)){html='<img src="'+src+'" width="'+width+'" height="'+height+'" />';}else if(/\.flv$/i.test(src)||/\.mov$/i.test(src)||/\.moov$/i.test(src)||/\.m4v$/i.test(src)){html='<embed src="'+request_uri+'common/tpl/images/flvplayer.swf" allowfullscreen="true" autostart="'+autostart+'" width="'+width+'" height="'+height+'" flashvars="&file='+src+'&width='+width+'&height='+height+'&autostart='+autostart+'" wmode="'+params.wmode+'" />';}else if(/\.swf/i.test(src)){clsid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000';if(typeof(enforce_ssl)!='undefined'&&enforce_ssl){codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0";}
else{codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0";}
html='<object classid="'+clsid+'" codebase="'+codebase+'" width="'+width+'" height="'+height+'" flashvars="'+params.flashvars+'">';html+='<param name="movie" value="'+src+'" />';for(var name in params){if(params[name]!='undefined'&&params[name]!=''){html+='<param name="'+name+'" value="'+params[name]+'" />';}}
html+=''
+'<embed src="'+src+'" autostart="'+autostart+'"  width="'+width+'" height="'+height+'" flashvars="'+params.flashvars+'" wmode="'+params.wmode+'"></embed>'
+'</object>';}else{if(jQuery.browser.mozilla||jQuery.browser.opera){autostart=(params.autostart&&params.autostart!='false')?'1':'0';}
html='<embed src="'+src+'" autostart="'+autostart+'" width="'+width+'" height="'+height+'"';if(params.wmode=='transparent'){html+=' windowlessvideo="1"';}
html+='></embed>';}
return html;}
function zbxe_folder_open(id){jQuery("#folder_open_"+id).hide();jQuery("#folder_close_"+id).show();jQuery("#folder_"+id).show();}
function zbxe_folder_close(id){jQuery("#folder_open_"+id).show();jQuery("#folder_close_"+id).hide();jQuery("#folder_"+id).hide();}
function setFixedPopupSize(){var $=jQuery;var $header=$('#popHeader');var $body=$('#popBody');if($body.length){if($body.height()>400){$body.css({overflow:'auto',overflowX:'hidden'});}}
var $win=$(window);var $pc=$('#popup_content');var w=Math.max($pc[0].offsetWidth,600);var h=$pc[0].offsetHeight;var dw=$win.width();var dh=$win.height();var _w=0,_h=0;if(w!=dw)_w=w-dw;if(h!=dh)_h=h-dh;if(_w||_h){window.resizeBy(_w,_h);}
if(!arguments.callee.executed){setTimeout(setFixedPopupSize,300);arguments.callee.executed=true;}}
function doCallModuleAction(module,action,target_srl){var params=new Array();params['target_srl']=target_srl;params['cur_mid']=current_mid;exec_xml(module,action,params,completeCallModuleAction);}
function completeCallModuleAction(ret_obj,response_tags){if(ret_obj['message']!='success')alert(ret_obj['message']);location.reload();}
function completeMessage(ret_obj){alert(ret_obj['message']);location.reload();}
function doChangeLangType(obj){if(typeof(obj)=="string"){setLangType(obj);}else{var val=obj.options[obj.selectedIndex].value;setLangType(val);}
location.reload();}
function setLangType(lang_type){var expire=new Date();expire.setTime(expire.getTime()+(7000*24*3600000));xSetCookie('lang_type',lang_type,expire,'/');}
function doDocumentPreview(obj){var fo_obj=obj;while(fo_obj.nodeName!="FORM"){fo_obj=fo_obj.parentNode;}
if(fo_obj.nodeName!="FORM")return;var editor_sequence=fo_obj.getAttribute('editor_sequence');var content=editorGetContent(editor_sequence);var win=window.open("","previewDocument","toolbars=no,width=700px;height=800px,scrollbars=yes,resizable=yes");var dummy_obj=jQuery("#previewDocument");if(!dummy_obj.length){jQuery('<form id="previewDocument" target="previewDocument" method="post" action="'+request_uri+'">'+'<input type="hidden" name="module" value="document" />'+'<input type="hidden" name="act" value="dispDocumentPreview" />'+'<input type="hidden" name="content" />'+'</form>').appendTo(document.body);dummy_obj=jQuery("#previewDocument")[0];}
if(dummy_obj){dummy_obj.content.value=content;dummy_obj.submit();}}
function doDocumentSave(obj){var editor_sequence=obj.form.getAttribute('editor_sequence');var prev_content=editorRelKeys[editor_sequence]['content'].value;if(typeof(editor_sequence)!='undefined'&&editor_sequence&&typeof(editorRelKeys)!='undefined'&&typeof(editorGetContent)=='function'){var content=editorGetContent(editor_sequence);editorRelKeys[editor_sequence]['content'].value=content;}
var params={},responses=['error','message','document_srl'],elms=obj.form.elements,data=jQuery(obj.form).serializeArray();;jQuery.each(data,function(i,field){var val=jQuery.trim(field.value);if(!val)return true;if(/\[\]$/.test(field.name))field.name=field.name.replace(/\[\]$/,'');if(params[field.name])params[field.name]+='|@|'+val;else params[field.name]=field.value;});exec_xml('member','procMemberSaveDocument',params,completeDocumentSave,responses,params,obj.form);editorRelKeys[editor_sequence]['content'].value=prev_content;return false;}
function completeDocumentSave(ret_obj){jQuery('input[name=document_srl]').eq(0).val(ret_obj['document_srl']);alert(ret_obj['message']);}
var objForSavedDoc=null;function doDocumentLoad(obj){objForSavedDoc=obj.form;popopen(request_uri.setQuery('module','member').setQuery('act','dispSavedDocumentList'));}
function doDocumentSelect(document_srl){if(!opener||!opener.objForSavedDoc){window.close();return;}
opener.location.href=opener.current_url.setQuery('document_srl',document_srl).setQuery('act','dispBoardWrite');window.close();}
function viewSkinInfo(module,skin){popopen("./?module=module&act=dispModuleSkinInfo&selected_module="+module+"&skin="+skin,'SkinInfo');}
var addedDocument=new Array();function doAddDocumentCart(obj){var srl=obj.value;addedDocument[addedDocument.length]=srl;setTimeout(function(){callAddDocumentCart(addedDocument.length);},100);}
function callAddDocumentCart(document_length){if(addedDocument.length<1||document_length!=addedDocument.length)return;var params=new Array();params["srls"]=addedDocument.join(",");exec_xml("document","procDocumentAddCart",params,null);addedDocument=new Array();}
function transRGB2Hex(value){if(!value)return value;if(value.indexOf('#')>-1)return value.replace(/^#/,'');if(value.toLowerCase().indexOf('rgb')<0)return value;value=value.replace(/^rgb\(/i,'').replace(/\)$/,'');value_list=value.split(',');var hex='';for(var i=0;i<value_list.length;i++){var color=parseInt(value_list[i],10).toString(16);if(color.length==1)color='0'+color;hex+=color;}
return hex;}
function toggleSecuritySignIn(){var href=location.href;if(/https:\/\//i.test(href))location.href=href.replace(/^https/i,'http');else location.href=href.replace(/^http/i,'https');}
function reloadDocument(){location.reload();}
var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(input){var output="";var chr1,chr2,chr3,enc1,enc2,enc3,enc4;var i=0;input=Base64._utf8_encode(input);while(i<input.length){chr1=input.charCodeAt(i++);chr2=input.charCodeAt(i++);chr3=input.charCodeAt(i++);enc1=chr1>>2;enc2=((chr1&3)<<4)|(chr2>>4);enc3=((chr2&15)<<2)|(chr3>>6);enc4=chr3&63;if(isNaN(chr2)){enc3=enc4=64;}else if(isNaN(chr3)){enc4=64;}
output=output+
this._keyStr.charAt(enc1)+this._keyStr.charAt(enc2)+
this._keyStr.charAt(enc3)+this._keyStr.charAt(enc4);}
return output;},decode:function(input){var output="";var chr1,chr2,chr3;var enc1,enc2,enc3,enc4;var i=0;input=input.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(i<input.length){enc1=this._keyStr.indexOf(input.charAt(i++));enc2=this._keyStr.indexOf(input.charAt(i++));enc3=this._keyStr.indexOf(input.charAt(i++));enc4=this._keyStr.indexOf(input.charAt(i++));chr1=(enc1<<2)|(enc2>>4);chr2=((enc2&15)<<4)|(enc3>>2);chr3=((enc3&3)<<6)|enc4;output=output+String.fromCharCode(chr1);if(enc3!=64){output=output+String.fromCharCode(chr2);}
if(enc4!=64){output=output+String.fromCharCode(chr3);}}
output=Base64._utf8_decode(output);return output;},_utf8_encode:function(string){string=string.replace(/\r\n/g,"\n");var utftext="";for(var n=0;n<string.length;n++){var c=string.charCodeAt(n);if(c<128){utftext+=String.fromCharCode(c);}
else if((c>127)&&(c<2048)){utftext+=String.fromCharCode((c>>6)|192);utftext+=String.fromCharCode((c&63)|128);}
else{utftext+=String.fromCharCode((c>>12)|224);utftext+=String.fromCharCode(((c>>6)&63)|128);utftext+=String.fromCharCode((c&63)|128);}}
return utftext;},_utf8_decode:function(utftext){var string="";var i=0;var c=c1=c2=0;while(i<utftext.length){c=utftext.charCodeAt(i);if(c<128){string+=String.fromCharCode(c);i++;}
else if((c>191)&&(c<224)){c2=utftext.charCodeAt(i+1);string+=String.fromCharCode(((c&31)<<6)|(c2&63));i+=2;}
else{c2=utftext.charCodeAt(i+1);c3=utftext.charCodeAt(i+2);string+=String.fromCharCode(((c&15)<<12)|((c2&63)<<6)|(c3&63));i+=3;}}
return string;}}
if(typeof(resizeImageContents)=='undefined'){function resizeImageContents(){}}
if(typeof(activateOptionDisabled)=='undefined'){function activateOptionDisabled(){}}
objectExtend=jQuery.extend;function toggleDisplay(objId){jQuery('#'+objId).toggle();}
function checkboxSelectAll(formObj,name,checked){var itemName=name;var option={};if(typeof(formObj)!="undefined")option.wrap=formObj;if(typeof(checked)!="undefined")option.checked=checked;XE.checkboxToggleAll(itemName,option);}
function clickCheckBoxAll(formObj,name){var itemName=name;var option={doClick:true};if(typeof(formObj)!="undefined")option.wrap=formObj;XE.checkboxToggleAll(itemName,option);}
function svc_folder_open(id){jQuery("#_folder_open_"+id).hide();jQuery("#_folder_close_"+id).show();jQuery("#_folder_"+id).show();}
function svc_folder_close(id){jQuery("#_folder_open_"+id).show();jQuery("#_folder_close_"+id).hide();jQuery("#_folder_"+id).hide();}
function open_calendar(fo_id,day_str,callback_func){if(typeof(day_str)=="undefined")day_str="";var url="./common/tpl/calendar.php?";if(fo_id)url+="fo_id="+fo_id;if(day_str)url+="&day_str="+day_str;if(callback_func)url+="&callback_func="+callback_func;popopen(url,'Calendar');}
var loaded_popup_menus=XE.loaded_popup_menus;function createPopupMenu(){}
function chkPopupMenu(){}
function displayPopupMenu(ret_obj,response_tags,params){XE.displayPopupMenu(ret_obj,response_tags,params);}
function GetObjLeft(obj){return jQuery(obj).offset().left;}
function GetObjTop(obj){return jQuery(obj).offset().top;}
function replaceOuterHTML(obj,html){jQuery(obj).replaceWith(html);}
function getOuterHTML(obj){return jQuery(obj).html().trim();}
jQuery(function(){jQuery(".lang_code").each(function()
{var objText=jQuery(this);var targetName=objText.attr("id");if(typeof(targetName)=="undefined")targetName=objText.attr("name");if(typeof(targetName)=="undefined")return;objText.after("<a href='"+request_uri.setQuery('module','module').setQuery('act','dispModuleAdminLangcode').setQuery('target',targetName)+"' class='buttonSet buttonSetting' onclick='popopen(this.href);return false;'><span>find_langcode</span></a>");});});
/* file: ./common/js/js_app.js */
/**
 * @file js_app.js
 * @author NHN (developers@xpressengine.com)
 * @brief XE JavaScript Application Framework (JAF)
 * @namespace xe
 * @update 20100701
 */

(function($){var _xe_base,_app_base,_plugin_base;var _apps=[];_xe_base={getName:function(){return'Core';},createApp:function(sName,oDef){var _base=getTypeBase();$.extend(_base.prototype,_app_base,oDef);_base.prototype.getName=function(){return sName;};return _base;},createPlugin:function(sName,oDef){var _base=getTypeBase();$.extend(_base.prototype,_plugin_base,oDef);_base.prototype.getName=function(){return sName;};return _base;},getApps:function(){return $.makeArray(_apps);},getApp:function(indexOrName){indexOrName=(indexOrName||'').toLowerCase();if(typeof _apps[indexOrName]!='undefined'){return _apps[indexOrName];}else{return null;}},registerApp:function(oApp){var sName=oApp.getName().toLowerCase();_apps.push(oApp);if(!$.isArray(_apps[sName])){_apps[sName]=[];}
_apps[sName].push(oApp);oApp.parent=this;if($.isFunction(oApp.activate))oApp.activate();},unregisterApp:function(oApp){var sName=oPlugin.getName().toLowerCase();var nIndex=$.inArray(oApp,_apps);if(nIndex>=0)_apps.splice(nIndex,1);if($.isArray(_apps[sName])){nIndex=$.inArray(oApp,_apps[sName]);if(nIndex>=0)_apps[sName].splice(nIndex,1);}
if($.isFunction(oApp.deactivate))oApp.deactivate();},broadcast:function(msg,params){this._broadcast(this,msg,params);},_broadcast:function(sender,msg,params){for(var i=0;i<_apps.length;i++){_apps[i]._cast(sender,msg,params);}
this._cast(sender,msg,params);}}
_app_base={_plugins:[],_messages:{},getPlugin:function(sPluginName){sPluginName=sPluginName.toLowerCase();if($.isArray(this._plugins[sPluginName])){return this._plugins[sPluginName];}else{return[];}},registerPlugin:function(oPlugin){var self=this;var sName=oPlugin.getName().toLowerCase();if($.inArray(oPlugin,this._plugins)>=0)return false;this._plugins.push(oPlugin);if(!$.isArray(this._plugins[sName]))this._plugins[sName]=[];this._plugins[sName].push(oPlugin);$.each(oPlugin._binded_fn,function(api,fn){self.registerHandler(api,fn);});oPlugin.oApp=this;if($.isFunction(oPlugin.activate))oPlugin.activate();return true;},registerHandler:function(api,func){var msgs=this._messages;api=api.toUpperCase();if(!$.isArray(msgs[api]))msgs[api]=[];msgs[api].push(func);},cast:function(msg,params){return this._cast(this,msg,params||[]);},broadcast:function(sender,msg,params){if(this.parent&&this.parent._broadcast){this.parent._broadcast(sender,msg,params);}},_cast:function(sender,msg,params){var i,len;var aMsg=this._messages;msg=msg.toUpperCase();if(aMsg['BEFORE_'+msg]||this['API_BEFORE_'+msg]){var bContinue=this._cast(sender,'BEFORE_'+msg,params);if(!bContinue)return;}
var vRet=[],sFn='API_'+msg;if($.isArray(aMsg[msg])){for(i=0;i<aMsg[msg].length;i++){vRet.push(aMsg[msg][i](sender,params));}}
if(vRet.length<2)vRet=vRet[0];if(aMsg['AFTER_'+msg]||this['API_AFTER_'+msg]){this._cast(sender,'AFTER_'+msg,params);}
if(!/^(?:AFTER|BEFORE)_/.test(msg)){return vRet;}else{return $.isArray(vRet)?($.inArray(false,vRet)<0):((typeof vRet=='undefined')?true:!!vRet);}}};_plugin_base={oApp:null,cast:function(msg,params){if(this.oApp&&this.oApp._cast){return this.oApp._cast(this,msg,params||[]);}},broadcast:function(msg,params){if(this.oApp&&this.oApp.broadcast){this.oApp.broadcast(this,mag,params||[]);}}};function getTypeBase(){var _base=function(){var self=this;var pool=null;if($.isArray(this._plugins))this._plugins=[];if(this._messages)this._messages={};else this._binded_fn={};$.each(this,function(key,val){if(!$.isFunction(val))return true;if(!/^API_([A-Z0-9_]+)$/.test(key))return true;var api=RegExp.$1;var fn=function(sender,params){return self[key](sender,params)};if(self._messages)self._messages[api]=[fn];else self._binded_fn[api]=fn;});if($.isFunction(this.init))this.init.apply(this,arguments);};return _base;}
window.xe=$.extend(_app_base,_xe_base);window.xe.lang={};$(function(){xe.broadcast('ONREADY');});$(window).load(function(){xe.broadcast('ONLOAD');});})(jQuery);
/* file: ./common/js/xml_handler.js */
/**
 * @file   common/js/xml_handler.js
 * @brief  XE에서 ajax기능을 이용함에 있어 module, act를 잘 사용하기 위한 자바스크립트
 **/
var show_waiting_message=true;function xml2json(xml,tab,ignoreAttrib){var X={toObj:function(xml){var o={};if(xml.nodeType==1){if(ignoreAttrib&&xml.attributes.length)
for(var i=0;i<xml.attributes.length;i++)
o["@"+xml.attributes[i].nodeName]=(xml.attributes[i].nodeValue||"").toString();if(xml.firstChild){var textChild=0,cdataChild=0,hasElementChild=false;for(var n=xml.firstChild;n;n=n.nextSibling){if(n.nodeType==1)hasElementChild=true;else if(n.nodeType==3&&n.nodeValue.match(/[^ \f\n\r\t\v]/))textChild++;else if(n.nodeType==4)cdataChild++;}
if(hasElementChild){if(textChild<2&&cdataChild<2){X.removeWhite(xml);for(var n=xml.firstChild;n;n=n.nextSibling){if(n.nodeType==3)
o=X.escape(n.nodeValue);else if(n.nodeType==4)
o=X.escape(n.nodeValue);else if(o[n.nodeName]){if(o[n.nodeName]instanceof Array)
o[n.nodeName][o[n.nodeName].length]=X.toObj(n);else
o[n.nodeName]=[o[n.nodeName],X.toObj(n)];}
else
o[n.nodeName]=X.toObj(n);}}
else{if(!xml.attributes.length)
o=X.escape(X.innerXml(xml));else
o["#text"]=X.escape(X.innerXml(xml));}}
else if(textChild){if(!xml.attributes.length)
o=X.escape(X.innerXml(xml));else
o["#text"]=X.escape(X.innerXml(xml));}
else if(cdataChild){if(cdataChild>1)
o=X.escape(X.innerXml(xml));else
for(var n=xml.firstChild;n;n=n.nextSibling){o=X.escape(n.nodeValue);}}}
if(!xml.attributes.length&&!xml.firstChild)o=null;}
else if(xml.nodeType==9){o=X.toObj(xml.documentElement);}
else
alert("unhandled node type: "+xml.nodeType);return o;},toJson:function(o,name,ind){var json=name?("\""+name+"\""):"";if(o instanceof Array){for(var i=0,n=o.length;i<n;i++)
o[i]=X.toJson(o[i],"",ind+"\t");json+=(name?":[":"[")+(o.length>1?("\n"+ind+"\t"+o.join(",\n"+ind+"\t")+"\n"+ind):o.join(""))+"]";}
else if(o==null)
json+=(name&&":")+"null";else if(typeof(o)=="object"){var arr=[];for(var m in o)
arr[arr.length]=X.toJson(o[m],m,ind+"\t");json+=(name?":{":"{")+(arr.length>1?("\n"+ind+"\t"+arr.join(",\n"+ind+"\t")+"\n"+ind):arr.join(""))+"}";}
else if(typeof(o)=="string")
json+=(name&&":")+"\""+o.toString()+"\"";else
json+=(name&&":")+o.toString();return json;},innerXml:function(node){var s=""
if("innerHTML"in node)
s=node.innerHTML;else{var asXml=function(n){var s="";if(n.nodeType==1){s+="<"+n.nodeName;for(var i=0;i<n.attributes.length;i++)
s+=" "+n.attributes[i].nodeName+"=\""+(n.attributes[i].nodeValue||"").toString()+"\"";if(n.firstChild){s+=">";for(var c=n.firstChild;c;c=c.nextSibling)
s+=asXml(c);s+="</"+n.nodeName+">";}
else
s+="/>";}
else if(n.nodeType==3)
s+=n.nodeValue;else if(n.nodeType==4)
s+="<![CDATA["+n.nodeValue+"]]>";return s;};for(var c=node.firstChild;c;c=c.nextSibling)
s+=asXml(c);}
return s;},escape:function(txt){return txt.replace(/[\\]/g,"\\\\").replace(/[\"]/g,'\\"').replace(/[\n]/g,'\\n').replace(/[\r]/g,'\\r');},removeWhite:function(e){e.normalize();for(var n=e.firstChild;n;){if(n.nodeType==3){if(!n.nodeValue.match(/[^ \f\n\r\t\v]/)){var nxt=n.nextSibling;e.removeChild(n);n=nxt;}
else
n=n.nextSibling;}
else if(n.nodeType==1){X.removeWhite(n);n=n.nextSibling;}
else
n=n.nextSibling;}
return e;}};if(xml.nodeType==9)
xml=xml.documentElement;var json_obj=X.toObj(X.removeWhite(xml)),json_str;if(typeof(JSON)=='object'&&jQuery.isFunction(JSON.stringify)&&false){var obj={};obj[xml.nodeName]=json_obj;json_str=JSON.stringify(obj);return json_str;}else{json_str=X.toJson(json_obj,xml.nodeName,"");return"{"+(tab?json_str.replace(/\t/g,tab):json_str.replace(/\t|\n/g,""))+"}";}}
(function($){$.exec_xml=window.exec_xml=function(module,act,params,callback_func,response_tags,callback_func_arg,fo_obj){var xml_path=request_uri+"index.php"
if(!params)params={};if($.isArray(params))params=arr2obj(params);params['module']=module;params['act']=act;if(typeof(xeVid)!='undefined')params['vid']=xeVid;if(typeof(response_tags)=="undefined"||response_tags.length<1)response_tags=['error','message'];else{response_tags.push('error','message');}
if($.isArray(ssl_actions)&&params['act']&&$.inArray(params['act'],ssl_actions)>=0)
{var url=default_url||request_uri;var port=window.https_port||443;var _ul=$('<a>').attr('href',url)[0];var target='https://'+_ul.hostname.replace(/:\d+$/,'');if(port!=443)target+=':'+port;if(_ul.pathname[0]!='/')target+='/';target+=_ul.pathname;xml_path=target.replace(/\/$/,'')+'/index.php';}
var _u1=$('<a>').attr('href',location.href)[0];var _u2=$('<a>').attr('href',xml_path)[0];if(_u1.protocol!=_u2.protocol||_u1.port!=_u2.port)return send_by_form(xml_path,params);var xml=[],i=0;xml[i++]='<?xml version="1.0" encoding="utf-8" ?>';xml[i++]='<methodCall>';xml[i++]='<params>';$.each(params,function(key,val){xml[i++]='<'+key+'><![CDATA['+val+']]></'+key+'>';});xml[i++]='</params>';xml[i++]='</methodCall>';var _xhr=null;if(_xhr&&_xhr.readyState!=0)_xhr.abort();function onsuccess(data,textStatus,xhr){var resp_xml=$(data).find('response')[0],resp_obj,txt='',ret=[],tags={},json_str='';waiting_obj.css('visibility','hidden');if(!resp_xml){alert(_xhr.responseText);return null;}
json_str=xml2json(resp_xml,false,false);resp_obj=(typeof(JSON)=='object'&&$.isFunction(JSON.parse))?JSON.parse(json_str):eval('('+json_str+')');resp_obj=resp_obj.response;if(typeof(resp_obj)=='undefined'){ret['error']=-1;ret['message']='Unexpected error occured.';try{if(typeof(txt=resp_xml.childNodes[0].firstChild.data)!='undefined')ret['message']+='\r\n'+txt;}catch(e){};return ret;}
$.each(response_tags,function(key,val){tags[val]=true;});tags["redirect_url"]=true;tags["act"]=true;$.each(resp_obj,function(key,val){if(tags[key])ret[key]=val;});if(ret['error']!=0){if($.isFunction($.exec_xml.onerror)){return $.exec_xml.onerror(module,act,ret,callback_func,response_tags,callback_func_arg,fo_obj);}
alert(ret['message']||'error!');return null;}
if(ret['redirect_url']){location.href=ret['redirect_url'].replace(/&amp;/g,'&');return null;}
if($.isFunction(callback_func))callback_func(ret,response_tags,callback_func_arg,fo_obj);}
try{$.ajax({url:xml_path,type:'POST',dataType:'xml',data:xml.join('\n'),contentType:'text/plain',beforeSend:function(xhr){_xhr=xhr;},success:onsuccess,error:function(xhr,textStatus){waiting_obj.css('visibility','hidden');var msg='';if(textStatus=='parsererror'){msg='The result is not valid XML :\n-------------------------------------\n';if(xhr.responseText=="")return;msg+=xhr.responseText.replace(/<[^>]+>/g,'');}else{msg=textStatus;}
alert(msg);}});}catch(e){alert(e);return;}
var waiting_obj=$('#waitingforserverresponse');if(show_waiting_message&&waiting_obj.length){var d=$(document);waiting_obj.html(waiting_message).css({'top':(d.scrollTop()+20)+'px','left':(d.scrollLeft()+20)+'px','visibility':'visible'});}}
function send_by_form(url,params){var frame_id='xeTmpIframe';var form_id='xeVirtualForm';if(!$('#'+frame_id).length){$('<iframe name="%id%" id="%id%" style="position:absolute;left:-1px;top:1px;width:1px;height:1px"></iframe>'.replace(/%id%/g,frame_id)).appendTo(document.body);}
$('#'+form_id).remove();var form=$('<form id="%id%"></form>'.replace(/%id%/g,form_id)).attr({'id':form_id,'method':'post','action':url,'target':frame_id});params['xeVirtualRequestMethod']='xml';params['xeRequestURI']=location.href.replace(/#(.*)$/i,'');params['xeVirtualRequestUrl']=request_uri;$.each(params,function(key,value){$('<input type="hidden">').attr('name',key).attr('value',value).appendTo(form);});form.appendTo(document.body).submit();}
function arr2obj(arr){var ret={};for(var key in arr){if(arr.hasOwnProperty(key))ret[key]=arr[key];}
return ret;}
$.exec_json=function(action,data,func){if(typeof(data)=='undefined')data={};action=action.split(".");if(action.length==2){if(show_waiting_message){$("#waitingforserverresponse").html(waiting_message).css('top',$(document).scrollTop()+20).css('left',$(document).scrollLeft()+20).css('visibility','visible');}
$.extend(data,{module:action[0],act:action[1]});if(typeof(xeVid)!='undefined')$.extend(data,{vid:xeVid});$.ajax({type:"POST",dataType:"json",url:request_uri,contentType:"application/json",data:$.param(data),success:function(data){$("#waitingforserverresponse").css('visibility','hidden');if(data.error>0)alert(data.message);if($.isFunction(func))func(data);}});}};$.fn.exec_html=function(action,data,type,func,args){if(typeof(data)=='undefined')data={};if(!$.inArray(type,['html','append','prepend']))type='html';var self=$(this);action=action.split(".");if(action.length==2){if(show_waiting_message){$("#waitingforserverresponse").html(waiting_message).css('top',$(document).scrollTop()+20).css('left',$(document).scrollLeft()+20).css('visibility','visible');}
$.extend(data,{module:action[0],act:action[1]});$.ajax({type:"POST",dataType:"html",url:request_uri,data:$.param(data),success:function(html){$("#waitingforserverresponse").css('visibility','hidden');self[type](html);if($.isFunction(func))func(args);}});}};})(jQuery);
/* file: ./common/js/xml_js_filter.js */
/**
 * @file   common/js/xml_js_filter.js
 * @author NHN (developers@xpressengine.com)
 * @brief  xml filter (validator) plugin
 * 
 * A rule is a method validate one field.
 * A filter is made up of one or more rules.
 **/
(function($){var messages=[];var rules=[];var filters=[];var callbacks=[];var extras={};var Validator=xe.createApp('Validator',{init:function(){var regEmail=/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)*$/;this.cast('ADD_RULE',['email',regEmail]);this.cast('ADD_RULE',['email_address',regEmail]);var regUserid=/^[a-z]+[\w-]*[a-z0-9_]+$/i;this.cast('ADD_RULE',['userid',regUserid]);this.cast('ADD_RULE',['user_id',regUserid]);var regUrl=/^(https?|ftp|mms):\/\/[0-9a-z-]+(\.[_0-9a-z-\/\~]+)+(:[0-9]{2,4})*$/;this.cast('ADD_RULE',['url',regUrl]);this.cast('ADD_RULE',['homepage',regUrl]);var regKor=/^[가-힣]*$/;this.cast('ADD_RULE',['korean',regKor]);var regKorNum=/^[가-힣0-9]*$/;this.cast('ADD_RULE',['korean_number',regKorNum]);var regAlpha=/^[a-z]*$/i;this.cast('ADD_RULE',['alpha',regAlpha]);var regAlphaNum=/^[a-z][a-z0-9_]*$/i;this.cast('ADD_RULE',['alpha_number',regAlphaNum]);var regNum=/^[0-9]*$/;this.cast('ADD_RULE',['number',regNum]);},run:function(oForm){var filter='';if(oForm._filter)filter=oForm._filter.value;var params=[oForm,filter];var result=this.cast('VALIDATE',params);if(typeof result=='undefined')result=false;return result;},API_ONREADY:function(){var self=this;$('form').each(function(){if(this.onsubmit){this['xe:onsubmit']=this.onsubmit;this.onsubmit=null;}}).submit(function(){var legacyFn=this['xe:onsubmit'];var hasLegacyFn=$.isFunction(legacyFn);var bResult=hasLegacyFn?legacyFn.apply(this):self.run(this);return bResult;});},API_VALIDATE:function(sender,params){var self=this,result=true,form=params[0],filter=null,callback=null;if(form.elements['_filter'])filter=form.elements['_filter'].value;if(!filter)return true;if($.isFunction(callbacks[filter]))callback=callbacks[filter];filter=$.extend({},filters[filter.toLowerCase()]||{},extras);$.each(filter,function(name){var _el=form.elements[name];if(!_el)return true;var el=$(_el),val=$.trim(get_value(el));var minlen=parseInt(this.minlength)||0;var maxlen=parseInt(this.maxlength)||0;var rule=(this.rule||'').split(',');if(this.required&&!val)return(result=(!!self.cast('ALERT',[form,name,'isnull'])&&false));if(!this.required&&!val)return(result=true);if((minlen&&val.length<minlen)||(maxlen&&val.length>maxlen))return(result=(!!self.cast('ALERT',[form,name,'outofrange',minlen,maxlen])&&false));if(this.equalto){var eq_val=get_value($(form.elements[this.equalto]));if(eq_val!=val)return(result=(!!self.cast('ALERT',[form,name,'equalto'])&&false));}
$.each(rule,function(){var ret=self.cast('APPLY_RULE',[this,val]);if(!ret){self.cast('ALERT',[form,name,'invalid_'+this]);return(result=false);}});if(!result)return false;});if(!result)return false;if($.isFunction(callback))return callback(form);return true;},API_ADD_RULE:function(sender,params){var name=params[0].toLowerCase();rules[name]=params[1];},API_DEL_RULE:function(sender,params){var name=params[0].toLowerCase();delete rules[name];},API_GET_RULE:function(sender,params){var name=params[0].toLowerCase();if(rules[name]){return rules[name];}else{return null;}},API_ADD_FILTER:function(sender,params){var name=params[0].toLowerCase();var filter=params[1];filters[name]=filter;},API_DEL_FILTER:function(sender,params){var name=params[0].toLowerCase();delete filters[name];},API_GET_FILTER:function(sender,params){var name=params[0].toLowerCase();if(filters[name]){return filters[name];}else{return null;}},API_ADD_EXTRA_FIELD:function(sender,params){var name=params[0].toLowerCase();var prop=params[1];extras[name]=prop;},API_GET_EXTRA_FIELD:function(sender,params){var name=params[0].toLowerCase();return extras[name];},API_DEL_EXTRA_FIELD:function(sender,params){var name=params[0].toLowerCase();delete extras[name];},API_APPLY_RULE:function(sender,params){var name=params[0].toLowerCase();var value=params[1];if(typeof(rules[name])=='undefined')return true;if($.isFunction(rules[name]))return rules[name](value);if(rules[name]instanceof RegExp)return rules[name].test(value);return true;},API_ALERT:function(sender,params){var form=params[0];var field_name=params[1];var msg_code=params[2];var minlen=params[3];var maxlen=params[4];var field_msg=this.cast('GET_MESSAGE',[field_name]);var msg=this.cast('GET_MESSAGE',[msg_code]);if(msg!=msg_code)msg=(msg.indexOf('%s')<0)?(field_msg+msg):(msg.replace('%s',field_msg));if(minlen||maxlen)msg+='('+(minlen||'')+'~'+(maxlen||'')+')';this.cast('SHOW_ALERT',[msg]);$(form.elements[field_name]).focus();},API_SHOW_ALERT:function(sender,params){alert(params[0]);},API_ADD_MESSAGE:function(sender,params){var msg_code=params[0];var msg_str=params[1];messages[msg_code]=msg_str;},API_GET_MESSAGE:function(sender,params){var msg_code=params[0];return messages[msg_code]||msg_code;},API_ADD_CALLBACK:function(sender,params){var name=params[0];var func=params[1];callbacks[name]=func;},API_REMOVE_CALLBACK:function(sender,params){var name=params[0];delete callbacks[name];}});var oValidator=new Validator;xe.registerApp(oValidator);var EditorStub=xe.createPlugin('editor_stub',{API_BEFORE_VALIDATE:function(sender,params){var form=params[0];var seq=form.getAttribute('editor_sequence');if(seq){try{editorRelKeys[seq].content.value=editorRelKeys[seq].func(seq)||'';}catch(e){}}}});oValidator.registerPlugin(new EditorStub);function get_value(elem){var vals=[];if(elem.is(':radio')){return elem.filter(':checked').val();}else if(elem.is(':checkbox')){elem.filter(':checked').each(function(){vals.push(this.value);});return vals.join('|@|');}else{return elem.val();}}})(jQuery);function filterAlertMessage(ret_obj){var error=ret_obj["error"];var message=ret_obj["message"];var act=ret_obj["act"];var redirect_url=ret_obj["redirect_url"];var url=location.href;if(typeof(message)!="undefined"&&message&&message!="success")alert(message);if(typeof(act)!="undefined"&&act)url=current_url.setQuery("act",act);else if(typeof(redirect_url)!="undefined"&&redirect_url)url=redirect_url;if(url==location.href)url=url.replace(/#(.*)$/,'');location.href=url;}
function procFilter(fo_obj,filter_func)
{filter_func(fo_obj);return false;}
/* file: ./modules/textyle/tpl/js/textyle_service.js */
function insertGuestbookItem(obj,filter){
	jQuery(':text,:password',obj).each(function(){
		var jthis = jQuery(this);
		if(jthis.attr('title') && jthis.val() == jthis.attr('title')) jthis.val('');
	});
	var email = jQuery('[name=email_address].request',obj);
	if(email.length>0 && !jQuery.trim(email.val())){
		alert(jQuery('[name=msg_input_email_address]',obj).val());
		email.eq(0).focus();
		return false;
	}
	var homepage = jQuery('[name=homepage].request',obj);
	if(homepage.length>0 && !jQuery.trim(homepage.val())){
		alert(jQuery('[name=msg_input_homepage]',obj).val());
		homepage.eq(0).focus();
		return false;
	}

	return procFilter(obj,filter);
}

function checkPasswordGuestbook(f){
	procFilter(f,input_password_for_guestbook);
	return false;
}
function checkPasswordForDeleteGuestbook(f){
	procFilter(f,input_password_for_delete_guestbook);
	return false;
}
function checkPasswordForModifyGuestbook(f){
	procFilter(f,input_password_for_modify_guestbook);
	return false;
}
function completeCheckPasswordForModifyGuestbook(ret_obj,a,b,f){
	location.href=current_url.setQuery('modify',f.textyle_guestbook_srl.value);
}
function completeCheckPasswordForDeleteGuestbook(ret_obj,a,b,f){
	var params = new Array();
    params['textyle_guestbook_srl'] = f.textyle_guestbook_srl.value;
    params['mid'] = current_mid;
	
	var response_tags = new Array('error','message');
    exec_xml('textyle', 'procTextyleGuestbookItemDelete', params, completeReload, response_tags);
}



function deleteGuestbookItem(textyle_guestbook_srl,page){
    var params = new Array();
    params['textyle_guestbook_srl'] = textyle_guestbook_srl;
	
	var response_tags = new Array('error','message','page','mid');
    exec_xml('textyle', 'procTextyleGuestbookItemDelete', params, completeReload, response_tags);
}

function completeInsertGuestbook(ret_obj){
    var page = ret_obj.page;

	location.href=current_url.setQuery('act','dispTextyleGuestbook').setQuery('mid',current_mid).setQuery('page',page).setQuery('reply','').setQuery('modify','');
}


function insertCommentItem(obj,filter){
	jQuery(':text,:password',obj).each(function(){
		var jthis = jQuery(this);
		if(jthis.attr('title') && jthis.val() == jthis.attr('title')) jthis.val('');
	});
	var email = jQuery('[name=email_address].request',obj);
	if(email.length>0 && !jQuery.trim(email.val())){
		alert(jQuery('[name=msg_input_email_address]',obj).val());
		email.eq(0).focus();
		return false;
	}
	var homepage = jQuery('[name=homepage].request',obj);
	if(homepage.length>0 && !jQuery.trim(homepage.val())){
		alert(jQuery('[name=msg_input_homepage]',obj).val());
		homepage.eq(0).focus();
		return false;
	}

	return procFilter(obj,filter);
}

/* 댓글 글쓰기 작성후 */
function completeInsertComment(ret_obj) {
    var error = ret_obj['error'];
    var message = ret_obj['message'];
    var mid = ret_obj['mid'];
    var document_srl = ret_obj['document_srl'];
    var comment_srl = ret_obj['comment_srl'];

    var url = current_url.setQuery('mid',mid).setQuery('document_srl',document_srl).setQuery('act','');
    if(comment_srl) url = url.setQuery('rnd',comment_srl)+"#comment_"+comment_srl;

    //alert(message);

    location.href = url;
}
function checkPasswordForModifyComment(f){
	procFilter(f,input_password_for_modify_comment);
	return false;
}

function completeCheckPasswordForModifyComment(ret_obj,a,b,f){
	var url = current_url.setQuery('comment_srl',f.comment_srl.value).setQuery('document_srl',f.document_srl.value).setQuery('act','dispTextyleCommentModify');
	location.href = url;
}

function checkPasswordForDeleteComment(f){
    var params = new Array();
    params['comment_srl'] = f.comment_srl.value;
    params['document_srl'] = f.document_srl.value;
    params['password'] = f.password.value;
    params['mid'] = current_mid;
	
	var response_tags = new Array('error','message');
    exec_xml('textyle', 'procTextyleDeleteComment', params, completeReload, response_tags);
	return false;
}

function deleteCommentItem(comment_srl) {
    var params = new Array();
    params['comment_srl'] = comment_srl;
    params['mid'] = current_mid;
	
	var response_tags = new Array('error','message');
    exec_xml('textyle', 'procTextyleDeleteComment', params, completeReload, response_tags);
}

/* 트랙백 삭제 */
function completeDeleteTrackback(ret_obj) {
    var error = ret_obj['error'];
    var message = ret_obj['message'];
    var mid = ret_obj['mid'];
    var document_srl = ret_obj['document_srl'];
    var page = ret_obj['page'];

    var url = current_url.setQuery('mid',mid).setQuery('document_srl',document_srl).setQuery('act','');
    if(page) url = url.setQuery('page',page);

    //alert(message);

    location.href = url;
}


function completeReload(ret_obj) {
    var error = ret_obj['error'];
    var message = ret_obj['message'];

    location.reload();
}

/* file: ./files/cache/js_filter_compiled/2e099da8c5f563e3fb41305666561adf.en.compiled.js */
function insert_comment(fo_obj){
	var validator = xe.getApp('validator')[0];
	if(!validator) return false;
	if(!fo_obj.elements['_filter']) jQuery(fo_obj).prepend('<input type="hidden" name="_filter" value="" />');
	fo_obj.elements['_filter'].value = 'insert_comment';
	validator.cast('ADD_CALLBACK', ['insert_comment', function(form){
		var params={}, responses=[], elms=form.elements, data=jQuery(form).serializeArray();
		jQuery.each(data, function(i, field){
			var val = jQuery.trim(field.value);
			if(!val) return true;
			if(/\[\]$/.test(field.name)) field.name = field.name.replace(/\[\]$/, '');
			if(params[field.name]) params[field.name] += '|@|'+val;
			else params[field.name] = field.value;
		});
		responses = ['error','message','mid','document_srl','comment_srl'];
		exec_xml('textyle','procTextyleInsertComment', params, afterInsertComment, responses, params, form);
	}]);
	validator.cast('VALIDATE', [fo_obj,'insert_comment']);
	return false;
};

(function($){
	var validator = xe.getApp('Validator')[0];
	if(!validator) return false;
	validator.cast('ADD_FILTER', ['insert_comment', {
		'document_srl': {required:true},
		'nick_name': {required:true,maxlength:20},
		'password': {required:true},
		'email_address': {maxlength:250},
		'homepage': {maxlength:250},
		'content': {required:true,minlength:1}
	}]);
	validator.cast('ADD_MESSAGE', ['document_srl', 'Doc. No.']);
	validator.cast('ADD_MESSAGE', ['nick_name', 'Username']);
	validator.cast('ADD_MESSAGE', ['password', 'Password']);
	validator.cast('ADD_MESSAGE', ['email_address', 'Email']);
	validator.cast('ADD_MESSAGE', ['homepage', 'Website']);
	validator.cast('ADD_MESSAGE', ['content', 'Content']);
	validator.cast('ADD_MESSAGE', ['mid', 'Module Name']);
	validator.cast('ADD_MESSAGE', ['comment_srl', 'comment_srl']);
	validator.cast('ADD_MESSAGE', ['parent_srl', 'parent_srl']);
	validator.cast('ADD_MESSAGE', ['is_secret', 'is_secret']);
	validator.cast('ADD_MESSAGE', ['notify_message', 'notify_message']);
	validator.cast('ADD_MESSAGE', ['isnull', 'Please input a value for %s']);
	validator.cast('ADD_MESSAGE', ['outofrange', 'Please align the text length of %s']);
	validator.cast('ADD_MESSAGE', ['equalto', 'The value of %s is invalid']);
	validator.cast('ADD_MESSAGE', ['invalid_email', 'The format of %s is invalid. Example: developers@gmail.com']);
	validator.cast('ADD_MESSAGE', ['invalid_userid', 'The format of %s is invalid.\nAll values should consist of alphabets, numbers or underscore(_) and the first letter should be alphabet']);
	validator.cast('ADD_MESSAGE', ['invalid_user_id', 'The format of %s is invalid.\nAll values should consist of alphabets, numbers or underscore(_) and the first letter should be alphabet']);
	validator.cast('ADD_MESSAGE', ['invalid_homepage', 'The format of %s is invalid. Example: http://www.cubrid.org/']);
	validator.cast('ADD_MESSAGE', ['invalid_korean', 'The format of %s is invalid. Please input Korean only']);
	validator.cast('ADD_MESSAGE', ['invalid_korean_number', 'The format of %s is invalid. Please input Korean or numbers']);
	validator.cast('ADD_MESSAGE', ['invalid_alpha', 'The format of %s is invalid. Please input alphabets only']);
	validator.cast('ADD_MESSAGE', ['invalid_alpha_number', 'The format of %s is invalid. Please input alphabets or numbers']);
	validator.cast('ADD_MESSAGE', ['invalid_number', 'The format of %s is invalid. Please input numbers only']);
})(jQuery);
/* file: ./addons/autolink/autolink.js */
/**
 * @file autolink.js
 * @brief javascript code for autolink addon
 * @author NHN (developers@xpressengine.com)
 */
(function($){
	var protocol_re = '(https?|ftp|news|telnet|irc|mms)://';
	var domain_re   = '(?:[\\w\\-]+\\.)+(?:[a-z]+)';
	var max_255_re  = '(?:1[0-9]{2}|2[0-4][0-9]|25[0-5]|[1-9]?[0-9])';
	var ip_re       = '(?:'+max_255_re+'\\.){3}'+max_255_re;
	var port_re     = '(?::([0-9]+))?';
	var user_re     = '(?:/~[\\w-]+)?';
	var path_re     = '((?:/[\\w!"$-/:-@]+)*)';
	var hash_re     = '(?:#([\\w!-@]+))?';

	var url_regex = new RegExp('('+protocol_re+'('+domain_re+'|'+ip_re+'|localhost'+')'+port_re+user_re+path_re+hash_re+')', 'ig');

	var AutoLink = xe.createPlugin("autolink", {
		targets : [],
		init : function() {
			this.targets = [];
		},
		API_ONREADY : function() {
			var thisPlugin = this;

			// extract target text nodes
			this.extractTargets($('.xe_content'));

			$(this.targets).each(function(){
				thisPlugin.cast('AUTOLINK', [this]);
			});
		},
		API_AUTOLINK : function(oSender, params) {
			var textNode = params[0];
			if(!$(textNode).parent().length || $(textNode).parent().get(0).nodeName.toLowerCase() == 'a') return;
			var content  = textNode.nodeValue;
			var dummy    = $('<span>');

			content = content.replace(/</g, '&lt;').replace(/>/g, '&gt;');
			content = content.replace(url_regex, '<a href="$1" target="_blank">$1</a>');

			$(textNode).before(dummy);
			$(textNode).replaceWith(content);
			params[0] = dummy.next('a');
			dummy.remove();
		},
		extractTargets : function(obj) {
			var thisPlugin = this;
			var wrap = $('.xe_content', obj);
			if(wrap.length) {
				this.extractTargets(wrap);
				return;
			}

			$(obj)
			.contents()
			.each(function(){
				var node_name = this.nodeName.toLowerCase();
				if($.inArray(node_name, ['a', 'pre', 'xml', 'textarea', 'input', 'select', 'option', 'code', 'script', 'style', 'iframe', 'button', 'img', 'embed', 'object', 'ins']) != -1) return;

				// FIX ME : When this meanless code wasn't executed, url_regex do not run correctly. why?
				url_regex.exec('');

				if(this.nodeType == 3) { // text node
					var content = this.nodeValue;

					if(content.length < 5) return;

					if(!/(http|https|ftp|news|telnet|irc|mms):\/\//i.test(content)) return;

					thisPlugin.targets.push(this);
				} else {
					thisPlugin.extractTargets(this);
				}
			});
		}
	});

	xe.registerPlugin(new AutoLink());
})(jQuery);
/* file: ./common/js/plugins/ui/jquery-ui.packed.js */
/*!
 * jQuery UI 1.8
 *
 * Copyright (c) 2010 AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI
 */
 * jQuery UI 1.8
 *
 * Copyright (c) 2010 AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI
 */
jQuery.ui||(function(a){a.ui={version:"1.8",plugin:{add:function(c,d,f){var e=a.ui[c].prototype;for(var b in f){e.plugins[b]=e.plugins[b]||[];e.plugins[b].push([d,f[b]])}},call:function(b,d,c){var f=b.plugins[d];if(!f||!b.element[0].parentNode){return}for(var e=0;e<f.length;e++){if(b.options[f[e][0]]){f[e][1].apply(b.element,c)}}}},contains:function(d,c){return document.compareDocumentPosition?d.compareDocumentPosition(c)&16:d!==c&&d.contains(c)},hasScroll:function(e,c){if(a(e).css("overflow")=="hidden"){return false}var b=(c&&c=="left")?"scrollLeft":"scrollTop",d=false;if(e[b]>0){return true}e[b]=1;d=(e[b]>0);e[b]=0;return d},isOverAxis:function(c,b,d){return(c>b)&&(c<(b+d))},isOver:function(g,c,f,e,b,d){return a.ui.isOverAxis(g,f,b)&&a.ui.isOverAxis(c,e,d)},keyCode:{BACKSPACE:8,CAPS_LOCK:20,COMMA:188,CONTROL:17,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,INSERT:45,LEFT:37,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SHIFT:16,SPACE:32,TAB:9,UP:38}};a.fn.extend({_focus:a.fn.focus,focus:function(b,c){return typeof b==="number"?this.each(function(){var d=this;setTimeout(function(){a(d).focus();(c&&c.call(d))},b)}):this._focus.apply(this,arguments)},enableSelection:function(){return this.attr("unselectable","off").css("MozUserSelect","").unbind("selectstart.ui")},disableSelection:function(){return this.attr("unselectable","on").css("MozUserSelect","none").bind("selectstart.ui",function(){return false})},scrollParent:function(){var b;if((a.browser.msie&&(/(static|relative)/).test(this.css("position")))||(/absolute/).test(this.css("position"))){b=this.parents().filter(function(){return(/(relative|absolute|fixed)/).test(a.curCSS(this,"position",1))&&(/(auto|scroll)/).test(a.curCSS(this,"overflow",1)+a.curCSS(this,"overflow-y",1)+a.curCSS(this,"overflow-x",1))}).eq(0)}else{b=this.parents().filter(function(){return(/(auto|scroll)/).test(a.curCSS(this,"overflow",1)+a.curCSS(this,"overflow-y",1)+a.curCSS(this,"overflow-x",1))}).eq(0)}return(/fixed/).test(this.css("position"))||!b.length?a(document):b},zIndex:function(e){if(e!==undefined){return this.css("zIndex",e)}if(this.length){var c=a(this[0]),b,d;while(c.length&&c[0]!==document){b=c.css("position");if(b=="absolute"||b=="relative"||b=="fixed"){d=parseInt(c.css("zIndex"));if(!isNaN(d)&&d!=0){return d}}c=c.parent()}}return 0}});a.extend(a.expr[":"],{data:function(d,c,b){return !!a.data(d,b[3])},focusable:function(c){var d=c.nodeName.toLowerCase(),b=a.attr(c,"tabindex");return(/input|select|textarea|button|object/.test(d)?!c.disabled:"a"==d||"area"==d?c.href||!isNaN(b):!isNaN(b))&&!a(c)["area"==d?"parents":"closest"](":hidden").length},tabbable:function(c){var b=a.attr(c,"tabindex");return(isNaN(b)||b>=0)&&a(c).is(":focusable")}})})(jQuery);;/*!
 * jQuery UI Widget 1.8
 *
 * Copyright (c) 2010 AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI/Widget
 */
 * jQuery UI Widget 1.8
 *
 * Copyright (c) 2010 AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI/Widget
 */
(function(b){var a=b.fn.remove;b.fn.remove=function(c,d){return this.each(function(){if(!d){if(!c||b.filter(c,[this]).length){b("*",this).add(this).each(function(){b(this).triggerHandler("remove")})}}return a.call(b(this),c,d)})};b.widget=function(d,f,c){var e=d.split(".")[0],h;d=d.split(".")[1];h=e+"-"+d;if(!c){c=f;f=b.Widget}b.expr[":"][h]=function(i){return !!b.data(i,d)};b[e]=b[e]||{};b[e][d]=function(i,j){if(arguments.length){this._createWidget(i,j)}};var g=new f();g.options=b.extend({},g.options);b[e][d].prototype=b.extend(true,g,{namespace:e,widgetName:d,widgetEventPrefix:b[e][d].prototype.widgetEventPrefix||d,widgetBaseClass:h},c);b.widget.bridge(d,b[e][d])};b.widget.bridge=function(d,c){b.fn[d]=function(g){var e=typeof g==="string",f=Array.prototype.slice.call(arguments,1),h=this;g=!e&&f.length?b.extend.apply(null,[true,g].concat(f)):g;if(e&&g.substring(0,1)==="_"){return h}if(e){this.each(function(){var i=b.data(this,d),j=i&&b.isFunction(i[g])?i[g].apply(i,f):i;if(j!==i&&j!==undefined){h=j;return false}})}else{this.each(function(){var i=b.data(this,d);if(i){if(g){i.option(g)}i._init()}else{b.data(this,d,new c(g,this))}})}return h}};b.Widget=function(c,d){if(arguments.length){this._createWidget(c,d)}};b.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",options:{disabled:false},_createWidget:function(d,e){this.element=b(e).data(this.widgetName,this);this.options=b.extend(true,{},this.options,b.metadata&&b.metadata.get(e)[this.widgetName],d);var c=this;this.element.bind("remove."+this.widgetName,function(){c.destroy()});this._create();this._init()},_create:function(){},_init:function(){},destroy:function(){this.element.unbind("."+this.widgetName).removeData(this.widgetName);this.widget().unbind("."+this.widgetName).removeAttr("aria-disabled").removeClass(this.widgetBaseClass+"-disabled "+this.namespace+"-state-disabled")},widget:function(){return this.element},option:function(e,f){var d=e,c=this;if(arguments.length===0){return b.extend({},c.options)}if(typeof e==="string"){if(f===undefined){return this.options[e]}d={};d[e]=f}b.each(d,function(g,h){c._setOption(g,h)});return c},_setOption:function(c,d){this.options[c]=d;if(c==="disabled"){this.widget()[d?"addClass":"removeClass"](this.widgetBaseClass+"-disabled "+this.namespace+"-state-disabled").attr("aria-disabled",d)}return this},enable:function(){return this._setOption("disabled",false)},disable:function(){return this._setOption("disabled",true)},_trigger:function(d,e,f){var h=this.options[d];e=b.Event(e);e.type=(d===this.widgetEventPrefix?d:this.widgetEventPrefix+d).toLowerCase();f=f||{};if(e.originalEvent){for(var c=b.event.props.length,g;c;){g=b.event.props[--c];e[g]=e.originalEvent[g]}}this.element.trigger(e,f);return !(b.isFunction(h)&&h.call(this.element[0],e,f)===false||e.isDefaultPrevented())}}})(jQuery);;/*!
 * jQuery UI Mouse 1.8
 *
 * Copyright (c) 2010 AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI/Mouse
 *
 * Depends:
 *	jquery.ui.widget.js
 */
 * jQuery UI Mouse 1.8
 *
 * Copyright (c) 2010 AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI/Mouse
 *
 * Depends:
 *	jquery.ui.widget.js
 */
(function(a){a.widget("ui.mouse",{options:{cancel:":input,option",distance:1,delay:0},_mouseInit:function(){var b=this;this.element.bind("mousedown."+this.widgetName,function(c){return b._mouseDown(c)}).bind("click."+this.widgetName,function(c){if(b._preventClickEvent){b._preventClickEvent=false;c.stopImmediatePropagation();return false}});this.started=false},_mouseDestroy:function(){this.element.unbind("."+this.widgetName)},_mouseDown:function(d){d.originalEvent=d.originalEvent||{};if(d.originalEvent.mouseHandled){return}(this._mouseStarted&&this._mouseUp(d));this._mouseDownEvent=d;var c=this,e=(d.which==1),b=(typeof this.options.cancel=="string"?a(d.target).parents().add(d.target).filter(this.options.cancel).length:false);if(!e||b||!this._mouseCapture(d)){return true}this.mouseDelayMet=!this.options.delay;if(!this.mouseDelayMet){this._mouseDelayTimer=setTimeout(function(){c.mouseDelayMet=true},this.options.delay)}if(this._mouseDistanceMet(d)&&this._mouseDelayMet(d)){this._mouseStarted=(this._mouseStart(d)!==false);if(!this._mouseStarted){d.preventDefault();return true}}this._mouseMoveDelegate=function(f){return c._mouseMove(f)};this._mouseUpDelegate=function(f){return c._mouseUp(f)};a(document).bind("mousemove."+this.widgetName,this._mouseMoveDelegate).bind("mouseup."+this.widgetName,this._mouseUpDelegate);(a.browser.safari||d.preventDefault());d.originalEvent.mouseHandled=true;return true},_mouseMove:function(b){if(a.browser.msie&&!b.button){return this._mouseUp(b)}if(this._mouseStarted){this._mouseDrag(b);return b.preventDefault()}if(this._mouseDistanceMet(b)&&this._mouseDelayMet(b)){this._mouseStarted=(this._mouseStart(this._mouseDownEvent,b)!==false);(this._mouseStarted?this._mouseDrag(b):this._mouseUp(b))}return !this._mouseStarted},_mouseUp:function(b){a(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate);if(this._mouseStarted){this._mouseStarted=false;this._preventClickEvent=(b.target==this._mouseDownEvent.target);this._mouseStop(b)}return false},_mouseDistanceMet:function(b){return(Math.max(Math.abs(this._mouseDownEvent.pageX-b.pageX),Math.abs(this._mouseDownEvent.pageY-b.pageY))>=this.options.distance)},_mouseDelayMet:function(b){return this.mouseDelayMet},_mouseStart:function(b){},_mouseDrag:function(b){},_mouseStop:function(b){},_mouseCapture:function(b){return true}})})(jQuery);;/*
 * jQuery UI Position 1.8
 *
 * Copyright (c) 2010 AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI/Position
 */
 * jQuery UI Draggable 1.8
 *
 * Copyright (c) 2010 AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI/Draggables
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.mouse.js
 *	jquery.ui.widget.js
 */
 * jQuery UI Droppable 1.8
 *
 * Copyright (c) 2010 AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI/Droppables
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.widget.js
 *	jquery.ui.mouse.js
 *	jquery.ui.draggable.js
 */
 * jQuery UI Resizable 1.8
 *
 * Copyright (c) 2010 AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI/Resizables
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.mouse.js
 *	jquery.ui.widget.js
 */
 * jQuery UI Selectable 1.8
 *
 * Copyright (c) 2010 AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI/Selectables
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.mouse.js
 *	jquery.ui.widget.js
 */
 * jQuery UI Sortable 1.8
 *
 * Copyright (c) 2010 AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI/Sortables
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.mouse.js
 *	jquery.ui.widget.js
 */