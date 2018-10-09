<?php

namespace Db\Entity;

/**
 * Department
 */
class Department
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
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
     * Constructor
     */
    public function __construct()
    {
        $this->departmentEmployee = new \Doctrine\Common\Collections\ArrayCollection();
        $this->departmentManager = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Department
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set id.
     *
     * @param string $id
     *
     * @return Department
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id.
     *
     * @return string
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
     * @return Department
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
     * @return Department
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
}
