<?php
//create class
class EmployeeWages{
    //create static function to display welcome message
   static function welcomeMessage(){
       echo "....Welcome to employee wage problem...\n";
   }
   //create function to check employee attendance using rand()
   function empCheck(){
    $WagePerHour = 20;
    $fullDayHour = 8;
    $dailyWage =0;
    $ispresent = 1;
    $check =rand(0,1);
    if( $check==$ispresent){
        echo "Employee is present"." ";
        $dailyWage = $WagePerHour * $fullDayHour;
    }
    else{
        echo "Employee is absent";
    }
    echo " Its daily wage is :". $dailyWage;
}
}
EmployeeWages::welcomeMessage();//call static function through class
$emp=new EmployeeWages();//create object of class
$emp->empCheck();//call a method to calculate daily employee wage if it is present 
?>