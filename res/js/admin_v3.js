var domain = window.location.host; //��ȡ���ĵ�ǰ����,������ http://, �� var domain=document.domain;
var url = document.URL; //or document.location, or window.location.href;

var userAgent = navigator.userAgent.toLowerCase();
var is_opera = userAgent.indexOf('opera') != -1 && opera.version();
var is_moz = (navigator.product == 'Gecko') && userAgent.substr(userAgent.indexOf('firefox') + 8, 3);
var is_ie = (userAgent.indexOf('msie') != -1 && !is_opera) && userAgent.substr(userAgent.indexOf('msie') + 5, 3);
var is_gecko = is_moz;
var AJAX4HTML = false; //ͨ��AJAX�ӿڻ�ȡHTML��Ϣ
var AJAX_RESULT ='';   //AJAX���ú󷵻صĽ���ַ���
var AJAX_CALLBACKFUNC =null; //AJAX���ú�Ļص�������
var sub_gurl  = '';	   //��ѯ����
var orig_img='';	   //��֤���
var edt_inhtml = '';   //�ݴ����±༭��div��innerHtml
var edt_noedit = '<dir class="edt_box_bgtxt">ͼƬ����Ƶ���͵����£�ֻ������ [�� ��]������ [�ı�����]��<br/><br/>'+
				 'ͼƬ����ƵӦ��Ϊ [�� ��] ��ӵ� [������]��<br/><br/>'+
				 '���ǣ���ҳͼƬ�ֲ�����֮ͼƬ��Ӧ�����裩��ͼƬURL��ַ���롰��ͼURL���С�<br/><br/>'+
				 '֧�ֵ�ͼƬ��ʽ�У�jpg��png��gif��bmp����Ƶ��ʽ�У�mp4��flv(��PC��)��';
var BTNNUM=0;

function $(id) {
	if(typeof id != 'string') {
		alert('getElementById() error: the param not string.');
		return null;
	}
	/* if(document.getElementById(id) != null) */
	return document.getElementById(id);
}

function get_timeStamp(){
	var cur_date = new Date();
	return cur_date.getTime();
}

Array.prototype.push = function(value) {
	this[this.length] = value;
	return this.length;
}

String.prototype.trim   = function(){
	return this.replace(/(^\s*)|(\s*$)/g, '');
}

function body_load(){
	if($('uname')!=null) $('uname').focus();

	//if(typeof BTNNUM == 'undefined') return;
	//for(var i=0; i<BTNNUM; i++) { BTNSTATE[i]='F'; }
	
	if ($('dosave')!=null) $('dosave').disabled = true;

	if ($('art_url')!=null) {//�������±༭ҳ
		if (edt_inhtml=='')
			edt_inhtml = $('edt_box').innerHTML;
		set_editor();
	}
}

function set_btnstate(){
	var btn_state=false;
	if (typeof BTNNUM == 'undefined')  return;
	for(var i=0; i<BTNNUM; i++) {
		if (BTNSTATE[i]=='F')
			btn_state=true;
	}
	$('dosave').disabled = btn_state;
}

/* onmouseover */
function omv(obj) {
	if ($(obj)!=null)
		$(obj).className='curitem';
}

/* onmouseout */
function omu(obj) {
	if ($(obj)!=null)
		$(obj).className='item';

	if ($(mobj)!=null)
		$(mobj).className='curitem';
}

/* table,tr onmouseover|out */
function tomv(rid) {
	if ($('tr'+rid)!=null)
		$('tr'+rid).className='over';
}
function tomu(rid) {
	if ($('tr'+rid)!=null){
		if ($('cb'+rid)!=null && $('cb'+rid).checked)
			$('tr'+rid).className='select';
		else
			$('tr'+rid).className='out';
	}
}
function selrec(rid){
	if ($('cb'+rid)!=null)
		$('cb'+rid).checked=!$('cb'+rid).checked;
	return false;
}

/* ��ҳ */
function gotopage(keycode, burl, pval) {
	if(keycode==13) {
		if(is_digit(pval) && pval.length<5) {
			burl += pval;
			window.location=burl;
		} else {
			alert('ҳ�벻����Ҫ��(0-5λ��)!');
		}
	}
}

