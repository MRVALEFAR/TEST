<?php
class criteria
{
var $id = 0;
var $name;
var $cat_name;
var $mark_volume;
var $max_mark;
var $limit_mark;
var $mark_flag;
var $min_mark;
var $mark_value;
 
  function Getid()
  {
      return $this->id;
  }
 
  function Getname()
  {
      return $this->name;
  }
 
  function Getcat_name()
  {
      return $this->cat_name;
  }
 
  function Getmark_volume()
  {
      return $this->mark_volume;
  }
 
  function Getmax_mark()
  {
      return $this->max_mark;
  }
 
  function Getlimit_mark()
  {
      return $this->limit_mark;
  }
 
  function Getmark_flag()
  {
      return $this->mark_flag;
  }
 
  function Getmin_mark()
  {
      return $this->min_mark;
  }
 
  function Getmark_value()
  {
      return $this->mark_value;
  }
 
  function Setid($id)
  {
      $this->id = $id;
  }
 
  function Setname($name)
  {
      $this->name = $name;
  }
 
  function Setcat_name($cat_name)
  {
      $this->cat_name = $cat_name;
  }
 
  function Setmark_volume($mark_volume)
  {
      $this->mark_volume = $mark_volume;
  }
 
  function Setmax_mark($max_mark)
  {
      $this->max_mark = $max_mark;
  }
 
  function Setlimit_mark($limit_mark)
  {
      $this->limit_mark = $limit_mark;
  }
 
  function Setmark_flag($mark_flag)
  {
      $this->mark_flag = $mark_flag;
  }
 
  function Setmin_mark($min_mark)
  {
      $this->min_mark = $min_mark;
  }
 
  function Setmark_value($mark_value)
  {
      $this->mark_value = $mark_value;
  }
 
}
?>
