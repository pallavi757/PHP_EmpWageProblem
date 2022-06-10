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
    function dailyWage()
    {
        $this->wrkhrs = $this->empCheckAttendance();
        $dailyWage = EmployeeWages::wagePerHr * $this->wrkhrs;
        echo "Total hours:" . $this->wrkhrs . "\n";
        echo "Daily Wage:" . $dailyWage . "\n";
        return $dailyWage;
    }
  /* function to compute monthly 
wage of employee*/
    function calculateMonthlyWage()
    {
        $monthlyWage = 0;
        $day = 0;
        $totalWorkingHrs = 0;
        while ($day < EmployeeWages::workDaysPerMonth && $totalWorkingHrs <= EmployeeWages::maxHrs) {
            $dailyWage = $this->dailyWage();
            $monthlyWage += $dailyWage;
            $totalWorkingHrs += $this->wrkhrs;
            $day++;
        }
        echo "Total Working Hours:" . $totalWorkingHrs . "\n";
        echo "Total Monthly Wage:" . $monthlyWage;
    }
}

EmployeeWages::welcomeMessage();
$emp = new EmployeeWages();
$emp->calculateMonthlyWage();
?>