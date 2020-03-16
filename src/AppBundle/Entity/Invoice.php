<?php

  namespace AppBundle\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Doctrine\ORM\Mapping\Index;

  /**
  * Class Invoice
  *@package AppBundle\Entity
  *@ORM\Entity
  *@ORM\Table(name="invoice")
  */

  class Invoice
  {
    /**
    *@ORM\Column(type="integer",name="id")
    *@ORM\Id
    *@ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;


    /**
    *@ORM\Column(type="date")
    */
    protected $date_invoice;

    /**
    *@ORM\Column(type="integer")
    */
    protected $num_invoice;

    /**
    *@ORM\Column(type="integer")
    */
    protected $id_customer;

    /**
    *@return mixed
    */
    public function getId()
    {
      return $this->id;
    }

    /**
    *@return mixed
    */
    public function getDateInvoice()
    {
      return $this->date_invoice;
    }

    /**
    *@param mixed $date_invoice
    *
    *@return self
    */
    public function setDateInvoice($date_invoice)
    {
      $this-> date_invoice = $date_invoice;

      return $this;
    }

    /**
    *@return mixed
    */
    public function getNumInvoice()
    {
      return $this->num_invoice;
    }

    /**
    *@param mixed $num_invoice
    *
    *@return self
    */
    public function setNumInvoice($num_invoice)
    {
      $this-> num_invoice = $num_invoice;

      return $this;
    }

    /**
    *@return mixed
    */
    public function getIdCustomer()
    {
      return $this->id_customer;
    }

    /**
    *@param mixed $id_customer
    *
    *@return self
    */
    public function setIdCustomer($id_customer)
    {
      $this-> id_customer = $id_customer;

      return $this;
    }
  }
