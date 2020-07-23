<?php

class EmployeeCensus
{
    private ListContainer $employeeList;

    //public routines
    public function addEmployee(Employee $employee): void {}
    public function removeEmployee(Employee $employee): void {}
    public function nextEmployee(): Employee {}
    public function firstEmployee(): Employee {}
    public function lastEmployee(): Employee {}

}