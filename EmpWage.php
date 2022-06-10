<?php

/*
  Employee Wage Program to find Employee Present or Not and Calculating Wages for a Month
  total working hours Using Class and Methods
*/
class EmployeeWages
{
    const wagePerHr = 20;
    const fullDayHr = 8;
    const partTimeHr = 4;
    const workDaysPerMonth = 20;
    const isFullTime = 1;
    const isPartTime = 2;
    const isAbsent = 0;
    const maxHrs = 100;
    public $wrkhrs = 0;

    //create static function to display welcome message
    static function welcomeMessage()
    {
        echo "....Welcome to employee wage problem...\n";
    }

    function empCheckAttendance()
    {
        $empCheck = rand(0, 2);
        switch ($empCheck) {
            case EmployeeWages::isFullTime:
                echo "Employee is present full time" . "\n";
                return EmployeeWages::fullDayHr;
                break;

            case EmployeeWages::isPartTime:
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
    function dailyWage($wagePerHr) {
    $this->wrkhrs = $this->empCheckAttendance();
    $dailyWage = $wagePerHr*$this->wrkhrs;
    echo "Total hours:".$this->wrkhrs ."\n";
    echo "Daily Wage:".$dailyWage ."\n";
    return $dailyWage;
}
  /* function to compute monthly 
wage of employee*/
function calculateMonthlyWage($workDaysPerMonth,$workHrsPerMonth,$wagePerHr) {
    $monthlyWage = 0;
    $day = 0;
    $totalWorkingHrs = 0;
    while($day<$workDaysPerMonth && $totalWorkingHrs <=$workHrsPerMonth) {
        $dailyWage = $this->dailyWage($wagePerHr);
        $monthlyWage+=$dailyWage;
        $totalWorkingHrs+=$this->wrkhrs;
        $day++;
    }
    echo "Total Working Hours:".$totalWorkingHrs ."\n";
    echo "Total Monthly Wage:".$monthlyWage;
}
/* function to add company and 
claculate monthly wage */
function addCompany() {
    $companyName = readline("Enter Company Name : ");
    echo "Employee wage for $companyName \n";
    $workDaysPerMonth = readline("Enter Working days per month:");
    $workHrsPerMonth = readline("Enter Working hours per month:");
    $wagePerHr = readline("Enter wage per hour:");
    $this->calculateMonthlyWage($workDaysPerMonth,$workHrsPerMonth,$wagePerHr);
    
    }
}

EmployeeWages::welcomeMessage();
$emp = new EmployeeWages();
$emp->addCompany();
?>
