<?php
include 'dbconnection.php';
include 'expobject.php';
 
function DelexpobjectById($id)
  {
    mysql_query("delete from expobject where id = $id ");
    mysql_query("commit");
  }
 
function Insertexpobject($objexpobject)
  {
$expobjectName = $objexpobject->GetName();
$expobjectcurr_price = $objexpobject->Getcurr_price();
$expobjecttype_obj = $objexpobject->Gettype_obj();
$expobjectabout_obj = $objexpobject->Getabout_obj();
$expobjectmax_expert = $objexpobject->Getmax_expert();
    mysql_query("  insert into expobject values( DEFAULT,'$expobjectName',$expobjectcurr_price,$expobjecttype_obj,'$expobjectabout_obj',$expobjectmax_expert 
)"); 
return mysql_insert_id();
    mysql_query("commit"); 
  }
 
function Updateexpobject($objexpobject)
  {
$id = $objexpobject->Getid(); 
$expobjectName = $objexpobject->GetName();
$expobjectcurr_price = $objexpobject->Getcurr_price();
$expobjecttype_obj = $objexpobject->Gettype_obj();
$expobjectabout_obj = $objexpobject->Getabout_obj();
$expobjectmax_expert = $objexpobject->Getmax_expert();
    mysql_query("  Update expobject set Name = '$expobjectName',curr_price = $expobjectcurr_price,type_obj = $expobjecttype_obj,about_obj = '$expobjectabout_obj',max_expert = $expobjectmax_expert where id = $id ");
    mysql_query("commit"); 
 
  }
function GetexpobjectbyId ($id)
  {
    $result = mysql_query(" select id 'id', 
Name'Name', 
curr_price'curr_price', 
type_obj'type_obj', 
about_obj'about_obj', 
max_expert'max_expert' from expobject where id = $id ");
 
$objexpobject = new expobject;
while ($row = mysql_fetch_assoc($result)) {	
$objexpobject->Setid($row['id']);
$objexpobject->SetName($row['Name']);
$objexpobject->Setcurr_price($row['curr_price']);
$objexpobject->Settype_obj($row['type_obj']);
$objexpobject->Setabout_obj($row['about_obj']);
$objexpobject->Setmax_expert($row['max_expert']);
  }
mysql_free_result($result);
return $objexpobject;
  }
function GetexpobjectList()
  {
    $result = mysql_query(" select id 'id' , 
Name'Name', 
curr_price'curr_price', 
type_obj'type_obj', 
about_obj'about_obj', 
max_expert'max_expert' from expobject ");
 
$rslt_array=array();
while ($row = mysql_fetch_assoc($result)) {	
$objexpobject = new expobject;
$objexpobject->Setid($row['id']);
$objexpobject->SetName($row['Name']);
$objexpobject->Setcurr_price($row['curr_price']);
$objexpobject->Settype_obj($row['type_obj']);
$objexpobject->Setabout_obj($row['about_obj']);
$objexpobject->Setmax_expert($row['max_expert']);
array_push($rslt_array,  $objexpobject);
  }
mysql_free_result($result);
return $rslt_array;
  }
    mysql_query(" Create table if not exists type_obj (
 id integer auto_increment primary key ,  name varchar(50) ) ");
    mysql_query("  insert into type_obj(id,name) values(1,'value-1'),(2,'value-2'),(3,'value-3');");
    mysql_query("commit"); 
 
function Gettype_objOptionList($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from type_obj ");
 
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
function Gettype_objOptionValue($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from type_obj where id = $selectedValue ");
 
while ($row = mysql_fetch_assoc($result)) {	
return $row['name'];
  }
mysql_free_result($result);
  }
    mysql_query(" Create table if not exists expobject (
 id integer auto_increment primary key, 
Name varchar(50), 
curr_price Double, 
type_obj Integer, 
about_obj varchar(50), 
max_expert Integer) ");
    mysql_query("commit"); 
?>
