<?php
include 'IEmployee.php';
include 'CompanyList.php';
/*
   Employee Wage Program for Multiple Companies Using Interface
*/
class EmployeeWages implements Employee
{

    const fullDayHr = 8;
    const partTimeHr = 4;
    const isFullTime = 1;
    const isPartTime = 2;
    const isAbsent = 0;
    public $companyName;
    public $wrkhrs = 0;
    public $wagePerHr;
    public $workDaysPerMonth;
    public $workHrsPerMonth;
    
    //create static function to display welcome message
    static function welcomeMessage()
    {
        echo "....Welcome to employee wage problem...\n";
    }

    public function __construct($companyName,$wage,$days,$hours) {
        $this->companyName = $companyName;
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
    echo "\nTotal Working Hours:".$totalWorkingHrs ;
    echo "\nTotal Monthly Wage:".$monthlyWage;
    echo "\n";
    echo"_____________________________________________.\n";
    return $monthlyWage;
}
/* function to add company and 
calaculate monthly wage */
// function addCompany() {
//     $companyName = readline("Enter Company Name : ");
//     echo "Employee wage for $companyName \n";
//     $this->calculateMonthlyWage();
    
//     }
 }

//EmployeeWages::welcomeMessage();
$multicompany=new MultiCompanies();
$multicompany->cList();
// $comObj1=new EmployeeWages(30,30,130);
// $comObj2=new EmployeeWages(20,20,100);
// $empwageArray=array($comObj1,$comObj2);
// foreach($empwageArray as $details){
//      $details->addCompany();  
// }
?>
