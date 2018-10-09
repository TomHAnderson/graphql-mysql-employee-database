<?php

namespace Db\Entity;

/**
 * Title
 */
class Title
{
    /**
     * @var \DateTime|null
     */
    private $toDate;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \DateTime
     */
    private $fromDate;

    /**
     * @var \Db\Entity\Employee
     */
    private $employee;


    /**
     * Set toDate.
     *
     * @param \DateTime|null $toDate
     *
     * @return Title
     */
    public function setToDate($toDate = null)
    {
        $this->toDate = $toDate;

        return $this;
    }

    /**
     * Get toDate.
     *
     * @return \DateTime|null
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Title
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set fromDate.
     *
     * @param \DateTime $fromDate
     *
     * @return Title
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
     * @return Title
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
