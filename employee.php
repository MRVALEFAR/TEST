<?php
class employee
{
var $id = 0;
var $first_name;
var $second_name;
var $father_name;
var $Depart_id;
var $user_role;
var $phone_num;
var $mobile_num;
var $Comments_about;
var $regdate;
var $adress;
var $Login;
var $Password;
 
  function Getid()
  {
      return $this->id;
  }
 
  function Getfirst_name()
  {
      return $this->first_name;
  }
 
  function Getsecond_name()
  {
      return $this->second_name;
  }
 
  function Getfather_name()
  {
      return $this->father_name;
  }
 
  function GetDepart_id()
  {
      return $this->Depart_id;
  }
 
  function Getuser_role()
  {
      return $this->user_role;
  }
 
  function Getphone_num()
  {
      return $this->phone_num;
  }
 
  function Getmobile_num()
  {
      return $this->mobile_num;
  }
 
  function GetComments_about()
  {
      return $this->Comments_about;
  }
 
  function Getregdate()
  {
      return $this->regdate;
  }
 
  function Getadress()
  {
      return $this->adress;
  }
 
  function GetLogin()
  {
      return $this->Login;
  }
 
  function GetPassword()
  {
      return $this->Password;
  }
 
  function Setid($id)
  {
      $this->id = $id;
  }
 
  function Setfirst_name($first_name)
  {
      $this->first_name = $first_name;
  }
 
  function Setsecond_name($second_name)
  {
      $this->second_name = $second_name;
  }
 
  function Setfather_name($father_name)
  {
      $this->father_name = $father_name;
  }
 
  function SetDepart_id($Depart_id)
  {
      $this->Depart_id = $Depart_id;
  }
 
  function Setuser_role($user_role)
  {
      $this->user_role = $user_role;
  }
 
  function Setphone_num($phone_num)
  {
      $this->phone_num = $phone_num;
  }
 
  function Setmobile_num($mobile_num)
  {
      $this->mobile_num = $mobile_num;
  }
 
  function SetComments_about($Comments_about)
  {
      $this->Comments_about = $Comments_about;
  }
 
  function Setregdate($regdate)
  {
      $this->regdate = $regdate;
  }
 
  function Setadress($adress)
  {
      $this->adress = $adress;
  }
 
  function SetLogin($Login)
  {
      $this->Login = $Login;
  }
 
  function SetPassword($Password)
  {
      $this->Password = $Password;
  }
 
}
?>
