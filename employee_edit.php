<?php
include 'employeeDAO.php';
include 'page_head.html';
$objemployee = new employee;
if (!empty($_POST['command']))
  {
  $command = $_POST['command'];
 if ($command == 'edit'){
 $id =$_POST['id']; 
 $objemployee= GetemployeebyId($id);
  } 
 
  } 
 
echo "<div class ='employee_edit'>";
echo "<form action='employeeList.php' method='post' > ";
 
echo "employee №"; echo $objemployee->Getid(); echo" <br/><br/> ";
echo "Имя: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='first_name' Value ='
";
echo $objemployee->Getfirst_name();
echo "
'
 ><br/> ";
echo "Фамилия: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='second_name' Value ='
";
echo $objemployee->Getsecond_name();
echo "
'
 ><br/> ";
echo "Отчество: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='father_name' Value ='
";
echo $objemployee->Getfather_name();
echo "
'
 ><br/> ";
echo "название отдела где работает сотрудник: <br>";
echo " <select name = 'Depart_id'>";
$selectedValue = $objemployee->GetDepart_id();
GetDepart_idOptionList($selectedValue);
 echo " </select ><br/> ";
echo "Права в информационной системе сотрудника: <br>";
echo " <select name = 'user_role'>";
$selectedValue = $objemployee->Getuser_role();
Getuser_roleOptionList($selectedValue);
 echo " </select ><br/> ";
echo "контактный телефон сотрудника: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='phone_num' Value ='
";
echo $objemployee->Getphone_num();
echo "
'
 ><br/> ";
echo "мобильный телефон сотрудника: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='mobile_num' Value ='
";
echo $objemployee->Getmobile_num();
echo "
'
 ><br/> ";
echo "комментарии по отношению к сотруднику: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='Comments_about' Value ='
";
echo $objemployee->GetComments_about();
echo "
'
 ><br/> ";
echo "Дата, когда зарегистрирован пользователь: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='regdate' Value ='
";
echo $objemployee->Getregdate();
echo "
'
 ><br/> ";
echo "место прописки: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='adress' Value ='
";
echo $objemployee->Getadress();
echo "
'
 ><br/> ";
echo "логин пользователя: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='Login' Value ='
";
echo $objemployee->GetLogin();
echo "
'
 ><br/> ";
echo "пароль пользователя: <br>";
echo "  <INPUT TYPE=text SIZE=40  NAME='Password' Value ='
";
echo $objemployee->GetPassword();
echo "
'
 ><br/> ";
echo " <br/><input type = 'hidden' name = 'id' value ="; echo $objemployee->Getid(); echo"> ";
 if($objemployee->Getid()==0) {
echo " <br/><input type = 'hidden' name = 'command' value = 'insert'> ";
} else {
echo " <br/><input type = 'hidden' name = 'command' value = 'update'> ";
}
echo " <br/><button class='subject-big_btn'>Save</button></form>"; 
echo " </div> ";
include 'page_end.html';
?>
