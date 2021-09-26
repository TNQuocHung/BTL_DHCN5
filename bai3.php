1. Viết PHP script để hiển thị 1-2-3-4-5-6-7-8-9-…-100 trên một dòng thông qua vòng
lặp for, while <br>
<?php
    for ($i = 1; $i<=100;$i++)
    {
        echo "$i"."-";
    }
?>
<br>
<br>
2. Viết PHP script để hiển thị tổng dãy số nguyên từ 1 đến 200.<br>
<?php
    $tong = 0;
    for($i = 1;$i<=200;$i++)
    {
        $tong +=$i;
    }
    echo "Tổng = $tong";
?>
<br>
<br>
3. Viết PHP script để hiển thị giai thừa của một số trong PHP <br>
<?php
    $a = 5;
    function tinhgiaithua($n) {
        $giai_thua = 1;
        if ($n == 0 || $n == 1) {
            return $giai_thua;
        } else {
            for($i = 2; $i <= $n; $i ++) {
                $giai_thua *= $i;
            }
            return $giai_thua;
        }
    }
    echo ("Giai thừa của ".$a ." là: ".tinhgiaithua ( $a ) . "<br>");
?>
<br>
4. Viết PHP script để hiển thị số lượng một ký tự bất kì trong chuỗi <br>
<?php
    $chuoi =" phat trien phan mem ma nguon mo";
    $ky_tu = "p";
    $count = 0;
    for ($i = 0;$i<strlen($chuoi);$i++)
    {
        if(substr($chuoi,$i,1) == $ky_tu)  
		{  
			$count = $count+1;  
	    }  
    }
    echo "Có " .$count. " ký tự " .$ky_tu. " trong chuỗi '" .$chuoi."'";
?>