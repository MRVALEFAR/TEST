<?php
include 'dbconnection.php';
include 'page_head.html';
 
if (!empty($_POST['login']))
  {
  $command = $_POST['login'];
      if (!empty($_POST['password']))
          {
          $command = $_POST['password'];
 
          echo "<form action='ExpertList.php' method='post' > ";
          echo " <br/><button class='menu_btn'>Expert</button></form>"; 
 
          echo "<form action='CriteriaList.php' method='post' > ";
          echo " <br/><button class='menu_btn'>Criteria</button></form>"; 
 
          echo "<form action='expObjectList.php' method='post' > ";
          echo " <br/><button class='menu_btn'>expObject</button></form>"; 
 
          echo "<form action='TaskList.php' method='post' > ";
          echo " <br/><button class='menu_btn'>Task</button></form>"; 
 
          echo "<form action='Creteria_expertList.php' method='post' > ";
          echo " <br/><button class='menu_btn'>Creteria_expert</button></form>"; 
 
          echo "<form action='DepartList.php' method='post' > ";
          echo " <br/><button class='menu_btn'>Depart</button></form>"; 
 
          echo "<form action='EmployeeList.php' method='post' > ";
          echo " <br/><button class='menu_btn'>Employee</button></form>"; 
 
          }
  }
include 'page_end.html';
?>
