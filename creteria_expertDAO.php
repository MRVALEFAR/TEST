<?php
include 'dbconnection.php';
include 'creteria_expert.php';
 
function Delcreteria_expertById($id)
  {
    mysql_query("delete from creteria_expert where id = $id ");
    mysql_query("commit");
  }
 
function Insertcreteria_expert($objcreteria_expert)
  {
$creteria_expertObject_Id = $objcreteria_expert->GetObject_Id();
$creteria_expertCategory_id = $objcreteria_expert->GetCategory_id();
$creteria_expertDate_expert = $objcreteria_expert->GetDate_expert();
$creteria_expertExpert_opinion = $objcreteria_expert->GetExpert_opinion();
$creteria_expertExpert_name_id = $objcreteria_expert->GetExpert_name_id();
    mysql_query("  insert into creteria_expert values( DEFAULT,$creteria_expertObject_Id,$creteria_expertCategory_id,'$creteria_expertDate_expert','$creteria_expertExpert_opinion',$creteria_expertExpert_name_id 
)"); 
return mysql_insert_id();
    mysql_query("commit"); 
  }
 
function Updatecreteria_expert($objcreteria_expert)
  {
$id = $objcreteria_expert->Getid(); 
$creteria_expertObject_Id = $objcreteria_expert->GetObject_Id();
$creteria_expertCategory_id = $objcreteria_expert->GetCategory_id();
$creteria_expertDate_expert = $objcreteria_expert->GetDate_expert();
$creteria_expertExpert_opinion = $objcreteria_expert->GetExpert_opinion();
$creteria_expertExpert_name_id = $objcreteria_expert->GetExpert_name_id();
    mysql_query("  Update creteria_expert set Object_Id = $creteria_expertObject_Id,Category_id = $creteria_expertCategory_id,Date_expert = '$creteria_expertDate_expert',Expert_opinion = '$creteria_expertExpert_opinion',Expert_name_id = $creteria_expertExpert_name_id where id = $id ");
    mysql_query("commit"); 
 
  }
function Getcreteria_expertbyId ($id)
  {
    $result = mysql_query(" select id 'id', 
Object_Id'Object_Id', 
Category_id'Category_id', 
Date_expert'Date_expert', 
Expert_opinion'Expert_opinion', 
Expert_name_id'Expert_name_id' from creteria_expert where id = $id ");
 
$objcreteria_expert = new creteria_expert;
while ($row = mysql_fetch_assoc($result)) {	
$objcreteria_expert->Setid($row['id']);
$objcreteria_expert->SetObject_Id($row['Object_Id']);
$objcreteria_expert->SetCategory_id($row['Category_id']);
$objcreteria_expert->SetDate_expert($row['Date_expert']);
$objcreteria_expert->SetExpert_opinion($row['Expert_opinion']);
$objcreteria_expert->SetExpert_name_id($row['Expert_name_id']);
  }
mysql_free_result($result);
return $objcreteria_expert;
  }
function Getcreteria_expertList()
  {
    $result = mysql_query(" select id 'id' , 
Object_Id'Object_Id', 
Category_id'Category_id', 
Date_expert'Date_expert', 
Expert_opinion'Expert_opinion', 
Expert_name_id'Expert_name_id' from creteria_expert ");
 
$rslt_array=array();
while ($row = mysql_fetch_assoc($result)) {	
$objcreteria_expert = new creteria_expert;
$objcreteria_expert->Setid($row['id']);
$objcreteria_expert->SetObject_Id($row['Object_Id']);
$objcreteria_expert->SetCategory_id($row['Category_id']);
$objcreteria_expert->SetDate_expert($row['Date_expert']);
$objcreteria_expert->SetExpert_opinion($row['Expert_opinion']);
$objcreteria_expert->SetExpert_name_id($row['Expert_name_id']);
array_push($rslt_array,  $objcreteria_expert);
  }
mysql_free_result($result);
return $rslt_array;
  }
    mysql_query(" Create table if not exists Object_Id (
 id integer auto_increment primary key ,  name varchar(50) ) ");
    mysql_query("  insert into Object_Id(id,name) values(1,'value-1'),(2,'value-2'),(3,'value-3');");
    mysql_query("commit"); 
 
function GetObject_IdOptionList($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from Object_Id ");
 
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
function GetObject_IdOptionValue($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from Object_Id where id = $selectedValue ");
 
while ($row = mysql_fetch_assoc($result)) {	
return $row['name'];
  }
mysql_free_result($result);
  }
    mysql_query(" Create table if not exists Category_id (
 id integer auto_increment primary key ,  name varchar(50) ) ");
    mysql_query("  insert into Category_id(id,name) values(1,'value-1'),(2,'value-2'),(3,'value-3');");
    mysql_query("commit"); 
 
function GetCategory_idOptionList($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from Category_id ");
 
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
function GetCategory_idOptionValue($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from Category_id where id = $selectedValue ");
 
while ($row = mysql_fetch_assoc($result)) {	
return $row['name'];
  }
mysql_free_result($result);
  }
    mysql_query(" Create table if not exists Expert_name_id (
 id integer auto_increment primary key ,  name varchar(50) ) ");
    mysql_query("  insert into Expert_name_id(id,name) values(1,'value-1'),(2,'value-2'),(3,'value-3');");
    mysql_query("commit"); 
 
function GetExpert_name_idOptionList($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from Expert_name_id ");
 
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
function GetExpert_name_idOptionValue($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from Expert_name_id where id = $selectedValue ");
 
while ($row = mysql_fetch_assoc($result)) {	
return $row['name'];
  }
mysql_free_result($result);
  }
    mysql_query(" Create table if not exists creteria_expert (
 id integer auto_increment primary key, 
Object_Id Integer, 
Category_id Integer, 
Date_expert varchar(50), 
Expert_opinion varchar(50), 
Expert_name_id Integer) ");
    mysql_query("commit"); 
?>
