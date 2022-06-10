<?php
class EmployeeWages{

 //create static function to display welcome message
   static function welcomeMessage(){
       echo "....Welcome to employee wage problem...\n";
   }
   //Function to Check Employee is Present or Absent
   function empCheckAttendence() {
    $empCheck = rand(0,1);
    if($empCheck == 1) {
        echo "Employee is Present";
    }
    else {
        echo "Employee is absent";
    }

}
}
EmployeeWages::welcomeMessage();
$emp = new EmployeeWages();
$emp->empCheckAttendence();
?>