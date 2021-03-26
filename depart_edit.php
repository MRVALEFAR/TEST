<?php
include 'departDAO.php';
include 'page_head.html';
$objdepart = new depart;
if (!empty($_POST['command']))
  {
  $command = $_POST['command'];
 if ($command == 'edit'){
 $id =$_POST['id']; 
 $objdepart= GetdepartbyId($id);
  } 
 
  } 
 
echo "<div class ='depart_edit'>";
echo "<form action='departList.php' method='post' > ";
 
echo "depart №"; echo $objdepart->Getid(); echo" <br/><br/> ";
echo "Наименование отдела: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='name_depart' Value ='
";
echo $objdepart->Getname_depart();
echo "
'
 ><br/> ";
echo "Местоположение: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='situating' Value ='
";
echo $objdepart->Getsituating();
echo "
'
 ><br/> ";
echo "Телефон отдела: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='Phone_depart' Value ='
";
echo $objdepart->GetPhone_depart();
echo "
'
 ><br/> ";
echo "Режим доступа в отдел: <br>";
echo " <select name = 'Security_depart'>";
$selectedValue = $objdepart->GetSecurity_depart();
GetSecurity_departOptionList($selectedValue);
 echo " </select ><br/> ";
echo "Начальник отдела или ответственное лицо: <br>";
echo " <select name = 'depart_Boss'>";
$selectedValue = $objdepart->Getdepart_Boss();
Getdepart_BossOptionList($selectedValue);
 echo " </select ><br/> ";
echo "Картинка: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='image' Value ='
";
echo $objdepart->Getimage();
echo "
'
 ><br/> ";
echo " <br/><input type = 'hidden' name = 'id' value ="; echo $objdepart->Getid(); echo"> ";
 if($objdepart->Getid()==0) {
echo " <br/><input type = 'hidden' name = 'command' value = 'insert'> ";
} else {
echo " <br/><input type = 'hidden' name = 'command' value = 'update'> ";
}
echo " <br/><button class='subject-big_btn'>Save</button></form>"; 
echo " </div> ";
include 'page_end.html';
?>
