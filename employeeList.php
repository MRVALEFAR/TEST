<?php
include 'dbconnection.php';
include 'employeeDAO.php';
include 'page_head.html';
 
if (!empty($_POST['command']))
  {
  $command = $_POST['command'];
  if ($command == 'delete')
      {
      $id =$_POST['id'];
      DelemployeeById($id);
      echo '<h2>employee deleted</h2>';
      }
 else if (($command == 'insert') or ($command == 'update'))
      {
 $objemployee->Setid($_POST['id']);
 $objemployee->Setfirst_name($_POST['first_name']);
 $objemployee->Setsecond_name($_POST['second_name']);
 $objemployee->Setfather_name($_POST['father_name']);
 $objemployee->SetDepart_id($_POST['Depart_id']);
 $objemployee->Setuser_role($_POST['user_role']);
 $objemployee->Setphone_num($_POST['phone_num']);
 $objemployee->Setmobile_num($_POST['mobile_num']);
 $objemployee->SetComments_about($_POST['Comments_about']);
 $objemployee->Setregdate($_POST['regdate']);
 $objemployee->Setadress($_POST['adress']);
 $objemployee->SetLogin($_POST['Login']);
 $objemployee->SetPassword($_POST['Password']);
      if ($command == 'insert')
          {
           $objemployee->SetId(Insertemployee($objemployee));
           echo '<h2>employee Inserted</h2>';
          }
      else if ($command == 'update')
          {
           Updateemployee($objemployee);
           echo '<h2>employee Updated</h2>';
          }
      }
 
  } 
 
$Listemployee= GetemployeeList();
foreach ($Listemployee as $value) {	
echo " <div class='content-employee_list'>";
echo " <div class='content-employee__container'>";
echo "<br>Имя";
echo $value->Getfirst_name();
echo " </div> ";
echo " <div class='content-employee__container'>";
echo "<br>Фамилия";
echo $value->Getsecond_name();
echo " </div> ";
echo " <div class='content-employee__container'>";
echo "<br>Отчество";
echo $value->Getfather_name();
echo " </div> ";
echo " <div class='content-employee__container'>";
echo "<br>название отдела где работает сотрудник";
echo GetDepart_idOptionValue($value->GetDepart_id());
echo " </div> ";
echo " <div class='content-employee__container'>";
echo "<br>Права в информационной системе сотрудника";
echo Getuser_roleOptionValue($value->Getuser_role());
echo " </div> ";
echo " <div class='content-employee__container'>";
echo "<br>контактный телефон сотрудника";
echo $value->Getphone_num();
echo " </div> ";
echo " <div class='content-employee__container'>";
echo "<br>мобильный телефон сотрудника";
echo $value->Getmobile_num();
echo " </div> ";
echo " <div class='content-employee__container'>";
echo "<br>комментарии по отношению к сотруднику";
echo $value->GetComments_about();
echo " </div> ";
echo " <div class='content-employee__container'>";
echo "<br>Дата, когда зарегистрирован пользователь";
echo $value->Getregdate();
echo " </div> ";
echo " <div class='content-employee__container'>";
echo "<br>место прописки";
echo $value->Getadress();
echo " </div> ";
echo " <div class='content-employee__container'>";
echo "<br>логин пользователя";
echo $value->GetLogin();
echo " </div> ";
echo " <div class='content-employee__container'>";
echo "<br>пароль пользователя";
echo $value->GetPassword();
echo " </div> ";
echo "<form action='employee_edit.php' method='post' > ";
echo " <input type = 'hidden' name = 'id' value ="; echo $value->Getid(); echo"> ";
echo " <input type = 'hidden' name = 'command' value = 'edit'> ";
echo " <br/><button class='small_btn'>Edit</button></form>"; 
echo "<form action='employeeList.php' method='post' > ";
echo " <input type = 'hidden' name = 'id' value ="; echo $value->Getid(); echo"> ";
echo " <input type = 'hidden' name = 'command' value = 'delete'> ";
echo " <br/><button class='small_btn'>Delete</button></form>"; 
echo " </div> ";
  }
echo "<form action='employee_edit.php' method='post' > ";
echo " <input type = 'hidden' name = 'command' value = 'add'> ";
echo " <br/><button class='big_btn'>Add</button></form>"; 
include 'page_end.html';
?>
