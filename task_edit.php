<?php
include 'taskDAO.php';
include 'page_head.html';
$objtask = new task;
if (!empty($_POST['command']))
  {
  $command = $_POST['command'];
 if ($command == 'edit'){
 $id =$_POST['id']; 
 $objtask= GettaskbyId($id);
  } 
 
  } 
 
echo "<div class ='task_edit'>";
echo "<form action='taskList.php' method='post' > ";
 
echo "task №"; echo $objtask->Getid(); echo" <br/><br/> ";
echo "Объект: <br>";
echo " <select name = 'Object'>";
$selectedValue = $objtask->GetObject();
GetObjectOptionList($selectedValue);
 echo " </select ><br/> ";
echo "актуальная цена: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='Actual_Price' Value =";
echo $objtask->GetActual_Price();
echo "
 ><br/> ";
echo "количество критериев оценки: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='Criterias' Value =";
echo $objtask->GetCriterias();
echo "
 ><br/> ";
echo "количество экспертиз: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='Expert_Quantity' Value =";
echo $objtask->GetExpert_Quantity();
echo "
 ><br/> ";
echo "дата экспертизы: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='date_expert' Value ='
";
echo $objtask->Getdate_expert();
echo "
'
 ><br/> ";
echo "время сроки: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='end_time' Value ='
";
echo $objtask->Getend_time();
echo "
'
 ><br/> ";
echo "состояние: <br>";
echo " <select name = 'State'>";
$selectedValue = $objtask->GetState();
GetStateOptionList($selectedValue);
 echo " </select ><br/> ";
echo "заказчик: <br>";
echo " <select name = 'Person'>";
$selectedValue = $objtask->GetPerson();
GetPersonOptionList($selectedValue);
 echo " </select ><br/> ";
echo " <br/><input type = 'hidden' name = 'id' value ="; echo $objtask->Getid(); echo"> ";
 if($objtask->Getid()==0) {
echo " <br/><input type = 'hidden' name = 'command' value = 'insert'> ";
} else {
echo " <br/><input type = 'hidden' name = 'command' value = 'update'> ";
}
echo " <br/><button class='subject-big_btn'>Save</button></form>"; 
echo " </div> ";
include 'page_end.html';
?>
