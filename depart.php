<?php
class depart
{
var $id = 0;
var $name_depart;
var $situating;
var $Phone_depart;
var $Security_depart;
var $depart_Boss;
var $image;
 
  function Getid()
  {
      return $this->id;
  }
 
  function Getname_depart()
  {
      return $this->name_depart;
  }
 
  function Getsituating()
  {
      return $this->situating;
  }
 
  function GetPhone_depart()
  {
      return $this->Phone_depart;
  }
 
  function GetSecurity_depart()
  {
      return $this->Security_depart;
  }
 
  function Getdepart_Boss()
  {
      return $this->depart_Boss;
  }
 
  function Getimage()
  {
      return $this->image;
  }
 
  function Setid($id)
  {
      $this->id = $id;
  }
 
  function Setname_depart($name_depart)
  {
      $this->name_depart = $name_depart;
  }
 
  function Setsituating($situating)
  {
      $this->situating = $situating;
  }
 
  function SetPhone_depart($Phone_depart)
  {
      $this->Phone_depart = $Phone_depart;
  }
 
  function SetSecurity_depart($Security_depart)
  {
      $this->Security_depart = $Security_depart;
  }
 
  function Setdepart_Boss($depart_Boss)
  {
      $this->depart_Boss = $depart_Boss;
  }
 
  function Setimage($image)
  {
      $this->image = $image;
  }
 
}
?>
