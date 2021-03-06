<?php
/**
 * Customer
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
 * Customer Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Customer implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'email' => 'string',
        'address' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'country' => 'string',
        'phone' => 'string',
        'company' => 'string',
        'vat' => 'string',
        'handle' => 'string',
        'test' => 'bool',
        'subscriptions' => 'int',
        'created' => '\DateTime',
        'deleted' => '\DateTime',
        'first_name' => 'string',
        'last_name' => 'string',
        'postal_code' => 'string',
        'active_subscriptions' => 'int',
        'trial_active_subscriptions' => 'int',
        'trial_cancelled_subscriptions' => 'int',
        'expired_subscriptions' => 'int',
        'cancelled_subscriptions' => 'int',
        'non_renewing_subscriptions' => 'int',
        'failed_invoices' => 'int',
        'failed_amount' => 'int',
        'cancelled_invoices' => 'int',
        'cancelled_amount' => 'int',
        'pending_invoices' => 'int',
        'pending_amount' => 'int',
        'dunning_invoices' => 'int',
        'dunning_amount' => 'int',
        'settled_invoices' => 'int',
        'settled_amount' => 'int',
        'refunded_amount' => 'int',
        'pending_additional_costs' => 'int',
        'pending_additional_cost_amount' => 'int',
        'transferred_additional_costs' => 'int',
        'transferred_additional_cost_amount' => 'int',
        'pending_credits' => 'int',
        'pending_credit_amount' => 'int',
        'transferred_credits' => 'int',
        'transferred_credit_amount' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'email' => 'email',
        'address' => 'address',
        'address2' => 'address2',
        'city' => 'city',
        'country' => 'country',
        'phone' => 'phone',
        'company' => 'company',
        'vat' => 'vat',
        'handle' => 'handle',
        'test' => 'test',
        'subscriptions' => 'subscriptions',
        'created' => 'created',
        'deleted' => 'deleted',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'postal_code' => 'postal_code',
        'active_subscriptions' => 'active_subscriptions',
        'trial_active_subscriptions' => 'trial_active_subscriptions',
        'trial_cancelled_subscriptions' => 'trial_cancelled_subscriptions',
        'expired_subscriptions' => 'expired_subscriptions',
        'cancelled_subscriptions' => 'cancelled_subscriptions',
        'non_renewing_subscriptions' => 'non_renewing_subscriptions',
        'failed_invoices' => 'failed_invoices',
        'failed_amount' => 'failed_amount',
        'cancelled_invoices' => 'cancelled_invoices',
        'cancelled_amount' => 'cancelled_amount',
        'pending_invoices' => 'pending_invoices',
        'pending_amount' => 'pending_amount',
        'dunning_invoices' => 'dunning_invoices',
        'dunning_amount' => 'dunning_amount',
        'settled_invoices' => 'settled_invoices',
        'settled_amount' => 'settled_amount',
        'refunded_amount' => 'refunded_amount',
        'pending_additional_costs' => 'pending_additional_costs',
        'pending_additional_cost_amount' => 'pending_additional_cost_amount',
        'transferred_additional_costs' => 'transferred_additional_costs',
        'transferred_additional_cost_amount' => 'transferred_additional_cost_amount',
        'pending_credits' => 'pending_credits',
        'pending_credit_amount' => 'pending_credit_amount',
        'transferred_credits' => 'transferred_credits',
        'transferred_credit_amount' => 'transferred_credit_amount'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'email' => 'setEmail',
        'address' => 'setAddress',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'country' => 'setCountry',
        'phone' => 'setPhone',
        'company' => 'setCompany',
        'vat' => 'setVat',
        'handle' => 'setHandle',
        'test' => 'setTest',
        'subscriptions' => 'setSubscriptions',
        'created' => 'setCreated',
        'deleted' => 'setDeleted',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'postal_code' => 'setPostalCode',
        'active_subscriptions' => 'setActiveSubscriptions',
        'trial_active_subscriptions' => 'setTrialActiveSubscriptions',
        'trial_cancelled_subscriptions' => 'setTrialCancelledSubscriptions',
        'expired_subscriptions' => 'setExpiredSubscriptions',
        'cancelled_subscriptions' => 'setCancelledSubscriptions',
        'non_renewing_subscriptions' => 'setNonRenewingSubscriptions',
        'failed_invoices' => 'setFailedInvoices',
        'failed_amount' => 'setFailedAmount',
        'cancelled_invoices' => 'setCancelledInvoices',
        'cancelled_amount' => 'setCancelledAmount',
        'pending_invoices' => 'setPendingInvoices',
        'pending_amount' => 'setPendingAmount',
        'dunning_invoices' => 'setDunningInvoices',
        'dunning_amount' => 'setDunningAmount',
        'settled_invoices' => 'setSettledInvoices',
        'settled_amount' => 'setSettledAmount',
        'refunded_amount' => 'setRefundedAmount',
        'pending_additional_costs' => 'setPendingAdditionalCosts',
        'pending_additional_cost_amount' => 'setPendingAdditionalCostAmount',
        'transferred_additional_costs' => 'setTransferredAdditionalCosts',
        'transferred_additional_cost_amount' => 'setTransferredAdditionalCostAmount',
        'pending_credits' => 'setPendingCredits',
        'pending_credit_amount' => 'setPendingCreditAmount',
        'transferred_credits' => 'setTransferredCredits',
        'transferred_credit_amount' => 'setTransferredCreditAmount'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'email' => 'getEmail',
        'address' => 'getAddress',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'country' => 'getCountry',
        'phone' => 'getPhone',
        'company' => 'getCompany',
        'vat' => 'getVat',
        'handle' => 'getHandle',
        'test' => 'getTest',
        'subscriptions' => 'getSubscriptions',
        'created' => 'getCreated',
        'deleted' => 'getDeleted',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'postal_code' => 'getPostalCode',
        'active_subscriptions' => 'getActiveSubscriptions',
        'trial_active_subscriptions' => 'getTrialActiveSubscriptions',
        'trial_cancelled_subscriptions' => 'getTrialCancelledSubscriptions',
        'expired_subscriptions' => 'getExpiredSubscriptions',
        'cancelled_subscriptions' => 'getCancelledSubscriptions',
        'non_renewing_subscriptions' => 'getNonRenewingSubscriptions',
        'failed_invoices' => 'getFailedInvoices',
        'failed_amount' => 'getFailedAmount',
        'cancelled_invoices' => 'getCancelledInvoices',
        'cancelled_amount' => 'getCancelledAmount',
        'pending_invoices' => 'getPendingInvoices',
        'pending_amount' => 'getPendingAmount',
        'dunning_invoices' => 'getDunningInvoices',
        'dunning_amount' => 'getDunningAmount',
        'settled_invoices' => 'getSettledInvoices',
        'settled_amount' => 'getSettledAmount',
        'refunded_amount' => 'getRefundedAmount',
        'pending_additional_costs' => 'getPendingAdditionalCosts',
        'pending_additional_cost_amount' => 'getPendingAdditionalCostAmount',
        'transferred_additional_costs' => 'getTransferredAdditionalCosts',
        'transferred_additional_cost_amount' => 'getTransferredAdditionalCostAmount',
        'pending_credits' => 'getPendingCredits',
        'pending_credit_amount' => 'getPendingCreditAmount',
        'transferred_credits' => 'getTransferredCredits',
        'transferred_credit_amount' => 'getTransferredCreditAmount'
    );
  
    
    /**
      * $email Customer email
      * @var string
      */
    protected $email;
    
    /**
      * $address Customer address
      * @var string
      */
    protected $address;
    
    /**
      * $address2 Customer address2
      * @var string
      */
    protected $address2;
    
    /**
      * $city Customer city
      * @var string
      */
    protected $city;
    
    /**
      * $country Customer country in ISO 3166-1 alpha-2
      * @var string
      */
    protected $country;
    
    /**
      * $phone Customer phone number
      * @var string
      */
    protected $phone;
    
    /**
      * $company Customer company
      * @var string
      */
    protected $company;
    
    /**
      * $vat Customer vat number
      * @var string
      */
    protected $vat;
    
    /**
      * $handle Per account unique handle for the customer. Max length 255 with allowable characters [a-zA-Z0-9_.-@].
      * @var string
      */
    protected $handle;
    
    /**
      * $test Test flag
      * @var bool
      */
    protected $test = false;
    
    /**
      * $subscriptions Number of active subscriptions for this customer (deprecated, will be removed in a later version, use active_subscriptions)
      * @var int
      */
    protected $subscriptions;
    
    /**
      * $created Date when the customer was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $created;
    
    /**
      * $deleted Date when the customer was deleted. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $deleted;
    
    /**
      * $first_name Customer first name
      * @var string
      */
    protected $first_name;
    
    /**
      * $last_name Customer last name
      * @var string
      */
    protected $last_name;
    
    /**
      * $postal_code Customer postal code
      * @var string
      */
    protected $postal_code;
    
    /**
      * $active_subscriptions Number of active subscriptions for this customer
      * @var int
      */
    protected $active_subscriptions;
    
    /**
      * $trial_active_subscriptions Number of active subscriptions in trial for this customer
      * @var int
      */
    protected $trial_active_subscriptions;
    
    /**
      * $trial_cancelled_subscriptions Number of cancelled subscriptions in trial for this customer
      * @var int
      */
    protected $trial_cancelled_subscriptions;
    
    /**
      * $expired_subscriptions Number of expired subscription for this customer
      * @var int
      */
    protected $expired_subscriptions;
    
    /**
      * $cancelled_subscriptions Number of cancelled subscription for this customer
      * @var int
      */
    protected $cancelled_subscriptions;
    
    /**
      * $non_renewing_subscriptions Number of non renewing (active subscriptions not renewing at billing period end) subscriptions for this customer
      * @var int
      */
    protected $non_renewing_subscriptions;
    
    /**
      * $failed_invoices Number of failed invoices for this customer
      * @var int
      */
    protected $failed_invoices;
    
    /**
      * $failed_amount Summed amount for failed invoices
      * @var int
      */
    protected $failed_amount;
    
    /**
      * $cancelled_invoices Number of cancelled invoices for this customer
      * @var int
      */
    protected $cancelled_invoices;
    
    /**
      * $cancelled_amount Summed amount for cancelled invoices
      * @var int
      */
    protected $cancelled_amount;
    
    /**
      * $pending_invoices Number of pending invoices for this customer
      * @var int
      */
    protected $pending_invoices;
    
    /**
      * $pending_amount Summed amount for pending invoices
      * @var int
      */
    protected $pending_amount;
    
    /**
      * $dunning_invoices Number of dunning invoices for this customer
      * @var int
      */
    protected $dunning_invoices;
    
    /**
      * $dunning_amount Summed amount for dunning invoices
      * @var int
      */
    protected $dunning_amount;
    
    /**
      * $settled_invoices Number of settled invoices for this customer
      * @var int
      */
    protected $settled_invoices;
    
    /**
      * $settled_amount Summed settled amount
      * @var int
      */
    protected $settled_amount;
    
    /**
      * $refunded_amount Summed refunded amount
      * @var int
      */
    protected $refunded_amount;
    
    /**
      * $pending_additional_costs Number of pending additional costs
      * @var int
      */
    protected $pending_additional_costs;
    
    /**
      * $pending_additional_cost_amount Summed amount of pending additional costs
      * @var int
      */
    protected $pending_additional_cost_amount;
    
    /**
      * $transferred_additional_costs Number of additional costs that have been applied to invoices
      * @var int
      */
    protected $transferred_additional_costs;
    
    /**
      * $transferred_additional_cost_amount Summed amount of additional costs that have been applied to invoices
      * @var int
      */
    protected $transferred_additional_cost_amount;
    
    /**
      * $pending_credits Number of credits that have not fully been applied to invoices
      * @var int
      */
    protected $pending_credits;
    
    /**
      * $pending_credit_amount Summed credit amount not yet applied to invoices
      * @var int
      */
    protected $pending_credit_amount;
    
    /**
      * $transferred_credits Number of credits that have fully been applied to invoices
      * @var int
      */
    protected $transferred_credits;
    
    /**
      * $transferred_credit_amount Summed credit amount that have been applied to invoices
      * @var int
      */
    protected $transferred_credit_amount;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->email = $data["email"];
            $this->address = $data["address"];
            $this->address2 = $data["address2"];
            $this->city = $data["city"];
            $this->country = $data["country"];
            $this->phone = $data["phone"];
            $this->company = $data["company"];
            $this->vat = $data["vat"];
            $this->handle = $data["handle"];
            $this->test = $data["test"];
            $this->subscriptions = $data["subscriptions"];
            $this->created = $data["created"];
            $this->deleted = $data["deleted"];
            $this->first_name = $data["first_name"];
            $this->last_name = $data["last_name"];
            $this->postal_code = $data["postal_code"];
            $this->active_subscriptions = $data["active_subscriptions"];
            $this->trial_active_subscriptions = $data["trial_active_subscriptions"];
            $this->trial_cancelled_subscriptions = $data["trial_cancelled_subscriptions"];
            $this->expired_subscriptions = $data["expired_subscriptions"];
            $this->cancelled_subscriptions = $data["cancelled_subscriptions"];
            $this->non_renewing_subscriptions = $data["non_renewing_subscriptions"];
            $this->failed_invoices = $data["failed_invoices"];
            $this->failed_amount = $data["failed_amount"];
            $this->cancelled_invoices = $data["cancelled_invoices"];
            $this->cancelled_amount = $data["cancelled_amount"];
            $this->pending_invoices = $data["pending_invoices"];
            $this->pending_amount = $data["pending_amount"];
            $this->dunning_invoices = $data["dunning_invoices"];
            $this->dunning_amount = $data["dunning_amount"];
            $this->settled_invoices = $data["settled_invoices"];
            $this->settled_amount = $data["settled_amount"];
            $this->refunded_amount = $data["refunded_amount"];
            $this->pending_additional_costs = $data["pending_additional_costs"];
            $this->pending_additional_cost_amount = $data["pending_additional_cost_amount"];
            $this->transferred_additional_costs = $data["transferred_additional_costs"];
            $this->transferred_additional_cost_amount = $data["transferred_additional_cost_amount"];
            $this->pending_credits = $data["pending_credits"];
            $this->pending_credit_amount = $data["pending_credit_amount"];
            $this->transferred_credits = $data["transferred_credits"];
            $this->transferred_credit_amount = $data["transferred_credit_amount"];
        }
    }
    
    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
  
    /**
     * Sets email
     * @param string $email Customer email
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
        return $this;
    }
    
    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
  
    /**
     * Sets address
     * @param string $address Customer address
     * @return $this
     */
    public function setAddress($address)
    {
        
        $this->address = $address;
        return $this;
    }
    
    /**
     * Gets address2
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }
  
    /**
     * Sets address2
     * @param string $address2 Customer address2
     * @return $this
     */
    public function setAddress2($address2)
    {
        
        $this->address2 = $address2;
        return $this;
    }
    
    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
  
    /**
     * Sets city
     * @param string $city Customer city
     * @return $this
     */
    public function setCity($city)
    {
        
        $this->city = $city;
        return $this;
    }
    
    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
  
    /**
     * Sets country
     * @param string $country Customer country in ISO 3166-1 alpha-2
     * @return $this
     */
    public function setCountry($country)
    {
        
        $this->country = $country;
        return $this;
    }
    
    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
  
    /**
     * Sets phone
     * @param string $phone Customer phone number
     * @return $this
     */
    public function setPhone($phone)
    {
        
        $this->phone = $phone;
        return $this;
    }
    
    /**
     * Gets company
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }
  
    /**
     * Sets company
     * @param string $company Customer company
     * @return $this
     */
    public function setCompany($company)
    {
        
        $this->company = $company;
        return $this;
    }
    
    /**
     * Gets vat
     * @return string
     */
    public function getVat()
    {
        return $this->vat;
    }
  
    /**
     * Sets vat
     * @param string $vat Customer vat number
     * @return $this
     */
    public function setVat($vat)
    {
        
        $this->vat = $vat;
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
     * @param string $handle Per account unique handle for the customer. Max length 255 with allowable characters [a-zA-Z0-9_.-@].
     * @return $this
     */
    public function setHandle($handle)
    {
        
        $this->handle = $handle;
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
     * @param bool $test Test flag
     * @return $this
     */
    public function setTest($test)
    {
        
        $this->test = $test;
        return $this;
    }
    
    /**
     * Gets subscriptions
     * @return int
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }
  
    /**
     * Sets subscriptions
     * @param int $subscriptions Number of active subscriptions for this customer (deprecated, will be removed in a later version, use active_subscriptions)
     * @return $this
     */
    public function setSubscriptions($subscriptions)
    {
        
        $this->subscriptions = $subscriptions;
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
     * @param \DateTime $created Date when the customer was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setCreated($created)
    {
        
        $this->created = $created;
        return $this;
    }
    
    /**
     * Gets deleted
     * @return \DateTime
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
  
    /**
     * Sets deleted
     * @param \DateTime $deleted Date when the customer was deleted. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setDeleted($deleted)
    {
        
        $this->deleted = $deleted;
        return $this;
    }
    
    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }
  
    /**
     * Sets first_name
     * @param string $first_name Customer first name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        
        $this->first_name = $first_name;
        return $this;
    }
    
    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }
  
    /**
     * Sets last_name
     * @param string $last_name Customer last name
     * @return $this
     */
    public function setLastName($last_name)
    {
        
        $this->last_name = $last_name;
        return $this;
    }
    
    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }
  
    /**
     * Sets postal_code
     * @param string $postal_code Customer postal code
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        
        $this->postal_code = $postal_code;
        return $this;
    }
    
    /**
     * Gets active_subscriptions
     * @return int
     */
    public function getActiveSubscriptions()
    {
        return $this->active_subscriptions;
    }
  
    /**
     * Sets active_subscriptions
     * @param int $active_subscriptions Number of active subscriptions for this customer
     * @return $this
     */
    public function setActiveSubscriptions($active_subscriptions)
    {
        
        $this->active_subscriptions = $active_subscriptions;
        return $this;
    }
    
    /**
     * Gets trial_active_subscriptions
     * @return int
     */
    public function getTrialActiveSubscriptions()
    {
        return $this->trial_active_subscriptions;
    }
  
    /**
     * Sets trial_active_subscriptions
     * @param int $trial_active_subscriptions Number of active subscriptions in trial for this customer
     * @return $this
     */
    public function setTrialActiveSubscriptions($trial_active_subscriptions)
    {
        
        $this->trial_active_subscriptions = $trial_active_subscriptions;
        return $this;
    }
    
    /**
     * Gets trial_cancelled_subscriptions
     * @return int
     */
    public function getTrialCancelledSubscriptions()
    {
        return $this->trial_cancelled_subscriptions;
    }
  
    /**
     * Sets trial_cancelled_subscriptions
     * @param int $trial_cancelled_subscriptions Number of cancelled subscriptions in trial for this customer
     * @return $this
     */
    public function setTrialCancelledSubscriptions($trial_cancelled_subscriptions)
    {
        
        $this->trial_cancelled_subscriptions = $trial_cancelled_subscriptions;
        return $this;
    }
    
    /**
     * Gets expired_subscriptions
     * @return int
     */
    public function getExpiredSubscriptions()
    {
        return $this->expired_subscriptions;
    }
  
    /**
     * Sets expired_subscriptions
     * @param int $expired_subscriptions Number of expired subscription for this customer
     * @return $this
     */
    public function setExpiredSubscriptions($expired_subscriptions)
    {
        
        $this->expired_subscriptions = $expired_subscriptions;
        return $this;
    }
    
    /**
     * Gets cancelled_subscriptions
     * @return int
     */
    public function getCancelledSubscriptions()
    {
        return $this->cancelled_subscriptions;
    }
  
    /**
     * Sets cancelled_subscriptions
     * @param int $cancelled_subscriptions Number of cancelled subscription for this customer
     * @return $this
     */
    public function setCancelledSubscriptions($cancelled_subscriptions)
    {
        
        $this->cancelled_subscriptions = $cancelled_subscriptions;
        return $this;
    }
    
    /**
     * Gets non_renewing_subscriptions
     * @return int
     */
    public function getNonRenewingSubscriptions()
    {
        return $this->non_renewing_subscriptions;
    }
  
    /**
     * Sets non_renewing_subscriptions
     * @param int $non_renewing_subscriptions Number of non renewing (active subscriptions not renewing at billing period end) subscriptions for this customer
     * @return $this
     */
    public function setNonRenewingSubscriptions($non_renewing_subscriptions)
    {
        
        $this->non_renewing_subscriptions = $non_renewing_subscriptions;
        return $this;
    }
    
    /**
     * Gets failed_invoices
     * @return int
     */
    public function getFailedInvoices()
    {
        return $this->failed_invoices;
    }
  
    /**
     * Sets failed_invoices
     * @param int $failed_invoices Number of failed invoices for this customer
     * @return $this
     */
    public function setFailedInvoices($failed_invoices)
    {
        
        $this->failed_invoices = $failed_invoices;
        return $this;
    }
    
    /**
     * Gets failed_amount
     * @return int
     */
    public function getFailedAmount()
    {
        return $this->failed_amount;
    }
  
    /**
     * Sets failed_amount
     * @param int $failed_amount Summed amount for failed invoices
     * @return $this
     */
    public function setFailedAmount($failed_amount)
    {
        
        $this->failed_amount = $failed_amount;
        return $this;
    }
    
    /**
     * Gets cancelled_invoices
     * @return int
     */
    public function getCancelledInvoices()
    {
        return $this->cancelled_invoices;
    }
  
    /**
     * Sets cancelled_invoices
     * @param int $cancelled_invoices Number of cancelled invoices for this customer
     * @return $this
     */
    public function setCancelledInvoices($cancelled_invoices)
    {
        
        $this->cancelled_invoices = $cancelled_invoices;
        return $this;
    }
    
    /**
     * Gets cancelled_amount
     * @return int
     */
    public function getCancelledAmount()
    {
        return $this->cancelled_amount;
    }
  
    /**
     * Sets cancelled_amount
     * @param int $cancelled_amount Summed amount for cancelled invoices
     * @return $this
     */
    public function setCancelledAmount($cancelled_amount)
    {
        
        $this->cancelled_amount = $cancelled_amount;
        return $this;
    }
    
    /**
     * Gets pending_invoices
     * @return int
     */
    public function getPendingInvoices()
    {
        return $this->pending_invoices;
    }
  
    /**
     * Sets pending_invoices
     * @param int $pending_invoices Number of pending invoices for this customer
     * @return $this
     */
    public function setPendingInvoices($pending_invoices)
    {
        
        $this->pending_invoices = $pending_invoices;
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
     * @param int $pending_amount Summed amount for pending invoices
     * @return $this
     */
    public function setPendingAmount($pending_amount)
    {
        
        $this->pending_amount = $pending_amount;
        return $this;
    }
    
    /**
     * Gets dunning_invoices
     * @return int
     */
    public function getDunningInvoices()
    {
        return $this->dunning_invoices;
    }
  
    /**
     * Sets dunning_invoices
     * @param int $dunning_invoices Number of dunning invoices for this customer
     * @return $this
     */
    public function setDunningInvoices($dunning_invoices)
    {
        
        $this->dunning_invoices = $dunning_invoices;
        return $this;
    }
    
    /**
     * Gets dunning_amount
     * @return int
     */
    public function getDunningAmount()
    {
        return $this->dunning_amount;
    }
  
    /**
     * Sets dunning_amount
     * @param int $dunning_amount Summed amount for dunning invoices
     * @return $this
     */
    public function setDunningAmount($dunning_amount)
    {
        
        $this->dunning_amount = $dunning_amount;
        return $this;
    }
    
    /**
     * Gets settled_invoices
     * @return int
     */
    public function getSettledInvoices()
    {
        return $this->settled_invoices;
    }
  
    /**
     * Sets settled_invoices
     * @param int $settled_invoices Number of settled invoices for this customer
     * @return $this
     */
    public function setSettledInvoices($settled_invoices)
    {
        
        $this->settled_invoices = $settled_invoices;
        return $this;
    }
    
    /**
     * Gets settled_amount
     * @return int
     */
    public function getSettledAmount()
    {
        return $this->settled_amount;
    }
  
    /**
     * Sets settled_amount
     * @param int $settled_amount Summed settled amount
     * @return $this
     */
    public function setSettledAmount($settled_amount)
    {
        
        $this->settled_amount = $settled_amount;
        return $this;
    }
    
    /**
     * Gets refunded_amount
     * @return int
     */
    public function getRefundedAmount()
    {
        return $this->refunded_amount;
    }
  
    /**
     * Sets refunded_amount
     * @param int $refunded_amount Summed refunded amount
     * @return $this
     */
    public function setRefundedAmount($refunded_amount)
    {
        
        $this->refunded_amount = $refunded_amount;
        return $this;
    }
    
    /**
     * Gets pending_additional_costs
     * @return int
     */
    public function getPendingAdditionalCosts()
    {
        return $this->pending_additional_costs;
    }
  
    /**
     * Sets pending_additional_costs
     * @param int $pending_additional_costs Number of pending additional costs
     * @return $this
     */
    public function setPendingAdditionalCosts($pending_additional_costs)
    {
        
        $this->pending_additional_costs = $pending_additional_costs;
        return $this;
    }
    
    /**
     * Gets pending_additional_cost_amount
     * @return int
     */
    public function getPendingAdditionalCostAmount()
    {
        return $this->pending_additional_cost_amount;
    }
  
    /**
     * Sets pending_additional_cost_amount
     * @param int $pending_additional_cost_amount Summed amount of pending additional costs
     * @return $this
     */
    public function setPendingAdditionalCostAmount($pending_additional_cost_amount)
    {
        
        $this->pending_additional_cost_amount = $pending_additional_cost_amount;
        return $this;
    }
    
    /**
     * Gets transferred_additional_costs
     * @return int
     */
    public function getTransferredAdditionalCosts()
    {
        return $this->transferred_additional_costs;
    }
  
    /**
     * Sets transferred_additional_costs
     * @param int $transferred_additional_costs Number of additional costs that have been applied to invoices
     * @return $this
     */
    public function setTransferredAdditionalCosts($transferred_additional_costs)
    {
        
        $this->transferred_additional_costs = $transferred_additional_costs;
        return $this;
    }
    
    /**
     * Gets transferred_additional_cost_amount
     * @return int
     */
    public function getTransferredAdditionalCostAmount()
    {
        return $this->transferred_additional_cost_amount;
    }
  
    /**
     * Sets transferred_additional_cost_amount
     * @param int $transferred_additional_cost_amount Summed amount of additional costs that have been applied to invoices
     * @return $this
     */
    public function setTransferredAdditionalCostAmount($transferred_additional_cost_amount)
    {
        
        $this->transferred_additional_cost_amount = $transferred_additional_cost_amount;
        return $this;
    }
    
    /**
     * Gets pending_credits
     * @return int
     */
    public function getPendingCredits()
    {
        return $this->pending_credits;
    }
  
    /**
     * Sets pending_credits
     * @param int $pending_credits Number of credits that have not fully been applied to invoices
     * @return $this
     */
    public function setPendingCredits($pending_credits)
    {
        
        $this->pending_credits = $pending_credits;
        return $this;
    }
    
    /**
     * Gets pending_credit_amount
     * @return int
     */
    public function getPendingCreditAmount()
    {
        return $this->pending_credit_amount;
    }
  
    /**
     * Sets pending_credit_amount
     * @param int $pending_credit_amount Summed credit amount not yet applied to invoices
     * @return $this
     */
    public function setPendingCreditAmount($pending_credit_amount)
    {
        
        $this->pending_credit_amount = $pending_credit_amount;
        return $this;
    }
    
    /**
     * Gets transferred_credits
     * @return int
     */
    public function getTransferredCredits()
    {
        return $this->transferred_credits;
    }
  
    /**
     * Sets transferred_credits
     * @param int $transferred_credits Number of credits that have fully been applied to invoices
     * @return $this
     */
    public function setTransferredCredits($transferred_credits)
    {
        
        $this->transferred_credits = $transferred_credits;
        return $this;
    }
    
    /**
     * Gets transferred_credit_amount
     * @return int
     */
    public function getTransferredCreditAmount()
    {
        return $this->transferred_credit_amount;
    }
  
    /**
     * Sets transferred_credit_amount
     * @param int $transferred_credit_amount Summed credit amount that have been applied to invoices
     * @return $this
     */
    public function setTransferredCreditAmount($transferred_credit_amount)
    {
        
        $this->transferred_credit_amount = $transferred_credit_amount;
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
