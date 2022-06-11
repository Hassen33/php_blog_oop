<?php session_start();
include_once('blog.php');

$o->id=$_SESSION['id'];

if(isset($_POST['btn']))
{
    $o->title=$_POST['title'];
    $o->content=$_POST['content'];
    
    if($o->update())
    echo 'mod';
    else echo 'erreur mod';
}
       