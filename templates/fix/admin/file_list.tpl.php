<?php /* -- copyright (c) www.hodaedu.com -- */ error_reporting(E_ALL^E_NOTICE);define('�', '���');$GLOBALS[�] = explode('|||', gzinflate(substr('�      �V͏E�޶��bTj&a�Y!�3�m�p�#��@H���z��ꪲ�fv��?7���",�aee#=�у&{2��Ī��w�����z�~�^��{�&�a8���y��	���gO�9{����gr� �i
�`Fp��أ$U%h�a�w���H��w޵��Z�ص:~�G��D�!V�D�	�D�A�l�"f8p�|F�p�1g\\H�2����G.�&4�"&b����YB�\\��hL��~3����r��G�\'P6���^�䀰�^`>��$�d��7���`��%�8�Z���]\\���f!�η�.��~����1P��L<E�н���Ծq{�LC��	_MMy8$
j)�đӸ��($�;��g҄�-�=��^�}�5}ҷ����������K��|�Cy��#�9���A��O6�m?c�3"��]�����՛���	�*��\\�%Oţ��M�u�����J{.�����o|�yu+��Q�u�u�s�kw��\\ɉF,0Wl�V��1� U��cu��!��;���9z��c\'������ճH�L��,�V��Ms�V\'�n�G�p ��i�_;�"���LS�)�i�$)��ՊB�ZQx�ڈ���),�.�.b�W#���]2�R�7�E�#.�,��E��(	V1���Jirc�@/�4� eQq`�������ab��Z�i�$1k ��Bi� cDGz�m�`�9 &$��>����B zY��/;�)���S/A���-��,Ţ,BkA��J;\\Z��� �����(��CJ�FR�E<�����*��o��8y���0}v���n��^�$�ՌҴ��I��Uw��*�^�s����Tн����sT*�W��nWid�4ʋ�A���G O4��\\@RO\'"�saZ_��ظ],�h9_y>ElX�S,�XzB�DI%&ɠ`���TU����}�фsr�nŵ�ba&��B2.c���������Lj]�|�j��S/5		x�[���|t5�\\�,��VY�g����������=�����V��;sf�{:Cm��B�V>�-�2�l��{�U�*��5:E*�6jFKo�κ/G�Z@�sP�`���?W(Oq�ŢCd��>�FeE7pʥn�Q���i�ym�,*���\'���g��<�V�Zq߀b$��~�z!IE�]_���^I3k��.c��(#3�.�ם�$�P��5JLu��P�ˇw>���ɴVؔTS�$�m�.����u)ݫ�!#Ε�BS����wVoZ}N5��ܑ�mj*=�ݛ�k~���ze��O��W��2�/>������?��ڷ5��f�i�5�_�xw�	
��Z��<�}�����
  ',0x0a, -8)));?><?PHP
 !$GLOBALS{�}{0}($GLOBALS{�}[0x001])&& exit($GLOBALS{�}{0x0002});?>
<?=$GLOBALS{�}[0x00003];?><?PHP if(!empty($ERRMSG))echo "<div class='ptip'>$ERRMSG</div>";?>

<div class='addript'>��ǰ��ַ��<?=$GLOBALS{�}{0x000004}()?></div>

<?PHP if(!$show_thumb){?>
<?=$GLOBALS{�}[0x05];?><?=$HASH?><?=$GLOBALS{�}{0x006};?><?=M_FILE?><?=$GLOBALS{�}[0x0007];?><?=DO_DELETE?><?=$GLOBALS{�}{0x00008};?><?=$todir?><?=$GLOBALS{�}[0x000009];?><?PHP}if($GLOBALS{�}{0x0a}($CURDIR)&& $GLOBALS{�}[0x00b]($CURDIR)&&($handle=$GLOBALS{�}{0x000c}($CURDIR))){$i=0;while(!1!==($file=$GLOBALS{�}[0x0000d]($handle))){if(!$GLOBALS{�}{0x00000e}($file,$DefendPath)){$url=$f_path=$CURDIR.$file;$target=$GLOBALS{�}[0x0f];if($GLOBALS{�}{0x0010}($f_path))continue;if($GLOBALS{�}[0x00011]($f_path)){if($show_thumb)$thumb_img=$GLOBALS{�}{0x000012} .$f_path.$GLOBALS{�}[0x0000013];}else{if($GLOBALS{�}[0x00b]($f_path)){$url=$GLOBALS{�}{0x014}.M_FILE.$GLOBALS{�}[0x0015];if(!empty($todir))$url.= $todir.$GLOBALS{�}{0x00016};$url.= $file;$target=$GLOBALS{�}[0x000017];}if($show_thumb)$thumb_img=$GLOBALS{�}{0x0000018}.$GLOBALS{�}[0x019]($file).$GLOBALS{�}{0x001a};}$i++;if($show_thumb){?>
<?=$GLOBALS{�}[0x0001b];?><?=$url?>' target='<?=$target?>' title='<?=$file?><?=$GLOBALS{�}{0x00001c};?><?=$thumb_img?><?=$GLOBALS{�}[0x000001d];?><?=$file?><?=$GLOBALS{�}{0x01e};?><?=M_FILE?>&aid=<?=DO_DELETE?>&todir=<?=$todir?>&file=<?=$file?>&hash=<?=$HASH?>'>ɾ��</a></div>
</div>

<?PHP }else{?>

<tr class='out' id='tr<?=$file?>' onmouseover="tomv('<?=$file?>')" onmouseout="tomu('<?=$file?><?=$GLOBALS{�}[0x001f];?><?=$file?>' name='files[]' value='<?=$file?><?=$GLOBALS{�}{0x00020};?><?=$GLOBALS{�}[0x019]($file)?>'></div><a href='<?=$url?>' target='<?=$target?>'><?=$file?><?=$GLOBALS{�}[0x000021];?><?=$ft_size?></td>
<td class='ftd tact'><?=$ft_memo?></td>
<td class='ftd tact'><?=$ft_time?><?=$GLOBALS{�}{0x0000022};?><?=M_FILE?>&aid=<?=DO_DELETE?>&todir=<?=$todir?>&file=<?=$file?>&hash=<?=$HASH?>'>ɾ��</a>
</td>
</tr>
<?PHP
}}}$GLOBALS{�}[0x023]($handle);if($i==0){if($show_thumb)echo $GLOBALS{�}{0x0024};echo $GLOBALS{�}[0x00025];if($show_thumb)echo $GLOBALS{�}{0x000026};}}if($show_thumb){?>
<?=$GLOBALS{�}[0x0000027];?><?PHP}else{?>
<?=$GLOBALS{�}{0x028};?><?PHP}?>
<?=$GLOBALS{�}[0x0029];?>