<?php

  namespace AppBundle\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Doctrine\ORM\Mapping\Index;

  /**
  * Class InvoiceRows
  *@package AppBundle\Entity
  *@ORM\Entity
  *@ORM\Table(name="invoice_rows")
  */

  class InvoiceRows
  {
    /**
    *@ORM\Column(type="integer",name="id")
    *@ORM\Id
    *@ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
    *@ORM\OneToOne(targetEntity="Invoice")
    *@ORM\JoinColumn(name="invoiceId", referencedColumnName="id",onDelete="CASCADE")
    */
    protected $invoiceId;

    /**
    *@ORM\Column(type="text")
    */
    protected $description;

    /**
    *@ORM\Column(type="integer")
    */
    protected $quantity;

    /**
    *@ORM\Column(type="decimal", precision=12, scale=2)
    */
    protected $amount;

    /**
    *@ORM\Column(type="decimal", precision=12, scale=2)
    */
    protected $amountIva;

    /**
    *@ORM\Column(type="decimal", precision=12, scale=2)
    */
    protected $TotAmountIva;

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
    public function getInvoiceId()
    {
      return $this->invoiceId;
    }

    /**
    *@param mixed $invoiceId
    *
    *@return self
    */
    public function setInvoiceId($invoiceId)
    {
      $this-> invoiceId = $invoiceId;

      return $this;
    }

    /**
    *@return mixed
    */
    public function getDescription()
    {
      return $this->description;
    }

    /**
    *@param mixed $description
    *
    *@return self
    */
    public function setDescription($description)
    {
      $this-> description = $description;

      return $this;
    }

    /**
    *@return mixed
    */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
    *@param mixed $quantity
    *
    *@return self
    */
    public function setQuantity($quantity)
    {
      $this-> quantity = $quantity;

      return $this;
    }


    /**
    *@return mixed
    */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
    *@param mixed $amount
    *
    *@return self
    */
    public function setAmount($amount)
    {
      $this-> amount = $amount;

      return $this;
    }

    /**
    *@return mixed
    */
    public function getAmountIva()
    {
      return $this->$amountIva;
    }

    /**
    *@param mixed $amountIva
    *
    *@return self
    */
    public function setAmountIva($amountIva)
    {
      $this-> $amountIva = $amountIva;

      return $this;
    }

    /**
    *@return mixed
    */
    public function getTotAmountIva()
    {
      return $this->TotAmountIva;
    }

    /**
    *@param mixed $TotAmountIva
    *
    *@return self
    */
    public function setTotAmountIva($TotAmountIva)
    {
      $this-> TotAmountIva = $TotAmountIva;

      return $this;
    }
  }
