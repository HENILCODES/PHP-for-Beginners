<?php

echo "To know the datatype<br>";
$lol = "fdf0";
echo var_dump($lol) . "<br>"; //for concatenation (.) use in php

$lol = 10;
echo var_dump($lol) . "<br>";

$lol = 10.12;
echo var_dump($lol) . "<br>";

$lol = true;
echo var_dump($lol) . "<br>";



echo "Strings<br>";

$lol = "yo boi";
echo "If you want the variable *value<br>";
echo '69 $lol<br>';
echo "Then you need to put it in double quotes<br>";
echo "69 $lol<br>";

echo "To know the length of the string<br>";
echo strlen($lol) . "<br>";

echo "To know the word in the strin<br>";
echo str_word_count($lol) . "<br>";

echo "shows which index number is the character is in<br>";
echo strpos($lol, "i") . "<br>";

echo "make the first character capital of the string<br>";
echo ucfirst($lol) . "<br>";

echo " make the every word first character capital in the string<br>";
echo ucwords($lol) . "<br>";

echo " make every char uppercase<br>";
echo strtoupper($lol) . "<br>";

echo "make every char lowercase<br>";
echo strtolower($lol) . "<br>";




echo "Operators(op)" . "<br>";
$x = 10; //assignment op
$y = 50;

echo $x % $y . "<br>"; //modulus gives remainder

echo "control structure<br>";

echo "if, elseif and else<br>";
if ($x >= 10 && $y == 20) {
    echo "x=$x<br>";
} elseif ($y >= 10 || $x <= 50) {
    echo "y = $y<br>";
} else {
    echo "go and checkout if,elseif and else";
}

echo "for loop<br>";
for ($i = 10; $i >= 0; $i--) {
    echo "$i<br>";
}
echo "while loop<br>";
$i = 1;
while ($i <= 30) {
    if ($i <= 29) {
        echo "$i,";
    } else {
        echo $i;
    }
    $i++;
}

echo "<br>do while loop<br>";
$i = 7;
do {
    echo "$i<br>";
    --$i;
} while ($i > 0);

echo "constant<br>";
define("num", 20);
echo num . "<br>"; //in const don't need to put $ sign 

// Array
$arr = array(34, 43, "d34");
echo "<pre>";
print_r($arr);
echo "</pre><br>";

echo "$arr[2]<br>";

//$key has kept $arr index AND $val has kept $arr value
foreach ($arr as $key => $val) {
    echo "$key<br>";
}

// associative array
$arr = array('ram' => 'girl', 'keval' => 'boy', 'hetvi' => 'boy');
echo "<pre>";
print_r($arr);
echo "</pre><br>";

echo "$arr[ram]<br>";

foreach ($arr as $key => $val) {
    echo "$val<br>";
}

// multi-dimensional array
$multiArr = array('student' => array('rollno' => 21, 'class' => 'fy', 'subjects' => array("CS", "MATH"), "age" => 19));
echo "<pre>";
print_r($multiArr);
print_r($multiArr['student']['subjects'][1]);
echo "</pre>";
// Array functions
$arr = array(3, 1, 4, 9);
sort($arr);
echo "<pre>";
print_r($arr);
echo "</pre><br>";

krsort($arr);
echo "<pre>";
print_r($arr);
echo "</pre><br>";

echo count($arr) . "<br>";
$cityList = array("mumbai", "Delhi", "kolkata");
sort($cityList);
?>
<select>
    <option>Select</option>
    <?php
    foreach ($cityList as $city) {
        echo "<option>$city</option>";
    }
    ?>
</select>
<?php
// Functions
function add()
{
    return 132;
}
$x = add();
echo "<br>";
echo $x + 20;
echo "<br>";
$x = 321;
function my()
{
    // global $x;
    echo
        $GLOBALS['x'];
}
my();
?>