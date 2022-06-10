<?php
class post
{  private $motpas,$bd,$cnx,$serv,$user;
    public $id,$title,$content;
    
  public function __construct()
  {
      $this->serv='localhost';
      $this->motpas='123456';
      $this->user='root';
      $this->bd='blog';
      $this->cnx=mysqli_connect($this->serv,$this->user,$this->motpas,$this->bd)or die('erreur cnx');
  }
  function insert()
  {
      $req="insert into posts values('$this->id','$this->title','$this->content')";
      $x=mysqli_query($this->cnx,$req);
      if($x)
      return true;
      else return false;
  }
function recherche()
{
    $req="select * from posts where id like '$this->id'";
    $x=mysqli_query($this->cnx,$req);
    if($x)
    return $x;
    else return false;
}
function affiche($x)
{
       while($t=mysqli_fetch_object($x))
    {
        echo 'id :'.$t->id.'<br>';
        echo 'nom :'.$t->title.'<br>';
        echo 'content :'.$t->content.'<br>';
    }
}

function sup()
{
    $req="delete from posts where id like '$this->id'";
    $x=mysqli_query($this->cnx,$req);
    if($x)
    return true;
    else return false; 
}

function update()
{
    $req=" update posts set nom='$this->title',content$content='$this->content' where
     id like '$this->id' ";
     $y=mysqli_query($this->cnx,$req);
     if($y)
     return true;
     else return false; 
}

}
$o=new post();


?>