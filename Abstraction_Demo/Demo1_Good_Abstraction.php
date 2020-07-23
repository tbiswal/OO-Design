<?php

class Employee
{
    // private data
    private string $name;
    private string $address;
    private string $workPhone;
    private string $homePhone;
    private int $taxIdNumber;
    private string $jobClassification;

    //public routines
    public function getName(): string{}
    public function getAddress(): string{}
    public function getWorkPhone(): string{}
    public function getHomePhone(): string{}
    public function getTaxIdNumber(): int{}
    public function getJobClassification(): string{}
}