function get_payfind(dn) {
	AJAX4HTML = true;
	ajax_get(gurl, 'sinfo');
	//return false;
}

function get_paysum(){
	AJAX4HTML = true;
	ajax_get(gurl, 'sinfo');
	//return false;
}

//function get_newpage(cmid,pn) {
function get_newpage(midurl,pn,sid,cid) {
	AJAX4HTML = true;
	var pagenum = parseInt(pn);
	var gurl="./index.php?mid=" + midurl + "&aid=20&page="+ pagenum +"&random="+get_timeStamp();
	//window.open(gurl, "_self", "");
	window.location=gurl;
	//ajax_get(gurl, 'sinfo');
	//return false;
}

function ajax_request(desturl, destobj, sendData, metd) {
	var http_request = false;
	if (window.XMLHttpRequest) {
		http_request = new XMLHttpRequest();
		if (http_request.overrideMimeType) {
			http_request.overrideMimeType('text/xml');
		}
	} else if (window.ActiveXObject) {
		try { http_request = new ActiveXObject("Msxml2.XMLHTTP"); }
		catch (e) {
			try { http_request = new ActiveXObject("Microsoft.XMLHTTP"); }
			catch (e) {}
		}
	}
	http_request.onreadystatechange = function(){
		ajax_response(http_request, destobj);
	};

	if (metd=="POST") {
		// var sendData = "useajax=1&zh_value=" + escape(chinese_value);
		http_request.open('POST', desturl, true);
		http_request.setRequestHeader("Cache-Control","no-store");
		http_request.setRequestHeader("Cache-Control","no-cache");
		http_request.setRequestHeader("Pragma","no-cache");
		http_request.setRequestHeader("Content-Length",sendData.length);
		http_request.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=gbk");
		http_request.send(sendData);
	} else { // if (metd=="GET")
		http_request.open("GET", desturl, true);
		http_request.setRequestHeader("Cache-Control","no-store");
		http_request.setRequestHeader("Cache-Control","no-cache");
		http_request.setRequestHeader("Pragma","no-cache");
		http_request.setRequestHeader("Content-Type","text/html; charset=gbk");
		http_request.send(null);
	}
}

/* ajax_request()�Ļص����� */
function ajax_response(http_request, destobj) {
	if(http_request.readyState == 4) {
		if (http_request.status == 200) {
		var response = http_request.responseText;
		if (response) {
			//alert(response);
			AJAX_RESULT = response;
			var xmlbegin = '<hodacms>';
			var xmlend = '</hodacms>';
			var dpe = 0;
			var dp  = response.indexOf(xmlbegin);
			if (dp == 0) {
				dpe = response.indexOf(xmlend);
				var xblen = xmlbegin.length;
				if (dpe >= xblen)
					AJAX_RESULT = response.substring(xblen, dpe).trim();
			}
			if (AJAX_RESULT.indexOf('ALERT:') != -1) {
				alert(AJAX_RESULT);
			} else if (AJAX_CALLBACKFUNC != null && typeof(AJAX_CALLBACKFUNC)=="function") {
				AJAX_CALLBACKFUNC(AJAX_RESULT);
			} else if (destobj!=null && typeof(destobj)=="string") {
				if (AJAX4HTML) {
					if ($(destobj)!=null)
						try{$(destobj).innerHTML=AJAX_RESULT;}catch(e){}
				} else if (!AJAX4HTML) {
					if ($(destobj)!=null)
						try{$(destobj).style.display='none';}catch(e){}
				}
			}
		} //end. if (response)
		}
	}
	http_request = false;
	response = false;
}

function ajax_get(desturl, destobj) {
	ajax_request(desturl, destobj, '', "GET");
}

function ajax_post(desturl, destobj, sendData) {
	ajax_request(desturl, destobj, sendData, "POST");
}

var cur_dir_val='';
function ajax_get_img_list(val) {
	AJAX4HTML = true;
	if (val=='f') {
		if (cur_dir_val=='') val = $('imgdir').value;
		else val = cur_dir_val;
	}
	else  cur_dir_val = val;
	var gurl="./index.php?mid=72&aid=41&getdir=0&todir="+val+"&random="+get_timeStamp();
	ajax_get(gurl, 'piclist');
}

