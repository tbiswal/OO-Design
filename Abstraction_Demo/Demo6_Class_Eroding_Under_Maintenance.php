<?php

class Employee
{
    //public routines
    public function getName(): string{}
    public function getAddress(): string{}
    public function getWorkPhone(): string{}

    public function isJobClassificationValid(JobClassification $jobClass): bool {}
    public function isZipCodeValid(): bool{}
    public function isPhoneNumberValid(): bool{}

    public function getQueryToCreateNewEmployee(): string {}
    public function getQueryToModifyEmployee(): string {}
    public function getQueryToRetrieveEmployee(): string {}
}