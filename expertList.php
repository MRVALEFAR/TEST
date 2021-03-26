<?php
include 'dbconnection.php';
include 'expertDAO.php';
include 'page_head.html';
 
if (!empty($_POST['command']))
  {
  $command = $_POST['command'];
  if ($command == 'delete')
      {
      $id =$_POST['id'];
      DelexpertById($id);
      echo '<h2>expert deleted</h2>';
      }
 else if (($command == 'insert') or ($command == 'update'))
      {
 $objexpert->Setid($_POST['id']);
 $objexpert->Setname($_POST['name']);
 $objexpert->Setcategory($_POST['category']);
 $objexpert->Setprice($_POST['price']);
 $objexpert->Seted_izm($_POST['ed_izm']);
 $objexpert->Setgeneral_mark($_POST['general_mark']);
 $objexpert->SetpictureUrl($_POST['pictureUrl']);
      if ($command == 'insert')
          {
           $objexpert->SetId(Insertexpert($objexpert));
           echo '<h2>expert Inserted</h2>';
          }
      else if ($command == 'update')
          {
           Updateexpert($objexpert);
           echo '<h2>expert Updated</h2>';
          }
      }
 
  } 
 
$Listexpert= GetexpertList();
foreach ($Listexpert as $value) {	
echo " <div class='content-expert_list'>";
echo " <div class='content-expert__container'>";
echo "<br>название";
echo $value->Getname();
echo " </div> ";
echo " <div class='content-expert__container'>";
echo "<br>категория";
echo GetcategoryOptionValue($value->Getcategory());
echo " </div> ";
echo " <div class='content-expert__container'>";
echo "<br>текущая стоимость";
echo $value->Getprice();
echo " </div> ";
echo " <div class='content-expert__container'>";
echo "<br>единицы измерения критериев";
echo $value->Geted_izm();
echo " </div> ";
echo " <div class='content-expert__container'>";
echo "<br>общая оценка";
echo $value->Getgeneral_mark();
echo " </div> ";
echo " <div class='content-expert__container'>";
echo "<br>картинки";
echo $value->GetpictureUrl();
echo " </div> ";
echo "<form action='expert_edit.php' method='post' > ";
echo " <input type = 'hidden' name = 'id' value ="; echo $value->Getid(); echo"> ";
echo " <input type = 'hidden' name = 'command' value = 'edit'> ";
echo " <br/><button class='small_btn'>Edit</button></form>"; 
echo "<form action='expertList.php' method='post' > ";
echo " <input type = 'hidden' name = 'id' value ="; echo $value->Getid(); echo"> ";
echo " <input type = 'hidden' name = 'command' value = 'delete'> ";
echo " <br/><button class='small_btn'>Delete</button></form>"; 
echo " </div> ";
  }
echo "<form action='expert_edit.php' method='post' > ";
echo " <input type = 'hidden' name = 'command' value = 'add'> ";
echo " <br/><button class='big_btn'>Add</button></form>"; 
include 'page_end.html';
?>
