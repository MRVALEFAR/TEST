<?php
include 'expobjectDAO.php';
include 'page_head.html';
$objexpobject = new expobject;
if (!empty($_POST['command']))
  {
  $command = $_POST['command'];
 if ($command == 'edit'){
 $id =$_POST['id']; 
 $objexpobject= GetexpobjectbyId($id);
  } 
 
  } 
 
echo "<div class ='expobject_edit'>";
echo "<form action='expobjectList.php' method='post' > ";
 
echo "expobject №"; echo $objexpobject->Getid(); echo" <br/><br/> ";
echo "Название: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='Name' Value ='
";
echo $objexpobject->GetName();
echo "
'
 ><br/> ";
echo "актуальная цена: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='curr_price' Value =";
echo $objexpobject->Getcurr_price();
echo "
 ><br/> ";
echo "тип объекта: <br>";
echo " <select name = 'type_obj'>";
$selectedValue = $objexpobject->Gettype_obj();
Gettype_objOptionList($selectedValue);
 echo " </select ><br/> ";
echo "описание: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='about_obj' Value ='
";
echo $objexpobject->Getabout_obj();
echo "
'
 ><br/> ";
echo "максимальное количество экспертиз: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='max_expert' Value =";
echo $objexpobject->Getmax_expert();
echo "
 ><br/> ";
echo " <br/><input type = 'hidden' name = 'id' value ="; echo $objexpobject->Getid(); echo"> ";
 if($objexpobject->Getid()==0) {
echo " <br/><input type = 'hidden' name = 'command' value = 'insert'> ";
} else {
echo " <br/><input type = 'hidden' name = 'command' value = 'update'> ";
}
echo " <br/><button class='subject-big_btn'>Save</button></form>"; 
echo " </div> ";
include 'page_end.html';
?>
