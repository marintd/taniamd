<?php
// NACHALO SET1.PHP - TITLE 912 - MODIFIED again
// NACHALNO SYSTOIANIE
// COMMIT MESSAGE 912
class Employee
{
var $name;
function __set($propName, $propValue)
{
echo "Nonexistent variable: \$$propName!";
}
}
$employee = new Employee ();
$employee->name = "Mario";
$employee->title = "Executive Chef";

?>
