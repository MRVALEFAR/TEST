<?php
include 'dbconnection.php';
include 'expert.php';
 
function DelexpertById($id)
  {
    mysql_query("delete from expert where id = $id ");
    mysql_query("commit");
  }
 
function Insertexpert($objexpert)
  {
$expertname = $objexpert->Getname();
$expertcategory = $objexpert->Getcategory();
$expertprice = $objexpert->Getprice();
$experted_izm = $objexpert->Geted_izm();
$expertgeneral_mark = $objexpert->Getgeneral_mark();
$expertpictureUrl = $objexpert->GetpictureUrl();
    mysql_query("  insert into expert values( DEFAULT,'$expertname',$expertcategory,$expertprice,'$experted_izm','$expertgeneral_mark','$expertpictureUrl' 
)"); 
return mysql_insert_id();
    mysql_query("commit"); 
  }
 
function Updateexpert($objexpert)
  {
$id = $objexpert->Getid(); 
$expertname = $objexpert->Getname();
$expertcategory = $objexpert->Getcategory();
$expertprice = $objexpert->Getprice();
$experted_izm = $objexpert->Geted_izm();
$expertgeneral_mark = $objexpert->Getgeneral_mark();
$expertpictureUrl = $objexpert->GetpictureUrl();
    mysql_query("  Update expert set name = '$expertname',category = $expertcategory,price = $expertprice,ed_izm = '$experted_izm',general_mark = '$expertgeneral_mark',pictureUrl = '$expertpictureUrl' where id = $id ");
    mysql_query("commit"); 
 
  }
function GetexpertbyId ($id)
  {
    $result = mysql_query(" select id 'id', 
name'name', 
category'category', 
price'price', 
ed_izm'ed_izm', 
general_mark'general_mark', 
pictureUrl'pictureUrl' from expert where id = $id ");
 
$objexpert = new expert;
while ($row = mysql_fetch_assoc($result)) {	
$objexpert->Setid($row['id']);
$objexpert->Setname($row['name']);
$objexpert->Setcategory($row['category']);
$objexpert->Setprice($row['price']);
$objexpert->Seted_izm($row['ed_izm']);
$objexpert->Setgeneral_mark($row['general_mark']);
$objexpert->SetpictureUrl($row['pictureUrl']);
  }
mysql_free_result($result);
return $objexpert;
  }
function GetexpertList()
  {
    $result = mysql_query(" select id 'id' , 
name'name', 
category'category', 
price'price', 
ed_izm'ed_izm', 
general_mark'general_mark', 
pictureUrl'pictureUrl' from expert ");
 
$rslt_array=array();
while ($row = mysql_fetch_assoc($result)) {	
$objexpert = new expert;
$objexpert->Setid($row['id']);
$objexpert->Setname($row['name']);
$objexpert->Setcategory($row['category']);
$objexpert->Setprice($row['price']);
$objexpert->Seted_izm($row['ed_izm']);
$objexpert->Setgeneral_mark($row['general_mark']);
$objexpert->SetpictureUrl($row['pictureUrl']);
array_push($rslt_array,  $objexpert);
  }
mysql_free_result($result);
return $rslt_array;
  }
    mysql_query(" Create table if not exists category (
 id integer auto_increment primary key ,  name varchar(50) ) ");
    mysql_query("  insert into category(id,name) values(1,'value-1'),(2,'value-2'),(3,'value-3');");
    mysql_query("commit"); 
 
function GetcategoryOptionList($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from category ");
 
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
function GetcategoryOptionValue($selectedValue)
  {
    $result = mysql_query(" select id 'id' , name 'name'  from category where id = $selectedValue ");
 
while ($row = mysql_fetch_assoc($result)) {	
return $row['name'];
  }
mysql_free_result($result);
  }
    mysql_query(" Create table if not exists expert (
 id integer auto_increment primary key, 
name varchar(50), 
category Integer, 
price Double, 
ed_izm varchar(50), 
general_mark varchar(50), 
pictureUrl varchar(50)) ");
    mysql_query("commit"); 
?>
