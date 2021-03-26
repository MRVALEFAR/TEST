<?php
include 'dbconnection.php';
include 'criteria.php';
 
function DelcriteriaById($id)
  {
    mysql_query("delete from criteria where id = $id ");
    mysql_query("commit");
  }
 
function Insertcriteria($objcriteria)
  {
$criterianame = $objcriteria->Getname();
$criteriacat_name = $objcriteria->Getcat_name();
$criteriamark_volume = $objcriteria->Getmark_volume();
$criteriamax_mark = $objcriteria->Getmax_mark();
$criterialimit_mark = $objcriteria->Getlimit_mark();
$criteriamark_flag = $objcriteria->Getmark_flag();
$criteriamin_mark = $objcriteria->Getmin_mark();
$criteriamark_value = $objcriteria->Getmark_value();
    mysql_query("  insert into criteria values( DEFAULT,'$criterianame','$criteriacat_name',$criteriamark_volume,$criteriamax_mark,$criterialimit_mark,$criteriamark_flag,$criteriamin_mark,'$criteriamark_value' 
)"); 
return mysql_insert_id();
    mysql_query("commit"); 
  }
 
function Updatecriteria($objcriteria)
  {
$id = $objcriteria->Getid(); 
$criterianame = $objcriteria->Getname();
$criteriacat_name = $objcriteria->Getcat_name();
$criteriamark_volume = $objcriteria->Getmark_volume();
$criteriamax_mark = $objcriteria->Getmax_mark();
$criterialimit_mark = $objcriteria->Getlimit_mark();
$criteriamark_flag = $objcriteria->Getmark_flag();
$criteriamin_mark = $objcriteria->Getmin_mark();
$criteriamark_value = $objcriteria->Getmark_value();
    mysql_query("  Update criteria set name = '$criterianame',cat_name = '$criteriacat_name',mark_volume = $criteriamark_volume,max_mark = $criteriamax_mark,limit_mark = $criterialimit_mark,mark_flag = $criteriamark_flag,min_mark = $criteriamin_mark,mark_value = '$criteriamark_value' where id = $id ");
    mysql_query("commit"); 
 
  }
function GetcriteriabyId ($id)
  {
    $result = mysql_query(" select id 'id', 
name'name', 
cat_name'cat_name', 
mark_volume'mark_volume', 
max_mark'max_mark', 
limit_mark'limit_mark', 
mark_flag'mark_flag', 
min_mark'min_mark', 
mark_value'mark_value' from criteria where id = $id ");
 
$objcriteria = new criteria;
while ($row = mysql_fetch_assoc($result)) {	
$objcriteria->Setid($row['id']);
$objcriteria->Setname($row['name']);
$objcriteria->Setcat_name($row['cat_name']);
$objcriteria->Setmark_volume($row['mark_volume']);
$objcriteria->Setmax_mark($row['max_mark']);
$objcriteria->Setlimit_mark($row['limit_mark']);
$objcriteria->Setmark_flag($row['mark_flag']);
$objcriteria->Setmin_mark($row['min_mark']);
$objcriteria->Setmark_value($row['mark_value']);
  }
mysql_free_result($result);
return $objcriteria;
  }
function GetcriteriaList()
  {
    $result = mysql_query(" select id 'id' , 
name'name', 
cat_name'cat_name', 
mark_volume'mark_volume', 
max_mark'max_mark', 
limit_mark'limit_mark', 
mark_flag'mark_flag', 
min_mark'min_mark', 
mark_value'mark_value' from criteria ");
 
$rslt_array=array();
while ($row = mysql_fetch_assoc($result)) {	
$objcriteria = new criteria;
$objcriteria->Setid($row['id']);
$objcriteria->Setname($row['name']);
$objcriteria->Setcat_name($row['cat_name']);
$objcriteria->Setmark_volume($row['mark_volume']);
$objcriteria->Setmax_mark($row['max_mark']);
$objcriteria->Setlimit_mark($row['limit_mark']);
$objcriteria->Setmark_flag($row['mark_flag']);
$objcriteria->Setmin_mark($row['min_mark']);
$objcriteria->Setmark_value($row['mark_value']);
array_push($rslt_array,  $objcriteria);
  }
mysql_free_result($result);
return $rslt_array;
  }
    mysql_query(" Create table if not exists mark_flag (
 id integer auto_increment primary key ,  name varchar(50) ) ");
    mysql_query("  insert into mark_flag(id,name) values(1,'value-1'),(2,'value-2'),(3,'value-3');");
    mysql_query("commit"); 
 
function Getmark_flagOptionList($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from mark_flag ");
 
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
function Getmark_flagOptionValue($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from mark_flag where id = $selectedValue ");
 
while ($row = mysql_fetch_assoc($result)) {	
return $row['name'];
  }
mysql_free_result($result);
  }
    mysql_query(" Create table if not exists criteria (
 id integer auto_increment primary key, 
name varchar(50), 
cat_name varchar(50), 
mark_volume Integer, 
max_mark Integer, 
limit_mark Integer, 
mark_flag Integer, 
min_mark Integer, 
mark_value varchar(50)) ");
    mysql_query("commit"); 
?>