function get_article_img_dir_list() {
	AJAX4HTML = true;
	var gurl="./index.php?mid=72&aid=41&getdir=1&random="+get_timeStamp();
	ajax_get(gurl, 'piclist');
}

function mk_active(mid) {
	if ($('recid') == null) {
		alert('ϵͳ����!');
		return false;
	}
	var recid=parseInt($('recid').innerHTML);
	return do_active(mid, recid);
}

function mk_disable(mid) {
	if ($('recid') == null) {
		alert('ϵͳ����!');
		return false;
	}
	var recid=parseInt($('recid').innerHTML);
	return do_disable(mid, recid);
}

function do_delete(mid, recid) {
	AJAX4HTML = true;
	var gurl="./index.php?aid=5&mid="+mid+"&id="+recid+"&random="+get_timeStamp();
	ajax_get(gurl, 'sinfo');
	//return true;
}

function chk_manager(cv, dw) {
	if (cv=='') return false;

	AJAX4HTML = false;
	var gurl="./index.php?aid=14&mid=20"+"&username="+cv+"&random="+get_timeStamp();
	ajax_get(gurl, dw);
	return false;
}

/* ˢ����֤�� */
function renew_validate(){
	if (orig_img=='' || orig_img==null)
		orig_img = $('validateimg').src;
	$('validateimg').src=orig_img+"?"+get_timeStamp();
	co_validate = '';
}

function _attachEvent(obj, evt, func) {
	if(obj.addEventListener) {
		obj.addEventListener(evt, func, false);
	} else if(obj.attachEvent) {
		obj.attachEvent("on" + evt, func);
	}
}

var pollopt_num = 1;
function add_newpollopt(){
	++pollopt_num;
	var myTABLE=$('poll_list');
	var myTR =myTABLE.insertRow(-1);
	var myTD=myTR.insertCell(-1);
	myTD.className='tdsim';
	myTD.innerHTML='ѡ��'+pollopt_num+':';

	myTD=myTR.insertCell(-1);
	myTD.innerHTML="<input name='pollopt[]' value='' size='70' maxlength='30'>";
}

function check_logindata(){
	var ilen = $('uname').value.trim().length;
	if (ilen==0) {
			alert('�������û���');
			return false;
		}
	ilen = $('upass').value.trim().length;
	if (ilen==0) {
			alert('����������');
			return false;
		}
	ilen = $('validatecode').value.trim().length;
	if (ilen==0) {
			alert('��������֤��');
			return false;
		}
		return true;
}

function exeCommand(command, value){
	//document.execCommand(sCommand[,������ʽ, ��̬����])
	//������ʽ:�Ƿ񵯳��Ի���
	document.execCommand(command, false, value);
	//������������:
	//execCommand("AbsolutePosition","false","true");//ʹ����λ��ɾ��Զ�λ;
	//execCommand("2D-Position","false","true");//ʹ���Զ�λ�Ķ����ֱ���϶�
	//execCommand('CreateLink',true,'true');//����һ���Ի�������URL
	//execCommand('CreateLink',false,'http://www.hodaedu.com'); 
	//execCommand('ForeColor',false,'#BBCCCC'); //true��false������
	//execCommand('BackColor',false,'#EEEEEE'); //true��false������
	document.execCommand("enableObjectResizing", true, true);
}

function Black(){
	$('RICHEDIT').focus();
	exeCommand('Bold', '');
}

function Italic(){
	$('RICHEDIT').focus();
	exeCommand('Italic', '');
}

function UnderLine(){
	$('RICHEDIT').focus();
	exeCommand('Underline', '');
}

function Indent(){
	$('RICHEDIT').focus();
	exeCommand('Indent', '');
}

function Outdent(){
	$('RICHEDIT').focus();
	exeCommand('Outdent', '');
}

function txtCenter() {
	$('RICHEDIT').focus();
	exeCommand('JustifyCenter', '');
}

function txtFull() {
	$('RICHEDIT').focus();
	exeCommand('justifyFull', '');
}

