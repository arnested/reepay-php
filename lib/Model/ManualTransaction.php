<?php
/**
 * ManualTransaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * ManualTransaction Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManualTransaction implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'state' => 'string',
        'invoice' => 'string',
        'type' => 'string',
        'amount' => 'int',
        'settled' => '\DateTime',
        'failed' => '\DateTime',
        'refunded' => '\DateTime',
        'created' => '\DateTime',
        'method' => 'string',
        'comment' => 'string',
        'reference' => 'string',
        'payment_date' => '\DateTime'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'state' => 'state',
        'invoice' => 'invoice',
        'type' => 'type',
        'amount' => 'amount',
        'settled' => 'settled',
        'failed' => 'failed',
        'refunded' => 'refunded',
        'created' => 'created',
        'method' => 'method',
        'comment' => 'comment',
        'reference' => 'reference',
        'payment_date' => 'payment_date'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'state' => 'setState',
        'invoice' => 'setInvoice',
        'type' => 'setType',
        'amount' => 'setAmount',
        'settled' => 'setSettled',
        'failed' => 'setFailed',
        'refunded' => 'setRefunded',
        'created' => 'setCreated',
        'method' => 'setMethod',
        'comment' => 'setComment',
        'reference' => 'setReference',
        'payment_date' => 'setPaymentDate'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'state' => 'getState',
        'invoice' => 'getInvoice',
        'type' => 'getType',
        'amount' => 'getAmount',
        'settled' => 'getSettled',
        'failed' => 'getFailed',
        'refunded' => 'getRefunded',
        'created' => 'getCreated',
        'method' => 'getMethod',
        'comment' => 'getComment',
        'reference' => 'getReference',
        'payment_date' => 'getPaymentDate'
    );
  
    
    /**
      * $id Transaction id assigned by Reepay
      * @var string
      */
    protected $id;
    
    /**
      * $state State of the transaction, one of the following: `pending`, `processing`, `settled`, `refunded`, `failed`, `cancelled`
      * @var string
      */
    protected $state;
    
    /**
      * $invoice Invoice id
      * @var string
      */
    protected $invoice;
    
    /**
      * $type Transaction type, one of the following: 'settle', 'refund'
      * @var string
      */
    protected $type;
    
    /**
      * $amount The transaction amount
      * @var int
      */
    protected $amount;
    
    /**
      * $settled When the transaction was settled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $settled;
    
    /**
      * $failed When the transaction failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $failed;
    
    /**
      * $refunded When the transaction was refunded, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $refunded;
    
    /**
      * $created Date when the transaction was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $created;
    
    /**
      * $method The method used for the offline manual transaction, allowable values: `cash`, `bank_transfer`, `check`, `chargeback`, `other`
      * @var string
      */
    protected $method;
    
    /**
      * $comment Optional comment for manual transaction
      * @var string
      */
    protected $comment;
    
    /**
      * $reference Optional reference for the manual transaction
      * @var string
      */
    protected $reference;
    
    /**
      * $payment_date When the manual transaction was performed on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss`
      * @var \DateTime
      */
    protected $payment_date;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->state = $data["state"];
            $this->invoice = $data["invoice"];
            $this->type = $data["type"];
            $this->amount = $data["amount"];
            $this->settled = $data["settled"];
            $this->failed = $data["failed"];
            $this->refunded = $data["refunded"];
            $this->created = $data["created"];
            $this->method = $data["method"];
            $this->comment = $data["comment"];
            $this->reference = $data["reference"];
            $this->payment_date = $data["payment_date"];
        }
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id Transaction id assigned by Reepay
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
  
    /**
     * Sets state
     * @param string $state State of the transaction, one of the following: `pending`, `processing`, `settled`, `refunded`, `failed`, `cancelled`
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array("pending", "processing", "settled", "refunded", "failed", "cancelled");
        if (!in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'pending', 'processing', 'settled', 'refunded', 'failed', 'cancelled'");
        }
        $this->state = $state;
        return $this;
    }
    
    /**
     * Gets invoice
     * @return string
     */
    public function getInvoice()
    {
        return $this->invoice;
    }
  
    /**
     * Sets invoice
     * @param string $invoice Invoice id
     * @return $this
     */
    public function setInvoice($invoice)
    {
        
        $this->invoice = $invoice;
        return $this;
    }
    
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type Transaction type, one of the following: 'settle', 'refund'
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array("settle", "refund");
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'settle', 'refund'");
        }
        $this->type = $type;
        return $this;
    }
    
    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }
  
    /**
     * Sets amount
     * @param int $amount The transaction amount
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets settled
     * @return \DateTime
     */
    public function getSettled()
    {
        return $this->settled;
    }
  
    /**
     * Sets settled
     * @param \DateTime $settled When the transaction was settled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setSettled($settled)
    {
        
        $this->settled = $settled;
        return $this;
    }
    
    /**
     * Gets failed
     * @return \DateTime
     */
    public function getFailed()
    {
        return $this->failed;
    }
  
    /**
     * Sets failed
     * @param \DateTime $failed When the transaction failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setFailed($failed)
    {
        
        $this->failed = $failed;
        return $this;
    }
    
    /**
     * Gets refunded
     * @return \DateTime
     */
    public function getRefunded()
    {
        return $this->refunded;
    }
  
    /**
     * Sets refunded
     * @param \DateTime $refunded When the transaction was refunded, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setRefunded($refunded)
    {
        
        $this->refunded = $refunded;
        return $this;
    }
    
    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
  
    /**
     * Sets created
     * @param \DateTime $created Date when the transaction was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setCreated($created)
    {
        
        $this->created = $created;
        return $this;
    }
    
    /**
     * Gets method
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }
  
    /**
     * Sets method
     * @param string $method The method used for the offline manual transaction, allowable values: `cash`, `bank_transfer`, `check`, `chargeback`, `other`
     * @return $this
     */
    public function setMethod($method)
    {
        $allowed_values = array("cash", "bank_transfer", "check", "chargeback", "other");
        if (!in_array($method, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'method', must be one of 'cash', 'bank_transfer', 'check', 'chargeback', 'other'");
        }
        $this->method = $method;
        return $this;
    }
    
    /**
     * Gets comment
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
  
    /**
     * Sets comment
     * @param string $comment Optional comment for manual transaction
     * @return $this
     */
    public function setComment($comment)
    {
        
        $this->comment = $comment;
        return $this;
    }
    
    /**
     * Gets reference
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }
  
    /**
     * Sets reference
     * @param string $reference Optional reference for the manual transaction
     * @return $this
     */
    public function setReference($reference)
    {
        
        $this->reference = $reference;
        return $this;
    }
    
    /**
     * Gets payment_date
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->payment_date;
    }
  
    /**
     * Sets payment_date
     * @param \DateTime $payment_date When the manual transaction was performed on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss`
     * @return $this
     */
    public function setPaymentDate($payment_date)
    {
        
        $this->payment_date = $payment_date;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
