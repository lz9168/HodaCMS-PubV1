var userAgent = navigator.userAgent.toLowerCase();
var is_opera = userAgent.indexOf("opera") != -1 && opera.version();
var is_moz = (navigator.product == "Gecko") && userAgent.substr(userAgent.indexOf("firefox") + 8, 3);
var is_ie = (userAgent.indexOf("msie") != -1 && !is_opera) && userAgent.substr(userAgent.indexOf("msie") + 5, 3);
var is_gecko = is_moz;

document.addEventListener( "DOMContentLoaded", body_onload, false );
window.addEventListener( "load", body_onload, false );

function body_onload(){
	initNav();
	initImg();
	initImgPlayer();
}

function $(id) {
	if(typeof id != "string") {
		alert("getElementById() error: the param not string");
		return null;
	}
	return document.getElementById(id);
}

String.prototype.trim = function() {
	return this.replace(/(^\s*)|(\s*$)/g, "");
}

function initNav(){
	var address = parseInt(window.location.href.split('&s=')[1]);
	var navi = $('TNav').getElementsByTagName('li');
	if(navi[address-1]!=null)
		navi[address-1].className="active";
	var objtntg = $('tnav-toggle')
	if(objtntg==null)
		return;
	objtntg.onclick = function(e){
		if($('tnavul').style.display!='')
			$('tnavul').style.display='';
		else
			$('tnavul').style.display='block';
	};
}

function initImg(){
	var ap = document.getElementsByTagName('div');
	for(i=0;i<ap.length;i++){
		if(ap[i].id!=null && ap[i].id=='tlogo') {
			var op = ap[i].getAttribute('data-img');
			if (op!=null && op!="") {
				/* "url('img.jpg') 0% 0% / 80px 60px no-repeat" */
				ap[i].style.background="url('" +op+ "') no-repeat";
				if(ap[i].className=='tlogo')
					ap[i].style.backgroundSize="80px 60px";
				else if(ap[i].className=='tsmlogo')
					ap[i].style.backgroundSize="60px 60px";
			}
		}
	}
}

function initImgPlayer(){
	if(!inited)
		imgplayer_start();
}

function get_newpage(midurl,pn,sid,cid) {
	var pagenum = parseInt(pn);
	if (pagenum<=0)
		pagenum = parseInt($('topage').value);
	if(pagenum<=0)
		return false;
	var gurl="./index.php?mod="+midurl+"&s="+sid+"&c="+cid+"&page="+pagenum+"&random="+get_timeStamp();
	window.open(gurl, "_self", "");
}

function get_timeStamp() {
	var cur_date = new Date();
	return cur_date.getTime();
}

/* guestbook */
var saved=0;
function chk_guestbook() {
	if(saved) {
		alert("请勿重复提问"); return false;
	}
	var obj=$("guestbookform");
	obj.gbcontent.value = obj.gbcontent.value.trim();
	var i=obj.gbcontent.value.length;
	if(i<10) {
		alert("请详细描述您的问题"); return false;
	} else if(i>500) {
		alert("请使用简洁文字"); return false;
	}
	if(obj.gbtel.value.length<9 && obj.gbemail.value.length<7) {
		alert("请输入联系方式，以便我们跟您联系"); return false;
	}
	saved=1;
	return true;
}

function chk_search(obj) {
	var t=obj.txt.value.trim();
	if(t.length < 1) {
		alert("请输入要查询的内容-关键词");
		return false;
	}
	return true;
}

/*图片播放器-begin*/
var imgcount=5;
var pause=false;
var startIndex=1;
var inited=false;
function imgplayer_start(){
	try{
		var obj = $('ImgPlayer');
		if(obj==null) return;
		inited=true;
		obj.onmouseover = function(e){pause = true; };
		obj.onmouseout  = function(e){pause = false;};
		setInterval('imgplayer_play()', 2000);
	}catch(e){
		alert(e.toString());
	}
}

function imgplayer_play(){
	if(pause) return;
	//startIndex++;
	if(++startIndex > imgcount){startIndex = 1;}
	imgplayer_select_tab('idname',startIndex);
} 

function imgplayer_select_tab(idname, curItem){
	startIndex = curItem;
	var tobj=null;
	var mobj=null;
	for(i=1;i<=imgcount;i++){
		tobj = eval("$('ptab_" + i + "')");
		if(tobj!=null) {
			if(i==curItem) tobj.className='on';
			else tobj.className='out';
		}
		mobj = eval("$('pimg_" + i +"')");
		if(mobj!=null) {
			if(i==curItem) mobj.style.display = "block";
			else mobj.style.display = "none";
		}
	}
}
/*图片播放器-end*/
