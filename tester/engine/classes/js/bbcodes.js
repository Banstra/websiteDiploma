var list_open_tag="",list_close_tag="",listitems="",playlist="",bbtags=new Array,rus_lr2="Е-е-О-о-Ё-Ё-Ё-Ё-Ж-Ж-Ч-Ч-Ш-Ш-Щ-Щ-Ъ-Ь-Э-Э-Ю-Ю-Я-Я-Я-Я-ё-ё-ж-ч-ш-щ-э-ю-я-я".split("-"),lat_lr2=("/E-/e-/O-/o-ЫO-Ыo-ЙO-Йo-ЗH-Зh-ЦH-Цh-СH-Сh-ШH-Шh-ъ"+String.fromCharCode(35)+"-ь"+String.fromCharCode(39)+"-ЙE-Йe-ЙU-Йu-ЙA-Йa-ЫA-Ыa-ыo-йo-зh-цh-сh-шh-йe-йu-йa-ыa").split("-"),rus_lr1="А-Б-В-Г-Д-Е-З-И-Й-К-Л-М-Н-О-П-Р-С-Т-У-Ф-Х-Х-Ц-Щ-Ы-Я-а-б-в-г-д-е-з-и-й-к-л-м-н-о-п-р-с-т-у-ф-х-х-ц-щ-ъ-ы-ь-ь-я".split("-"),lat_lr1=("A-B-V-G-D-E-Z-I-J-K-L-M-N-O-P-R-S-T-U-F-H-X-C-W-Y-Q-a-b-v-g-d-e-z-i-j-k-l-m-n-o-p-r-s-t-u-f-h-x-c-w-"+String.fromCharCode(35)+"-y-"+String.fromCharCode(39)+"-"+String.fromCharCode(96)+"-q").split("-");function setFieldName(t){t!=selField&&(selField=t)}function emoticon(t){doInsert(" "+t+" ","",!1)}function pagebreak(){doInsert("{PAGEBREAK}","",!1)}function simpletag(t){doInsert("["+t+"]","[/"+t+"]",!0)}function DLEimagePrompt(t,o){var e={},l="",i="";i=(i=-1!=t.indexOf("http://")||-1!=t.indexOf("https://")?(l=t,""):(l="http://",t)).replace(/'/g,"&#039;"),l=l.replace(/'/g,"&#039;"),e[dle_act_lang[3]]=function(){$(this).dialog("close")},e[dle_act_lang[2]]=function(){var t,e,l;$("#dle-promt-text").val().length<1?$("#dle-promt-text").addClass("ui-state-error"):(t=$("#dle-promt-text").val(),e=$("#dle-image-alt").val(),l=$("#dleimagealign").val(),$(this).dialog("close"),$("#dlepopup").remove(),o&&o(t,e,l))},$("#dlepopup").remove(),$("body").append("<div id='dlepopup' title='"+dle_prompt+"' style='display:none'>"+text_enter_image+"<br><input type='text' dir='auto' name='dle-promt-text' id='dle-promt-text' class='ui-widget-content ui-corner-all' style='width:97%;' value='"+l+"'><br><br>"+text_alt_image+"<br><input type='text' dir='auto' name='dle-image-alt' id='dle-image-alt' class='ui-widget-content ui-corner-all' style='width:97%;' value='"+i+"'><br><br>"+img_align+"&nbsp;"+img_align_sel+"</div>"),$("#dlepopup").dialog({autoOpen:!0,width:500,resizable:!1,dialogClass:"dle-popup-imageinsert",buttons:e})}function DLEurlPrompt(t,o){var e={},l="",i="";i=(i=-1!=t.indexOf("http://")||-1!=t.indexOf("https://")||-1!=t.indexOf("ftp://")?(l=t,""):(l="http://",t)).replace(/'/g,"&#039;"),l=l.replace(/'/g,"&#039;"),e[dle_act_lang[3]]=function(){$(this).dialog("close")},e[dle_act_lang[2]]=function(){var t,e,l;$("#dle-promt-url").val().length<1?$("#dle-promt-url").addClass("ui-state-error"):$("#dle-promt-title").val().length<1?$("#dle-promt-title").addClass("ui-state-error"):(t=$("#dle-promt-url").val(),e=$("#dle-promt-title").val(),l=$("#dle-promt-tooltip").val(),$(this).dialog("close"),$("#dlepopup").remove(),o&&o(t,e,l))},$("#dlepopup").remove(),$("body").append("<div id='dlepopup' title='"+dle_prompt+"' style='display:none'>"+text_enter_url+"<br><input type='text' dir='auto' name='dle-promt-url' id='dle-promt-url' class='ui-widget-content ui-corner-all' style='width:97%;' value='"+l+"'><br><br>"+text_enter_url_name+"<br><input type='text' dir='auto' name='dle-promt-title' id='dle-promt-title' class='ui-widget-content ui-corner-all' style='width:97%;' value='"+i+"'/><br><br>"+text_enter_tooltip+"<br><input type='text' dir='auto' name='dle-promt-tooltip' id='dle-promt-tooltip' class='ui-widget-content ui-corner-all' style='width:97%;' value=''/></div>"),$("#dlepopup").dialog({autoOpen:!0,width:500,resizable:!1,dialogClass:"dle-popup-urlinsert",buttons:e})}function tag_url(){var thesel=get_sel(eval("fombj."+selField)),thesel=thesel||"My Webpage";DLEurlPrompt(thesel,function(t,e,l){0<l.length&&(t=t+"|"+l),doInsert("[url="+t+"]"+e+"[/url]","",!1)})}function tag_leech(){var thesel=get_sel(eval("fombj."+selField)),thesel=thesel||"My Webpage";DLEurlPrompt(thesel,function(t,e,l){0<l.length&&(t=t+"|"+l),doInsert("[leech="+t+"]"+e+"[/leech]","",!1)})}function tag_youtube(){var thesel=get_sel(eval("fombj."+selField)),thesel=thesel||"http://";DLEprompt(text_enter_url,thesel,dle_prompt,function(t){doInsert("[media="+t+"]","",!1)})}function tag_flash(){var thesel=get_sel(eval("fombj."+selField)),thesel=thesel||"http://";DLEprompt(text_enter_flash,thesel,dle_prompt,function(t){var e=t;DLEprompt(text_enter_size,"425,264",dle_prompt,function(t){doInsert("[flash="+t+"]"+e+"[/flash]","",!1)})})}function tag_list(type){list_open_tag="ol"==type?"[ol=1]\n":"[list]\n",list_close_tag="ol"==type?"[/ol]":"[/list]",listitems="";var thesel=get_sel(eval("fombj."+selField)),thesel=thesel||"";insert_list(thesel)}function insert_list(t){DLEprompt(text_enter_list,t,dle_prompt,function(t){""!=t?(listitems+="[*]"+t+"\n",insert_list("")):listitems&&doInsert(list_open_tag+listitems+list_close_tag,"",!1)},!0)}function tag_image(){var thesel=get_sel(eval("fombj."+selField)),thesel=thesel||"http://";DLEimagePrompt(thesel,function(t,e,l){e=""!=e?"|"+e:"";""!=l&&"center"!=l&&(e=l+e),""!=e&&(e="="+e),doInsert("center"==l?"[center][img"+e+"]"+t+"[/img][/center]":"[img"+e+"]"+t+"[/img]","",!1)})}function tag_video(){var thesel=get_sel(eval("fombj."+selField)),thesel=thesel||"http://";DLEvideoPrompt(thesel,function(t,e,l){""==e&&""==l||(t+="|"+e),""!=l&&(t+="|"+l),""!=t&&"http://"!=t?playlist+=t:""!=playlist&&(playlist=playlist.substring(0,playlist.length-1)),""!=playlist&&doInsert("[video="+playlist+"]","",!1),playlist=""})}function DLEvideoPrompt(t,o){var e={};urlvalue=-1!=t.indexOf("http://")||-1!=t.indexOf("https://")?t:"http://",e[dle_act_lang[3]]=function(){$(this).dialog("close")},e[button_addplaylist]=function(){var t=$("#dle-promt-url").val(),e=$("#dle-promt-poster").val(),l=$("#dle-promt-descr").val(),t=t;""==e&&""==l||(t+="|"+e),""!=l&&(t+="|"+l),""!=t&&"http://"!=t&&(playlist+=t+","),$("#dle-promt-url").val("http://"),$("#dle-promt-poster").val(""),$("#dle-promt-descr").val("")},e[button_insert]=function(){var t=$("#dle-promt-url").val(),e=$("#dle-promt-poster").val(),l=$("#dle-promt-descr").val();$(this).dialog("close"),$("#dlepopup").remove(),o&&o(t,e,l)},$("#dlepopup").remove(),$("body").append("<div id='dlepopup' title='"+dle_prompt+"' style='display:none'>"+text_url_video+"<br><input type='text' dir='auto' name='dle-promt-url' id='dle-promt-url' class='ui-widget-content ui-corner-all' style='width:97%;' value='"+urlvalue+"'/><br><br>"+text_descr+"<br><input type='text' dir='auto' name='dle-promt-descr' id='dle-promt-descr' class='ui-widget-content ui-corner-all' style='width:97%;' value=''/><br><br>"+text_url_poster+"<br><input type='text' dir='auto' name='dle-promt-poster' id='dle-promt-poster' class='ui-widget-content ui-corner-all' style='width:97%;' value=''/>"),$("#dlepopup").dialog({autoOpen:!0,width:500,resizable:!1,buttons:e}),$("#dle-promt-url").select().focus()}function tag_audio(){var thesel=get_sel(eval("fombj."+selField)),thesel=thesel||"http://";DLEaudioPrompt(thesel,function(t,e){""!=e&&(t+="|"+e),""!=t&&"http://"!=t?playlist+=t:""!=playlist&&(playlist=playlist.substring(0,playlist.length-1)),""!=playlist&&doInsert("[audio="+playlist+"]","",!1),playlist=""})}function DLEaudioPrompt(t,l){var e={};urlvalue=-1!=t.indexOf("http://")||-1!=t.indexOf("https://")?t:"http://",e[dle_act_lang[3]]=function(){$(this).dialog("close")},e[button_addplaylist]=function(){var t=$("#dle-promt-url").val(),e=$("#dle-promt-descr").val(),t=t;""!=e&&(t+="|"+e),""!=t&&"http://"!=t&&(playlist+=t+","),$("#dle-promt-url").val("http://"),$("#dle-promt-descr").val("")},e[button_insert]=function(){var t=$("#dle-promt-url").val(),e=$("#dle-promt-descr").val();$(this).dialog("close"),$("#dlepopup").remove(),l&&l(t,e)},$("#dlepopup").remove(),$("body").append("<div id='dlepopup' title='"+dle_prompt+"' style='display:none'>"+text_url_audio+"<br><input type='text' dir='auto' name='dle-promt-url' id='dle-promt-url' class='ui-widget-content ui-corner-all' style='width:97%;' value='"+urlvalue+"'/><br><br>"+text_descr+"<br><input type='text' dir='auto' name='dle-promt-descr' id='dle-promt-descr' class='ui-widget-content ui-corner-all' style='width:97%;' value=''/>"),$("#dlepopup").dialog({autoOpen:!0,width:500,resizable:!1,buttons:e}),$("#dle-promt-url").select().focus()}function tag_email(){var thesel=get_sel(eval("fombj."+selField)),thesel=thesel||"";DLEprompt(text_enter_email,thesel,dle_prompt,function(t){doInsert("[email="+t+"]"+t+"[/email]","",!1)})}function show_bb_dropdown(t){$(t).blur(function(){$(t).next().fadeOut()}),$(t).next().show().css({position:"absolute",top:0,left:0}).position({my:"left top",at:"left bottom",of:$(t),collision:"fit flip"})}function insert_header(t){doInsert("[h"+t+"]","[/h"+t+"]",!0)}function doInsert(ibTag,ibClsTag,isSingle){var isClose=!1,obj_ta=eval("fombj."+selField),obj_ta,ss,st,es,start,middle,end,left_indent,cpos;return(void 0===obj_ta&&(obj_ta=eval("fombj."+$(".bb-pane").nextAll("textarea").first().attr("id"))),void 0===obj_ta)?!1:(obj_ta.focus(),null!=obj_ta.selectionEnd?(ss=obj_ta.selectionStart,st=obj_ta.scrollTop,es=obj_ta.selectionEnd,start=obj_ta.value.substring(0,ss),middle=obj_ta.value.substring(ss,es),end=obj_ta.value.substring(es,obj_ta.textLength),left_indent=0,isSingle?""!=ibClsTag&&""==middle&&(left_indent=ibClsTag.length):middle="",middle=(obj_ta.selectionEnd,obj_ta.selectionStart,ibTag+middle+ibClsTag),obj_ta.value=start+middle+end,cpos=ss+middle.length-left_indent,obj_ta.selectionStart=cpos,obj_ta.selectionEnd=cpos,obj_ta.scrollTop=st):obj_ta.value+=ibTag+ibClsTag,isClose)}function setColor(t){doInsert("[color="+t+"]","[/color]",!0)}function dle_smiley(t){doInsert(" "+t+" ","",!1)}function pagelink(){var thesel=get_sel(eval("fombj."+selField)),thesel=thesel||text_pages;DLEprompt(text_enter_page,"1",dle_prompt,function(t){var e=t;DLEprompt(text_enter_page_name,thesel,dle_prompt,function(t){doInsert("[page="+e+"]"+t+"[/page]","",!1)})})}function translit(){var obj_ta=eval("fombj."+selField);obj_ta.value=dotranslate(obj_ta.value),obj_ta.focus()}function dotranslate(t){var e,l="",o=0,i=1;for(kk=0;kk<t.length;kk++)"["!=(e=t.substr(kk,1))&&"<"!=e||(i=0),"]"!=e&&">"!=e||(i=1),o=i?transsymbtocyr(l.substr(l.length-1,1),e):l.substr(l.length-1,1)+e,l=l.substr(0,l.length-1)+o;return l}function transsymbtocyr(t,e){var l,o=t+e,i=e.charCodeAt(0);if(!(65<=i&&i<=123||35==i||39==i))return o;for(l=0;l<lat_lr2.length;l++)if(lat_lr2[l]==o)return rus_lr2[l];for(l=0;l<lat_lr1.length;l++)if(lat_lr1[l]==e)return t+rus_lr1[l];return o}function insert_font(t,e){0!=t&&doInsert("["+e+"="+t+"]","[/"+e+"]",!0)}function get_sel(obj){var obj;if(void 0===obj&&(obj=eval("fombj."+$(".bb-pane").nextAll("textarea").first().attr("id"))),document.selection){var s=document.selection.createRange();if(s.text)return s.text}else if("number"==typeof obj.selectionStart&&obj.selectionStart!=obj.selectionEnd){var start=obj.selectionStart,end=obj.selectionEnd;return obj.value.substr(start,end-start)}return!1}function dle_image_upload(t,e){$("#dle_emo").remove(),$("#cp").remove(),$("#dlepopup").remove(),media_upload(selField,t,e,"no")}function tag_typograf(){$("#"+selField).val(dletp.execute(document.getElementById(selField).value))}function emojiFromHex(t){try{if(-1<navigator.platform.indexOf("Win")&&t.match(/^1F1(E[6-9A-F]|F[0-9A-F])/))return null;for(var e=[],l=t.split("-"),o=0;o<l.length;o++)e.push(parseInt(l[o],16));return String.fromCodePoint.apply(null,e)}catch(t){return null}}function get_emoji(){try{return JSON.parse(localStorage.getItem("last_emoji"))}catch(t){return null}}function set_emoji(t){try{localStorage.setItem("last_emoji",JSON.stringify(t))}catch(t){}}function in_array(t,e){for(var l=0,o=e.length;l<o;l++)if(e[l]==t)return!0;return!1}function display_last_emoji(){var t,e=get_emoji(),l="";if($.isArray(e)&&e.length&&"undefined"!=typeof text_last_emoji){l+='<div class="emoji_category"><b>'+text_last_emoji+"</b></div>",l+='<div class="emoji_list">';for(var o=0,i=e.length;o<i;o++)(t=emojiFromHex(e[o]))&&(l+='<div class="emoji_symbol" data-emoji="'+e[o]+'"><a onclick="insert_emoji(\''+t+"', '"+e[o]+"'); return false;\">"+t+"</a></div>");l+="</div>",divs=document.getElementsByClassName("last_emoji"),$(".last_emoji").html(l)}}function insert_emoji(t,e){doInsert(""+t,"",!1);t=get_emoji();$.isArray(t)?in_array(e,t)||(15<t.length&&t.pop(),t.unshift(e)):(t=[]).push(e),set_emoji(t),display_last_emoji()}