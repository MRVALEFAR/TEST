<?php
include 'dbconnection.php';
include 'taskDAO.php';
include 'page_head.html';
 
if (!empty($_POST['command']))
  {
  $command = $_POST['command'];
  if ($command == 'delete')
      {
      $id =$_POST['id'];
      DeltaskById($id);
      echo '<h2>task deleted</h2>';
      }
 else if (($command == 'insert') or ($command == 'update'))
      {
 $objtask->Setid($_POST['id']);
 $objtask->SetObject($_POST['Object']);
 $objtask->SetActual_Price($_POST['Actual_Price']);
 $objtask->SetCriterias($_POST['Criterias']);
 $objtask->SetExpert_Quantity($_POST['Expert_Quantity']);
 $objtask->Setdate_expert($_POST['date_expert']);
 $objtask->Setend_time($_POST['end_time']);
 $objtask->SetState($_POST['State']);
 $objtask->SetPerson($_POST['Person']);
      if ($command == 'insert')
          {
           $objtask->SetId(Inserttask($objtask));
           echo '<h2>task Inserted</h2>';
          }
      else if ($command == 'update')
          {
           Updatetask($objtask);
           echo '<h2>task Updated</h2>';
          }
      }
 
  } 
 
$Listtask= GettaskList();
foreach ($Listtask as $value) {	
echo " <div class='content-task_list'>";
echo " <div class='content-task__container'>";
echo "<br>Объект";
echo GetObjectOptionValue($value->GetObject());
echo " </div> ";
echo " <div class='content-task__container'>";
echo "<br>актуальная цена";
echo $value->GetActual_Price();
echo " </div> ";
echo " <div class='content-task__container'>";
echo "<br>количество критериев оценки";
echo $value->GetCriterias();
echo " </div> ";
echo " <div class='content-task__container'>";
echo "<br>количество экспертиз";
echo $value->GetExpert_Quantity();
echo " </div> ";
echo " <div class='content-task__container'>";
echo "<br>дата экспертизы";
echo $value->Getdate_expert();
echo " </div> ";
echo " <div class='content-task__container'>";
echo "<br>время сроки";
echo $value->Getend_time();
echo " </div> ";
echo " <div class='content-task__container'>";
echo "<br>состояние";
echo GetStateOptionValue($value->GetState());
echo " </div> ";
echo " <div class='content-task__container'>";
echo "<br>заказчик";
echo GetPersonOptionValue($value->GetPerson());
echo " </div> ";
echo "<form action='task_edit.php' method='post' > ";
echo " <input type = 'hidden' name = 'id' value ="; echo $value->Getid(); echo"> ";
echo " <input type = 'hidden' name = 'command' value = 'edit'> ";
echo " <br/><button class='small_btn'>Edit</button></form>"; 
echo "<form action='taskList.php' method='post' > ";
echo " <input type = 'hidden' name = 'id' value ="; echo $value->Getid(); echo"> ";
echo " <input type = 'hidden' name = 'command' value = 'delete'> ";
echo " <br/><button class='small_btn'>Delete</button></form>"; 
echo " </div> ";
  }
echo "<form action='task_edit.php' method='post' > ";
echo " <input type = 'hidden' name = 'command' value = 'add'> ";
echo " <br/><button class='big_btn'>Add</button></form>"; 
include 'page_end.html';
?>
