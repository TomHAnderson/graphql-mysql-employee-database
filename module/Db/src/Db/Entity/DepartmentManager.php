<?php

namespace Db\Entity;

/**
 * DepartmentManager
 */
class DepartmentManager
{
    /**
     * @var \DateTime
     */
    private $fromDate;

    /**
     * @var \DateTime
     */
    private $toDate;

    /**
     * @var \Db\Entity\Employee
     */
    private $employee;

    /**
     * @var \Db\Entity\Department
     */
    private $department;


    /**
     * Set fromDate.
     *
     * @param \DateTime $fromDate
     *
     * @return DepartmentManager
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
     * Set toDate.
     *
     * @param \DateTime $toDate
     *
     * @return DepartmentManager
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
     * Set employee.
     *
     * @param \Db\Entity\Employee $employee
     *
     * @return DepartmentManager
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

    /**
     * Set department.
     *
     * @param \Db\Entity\Department $department
     *
     * @return DepartmentManager
     */
    public function setDepartment(\Db\Entity\Department $department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department.
     *
     * @return \Db\Entity\Department
     */
    public function getDepartment()
    {
        return $this->department;
    }
}
