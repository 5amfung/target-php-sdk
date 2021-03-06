<?php
/**
 * Copyright 2020 Adobe. All rights reserved.
 * This file is licensed to you under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License. You may obtain a copy
 * of the License at http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under
 * the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR REPRESENTATIONS
 * OF ANY KIND, either express or implied. See the License for the specific language
 * governing permissions and limitations under the License.
 */

/**
 * VisitorId
 *
 * PHP version 5
 *
 * @category Class
 * @package  Adobe\Target\Delivery\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Adobe Target Delivery API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Adobe\Target\Delivery\v1\Model;

use \ArrayAccess;
use \Adobe\Target\Delivery\v1\ObjectSerializer;

/**
 * VisitorId Class Doc Comment
 *
 * @category Class
 * @description Object that contains the identifiers for the visitor. If no id is provided in the first request, Target will generate a VisitorId with a tntId. The code that runs on the client side is then responsible for passing this tntId value on all subsequent calls.  Validation   * Either tntId, thirdPartyId or maketingCloudVisistorId required.
 * @package  Adobe\Target\Delivery\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VisitorId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VisitorId';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tntId' => 'string',
        'thirdPartyId' => 'string',
        'marketingCloudVisitorId' => 'string',
        'customerIds' => '\Adobe\Target\Delivery\v1\Model\CustomerId[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'tntId' => null,
        'thirdPartyId' => null,
        'marketingCloudVisitorId' => null,
        'customerIds' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'tntId' => 'tntId',
        'thirdPartyId' => 'thirdPartyId',
        'marketingCloudVisitorId' => 'marketingCloudVisitorId',
        'customerIds' => 'customerIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tntId' => 'setTntId',
        'thirdPartyId' => 'setThirdPartyId',
        'marketingCloudVisitorId' => 'setMarketingCloudVisitorId',
        'customerIds' => 'setCustomerIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tntId' => 'getTntId',
        'thirdPartyId' => 'getThirdPartyId',
        'marketingCloudVisitorId' => 'getMarketingCloudVisitorId',
        'customerIds' => 'getCustomerIds'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['tntId'] = isset($data['tntId']) ? $data['tntId'] : null;
        $this->container['thirdPartyId'] = isset($data['thirdPartyId']) ? $data['thirdPartyId'] : null;
        $this->container['marketingCloudVisitorId'] = isset($data['marketingCloudVisitorId']) ? $data['marketingCloudVisitorId'] : null;
        $this->container['customerIds'] = isset($data['customerIds']) ? $data['customerIds'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['tntId']) && (mb_strlen($this->container['tntId']) > 128)) {
            $invalidProperties[] = "invalid value for 'tntId', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['thirdPartyId']) && (mb_strlen($this->container['thirdPartyId']) > 128)) {
            $invalidProperties[] = "invalid value for 'thirdPartyId', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['marketingCloudVisitorId']) && (mb_strlen($this->container['marketingCloudVisitorId']) > 128)) {
            $invalidProperties[] = "invalid value for 'marketingCloudVisitorId', the character length must be smaller than or equal to 128.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets tntId
     *
     * @return string|null
     */
    public function getTntId()
    {
        return $this->container['tntId'];
    }

    /**
     * Sets tntId
     *
     * @param string|null $tntId Tnt id - an unique identifier (UUID). If no visitor id is provided the TNT id will be generated by the TNT server. The TNT id retunred by the server may also contain the profile location hint, with the same format as for other endpoints (standard/ajax/json/..). Example 32440324234-2343423.23_41, in this example the 23_41 is the profile location hint. Tnt id retuned in the response (containting the profile location hint) should be used in the subsequent requests  Validation   * Should not contain a '.' (dot) unless the dot delimits the location hint.
     *
     * @return $this
     */
    public function setTntId($tntId)
    {
        if (!is_null($tntId) && (mb_strlen($tntId) > 128)) {
            throw new \InvalidArgumentException('invalid length for $tntId when calling VisitorId., must be smaller than or equal to 128.');
        }

        $this->container['tntId'] = $tntId;

        return $this;
    }

    /**
     * Gets thirdPartyId
     *
     * @return string|null
     */
    public function getThirdPartyId()
    {
        return $this->container['thirdPartyId'];
    }

    /**
     * Sets thirdPartyId
     *
     * @param string|null $thirdPartyId Third party id
     *
     * @return $this
     */
    public function setThirdPartyId($thirdPartyId)
    {
        if (!is_null($thirdPartyId) && (mb_strlen($thirdPartyId) > 128)) {
            throw new \InvalidArgumentException('invalid length for $thirdPartyId when calling VisitorId., must be smaller than or equal to 128.');
        }

        $this->container['thirdPartyId'] = $thirdPartyId;

        return $this;
    }

    /**
     * Gets marketingCloudVisitorId
     *
     * @return string|null
     */
    public function getMarketingCloudVisitorId()
    {
        return $this->container['marketingCloudVisitorId'];
    }

    /**
     * Sets marketingCloudVisitorId
     *
     * @param string|null $marketingCloudVisitorId Marketing cloud visitor id
     *
     * @return $this
     */
    public function setMarketingCloudVisitorId($marketingCloudVisitorId)
    {
        if (!is_null($marketingCloudVisitorId) && (mb_strlen($marketingCloudVisitorId) > 128)) {
            throw new \InvalidArgumentException('invalid length for $marketingCloudVisitorId when calling VisitorId., must be smaller than or equal to 128.');
        }

        $this->container['marketingCloudVisitorId'] = $marketingCloudVisitorId;

        return $this;
    }

    /**
     * Gets customerIds
     *
     * @return \Adobe\Target\Delivery\v1\Model\CustomerId[]|null
     */
    public function getCustomerIds()
    {
        return $this->container['customerIds'];
    }

    /**
     * Sets customerIds
     *
     * @param \Adobe\Target\Delivery\v1\Model\CustomerId[]|null $customerIds Along with the marketing cloud visitor id, you can associate additional customer ids  Validation   * No null elements.
     *
     * @return $this
     */
    public function setCustomerIds($customerIds)
    {
        $this->container['customerIds'] = $customerIds;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}
