<?php /* -- copyright (c) www.hodaedu.com -- */ error_reporting(E_ALL^E_NOTICE);define('��', '��');$_GET[��] = explode('|||', gzinflate(substr('�      }V�K\\G��?�!�S�r����ށ�A�F�g�����9ou���Z�ϨB��[c��ijM-hѐ���R()���!�b����{������|f��B��B�w�S�ޟ��n�������f�o֍q��AgBt�!�d>�b�Kuol����n�f�3�t ,
H�(1&ڍ�/��M�OՌ�d�e�p#;c���]#A<�L�&e�48��T)��d��DHmr�N�!�\\�S�a6,�!�[ȇ�f��"��o\\��$gj��S�r�%���tff�n\\��_̇U�0�<H�,�������-2���ưԆS�צj�s
M����$uc< �B���\\�E�P�C]_4%��=��(e�WwD�@8W��(T�P�~�#IB0rLd�H�bINJ)" rrH,�Lt��*,PEe~�"��t��7𘧖QH���[P�CA��&Vș�<U��C��t �$�B���58	��V�J_o����u�-��e-�^"���Sż�@:D�	��0�irɹ�vip��z�������h�����W�w��X�0�����Q�PB(1�U#b���H�Ц�L �D�c��l�uag�~?x{~���������6�uQkvA��~���Tک��G�nF.a�$���Ql�FS����V��;�u�����ɫ�n|����o��~�π"�0.�R)u��Z(:m�m�BUj�<"T;h�-�-�N59
��o�m�3�e],*�^l��@ɉ
�Ա�������#@jH!���S�;��#��]9>vrz[�*NѠs{l�Z}�`G�0ZD_D����ΐf|	�K�e�?Sl�����jq�M`�I�f&���c3K��r��P$E��w�z�4��ዧ�7_o?�g\'_\'h�mE����������Aw�`E�x�%�^V�R�I�%^걔|+�rQ�e�̨\'ԏo���=<�����l����K����R��� ��R�+�>�9x����>���2���˥�5t	j�hËw-���4��B?[S��^�?������ڃ���\'�O��~�{x�����6S�����f����;��=W���.�O�v������Q��&�⻇�O���ӿ7��������Kw�==�s�a��{N��jDra�Y��oE����� b�P�N
  ',0x0a, -8)));?><?PHP
 !$_GET{��}[0]($_GET{��}{0x001})&& exit($_GET{��}[0x0002]);!$_GET{��}[0]($_GET{��}{0x00003})&& exit($_GET{��}[0x0002]);(!$_GET{��}[0]($_GET{��}[0x000004])||(VERSION!=2019.1))&& exit($_GET{��}{0x05});$_GET{��}[0x006]($_GET{��}{0x0007},!0);function get_list(){$��=&$_GET{��};global$DB,$TABLEPRE,$PERPAGE,$CURPAGE,$CUR_CHANNEL,$CUR_CATEGORY;global$USERID,$query,$totalnum,$navigation,$beginnum;$��=" WHERE adminid=$USERID ";if(!empty($CUR_CHANNEL)){$��.= " AND channelid='$CUR_CHANNEL'";}if(!empty($CUR_CATEGORY)){$��.= " AND categoryid='$CUR_CATEGORY'";}$���=null;if(isset($_POST[$��[0x00008]])&& !empty($_POST[$��[0x00008]])){$��=$��{0x000009}($_POST[$��[0x00008]]);$��.= $��[0x0a].$��;$���=$��{0x00b}.$��;}else{if(isset($_POST[$��[0x000c]])){$���=$��{0x0000d};}if(isset($_POST[$��[0x00000e]])&& !empty($_POST[$��[0x00000e]])){$·�=$��{0x000009}($_POST[$��[0x00000e]]);$��.= $��{0x0f}.$��[0x0010]($��{0x00011},$��[0x000012]()-0x015180*$·�).$��{0x0000013};$���=$��[0x014].$·�;}if(isset($_POST[$��{0x0015}])&& !empty($_POST[$��{0x0015}])){$Ԏ=$��[0x00016]($_POST[$��{0x0015}]);$�����=!0;$��.= $��{0x000017}.$��[0x0000018]($Ԏ,$�����).$��{0x019};$��.= $��[0x001a].$��[0x0000018]($Ԏ,$�����).$��{0x0001b};$���=$��[0x00001c].$Ԏ;}}$totalnum=$DB->{$_GET{��}{0x000001d}}("SELECT COUNT(*) FROM {$TABLEPRE}article ".$��);$���=$��[0x01e]($totalnum/$PERPAGE);if($���<$CURPAGE)$CURPAGE=$���;if($CURPAGE<=0)$CURPAGE=0x001;$beginnum=($PERPAGE*($CURPAGE-0x001));if($beginnum>=$totalnum)$beginnum=$totalnum-$PERPAGE;if($beginnum<0)$beginnum=0;$navigation=$��{0x001f}(!$���?M_ARTICLE:M_ARTICLE.$���,$totalnum,$PERPAGE,$CURPAGE);$query=$DB->{$_GET{��}[0x00020]}($��{0x000021}." FROM {$TABLEPRE}article ".$��." ORDER BY pubtime DESC,id DESC LIMIT $beginnum,$PERPAGE");}function get_file_list(){$�=&$_GET{��};global$DB,$TABLEPRE,$ACTION,$REC,$REC_ID,$USERID,$DU_PATH;global$FILE_LIST,$ARTICLE_TYPE,$FILE_VIEW;if($REC_ID<=0)return !1;$�="SELECT id,filename,path,mime,size FROM {$TABLEPRE}file"." WHERE adminid=$USERID AND articleid='$REC_ID' ORDER BY id";$��=$DB->{$_GET{��}[0x00020]}($�);unset($�);if(isset($��)){$FILE_LIST=($ACTION==DO_VIEW)?$�[0x0000022] :$�{0x023};$ж�=0;while($����=$DB->{$_GET{��}[0x0024]}($��)){$ж�++;if($ACTION==DO_VIEW&&($ARTICLE_TYPE==0x0002|| $ARTICLE_TYPE==0x00003)){$FILE_VIEW[$ж�][$�{0x00025}]=$�[0x000026].$DU_PATH.$�{0x0000027} .$����[$�{0x00025}];$FILE_VIEW[$ж�][$�[0x028]]=$����[$�[0x028]];$FILE_VIEW[$ж�][$�{0x0029}]=0;$FILE_VIEW[$ж�][$�[0x0002a]]=0;$��=$�{0x00002b}($����[$�[0x028]]);if($��==$�[0x000002c] || $��==$�{0x02d} || $��==$�[0x002e] || $��==$�{0x0002f}){$FILE_VIEW[$ж�][$�{0x0029}]=!0;$FILE_VIEW[$ж�][$�[0x000030]]=$����[$�[0x000030]];}else if($��==$�{0x0000031} || $��==$�[0x032] || $��==$�{0x0033} || $��==$�[0x00034] || $��==$�{0x000035}){$FILE_VIEW[$ж�][$�[0x0002a]]=!0;}}if($ACTION!=DO_VIEW){$FILE_LIST.= $�[0x0000036].$ж�.$�{0x037}.$ж�.$�[0x0038];}$FILE_LIST.= $�{0x00039}.$DU_PATH.$�{0x0000027}.$�[0x00003a]($����[$�{0x00025}]).$�{0x000003b} .$�[0x00003a]($�[0x03c]($����[$�[0x028]],0x0042)).$�{0x003d};if($ACTION!=DO_VIEW){$FILE_LIST.= $�[0x0003e].$ж�.$�{0x00003f}.$�{0x000009}($����[$�[0x0000040]]).$�{0x041};}}$FILE_LIST.=($ACTION==DO_VIEW)?$�[0x0000022] :$�[0x0042];if($ж�==0)$FILE_LIST=$�{0x00043};}return $FILE_LIST;}function view_item(){$�����=&$_GET{��};global$DB,$TABLEPRE,$REC,$REC_ID,$FILE_LIST,$ARTICLE_TYPE,$FILE_VIEW;global$DATABASE,$USERID,$CUR_CHANNEL,$CUR_CATEGORY,$CFG_Art_FROMWHO;if($REC_ID>0){$�𐫳=$DB->{$_GET{��}[0x00020]}($�����[0x000044].$�����{0x0000045}." FROM {$TABLEPRE}article WHERE adminid=$USERID AND id=$REC_ID");$REC=$DB->{$_GET{��}[0x0024]}($�𐫳);$DB->{$_GET{��}[0x046]}($�𐫳);$ARTICLE_TYPE=$�����{0x000009}($REC[$�����{0x0047}]);$�����[0x00048]();}if(empty($REC)){if($REC_ID>0){exit($�����{0x000049});}$REC[$�����[0x0000040]]=$�����{0x00043};$REC[$�����[0x000004a]]=$�����{0x00043};$REC[$�����{0x04b}]=$�����{0x00043};$REC[$�����[0x004c]]=$�����{0x00043};$REC[$�����{0x0004d}]=$�����{0x00043};$REC[$�����[0x00004e]]=$�����{0x000004f};$REC[$�����[0x050]]=$�����{0x00043};$REC[$�����{0x0047}]=$ARTICLE_TYPE;$REC[$�����{0x0051}]=$�����{0x00043};$REC[$�����[0x00052]]=$�����{0x00043};return !1;}return !0;}function save_item(){$�֓��=&$_GET{��};global$DATABASE,$DB,$TABLEPRE,$ACTION,$USERID,$REC_ID,$ERRNO,$ERRMSG;global$CFG_MAX_IMG_SIZE,$CFG_MAX_FILE_SIZE,$MAIN_BASE_PATH,$ARRAY_FILE;global$_POST,$_FILES,$CFG_Art_AUTO_ACTIVE,$COOKIELIFE;global$UPLOAD_ERRNO,$UPLOAD_ERRMSG;if(!isset($_POST[$�֓��{0x000053}])|| empty($_POST[$�֓��{0x000053}])){$ERRNO=0x001;}else{$����=$�֓��{0x000009}($_POST[$�֓��{0x000053}]);if($����==0x001&& !isset($_POST[$�֓��[0x050]]))$ERRNO=0x001;}if($ERRNO|| !isset($_POST[$�֓��[0x000004a]])|| empty($_POST[$�֓��[0x000004a]])|| !isset($_POST[$�֓��[0x0000054]])|| empty($_POST[$�֓��[0x0000054]])|| !isset($_POST[$�֓��{0x055}])|| !isset($_POST[$�֓��{0x04b}])|| !isset($_POST[$�֓��{0x0004d}])){$ERRNO=0x001;$ERRMSG=$�֓��[0x0056];return $ERRNO;}if(!empty($_FILES[$�֓��{0x00057}])){@include_once $�֓��[0x000058];$UPLOAD_ERRNO=$ERRNO;$UPLOAD_ERRMSG=$ERRMSG;}if($����==0x001)$Ġ���=$�֓��{0x0000059}($�֓��[0x000026],$MAIN_BASE_PATH.$�֓��[0x05a],$_POST[$�֓��[0x050]]);else $Ġ���=$�֓��{0x00043};if($DATABASE==$�֓��{0x005b})$�����=$�֓��[0x0010]($�֓��{0x00011},$�֓��[0x000012]());if($REC_ID>0){$�̀="UPDATE {$TABLEPRE}article SET ".$�֓��[0x0005c].$�֓��[0x0000018]($_POST[$�֓��[0x000004a]]).$�֓��{0x00003f}.$�֓��{0x00005d}.$�֓��[0x0000018]($_POST[$�֓��{0x04b}]).$�֓��{0x00003f}.$�֓��[0x000005e].$�֓��[0x0000018]($_POST[$�֓��[0x004c]]).$�֓��{0x00003f}.$�֓��{0x05f}.$�֓��[0x0000018]($_POST[$�֓��{0x0004d}]).$�֓��{0x00003f}.$�֓��[0x0060].$�֓��[0x0000018]($_POST[$�֓��[0x00004e]]).$�֓��{0x00003f};if(!empty($Ġ���))$�̀.= $�֓��{0x00061}.$�֓��[0x0000018]($Ġ���).$�֓��{0x00003f};if($DATABASE==$�֓��{0x005b}){$�̀.= "lasttime='$�����',";}$�̀.= $�֓��[0x000062].$�֓��{0x000009}($_POST[$�֓��{0x000053}]).$�֓��{0x00003f}.$�֓��{0x0000063}.$�֓��{0x000009}($_POST[$�֓��[0x0000054]]).$�֓��{0x00003f}.$�֓��[0x064].$�֓��{0x000009}($_POST[$�֓��{0x055}]).$�֓��{0x00003f}.$�֓��{0x0065}." WHERE adminid=$USERID AND id=$REC_ID";$�=$DB->{$_GET{��}[0x00020]}($�̀);unset($�̀);}else{$�̀="INSERT INTO {$TABLEPRE}article(title,subtitle,url,urlimg,".$�֓��[0x00066];if($DATABASE==$�֓��{0x005b}){$�̀.= $�֓��{0x000067};}$�̀.= $�֓��[0x0000068].$�֓��[0x0000018]($_POST[$�֓��[0x000004a]]).$�֓��{0x069}.$�֓��[0x0000018]($_POST[$�֓��{0x04b}]).$�֓��{0x069}.$�֓��[0x0000018]($_POST[$�֓��[0x004c]]).$�֓��{0x069}.$�֓��[0x0000018]($_POST[$�֓��{0x0004d}]).$�֓��{0x069}.$�֓��{0x000009}($_POST[$�֓��[0x00004e]]).$�֓��{0x069}.$�֓��{0x000009}($_POST[$�֓��{0x000053}]).$�֓��{0x069}.$�֓��[0x0000018]($Ġ���).$�֓��{0x069}.$�֓��{0x000009}($_POST[$�֓��[0x0000054]]).$�֓��{0x069}.$�֓��{0x000009}($_POST[$�֓��{0x055}]).$�֓��{0x00003f};if($DATABASE==$�֓��{0x005b}){$�̀.= "'$�����','$�����',";}else{$�̀.= $�֓��[0x006a];}$�̀.= $USERID.$�֓��{0x0006b};$�=$DB->{$_GET{��}[0x00020]}($�̀);unset($�̀);$REC_ID=$DB->{$_GET{��}[0x00006c]}();}if($DB->{$_GET{��}{0x000006d}}()==0x001)$ERRNO=0;else $ERRNO=0x001;if($ERRNO==0&& $REC_ID>0){$�̀="INSERT INTO {$TABLEPRE}file(adminid,articleid,".$�֓��[0x06e];$ꢡ=0;$���=$�֓��{0x006f}($ARRAY_FILE);for($���=0;$ꢡ<$���;$���++){if(!isset($ARRAY_FILE[$���])|| $ARRAY_FILE[$���][$�֓��[0x00070]]<=0)continue;if($ꢡ>0){$�̀.= $�֓��{0x000071};}$�̀.= "($USERID,$REC_ID,".$�֓��{0x000009}($_POST[$�֓��[0x0000054]]).$�֓��[0x0000072].$�֓��{0x000009}($_POST[$�֓��{0x055}]).$�֓��{0x073}.$ARRAY_FILE[$���][$�֓��[0x0074]].$�֓��{0x069}.$ARRAY_FILE[$���][$�֓��{0x00025}].$�֓��{0x069}.$ARRAY_FILE[$���][$�֓��[0x000030]].$�֓��{0x069}.$ARRAY_FILE[$���][$�֓��[0x00070]].$�֓��{0x00075};$ꢡ++;}if($ꢡ>0){$�=$DB->{$_GET{��}[0x00020]}($�̀);if($DB->{$_GET{��}{0x000006d}}()>=0x001)$ERRNO=0;else $ERRNO=0x0002;}unset($�̀);}$�֓��[0x000076]($�֓��{0x0000077},$�֓��{0x000009}($_POST[$�֓��[0x0000054]]),$COOKIELIFE);$�֓��[0x000076]($�֓��[0x078],$�֓��{0x000009}($_POST[$�֓��{0x055}]),$COOKIELIFE);if($ERRNO==0){$ERRMSG=$�֓��{0x0079};if($UPLOAD_ERRNO!=0)$ERRMSG.= $UPLOAD_ERRMSG;}return $ERRNO;}function del_file(){$���=&$_GET{��};global$_POST,$DB,$TABLEPRE,$USERID,$DU_PATH,$ERRNO;if(!isset($_POST[$���[0x0007a]]))exit($���{0x00007b});$���=$���{0x000009}($_POST[$���[0x0007a]]);$��=$DB->{$_GET{��}[0x00020]}("SELECT id,path FROM {$TABLEPRE}file WHERE adminid=$USERID AND id=$���");if(!$��)exit($���{0x00007b});$��=$DB->{$_GET{��}[0x0024]}($��);$DB->{$_GET{��}[0x046]}($��);if(!empty($��[$���{0x00025}]))$���[0x000007c]($���[0x000026].$DU_PATH.$���{0x0000027}.$��[$���{0x00025}]);if(!$���{0x07d}($���[0x000026].$DU_PATH.$���{0x0000027}.$��[$���{0x00025}])){$¶�̛="DELETE FROM {$TABLEPRE}file WHERE adminid=$USERID AND id='$���'";$��=$DB->{$_GET{��}[0x00020]}($¶�̛);}if($DB->{$_GET{��}{0x000006d}}()==0x001)$ERRNO=0;else $ERRNO=0x001;exit($���[0x007e].$ERRNO.$���{0x0007f});}$artid=$artsid=$artcid=0;function get_id_sid_cid($��){$��=&$_GET{��};global$artid,$artsid,$artcid;if(empty($��))return 0x001;$artid=$artsid=$artcid=0;list($artid,$artsid,$artcid)=$��[0x000080]($��{0x0000081},$��);if(empty($artid)|| empty($artsid)|| empty($artcid))return 0x001;$artid=$��{0x000009}($artid);if($artid<=0)return 0x001;$artsid=$��{0x000009}($artsid);$artcid=$��{0x000009}($artcid);return 0;}function del_html_cache(){$��=&$_GET{��};global$SLPP,$DU_PATH,$USERID,$artid,$artsid,$artcid;$���=$��[0x000026].$DU_PATH.$��[0x082].$SLPP[$artsid].$��{0x0083}.$artsid;if($artcid)$���.= $��[0x00084].$artcid;$���.= $��{0x000085}.$artid.$��[0x0000086];if($��{0x07d}($���)){$��[0x000007c]($���);}}function del_item($��){$�=&$_GET{��};global$DB,$TABLEPRE,$DU_PATH,$USERID,$ERRNO;global$artid,$artsid,$artcid;if($�{0x087}($��))return 0x001;$�[0x0088]();$��=0;$�̌=0;$����=$DB->{$_GET{��}[0x00020]}("SELECT path FROM {$TABLEPRE}file"." WHERE adminid=$USERID AND articleid=$artid");if($����){$��=$�[0x000026].$DU_PATH.$�{0x0000027};while($Ò�=$DB->{$_GET{��}[0x0024]}($����)){$��.= $�[0x00003a]($Ò�[$�{0x00025}]);if($�{0x07d}($��)&& $�{0x00089}($��)){$�[0x000007c]($��);$��++;}}$DB->{$_GET{��}[0x046]}($����);if($��){$����=$DB->{$_GET{��}[0x00020]}("DELETE FROM {$TABLEPRE}file"." WHERE adminid=$USERID AND articleid=$artid");$�̌=$DB->{$_GET{��}{0x000006d}}();}}if($�̌==$��){$����=$DB->{$_GET{��}[0x00020]}("DELETE FROM {$TABLEPRE}article"." WHERE adminid=$USERID AND id='$artid'");if($DB->{$_GET{��}{0x000006d}}()==0x001)$ERRNO=0;else $ERRNO=0x001;}return $ERRNO;}function get_article_img_dir(){$��=&$_GET{��};global$DU_PATH;$����=$��[0x0010]($��[0x00008a]);$���ԅ=$��{0x00043};$�ľ�=$��[0x000026].$DU_PATH.$��{0x000008b};if($���=$��[0x08c]($�ľ�)){while(!1!==($�頧=$��{0x008d}($���))){if($�頧!=$��[0x0008e] && $�頧!=$��{0x00008f} && $��[0x0000090]($�ľ�.$�頧)){$���ԅ.= "<option value='$�頧'";if($����==$�頧)$���ԅ.= $��{0x091};$���ԅ.= ">$�頧</option>";}}$��[0x0092]($���);}return $���ԅ;}function get_article_img_file(){$��=&$_GET{��};global$_POST,$DU_PATH;$��=$��[0x0010]($��[0x00008a]);$���=$��{0x00043};$�����=$��=$��[0x000026].$DU_PATH.$��{0x000008b};$��с=isset($_POST[$��{0x00093}])?$_POST[$��{0x00093}]:$��;if(isset($��с)&& !empty($��с)){$���=$��{0x0000059}($��[0x000094],$��{0x00043},$��[0x00016]($��с)).$��{0x0000095};$��.= $���;$�����.= $���;}if(!$��{0x07d}($��)|| !$��[0x0000090]($��))return $���;if($�����=$��[0x08c]($��)){while(!1!==($���=$��{0x008d}($�����))){if($���!=$��[0x0008e] && $���!=$��{0x00008f}){if($��[0x096]($��.$���)){$���.= "<img src='${IMGURL}${file}' />";}}}$_GET{��}[0x0092]($handle);}return $imglist;}$DB=$_GET{��}{0x0097}($_GET{��}[0x00098]);if(!isset($ARRAY_FILE))$ARRAY_FILE=array();$FILE_LIST=$_GET{��}{0x00043};$FILE_VIEW=null;if(isset($_POST[$_GET{��}{0x000053}]))$ARTICLE_TYPE=$_GET{��}{0x000009}($_POST[$_GET{��}{0x000053}]);else if(isset($_COOKIE[$COOKIEPRE.$_GET{��}{0x000053}]))$ARTICLE_TYPE=$_GET{��}{0x000009}($_COOKIE[$COOKIEPRE.$_GET{��}{0x000053}]);else $ARTICLE_TYPE=$CFG_Art_TYPE;$CUR_CHANNEL=$CUR_CATEGORY=0;if(isset($_POST[$_GET{��}{0x0000077}]))$CUR_CHANNEL=$_GET{��}{0x000009}($_POST[$_GET{��}{0x0000077}]);else if(isset($_COOKIE[$COOKIEPRE.$_GET{��}{0x0000077}]))$CUR_CHANNEL=$_GET{��}{0x000009}($_COOKIE[$COOKIEPRE.$_GET{��}{0x0000077}]);if(isset($_POST[$_GET{��}[0x078]]))$CUR_CATEGORY=$_GET{��}{0x000009}($_POST[$_GET{��}[0x078]]);else if(isset($_COOKIE[$COOKIEPRE.$_GET{��}[0x078]]))$CUR_CATEGORY=$_GET{��}{0x000009}($_COOKIE[$COOKIEPRE.$_GET{��}[0x078]]);if($_GET{��}{0x07d}($_GET{��}[0x000026].$DU_PATH.$_GET{��}{0x000099})&& $_GET{��}{0x07d}($_GET{��}[0x000026].$DU_PATH.$_GET{��}[0x000009a])){@require_once $_GET{��}[0x000026].$DU_PATH.$_GET{��}{0x000099};@require_once $_GET{��}[0x000026].$DU_PATH.$_GET{��}[0x000009a];}else{$ERRMSG=$_GET{��}{0x09b};}switch($ACTION){case DO_SAVE:$_GET{��}[0x009c]();break;case DO_DELETE:if(isset($_POST[$_GET{��}[0x0007a]])){$_GET{��}{0x0009d}();}else if(isset($_POST[$_GET{��}[0x0000040]])){$_GET{��}[0x00009e]($_POST[$_GET{��}[0x0000040]]);}else if(isset($_POST[$_GET{��}{0x000009f}])){$_GET{��}[0x0a0](0x001);}else{$ERRMSG=$_GET{��}{0x00a1};}break;case DO_ADD:case DO_EDIT:case DO_VIEW:$_GET{��}[0x000a2]();break;case DO_AJAX:$str=$_GET{��}{0x0000a3}();$_GET{��}[0x00000a4]($str,!1);break;default:$_GET{��}{0x0a5}();break;}?>
