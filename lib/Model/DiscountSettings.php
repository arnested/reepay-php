<?php
/**
 * DiscountSettings
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
 * DiscountSettings Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DiscountSettings implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'discount_apply_order' => 'string',
        'discount_percentage_apply' => 'string',
        'multiple_allowed' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'discount_apply_order' => 'discount_apply_order',
        'discount_percentage_apply' => 'discount_percentage_apply',
        'multiple_allowed' => 'multiple_allowed'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'discount_apply_order' => 'setDiscountApplyOrder',
        'discount_percentage_apply' => 'setDiscountPercentageApply',
        'multiple_allowed' => 'setMultipleAllowed'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'discount_apply_order' => 'getDiscountApplyOrder',
        'discount_percentage_apply' => 'getDiscountPercentageApply',
        'multiple_allowed' => 'getMultipleAllowed'
    );
  
    
    /**
      * $discount_apply_order The order to apply multiple discounts in, one of the following: `percentage_first`, `amount_first`
      * @var string
      */
    protected $discount_apply_order;
    
    /**
      * $discount_percentage_apply The rule for applying multiple percentage discounts, one of the following: `full`, `compound`
      * @var string
      */
    protected $discount_percentage_apply;
    
    /**
      * $multiple_allowed If multiple discounts per subscription is allowed
      * @var bool
      */
    protected $multiple_allowed = false;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->discount_apply_order = $data["discount_apply_order"];
            $this->discount_percentage_apply = $data["discount_percentage_apply"];
            $this->multiple_allowed = $data["multiple_allowed"];
        }
    }
    
    /**
     * Gets discount_apply_order
     * @return string
     */
    public function getDiscountApplyOrder()
    {
        return $this->discount_apply_order;
    }
  
    /**
     * Sets discount_apply_order
     * @param string $discount_apply_order The order to apply multiple discounts in, one of the following: `percentage_first`, `amount_first`
     * @return $this
     */
    public function setDiscountApplyOrder($discount_apply_order)
    {
        $allowed_values = array("percentage_first", "amount_first");
        if (!in_array($discount_apply_order, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'discount_apply_order', must be one of 'percentage_first', 'amount_first'");
        }
        $this->discount_apply_order = $discount_apply_order;
        return $this;
    }
    
    /**
     * Gets discount_percentage_apply
     * @return string
     */
    public function getDiscountPercentageApply()
    {
        return $this->discount_percentage_apply;
    }
  
    /**
     * Sets discount_percentage_apply
     * @param string $discount_percentage_apply The rule for applying multiple percentage discounts, one of the following: `full`, `compound`
     * @return $this
     */
    public function setDiscountPercentageApply($discount_percentage_apply)
    {
        $allowed_values = array("full", "compound");
        if (!in_array($discount_percentage_apply, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'discount_percentage_apply', must be one of 'full', 'compound'");
        }
        $this->discount_percentage_apply = $discount_percentage_apply;
        return $this;
    }
    
    /**
     * Gets multiple_allowed
     * @return bool
     */
    public function getMultipleAllowed()
    {
        return $this->multiple_allowed;
    }
  
    /**
     * Sets multiple_allowed
     * @param bool $multiple_allowed If multiple discounts per subscription is allowed
     * @return $this
     */
    public function setMultipleAllowed($multiple_allowed)
    {
        
        $this->multiple_allowed = $multiple_allowed;
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
