<?php
//create class
class EmployeeWages{
    const PART_TIME_HOUR = 4;
    const FULL_DAY_HOUR = 8;
   // const EMP_WAGE_PER_HOUR = 20;
   // const WORKING_DAYS = 20;
   // const MAX_HOURS = 100;
    const FULL_TIME = 1;
    const PART_TIME = 2;
    //create static function to display welcome message
   static function welcomeMessage(){
       echo "....Welcome to employee wage problem...\n";
   }
   //create paramerized funcntion
   function empCheck($WORKING_DAYS_PER_MONTH, $WORKING_HOURS_PER_MONTH, $WAGE_PER_HR){
    $dailyHour = 0;
    //UC5-use for loop to till that working days
   // for($day=0;$day<= EmployeeWages::WORKING_DAYS;$day++){
   //UC6-Use while to check number of working days and maximmum working hours
    $day = 0;
    while($day< $WORKING_DAYS_PER_MONTH && $dailyHour <= $WORKING_HOURS_PER_MONTH){
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
    $monthlyWage=$WAGE_PER_HR* $dailyHour;
    echo " Its monthly wage is:". $monthlyWage."\n";
    echo " Number of  total working days: $day \n";
    echo " Number of working hours: $dailyHour";
   }
   //UC8-Compute wages for multiple companies
   function addCompany(){
    $companyName = readline('Enter Name of Company: ');
        echo "Employee Wage Compute For:".   $companyName."\n";
        $WORKING_DAYS_PER_MONTH = readline('Enter Max Working Days Per Month: ');
        $WORKING_HOURS_PER_MONTH = readline('Enter Max Working Hours Per Month: ');
        $WAGE_PER_HR = readline('Enter Employee Wage Per Hour: ');
        $this->empCheck($WORKING_DAYS_PER_MONTH, $WORKING_HOURS_PER_MONTH, $WAGE_PER_HR);/* pass working days,working hrs for month and wage per hrs to calculate monthly wages*/

   }
}
 EmployeeWages::welcomeMessage();//call static function through class
$companyObj1=new EmployeeWages();//create object for calculate wages for first company 
echo $companyObj1->addCompany();
echo "\n";
$companyObj2=new EmployeeWages();//create object for calculate wages for second company
echo $companyObj2->addCompany();
?>