function txtLeft() {
	$('RICHEDIT').focus();
	exeCommand('justifyLeft', '');
}

function txtRight() {
	$('RICHEDIT').focus();
	exeCommand('justifyRight', '');
}

function UnorderList(){
	$('RICHEDIT').focus();
	exeCommand('InsertUnorderedList', '');
}

function OrderList(){
	$('RICHEDIT').focus();
	exeCommand('InsertOrderedList', '');
}

function insert_image(){
	$('RICHEDIT').focus();
	ImagePath = window.prompt('�������ⲿͼƬ��URL��ַ��', '').trim();
	if (ImagePath != '')
		exeCommand('InsertImage', ImagePath);
}

var def_fontsize=3;
function setsize(val){
	$('RICHEDIT').focus();
	if (val==1) def_fontsize++;
	else		def_fontsize--;
	if (def_fontsize>7) def_fontsize=7;
	if (def_fontsize<1) def_fontsize=1;
	exeCommand('FontSize', def_fontsize);
}

function preview(){
	var htmlcontent=$('RICHEDIT').innerHTML;
	headcontent='<html><style>body{line-height:20px;font-family:����;margin-top:0px;font-size:12px;';
	headcontent+='margin:10px;width:670px;}</style><body>';
	htmlcontent=htmlcontent + headcontent;
	var open = window.open('');open.document.write(htmlcontent);
}

function edit_source(){
	if($('HTMLDIV').style.display == 'block'){
		$('TEXTEDIT').value = $('RICHEDIT').innerHTML;
		$('HTMLDIV').style.display = 'none';
		$('TEXTDIV').style.display = 'block';
		$('TEXTEDIT').focus();
		$('qiehua').innerHTML='����';
	} else {
		$('RICHEDIT').innerHTML = $('TEXTEDIT').value;
		$('TEXTDIV').style.display = 'none';
		$('HTMLDIV').style.display = 'block';
		$('RICHEDIT').focus();
		$('qiehua').innerHTML='<div class="esrc"></div>';
	}
}

function Add(){
	$('HTMLDIV').height = $('HTMLDIV').height*1 + 50;
}

function feedback_submit(){
	if ($('anscontent').value.trim() == '') {
		alert('�����������');
		return false;
	}
	return true;	
}

function link_submit(){
	var obj = $('linkform');
	if (obj.name.value.trim() == '') {
		alert('����������');
		return false;
	}
	if (obj.url.value.trim() == '') {
		alert('��������ַ');
		return false;
	}
	return true;
}

function article_submit(){
	if ($('channelid').value == 0) {
		alert('��ѡ��Ƶ��');
		return false;
	}
	if ($('categoryid').value == 0) {
		//alert('��ѡ����Ŀ');
		if (!confirm("��δѡ��[��Ŀ����]��ȷ����Ҫ����[��Ŀ����]��\r\n(ֻ�е�Ƶ��������Ϊdirect_viewģʽʱ���Ų�Ҫ����[��Ŀ����])"))
			return false;
	}
	if ($('title').value.trim() == '') {
		alert('���������±���');
		return false;
	}
	
	if ($('arttype').value == 1) {//��������=1��׼����,��Ҫ������
		$('TEXTEDIT').value = $('RICHEDIT').innerHTML.trim();
		if ($('TEXTEDIT').value == '') {
			alert('��������������');
			return false;
		}
	}
	return true;
}

function channel_submit(){
	var obj=$('channelform');
	if (obj.name.value.trim() == ''){
		alert('����������');
		return false;
	}
	if (obj.memo.value.trim() == ''){
		alert('������˵��');
		return false;
	}
	if (obj.dshow.checked){
		if (obj.eurl.value.trim() == '') {
			alert('���������ӵ�ַ');
			return false;
		}
	} else {
		if (obj.lproc.value.trim() == '' || obj.ltemplate.value.trim() == ''){
			if (!confirm('δ�����б��������ʹ��ϵͳĬ�����á�'))
				return false;
		}
		if (obj.vproc.value.trim() == '' || obj.vtemplate.value.trim() == ''){
			if (!confirm('δ���ò鿴��������ʹ��ϵͳĬ��Ӧ���á�'))
				return false;
		}
	}
	return true;
}

