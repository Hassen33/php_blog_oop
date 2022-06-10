<?php session_start();
include_once('blog.php');
$o->cin=$_SESSION['cin'];

if(isset($_POST['sup']))
{   
       
    if( $o->sup())
    echo 'sup';
    else echo 'erreur sup';
   
}
elseif(isset($_POST['mod']))
{
$x=$o->recherche();
echo '<form method="post" action="update.php">';
while($t=mysqli_fetch_object($x))
{
    echo 'title :<input type="text" name="name" value="'.$t->title.'"><br>';
    echo 'content :<input type="text" name="content" value="'.$t->content.'"><br>';
    echo '<input type="submit" name="btn" value="valider"><br>';

}
}

?>