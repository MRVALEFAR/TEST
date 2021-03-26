<?php
include 'dbconnection.php';
include 'expobjectDAO.php';
include 'page_head.html';
 
if (!empty($_POST['command']))
  {
  $command = $_POST['command'];
  if ($command == 'delete')
      {
      $id =$_POST['id'];
      DelexpobjectById($id);
      echo '<h2>expobject deleted</h2>';
      }
 else if (($command == 'insert') or ($command == 'update'))
      {
 $objexpobject->Setid($_POST['id']);
 $objexpobject->SetName($_POST['Name']);
 $objexpobject->Setcurr_price($_POST['curr_price']);
 $objexpobject->Settype_obj($_POST['type_obj']);
 $objexpobject->Setabout_obj($_POST['about_obj']);
 $objexpobject->Setmax_expert($_POST['max_expert']);
      if ($command == 'insert')
          {
           $objexpobject->SetId(Insertexpobject($objexpobject));
           echo '<h2>expobject Inserted</h2>';
          }
      else if ($command == 'update')
          {
           Updateexpobject($objexpobject);
           echo '<h2>expobject Updated</h2>';
          }
      }
 
  } 
 
$Listexpobject= GetexpobjectList();
foreach ($Listexpobject as $value) {	
echo " <div class='content-expobject_list'>";
echo " <div class='content-expobject__container'>";
echo "<br>Название";
echo $value->GetName();
echo " </div> ";
echo " <div class='content-expobject__container'>";
echo "<br>актуальная цена";
echo $value->Getcurr_price();
echo " </div> ";
echo " <div class='content-expobject__container'>";
echo "<br>тип объекта";
echo Gettype_objOptionValue($value->Gettype_obj());
echo " </div> ";
echo " <div class='content-expobject__container'>";
echo "<br>описание";
echo $value->Getabout_obj();
echo " </div> ";
echo " <div class='content-expobject__container'>";
echo "<br>максимальное количество экспертиз";
echo $value->Getmax_expert();
echo " </div> ";
echo "<form action='expobject_edit.php' method='post' > ";
echo " <input type = 'hidden' name = 'id' value ="; echo $value->Getid(); echo"> ";
echo " <input type = 'hidden' name = 'command' value = 'edit'> ";
echo " <br/><button class='small_btn'>Edit</button></form>"; 
echo "<form action='expobjectList.php' method='post' > ";
echo " <input type = 'hidden' name = 'id' value ="; echo $value->Getid(); echo"> ";
echo " <input type = 'hidden' name = 'command' value = 'delete'> ";
echo " <br/><button class='small_btn'>Delete</button></form>"; 
echo " </div> ";
  }
echo "<form action='expobject_edit.php' method='post' > ";
echo " <input type = 'hidden' name = 'command' value = 'add'> ";
echo " <br/><button class='big_btn'>Add</button></form>"; 
include 'page_end.html';
?>
