<?PHP
!defined('IN_PROTOSTARCMS') && exit('Access Denied: cache');
$CHANNEL_LIST=array(
array('id'=>'1','sortid'=>'1','name'=>'首页','dshow'=>'','eurl'=>'','lproc'=>'home','ltemplate'=>'home','vproc'=>'view','vtemplate'=>'view','memo'=>'网站首页','active'=>'1'),
array('id'=>'2','sortid'=>'2','name'=>'公司介绍','dshow'=>'','eurl'=>'','lproc'=>'direct_view','ltemplate'=>'direct_view','vproc'=>'direct_view','vtemplate'=>'direct_view','memo'=>'公司介绍','active'=>'1'),
array('id'=>'3','sortid'=>'3','name'=>'公司新闻','dshow'=>'','eurl'=>'','lproc'=>'channel','ltemplate'=>'channel','vproc'=>'view','vtemplate'=>'view','memo'=>'公司新闻','active'=>'1'),
array('id'=>'4','sortid'=>'4','name'=>'产品和服务','dshow'=>'','eurl'=>'','lproc'=>'channel','ltemplate'=>'channel','vproc'=>'view','vtemplate'=>'view','memo'=>'产品和服务','active'=>'1'),
array('id'=>'5','sortid'=>'5','name'=>'公司资质','dshow'=>'','eurl'=>'','lproc'=>'direct_view','ltemplate'=>'direct_view','vproc'=>'direct_view','vtemplate'=>'direct_view','memo'=>'公司资质','active'=>'1'),
array('id'=>'6','sortid'=>'6','name'=>'公司环境','dshow'=>'','eurl'=>'','lproc'=>'direct_view','ltemplate'=>'direct_view','vproc'=>'direct_view','vtemplate'=>'direct_view','memo'=>'公司环境','active'=>'1'),
array('id'=>'7','sortid'=>'7','name'=>'联系我们','dshow'=>'','eurl'=>'','lproc'=>'direct_view','ltemplate'=>'direct_view','vproc'=>'direct_view','vtemplate'=>'direct_view','memo'=>'联系我们','active'=>'1')
);
$CHANNEL_NUM=7;
$MIN_CHANNEL_ID=1;

$CHANNEL[1]='首页';
$CHANNEL[2]='公司介绍';
$CHANNEL[3]='公司新闻';
$CHANNEL[4]='产品和服务';
$CHANNEL[5]='公司资质';
$CHANNEL[6]='公司环境';
$CHANNEL[7]='联系我们';


$SDSHOW=array(0);

$SLPP[1]='home';
$SLPP[2]='direct_view';
$SLPP[3]='channel';
$SLPP[4]='channel';
$SLPP[5]='direct_view';
$SLPP[6]='direct_view';
$SLPP[7]='direct_view';


$SLTP[1]='home';
$SLTP[2]='direct_view';
$SLTP[3]='channel';
$SLTP[4]='channel';
$SLTP[5]='direct_view';
$SLTP[6]='direct_view';
$SLTP[7]='direct_view';


$SVPP[1]='view';
$SVPP[2]='direct_view';
$SVPP[3]='view';
$SVPP[4]='view';
$SVPP[5]='direct_view';
$SVPP[6]='direct_view';
$SVPP[7]='direct_view';


$SVTP[1]='view';
$SVTP[2]='direct_view';
$SVTP[3]='view';
$SVTP[4]='view';
$SVTP[5]='direct_view';
$SVTP[6]='direct_view';
$SVTP[7]='direct_view';

?>