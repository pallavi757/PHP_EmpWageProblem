<?php
class MultiCompanies {
    public function cList() {
        $nameArray = array(); //Use array for storing company name
        $wageArray = array(); //Use array for storing company wages
        $n = readline("Enter the company name you want:");
        for($i = 0;$i<$n;$i++) { //use loop for details about company
            $nameArray[$i] = readline("Enter the Name of Company:");
            $wage = readline("Enter employee wage per hour:");
            $days = readline("Enter maximum working days per month:");
            $hour = readline("Enter maximum working hours per month:");
            echo "Employee Wage for $nameArray[$i] \n";
            $employeeWages = new EmployeeWages($nameArray,$wage,$days,$hour);
            $wageArray[$i] =  $employeeWages->calculateMonthlyWage();
        
        }
        for($i = 0;$i<$n;$i++) { // use loop used for save company name and its total wage
            echo "Name of Company:".$nameArray[$i]."\n";
            echo "Total Wages:".$wageArray[$i]."\n";
        }
    
    }


}
?>