<?php /* -- copyright (c) www.hodaedu.com -- */ error_reporting(E_ALL^E_NOTICE);define('���', '�');$_SERVER[���] = explode('|||', gzinflate(substr('�      �Vmo�V֤i�Y&��$TB��&����|��&��ؖ}���&x V*Ѵ5�MCZ��$KB�Lh���$Z�"���k\'���-l�s�s��9ύ�Ӳ�����ߟ�����_:����q�	O6����X�	��XI*�I�DW��X\\:��M�WC�fe�D&
F�f�VY{��2�mn,�E�X�	��|H2p:��1Y�\\T��ϲ��`���ˍN<�s�)S�bϱ�+>Ǜ�!�dr��٨�	<�55j`E����S��_i�=��a���l�v�u���^BL1���#��|�նmoZ�f��
H�G&&I��(d�_��@!MY2���:�|� �lFs�2�!���C�!W�@\'���X�D"���N4%m�7�	3���A8��!0��gF�س�O�t��i�Ⱥ��jZ��A�,&�F%�+�L(I�i��8D;FV�"�u�$�"V�!��xS
�� z��/�w±#���|� |J��I)�,/�4�cqb�b���cT,���	ẓ>	�)m�����"�	d`2c�V��������q��OwN��G��%���ۯuo�lv�;��Σ�
��y0��ֳ�0�N��ݻ�ժ��^��[�n�R�Y��H�8����� �
��V�eͪ��7���k,���m�ilpu���_��}����Z�m��[����&����Ȱ�+�}>��1�$o�e&��,α����izsij�٣����:��?n�R��ØRxuy��`x��^�M�L�g4�L!8�+TĖ��^.���Y�}���<i��Ȱ:&��$x�DxEΨ�V	6�����[?k@�����p����f��N�}m��܉Meh5#�>J�����������\\��i9��<���Η~1�@D9�\'��(����ɉ����?�?5C�F�ˉ�)2  +t�M�X<�g��APLp�q�8�%�#b48�#�������94 yW��{�k�5�P��)��lX�cqM�6��/[��z������>>�[�U���@� ��{��B����rp�O��b�v��_�v
�B���������{��^ծ��A��`�Q{x��Sp�:{���_A���m@��>E�>�B�nW�`��H�Ue��K2\'��|���Sk�*|?�k,���������E#��D�
�|�z���oaOV���rݾ�ڹ�W�X�k��vi{2��C5ϞI����[�;���ѐ ���r��P���W y�������
�.��;(s׸�.ٵ#��$�v���(�ǃ5���Kn@�P�љl�������V{�b���y���;���r�yvk��M_ߧEkq(]z�K�wШ�>�4��1���_���Í��Ck��*S�ag�|ֹ�1w
���{`���  ',0x0a, -8)));?><?PHP
 !$_SERVER{���}[0]($_SERVER{���}{0x001})&& exit($_SERVER{���}[0x0002]);if(!isset($CHANNEL)){if(!empty($ERRMSG))echo "<div class='ptip'>$ERRMSG</div>";}else{?>
<?=$_SERVER{���}{0x00003};?><?=M_CATEGORY?>&aid=<?=DO_ADD?><?=$_SERVER{���}[0x000004];?><?=M_CATEGORY?>&aid=<?=DO_UPCACHE?>&hash=<?=$HASH?><?=$_SERVER{���}{0x05};?><?PHP
echo $_SERVER{���}[0x006].M_CATEGORY.$_SERVER{���}{0x0007};if(isset($CHANNEL_LIST)&& isset($CHANNEL_NUM)&& $CHANNEL_NUM>0){foreach($CHANNEL_LIST as $r){if($r[$_SERVER{���}[0x00008]]==0x001)continue;echo $_SERVER{���}{0x000009}.$r[$_SERVER{���}[0x0a]].$_SERVER{���}{0x00b};if($r[$_SERVER{���}[0x0a]]==$CUR_CHANNEL)echo $_SERVER{���}[0x000c];echo $_SERVER{���}{0x0000d}.$r[$_SERVER{���}[0x00000e]].$_SERVER{���}{0x0f};}}unset($CHANNEL_LIST);echo $_SERVER{���}[0x0010];?>
</h4>

<?PHP if(!empty($ERRMSG))echo "<div class='ptip'>$ERRMSG</div>";?>
<?=$_SERVER{���}{0x00011};?><?=$HASH?><?=$_SERVER{���}[0x000012];?><?=M_CATEGORY?><?=$_SERVER{���}{0x0000013};?><?=DO_DELETE?><?=$_SERVER{���}[0x014];?><?=$CURPAGE?><?=$_SERVER{���}{0x0015};?><?PHP
$i=$beginnum;if(isset($query)&& isset($DB)){while($REC=$DB->{$_SERVER{���}[0x00016]}($query)){$i++;?>
	<tr class='out' id='tr<?=$REC[$_SERVER{���}[0x0a]]?>' onmouseover="tomv(<?=$REC[$_SERVER{���}[0x0a]]?>)" onmouseout="tomu(<?=$REC[$_SERVER{���}[0x0a]]?>)">
		<td>
<?PHP if($REC[$_SERVER{���}[0x0a]]>0x05&& $i>0x05){?>
		<input type='checkbox' id='cb<?=$REC[$_SERVER{���}[0x0a]]?>' name='ids[]' value='<?=$REC[$_SERVER{���}[0x0a]]?>' />
<?PHP}?>
		</td>
		<td><?=$i?></td>
		<td><?=($REC[$_SERVER{���}{0x000017}]?$_SERVER{���}[0x0000018]:$_SERVER{���}{0x019})?></td>
		<td><?=$_SERVER{���}[0x001a]($REC[$_SERVER{���}{0x0001b}])?></td>
		<td><?=$_SERVER{���}[0x001a]($CHANNEL[$REC[$_SERVER{���}[0x00001c]]])?> /<br/><a href='./index.php?mid=<?=M_ARTICLE?>&aid=<?=DO_LIST?>&category=<?=$REC[$_SERVER{���}[0x0a]]?>&page=<?=$CURPAGE?>'><?=$_SERVER{���}[0x001a]($REC[$_SERVER{���}[0x00000e]])?></a></td>
<?PHP if($REC[$_SERVER{���}[0x00008]]){?>
<?=$_SERVER{���}{0x000001d};?><?=$REC[$_SERVER{���}[0x01e]]?>'><?=$REC[$_SERVER{���}[0x01e]]?></a></td>
<?PHP
}else{$lproc=empty($REC[$_SERVER{���}{0x001f}])?$_SERVER{���}[0x00020] :$REC[$_SERVER{���}{0x001f}];$ltmpt=empty($REC[$_SERVER{���}{0x000021}])?$_SERVER{���}[0x00020] :$REC[$_SERVER{���}{0x000021}];$vproc=empty($REC[$_SERVER{���}[0x0000022]])?$_SERVER{���}{0x019} :$REC[$_SERVER{���}[0x0000022]];$vtmpt=empty($REC[$_SERVER{���}{0x023}])?$_SERVER{���}{0x019} :$REC[$_SERVER{���}{0x023}];?>
		<td><?=$_SERVER{���}[0x001a]($lproc)?></td>
		<td><?=$_SERVER{���}[0x001a]($ltmpt)?></td>
		<td><?=$_SERVER{���}[0x001a]($vproc)?></td>
		<td><?=$_SERVER{���}[0x001a]($vtmpt)?></td>
<?PHP}?>
		<td><?=$_SERVER{���}[0x001a]($REC[$_SERVER{���}[0x0024]])?></td>
		<td><?=($REC[$_SERVER{���}{0x00025}]?$_SERVER{���}{0x019}:$_SERVER{���}[0x000026])?><?=$_SERVER{���}{0x0000027};?><?=M_CATEGORY?>&aid=<?=DO_EDIT?>&page=<?=$CURPAGE?>&id=<?=$REC[$_SERVER{���}[0x0a]]?>&hash=<?=$HASH?><?=$_SERVER{���}[0x028];?><?=M_CATEGORY?>&aid=<?=DO_DISABLE?>&page=<?=$CURPAGE?>&id=<?=$REC[$_SERVER{���}[0x0a]]?>&active=<?=($REC[$_SERVER{���}{0x00025}]?0:0x001)?>&hash=<?=$HASH?>'><?=($REC[$_SERVER{���}{0x00025}]?$_SERVER{���}{0x0029}:$_SERVER{���}[0x0002a])?></a>
<?PHP  ?>
		</td>
	</tr>
<?PHP}}if($i==0){?>
<?=$_SERVER{���}{0x00002b};?><?PHP}?>
<?=$_SERVER{���}[0x000002c];?><?=$navigation?><?=$_SERVER{���}{0x02d};?><?PHP}?>
