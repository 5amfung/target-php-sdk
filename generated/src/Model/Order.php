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
 * Order
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
 * Order Class Doc Comment
 *
 * @category Class
 * @description Object that describes the order details.
 * @package  Adobe\Target\Delivery\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'total' => 'float',
        'purchasedProductIds' => 'string[]',
        'time' => '\DateTime',
        'experienceLocalId' => 'int',
        'duplicate' => 'bool',
        'outlier' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'total' => null,
        'purchasedProductIds' => null,
        'time' => null,
        'experienceLocalId' => null,
        'duplicate' => null,
        'outlier' => null
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
        'id' => 'id',
        'total' => 'total',
        'purchasedProductIds' => 'purchasedProductIds',
        'time' => 'time',
        'experienceLocalId' => 'experienceLocalId',
        'duplicate' => 'duplicate',
        'outlier' => 'outlier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'total' => 'setTotal',
        'purchasedProductIds' => 'setPurchasedProductIds',
        'time' => 'setTime',
        'experienceLocalId' => 'setExperienceLocalId',
        'duplicate' => 'setDuplicate',
        'outlier' => 'setOutlier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'total' => 'getTotal',
        'purchasedProductIds' => 'getPurchasedProductIds',
        'time' => 'getTime',
        'experienceLocalId' => 'getExperienceLocalId',
        'duplicate' => 'getDuplicate',
        'outlier' => 'getOutlier'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['purchasedProductIds'] = isset($data['purchasedProductIds']) ? $data['purchasedProductIds'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['experienceLocalId'] = isset($data['experienceLocalId']) ? $data['experienceLocalId'] : null;
        $this->container['duplicate'] = isset($data['duplicate']) ? $data['duplicate'] : null;
        $this->container['outlier'] = isset($data['outlier']) ? $data['outlier'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 250)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
            $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['experienceLocalId']) && ($this->container['experienceLocalId'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'experienceLocalId', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['experienceLocalId']) && ($this->container['experienceLocalId'] < 0)) {
            $invalidProperties[] = "invalid value for 'experienceLocalId', must be bigger than or equal to 0.";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Order Id.
     *
     * @return $this
     */
    public function setId($id)
    {
        if (!is_null($id) && (mb_strlen($id) > 250)) {
            throw new \InvalidArgumentException('invalid length for $id when calling Order., must be smaller than or equal to 250.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float|null $total Order Total. The amount of money in the current order.
     *
     * @return $this
     */
    public function setTotal($total)
    {
        if (!is_null($total) && ($total < 0)) {
            throw new \InvalidArgumentException('invalid value for $total when calling Order., must be bigger than or equal to 0.');
        }

        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets purchasedProductIds
     *
     * @return string[]|null
     */
    public function getPurchasedProductIds()
    {
        return $this->container['purchasedProductIds'];
    }

    /**
     * Sets purchasedProductIds
     *
     * @param string[]|null $purchasedProductIds Order's product ids. Validation   * No blank values allowed.   * Each product Id max length 50.   * Product ids, separated by commas and concatenated, total length should not exceed 250.
     *
     * @return $this
     */
    public function setPurchasedProductIds($purchasedProductIds)
    {
        $this->container['purchasedProductIds'] = $purchasedProductIds;

        return $this;
    }

    /**
     * Gets time
     *
     * @return \DateTime|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param \DateTime|null $time Time in the [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals) format
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets experienceLocalId
     *
     * @return int|null
     */
    public function getExperienceLocalId()
    {
        return $this->container['experienceLocalId'];
    }

    /**
     * Sets experienceLocalId
     *
     * @param int|null $experienceLocalId Id used to track the experience across POST/PUT requests
     *
     * @return $this
     */
    public function setExperienceLocalId($experienceLocalId)
    {
        if (!is_null($experienceLocalId) && ($experienceLocalId > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $experienceLocalId when calling Order., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($experienceLocalId) && ($experienceLocalId < 0)) {
            throw new \InvalidArgumentException('invalid value for $experienceLocalId when calling Order., must be bigger than or equal to 0.');
        }

        $this->container['experienceLocalId'] = $experienceLocalId;

        return $this;
    }

    /**
     * Gets duplicate
     *
     * @return bool|null
     */
    public function getDuplicate()
    {
        return $this->container['duplicate'];
    }

    /**
     * Sets duplicate
     *
     * @param bool|null $duplicate Whether or not the order is a duplicate
     *
     * @return $this
     */
    public function setDuplicate($duplicate)
    {
        $this->container['duplicate'] = $duplicate;

        return $this;
    }

    /**
     * Gets outlier
     *
     * @return bool|null
     */
    public function getOutlier()
    {
        return $this->container['outlier'];
    }

    /**
     * Sets outlier
     *
     * @param bool|null $outlier Whether or not the order is abnormally different from the rest in volume
     *
     * @return $this
     */
    public function setOutlier($outlier)
    {
        $this->container['outlier'] = $outlier;

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
