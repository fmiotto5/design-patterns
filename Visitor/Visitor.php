<?php

namespace Visitor;

interface Visitor {

    public function visitCompany(Company $company): string;
    public function visitDepartment(Department $department): string;
    public function visitEmployee(Employee $employee): string;

}