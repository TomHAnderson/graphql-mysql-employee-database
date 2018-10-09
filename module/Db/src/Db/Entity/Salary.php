<?php

namespace Db\Entity;

/**
 * Salary
 */
class Salary
{
    /**
     * @var int
     */
    private $salary;

    /**
     * @var \DateTime
     */
    private $toDate;

    /**
     * @var \DateTime
     */
    private $fromDate;

    /**
     * @var \Db\Entity\Employee
     */
    private $employee;


    /**
     * Set salary.
     *
     * @param int $salary
     *
     * @return Salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary.
     *
     * @return int
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set toDate.
     *
     * @param \DateTime $toDate
     *
     * @return Salary
     */
    public function setToDate($toDate)
    {
        $this->toDate = $toDate;

        return $this;
    }

    /**
     * Get toDate.
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * Set fromDate.
     *
     * @param \DateTime $fromDate
     *
     * @return Salary
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    /**
     * Get fromDate.
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * Set employee.
     *
     * @param \Db\Entity\Employee $employee
     *
     * @return Salary
     */
    public function setEmployee(\Db\Entity\Employee $employee)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee.
     *
     * @return \Db\Entity\Employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }
}
