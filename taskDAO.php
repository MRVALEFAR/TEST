<?php
include 'dbconnection.php';
include 'task.php';
 
function DeltaskById($id)
  {
    mysql_query("delete from task where id = $id ");
    mysql_query("commit");
  }
 
function Inserttask($objtask)
  {
$taskObject = $objtask->GetObject();
$taskActual_Price = $objtask->GetActual_Price();
$taskCriterias = $objtask->GetCriterias();
$taskExpert_Quantity = $objtask->GetExpert_Quantity();
$taskdate_expert = $objtask->Getdate_expert();
$taskend_time = $objtask->Getend_time();
$taskState = $objtask->GetState();
$taskPerson = $objtask->GetPerson();
    mysql_query("  insert into task values( DEFAULT,$taskObject,$taskActual_Price,$taskCriterias,$taskExpert_Quantity,'$taskdate_expert','$taskend_time',$taskState,$taskPerson 
)"); 
return mysql_insert_id();
    mysql_query("commit"); 
  }
 
function Updatetask($objtask)
  {
$id = $objtask->Getid(); 
$taskObject = $objtask->GetObject();
$taskActual_Price = $objtask->GetActual_Price();
$taskCriterias = $objtask->GetCriterias();
$taskExpert_Quantity = $objtask->GetExpert_Quantity();
$taskdate_expert = $objtask->Getdate_expert();
$taskend_time = $objtask->Getend_time();
$taskState = $objtask->GetState();
$taskPerson = $objtask->GetPerson();
    mysql_query("  Update task set Object = $taskObject,Actual_Price = $taskActual_Price,Criterias = $taskCriterias,Expert_Quantity = $taskExpert_Quantity,date_expert = '$taskdate_expert',end_time = '$taskend_time',State = $taskState,Person = $taskPerson where id = $id ");
    mysql_query("commit"); 
 
  }
function GettaskbyId ($id)
  {
    $result = mysql_query(" select id 'id', 
Object'Object', 
Actual_Price'Actual_Price', 
Criterias'Criterias', 
Expert_Quantity'Expert_Quantity', 
date_expert'date_expert', 
end_time'end_time', 
State'State', 
Person'Person' from task where id = $id ");
 
$objtask = new task;
while ($row = mysql_fetch_assoc($result)) {	
$objtask->Setid($row['id']);
$objtask->SetObject($row['Object']);
$objtask->SetActual_Price($row['Actual_Price']);
$objtask->SetCriterias($row['Criterias']);
$objtask->SetExpert_Quantity($row['Expert_Quantity']);
$objtask->Setdate_expert($row['date_expert']);
$objtask->Setend_time($row['end_time']);
$objtask->SetState($row['State']);
$objtask->SetPerson($row['Person']);
  }
mysql_free_result($result);
return $objtask;
  }
function GettaskList()
  {
    $result = mysql_query(" select id 'id' , 
Object'Object', 
Actual_Price'Actual_Price', 
Criterias'Criterias', 
Expert_Quantity'Expert_Quantity', 
date_expert'date_expert', 
end_time'end_time', 
State'State', 
Person'Person' from task ");
 
$rslt_array=array();
while ($row = mysql_fetch_assoc($result)) {	
$objtask = new task;
$objtask->Setid($row['id']);
$objtask->SetObject($row['Object']);
$objtask->SetActual_Price($row['Actual_Price']);
$objtask->SetCriterias($row['Criterias']);
$objtask->SetExpert_Quantity($row['Expert_Quantity']);
$objtask->Setdate_expert($row['date_expert']);
$objtask->Setend_time($row['end_time']);
$objtask->SetState($row['State']);
$objtask->SetPerson($row['Person']);
array_push($rslt_array,  $objtask);
  }
mysql_free_result($result);
return $rslt_array;
  }
    mysql_query(" Create table if not exists Object (
 id integer auto_increment primary key ,  name varchar(50) ) ");
    mysql_query("  insert into Object(id,name) values(1,'value-1'),(2,'value-2'),(3,'value-3');");
    mysql_query("commit"); 
 
function GetObjectOptionList($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from Object ");
 
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
function GetObjectOptionValue($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from Object where id = $selectedValue ");
 
while ($row = mysql_fetch_assoc($result)) {	
return $row['name'];
  }
mysql_free_result($result);
  }
    mysql_query(" Create table if not exists State (
 id integer auto_increment primary key ,  name varchar(50) ) ");
    mysql_query("  insert into State(id,name) values(1,'value-1'),(2,'value-2'),(3,'value-3');");
    mysql_query("commit"); 
 
function GetStateOptionList($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from State ");
 
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
function GetStateOptionValue($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from State where id = $selectedValue ");
 
while ($row = mysql_fetch_assoc($result)) {	
return $row['name'];
  }
mysql_free_result($result);
  }
    mysql_query(" Create table if not exists Person (
 id integer auto_increment primary key ,  name varchar(50) ) ");
    mysql_query("  insert into Person(id,name) values(1,'value-1'),(2,'value-2'),(3,'value-3');");
    mysql_query("commit"); 
 
function GetPersonOptionList($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from Person ");
 
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
function GetPersonOptionValue($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from Person where id = $selectedValue ");
 
while ($row = mysql_fetch_assoc($result)) {	
return $row['name'];
  }
mysql_free_result($result);
  }
    mysql_query(" Create table if not exists task (
 id integer auto_increment primary key, 
Object Integer, 
Actual_Price Double, 
Criterias Integer, 
Expert_Quantity Integer, 
date_expert varchar(50), 
end_time varchar(50), 
State Integer, 
Person Integer) ");
    mysql_query("commit"); 
?>
