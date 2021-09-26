1. Viết PHP script để tạo mảng liên hợp hiển thị tên các quốc gia và thủ đô trên danh
sách. Dữ liệu được khai báo trực tiếp trong file.<br>
<?php
    $mang = array("Abkhazia" => "Sukhumi","Afghanistan"=>"Kabul","Albania"=>"Tirana","Algérie"=>"Algiers",
    "Andorra"=>"Andorra la Vealla"," Angola"=>"Luanda","Argentina"=>"Buenos Aires","Armenia"=>"Yerevan",
    "Úc"=>"Canberra","Áo"=>"Vienna");
    foreach($mang as $quocgia => $thudo)
    {
        echo "Thủ đô của $quocgia là $thudo"."<br>";
    }
?>
<br>
2. Viết PHP script để tìm giá trị trung bình của các phần tử mảng và hiển thị 5 phần tử
nhỏ nhất và lớn nhất. Dữ liệu được khai báo trực tiếp trong file. <br>  
<?php
    $mang = array(12,32,43,24,35,234,23,432,2,34,56,42,53,47,45,44);
    $do_dai_mang = count($mang);
    $tong = 0;
    
    foreach($mang as $key => $value)
    {
        $tong += $value;
    }
    $gia_tri_tb = $tong/$do_dai_mang;
    echo "Giá trị trung bình = $gia_tri_tb"."<br>";   
    sort($mang);
    echo " 5 phần tử nhỏ nhất: ";
    for($i= 0;$i<5;$i++)
    {
        echo $mang[$i].", ";
    }
    
    echo" <br> 5 phần tử lớn nhất: ";
    for ($i = ($do_dai_mang-5);$i<($do_dai_mang);$i++)
    {
        echo $mang[$i].", ";
    }
?>
<br>

