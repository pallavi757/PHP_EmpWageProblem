<?php
//create class
class EmployeeWages{
    const PART_TIME_HOUR = 4;
    const FULL_DAY_HOUR = 8;
    const EMP_WAGE_PER_HOUR = 20;
    const FULL_TIME = 1;
    const PART_TIME = 2;
    //create static function to display welcome message
   static function welcomeMessage(){
       echo "....Welcome to employee wage problem...\n";
   }
   //create function to check employee attendance using rand()
   function empCheck(){
    $dailyHour = 0;
    $check =rand(0,2);
    if( $check==EmployeeWages::FULL_TIME){
        echo "Employee is present"." ";
        $dailyHour = EmployeeWages::FULL_DAY_HOUR;
    }
    elseif($check==EmployeeWages::PART_TIME){
        echo "Employee is present half day"." ";
        $dailyHour = EmployeeWages::PART_TIME_HOUR;  

    }
    else{
        echo "Employee is absent";
    }
    $dailyWage=EmployeeWages::EMP_WAGE_PER_HOUR* $dailyHour;
    echo " Its daily wage is :". $dailyWage;
}
}
EmployeeWages::welcomeMessage();//call static function through class
$emp=new EmployeeWages();//create object of class
$emp->empCheck();//call a method to calculate daily employee wage if it is present 
?>