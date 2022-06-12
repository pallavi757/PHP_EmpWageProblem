<?php

/*
   Program for Employee Wage Add Multiple Companies Using Instance Variable instead of function Parameters
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
    public $wagePerHr;
    public $workDaysPerMonth;
    public $workHrsPerMonth;
    

    //create static function to display welcome message
    static function welcomeMessage()
    {
        echo "....Welcome to employee wage problem...\n";
    }

    public function __construct($wage,$days,$hours) {
        $this->wagePerHr = $wage;
        $this->workDaysPerMonth = $days;
        $this->workHrsPerMonth = $hours;
    }

    function empCheckAttendance()
    {
        $empCheck = rand(0, 2);
        switch ($empCheck) {
            case EmployeeWages::isFullTime:
                echo "Employee is present full time"."\n";
                return EmployeeWages::fullDayHr;
                break;

            case EmployeeWages::isPartTime:
                echo "Employee is half day present"."\n";
                return EmployeeWages::partTimeHr;
                break;
            default:
                echo "Employee is Absent"."\n";
                return 0;
                break;
        }
    }

    /* Refactor function to compute daily 
wage of employee*/
    function dailyWage() {
        $this->wrkhrs = $this->empCheckAttendance();
        $dailyWage = $this->wagePerHr*$this->wrkhrs;
        echo "Total hours:".$this->wrkhrs ."\n";
        echo "Daily Wage:".$dailyWage ."\n";
        return $dailyWage;
}
  /* Refactor function to compute monthly 
wage of employee*/
function calculateMonthlyWage() {
    $monthlyWage = 0;
    $day = 0;
    $totalWorkingHrs = 0;
    while($day<$this->workDaysPerMonth && $totalWorkingHrs<$this->workHrsPerMonth){
        $dailyWage = $this->dailyWage();
        $monthlyWage+=$dailyWage;
        $totalWorkingHrs+=$this->wrkhrs;
        $day++;
    }
    echo "Total Working Hours:".$totalWorkingHrs ."\n";
    echo "Total Monthly Wage:".$monthlyWage;
}
/* function to add company and 
calaculate monthly wage */
function addCompany() {
    $companyName = readline("Enter Company Name : ");
    echo "Employee wage for $companyName \n";
    $this->calculateMonthlyWage();
    
    }
}

EmployeeWages::welcomeMessage();
// $emp = new EmployeeWages();
// $emp->addCompany();
$comObj1=new EmployeeWages(30,30,130);
//$comObj1->addCompany();
$comObj2=new EmployeeWages(20,20,100);
//$comObj2->addCompany();
$empwageArray=array($comObj1,$comObj2);
foreach($empwageArray as $details){
    $details->addCompany();  
}

?>
