<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="">
<style>
    body{
        background: #373947;
        color: #f5f5f5;
        font-family: calibri;
    }
    table{
        color: #000;
    }
</style>

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//class fullphp{
//    public $id, $name;
//    function __construct($id, $name){
//        $this->id = $id;
//        $this->name = $name;
//    }
//    function getall(){
//        echo "Я $this->name $this->id";
//    }
//}
//$zxc = new fullphp(54, 'aboba');
//$zxc->getall();
//

//
//class Person
//{
//    private $privateA ="private";
//    public  $publicA = "public";
//    protected $protectedA = "protected";
//
//    private function getPrivateMethod()
//    {
//        echo "private method <br />";
//    }
//
//    protected function getProtectedMethod()
//    {
//        echo "protected method <br />";
//    }
//
//    public function getPublicMethod()
//    {
//        echo "public method <br />";
//    }
//    function test()
//    {
//        $this->getPrivateMethod();
//        $this->getProtectedMethod();
//        $this->getPublicMethod();
//
//        echo "$this->privateA <br />";
//        echo "$this->protectedA <br />";
//        echo "$this->publicA <br />";
//    }
//}
//
//$x = new Person;
//$x->getPublicMethod();

class aboba{
    public $id, $name;

//    function __construct(int $i, string $n){
//        $this->id = $i;
//        $this->name = $n;
//    }

    function zxc(){
        echo "$this->id $this->name";
    }

}

$hi2 = new aboba();
$hi2->id = 54;
$hi2->name = 'HII';
$hi2->zxc();





?>

</body>
</html>


