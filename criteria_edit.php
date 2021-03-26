<?php
include 'criteriaDAO.php';
include 'page_head.html';
$objcriteria = new criteria;
if (!empty($_POST['command']))
  {
  $command = $_POST['command'];
 if ($command == 'edit'){
 $id =$_POST['id']; 
 $objcriteria= GetcriteriabyId($id);
  } 
 
  } 
 
echo "<div class ='criteria_edit'>";
echo "<form action='criteriaList.php' method='post' > ";
 
echo "criteria №"; echo $objcriteria->Getid(); echo" <br/><br/> ";
echo "Название: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='name' Value ='
";
echo $objcriteria->Getname();
echo "
'
 ><br/> ";
echo "Название категории: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='cat_name' Value ='
";
echo $objcriteria->Getcat_name();
echo "
'
 ><br/> ";
echo "Вес оценки: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='mark_volume' Value =";
echo $objcriteria->Getmark_volume();
echo "
 ><br/> ";
echo "Количество баллов: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='max_mark' Value =";
echo $objcriteria->Getmax_mark();
echo "
 ><br/> ";
echo "Максимальный бал: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='limit_mark' Value =";
echo $objcriteria->Getlimit_mark();
echo "
 ><br/> ";
echo "Является ли максимальное значение положительным: <br>";
echo " <select name = 'mark_flag'>";
$selectedValue = $objcriteria->Getmark_flag();
Getmark_flagOptionList($selectedValue);
 echo " </select ><br/> ";
echo "Минимальный бал: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='min_mark' Value =";
echo $objcriteria->Getmin_mark();
echo "
 ><br/> ";
echo "Единицы измерения: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='mark_value' Value ='
";
echo $objcriteria->Getmark_value();
echo "
'
 ><br/> ";
echo " <br/><input type = 'hidden' name = 'id' value ="; echo $objcriteria->Getid(); echo"> ";
 if($objcriteria->Getid()==0) {
echo " <br/><input type = 'hidden' name = 'command' value = 'insert'> ";
} else {
echo " <br/><input type = 'hidden' name = 'command' value = 'update'> ";
}
echo " <br/><button class='subject-big_btn'>Save</button></form>"; 
echo " </div> ";
include 'page_end.html';
?>
