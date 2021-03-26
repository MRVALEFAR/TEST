<?php
include 'dbconnection.php';
include 'departDAO.php';
include 'page_head.html';
 
if (!empty($_POST['command']))
  {
  $command = $_POST['command'];
  if ($command == 'delete')
      {
      $id =$_POST['id'];
      DeldepartById($id);
      echo '<h2>depart deleted</h2>';
      }
 else if (($command == 'insert') or ($command == 'update'))
      {
 $objdepart->Setid($_POST['id']);
 $objdepart->Setname_depart($_POST['name_depart']);
 $objdepart->Setsituating($_POST['situating']);
 $objdepart->SetPhone_depart($_POST['Phone_depart']);
 $objdepart->SetSecurity_depart($_POST['Security_depart']);
 $objdepart->Setdepart_Boss($_POST['depart_Boss']);
 $objdepart->Setimage($_POST['image']);
      if ($command == 'insert')
          {
           $objdepart->SetId(Insertdepart($objdepart));
           echo '<h2>depart Inserted</h2>';
          }
      else if ($command == 'update')
          {
           Updatedepart($objdepart);
           echo '<h2>depart Updated</h2>';
          }
      }
 
  } 
 
$Listdepart= GetdepartList();
foreach ($Listdepart as $value) {	
echo " <div class='content-depart_list'>";
echo " <div class='content-depart__container'>";
echo "<br>Наименование отдела";
echo $value->Getname_depart();
echo " </div> ";
echo " <div class='content-depart__container'>";
echo "<br>Местоположение";
echo $value->Getsituating();
echo " </div> ";
echo " <div class='content-depart__container'>";
echo "<br>Телефон отдела";
echo $value->GetPhone_depart();
echo " </div> ";
echo " <div class='content-depart__container'>";
echo "<br>Режим доступа в отдел";
echo GetSecurity_departOptionValue($value->GetSecurity_depart());
echo " </div> ";
echo " <div class='content-depart__container'>";
echo "<br>Начальник отдела или ответственное лицо";
echo Getdepart_BossOptionValue($value->Getdepart_Boss());
echo " </div> ";
echo " <div class='content-depart__container'>";
echo "<br>Картинка";
echo $value->Getimage();
echo " </div> ";
echo "<form action='depart_edit.php' method='post' > ";
echo " <input type = 'hidden' name = 'id' value ="; echo $value->Getid(); echo"> ";
echo " <input type = 'hidden' name = 'command' value = 'edit'> ";
echo " <br/><button class='small_btn'>Edit</button></form>"; 
echo "<form action='departList.php' method='post' > ";
echo " <input type = 'hidden' name = 'id' value ="; echo $value->Getid(); echo"> ";
echo " <input type = 'hidden' name = 'command' value = 'delete'> ";
echo " <br/><button class='small_btn'>Delete</button></form>"; 
echo " </div> ";
  }
echo "<form action='depart_edit.php' method='post' > ";
echo " <input type = 'hidden' name = 'command' value = 'add'> ";
echo " <br/><button class='big_btn'>Add</button></form>"; 
include 'page_end.html';
?>
