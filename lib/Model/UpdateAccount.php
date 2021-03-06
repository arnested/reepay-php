<?php
/**
 * UpdateAccount
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
 * UpdateAccount Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateAccount implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'handle' => 'string',
        'currency' => 'string',
        'name' => 'string',
        'address' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'locale' => 'string',
        'timezone' => 'string',
        'country' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'vat' => 'string',
        'website' => 'string',
        'logo' => 'string',
        'postal_code' => 'string',
        'default_vat' => 'float'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'handle' => 'handle',
        'currency' => 'currency',
        'name' => 'name',
        'address' => 'address',
        'address2' => 'address2',
        'city' => 'city',
        'locale' => 'locale',
        'timezone' => 'timezone',
        'country' => 'country',
        'email' => 'email',
        'phone' => 'phone',
        'vat' => 'vat',
        'website' => 'website',
        'logo' => 'logo',
        'postal_code' => 'postal_code',
        'default_vat' => 'default_vat'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'handle' => 'setHandle',
        'currency' => 'setCurrency',
        'name' => 'setName',
        'address' => 'setAddress',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'locale' => 'setLocale',
        'timezone' => 'setTimezone',
        'country' => 'setCountry',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'vat' => 'setVat',
        'website' => 'setWebsite',
        'logo' => 'setLogo',
        'postal_code' => 'setPostalCode',
        'default_vat' => 'setDefaultVat'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'handle' => 'getHandle',
        'currency' => 'getCurrency',
        'name' => 'getName',
        'address' => 'getAddress',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'locale' => 'getLocale',
        'timezone' => 'getTimezone',
        'country' => 'getCountry',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'vat' => 'getVat',
        'website' => 'getWebsite',
        'logo' => 'getLogo',
        'postal_code' => 'getPostalCode',
        'default_vat' => 'getDefaultVat'
    );
  
    
    /**
      * $handle Per organisation unique handle for the account
      * @var string
      */
    protected $handle;
    
    /**
      * $currency Currency for the account in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code
      * @var string
      */
    protected $currency;
    
    /**
      * $name Account name
      * @var string
      */
    protected $name;
    
    /**
      * $address Account address
      * @var string
      */
    protected $address;
    
    /**
      * $address2 Account address2
      * @var string
      */
    protected $address2;
    
    /**
      * $city Account city
      * @var string
      */
    protected $city;
    
    /**
      * $locale Account locale on the form 'language_country'
      * @var string
      */
    protected $locale;
    
    /**
      * $timezone Account time zone ID as abbreviation or full name. See [Wikipedia](http://en.wikipedia.org/wiki/List_of_tz_database_time_zones)
      * @var string
      */
    protected $timezone;
    
    /**
      * $country Account country in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)
      * @var string
      */
    protected $country;
    
    /**
      * $email Account email
      * @var string
      */
    protected $email;
    
    /**
      * $phone Account phone
      * @var string
      */
    protected $phone;
    
    /**
      * $vat Account vat number
      * @var string
      */
    protected $vat;
    
    /**
      * $website Account website
      * @var string
      */
    protected $website;
    
    /**
      * $logo Account logo url
      * @var string
      */
    protected $logo;
    
    /**
      * $postal_code Account postal code
      * @var string
      */
    protected $postal_code;
    
    /**
      * $default_vat Default vat for account
      * @var float
      */
    protected $default_vat;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->handle = $data["handle"];
            $this->currency = $data["currency"];
            $this->name = $data["name"];
            $this->address = $data["address"];
            $this->address2 = $data["address2"];
            $this->city = $data["city"];
            $this->locale = $data["locale"];
            $this->timezone = $data["timezone"];
            $this->country = $data["country"];
            $this->email = $data["email"];
            $this->phone = $data["phone"];
            $this->vat = $data["vat"];
            $this->website = $data["website"];
            $this->logo = $data["logo"];
            $this->postal_code = $data["postal_code"];
            $this->default_vat = $data["default_vat"];
        }
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
     * @param string $handle Per organisation unique handle for the account
     * @return $this
     */
    public function setHandle($handle)
    {
        
        $this->handle = $handle;
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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name Account name
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
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
     * @param string $address Account address
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
     * @param string $address2 Account address2
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
     * @param string $city Account city
     * @return $this
     */
    public function setCity($city)
    {
        
        $this->city = $city;
        return $this;
    }
    
    /**
     * Gets locale
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }
  
    /**
     * Sets locale
     * @param string $locale Account locale on the form 'language_country'
     * @return $this
     */
    public function setLocale($locale)
    {
        
        $this->locale = $locale;
        return $this;
    }
    
    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }
  
    /**
     * Sets timezone
     * @param string $timezone Account time zone ID as abbreviation or full name. See [Wikipedia](http://en.wikipedia.org/wiki/List_of_tz_database_time_zones)
     * @return $this
     */
    public function setTimezone($timezone)
    {
        
        $this->timezone = $timezone;
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
     * @param string $country Account country in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)
     * @return $this
     */
    public function setCountry($country)
    {
        
        $this->country = $country;
        return $this;
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
     * @param string $email Account email
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
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
     * @param string $phone Account phone
     * @return $this
     */
    public function setPhone($phone)
    {
        
        $this->phone = $phone;
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
     * @param string $vat Account vat number
     * @return $this
     */
    public function setVat($vat)
    {
        
        $this->vat = $vat;
        return $this;
    }
    
    /**
     * Gets website
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }
  
    /**
     * Sets website
     * @param string $website Account website
     * @return $this
     */
    public function setWebsite($website)
    {
        
        $this->website = $website;
        return $this;
    }
    
    /**
     * Gets logo
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }
  
    /**
     * Sets logo
     * @param string $logo Account logo url
     * @return $this
     */
    public function setLogo($logo)
    {
        
        $this->logo = $logo;
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
     * @param string $postal_code Account postal code
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        
        $this->postal_code = $postal_code;
        return $this;
    }
    
    /**
     * Gets default_vat
     * @return float
     */
    public function getDefaultVat()
    {
        return $this->default_vat;
    }
  
    /**
     * Sets default_vat
     * @param float $default_vat Default vat for account
     * @return $this
     */
    public function setDefaultVat($default_vat)
    {
        
        $this->default_vat = $default_vat;
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
