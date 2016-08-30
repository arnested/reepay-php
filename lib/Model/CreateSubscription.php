<?php
/**
 * CreateSubscription
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
 * CreateSubscription Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateSubscription implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'customer' => 'string',
        'plan' => 'string',
        'amount' => 'int',
        'quantity' => 'int',
        'test' => 'bool',
        'handle' => 'string',
        'card' => 'string',
        'signup_method' => 'string',
        'conditional_create' => 'bool',
        'plan_version' => 'int',
        'generate_handle' => 'bool',
        'start_date' => 'string',
        'end_date' => 'string',
        'grace_duration' => 'int',
        'card_token' => 'string',
        'no_trial' => 'bool',
        'subscription_discounts' => '\Swagger\Client\Model\CreateSubscriptionDiscount[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'customer' => 'customer',
        'plan' => 'plan',
        'amount' => 'amount',
        'quantity' => 'quantity',
        'test' => 'test',
        'handle' => 'handle',
        'card' => 'card',
        'signup_method' => 'signup_method',
        'conditional_create' => 'conditional_create',
        'plan_version' => 'plan_version',
        'generate_handle' => 'generate_handle',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'grace_duration' => 'grace_duration',
        'card_token' => 'card_token',
        'no_trial' => 'no_trial',
        'subscription_discounts' => 'subscription_discounts'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'customer' => 'setCustomer',
        'plan' => 'setPlan',
        'amount' => 'setAmount',
        'quantity' => 'setQuantity',
        'test' => 'setTest',
        'handle' => 'setHandle',
        'card' => 'setCard',
        'signup_method' => 'setSignupMethod',
        'conditional_create' => 'setConditionalCreate',
        'plan_version' => 'setPlanVersion',
        'generate_handle' => 'setGenerateHandle',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'grace_duration' => 'setGraceDuration',
        'card_token' => 'setCardToken',
        'no_trial' => 'setNoTrial',
        'subscription_discounts' => 'setSubscriptionDiscounts'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'customer' => 'getCustomer',
        'plan' => 'getPlan',
        'amount' => 'getAmount',
        'quantity' => 'getQuantity',
        'test' => 'getTest',
        'handle' => 'getHandle',
        'card' => 'getCard',
        'signup_method' => 'getSignupMethod',
        'conditional_create' => 'getConditionalCreate',
        'plan_version' => 'getPlanVersion',
        'generate_handle' => 'getGenerateHandle',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'grace_duration' => 'getGraceDuration',
        'card_token' => 'getCardToken',
        'no_trial' => 'getNoTrial',
        'subscription_discounts' => 'getSubscriptionDiscounts'
    );
  
    
    /**
      * $customer Customer handle
      * @var string
      */
    protected $customer;
    
    /**
      * $plan Plan handle
      * @var string
      */
    protected $plan;
    
    /**
      * $amount Optional custom per quantity plan price including VAT. If provided the plan price billed for each billing period will be overridden by this price.
      * @var int
      */
    protected $amount;
    
    /**
      * $quantity Optional quantity of the plan product for this subscription. If not provided the default is the default plan quantity defined for the plan.
      * @var int
      */
    protected $quantity;
    
    /**
      * $test Test flag. If given it will be verified that the account state matches the intended create state.
      * @var bool
      */
    protected $test = false;
    
    /**
      * $handle Per account unique handle for the subscription. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. Must be provided if generate_handle not defined.
      * @var string
      */
    protected $handle;
    
    /**
      * $card If signup method 'card' is used a card id of an existing card must be provided
      * @var string
      */
    protected $card;
    
    /**
      * $signup_method The signup method, how to get the payment information from customer, one of the following: `card`, `card_token`, `email`, `link`
      * @var string
      */
    protected $signup_method;
    
    /**
      * $conditional_create If the subscription is eligable to bill for the first period right away, this option will make the creation conditional on a successfull payment of the first invoice. Will require a signup method of `card` or `card_token`. Default is false.
      * @var bool
      */
    protected $conditional_create = false;
    
    /**
      * $plan_version Optional plan version, default is to use newest version of plan
      * @var int
      */
    protected $plan_version;
    
    /**
      * $generate_handle Auto generate handle on the form sub-[sequence_number]
      * @var bool
      */
    protected $generate_handle = false;
    
    /**
      * $start_date Date and time on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss` from which the subscription is eligible to schedule first invoice. If no time part is given start of day will be used. A start date in the past can be used, but no more than one period length in the past. A start date in tje past can result in an instant invoice for a past billing period start. Default value is current date and time.
      * @var string
      */
    protected $start_date;
    
    /**
      * $end_date Fixed date and time on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss` where the subscription will automatically cancel. The subscription will expire at the end of the billing period containing the end date. Default is no fixed end date.
      * @var string
      */
    protected $end_date;
    
    /**
      * $grace_duration A grace duration in seconds from the creation of a subscription where no dunning process is started for a failing invoice. This allows a certain amount of time for the customer to sign up with a payment method.
      * @var int
      */
    protected $grace_duration;
    
    /**
      * $card_token If signup method 'card_token' is used a card token must be provided
      * @var string
      */
    protected $card_token;
    
    /**
      * $no_trial Override plan trial settings and disable trial
      * @var bool
      */
    protected $no_trial = false;
    
    /**
      * $subscription_discounts Discounts to attach to subscription
      * @var \Swagger\Client\Model\CreateSubscriptionDiscount[]
      */
    protected $subscription_discounts;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->customer = $data["customer"];
            $this->plan = $data["plan"];
            $this->amount = $data["amount"];
            $this->quantity = $data["quantity"];
            $this->test = $data["test"];
            $this->handle = $data["handle"];
            $this->card = $data["card"];
            $this->signup_method = $data["signup_method"];
            $this->conditional_create = $data["conditional_create"];
            $this->plan_version = $data["plan_version"];
            $this->generate_handle = $data["generate_handle"];
            $this->start_date = $data["start_date"];
            $this->end_date = $data["end_date"];
            $this->grace_duration = $data["grace_duration"];
            $this->card_token = $data["card_token"];
            $this->no_trial = $data["no_trial"];
            $this->subscription_discounts = $data["subscription_discounts"];
        }
    }
    
    /**
     * Gets customer
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }
  
    /**
     * Sets customer
     * @param string $customer Customer handle
     * @return $this
     */
    public function setCustomer($customer)
    {
        
        $this->customer = $customer;
        return $this;
    }
    
    /**
     * Gets plan
     * @return string
     */
    public function getPlan()
    {
        return $this->plan;
    }
  
    /**
     * Sets plan
     * @param string $plan Plan handle
     * @return $this
     */
    public function setPlan($plan)
    {
        
        $this->plan = $plan;
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
     * @param int $amount Optional custom per quantity plan price including VAT. If provided the plan price billed for each billing period will be overridden by this price.
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
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
     * @param int $quantity Optional quantity of the plan product for this subscription. If not provided the default is the default plan quantity defined for the plan.
     * @return $this
     */
    public function setQuantity($quantity)
    {
        
        $this->quantity = $quantity;
        return $this;
    }
    
    /**
     * Gets test
     * @return bool
     */
    public function getTest()
    {
        return $this->test;
    }
  
    /**
     * Sets test
     * @param bool $test Test flag. If given it will be verified that the account state matches the intended create state.
     * @return $this
     */
    public function setTest($test)
    {
        
        $this->test = $test;
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
     * @param string $handle Per account unique handle for the subscription. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. Must be provided if generate_handle not defined.
     * @return $this
     */
    public function setHandle($handle)
    {
        
        $this->handle = $handle;
        return $this;
    }
    
    /**
     * Gets card
     * @return string
     */
    public function getCard()
    {
        return $this->card;
    }
  
    /**
     * Sets card
     * @param string $card If signup method 'card' is used a card id of an existing card must be provided
     * @return $this
     */
    public function setCard($card)
    {
        
        $this->card = $card;
        return $this;
    }
    
    /**
     * Gets signup_method
     * @return string
     */
    public function getSignupMethod()
    {
        return $this->signup_method;
    }
  
    /**
     * Sets signup_method
     * @param string $signup_method The signup method, how to get the payment information from customer, one of the following: `card`, `card_token`, `email`, `link`
     * @return $this
     */
    public function setSignupMethod($signup_method)
    {
        
        $this->signup_method = $signup_method;
        return $this;
    }
    
    /**
     * Gets conditional_create
     * @return bool
     */
    public function getConditionalCreate()
    {
        return $this->conditional_create;
    }
  
    /**
     * Sets conditional_create
     * @param bool $conditional_create If the subscription is eligable to bill for the first period right away, this option will make the creation conditional on a successfull payment of the first invoice. Will require a signup method of `card` or `card_token`. Default is false.
     * @return $this
     */
    public function setConditionalCreate($conditional_create)
    {
        
        $this->conditional_create = $conditional_create;
        return $this;
    }
    
    /**
     * Gets plan_version
     * @return int
     */
    public function getPlanVersion()
    {
        return $this->plan_version;
    }
  
    /**
     * Sets plan_version
     * @param int $plan_version Optional plan version, default is to use newest version of plan
     * @return $this
     */
    public function setPlanVersion($plan_version)
    {
        
        $this->plan_version = $plan_version;
        return $this;
    }
    
    /**
     * Gets generate_handle
     * @return bool
     */
    public function getGenerateHandle()
    {
        return $this->generate_handle;
    }
  
    /**
     * Sets generate_handle
     * @param bool $generate_handle Auto generate handle on the form sub-[sequence_number]
     * @return $this
     */
    public function setGenerateHandle($generate_handle)
    {
        
        $this->generate_handle = $generate_handle;
        return $this;
    }
    
    /**
     * Gets start_date
     * @return string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }
  
    /**
     * Sets start_date
     * @param string $start_date Date and time on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss` from which the subscription is eligible to schedule first invoice. If no time part is given start of day will be used. A start date in the past can be used, but no more than one period length in the past. A start date in tje past can result in an instant invoice for a past billing period start. Default value is current date and time.
     * @return $this
     */
    public function setStartDate($start_date)
    {
        
        $this->start_date = $start_date;
        return $this;
    }
    
    /**
     * Gets end_date
     * @return string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }
  
    /**
     * Sets end_date
     * @param string $end_date Fixed date and time on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss` where the subscription will automatically cancel. The subscription will expire at the end of the billing period containing the end date. Default is no fixed end date.
     * @return $this
     */
    public function setEndDate($end_date)
    {
        
        $this->end_date = $end_date;
        return $this;
    }
    
    /**
     * Gets grace_duration
     * @return int
     */
    public function getGraceDuration()
    {
        return $this->grace_duration;
    }
  
    /**
     * Sets grace_duration
     * @param int $grace_duration A grace duration in seconds from the creation of a subscription where no dunning process is started for a failing invoice. This allows a certain amount of time for the customer to sign up with a payment method.
     * @return $this
     */
    public function setGraceDuration($grace_duration)
    {
        
        $this->grace_duration = $grace_duration;
        return $this;
    }
    
    /**
     * Gets card_token
     * @return string
     */
    public function getCardToken()
    {
        return $this->card_token;
    }
  
    /**
     * Sets card_token
     * @param string $card_token If signup method 'card_token' is used a card token must be provided
     * @return $this
     */
    public function setCardToken($card_token)
    {
        
        $this->card_token = $card_token;
        return $this;
    }
    
    /**
     * Gets no_trial
     * @return bool
     */
    public function getNoTrial()
    {
        return $this->no_trial;
    }
  
    /**
     * Sets no_trial
     * @param bool $no_trial Override plan trial settings and disable trial
     * @return $this
     */
    public function setNoTrial($no_trial)
    {
        
        $this->no_trial = $no_trial;
        return $this;
    }
    
    /**
     * Gets subscription_discounts
     * @return \Swagger\Client\Model\CreateSubscriptionDiscount[]
     */
    public function getSubscriptionDiscounts()
    {
        return $this->subscription_discounts;
    }
  
    /**
     * Sets subscription_discounts
     * @param \Swagger\Client\Model\CreateSubscriptionDiscount[] $subscription_discounts Discounts to attach to subscription
     * @return $this
     */
    public function setSubscriptionDiscounts($subscription_discounts)
    {
        
        $this->subscription_discounts = $subscription_discounts;
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