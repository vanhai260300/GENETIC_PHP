<?php 
include_once '2_ptbac2.php' ?>
<form action="" method="post" >
            <table width="806" border="1">
                <tr>
                    <td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
                </tr>
                <tr>
                    <td width="83">Phương trình </td>
                    <td width="236">
                        <input name="a" type="text" />
                        X^2 + </td>
                    <td width="218"><label for="textfield3"></label>
                        <input type="text" name="b" id="textfield3" />
                        X+</td>
                    <td width="241"><label for="textfield"></label>
                        <input type="text" name="c" id="textfield" />
                        =0</td>
                </tr>
                <tr>
                    <td colspan="4">
                        Nghiệm  
                        <label for="textfield2"></label>
                    <input name="textfield" type="text" id="textfield2" width="400" value="<?php
                    if (isset($kq)){
                        echo $kq;
                    }
                    ?>" /></tr>
                <tr>
                    <td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
                </tr>
            </table>
        </form>