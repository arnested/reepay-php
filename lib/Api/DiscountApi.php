<?php
/**
 * DiscountApi
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

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * DiscountApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DiscountApi
{

    /**
     * API Client
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost/');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return DiscountApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * getDiscounts
     *
     * Get list of discounts
     *
     * @param int $page Page number to get (required)
     * @param int $size Page size to use (required)
     * @param string $search Optional search expression (required)
     * @param string $sort Optional sorting expression (required)
     * @return \Swagger\Client\Model\DiscountSearch
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getDiscounts($page, $size, $search, $sort)
    {
        list($response, $statusCode, $httpHeader) = $this->getDiscountsWithHttpInfo ($page, $size, $search, $sort);
        return $response; 
    }


    /**
     * getDiscountsWithHttpInfo
     *
     * Get list of discounts
     *
     * @param int $page Page number to get (required)
     * @param int $size Page size to use (required)
     * @param string $search Optional search expression (required)
     * @param string $sort Optional sorting expression (required)
     * @return Array of \Swagger\Client\Model\DiscountSearch, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getDiscountsWithHttpInfo($page, $size, $search, $sort)
    {
        
        // verify the required parameter 'page' is set
        if ($page === null) {
            throw new \InvalidArgumentException('Missing the required parameter $page when calling getDiscounts');
        }
        // verify the required parameter 'size' is set
        if ($size === null) {
            throw new \InvalidArgumentException('Missing the required parameter $size when calling getDiscounts');
        }
        // verify the required parameter 'search' is set
        if ($search === null) {
            throw new \InvalidArgumentException('Missing the required parameter $search when calling getDiscounts');
        }
        // verify the required parameter 'sort' is set
        if ($sort === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sort when calling getDiscounts');
        }
  
        // parse inputs
        $resourcePath = "/v1/discount";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }// query params
        
        if ($size !== null) {
            $queryParams['size'] = $this->apiClient->getSerializer()->toQueryValue($size);
        }// query params
        
        if ($search !== null) {
            $queryParams['search'] = $this->apiClient->getSerializer()->toQueryValue($search);
        }// query params
        
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\DiscountSearch'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DiscountSearch', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DiscountSearch', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * createDiscount
     *
     * Create discount
     *
     * @param \Swagger\Client\Model\CreateDiscount $body  (optional)
     * @return \Swagger\Client\Model\Discount
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createDiscount($body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->createDiscountWithHttpInfo ($body);
        return $response; 
    }


    /**
     * createDiscountWithHttpInfo
     *
     * Create discount
     *
     * @param \Swagger\Client\Model\CreateDiscount $body  (optional)
     * @return Array of \Swagger\Client\Model\Discount, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createDiscountWithHttpInfo($body = null)
    {
        
  
        // parse inputs
        $resourcePath = "/v1/discount";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        
        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Discount'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Discount', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Discount', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getDiscount
     *
     * Get discount
     *
     * @param string $handle Discount handle (required)
     * @return \Swagger\Client\Model\Discount
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getDiscount($handle)
    {
        list($response, $statusCode, $httpHeader) = $this->getDiscountWithHttpInfo ($handle);
        return $response; 
    }


    /**
     * getDiscountWithHttpInfo
     *
     * Get discount
     *
     * @param string $handle Discount handle (required)
     * @return Array of \Swagger\Client\Model\Discount, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getDiscountWithHttpInfo($handle)
    {
        
        // verify the required parameter 'handle' is set
        if ($handle === null) {
            throw new \InvalidArgumentException('Missing the required parameter $handle when calling getDiscount');
        }
  
        // parse inputs
        $resourcePath = "/v1/discount/{handle}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($handle !== null) {
            $resourcePath = str_replace(
                "{" . "handle" . "}",
                $this->apiClient->getSerializer()->toPathValue($handle),
                $resourcePath
            );
        }
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Discount'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Discount', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Discount', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * deleteDiscount
     *
     * Delete discount
     *
     * @param string $handle Discount handle (required)
     * @return \Swagger\Client\Model\Discount
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteDiscount($handle)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteDiscountWithHttpInfo ($handle);
        return $response; 
    }


    /**
     * deleteDiscountWithHttpInfo
     *
     * Delete discount
     *
     * @param string $handle Discount handle (required)
     * @return Array of \Swagger\Client\Model\Discount, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteDiscountWithHttpInfo($handle)
    {
        
        // verify the required parameter 'handle' is set
        if ($handle === null) {
            throw new \InvalidArgumentException('Missing the required parameter $handle when calling deleteDiscount');
        }
  
        // parse inputs
        $resourcePath = "/v1/discount/{handle}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "DELETE";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($handle !== null) {
            $resourcePath = str_replace(
                "{" . "handle" . "}",
                $this->apiClient->getSerializer()->toPathValue($handle),
                $resourcePath
            );
        }
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Discount'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Discount', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Discount', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * undeleteDiscount
     *
     * Undelete discount
     *
     * @param string $handle Discount handle (required)
     * @return \Swagger\Client\Model\Discount
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function undeleteDiscount($handle)
    {
        list($response, $statusCode, $httpHeader) = $this->undeleteDiscountWithHttpInfo ($handle);
        return $response; 
    }


    /**
     * undeleteDiscountWithHttpInfo
     *
     * Undelete discount
     *
     * @param string $handle Discount handle (required)
     * @return Array of \Swagger\Client\Model\Discount, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function undeleteDiscountWithHttpInfo($handle)
    {
        
        // verify the required parameter 'handle' is set
        if ($handle === null) {
            throw new \InvalidArgumentException('Missing the required parameter $handle when calling undeleteDiscount');
        }
  
        // parse inputs
        $resourcePath = "/v1/discount/{handle}/undelete";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($handle !== null) {
            $resourcePath = str_replace(
                "{" . "handle" . "}",
                $this->apiClient->getSerializer()->toPathValue($handle),
                $resourcePath
            );
        }
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Discount'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Discount', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Discount', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}