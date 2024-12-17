<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Defined Function</title>
</head>
<body>
    <h1>ทดสอบการสร้าง Function ที่สร้างโดยผู้พัฒนาโปรแกรม</h1>
    <?php
        $name = "ใส่ชื่อนามสกุลของตัวเองตรงนี้";
        Hello($name);
        //------------------------------------
        echo "<h2>ทอสอบการใช้ Function</h2>";
        $a = 5;
        $b = 8;
        $c = sum($a,$b);
        echo "$a + $b = $c <br>";
        echo "<hr>";
        echo "<h3>ทดสอบการใช้งาน Function แบบมีพารามิเตอร์เป็น Reference</h3>";
        $num = 2;
        echo "Before ===> \$num = $num <br>"; 
        add_5($num);
        add_5($num);
        echo "After ===> \$num = $num";
        echo "<hr>";
        echo "<h3>ทดสอบการใช้งาน Function แบบมีพารามิเตอร์หลายตัว</h3>";
        $summaryNumber = sumMyNumber(1,2,3,4,5,6,7,8,9);
        echo "ผลรวมของ (1,2,3,4,5,6,7,8,9) = $summaryNumber";
        echo "<hr>";

        //------------------------------------
        bye();
    function sumMyNumber(...$x){
        $sum=0;
        foreach ($x as $value) {
            $sum += $value;
        }
        return $sum;
    }
    
    function add_5(&$value){
        $value+=5;
    }
    function Hello($yourname){
        echo "<h3>ผู้พัฒนาโปรแกรม</h3>";
        echo "<h3>".$yourname."</h3>";
        echo "<hr>";
    }

    function sum($x,$y){
        $z = $x+$y;
        return $z;
    }

    function bye(){
        echo "<hr>";
        echo "<h4>หลักสูตรเทคโนโลยีสารสนเทศ</h4>";
        echo "<h4>คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฎอุดรธานี</h4>";
        echo "<hr>";
    }

    ?>
</body>
</html>