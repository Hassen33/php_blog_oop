
<?php session_start();?>

<form method='post' action=''>
   
    title : <input type="text" name="title"><br>
  
     <input type="submit" name="btn" value="valider"><br>

</form>
<?php
if(isset($_POST['btn']))
{
    include_once('blog.php');
    $o->title=$_POST['title'];
$x=$o->recherche();
if($x)
{
if(mysqli_num_rows($x)>0)
{
$_SESSION['id']=$o->id;
    $o->affiche($x);

?>


<form method='post' action='maj.php'>
   
     <input type="submit" name="sup" value="sup">
     <input type="submit" name="mod" value="mod">

</form>
<?php



}else echo 'peronne not exist';
}
}
?>