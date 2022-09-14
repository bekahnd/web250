<?php
class Employee {
  public $firstName;
  public $lastName;
  public $empNumber;
  private $department;
  public $salary = 0;

  public function getInfo() {
    return "Employee number " . $this->empNumber . ", " . $this->firstName . " " . $this->lastName . ", works in the " . $this->department . " department. Their base salary is $" . $this->salary . " .<br>";
    }

  public function setDepartment($value) {
    $this->department = $value;
  }

  public function get_department() {
    return $this->department;
  }

}

class CustomerService extends Employee {
  public $storeNumber;
  public $salary = 30000;

  function storePlacement() {
    return "Employee " . $this->empNumber . "is placed at store number " . $this->storeNumber . ".";
  }
}

class Marketing extends Employee {
  public $mktBonus;
  public $travelBonus;
  public $salary = 50000;

  public function calculateSalary() {
    $totalSalary = $this->salary + $this->mktBonus + $this->travelBonus;

    return "Total Salary for " . $this->firstName . " " . $this->lastName . " is: " . $totalSalary;
  }
}

$emp1 = new Employee;
$emp1->firstName = 'Stacy';
$emp1->lastName = 'Trumbal';
$emp1->empNumber = '146278';
//$emp1->department = 'Management Intern';
$emp1->setDepartment("Management Intern");
echo $emp1->get_department() . "<br>";

$emp2 = new CustomerService;
$emp2->firstName = 'Jerome';
$emp2->lastName = 'Macer';
$emp2->empNumber = '856324';
//$emp2->department = 'Customer Service';
$emp2->storeNumber = '264';

$emp2->setDepartment("Customer Service");
echo $emp2->get_department() . "<br>";

$emp3 = new Marketing;
$emp3->firstName = 'Elizabeth';
$emp3->lastName = 'Jones';
$emp3->empNumber = '651248';
//$emp3->department = 'Marketing';
$emp3->mktBonus = 500;
$emp3->travelBonus = 200;

$emp3->setDepartment("Marketing");
echo $emp3->get_department() . "<br>";

echo get_parent_class($emp1) . '<br>';
echo get_parent_class($emp2) . '<br>';
echo get_parent_class($emp3) . '<br>';

if(is_subclass_of($emp1, 'Employee')) {
  echo "Instance is a subclass of Employee.<br>";
} else {
  echo "Instance is not a subclass of Employee.<br>";
}

if(is_subclass_of($emp2, 'Employee')) {
  echo "Instance is a subclass of Employee.<br>";
}

if(is_subclass_of($emp3, 'Employee')) {
  echo "Instance is a subclass of Employee.<br>";
}

echo $emp1->getInfo() . '<br>';
echo $emp2->getInfo() . '<br>';
echo $emp3->getInfo() . '<br>';

echo $emp2->storePlacement() . '<br>';
//echo $emp3->storePlacement() . '<br>'; Marketing employees do not have this function.

echo $emp3->calculateSalary() . '<br>';
//echo $emp2->calculateSalary() . '<br>'; Customer Service employees do not have this function
?>
