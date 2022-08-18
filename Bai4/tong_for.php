<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    if(isset($_POST["first_num"]) && isset($_POST["last_num"])){
        $first_num = $_POST["first_num"];
        $last_num = $_POST["last_num"];
        $sum = 0 ;
        $sum_odd = 0;
        $sum_even = 0;
        $mul = 1 ;
        for($i = $first_num ; $i<= $last_num; $i++ )
            $sum += $i ;
        for($i = $first_num; $i <= $last_num ; $i++)
            $mul *= $i ;
        for($i = $first_num; $i <= $last_num; $i++)
            if($i % 2 == 0)
                $sum_even += $i ;
            else 
                $sum_odd += $i ;           
    }
?>
    <form action="tong_for.php" method="post">
        <table width="728" border="1">
            <tr>
                <td width="122">&nbsp;</td>
                <td width="76">Số bắt đầu</td>
                <td width="169"><label for="textfield"></label>
                    <input type="text" name="first_num" id="textfield"
                        value="<?php if(isset($_POST["first_num"])) echo $_POST["first_num"];?>" />
                </td>
                <td width="152">Số kết thúc</td>
                <td width="175"><label for="textfield2"></label>
                    <input type="text" name="last_num" id="textfield2"
                        value="<?php if(isset($_POST["last_num"])) echo $_POST["last_num"]; ?>" />
                </td>
            </tr>
            <tr>
                <td colspan="5">Kết quả
                    <label for="textfield3"></label>
                </td>
            </tr>
            <tr>
                <td>Tổng các số</td>
                <td colspan="4"><label for="textfield4"></label>
                    <input type="text" name="sum" id="textfield4" value="<?php if(isset($sum)) echo $sum;?>" />
                </td>
            </tr>
            <tr>
                <td>Tích các số</td>
                <td colspan="4"><label for="textfield5"></label>
                    <input type="text" name="mul" id="textfield5" value="<?php if(isset($mul)) echo $mul; ?>" />
                </td>
            </tr>
            <tr>
                <td>Tổng các số chẵn</td>
                <td colspan="4"><label for="textfield6"></label>
                    <input type="text" name="sum_even" id="textfield6"
                        value="<?php if(isset($sum_even)) echo $sum_even; ?>" />
                </td>
            </tr>
            <tr>
                <td>Tổng các số lẻ</td>
                <td colspan="4"><label for="textfield7"></label>
                    <input type="text" name="sum_odd" id="textfield7"
                        value="<?php if(isset($sum_odd)) echo $sum_odd; ?>" />
                </td>
            </tr>
            <tr>
                <td colspan="5"><input type="submit" name="button" id="button" value="Tính toán" /></td>
            </tr>
        </table>
    </form>

</body>

</html>