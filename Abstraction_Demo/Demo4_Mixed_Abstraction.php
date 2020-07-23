<?php

class EmployeeCensus extends ListContainer
{
    //public routines
    public function addEmployee(Employee $employee): void {}
    public function removeEmployee(Employee $employee): void {}

    public function nextItemInList(): Employee{}
    public function firstItem(): Employee{}
    public function lastItem(): Employee{}

    //private routines
}