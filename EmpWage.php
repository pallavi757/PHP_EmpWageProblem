<?php
class EmployeeWages{
    const wagePerHr = 20;
    const fullDayHr = 8;
    const partTimeHr = 4;

    //create static function to display welcome message
   static function welcomeMessage(){
    echo "....Welcome to employee wage problem...\n";
}

/* function to compute daily 
wage of employee*/
static function dailyWage($wagePerHr,$hour) {
    $dailyWage = $wagePerHr*$hour;
    return $dailyWage;
}

 function empCheckAttendance() {
    $empCheck = rand(0, 2);
    switch ($empCheck) {
        case 1:
            echo "Employee is present full time"."\n";
            $dailyWage = EmployeeWages::dailyWage(EmployeeWages::wagePerHr,EmployeeWages::fullDayHr);
            echo "Daily Wage of Full time Employee:" . $dailyWage;
            break;
        case 2:
            echo "Employee is half day present"  ."\n";
            $partTimeWage = EmployeeWages::dailyWage(EmployeeWages::wagePerHr,EmployeeWages::partTimeHr);
            echo "Daily Wage of Part time Presnt:" . $partTimeWage;
            break;
        default:
            echo "Employee is Absent";
    }
}
}

EmployeeWages::welcomeMessage();
$emp = new EmployeeWages();
$emp ->empCheckAttendance();
?>