<?php
//create class
class EmployeeWages{
    public  $PART_TIME_HOUR = 4;
    public  $FULL_DAY_HOUR = 8;
    public $EMP_WAGE_PER_HOUR = 20;
    public $WORKING_DAYS = 20;
    public $MAX_HOURS = 100;
    public $FULL_TIME = 1;
    public  $PART_TIME = 2;

    private $workingDaysPerMonth;
    private $workingHoursPerMonth;
    private $wagePerHrs;
    function __construct($workingDaysPerMonth, $workingHoursPerMonth, $wagePerHrs)
    {
        $this->workingDaysPerMonth = $workingDaysPerMonth;
        $this->workingHoursPerMonth = $workingHoursPerMonth;
        $this->wagePerHrs = $wagePerHrs;
    }
    function get_workingDaysPerMonth()
    {
        return $this->workingDaysPerMonth;
    }
    function get_workingHoursPerMonth()
    {
        return $this->workingHoursPerMonth;
    }
    function get_wagePerHrs()
    {
        return $this->wagePerHrs;
    }
    
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
    case $this->FULL_TIME:
        echo "Employee is present"." \n";
        $dailyHour += $this->FULL_DAY_HOUR;
        break;
    
    case $this->PART_TIME:
        echo "Employee is present half day"." \n";
        $dailyHour += $this->PART_TIME_HOUR;  
        break;
    default:
        echo "Employee is absent"." \n";
        break;
    }
    $day++;
}
    $monthlyWage=$WAGE_PER_HR* $dailyHour;
    echo "Its monthly wage is:". $monthlyWage."\n";
    echo "Number of  total working days: $day \n";
    echo "Number of working hours:" . $dailyHour;
   }
  
   function addCompany(){
        $companyName = readline('Enter Name of Company: '.'\n');
        echo "Employee Wage Compute For:".   $companyName."\n";
        $WORKING_DAYS_PER_MONTH = readline('Enter Max Working Days Per Month: ');
        $WORKING_HOURS_PER_MONTH = readline('Enter Max Working Hours Per Month: ');
        $WAGE_PER_HR = readline('Enter Employee Wage Per Hour: ');
       // $this->empCheck($WORKING_DAYS_PER_MONTH, $WORKING_HOURS_PER_MONTH, $WAGE_PER_HR);/* pass working days,working hrs for month and wage per hrs to calculate monthly wages*/
       return new  EmployeeWages($WORKING_DAYS_PER_MONTH, $WORKING_HOURS_PER_MONTH, $WAGE_PER_HR); 

   }
}
EmployeeWages::welcomeMessage();//call static function through class

echo "Enter details to comupte monthly wages for first company \n";
$companyName = readline('Enter Name of Company: ');        
echo "Employee Wage Compute For:".   $companyName."\n";
$WORKING_DAYS_PER_MONTH = readline('Enter Max Working Days Per Month: ');
$WORKING_HOURS_PER_MONTH = readline('Enter Max Working Hours Per Month: ');
$WAGE_PER_HR = readline('Enter Employee Wage Per Hour: ');
$companyObj1 = new EmployeeWages($WORKING_DAYS_PER_MONTH, $WORKING_HOURS_PER_MONTH, $WAGE_PER_HR);
$companyObj1->empCheck($companyObj1->get_workingDaysPerMonth(),$companyObj1->get_workingHoursPerMonth(),$companyObj1->get_wagePerHrs());
echo "\n";

echo "Enter details to comupte monthly wages for second company \n";
$companyName = readline('Enter Name of Company: ');        
echo "Employee Wage Compute For:".   $companyName."\n";
$WORKING_DAYS_PER_MONTH = readline('Enter Max Working Days Per Month: ');
$WORKING_HOURS_PER_MONTH = readline('Enter Max Working Hours Per Month: ');
$WAGE_PER_HR = readline('Enter Employee Wage Per Hour: ');
$companyObj2 = new EmployeeWages($WORKING_DAYS_PER_MONTH, $WORKING_HOURS_PER_MONTH, $WAGE_PER_HR);
$companyObj2->empCheck($companyObj2->get_workingDaysPerMonth(),$companyObj2->get_workingHoursPerMonth(),$companyObj2->get_wagePerHrs());
?>