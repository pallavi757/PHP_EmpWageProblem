<?php
//create class
class EmployeeWages{
    //create static function to display welcome message
   static function welcomeMessage(){
       echo "....Welcome to employee wage problem...\n";
   }
   //create function to check employee attendance using rand()
   function empCheck(){
    $ispresent = 1;
    $check =rand(0,1);
    if( $check==$ispresent){
        echo "Employee is present";
    }
    else{
        echo "Employee is Absent";
    }
}
}
EmployeeWages::welcomeMessage();//call static function through class
$emp=new EmployeeWages();//create object of class
$emp->empCheck();//call a method to check employee is present or absent
?>