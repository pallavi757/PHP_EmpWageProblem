<?php
class EmployeeWages{
    const wagePerHr = 20;
    const fullDayHr = 8;
    const partTimeHr = 4;
/* function to compute daily 
wage of employee*/
static function dailyWage($wagePerHr,$hour) {
    $dailyWage = $wagePerHr*$hour;
    return $dailyWage;
}

static function empCheckAttendance() {
    $empCheck = rand(0,2);
    if($empCheck == 1) {
        echo "Employee is present full time" ."\n";
        $dailyWage= EmployeeWages::dailyWage(EmployeeWages::wagePerHr,EmployeeWages::fullDayHr);
        echo"Daily wage of full time employee is:".$dailyWage;
    }
    elseif($empCheck == 2) {
        echo "Employee is half day present" ."\n";
        $PartWage = EmployeeWages::dailyWage(EmployeeWages::wagePerHr,EmployeeWages::partTimeHr);
        echo "Daily Wage of Part time employee:".$PartWage;
    }
    else {
        echo "Employee is Absent";
    }

   }
}

//EmployeeWages::welcomeMessage();
EmployeeWages::empCheckAttendance();
?>