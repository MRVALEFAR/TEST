<?php
class expobject
{
var $id = 0;
var $Name;
var $curr_price;
var $type_obj;
var $about_obj;
var $max_expert;
 
  function Getid()
  {
      return $this->id;
  }
 
  function GetName()
  {
      return $this->Name;
  }
 
  function Getcurr_price()
  {
      return $this->curr_price;
  }
 
  function Gettype_obj()
  {
      return $this->type_obj;
  }
 
  function Getabout_obj()
  {
      return $this->about_obj;
  }
 
  function Getmax_expert()
  {
      return $this->max_expert;
  }
 
  function Setid($id)
  {
      $this->id = $id;
  }
 
  function SetName($Name)
  {
      $this->Name = $Name;
  }
 
  function Setcurr_price($curr_price)
  {
      $this->curr_price = $curr_price;
  }
 
  function Settype_obj($type_obj)
  {
      $this->type_obj = $type_obj;
  }
 
  function Setabout_obj($about_obj)
  {
      $this->about_obj = $about_obj;
  }
 
  function Setmax_expert($max_expert)
  {
      $this->max_expert = $max_expert;
  }
 
}
?>
