<?PHP
!defined('IN_PROTOSTARCMS') && exit('Access Denied: cache');
$CATEGORY_LIST=array(
array('id'=>'1','channelid'=>'1','sortid'=>'1','name'=>'最新公告','dshow'=>'','eurl'=>'','lproc'=>'category','ltemplate'=>'category','vproc'=>'view','vtemplate'=>'view','memo'=>'最新公告','homeshow'=>'1','active'=>'1'),
array('id'=>'2','channelid'=>'1','sortid'=>'2','name'=>'图片轮播','dshow'=>'','eurl'=>'','lproc'=>'category','ltemplate'=>'category','vproc'=>'view','vtemplate'=>'view','memo'=>'图片轮播','homeshow'=>'1','active'=>'1'),
array('id'=>'6','channelid'=>'3','sortid'=>'100','name'=>'公司新闻','dshow'=>'','eurl'=>'','lproc'=>'category','ltemplate'=>'category','vproc'=>'view','vtemplate'=>'view','memo'=>'公司新闻','homeshow'=>'1','active'=>'1'),
array('id'=>'3','channelid'=>'4','sortid'=>'100','name'=>'产品','dshow'=>'','eurl'=>'','lproc'=>'category','ltemplate'=>'category','vproc'=>'','vtemplate'=>'view','memo'=>'产品','homeshow'=>'1','active'=>'1'),
array('id'=>'4','channelid'=>'4','sortid'=>'100','name'=>'服务','dshow'=>'','eurl'=>'','lproc'=>'category','ltemplate'=>'category','vproc'=>'','vtemplate'=>'view','memo'=>'服务','homeshow'=>'1','active'=>'1'),
array('id'=>'5','channelid'=>'4','sortid'=>'100','name'=>'检测报告','dshow'=>'','eurl'=>'','lproc'=>'category','ltemplate'=>'category','vproc'=>'view','vtemplate'=>'view','memo'=>'检测报告','homeshow'=>'1','active'=>'1')
);
$CATEGORY_NUM=6;
$MIN_CATEGORY_ID=1;

$CPID[1]='1';
$CPID[2]='1';
$CPID[6]='3';
$CPID[3]='4';
$CPID[4]='4';
$CPID[5]='4';


$CATEGORY[0]='-';
$CATEGORY[1]='最新公告';
$CATEGORY[2]='图片轮播';
$CATEGORY[6]='公司新闻';
$CATEGORY[3]='产品';
$CATEGORY[4]='服务';
$CATEGORY[5]='检测报告';


$CDSHOW=array(0);

$CLPP[1]='category';
$CLPP[2]='category';
$CLPP[6]='category';
$CLPP[3]='category';
$CLPP[4]='category';
$CLPP[5]='category';


$CLTP[1]='category';
$CLTP[2]='category';
$CLTP[6]='category';
$CLTP[3]='category';
$CLTP[4]='category';
$CLTP[5]='category';


$CVPP[1]='view';
$CVPP[2]='view';
$CVPP[6]='view';
$CVPP[3]='';
$CVPP[4]='';
$CVPP[5]='view';


$CVTP[1]='view';
$CVTP[2]='view';
$CVTP[6]='view';
$CVTP[3]='view';
$CVTP[4]='view';
$CVTP[5]='view';

?>