1.Viết PHP script để lấy thông tin cấu hình và phiên bản của PHP <br></b>
<?php
         phpinfo();
       ?>
2. Viết PHP Lấy địa chỉ Client IP trong PHP <br></b>     
  <?php
    // IP tu share internet
    if(!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    // IP tu proxy
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    // IP tu Remote Address
    else
    {
        $ip_address = $_SERVER['REMOTE_ADDR']; 
    }
    echo("Địa chỉ Client IP = $ip_address <br>");
    ?>
  <br>
3. Viết PHP Lấy URL trong PHP<br></b>    
  <?php
    $url = 'http://localhost/bai1.php';
    $url = parse_url($url);
    echo'Scheme : '.$url['scheme']."<br>";  
	echo 'Host : '.$url['host']."<br>";  
    echo 'Path : '.$url['path']."<br>";
?>
4. Viết PHP script để lấy thư mục gốc, hiện thị toàn bộ nội dung cây thư mục<br></b>
<?php
    //Lay thu muc goc
	$folder_root = getenv('DOCUMENT_ROOT');  
	echo $folder_root."<br>";
    //Hien noi dung
    foreach(glob("documents/*.txt") as $file){
    echo basename($file) . " (size: " . filesize($file) . " bytes)" . "<br>";
    }
?>

5. Viết PHP script để lấy thời gian file chỉnh sửa lần cuối cùng của trang hiện tại<br></b>
<?php
  echo "Lan sua cuoi : " . date ("F d Y H:i:s. ", getlastmod())."<br>";
	 ?>