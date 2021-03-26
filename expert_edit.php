<?php
include 'expertDAO.php';
include 'page_head.html';
$objexpert = new expert;
if (!empty($_POST['command']))
  {
  $command = $_POST['command'];
 if ($command == 'edit'){
 $id =$_POST['id']; 
 $objexpert= GetexpertbyId($id);
  } 
 
  } 
 
echo "<div class ='expert_edit'>";
echo "<form action='expertList.php' method='post' > ";
 
echo "expert №"; echo $objexpert->Getid(); echo" <br/><br/> ";
echo "название: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='name' Value ='
";
echo $objexpert->Getname();
echo "
'
 ><br/> ";
echo "категория: <br>";
echo " <select name = 'category'>";
$selectedValue = $objexpert->Getcategory();
GetcategoryOptionList($selectedValue);
 echo " </select ><br/> ";
echo "текущая стоимость: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='price' Value =";
echo $objexpert->Getprice();
echo "
 ><br/> ";
echo "единицы измерения критериев: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='ed_izm' Value ='
";
echo $objexpert->Geted_izm();
echo "
'
 ><br/> ";
echo "общая оценка: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='general_mark' Value ='
";
echo $objexpert->Getgeneral_mark();
echo "
'
 ><br/> ";
echo "картинки: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='pictureUrl' Value ='
";
echo $objexpert->GetpictureUrl();
echo "
'
 ><br/> ";
echo " <br/><input type = 'hidden' name = 'id' value ="; echo $objexpert->Getid(); echo"> ";
 if($objexpert->Getid()==0) {
echo " <br/><input type = 'hidden' name = 'command' value = 'insert'> ";
} else {
echo " <br/><input type = 'hidden' name = 'command' value = 'update'> ";
}
echo " <br/><button class='subject-big_btn'>Save</button></form>"; 
echo " </div> ";
include 'page_end.html';
?>
