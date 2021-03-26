<?php
include 'dbconnection.php';
include 'creteria_expertDAO.php';
include 'page_head.html';
 
if (!empty($_POST['command']))
  {
  $command = $_POST['command'];
  if ($command == 'delete')
      {
      $id =$_POST['id'];
      Delcreteria_expertById($id);
      echo '<h2>creteria_expert deleted</h2>';
      }
 else if (($command == 'insert') or ($command == 'update'))
      {
 $objcreteria_expert->Setid($_POST['id']);
 $objcreteria_expert->SetObject_Id($_POST['Object_Id']);
 $objcreteria_expert->SetCategory_id($_POST['Category_id']);
 $objcreteria_expert->SetDate_expert($_POST['Date_expert']);
 $objcreteria_expert->SetExpert_opinion($_POST['Expert_opinion']);
 $objcreteria_expert->SetExpert_name_id($_POST['Expert_name_id']);
      if ($command == 'insert')
          {
           $objcreteria_expert->SetId(Insertcreteria_expert($objcreteria_expert));
           echo '<h2>creteria_expert Inserted</h2>';
          }
      else if ($command == 'update')
          {
           Updatecreteria_expert($objcreteria_expert);
           echo '<h2>creteria_expert Updated</h2>';
          }
      }
 
  } 
 
$Listcreteria_expert= Getcreteria_expertList();
foreach ($Listcreteria_expert as $value) {	
echo " <div class='content-creteria_expert_list'>";
echo " <div class='content-creteria_expert__container'>";
echo "<br>Название объекта";
echo GetObject_IdOptionValue($value->GetObject_Id());
echo " </div> ";
echo " <div class='content-creteria_expert__container'>";
echo "<br>Название категории";
echo GetCategory_idOptionValue($value->GetCategory_id());
echo " </div> ";
echo " <div class='content-creteria_expert__container'>";
echo "<br>Дата ";
echo $value->GetDate_expert();
echo " </div> ";
echo " <div class='content-creteria_expert__container'>";
echo "<br>Заключение эксперта";
echo $value->GetExpert_opinion();
echo " </div> ";
echo " <div class='content-creteria_expert__container'>";
echo "<br>Эксперт";
echo GetExpert_name_idOptionValue($value->GetExpert_name_id());
echo " </div> ";
echo "<form action='creteria_expert_edit.php' method='post' > ";
echo " <input type = 'hidden' name = 'id' value ="; echo $value->Getid(); echo"> ";
echo " <input type = 'hidden' name = 'command' value = 'edit'> ";
echo " <br/><button class='small_btn'>Edit</button></form>"; 
echo "<form action='creteria_expertList.php' method='post' > ";
echo " <input type = 'hidden' name = 'id' value ="; echo $value->Getid(); echo"> ";
echo " <input type = 'hidden' name = 'command' value = 'delete'> ";
echo " <br/><button class='small_btn'>Delete</button></form>"; 
echo " </div> ";
  }
echo "<form action='creteria_expert_edit.php' method='post' > ";
echo " <input type = 'hidden' name = 'command' value = 'add'> ";
echo " <br/><button class='big_btn'>Add</button></form>"; 
include 'page_end.html';
?>