function category_submit(){
	var obj=$('categoryform');
	if (obj.channelid.value.trim() == '0'){
		alert('��ѡ������Ƶ��');
		return false;
	}
	if (obj.name.value.trim() == ''){
		alert('����������');
		return false;
	}
	if (obj.memo.value.trim() == ''){
		//alert('������˵��');
		//return false;
	}
	if (obj.dshow.checked){
		if (obj.eurl.value.trim() == '') {
			alert('���������ӵ�ַ');
			return false;
		}
	} else {
		if (obj.lproc.value.trim() == '' || obj.ltemplate.value.trim() == ''){
			if (!confirm('δ�����б��������ʹ��ϵͳĬ�����á�'))
				return false;
		}
		if (obj.vproc.value.trim() == '' || obj.vtemplate.value.trim() == ''){
			if (!confirm('δ���ò鿴��������ʹ������Ƶ������Ӧ���á�'))
				return false;
		}
	}
	return true;
}

//set program and template for channel and/or category.
function set_mod_tpl(chk)
{
	if(chk){
		$('tbl_modus').style.display='none';
	}else{
		$('tbl_modus').style.display='';
	}
}

function tpl_submit(){
	if ($('tplform').file.value.trim() == ''){
		alert('��������ģ���ļ�������');
		return false;
	}
	return true;
}

function sysglob_submit(){
	var obj = $('sysglobform');
	if (obj.PERPAGE.value.trim() == '' || parseInt(obj.PERPAGE.value) <= 0) {
		alert('������ÿҳ��¼��');
		return false;
	}
	if (obj.HOME_PERPAGE.value.trim() == '' || parseInt(obj.HOME_PERPAGE.value) <= 0) {
		alert('��������ҳ��¼��');
		return false;
	}
	return true;
}

function syssafe_submit(){
	var obj = $('syssafeform');
	if (obj.CFG_COOKIE_LIFE.value.trim() == '' || parseInt(obj.CFG_COOKIE_LIFE.value) < 0) {
		alert('������Ự������(����>=0)');
		return false;
	}
	if (obj.DISTANCE.value.trim() == '' || parseInt(obj.DISTANCE.value) <= 0) {
		alert('�����뻺��ʱЧ(����>0)');
		return false;
	}
	if (obj.ANTI_DDOS_DISTANCE.value.trim() == '' || parseInt(obj.ANTI_DDOS_DISTANCE.value) <= 0) {
		alert('��������ʱ����(����>0)');
		return false;
	}
	if (obj.CFG_DEFAULT_LEVEL.value.trim() == '' || parseInt(obj.CFG_DEFAULT_LEVEL.value) < 0) {
		alert('�������ʼȨ��(����>=0)');
		return false;
	}
	return true;
}

function admin_submit(){
	var obj = $('adminform');
	if (obj.username.value.trim() == '') {
		alert('�������¼��');
		return false;
	}
	if (obj.password.value.trim() == '' && obj.id.value.trim() == '') {
		alert('����������');
		return false;
	}
	if (obj.realname.value.trim() == '') {
		alert('����������');
		return false;
	}
	return true;
}

function password_submit(){
	var obj = $('passwordform');
	if (obj.oldpasswd.value.trim() == '') {
		alert('��������������');
		return false;
	}
	if (obj.newpasswd.value.trim() == '') {
		alert('������������');
		return false;
	}
	if (obj.newpasswd2.value.trim() == '') {
		alert('���ٴ�����������');
		return false;
	}
	if (obj.newpasswd.value != obj.newpasswd2.value) {
		alert('��������������벻һ�£�����������');
		return false;
	}
	return true;
}

function upfile_submit(){
	var num=0;
	for(var i=1;i<=8;i++) {
		var obj=$('af'+i);
		if (obj.value.trim().length!=0)
			num++;
	}
	if (num==0) return false;
	return true;
}

