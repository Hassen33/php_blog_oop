<form method='post' action=''>
    title : <input type="text" name="title"><br>
    content : <input type="text" name="content"><br>
     <input type="submit" name="btn" value="Add new post"><br>

</form>
<?php
if(isset($_POST['btn']))
{
    include_once('blog.php');
    $o->title=$_POST['title'];
    $o->content=$_POST['content'];
   if( $o->insert())
   echo 'insert';
   else echo 'erreur insert';
    
}

?>