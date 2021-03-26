<?php
include 'creteria_expertDAO.php';
include 'page_head.html';
$objcreteria_expert = new creteria_expert;
if (!empty($_POST['command']))
  {
  $command = $_POST['command'];
 if ($command == 'edit'){
 $id =$_POST['id']; 
 $objcreteria_expert= Getcreteria_expertbyId($id);
  } 
 
  } 
 
echo "<div class ='creteria_expert_edit'>";
echo "<form action='creteria_expertList.php' method='post' > ";
 
echo "creteria_expert №"; echo $objcreteria_expert->Getid(); echo" <br/><br/> ";
echo "Название объекта: <br>";
echo " <select name = 'Object_Id'>";
$selectedValue = $objcreteria_expert->GetObject_Id();
GetObject_IdOptionList($selectedValue);
 echo " </select ><br/> ";
echo "Название категории: <br>";
echo " <select name = 'Category_id'>";
$selectedValue = $objcreteria_expert->GetCategory_id();
GetCategory_idOptionList($selectedValue);
 echo " </select ><br/> ";
echo "Дата : <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='Date_expert' Value ='
";
echo $objcreteria_expert->GetDate_expert();
echo "
'
 ><br/> ";
echo "Заключение эксперта: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='Expert_opinion' Value ='
";
echo $objcreteria_expert->GetExpert_opinion();
echo "
'
 ><br/> ";
echo "Эксперт: <br>";
echo " <select name = 'Expert_name_id'>";
$selectedValue = $objcreteria_expert->GetExpert_name_id();
GetExpert_name_idOptionList($selectedValue);
 echo " </select ><br/> ";
echo " <br/><input type = 'hidden' name = 'id' value ="; echo $objcreteria_expert->Getid(); echo"> ";
 if($objcreteria_expert->Getid()==0) {
echo " <br/><input type = 'hidden' name = 'command' value = 'insert'> ";
} else {
echo " <br/><input type = 'hidden' name = 'command' value = 'update'> ";
}
echo " <br/><button class='subject-big_btn'>Save</button></form>"; 
echo " </div> ";
include 'page_end.html';
?>