var noiptfile = 1;
function add_file(){
	var obj = $('filelist');
	if (noiptfile==1) {
		obj.innerHTML='';
		obj.style.display='block';
		//$('filelist_tr').style.display='block';
	}
	var newfileipt = document.createElement("input");
	newfileipt.type='file';
	newfileipt.name='attfile[]';
	newfileipt.className='ipt_file';
	obj.appendChild(newfileipt);
	noiptfile++;
}

function del_file(val,rid){
	AJAX4HTML = false;
	var gurl="./index.php?mid=70&aid=25&fileid="+rid+"&random="+get_timeStamp();
	ajax_get(gurl, val);
}

function upload_file(tp, wp){
	//document.body.clientWidth
	var w=(screen.width-1000)/2;
	var h=(screen.height-430)/2;
	if (wp==1) { //ͼ�����ģ�����
		var left=w+195;
		var top =h-80;
	} else { //���±༭ģ�����
		var left=w+390;
		var top =h-20;
	}
	var win = window.open('./index.php?mid=71&aid=26&type='+tp,
		'_upimg', 'height=430,width=420,left='+left+',top='+top+
		',status=no,toolbar=no,menubar=no,location=no,scrollbars=no,resizeable=no');
	win.focus();
}

function show_thumb(){
	var is_thumb = GetCookie('PCMS_SHOWINTHUMB');
	if (is_thumb==1) return;
	SetCookie('PCMS_SHOWINTHUMB', 1);
	window.location.reload();
}

function show_nothumb(){
	var is_thumb = GetCookie('PCMS_SHOWINTHUMB');
	if (is_thumb==0) return;
	SetCookie('PCMS_SHOWINTHUMB', 0);
	window.location.reload();
}	

function chg_channel(mid, val){
	SetCookie('PCMS_channel', val);
	DeleteCookie('PCMS_category');
	wl_url='./index.php?mid='+mid+'&channel='+val;
	window.location=wl_url;
}

function reset_category(val) {
	var obj = $('categoryid');
	obj.options.length=0;
	obj.options.add(new Option('--������--', '0'));
	for(var i=0; i<category.length; i++) {
		if (category[i][2]==val)
			obj.options.add(new Option(category[i][1], category[i][0]));
	}
	SetCookie('PCMS_channel', val);
	DeleteCookie('PCMS_category');
}

function chose_category(val) {
	SetCookie('PCMS_category', val);
}

function chg_category(val){
	SetCookie('PCMS_category', val);
	window.location='./index.php?mid=70&channel='+channel+'&category='+val;
}

function set_editor(){
	var val = $('arttype').value; //GetCookie('PCMS_arttype');

	if (val==1) {//type=text
		$('art_url').style.display='none';   //��Ҫ����
		if(edt_inhtml!='')
			$('edt_box').innerHTML = edt_inhtml; //Ҫ�༭��
	} else if (val==2 || val==3) { //type=image | video
		$('art_url').style.display='';       //Ҫ����
		$('edt_box').innerHTML = edt_noedit; //��Ҫ�༭��
	}
}

function chose_arttype(val){
	SetCookie('PCMS_arttype', val);
	//$('art_urlimg').style.display='';
	set_editor();
}

function chg_tpltheme(mid,val){
	window.location='./index.php?mid='+mid+'&tpltheme='+escape(val);
}

/* Cookie���. GetCookie()��ȡָ�����Ƶ�cookie */
/* ��ȡCookie��ֵ */
function GetCookie(name) 
{ 
	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
	if(arr=document.cookie.match(reg))
		return unescape(arr[2]);
	return ""; // null
}

function GetUrlRelativePath()
{
	//http://192.168.1.2/cmsall/admin/index.php
	var url = document.location.toString();
	var arrUrl = url.split("//");
	var start = arrUrl[1].indexOf("/"); // �õ�'/cmsall/admin/index.php'
	var stop = arrUrl[1].indexOf("admin");
	var r = arrUrl[1].substring(start, stop); // �õ�'/cmsall/'
	r=r+'admin'; // ����� '/cmsall/admin', ��Ҫ����'/',���ָ�php cookieһ��
	return r;
}

