<?php

namespace Db\Entity;

/**
 * Employee
 */
class Employee
{
    /**
     * @var \DateTime
     */
    private $birthDate;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var \DateTime
     */
    private $hireDate;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $departmentEmployee;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $departmentManager;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $salary;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $title;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departmentEmployee = new \Doctrine\Common\Collections\ArrayCollection();
        $this->departmentManager = new \Doctrine\Common\Collections\ArrayCollection();
        $this->salary = new \Doctrine\Common\Collections\ArrayCollection();
        $this->title = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set birthDate.
     *
     * @param \DateTime $birthDate
     *
     * @return Employee
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return Employee
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return Employee
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set gender.
     *
     * @param string $gender
     *
     * @return Employee
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set hireDate.
     *
     * @param \DateTime $hireDate
     *
     * @return Employee
     */
    public function setHireDate($hireDate)
    {
        $this->hireDate = $hireDate;

        return $this;
    }

    /**
     * Get hireDate.
     *
     * @return \DateTime
     */
    public function getHireDate()
    {
        return $this->hireDate;
    }

    /**
     * Set id.
     *
     * @param int $id
     *
     * @return Employee
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add departmentEmployee.
     *
     * @param \Db\Entity\DepartmentEmployee $departmentEmployee
     *
     * @return Employee
     */
    public function addDepartmentEmployee(\Db\Entity\DepartmentEmployee $departmentEmployee)
    {
        $this->departmentEmployee[] = $departmentEmployee;

        return $this;
    }

    /**
     * Remove departmentEmployee.
     *
     * @param \Db\Entity\DepartmentEmployee $departmentEmployee
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeDepartmentEmployee(\Db\Entity\DepartmentEmployee $departmentEmployee)
    {
        return $this->departmentEmployee->removeElement($departmentEmployee);
    }

    /**
     * Get departmentEmployee.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartmentEmployee()
    {
        return $this->departmentEmployee;
    }

    /**
     * Add departmentManager.
     *
     * @param \Db\Entity\DepartmentManager $departmentManager
     *
     * @return Employee
     */
    public function addDepartmentManager(\Db\Entity\DepartmentManager $departmentManager)
    {
        $this->departmentManager[] = $departmentManager;

        return $this;
    }

    /**
     * Remove departmentManager.
     *
     * @param \Db\Entity\DepartmentManager $departmentManager
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeDepartmentManager(\Db\Entity\DepartmentManager $departmentManager)
    {
        return $this->departmentManager->removeElement($departmentManager);
    }

    /**
     * Get departmentManager.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartmentManager()
    {
        return $this->departmentManager;
    }

    /**
     * Add salary.
     *
     * @param \Db\Entity\Salary $salary
     *
     * @return Employee
     */
    public function addSalary(\Db\Entity\Salary $salary)
    {
        $this->salary[] = $salary;

        return $this;
    }

    /**
     * Remove salary.
     *
     * @param \Db\Entity\Salary $salary
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSalary(\Db\Entity\Salary $salary)
    {
        return $this->salary->removeElement($salary);
    }

    /**
     * Get salary.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Add title.
     *
     * @param \Db\Entity\Title $title
     *
     * @return Employee
     */
    public function addTitle(\Db\Entity\Title $title)
    {
        $this->title[] = $title;

        return $this;
    }

    /**
     * Remove title.
     *
     * @param \Db\Entity\Title $title
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTitle(\Db\Entity\Title $title)
    {
        return $this->title->removeElement($title);
    }

    /**
     * Get title.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTitle()
    {
        return $this->title;
    }
}
