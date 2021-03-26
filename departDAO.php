<?php
include 'dbconnection.php';
include 'depart.php';
 
function DeldepartById($id)
  {
    mysql_query("delete from depart where id = $id ");
    mysql_query("commit");
  }
 
function Insertdepart($objdepart)
  {
$departname_depart = $objdepart->Getname_depart();
$departsituating = $objdepart->Getsituating();
$departPhone_depart = $objdepart->GetPhone_depart();
$departSecurity_depart = $objdepart->GetSecurity_depart();
$departdepart_Boss = $objdepart->Getdepart_Boss();
$departimage = $objdepart->Getimage();
    mysql_query("  insert into depart values( DEFAULT,'$departname_depart','$departsituating','$departPhone_depart',$departSecurity_depart,$departdepart_Boss,'$departimage' 
)"); 
return mysql_insert_id();
    mysql_query("commit"); 
  }
 
function Updatedepart($objdepart)
  {
$id = $objdepart->Getid(); 
$departname_depart = $objdepart->Getname_depart();
$departsituating = $objdepart->Getsituating();
$departPhone_depart = $objdepart->GetPhone_depart();
$departSecurity_depart = $objdepart->GetSecurity_depart();
$departdepart_Boss = $objdepart->Getdepart_Boss();
$departimage = $objdepart->Getimage();
    mysql_query("  Update depart set name_depart = '$departname_depart',situating = '$departsituating',Phone_depart = '$departPhone_depart',Security_depart = $departSecurity_depart,depart_Boss = $departdepart_Boss,image = '$departimage' where id = $id ");
    mysql_query("commit"); 
 
  }
function GetdepartbyId ($id)
  {
    $result = mysql_query(" select id 'id', 
name_depart'name_depart', 
situating'situating', 
Phone_depart'Phone_depart', 
Security_depart'Security_depart', 
depart_Boss'depart_Boss', 
image'image' from depart where id = $id ");
 
$objdepart = new depart;
while ($row = mysql_fetch_assoc($result)) {	
$objdepart->Setid($row['id']);
$objdepart->Setname_depart($row['name_depart']);
$objdepart->Setsituating($row['situating']);
$objdepart->SetPhone_depart($row['Phone_depart']);
$objdepart->SetSecurity_depart($row['Security_depart']);
$objdepart->Setdepart_Boss($row['depart_Boss']);
$objdepart->Setimage($row['image']);
  }
mysql_free_result($result);
return $objdepart;
  }
function GetdepartList()
  {
    $result = mysql_query(" select id 'id' , 
name_depart'name_depart', 
situating'situating', 
Phone_depart'Phone_depart', 
Security_depart'Security_depart', 
depart_Boss'depart_Boss', 
image'image' from depart ");
 
$rslt_array=array();
while ($row = mysql_fetch_assoc($result)) {	
$objdepart = new depart;
$objdepart->Setid($row['id']);
$objdepart->Setname_depart($row['name_depart']);
$objdepart->Setsituating($row['situating']);
$objdepart->SetPhone_depart($row['Phone_depart']);
$objdepart->SetSecurity_depart($row['Security_depart']);
$objdepart->Setdepart_Boss($row['depart_Boss']);
$objdepart->Setimage($row['image']);
array_push($rslt_array,  $objdepart);
  }
mysql_free_result($result);
return $rslt_array;
  }
    mysql_query(" Create table if not exists Security_depart (
 id integer auto_increment primary key ,  name varchar(50) ) ");
    mysql_query("  insert into Security_depart(id,name) values(1,'value-1'),(2,'value-2'),(3,'value-3');");
    mysql_query("commit"); 
 
function GetSecurity_departOptionList($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from Security_depart ");
 
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
function GetSecurity_departOptionValue($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from Security_depart where id = $selectedValue ");
 
while ($row = mysql_fetch_assoc($result)) {	
return $row['name'];
  }
mysql_free_result($result);
  }
    mysql_query(" Create table if not exists depart_Boss (
 id integer auto_increment primary key ,  name varchar(50) ) ");
    mysql_query("  insert into depart_Boss(id,name) values(1,'value-1'),(2,'value-2'),(3,'value-3');");
    mysql_query("commit"); 
 
function Getdepart_BossOptionList($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from depart_Boss ");
 
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
function Getdepart_BossOptionValue($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from depart_Boss where id = $selectedValue ");
 
while ($row = mysql_fetch_assoc($result)) {	
return $row['name'];
  }
mysql_free_result($result);
  }
    mysql_query(" Create table if not exists depart (
 id integer auto_increment primary key, 
name_depart varchar(50), 
situating varchar(50), 
Phone_depart varchar(50), 
Security_depart Integer, 
depart_Boss Integer, 
image varchar(50)) ");
    mysql_query("commit"); 
?>
