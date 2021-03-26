<?php
class expert
{
var $id = 0;
var $name;
var $category;
var $price;
var $ed_izm;
var $general_mark;
var $pictureUrl;
 
  function Getid()
  {
      return $this->id;
  }
 
  function Getname()
  {
      return $this->name;
  }
 
  function Getcategory()
  {
      return $this->category;
  }
 
  function Getprice()
  {
      return $this->price;
  }
 
  function Geted_izm()
  {
      return $this->ed_izm;
  }
 
  function Getgeneral_mark()
  {
      return $this->general_mark;
  }
 
  function GetpictureUrl()
  {
      return $this->pictureUrl;
  }
 
  function Setid($id)
  {
      $this->id = $id;
  }
 
  function Setname($name)
  {
      $this->name = $name;
  }
 
  function Setcategory($category)
  {
      $this->category = $category;
  }
 
  function Setprice($price)
  {
      $this->price = $price;
  }
 
  function Seted_izm($ed_izm)
  {
      $this->ed_izm = $ed_izm;
  }
 
  function Setgeneral_mark($general_mark)
  {
      $this->general_mark = $general_mark;
  }
 
  function SetpictureUrl($pictureUrl)
  {
      $this->pictureUrl = $pictureUrl;
  }
 
}
?>
