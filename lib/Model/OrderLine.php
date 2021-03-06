<?php
/**
 * OrderLine
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
 * OrderLine Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderLine implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'ordertext' => 'string',
        'amount' => 'int',
        'vat' => 'float',
        'quantity' => 'int',
        'origin' => 'string',
        'timestamp' => '\DateTime',
        'discounted_amount' => 'int',
        'amount_vat' => 'int',
        'amount_ex_vat' => 'int',
        'unit_amount' => 'int',
        'unit_amount_vat' => 'int',
        'unit_amount_ex_vat' => 'int',
        'origin_handle' => 'string',
        'period_from' => '\DateTime',
        'period_to' => '\DateTime',
        'discount_percentage' => 'int',
        'discounted_order_line' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'ordertext' => 'ordertext',
        'amount' => 'amount',
        'vat' => 'vat',
        'quantity' => 'quantity',
        'origin' => 'origin',
        'timestamp' => 'timestamp',
        'discounted_amount' => 'discounted_amount',
        'amount_vat' => 'amount_vat',
        'amount_ex_vat' => 'amount_ex_vat',
        'unit_amount' => 'unit_amount',
        'unit_amount_vat' => 'unit_amount_vat',
        'unit_amount_ex_vat' => 'unit_amount_ex_vat',
        'origin_handle' => 'origin_handle',
        'period_from' => 'period_from',
        'period_to' => 'period_to',
        'discount_percentage' => 'discount_percentage',
        'discounted_order_line' => 'discounted_order_line'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'ordertext' => 'setOrdertext',
        'amount' => 'setAmount',
        'vat' => 'setVat',
        'quantity' => 'setQuantity',
        'origin' => 'setOrigin',
        'timestamp' => 'setTimestamp',
        'discounted_amount' => 'setDiscountedAmount',
        'amount_vat' => 'setAmountVat',
        'amount_ex_vat' => 'setAmountExVat',
        'unit_amount' => 'setUnitAmount',
        'unit_amount_vat' => 'setUnitAmountVat',
        'unit_amount_ex_vat' => 'setUnitAmountExVat',
        'origin_handle' => 'setOriginHandle',
        'period_from' => 'setPeriodFrom',
        'period_to' => 'setPeriodTo',
        'discount_percentage' => 'setDiscountPercentage',
        'discounted_order_line' => 'setDiscountedOrderLine'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'ordertext' => 'getOrdertext',
        'amount' => 'getAmount',
        'vat' => 'getVat',
        'quantity' => 'getQuantity',
        'origin' => 'getOrigin',
        'timestamp' => 'getTimestamp',
        'discounted_amount' => 'getDiscountedAmount',
        'amount_vat' => 'getAmountVat',
        'amount_ex_vat' => 'getAmountExVat',
        'unit_amount' => 'getUnitAmount',
        'unit_amount_vat' => 'getUnitAmountVat',
        'unit_amount_ex_vat' => 'getUnitAmountExVat',
        'origin_handle' => 'getOriginHandle',
        'period_from' => 'getPeriodFrom',
        'period_to' => 'getPeriodTo',
        'discount_percentage' => 'getDiscountPercentage',
        'discounted_order_line' => 'getDiscountedOrderLine'
    );
  
    
    /**
      * $id Per account unique order line id
      * @var string
      */
    protected $id;
    
    /**
      * $ordertext Order line text
      * @var string
      */
    protected $ordertext;
    
    /**
      * $amount Order line total amount including vat
      * @var int
      */
    protected $amount;
    
    /**
      * $vat Order line vat percent
      * @var float
      */
    protected $vat;
    
    /**
      * $quantity Order line quantity
      * @var int
      */
    protected $quantity;
    
    /**
      * $origin Order line origin, one of the following: `plan`, `ondemand`, `additional_cost`, `credit`, `discount`
      * @var string
      */
    protected $origin;
    
    /**
      * $timestamp Timestamp from order line origin, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $timestamp;
    
    /**
      * $discounted_amount Order line amount after potential discount has been deducted
      * @var int
      */
    protected $discounted_amount;
    
    /**
      * $amount_vat Order line total vat amount
      * @var int
      */
    protected $amount_vat;
    
    /**
      * $amount_ex_vat Order line total amount without vat
      * @var int
      */
    protected $amount_ex_vat;
    
    /**
      * $unit_amount Order line unit amount including vat
      * @var int
      */
    protected $unit_amount;
    
    /**
      * $unit_amount_vat Order line unit vat amount
      * @var int
      */
    protected $unit_amount_vat;
    
    /**
      * $unit_amount_ex_vat Order line unit amount without vat
      * @var int
      */
    protected $unit_amount_ex_vat;
    
    /**
      * $origin_handle Handle for additional cost, credit, plan or subscription discount in the case one of those are the origin
      * @var string
      */
    protected $origin_handle;
    
    /**
      * $period_from The start of billing period if the order line is a plan order line for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $period_from;
    
    /**
      * $period_to The end of billing period if the order line is a plan order line for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $period_to;
    
    /**
      * $discount_percentage The discount percentage for discount order lines that has a percentage discount
      * @var int
      */
    protected $discount_percentage;
    
    /**
      * $discounted_order_line For discount order lines a reference to the order line for which the order line is a discount
      * @var string
      */
    protected $discounted_order_line;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->ordertext = $data["ordertext"];
            $this->amount = $data["amount"];
            $this->vat = $data["vat"];
            $this->quantity = $data["quantity"];
            $this->origin = $data["origin"];
            $this->timestamp = $data["timestamp"];
            $this->discounted_amount = $data["discounted_amount"];
            $this->amount_vat = $data["amount_vat"];
            $this->amount_ex_vat = $data["amount_ex_vat"];
            $this->unit_amount = $data["unit_amount"];
            $this->unit_amount_vat = $data["unit_amount_vat"];
            $this->unit_amount_ex_vat = $data["unit_amount_ex_vat"];
            $this->origin_handle = $data["origin_handle"];
            $this->period_from = $data["period_from"];
            $this->period_to = $data["period_to"];
            $this->discount_percentage = $data["discount_percentage"];
            $this->discounted_order_line = $data["discounted_order_line"];
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
     * @param string $id Per account unique order line id
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets ordertext
     * @return string
     */
    public function getOrdertext()
    {
        return $this->ordertext;
    }
  
    /**
     * Sets ordertext
     * @param string $ordertext Order line text
     * @return $this
     */
    public function setOrdertext($ordertext)
    {
        
        $this->ordertext = $ordertext;
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
     * @param int $amount Order line total amount including vat
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets vat
     * @return float
     */
    public function getVat()
    {
        return $this->vat;
    }
  
    /**
     * Sets vat
     * @param float $vat Order line vat percent
     * @return $this
     */
    public function setVat($vat)
    {
        
        $this->vat = $vat;
        return $this;
    }
    
    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
  
    /**
     * Sets quantity
     * @param int $quantity Order line quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        
        $this->quantity = $quantity;
        return $this;
    }
    
    /**
     * Gets origin
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }
  
    /**
     * Sets origin
     * @param string $origin Order line origin, one of the following: `plan`, `ondemand`, `additional_cost`, `credit`, `discount`
     * @return $this
     */
    public function setOrigin($origin)
    {
        $allowed_values = array("plan", "ondemand", "additional_cost", "credit", "discount");
        if (!in_array($origin, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'origin', must be one of 'plan', 'ondemand', 'additional_cost', 'credit', 'discount'");
        }
        $this->origin = $origin;
        return $this;
    }
    
    /**
     * Gets timestamp
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
  
    /**
     * Sets timestamp
     * @param \DateTime $timestamp Timestamp from order line origin, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        
        $this->timestamp = $timestamp;
        return $this;
    }
    
    /**
     * Gets discounted_amount
     * @return int
     */
    public function getDiscountedAmount()
    {
        return $this->discounted_amount;
    }
  
    /**
     * Sets discounted_amount
     * @param int $discounted_amount Order line amount after potential discount has been deducted
     * @return $this
     */
    public function setDiscountedAmount($discounted_amount)
    {
        
        $this->discounted_amount = $discounted_amount;
        return $this;
    }
    
    /**
     * Gets amount_vat
     * @return int
     */
    public function getAmountVat()
    {
        return $this->amount_vat;
    }
  
    /**
     * Sets amount_vat
     * @param int $amount_vat Order line total vat amount
     * @return $this
     */
    public function setAmountVat($amount_vat)
    {
        
        $this->amount_vat = $amount_vat;
        return $this;
    }
    
    /**
     * Gets amount_ex_vat
     * @return int
     */
    public function getAmountExVat()
    {
        return $this->amount_ex_vat;
    }
  
    /**
     * Sets amount_ex_vat
     * @param int $amount_ex_vat Order line total amount without vat
     * @return $this
     */
    public function setAmountExVat($amount_ex_vat)
    {
        
        $this->amount_ex_vat = $amount_ex_vat;
        return $this;
    }
    
    /**
     * Gets unit_amount
     * @return int
     */
    public function getUnitAmount()
    {
        return $this->unit_amount;
    }
  
    /**
     * Sets unit_amount
     * @param int $unit_amount Order line unit amount including vat
     * @return $this
     */
    public function setUnitAmount($unit_amount)
    {
        
        $this->unit_amount = $unit_amount;
        return $this;
    }
    
    /**
     * Gets unit_amount_vat
     * @return int
     */
    public function getUnitAmountVat()
    {
        return $this->unit_amount_vat;
    }
  
    /**
     * Sets unit_amount_vat
     * @param int $unit_amount_vat Order line unit vat amount
     * @return $this
     */
    public function setUnitAmountVat($unit_amount_vat)
    {
        
        $this->unit_amount_vat = $unit_amount_vat;
        return $this;
    }
    
    /**
     * Gets unit_amount_ex_vat
     * @return int
     */
    public function getUnitAmountExVat()
    {
        return $this->unit_amount_ex_vat;
    }
  
    /**
     * Sets unit_amount_ex_vat
     * @param int $unit_amount_ex_vat Order line unit amount without vat
     * @return $this
     */
    public function setUnitAmountExVat($unit_amount_ex_vat)
    {
        
        $this->unit_amount_ex_vat = $unit_amount_ex_vat;
        return $this;
    }
    
    /**
     * Gets origin_handle
     * @return string
     */
    public function getOriginHandle()
    {
        return $this->origin_handle;
    }
  
    /**
     * Sets origin_handle
     * @param string $origin_handle Handle for additional cost, credit, plan or subscription discount in the case one of those are the origin
     * @return $this
     */
    public function setOriginHandle($origin_handle)
    {
        
        $this->origin_handle = $origin_handle;
        return $this;
    }
    
    /**
     * Gets period_from
     * @return \DateTime
     */
    public function getPeriodFrom()
    {
        return $this->period_from;
    }
  
    /**
     * Sets period_from
     * @param \DateTime $period_from The start of billing period if the order line is a plan order line for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setPeriodFrom($period_from)
    {
        
        $this->period_from = $period_from;
        return $this;
    }
    
    /**
     * Gets period_to
     * @return \DateTime
     */
    public function getPeriodTo()
    {
        return $this->period_to;
    }
  
    /**
     * Sets period_to
     * @param \DateTime $period_to The end of billing period if the order line is a plan order line for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setPeriodTo($period_to)
    {
        
        $this->period_to = $period_to;
        return $this;
    }
    
    /**
     * Gets discount_percentage
     * @return int
     */
    public function getDiscountPercentage()
    {
        return $this->discount_percentage;
    }
  
    /**
     * Sets discount_percentage
     * @param int $discount_percentage The discount percentage for discount order lines that has a percentage discount
     * @return $this
     */
    public function setDiscountPercentage($discount_percentage)
    {
        
        $this->discount_percentage = $discount_percentage;
        return $this;
    }
    
    /**
     * Gets discounted_order_line
     * @return string
     */
    public function getDiscountedOrderLine()
    {
        return $this->discounted_order_line;
    }
  
    /**
     * Sets discounted_order_line
     * @param string $discounted_order_line For discount order lines a reference to the order line for which the order line is a discount
     * @return $this
     */
    public function setDiscountedOrderLine($discounted_order_line)
    {
        
        $this->discounted_order_line = $discounted_order_line;
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
