<?php
class EmployeeWages{
    const wagePerHr = 20;
    const fullDayHr = 8;
 //create static function to display welcome message
   static function welcomeMessage(){
       echo "....Welcome to employee wage problem...\n";
   }

/* function to compute daily 
wage of employee*/
 function dailyWage() {
        $empCheck = rand(0,1);
        if($empCheck == 1) {
            echo " Employee is Present" ."\n";
            $dailyWage = EmployeeWages::wagePerHr * EmployeeWages::fullDayHr;
            echo " Daily Wage of Employee:".$dailyWage;
        }
        else {
            echo "Employee is absent";
        }

    }
}

EmployeeWages::welcomeMessage();
$emp = new EmployeeWages();
$emp->dailyWage();
?>