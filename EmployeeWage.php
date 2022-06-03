<?php
//create class
class EmployeeWages{
    const PART_TIME_HOUR = 4;
    const FULL_DAY_HOUR = 8;
    const EMP_WAGE_PER_HOUR = 20;
    const WORKING_DAYS = 20;
    const MAX_HOURS = 100;
    const FULL_TIME = 1;
    const PART_TIME = 2;
    //create static function to display welcome message
   static function welcomeMessage(){
       echo "....Welcome to employee wage problem...\n";
   }
   //create function to check employee attendance using rand()
   function empCheck(){
    $dailyHour = 0;
    //UC5-use for loop to till that working days
   // for($day=0;$day<= EmployeeWages::WORKING_DAYS;$day++){
   //UC6-Use while to check number of working days and maximmum working hours
    $day = 0;
    while($day< EmployeeWages::WORKING_DAYS && $dailyHour <= EmployeeWages::MAX_HOURS){
    $check =rand(0,2);
    switch($check){
    case EmployeeWages::FULL_TIME:
        echo "Employee is present"." \n";
        $dailyHour += EmployeeWages::FULL_DAY_HOUR;
        break;
    
    case EmployeeWages::PART_TIME:
        echo "Employee is present half day"." \n";
        $dailyHour += EmployeeWages::PART_TIME_HOUR;  
        break;
    default:
        echo "Employee is absent"." \n";
        break;
    }
    $day++;
}
    $monthlyWage=EmployeeWages::EMP_WAGE_PER_HOUR* $dailyHour;
    echo " Its monthly wage is:". $monthlyWage."\n";
    echo " Number of  total working days: $day \n";
    echo " Number of working hours: $dailyHour";
   }
}
EmployeeWages::welcomeMessage();//call static function through class
$emp=new EmployeeWages();//create object of class
$emp->empCheck();//call a method to calculate daily employee wage if it is present 
?>