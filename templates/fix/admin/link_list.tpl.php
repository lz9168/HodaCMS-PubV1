<?php /* -- copyright (c) www.hodaedu.com -- */ error_reporting(E_ALL^E_NOTICE);define('ڈ�', '���');$GLOBALS[ڈ�] = explode('|||', gzinflate(substr('�      �T�kA>��+����l"�dW�^<�J��2;3�3�f_�����?Ђ��P+�V!�w^<	Rp���6�����Λ�}��|o(K�dt��}�?\\���n��o,���^�	ay�=`�3����X��E�Qkg��v����y�^C����o�{/���mG�)/�倬{�ai�����:��z��?�>|߷8�)�\\���3�<�91\\Cs���f](��+Y7L(L�Z(:����1+���������"��(���jU\'Rez��#.S�ڄ��LY�Vn�t�(ΙH����s*�k��li���Iߓ��V8�|o�E�.���4  T ������*����q�]� �69�D�=̥�n��2�J)�9k�o��@�TL�1�M԰��<%��"ào���n��8=�v �"����̽��я�7wQt�k�͹������.z��{ɯ�/��H�,�����˹[�+�;A��p�Y�V*��i�EҮy�W߈
����Ö��aޑM�$0���Q}}��N�z�������\\Ms���C�P&D7��ߙF�p,!�m�YGG/ƣ�\'_ځ�������Ƥ|Pզ1�\\vA�fcI[�-�(+�2}{�$0�;e�����D��vO���:0`n��y�xn%��l��p�D��;Y7?P��I��  ',0x0a, -8)));?><?PHP
 !$GLOBALS{ڈ�}[0]($GLOBALS{ڈ�}{0x001})&& exit($GLOBALS{ڈ�}[0x0002]);?>
<?=$GLOBALS{ڈ�}{0x00003};?><?=M_LINK?>&aid=<?=DO_ADD?><?=$GLOBALS{ڈ�}[0x000004];?><?=M_LINK?>&aid=<?=DO_UPCACHE?>&hash=<?=$HASH?><?=$GLOBALS{ڈ�}{0x05};?><?PHP if(!empty($ERRMSG))echo "<div class='ptip'>$ERRMSG</div>";?>
<?=$GLOBALS{ڈ�}[0x006];?><?=$HASH?><?=$GLOBALS{ڈ�}{0x0007};?><?=M_LINK?><?=$GLOBALS{ڈ�}[0x00008];?><?=DO_DELETE?><?=$GLOBALS{ڈ�}{0x000009};?><?=$CURPAGE?><?=$GLOBALS{ڈ�}[0x0a];?><?PHP
$i=$beginnum;if(isset($query)&& isset($DB)){while($REC=$DB->{$GLOBALS{ڈ�}{0x00b}}($query)){$i++;?>
	<tr class='out' id='tr<?=$REC[$GLOBALS{ڈ�}[0x000c]]?>' onmouseover="tomv(<?=$REC[$GLOBALS{ڈ�}[0x000c]]?>)" onmouseout="tomu(<?=$REC[$GLOBALS{ڈ�}[0x000c]]?><?=$GLOBALS{ڈ�}{0x0000d};?><?=$REC[$GLOBALS{ڈ�}[0x000c]]?>' name='ids[]' value='<?=$REC[$GLOBALS{ڈ�}[0x000c]]?>' /></td>
		<td><?=$i?></td>
		<td><?=$GLOBALS{ڈ�}[0x00000e]($REC[$GLOBALS{ڈ�}{0x0f}])?><?=$GLOBALS{ڈ�}[0x0010];?><?=M_LINK?>&aid=<?=DO_EDIT?>&page=<?=$CURPAGE?>&id=<?=$REC[$GLOBALS{ڈ�}[0x000c]]?>&hash=<?=$HASH?>'><?=$GLOBALS{ڈ�}[0x00000e]($REC[$GLOBALS{ڈ�}{0x00011}])?></a></td>
		<td><a href='<?=$GLOBALS{ڈ�}[0x00000e]($REC[$GLOBALS{ڈ�}[0x000012]])?>' target='_blank'><?=$GLOBALS{ڈ�}[0x00000e]($REC[$GLOBALS{ڈ�}[0x000012]])?><?=$GLOBALS{ڈ�}{0x0000013};?><?=M_LINK?>&aid=<?=DO_EDIT?>&page=<?=$CURPAGE?>&id=<?=$REC[$GLOBALS{ڈ�}[0x000c]]?>&hash=<?=$HASH?><?=$GLOBALS{ڈ�}[0x014];?><?=M_LINK?>&aid=<?=DO_DELETE?>&page=<?=$CURPAGE?>&id=<?=$REC[$GLOBALS{ڈ�}[0x000c]]?>&hash=<?=$HASH?>'>ɾ��</a>
		</td>
	</tr>
<?PHP}}if($i==0){?>
<?=$GLOBALS{ڈ�}{0x0015};?><?PHP}?>
<?=$GLOBALS{ڈ�}[0x00016];?><?=$navigation?></div>
