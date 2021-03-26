<?php
include 'dbconnection.php';
include 'criteriaDAO.php';
include 'page_head.html';
 
if (!empty($_POST['command']))
  {
  $command = $_POST['command'];
  if ($command == 'delete')
      {
      $id =$_POST['id'];
      DelcriteriaById($id);
      echo '<h2>criteria deleted</h2>';
      }
 else if (($command == 'insert') or ($command == 'update'))
      {
 $objcriteria->Setid($_POST['id']);
 $objcriteria->Setname($_POST['name']);
 $objcriteria->Setcat_name($_POST['cat_name']);
 $objcriteria->Setmark_volume($_POST['mark_volume']);
 $objcriteria->Setmax_mark($_POST['max_mark']);
 $objcriteria->Setlimit_mark($_POST['limit_mark']);
 $objcriteria->Setmark_flag($_POST['mark_flag']);
 $objcriteria->Setmin_mark($_POST['min_mark']);
 $objcriteria->Setmark_value($_POST['mark_value']);
      if ($command == 'insert')
          {
           $objcriteria->SetId(Insertcriteria($objcriteria));
           echo '<h2>criteria Inserted</h2>';
          }
      else if ($command == 'update')
          {
           Updatecriteria($objcriteria);
           echo '<h2>criteria Updated</h2>';
          }
      }
 
  } 
 
$Listcriteria= GetcriteriaList();
foreach ($Listcriteria as $value) {	
echo " <div class='content-criteria_list'>";
echo " <div class='content-criteria__container'>";
echo "<br>Название";
echo $value->Getname();
echo " </div> ";
echo " <div class='content-criteria__container'>";
echo "<br>Название категории";
echo $value->Getcat_name();
echo " </div> ";
echo " <div class='content-criteria__container'>";
echo "<br>Вес оценки";
echo $value->Getmark_volume();
echo " </div> ";
echo " <div class='content-criteria__container'>";
echo "<br>Количество баллов";
echo $value->Getmax_mark();
echo " </div> ";
echo " <div class='content-criteria__container'>";
echo "<br>Максимальный бал";
echo $value->Getlimit_mark();
echo " </div> ";
echo " <div class='content-criteria__container'>";
echo "<br>Является ли максимальное значение положительным";
echo Getmark_flagOptionValue($value->Getmark_flag());
echo " </div> ";
echo " <div class='content-criteria__container'>";
echo "<br>Минимальный бал";
echo $value->Getmin_mark();
echo " </div> ";
echo " <div class='content-criteria__container'>";
echo "<br>Единицы измерения";
echo $value->Getmark_value();
echo " </div> ";
echo "<form action='criteria_edit.php' method='post' > ";
echo " <input type = 'hidden' name = 'id' value ="; echo $value->Getid(); echo"> ";
echo " <input type = 'hidden' name = 'command' value = 'edit'> ";
echo " <br/><button class='small_btn'>Edit</button></form>"; 
echo "<form action='criteriaList.php' method='post' > ";
echo " <input type = 'hidden' name = 'id' value ="; echo $value->Getid(); echo"> ";
echo " <input type = 'hidden' name = 'command' value = 'delete'> ";
echo " <br/><button class='small_btn'>Delete</button></form>"; 
echo " </div> ";
  }
echo "<form action='criteria_edit.php' method='post' > ";
echo " <input type = 'hidden' name = 'command' value = 'add'> ";
echo " <br/><button class='big_btn'>Add</button></form>"; 
include 'page_end.html';
?>
