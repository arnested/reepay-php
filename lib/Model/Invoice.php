<?php
/**
 * Invoice
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
 * Invoice Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Invoice implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'customer' => 'string',
        'subscription' => 'string',
        'plan' => 'string',
        'state' => 'string',
        'amount' => 'int',
        'number' => 'int',
        'currency' => 'string',
        'due' => '\DateTime',
        'failed' => '\DateTime',
        'settled' => '\DateTime',
        'cancelled' => '\DateTime',
        'credits' => '\Swagger\Client\Model\CreditInvoice[]',
        'adjustments' => '\Swagger\Client\Model\InvoiceAdjustment[]',
        'created' => '\DateTime',
        'plan_version' => 'int',
        'dunning_plan' => 'string',
        'discount_amount' => 'int',
        'org_amount' => 'int',
        'amount_vat' => 'int',
        'amount_ex_vat' => 'int',
        'settled_amount' => 'int',
        'refunded_amount' => 'int',
        'period_number' => 'int',
        'order_lines' => '\Swagger\Client\Model\OrderLine[]',
        'additional_costs' => 'string[]',
        'card_transactions' => '\Swagger\Client\Model\CardTransaction[]',
        'manual_transactions' => '\Swagger\Client\Model\ManualTransaction[]',
        'credit_notes' => '\Swagger\Client\Model\InvoiceCreditNote[]',
        'dunning_start' => '\DateTime',
        'dunning_count' => 'int',
        'dunning_expired' => '\DateTime',
        'period_from' => '\DateTime',
        'period_to' => '\DateTime'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'customer' => 'customer',
        'subscription' => 'subscription',
        'plan' => 'plan',
        'state' => 'state',
        'amount' => 'amount',
        'number' => 'number',
        'currency' => 'currency',
        'due' => 'due',
        'failed' => 'failed',
        'settled' => 'settled',
        'cancelled' => 'cancelled',
        'credits' => 'credits',
        'adjustments' => 'adjustments',
        'created' => 'created',
        'plan_version' => 'plan_version',
        'dunning_plan' => 'dunning_plan',
        'discount_amount' => 'discount_amount',
        'org_amount' => 'org_amount',
        'amount_vat' => 'amount_vat',
        'amount_ex_vat' => 'amount_ex_vat',
        'settled_amount' => 'settled_amount',
        'refunded_amount' => 'refunded_amount',
        'period_number' => 'period_number',
        'order_lines' => 'order_lines',
        'additional_costs' => 'additional_costs',
        'card_transactions' => 'card_transactions',
        'manual_transactions' => 'manual_transactions',
        'credit_notes' => 'credit_notes',
        'dunning_start' => 'dunning_start',
        'dunning_count' => 'dunning_count',
        'dunning_expired' => 'dunning_expired',
        'period_from' => 'period_from',
        'period_to' => 'period_to'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'customer' => 'setCustomer',
        'subscription' => 'setSubscription',
        'plan' => 'setPlan',
        'state' => 'setState',
        'amount' => 'setAmount',
        'number' => 'setNumber',
        'currency' => 'setCurrency',
        'due' => 'setDue',
        'failed' => 'setFailed',
        'settled' => 'setSettled',
        'cancelled' => 'setCancelled',
        'credits' => 'setCredits',
        'adjustments' => 'setAdjustments',
        'created' => 'setCreated',
        'plan_version' => 'setPlanVersion',
        'dunning_plan' => 'setDunningPlan',
        'discount_amount' => 'setDiscountAmount',
        'org_amount' => 'setOrgAmount',
        'amount_vat' => 'setAmountVat',
        'amount_ex_vat' => 'setAmountExVat',
        'settled_amount' => 'setSettledAmount',
        'refunded_amount' => 'setRefundedAmount',
        'period_number' => 'setPeriodNumber',
        'order_lines' => 'setOrderLines',
        'additional_costs' => 'setAdditionalCosts',
        'card_transactions' => 'setCardTransactions',
        'manual_transactions' => 'setManualTransactions',
        'credit_notes' => 'setCreditNotes',
        'dunning_start' => 'setDunningStart',
        'dunning_count' => 'setDunningCount',
        'dunning_expired' => 'setDunningExpired',
        'period_from' => 'setPeriodFrom',
        'period_to' => 'setPeriodTo'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'customer' => 'getCustomer',
        'subscription' => 'getSubscription',
        'plan' => 'getPlan',
        'state' => 'getState',
        'amount' => 'getAmount',
        'number' => 'getNumber',
        'currency' => 'getCurrency',
        'due' => 'getDue',
        'failed' => 'getFailed',
        'settled' => 'getSettled',
        'cancelled' => 'getCancelled',
        'credits' => 'getCredits',
        'adjustments' => 'getAdjustments',
        'created' => 'getCreated',
        'plan_version' => 'getPlanVersion',
        'dunning_plan' => 'getDunningPlan',
        'discount_amount' => 'getDiscountAmount',
        'org_amount' => 'getOrgAmount',
        'amount_vat' => 'getAmountVat',
        'amount_ex_vat' => 'getAmountExVat',
        'settled_amount' => 'getSettledAmount',
        'refunded_amount' => 'getRefundedAmount',
        'period_number' => 'getPeriodNumber',
        'order_lines' => 'getOrderLines',
        'additional_costs' => 'getAdditionalCosts',
        'card_transactions' => 'getCardTransactions',
        'manual_transactions' => 'getManualTransactions',
        'credit_notes' => 'getCreditNotes',
        'dunning_start' => 'getDunningStart',
        'dunning_count' => 'getDunningCount',
        'dunning_expired' => 'getDunningExpired',
        'period_from' => 'getPeriodFrom',
        'period_to' => 'getPeriodTo'
    );
  
    
    /**
      * $id Invoice id assigned by Reepay
      * @var string
      */
    protected $id;
    
    /**
      * $customer Customer handle
      * @var string
      */
    protected $customer;
    
    /**
      * $subscription Subscription handle, will be null for a one-time customer invoice
      * @var string
      */
    protected $subscription;
    
    /**
      * $plan Subscription plan handle for the plan used to automatically create the invoice. Will be null for one-time invoices.
      * @var string
      */
    protected $plan;
    
    /**
      * $state The invoice state one of the following: `pending`, `dunning`, `settled`, `cancelled`, `failed`
      * @var string
      */
    protected $state;
    
    /**
      * $amount The invoice amount including VAT
      * @var int
      */
    protected $amount;
    
    /**
      * $number Sequential invoice number
      * @var int
      */
    protected $number;
    
    /**
      * $currency Currency for the account in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code
      * @var string
      */
    protected $currency;
    
    /**
      * $due When is the invoice due, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $due;
    
    /**
      * $failed When the invoice failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $failed;
    
    /**
      * $settled When the invoice settled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $settled;
    
    /**
      * $cancelled When the invoice was cancelled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $cancelled;
    
    /**
      * $credits Credits applied to invoice
      * @var \Swagger\Client\Model\CreditInvoice[]
      */
    protected $credits;
    
    /**
      * $adjustments Invoice adjustments
      * @var \Swagger\Client\Model\InvoiceAdjustment[]
      */
    protected $adjustments;
    
    /**
      * $created When the invoice was created, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $created;
    
    /**
      * $plan_version Subscription plan version
      * @var int
      */
    protected $plan_version;
    
    /**
      * $dunning_plan Dunning plan handle
      * @var string
      */
    protected $dunning_plan;
    
    /**
      * $discount_amount The potential discount amount deducted from the invoice amount including VAT
      * @var int
      */
    protected $discount_amount;
    
    /**
      * $org_amount The invoice original amount including VAT, may differ from amount if adjustments have been applied for the invoice
      * @var int
      */
    protected $org_amount;
    
    /**
      * $amount_vat The invoice vat amount calculated as rounded summed fractional vats for each orderline
      * @var int
      */
    protected $amount_vat;
    
    /**
      * $amount_ex_vat The invoice amount without vat
      * @var int
      */
    protected $amount_ex_vat;
    
    /**
      * $settled_amount Settled amount
      * @var int
      */
    protected $settled_amount;
    
    /**
      * $refunded_amount Refunded amount
      * @var int
      */
    protected $refunded_amount;
    
    /**
      * $period_number The subscription period this invoice is for
      * @var int
      */
    protected $period_number;
    
    /**
      * $order_lines Order lines for invoice sorted by descending timestamp
      * @var \Swagger\Client\Model\OrderLine[]
      */
    protected $order_lines;
    
    /**
      * $additional_costs Additional costs for invoice
      * @var string[]
      */
    protected $additional_costs;
    
    /**
      * $card_transactions Invoice card transactions
      * @var \Swagger\Client\Model\CardTransaction[]
      */
    protected $card_transactions;
    
    /**
      * $manual_transactions Invoice manual transactions
      * @var \Swagger\Client\Model\ManualTransaction[]
      */
    protected $manual_transactions;
    
    /**
      * $credit_notes Invoice credit notes
      * @var \Swagger\Client\Model\InvoiceCreditNote[]
      */
    protected $credit_notes;
    
    /**
      * $dunning_start When dunning for the invoice was started, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $dunning_start;
    
    /**
      * $dunning_count Number of dunning events for invoice (number of reminders sent)
      * @var int
      */
    protected $dunning_count;
    
    /**
      * $dunning_expired When dunning for the invoice expired, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $dunning_expired;
    
    /**
      * $period_from The start of billing period if the invoice is for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $period_from;
    
    /**
      * $period_to The end of billing period if the invoice is for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $period_to;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->customer = $data["customer"];
            $this->subscription = $data["subscription"];
            $this->plan = $data["plan"];
            $this->state = $data["state"];
            $this->amount = $data["amount"];
            $this->number = $data["number"];
            $this->currency = $data["currency"];
            $this->due = $data["due"];
            $this->failed = $data["failed"];
            $this->settled = $data["settled"];
            $this->cancelled = $data["cancelled"];
            $this->credits = $data["credits"];
            $this->adjustments = $data["adjustments"];
            $this->created = $data["created"];
            $this->plan_version = $data["plan_version"];
            $this->dunning_plan = $data["dunning_plan"];
            $this->discount_amount = $data["discount_amount"];
            $this->org_amount = $data["org_amount"];
            $this->amount_vat = $data["amount_vat"];
            $this->amount_ex_vat = $data["amount_ex_vat"];
            $this->settled_amount = $data["settled_amount"];
            $this->refunded_amount = $data["refunded_amount"];
            $this->period_number = $data["period_number"];
            $this->order_lines = $data["order_lines"];
            $this->additional_costs = $data["additional_costs"];
            $this->card_transactions = $data["card_transactions"];
            $this->manual_transactions = $data["manual_transactions"];
            $this->credit_notes = $data["credit_notes"];
            $this->dunning_start = $data["dunning_start"];
            $this->dunning_count = $data["dunning_count"];
            $this->dunning_expired = $data["dunning_expired"];
            $this->period_from = $data["period_from"];
            $this->period_to = $data["period_to"];
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
     * @param string $id Invoice id assigned by Reepay
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
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
     * Gets subscription
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }
  
    /**
     * Sets subscription
     * @param string $subscription Subscription handle, will be null for a one-time customer invoice
     * @return $this
     */
    public function setSubscription($subscription)
    {
        
        $this->subscription = $subscription;
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
     * @param string $plan Subscription plan handle for the plan used to automatically create the invoice. Will be null for one-time invoices.
     * @return $this
     */
    public function setPlan($plan)
    {
        
        $this->plan = $plan;
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
     * @param string $state The invoice state one of the following: `pending`, `dunning`, `settled`, `cancelled`, `failed`
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array("pending", "dunning", "settled", "cancelled", "failed");
        if (!in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'pending', 'dunning', 'settled', 'cancelled', 'failed'");
        }
        $this->state = $state;
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
     * @param int $amount The invoice amount including VAT
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets number
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }
  
    /**
     * Sets number
     * @param int $number Sequential invoice number
     * @return $this
     */
    public function setNumber($number)
    {
        
        $this->number = $number;
        return $this;
    }
    
    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
  
    /**
     * Sets currency
     * @param string $currency Currency for the account in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code
     * @return $this
     */
    public function setCurrency($currency)
    {
        
        $this->currency = $currency;
        return $this;
    }
    
    /**
     * Gets due
     * @return \DateTime
     */
    public function getDue()
    {
        return $this->due;
    }
  
    /**
     * Sets due
     * @param \DateTime $due When is the invoice due, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setDue($due)
    {
        
        $this->due = $due;
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
     * @param \DateTime $failed When the invoice failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setFailed($failed)
    {
        
        $this->failed = $failed;
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
     * @param \DateTime $settled When the invoice settled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setSettled($settled)
    {
        
        $this->settled = $settled;
        return $this;
    }
    
    /**
     * Gets cancelled
     * @return \DateTime
     */
    public function getCancelled()
    {
        return $this->cancelled;
    }
  
    /**
     * Sets cancelled
     * @param \DateTime $cancelled When the invoice was cancelled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setCancelled($cancelled)
    {
        
        $this->cancelled = $cancelled;
        return $this;
    }
    
    /**
     * Gets credits
     * @return \Swagger\Client\Model\CreditInvoice[]
     */
    public function getCredits()
    {
        return $this->credits;
    }
  
    /**
     * Sets credits
     * @param \Swagger\Client\Model\CreditInvoice[] $credits Credits applied to invoice
     * @return $this
     */
    public function setCredits($credits)
    {
        
        $this->credits = $credits;
        return $this;
    }
    
    /**
     * Gets adjustments
     * @return \Swagger\Client\Model\InvoiceAdjustment[]
     */
    public function getAdjustments()
    {
        return $this->adjustments;
    }
  
    /**
     * Sets adjustments
     * @param \Swagger\Client\Model\InvoiceAdjustment[] $adjustments Invoice adjustments
     * @return $this
     */
    public function setAdjustments($adjustments)
    {
        
        $this->adjustments = $adjustments;
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
     * @param \DateTime $created When the invoice was created, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setCreated($created)
    {
        
        $this->created = $created;
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
     * @param int $plan_version Subscription plan version
     * @return $this
     */
    public function setPlanVersion($plan_version)
    {
        
        $this->plan_version = $plan_version;
        return $this;
    }
    
    /**
     * Gets dunning_plan
     * @return string
     */
    public function getDunningPlan()
    {
        return $this->dunning_plan;
    }
  
    /**
     * Sets dunning_plan
     * @param string $dunning_plan Dunning plan handle
     * @return $this
     */
    public function setDunningPlan($dunning_plan)
    {
        
        $this->dunning_plan = $dunning_plan;
        return $this;
    }
    
    /**
     * Gets discount_amount
     * @return int
     */
    public function getDiscountAmount()
    {
        return $this->discount_amount;
    }
  
    /**
     * Sets discount_amount
     * @param int $discount_amount The potential discount amount deducted from the invoice amount including VAT
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        
        $this->discount_amount = $discount_amount;
        return $this;
    }
    
    /**
     * Gets org_amount
     * @return int
     */
    public function getOrgAmount()
    {
        return $this->org_amount;
    }
  
    /**
     * Sets org_amount
     * @param int $org_amount The invoice original amount including VAT, may differ from amount if adjustments have been applied for the invoice
     * @return $this
     */
    public function setOrgAmount($org_amount)
    {
        
        $this->org_amount = $org_amount;
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
     * @param int $amount_vat The invoice vat amount calculated as rounded summed fractional vats for each orderline
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
     * @param int $amount_ex_vat The invoice amount without vat
     * @return $this
     */
    public function setAmountExVat($amount_ex_vat)
    {
        
        $this->amount_ex_vat = $amount_ex_vat;
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
     * @param int $settled_amount Settled amount
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
     * @param int $refunded_amount Refunded amount
     * @return $this
     */
    public function setRefundedAmount($refunded_amount)
    {
        
        $this->refunded_amount = $refunded_amount;
        return $this;
    }
    
    /**
     * Gets period_number
     * @return int
     */
    public function getPeriodNumber()
    {
        return $this->period_number;
    }
  
    /**
     * Sets period_number
     * @param int $period_number The subscription period this invoice is for
     * @return $this
     */
    public function setPeriodNumber($period_number)
    {
        
        $this->period_number = $period_number;
        return $this;
    }
    
    /**
     * Gets order_lines
     * @return \Swagger\Client\Model\OrderLine[]
     */
    public function getOrderLines()
    {
        return $this->order_lines;
    }
  
    /**
     * Sets order_lines
     * @param \Swagger\Client\Model\OrderLine[] $order_lines Order lines for invoice sorted by descending timestamp
     * @return $this
     */
    public function setOrderLines($order_lines)
    {
        
        $this->order_lines = $order_lines;
        return $this;
    }
    
    /**
     * Gets additional_costs
     * @return string[]
     */
    public function getAdditionalCosts()
    {
        return $this->additional_costs;
    }
  
    /**
     * Sets additional_costs
     * @param string[] $additional_costs Additional costs for invoice
     * @return $this
     */
    public function setAdditionalCosts($additional_costs)
    {
        
        $this->additional_costs = $additional_costs;
        return $this;
    }
    
    /**
     * Gets card_transactions
     * @return \Swagger\Client\Model\CardTransaction[]
     */
    public function getCardTransactions()
    {
        return $this->card_transactions;
    }
  
    /**
     * Sets card_transactions
     * @param \Swagger\Client\Model\CardTransaction[] $card_transactions Invoice card transactions
     * @return $this
     */
    public function setCardTransactions($card_transactions)
    {
        
        $this->card_transactions = $card_transactions;
        return $this;
    }
    
    /**
     * Gets manual_transactions
     * @return \Swagger\Client\Model\ManualTransaction[]
     */
    public function getManualTransactions()
    {
        return $this->manual_transactions;
    }
  
    /**
     * Sets manual_transactions
     * @param \Swagger\Client\Model\ManualTransaction[] $manual_transactions Invoice manual transactions
     * @return $this
     */
    public function setManualTransactions($manual_transactions)
    {
        
        $this->manual_transactions = $manual_transactions;
        return $this;
    }
    
    /**
     * Gets credit_notes
     * @return \Swagger\Client\Model\InvoiceCreditNote[]
     */
    public function getCreditNotes()
    {
        return $this->credit_notes;
    }
  
    /**
     * Sets credit_notes
     * @param \Swagger\Client\Model\InvoiceCreditNote[] $credit_notes Invoice credit notes
     * @return $this
     */
    public function setCreditNotes($credit_notes)
    {
        
        $this->credit_notes = $credit_notes;
        return $this;
    }
    
    /**
     * Gets dunning_start
     * @return \DateTime
     */
    public function getDunningStart()
    {
        return $this->dunning_start;
    }
  
    /**
     * Sets dunning_start
     * @param \DateTime $dunning_start When dunning for the invoice was started, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setDunningStart($dunning_start)
    {
        
        $this->dunning_start = $dunning_start;
        return $this;
    }
    
    /**
     * Gets dunning_count
     * @return int
     */
    public function getDunningCount()
    {
        return $this->dunning_count;
    }
  
    /**
     * Sets dunning_count
     * @param int $dunning_count Number of dunning events for invoice (number of reminders sent)
     * @return $this
     */
    public function setDunningCount($dunning_count)
    {
        
        $this->dunning_count = $dunning_count;
        return $this;
    }
    
    /**
     * Gets dunning_expired
     * @return \DateTime
     */
    public function getDunningExpired()
    {
        return $this->dunning_expired;
    }
  
    /**
     * Sets dunning_expired
     * @param \DateTime $dunning_expired When dunning for the invoice expired, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setDunningExpired($dunning_expired)
    {
        
        $this->dunning_expired = $dunning_expired;
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
     * @param \DateTime $period_from The start of billing period if the invoice is for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
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
     * @param \DateTime $period_to The end of billing period if the invoice is for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setPeriodTo($period_to)
    {
        
        $this->period_to = $period_to;
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