<?php
include 'dbconnection.php';
include 'employee.php';
 
function DelemployeeById($id)
  {
    mysql_query("delete from employee where id = $id ");
    mysql_query("commit");
  }
 
function Insertemployee($objemployee)
  {
$employeefirst_name = $objemployee->Getfirst_name();
$employeesecond_name = $objemployee->Getsecond_name();
$employeefather_name = $objemployee->Getfather_name();
$employeeDepart_id = $objemployee->GetDepart_id();
$employeeuser_role = $objemployee->Getuser_role();
$employeephone_num = $objemployee->Getphone_num();
$employeemobile_num = $objemployee->Getmobile_num();
$employeeComments_about = $objemployee->GetComments_about();
$employeeregdate = $objemployee->Getregdate();
$employeeadress = $objemployee->Getadress();
$employeeLogin = $objemployee->GetLogin();
$employeePassword = $objemployee->GetPassword();
    mysql_query("  insert into employee values( DEFAULT,'$employeefirst_name','$employeesecond_name','$employeefather_name',$employeeDepart_id,$employeeuser_role,'$employeephone_num','$employeemobile_num','$employeeComments_about','$employeeregdate','$employeeadress','$employeeLogin','$employeePassword' 
)"); 
return mysql_insert_id();
    mysql_query("commit"); 
  }
 
function Updateemployee($objemployee)
  {
$id = $objemployee->Getid(); 
$employeefirst_name = $objemployee->Getfirst_name();
$employeesecond_name = $objemployee->Getsecond_name();
$employeefather_name = $objemployee->Getfather_name();
$employeeDepart_id = $objemployee->GetDepart_id();
$employeeuser_role = $objemployee->Getuser_role();
$employeephone_num = $objemployee->Getphone_num();
$employeemobile_num = $objemployee->Getmobile_num();
$employeeComments_about = $objemployee->GetComments_about();
$employeeregdate = $objemployee->Getregdate();
$employeeadress = $objemployee->Getadress();
$employeeLogin = $objemployee->GetLogin();
$employeePassword = $objemployee->GetPassword();
    mysql_query("  Update employee set first_name = '$employeefirst_name',second_name = '$employeesecond_name',father_name = '$employeefather_name',Depart_id = $employeeDepart_id,user_role = $employeeuser_role,phone_num = '$employeephone_num',mobile_num = '$employeemobile_num',Comments_about = '$employeeComments_about',regdate = '$employeeregdate',adress = '$employeeadress',Login = '$employeeLogin',Password = '$employeePassword' where id = $id ");
    mysql_query("commit"); 
 
  }
function GetemployeebyId ($id)
  {
    $result = mysql_query(" select id 'id', 
first_name'first_name', 
second_name'second_name', 
father_name'father_name', 
Depart_id'Depart_id', 
user_role'user_role', 
phone_num'phone_num', 
mobile_num'mobile_num', 
Comments_about'Comments_about', 
regdate'regdate', 
adress'adress', 
Login'Login', 
Password'Password' from employee where id = $id ");
 
$objemployee = new employee;
while ($row = mysql_fetch_assoc($result)) {	
$objemployee->Setid($row['id']);
$objemployee->Setfirst_name($row['first_name']);
$objemployee->Setsecond_name($row['second_name']);
$objemployee->Setfather_name($row['father_name']);
$objemployee->SetDepart_id($row['Depart_id']);
$objemployee->Setuser_role($row['user_role']);
$objemployee->Setphone_num($row['phone_num']);
$objemployee->Setmobile_num($row['mobile_num']);
$objemployee->SetComments_about($row['Comments_about']);
$objemployee->Setregdate($row['regdate']);
$objemployee->Setadress($row['adress']);
$objemployee->SetLogin($row['Login']);
$objemployee->SetPassword($row['Password']);
  }
mysql_free_result($result);
return $objemployee;
  }
function GetemployeeList()
  {
    $result = mysql_query(" select id 'id' , 
first_name'first_name', 
second_name'second_name', 
father_name'father_name', 
Depart_id'Depart_id', 
user_role'user_role', 
phone_num'phone_num', 
mobile_num'mobile_num', 
Comments_about'Comments_about', 
regdate'regdate', 
adress'adress', 
Login'Login', 
Password'Password' from employee ");
 
$rslt_array=array();
while ($row = mysql_fetch_assoc($result)) {	
$objemployee = new employee;
$objemployee->Setid($row['id']);
$objemployee->Setfirst_name($row['first_name']);
$objemployee->Setsecond_name($row['second_name']);
$objemployee->Setfather_name($row['father_name']);
$objemployee->SetDepart_id($row['Depart_id']);
$objemployee->Setuser_role($row['user_role']);
$objemployee->Setphone_num($row['phone_num']);
$objemployee->Setmobile_num($row['mobile_num']);
$objemployee->SetComments_about($row['Comments_about']);
$objemployee->Setregdate($row['regdate']);
$objemployee->Setadress($row['adress']);
$objemployee->SetLogin($row['Login']);
$objemployee->SetPassword($row['Password']);
array_push($rslt_array,  $objemployee);
  }
mysql_free_result($result);
return $rslt_array;
  }
    mysql_query(" Create table if not exists Depart_id (
 id integer auto_increment primary key ,  name varchar(50) ) ");
    mysql_query("  insert into Depart_id(id,name) values(1,'value-1'),(2,'value-2'),(3,'value-3');");
    mysql_query("commit"); 
 
function GetDepart_idOptionList($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from Depart_id ");
 
while ($row = mysql_fetch_assoc($result)) {	
echo " <option ";
if ($row['id'] == $selectedValue ){
echo " selected ";
}
echo "value =";
echo $row['id'];
echo " > ";
echo $row['name'];
echo "</option> ";
  }
mysql_free_result($result);
  }
function GetDepart_idOptionValue($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from Depart_id where id = $selectedValue ");
 
while ($row = mysql_fetch_assoc($result)) {	
return $row['name'];
  }
mysql_free_result($result);
  }
    mysql_query(" Create table if not exists user_role (
 id integer auto_increment primary key ,  name varchar(50) ) ");
    mysql_query("  insert into user_role(id,name) values(1,'value-1'),(2,'value-2'),(3,'value-3');");
    mysql_query("commit"); 
 
function Getuser_roleOptionList($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from user_role ");
 
while ($row = mysql_fetch_assoc($result)) {	
echo " <option ";
if ($row['id'] == $selectedValue ){
echo " selected ";
}
echo "value =";
echo $row['id'];
echo " > ";
echo $row['name'];
echo "</option> ";
  }
mysql_free_result($result);
  }
function Getuser_roleOptionValue($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from user_role where id = $selectedValue ");
 
while ($row = mysql_fetch_assoc($result)) {	
return $row['name'];
  }
mysql_free_result($result);
  }
    mysql_query(" Create table if not exists employee (
 id integer auto_increment primary key, 
first_name varchar(50), 
second_name varchar(50), 
father_name varchar(50), 
Depart_id Integer, 
user_role Integer, 
phone_num varchar(50), 
mobile_num varchar(50), 
Comments_about varchar(50), 
regdate varchar(50), 
adress varchar(50), 
Login varchar(50), 
Password varchar(50)) ");
    mysql_query("commit"); 
?>
