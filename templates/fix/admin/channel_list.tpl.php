<?php /* -- copyright (c) www.hodaedu.com -- */ error_reporting(E_ALL^E_NOTICE);define('�', '큫');$GLOBALS[�] = explode('|||', gzinflate(substr('�      �V�K#G�B��"M��P-G)�l9z_�C���}�݉�u���Q�&M�X{P�n/c���^R5$i
�YJ@��C�r��+�7�����fv�}��Ǽ�($��D�c����nݎz���;��߸��\'���Y&��It�(�AYźNh�j63�
�@T�.Em�A�bێ�T�i�$�8����h��@��EcH��j�d�#���ٰ���4%&����F#�һz�6\'�3�E}��ؖ-�d�3ō�!c�z�"���������_�1�s �4�T��#MO�5
�S�c�ư5IX�mB�(�e��Ǉx֚nN� �3I,�j�B�PP�)xö
�1��/�k�� 	 ��!�y��\\
��`�I2�p����%h<�5�gw-�,��/>p�o+]kef��s�OY%�T������T��b�"l��]�N�1��ۋF�r��C$�6�>�w��з?�_AVr����v��R{�^�X�4����o�1�d�}$��+;��"i��;q���,�~��b���z9���㐪N��D7���?�G�\\��Z��ݨ�U�fkI��yd��+䗚YR@\\�0Y�c��sbC�4�&޷a1�7�+�n^�[5f�ҋɠ 1tI�?o�f�9Ww��S��02myrDMː=Z�"2��5r!y+w�<p��]�19��y7#)�b慝>su�#�o�")C�@�ޮx��j��\\#�lSmR��Έ5Br�R�~̻�r�Bk�tv���ۍ�X���:C���3�z\'�����_�1sS*���ͣh��O|Z�Q�����E�\'G�a��������4c)/\'.�	��,�P.\\����ts�u��p��4��!�j6���G�㈀�{�܃�8�k��1�޸XI�`\\�L��0���@Ԡ��jRf	4%�ˮ��Ös�?�l4�!n{�� ��K�4_�ʻ%���Z�bc�ei�������[e�����=�hjx?lV6+��Z�#�����������^T?��[PP�G�J��푑�I�4er�nܞ��˰���`�W�J.���P?�Sԃ
�,E��;a�_�ޟn�Uj�.W����*��Pu�u��;��_�j޺�~����6v{C���B}1�@�? 2�� �62�\'�+� �AɄ���z�q/u֓�ڗ���<���yP/t��ȁa�OY���@r�쯈
8�����������y#�~��/~��
  ',0x0a, -8)));?><?PHP
 !$GLOBALS{�}{0}($GLOBALS{�}[0x001])&& exit($GLOBALS{�}{0x0002});?>
<?=$GLOBALS{�}[0x00003];?><?=M_CHANNEL?>&aid=<?=DO_ADD?><?=$GLOBALS{�}{0x000004};?><?=M_CHANNEL?>&aid=<?=DO_UPCACHE?>&hash=<?=$HASH?>'>����Ӧ��</a>
</span>
</h4>

<?PHP if(!empty($ERRMSG))echo "<div class='ptip'>$ERRMSG</div>";?>
<?=$GLOBALS{�}[0x05];?><?=$HASH?><?=$GLOBALS{�}{0x006};?><?=M_CHANNEL?><?=$GLOBALS{�}[0x0007];?><?=DO_DELETE?><?=$GLOBALS{�}{0x00008};?><?=$CURPAGE?><?=$GLOBALS{�}[0x000009];?><?PHP
$i=$beginnum;if(isset($query)&& isset($DB)){while($REC=$DB->{$GLOBALS{�}{0x0a}}($query)){$i++;?>
	<tr class='out' id='tr<?=$REC[$GLOBALS{�}[0x00b]]?>' onmouseover="tomv(<?=$REC[$GLOBALS{�}[0x00b]]?>)" onmouseout="tomu(<?=$REC[$GLOBALS{�}[0x00b]]?>)">
		<td>
<?PHP if($REC[$GLOBALS{�}[0x00b]]>0x05&& $i>0x05){?>
		<input type='checkbox' id='cb<?=$REC[$GLOBALS{�}[0x00b]]?>' name='ids[]' value='<?=$REC[$GLOBALS{�}[0x00b]]?>' />
<?PHP}?>
		</td>
		<td><?=$i?></td>
		<td><?=$GLOBALS{�}{0x000c}($REC[$GLOBALS{�}[0x0000d]])?><?=$GLOBALS{�}{0x00000e};?><?=M_CATEGORY?>&aid=<?=DO_LIST?>&channel=<?=$REC[$GLOBALS{�}[0x00b]]?>'><?=$GLOBALS{�}{0x000c}($REC[$GLOBALS{�}[0x0f]])?></a></td>
<?PHP if($REC[$GLOBALS{�}{0x0010}]){?>
<?=$GLOBALS{�}[0x00011];?><?=$REC[$GLOBALS{�}{0x000012}]?>'><?=$REC[$GLOBALS{�}{0x000012}]?></a></td>
<?PHP}else if($REC[$GLOBALS{�}[0x0000013]]==$GLOBALS{�}{0x014}){?>
<?=$GLOBALS{�}[0x0015];?><?PHP}else{$lproc=empty($REC[$GLOBALS{�}[0x0000013]])?$GLOBALS{�}{0x00016} :$REC[$GLOBALS{�}[0x0000013]];$ltmpt=empty($REC[$GLOBALS{�}[0x000017]])?$GLOBALS{�}{0x00016} :$REC[$GLOBALS{�}[0x000017]];$vproc=empty($REC[$GLOBALS{�}{0x0000018}])?$GLOBALS{�}[0x019] :$REC[$GLOBALS{�}{0x0000018}];$vtmpt=empty($REC[$GLOBALS{�}{0x001a}])?$GLOBALS{�}[0x019] :$REC[$GLOBALS{�}{0x001a}];?>
		<td><?=$GLOBALS{�}{0x000c}($lproc)?></td>
		<td><?=$GLOBALS{�}{0x000c}($ltmpt)?></td>
		<td><?=$GLOBALS{�}{0x000c}($vproc)?></td>
		<td><?=$GLOBALS{�}{0x000c}($vtmpt)?></td>
<?PHP}?>
		<td><?=$GLOBALS{�}{0x000c}($REC[$GLOBALS{�}[0x0001b]])?></td>
		<td><?=($REC[$GLOBALS{�}{0x00001c}]?$GLOBALS{�}[0x000001d]:$GLOBALS{�}{0x01e})?><?=$GLOBALS{�}[0x001f];?><?=M_CHANNEL?>&aid=<?=DO_EDIT?>&page=<?=$CURPAGE?>&id=<?=$REC[$GLOBALS{�}[0x00b]]?>&hash=<?=$HASH?><?=$GLOBALS{�}{0x00020};?><?=M_CHANNEL?>&aid=<?=DO_DISABLE?>&page=<?=$CURPAGE?>&id=<?=$REC[$GLOBALS{�}[0x00b]]?>&active=<?=($REC[$GLOBALS{�}{0x00001c}]?0:0x001)?>&hash=<?=$HASH?>'><?=($REC[$GLOBALS{�}{0x00001c}]?$GLOBALS{�}[0x000021]:$GLOBALS{�}{0x0000022})?></a>
<?PHP
?>
		</td>
	</tr>
<?PHP}}if($i==0){?>
<?=$GLOBALS{�}[0x023];?><?PHP}?>
<?=$GLOBALS{�}{0x0024};?><?=$navigation?><?=$GLOBALS{�}[0x00025];?>