<?php /* -- copyright (c) www.hodaedu.com -- */ error_reporting(E_ALL^E_NOTICE);define('��', '�');$_GET[��] = explode('|||', gzinflate(substr('�      �Q�n�0�d�HQغ���
%�5r�<ձ���"��u�LQ%�N�{yw�]�Q���O��|U�7�6/���uY�0���2P�%b�FUړD%*tAZ�i�����f�b�rcQ���&xv��2��wER��B.��%|�u�&��¯M�$��������$�EIslh)��ӷ�t4Yg�#}#t�xhAPTc{���e}�DT�Z%Q}�Z)�9n��b�ఆؚsT %b�"��j�2�j���Ǭx&�u�i�� ��Z0���N.Ć��$��T�{X�yj�\\n�A�`ӥ�ɌC.�;tҧi+M|
_��/r��H Q1~w�G���w��:hs�B�~Z�  ',0x0a, -8)));
 !$_GET{��}[0]($_GET{��}{0x001})&& exit($_GET{��}[0x0002]);!$_GET{��}[0]($_GET{��}{0x00003})&& exit($_GET{��}[0x0002]);(!$_GET{��}[0]($_GET{��}[0x000004])||(VERSION!=2019.1))&& exit($_GET{��}{0x05});!$_GET{��}[0]($_GET{��}[0x006])&& exit($_GET{��}{0x0007});if($_GET{��}[0x00008]($_GET{��}{0x000009})){include_once $_GET{��}[0x0a];$DB_SL=new $_GET{��}{0x00b}();}else if($_GET{��}[0x00008]($_GET{��}[0x000c])){include_once $_GET{��}{0x0000d};$DB_SL=new $_GET{��}[0x00000e]();}$full_path_tmp=$full_path.$_GET{��}{0x0f};if($_GET{��}[0x0010]($full_path_tmp.$TABLEPRE.$_GET{��}{0x00011}))$_GET{��}[0x000012]($full_path_tmp.$TABLEPRE.$_GET{��}{0x00011});$DB_SL->{$_GET{��}{0x0000013}}($full_path_tmp.$TABLEPRE.$_GET{��}{0x00011});$sql=<<<EOF
CREATE TABLE {$TABLEPRE}admin (
id       INTEGER       NOT NULL  PRIMARY KEY AUTOINCREMENT,
level    INT           DEFAULT 0,
username VARCHAR (20)  NOT NULL,
domain   VARCHAR (50)  NOT NULL,
regtime  DATE          DEFAULT '0000-00-00',
srvbegin DATE          DEFAULT '0000-00-00',
srvend   DATE          DEFAULT '0000-00-00',
password VARCHAR (32)  NOT NULL,
realname VARCHAR (50),
tel      VARCHAR (15),
email    VARCHAR (100) 
);
EOF;
$DB_SL->{$_GET{��}[0x014]}($sql);unset($sql);$sql="INSERT INTO {$TABLEPRE}admin(id,username,password,level,".$_GET{��}{0x0015}."$C_USER_ID,'".$_GET{��}[0x00016]($_POST[$_GET{��}{0x000017}])."','$s_passwd',"."0,'$C_TIME','$srvb','$srve','".$_POST[$_GET{��}[0x0000018]].$_GET{��}{0x019}.$_POST[$_GET{��}[0x001a]].$_GET{��}{0x019}.$_GET{��}[0x00016]($_POST[$_GET{��}{0x0001b}]).$_GET{��}{0x019}.$_GET{��}[0x00016]($_POST[$_GET{��}[0x00001c]]).$_GET{��}{0x000001d};$DB_SL->{$_GET{��}[0x01e]}($sql);unset($sql);$DB_SL->{$_GET{��}{0x001f}}();if($_GET{��}[0x0010]($full_path_tmp.$TABLEPRE.$_GET{��}[0x00020]))$_GET{��}[0x000012]($full_path_tmp.$TABLEPRE.$_GET{��}[0x00020]);$DB_SL->{$_GET{��}{0x0000013}}($full_path_tmp.$TABLEPRE.$_GET{��}[0x00020]);$sql=<<<EOF
CREATE TABLE {$TABLEPRE}link (
id      INTEGER       PRIMARY KEY AUTOINCREMENT,
adminid INT           DEFAULT 0,
sortid  INT           DEFAULT 100,
name    VARCHAR (50)  NOT NULL,
url     VARCHAR (250) NOT NULL
);
EOF;
$DB_SL->{$_GET{��}[0x014]}($sql);unset($sql);$DB_SL->{$_GET{��}[0x01e]}("INSERT INTO {$TABLEPRE}link(adminid,sortid,name,url) VALUES"."($C_USER_ID,1,'Hodaedu.com','Hodaedu.com')");$DB_SL->{$_GET{��}{0x001f}}();if($_GET{��}[0x0010]($full_path_tmp.$TABLEPRE.$_GET{��}{0x000021}))$_GET{��}[0x000012]($full_path_tmp.$TABLEPRE.$_GET{��}{0x000021});$DB_SL->{$_GET{��}{0x0000013}}($full_path_tmp.$TABLEPRE.$_GET{��}{0x000021});$sql=<<<EOF
CREATE TABLE {$TABLEPRE}article (
id         INTEGER       PRIMARY KEY AUTOINCREMENT,
adminid    INT           DEFAULT 0,
channelid  INT           DEFAULT 0,
categoryid INT           DEFAULT 0,
sortid     SMALLINT (5)  DEFAULT 100,
title      VARCHAR (255) NOT NULL,
subtitle   VARCHAR (255),
url        VARCHAR (255),
urlimg     VARCHAR (255),
type       INT           DEFAULT 1,
pubtime    DATETIME      NOT NULL,
lasttime   TIMESTAMP,
content    TEXT          NOT NULL,
pv         INT           DEFAULT 0
);
EOF;
$DB_SL->{$_GET{��}[0x014]}($sql);unset($sql);$sql="INSERT INTO {$TABLEPRE}article(adminid,channelid,categoryid,".$_GET{��}[0x0000022]."($C_USER_ID,1,1,'��ӭʹ��HodaCMS�������ܽ�վϵͳ','',"."'$C_TIME','$C_TIME','����һƪ�������¡�')";$DB_SL->{$_GET{��}[0x01e]}($sql);unset($sql);$sql=<<<EOF
CREATE TABLE {$TABLEPRE}file (
id         INTEGER       PRIMARY KEY AUTOINCREMENT,
adminid    INT           DEFAULT 0,
articleid  INT           DEFAULT 0,
channelid  INT           DEFAULT 0,
categoryid INT           DEFAULT 0,
filename   VARCHAR (255) NOT NULL,
path       VARCHAR (255) NOT NULL,
mime       VARCHAR (50)  NOT NULL,
size       INT           DEFAULT 0
);
EOF;
$DB_SL->{$_GET{��}[0x014]}($sql);unset($sql);$DB_SL->{$_GET{��}{0x001f}}();if($_GET{��}[0x0010]($full_path_tmp.$TABLEPRE.$_GET{��}{0x023}))$_GET{��}[0x000012]($full_path_tmp.$TABLEPRE.$_GET{��}{0x023});$DB_SL->{$_GET{��}{0x0000013}}($full_path_tmp.$TABLEPRE.$_GET{��}{0x023});$sql=<<<EOF
CREATE TABLE {$TABLEPRE}feedback (
id         INTEGER       PRIMARY KEY AUTOINCREMENT,
adminid    INT           DEFAULT 0,
name       VARCHAR (50),
tel        VARCHAR (15),
email      VARCHAR (100),
askcontent TEXT,
ipaddr     VARCHAR (50),
asktime    DATETIME,
anscontent TEXT,
anstime    DATETIME
);
EOF;
$DB_SL->{$_GET{��}[0x014]}($sql);unset($sql);$DB_SL->{$_GET{��}{0x001f}}();if($_GET{��}[0x0010]($full_path_tmp.$TABLEPRE.$_GET{��}[0x0024]))$_GET{��}[0x000012]($full_path_tmp.$TABLEPRE.$_GET{��}[0x0024]);$DB_SL->{$_GET{��}{0x0000013}}($full_path_tmp.$TABLEPRE.$_GET{��}[0x0024]);$sql=<<<EOF
CREATE TABLE {$TABLEPRE}channel (
id        INTEGER       PRIMARY KEY AUTOINCREMENT,
adminid   INT           DEFAULT 0,
sortid    INT           DEFAULT 100,
name      VARCHAR (50)  NOT NULL,
dshow     INT           DEFAULT 0,
eurl      VARCHAR (255),
lproc     VARCHAR (50)  DEFAULT 'channel',
ltemplate VARCHAR (50)  DEFAULT 'channel',
vproc     VARCHAR (50)  DEFAULT 'view',
vtemplate VARCHAR (50)  DEFAULT 'view',
memo      VARCHAR (100),
active    INT           DEFAULT 1
);
EOF;
$DB_SL->{$_GET{��}[0x014]}($sql);unset($sql);$sql="INSERT INTO {$TABLEPRE}channel(id,adminid,name,lproc,ltemplate,memo)"." VALUES(1,$C_USER_ID,'��ҳ','home','home','��վ��ҳ')";$DB_SL->{$_GET{��}[0x01e]}($sql);unset($sql);$DB_SL->{$_GET{��}{0x001f}}();if($_GET{��}[0x0010]($full_path_tmp.$TABLEPRE.$_GET{��}{0x00025}))$_GET{��}[0x000012]($full_path_tmp.$TABLEPRE.$_GET{��}{0x00025});$DB_SL->{$_GET{��}{0x0000013}}($full_path_tmp.$TABLEPRE.$_GET{��}{0x00025});$sql=<<<EOF
CREATE TABLE {$TABLEPRE}category (
id        INTEGER       PRIMARY KEY AUTOINCREMENT,
adminid   INT           DEFAULT 0,
channelid INT           DEFAULT 1,
sortid    INT           DEFAULT 100,
name      VARCHAR (50)  NOT NULL,
dshow     INT           DEFAULT 0,
eurl      VARCHAR (255),
lproc     VARCHAR (50)  DEFAULT 'category',
ltemplate VARCHAR (50)  DEFAULT 'category',
vproc     VARCHAR (50)  DEFAULT 'view',
vtemplate VARCHAR (50)  DEFAULT 'view',
memo      VARCHAR (100),
homeshow  INT           DEFAULT 1,
active    INT           DEFAULT 1
);
EOF;
$DB_SL->{$_GET{��}[0x014]}($sql);unset($sql);$sql="INSERT INTO {$TABLEPRE}category(id,adminid,name,memo) VALUES"."(1,$C_USER_ID,'���¹���','��ҳ����'),(2,$C_USER_ID,'ͼƬ�ֲ�','��ҳ����')";$DB_SL->{$_GET{��}[0x01e]}($sql);unset($sql);$DB_SL->{$_GET{��}{0x001f}}();?>
