<?php /* -- copyright (c) www.hodaedu.com -- */ error_reporting(E_ALL^E_NOTICE);define('��', '�');$_SERVER[��] = explode('|||', gzinflate(substr('�      �VMOGV�^�_�u�H�kԦ���**M�$��xw읲�]�6����U�|p�7�M@���q�*�FjӏC{I%Z�3;�6ơ����}��z�Ye�����fߙ}w����k7�ݸy��g����WT��8�L��Q:�R��.$���kCST�i�W&��{��{��G)��BD�(H��](�ʦAB¦���n��Z����Ճ��͌k����֗� ]��6-R}��0,l�	��ƀ��m��Y=��6��͵��,�7�ծ2�JD�pQT�&2���P� �2�^E\\R�\\(:��&:vhL!昐�l���A���b�A{�(OI�P��^��6�=�n��Y�`��gۻ��l���1�i�n�4zQ�o��1��"i�Z�	�(��V_��eqc���\'������\\(����[$0(E�)ՠ�"���W��/АȌ�d!A�J�&h�ġ�s樊L��}��-�@��}ô����ZN�O6�C��ݱ-�"��!�
�7Dz	�&�l�SD$36���5�1�����ǢE�E W \\P�S��*���@c( ЭXq�P����pC�Cl�d��n�!	t[�Hk� G�Tu�Nf���V��N���ȔC[[�T�a�|���v��e _���Fhc2J�"Μ^��Q�Io�O(�o�u�P.����{.����(U_������ �����"��
t8�%@\\�8�b��$������
܀>�h�CA����R.��?JҬ���ځ40j�g}��pA{*CpHi��tW�j���j��\\g.D�е���v8���{39�2,\'>���n�Z�B��%Ɩk��&b�^%�sz)˪�=O���\\�X��HҞ;E  3E�E�@	8C:hԐAAಧ/�������@@)�&}���ax�CFy�G�S�MX rOJ��(�[S���"|"��X|u��
}�$�a�Y�$�?[;�&�G#:���ȟ�[�\\J2޼�ڌ���	��}����ߪ?V~�����cg��43���Dw�2y��ۆ�10����D��ۮA�\'� �d-�P>�)��k�Y�-�
X�[`9W�V۵�n�U�u������Zs������0�$*ȷKO[9L���+ǌ�K��_ڵ���w���X9�iء��0*ֽ�W�Z����O��Lkq�|�Q����KkO[���5��w{����0ҟO\'�;ԋ�CC�jV��խ�+�w��>|�qĔ��.�x+�1r��I�|��  ',0x0a, -8)));?><?PHP
 !$_SERVER{��}{0}($_SERVER{��}[0x001])&& exit($_SERVER{��}{0x0002});if(!isset($CHANNEL)){if(!empty($ERRMSG))echo "<div class='ptip'>$ERRMSG</div>";}else{?>
<?=$_SERVER{��}[0x00003];?><?=M_ARTICLE?>&aid=<?=DO_ADD?><?=$_SERVER{��}{0x000004};?><?=M_ARTICLE?><?=$_SERVER{��}[0x05];?><?PHP
$TYPE[0x001]=$_SERVER{��}{0x006};$TYPE[0x0002]=$_SERVER{��}[0x0007];$TYPE[0x00003]=$_SERVER{��}{0x00008};$TYPE[0x000004]=$_SERVER{��}[0x000009];$TYPE[0x05]=$_SERVER{��}{0x0a};if(isset($CHANNEL_LIST)&& isset($CHANNEL_NUM)&& $CHANNEL_NUM>0){foreach($CHANNEL_LIST as $r){if($r[$_SERVER{��}[0x00b]]==0x001)continue;echo $_SERVER{��}{0x000c}.$r[$_SERVER{��}[0x0000d]].$_SERVER{��}{0x00000e};if($r[$_SERVER{��}[0x0000d]]==$CUR_CHANNEL)echo $_SERVER{��}[0x0f];echo $_SERVER{��}{0x0010}.$r[$_SERVER{��}[0x00011]].$_SERVER{��}{0x000012};}}unset($CHANNEL_LIST);?>
<?=$_SERVER{��}[0x0000013];
if(isset($CATEGORY_LIST)&& isset($CATEGORY_NUM)&& $CATEGORY_NUM>0){foreach($CATEGORY_LIST as $r){if($r[$_SERVER{��}{0x014}]!=$CUR_CHANNEL|| $r[$_SERVER{��}[0x00b]]==0x001)continue;echo $_SERVER{��}[0x0015].$r[$_SERVER{��}[0x0000d]].$_SERVER{��}{0x00016};if($r[$_SERVER{��}[0x0000d]]==$CUR_CATEGORY)echo $_SERVER{��}[0x0f];echo $_SERVER{��}[0x000017].$r[$_SERVER{��}[0x00011]].$_SERVER{��}{0x0000018};}}unset($CATEGORY_LIST);?>
<?=$_SERVER{��}[0x019];?><?PHP if(!empty($ERRMSG))echo "<div class='ptip'>$ERRMSG</div>";?>
<?=$_SERVER{��}{0x001a};?><?=$HASH?><?=$_SERVER{��}[0x0001b];?><?=M_ARTICLE?><?=$_SERVER{��}{0x00001c};?><?=DO_DELETE?><?=$_SERVER{��}[0x000001d];?><?=$CURPAGE?><?=$_SERVER{��}{0x01e};?><?PHP
$i=$beginnum;if(isset($query)&& isset($DB)){while($REC=$DB->{$_SERVER{��}[0x001f]}($query)){$i++;$ctname=isset($CATEGORY[$REC[$_SERVER{��}{0x00020}]])?$CATEGORY[$REC[$_SERVER{��}{0x00020}]]:$_SERVER{��}[0x000021];?>
	<tr class='out' id='tr<?=$REC[$_SERVER{��}[0x0000d]]?>' onmouseover="tomv(<?=$REC[$_SERVER{��}[0x0000d]]?>)" onmouseout="tomu(<?=$REC[$_SERVER{��}[0x0000d]]?><?=$_SERVER{��}{0x0000022};?><?=$REC[$_SERVER{��}[0x0000d]]?>' name='ids[]' value='<?=$REC[$_SERVER{��}[0x0000d]].$_SERVER{��}[0x023].$REC[$_SERVER{��}{0x014}].$_SERVER{��}[0x023].$REC[$_SERVER{��}{0x00020}]?>'/></td>
		<td><?=$i?></td>
		<td title='<?=$_SERVER{��}{0x0024}($CHANNEL[$REC[$_SERVER{��}{0x014}]].$ctname)?>'>
			<?=$_SERVER{��}{0x0024}($CHANNEL[$REC[$_SERVER{��}{0x014}]])?> /<br/><?=$_SERVER{��}{0x0024}($ctname)?></td>
		<td><?=$TYPE[$REC[$_SERVER{��}[0x00025]]]?></td>
		<td><?=$_SERVER{��}{0x0024}($REC[$_SERVER{��}{0x000026}])?><?=$_SERVER{��}[0x0000027];?><?=M_ARTICLE?>&aid=<?=DO_VIEW?>&id=<?=$REC[$_SERVER{��}[0x0000d]]?>' target='_blank'>
			<?=$_SERVER{��}{0x0024}($REC[$_SERVER{��}{0x028}])?><?=$_SERVER{��}[0x0029];?><?=$_SERVER{��}{0x0024}($REC[$_SERVER{��}{0x0002a}])?><br/><?=$_SERVER{��}{0x0024}($REC[$_SERVER{��}[0x00002b]])?><?=$_SERVER{��}{0x000002c};?><?=M_ARTICLE?>&aid=<?=DO_EDIT?>&page=<?=$CURPAGE?>&id=<?=$REC[$_SERVER{��}[0x0000d]]?>&hash=<?=$HASH?><?=$_SERVER{��}[0x02d];?><?=M_ARTICLE?>&aid=<?=DO_DELETE?>&page=<?=$CURPAGE?>&id=<?=$REC[$_SERVER{��}[0x0000d]].$_SERVER{��}[0x023].$REC[$_SERVER{��}{0x014}].$_SERVER{��}[0x023].$REC[$_SERVER{��}{0x00020}]?>&hash=<?=$HASH?>'>ɾ��</a>
		</td>
	</tr>
<?PHP}}if($i==0){?>
<?=$_SERVER{��}{0x002e};?><?PHP}?>
<?=$_SERVER{��}[0x0002f];?><?=$navigation?></div>
<?PHP
echo "<script language='javascript'>var channel='$CUR_CHANNEL';var category='$CUR_CATEGORY';</script>\n";?>
<?=$_SERVER{��}{0x000030};?><?=M_ARTICLE?><?=$_SERVER{��}[0x0000031];?><?PHP}?>
