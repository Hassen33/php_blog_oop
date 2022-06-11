<?php session_start();
include_once('blog.php');
$o->id=$_SESSION['id'];

if(isset($_POST['sup']))
       {
    if( $o->sup())
    echo 'sup';
    else echo 'erreur sup';
   
}
elseif(isset($_POST['mod']))
{
    $o->title =$_SESSION['title'];
$y=$o->recherche();
echo '<form method="post" action="update.php">';
while($t=mysqli_fetch_object($y))
{
    echo 'title :<input type="text" name="title" value="'.$t->title.'"><br>';
    echo 'content :<input type="text" name="content" value="'.$t->content.'"><br>';
    echo '<input type="submit" name="btn" value="valider"><br>';
    echo '<form/>';
    $_SESSION['title']=$t->title;
    $_SESSION['content']=$t->content;

}
}

?>