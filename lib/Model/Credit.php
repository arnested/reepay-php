<?php
/**
 * Credit
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
 * Credit Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Credit implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'subscription' => 'string',
        'handle' => 'string',
        'amount' => 'int',
        'text' => 'string',
        'state' => 'string',
        'created' => '\DateTime',
        'valid_from' => 'string',
        'credit_invoices' => '\Swagger\Client\Model\CreditInvoice[]',
        'pending_amount' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'subscription' => 'subscription',
        'handle' => 'handle',
        'amount' => 'amount',
        'text' => 'text',
        'state' => 'state',
        'created' => 'created',
        'valid_from' => 'valid_from',
        'credit_invoices' => 'credit_invoices',
        'pending_amount' => 'pending_amount'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'subscription' => 'setSubscription',
        'handle' => 'setHandle',
        'amount' => 'setAmount',
        'text' => 'setText',
        'state' => 'setState',
        'created' => 'setCreated',
        'valid_from' => 'setValidFrom',
        'credit_invoices' => 'setCreditInvoices',
        'pending_amount' => 'setPendingAmount'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'subscription' => 'getSubscription',
        'handle' => 'getHandle',
        'amount' => 'getAmount',
        'text' => 'getText',
        'state' => 'getState',
        'created' => 'getCreated',
        'valid_from' => 'getValidFrom',
        'credit_invoices' => 'getCreditInvoices',
        'pending_amount' => 'getPendingAmount'
    );
  
    
    /**
      * $subscription Subscription by handle to add the credit to
      * @var string
      */
    protected $subscription;
    
    /**
      * $handle Per account unique handle for the credit. Max length 255 with allowable characters [a-zA-Z0-9_.-@].
      * @var string
      */
    protected $handle;
    
    /**
      * $amount Credit amount in the smallest unit for the account currency
      * @var int
      */
    protected $amount;
    
    /**
      * $text Text describing the credit. Will be on affected invoices.
      * @var string
      */
    protected $text;
    
    /**
      * $state State of the credit, one of the following: `pending`, `transferred`, `cancelled`. Pending credits have not yet been transferred fully to invoices. Cancelled credits have been manually cancelled.
      * @var string
      */
    protected $state;
    
    /**
      * $created Date when the credit was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $created;
    
    /**
      * $valid_from Date on the form yyyy-MM-dd from which the credit is valid. The credit will not be deducted from invoices before this date.
      * @var string
      */
    protected $valid_from;
    
    /**
      * $credit_invoices List of invoices where the credit is applied
      * @var \Swagger\Client\Model\CreditInvoice[]
      */
    protected $credit_invoices;
    
    /**
      * $pending_amount Remaining amount not transferred to invoices
      * @var int
      */
    protected $pending_amount;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->subscription = $data["subscription"];
            $this->handle = $data["handle"];
            $this->amount = $data["amount"];
            $this->text = $data["text"];
            $this->state = $data["state"];
            $this->created = $data["created"];
            $this->valid_from = $data["valid_from"];
            $this->credit_invoices = $data["credit_invoices"];
            $this->pending_amount = $data["pending_amount"];
        }
    }
    
    /**
     * Gets subscription
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }
  
    /**
     * Sets subscription
     * @param string $subscription Subscription by handle to add the credit to
     * @return $this
     */
    public function setSubscription($subscription)
    {
        
        $this->subscription = $subscription;
        return $this;
    }
    
    /**
     * Gets handle
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }
  
    /**
     * Sets handle
     * @param string $handle Per account unique handle for the credit. Max length 255 with allowable characters [a-zA-Z0-9_.-@].
     * @return $this
     */
    public function setHandle($handle)
    {
        
        $this->handle = $handle;
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
     * @param int $amount Credit amount in the smallest unit for the account currency
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
  
    /**
     * Sets text
     * @param string $text Text describing the credit. Will be on affected invoices.
     * @return $this
     */
    public function setText($text)
    {
        
        $this->text = $text;
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
     * @param string $state State of the credit, one of the following: `pending`, `transferred`, `cancelled`. Pending credits have not yet been transferred fully to invoices. Cancelled credits have been manually cancelled.
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array("pending", "transferred", "cancelled");
        if (!in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'pending', 'transferred', 'cancelled'");
        }
        $this->state = $state;
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
     * @param \DateTime $created Date when the credit was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setCreated($created)
    {
        
        $this->created = $created;
        return $this;
    }
    
    /**
     * Gets valid_from
     * @return string
     */
    public function getValidFrom()
    {
        return $this->valid_from;
    }
  
    /**
     * Sets valid_from
     * @param string $valid_from Date on the form yyyy-MM-dd from which the credit is valid. The credit will not be deducted from invoices before this date.
     * @return $this
     */
    public function setValidFrom($valid_from)
    {
        
        $this->valid_from = $valid_from;
        return $this;
    }
    
    /**
     * Gets credit_invoices
     * @return \Swagger\Client\Model\CreditInvoice[]
     */
    public function getCreditInvoices()
    {
        return $this->credit_invoices;
    }
  
    /**
     * Sets credit_invoices
     * @param \Swagger\Client\Model\CreditInvoice[] $credit_invoices List of invoices where the credit is applied
     * @return $this
     */
    public function setCreditInvoices($credit_invoices)
    {
        
        $this->credit_invoices = $credit_invoices;
        return $this;
    }
    
    /**
     * Gets pending_amount
     * @return int
     */
    public function getPendingAmount()
    {
        return $this->pending_amount;
    }
  
    /**
     * Sets pending_amount
     * @param int $pending_amount Remaining amount not transferred to invoices
     * @return $this
     */
    public function setPendingAmount($pending_amount)
    {
        
        $this->pending_amount = $pending_amount;
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
