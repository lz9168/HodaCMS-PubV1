<?php /* -- copyright (c) www.hodaedu.com -- */ error_reporting(E_ALL^E_NOTICE);define('���', '���');$_GET[���] = explode('|||', gzinflate(substr('�      �T�kAG��+�N=�m���+����V�ޗٝ��1��ag�����GoUJۢ-(V�BA� x�A�Rq&�I�T�������G �H�\\�|���������������r6�A)�.p
��`Ҥ<dT銖,w)y��Ss\'fX)5CM5<������ZcP��!���b\'� �Qť��JE��V�?���wG[����K<Rr&P�p�8�Rז^,W�����W2`���3(x�v�;>���%/Y�12�<�i�4A��h����Y��B,A�mޡx�A�eK;zU�_N)!���M+a���6f-#�Y�� �P@�:T���|�3��aB�A��"61妻	Og=���{i¨Iߛ,WQ0�3N!nDb��9�ǌ�e�[��I�1c���\\MNǼ��9Q9m+�|��`����ޯ�������8ku�|Z{�m}��������x���{�K����������dA)?�t��8��j���H*ȿ`f*�Z
��di}���>-#�y,O��5��QD���E�k���v���H��b� ����z�m*�ʺ"�����U�˕���fP����鯍��]F�X0���b�}�F��MC#�=?<�?���r�E�Ks�����i!kթn?C\\�ZZ3?E�fE�?N�a�Y��z����ݍh�b=�S��]S������T�c7�O��(���>��  ',0x0a, -8)));?><?PHP
 !$_GET{���}[0]($_GET{���}{0x001})&& exit($_GET{���}[0x0002]);?>
<?=$_GET{���}{0x00003};?><?=M_ADMIN?>&aid=<?=DO_ADD?><?=$_GET{���}[0x000004];?><?=M_ADMIN?>&aid=<?=DO_UPCACHE?>&hash=<?=$HASH?>'>����Ӧ��</a>
</span>
</h4>

<?PHP if(!empty($ERRMSG))echo "<div class='ptip'>$ERRMSG</div>";?>
<?=$_GET{���}{0x05};?><?=$HASH?><?=$_GET{���}[0x006];?><?=M_ADMIN?><?=$_GET{���}{0x0007};?><?=DO_DELETE?><?=$_GET{���}[0x00008];?><?=$CURPAGE?><?=$_GET{���}{0x000009};?><?PHP
$i=$beginnum;if(isset($query)&& isset($DB)){while($REC=$DB->{$_GET{���}[0x0a]}($query)){$i++;?>
	<tr class='out' id='tr<?=$REC[$_GET{���}{0x00b}]?>' onmouseover="tomv(<?=$REC[$_GET{���}{0x00b}]?>)" onmouseout="tomu(<?=$REC[$_GET{���}{0x00b}]?>)">
		<td>
<?PHP if($REC[$_GET{���}{0x00b}]!=0x001&& $REC[$_GET{���}{0x00b}]!=$USERID){?>
		<input type='checkbox' id='cb<?=$REC[$_GET{���}{0x00b}]?>' name='ids[]' value='<?=$REC[$_GET{���}{0x00b}]?>' />
<?PHP}?>
		</td>
		<td><?=$i?></td>
		<td><a title='<?=$_GET{���}[0x000c]($REC[$_GET{���}{0x0000d}])?>' href='./index.php?mid=<?=M_ADMIN?>&aid=<?=DO_EDIT?>&page=<?=$CURPAGE?>&id=<?=$REC[$_GET{���}{0x00b}]?>&hash=<?=$HASH?>'><?=$_GET{���}[0x000c]($REC[$_GET{���}[0x00000e]])?><?=$_GET{���}{0x0f};?><?=$_GET{���}[0x000c]($REC[$_GET{���}[0x0010]])?>/'><?=$_GET{���}[0x000c]($REC[$_GET{���}[0x0010]])?></a></td>
		<td><?=$_GET{���}[0x000c]($REC[$_GET{���}{0x00011}])?></td>
		<td><?=$_GET{���}[0x000c]($REC[$_GET{���}[0x000012]])?> <br/> <?=$_GET{���}[0x000c]($REC[$_GET{���}{0x0000013}])?></td>
		<td><?=$_GET{���}[0x000c]($REC[$_GET{���}[0x014]])?> <br/> <?=$_GET{���}[0x000c]($REC[$_GET{���}{0x0015}])?><?=$_GET{���}[0x00016];?><?=M_ADMIN?>&aid=<?=DO_EDIT?>&page=<?=$CURPAGE?>&id=<?=$REC[$_GET{���}{0x00b}]?>&hash=<?=$HASH?>'>�޸�</a>
<?PHP if($REC[$_GET{���}{0x00b}]!=0x001&& $REC[$_GET{���}{0x00b}]!=$USERID){?>
<?=$_GET{���}{0x000017};?><?=M_ADMIN?>&aid=<?=DO_DELETE?>&page=<?=$CURPAGE?>&id=<?=$REC[$_GET{���}{0x00b}]?>&hash=<?=$HASH?>'>ɾ��</a>
<?PHP}?>
		</td>
	</tr>
<?PHP}}if($i==0){?>
<?=$_GET{���}[0x0000018];?><?PHP}?>
<?=$_GET{���}{0x019};?><?=$navigation?></div>