/* ����Cookie */
function SetCookie(name, value)
{
	DeleteCookie(name);
	var dt = new Date();
	dt.setTime(dt.getTime() + 86400000);
	//var argv = SetCookie.arguments; 
	//var argc = SetCookie.arguments.length; 
	//var epvl = (argc > 2) ? argv[2] : null; 
	document.cookie = name+"="+escape(value)+";expires="+dt.toGMTString()+
					  ";path="+GetUrlRelativePath()+";";
}

//���趨����ʱ���setcookie
//s�Ǵ�����, ��s20=20��
//h��ָСʱ����h12=12Сʱ
//d��ָ��������d30=30��
function SetCookieDt(name, value, time)
{
	DeleteCookie(name);
	var strsec = getsec(time);
	var dt = new Date();
	dt.setTime(dt.getTime() + strsec * 1);
	document.cookie = name+"="+escape(value)+";expires="+dt.toGMTString()+
					  ";path="+GetUrlRelativePath()+";";
}

function getsec(str)
{
	alert(str);
	var strlen=str.length;
	var str1=str.substring(1,strlen);
	var str2=str.substring(0,1);
	if (str2=="s") {
		return str1*1000;
	} else if (str2=="h") {
		return str1*60*60*1000;
	} else if (str2=="d") {
		return str1*24*60*60*1000;
	}
}

/* ɾ��Cookie */
function DeleteCookie(name)
{
	var dt = new Date(); 
	dt.setTime(dt.getTime() - 86400000); 
	var cval=GetCookie(name);
	if(cval!=null)
		document.cookie=name+"="+cval+";expires="+dt.toGMTString()+
					  ";path="+GetUrlRelativePath()+";";
}

function limot(obj){obj.className='out';}
function limov(obj){obj.className='over';}
function lido(turl){window.location='./index.php?'+turl;}

var chkall=false;
function chk_all(){
	//var allipt=document.getElementsByTagName("INPUT");
	var allipt=$("infolist").elements;
	chkall=!chkall;
	for (var i=0; i<allipt.length; i++) {
		if (allipt[i].type=='checkbox' && allipt[i].name!='') {
			allipt[i].checked=chkall;
			try{
				var cbvalue=parseInt(allipt[i].value);
				if (cbvalue==0)  continue;
				if (allipt[i].checked)   $('tr'+cbvalue).className='select';
				else  $('tr'+cbvalue).className='out';
			}catch(e){}
		}
	}
}
function chk_all_bystr(){
	var allipt=$("infolist").elements;
	chkall=!chkall;
	for (var i=0; i<allipt.length; i++) {
		if (allipt[i].type=='checkbox' && allipt[i].name!='') {
			allipt[i].checked=chkall;
			try{
				var cbvalue=allipt[i].value;
				if (cbvalue==0)  continue;
				if (allipt[i].checked)   $('tr'+cbvalue).className='select';
				else  $('tr'+cbvalue).className='out';
			}catch(e){}
		}
	}
}

function multi_select(obj){
	//var allipt=document.getElementsByTagName("INPUT");
	var allipt=$("infolist").elements;
	for (var i=0; i<allipt.length; i++) {
		if (allipt[i].type=='checkbox' && allipt[i].checked) {
			obj.form.submit();
			return true;
		}
	}
	alert('��ѡ���¼');
	return false;
}

function delete_select(obj){
	$("infolist").aid.value=25;
	return multi_select(obj);
}

function disable_select(obj){
	$("infolist").aid.value=28;
	$("infolist").active.value=0;
	return multi_select(obj);
}

function active_select(obj){
	$("infolist").aid.value=28;
	$("infolist").active.value=1;
	return multi_select(obj);
}

function dispatch_select(obj){
	$("infolist").aid.value=29;
	$("infolist").dispatch.value=1;
	return multi_select(obj);
}
function undispatch_select(obj){
	$("infolist").aid.value=29;
	$("infolist").dispatch.value=0;
	return multi_select(obj);
}

function optorder_select(obj,oval){
	$("infolist").aid.value=29;
	$("infolist").otype.value=oval;
	return multi_select(obj);
}

window.onload=function(){}
document.addEventListener( "DOMContentLoaded", body_onload, false );
window.addEventListener( "load", body_onload, false );
function body_onload(){
}
