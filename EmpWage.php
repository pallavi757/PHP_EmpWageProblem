<?php
class EmployeeWages{
    const wagePerHr = 20;
    const fullDayHr = 8;
    const partTimeHr = 4;
    const workDaysPerMonth = 20;
    const isFullTime = 1;
    const isPartTime = 2;
    const isAbsent = 0;

    //create static function to display welcome message
   static function welcomeMessage(){
    echo "....Welcome to employee wage problem...\n";
}

 function empCheckAttendance() {
    $empCheck = rand(0, 2);
        switch ($empCheck) {
            case EmployeeWages::isFullTime :
                echo "Employee is present full time" . "\n";
                return EmployeeWages::fullDayHr;
                break;
            
            case EmployeeWages::isPartTime : 
                echo "Employee is half day present" . "\n";
                return EmployeeWages::partTimeHr;
                break;
            default:
                echo "Employee is Absent";
                return 0;
                break;
        }
    }

    /* function to compute daily 
wage of employee*/
 function dailyWage() {
    $totalHours = $this->empCheckAttendance();
    $dailyWage = EmployeeWages::wagePerHr*$totalHours;
    echo "Total hours:".$totalHours ."\n";
    echo "Daily Wage:".$dailyWage ."\n";
    return $dailyWage;
}

function calculateMonthlyWage() {
    $monthlyWage = 0;
    for($day = 1;$day<=EmployeeWages::workDaysPerMonth;$day++) {
        $dailyWage = $this->dailyWage();
        $monthlyWage+=$dailyWage;
    }
    echo "Total Monthly Wage:".$monthlyWage;

}
}

EmployeeWages::welcomeMessage();
$emp = new EmployeeWages();
$emp->calculateMonthlyWage();
//$emp ->empCheckAttendance();
?>