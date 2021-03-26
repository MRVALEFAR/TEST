<?php
class task
{
var $id = 0;
var $Object;
var $Actual_Price;
var $Criterias;
var $Expert_Quantity;
var $date_expert;
var $end_time;
var $State;
var $Person;
 
  function Getid()
  {
      return $this->id;
  }
 
  function GetObject()
  {
      return $this->Object;
  }
 
  function GetActual_Price()
  {
      return $this->Actual_Price;
  }
 
  function GetCriterias()
  {
      return $this->Criterias;
  }
 
  function GetExpert_Quantity()
  {
      return $this->Expert_Quantity;
  }
 
  function Getdate_expert()
  {
      return $this->date_expert;
  }
 
  function Getend_time()
  {
      return $this->end_time;
  }
 
  function GetState()
  {
      return $this->State;
  }
 
  function GetPerson()
  {
      return $this->Person;
  }
 
  function Setid($id)
  {
      $this->id = $id;
  }
 
  function SetObject($Object)
  {
      $this->Object = $Object;
  }
 
  function SetActual_Price($Actual_Price)
  {
      $this->Actual_Price = $Actual_Price;
  }
 
  function SetCriterias($Criterias)
  {
      $this->Criterias = $Criterias;
  }
 
  function SetExpert_Quantity($Expert_Quantity)
  {
      $this->Expert_Quantity = $Expert_Quantity;
  }
 
  function Setdate_expert($date_expert)
  {
      $this->date_expert = $date_expert;
  }
 
  function Setend_time($end_time)
  {
      $this->end_time = $end_time;
  }
 
  function SetState($State)
  {
      $this->State = $State;
  }
 
  function SetPerson($Person)
  {
      $this->Person = $Person;
  }
 
}
?>
