<?php


namespace asdfklgash\IngenicoMarketplaceAPI\Objects;


class Movement
{

    private $_wallet_id = null;
    private $_counterpart_wallet_id = null;
    private $_transaction_id = null;
    private $_amount = null;
    private $_currency = null;
    private $_operation = null;
    private $_transaction_type = null;
    private $_reference = null;
    private $_communication = null;
    private $_created = null;

    /*
{
   "wallet": 321000486463,
   "counterpartWallet": 321000484645,
   "transactionId": 7745262,
   "amount": 1.5,
   "currency": "EUR",
   "operation": "credit",
   "transactionType": "bankfunding",
   "reference": "XX11XXM11XX1XAQZ",
   "communication": "First bankfunding",
   "created": "2017-01-31 17:12:23"
},
  */



    /**
     * @return null
     */
    public function getWalletId()
    {
        return $this->_wallet_id;
    }

    /**
     * @param null $wallet_id
     */
    public function setWalletId( $wallet_id ): void
    {
        $this->_wallet_id = $wallet_id;
    }

    /**
     * @return null
     */
    public function getCounterpartWalletId()
    {
        return $this->_counterpart_wallet_id;
    }

    /**
     * @param null $counterpart_wallet_id
     */
    public function setCounterpartWalletId( $counterpart_wallet_id ): void
    {
        $this->_counterpart_wallet_id = $counterpart_wallet_id;
    }

    /**
     * @return null
     */
    public function getTransactionId()
    {
        return $this->_transaction_id;
    }

    /**
     * @param null $transaction_id
     */
    public function setTransactionId( $transaction_id ): void
    {
        $this->_transaction_id = $transaction_id;
    }

    /**
     * @return null
     */
    public function getAmount()
    {
        return $this->_amount;
    }

    /**
     * @param null $amount
     */
    public function setAmount( $amount ): void
    {
        $this->_amount = $amount;
    }

    /**
     * @return null
     */
    public function getCurrency()
    {
        return $this->_currency;
    }

    /**
     * @param null $currency
     */
    public function setCurrency( $currency ): void
    {
        $this->_currency = $currency;
    }

    /**
     * @return null
     */
    public function getOperation()
    {
        return $this->_operation;
    }

    /**
     * @param null $operation
     */
    public function setOperation( $operation ): void
    {
        $this->_operation = $operation;
    }

    /**
     * @return null
     */
    public function getTransactionType()
    {
        return $this->_transaction_type;
    }

    /**
     * @param null $transaction_type
     */
    public function setTransactionType( $transaction_type ): void
    {
        $this->_transaction_type = $transaction_type;
    }

    /**
     * @return null
     */
    public function getReference()
    {
        return $this->_reference;
    }

    /**
     * @param null $reference
     */
    public function setReference( $reference ): void
    {
        $this->_reference = $reference;
    }

    /**
     * @return null
     */
    public function getCommunication()
    {
        return $this->_communication;
    }

    /**
     * @param null $communication
     */
    public function setCommunication( $communication ): void
    {
        $this->_communication = $communication;
    }

    /**
     * @return null
     */
    public function getCreated()
    {
        return $this->_created;
    }

    /**
     * @param null $created
     */
    public function setCreated( $created ): void
    {
        $this->_created = $created;
    }

}