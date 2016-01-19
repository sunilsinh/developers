<?php
/* 
trait YesBoss{
public function sayIt(){
  echo "Say it ";
}
 
public function hitIt(){
  echo "Hit it ";
 }
}
 
class Boss{
 
public function doIt(){
  echo "Do it ";
 }
}
 
class Manager extends Boss{
  use YesBoss;
 
public function hitIt(){
  echo "Don't Hit It ";
 }
}
 
$worker = new Manager;

$worker->hitIt();*/
/*trait Mammals{
public function sleep(){
  echo "Mammals can sleep";
 }
}
 
trait Birds{
public function eat(){
   echo "Birds can eat";
  }
}
 
class Animals{
public function sound(){
  echo "Animals have sounds";
 }
}
 
class Human extends Animals{
  use Mammals,Birds;
}
 
$being = new Human;
$being->sleep();
$being->eat();
$being->sound();*/
namespace Busayo;
 
class MagicConstants
{
 
    public function getFile()
    {
        return __FILE__;
    }
 
    public function getDirectory()
    {
        return __DIR__;
    }
 
    public function getTrait()
    {
        return __TRAIT__;
    }
 
    public function getNamespace()
    {
        return __NAMESPACE__;
    }
 
    public function getLine()
    {
        return __LINE__;
    }
 
    public function getMethod()
    {
        return __METHOD__;
    }
 
    public function getClass()
    {
        return __CLASS__;
    }
 
    public function getFunction()
    {
        return __FUNCTION__;
    }
}
 
$app = new MagicConstants;
echo $app->getFile(). PHP_EOL."<br >";
echo $app->getDirectory(). PHP_EOL."<br >";
echo $app->getTrait(). PHP_EOL."<br >";
echo $app->getNamespace(). PHP_EOL."<br >";
echo $app->getLine(). PHP_EOL."<br >";
echo $app->getMethod(). PHP_EOL."<br >";
echo $app->getClass(). PHP_EOL."<br >";
echo $app->getFunction(). PHP_EOL."<br >";
 
?>