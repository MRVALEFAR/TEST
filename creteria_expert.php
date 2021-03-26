<?php
class creteria_expert
{
var $id = 0;
var $Object_Id;
var $Category_id;
var $Date_expert;
var $Expert_opinion;
var $Expert_name_id;
 
  function Getid()
  {
      return $this->id;
  }
 
  function GetObject_Id()
  {
      return $this->Object_Id;
  }
 
  function GetCategory_id()
  {
      return $this->Category_id;
  }
 
  function GetDate_expert()
  {
      return $this->Date_expert;
  }
 
  function GetExpert_opinion()
  {
      return $this->Expert_opinion;
  }
 
  function GetExpert_name_id()
  {
      return $this->Expert_name_id;
  }
 
  function Setid($id)
  {
      $this->id = $id;
  }
 
  function SetObject_Id($Object_Id)
  {
      $this->Object_Id = $Object_Id;
  }
 
  function SetCategory_id($Category_id)
  {
      $this->Category_id = $Category_id;
  }
 
  function SetDate_expert($Date_expert)
  {
      $this->Date_expert = $Date_expert;
  }
 
  function SetExpert_opinion($Expert_opinion)
  {
      $this->Expert_opinion = $Expert_opinion;
  }
 
  function SetExpert_name_id($Expert_name_id)
  {
      $this->Expert_name_id = $Expert_name_id;
  }
 
}
?>
