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
 * NotificationAllOf
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
 * NotificationAllOf Class Doc Comment
 *
 * @category Class
 * @package  Adobe\Target\Delivery\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NotificationAllOf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Notification_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'impressionId' => 'string',
        'type' => '\Adobe\Target\Delivery\v1\Model\MetricType',
        'timestamp' => 'int',
        'tokens' => 'string[]',
        'mbox' => '\Adobe\Target\Delivery\v1\Model\NotificationMbox',
        'view' => '\Adobe\Target\Delivery\v1\Model\NotificationView',
        'pageLoad' => '\Adobe\Target\Delivery\v1\Model\NotificationPageLoad'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'impressionId' => null,
        'type' => null,
        'timestamp' => 'int64',
        'tokens' => null,
        'mbox' => null,
        'view' => null,
        'pageLoad' => null
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
        'impressionId' => 'impressionId',
        'type' => 'type',
        'timestamp' => 'timestamp',
        'tokens' => 'tokens',
        'mbox' => 'mbox',
        'view' => 'view',
        'pageLoad' => 'pageLoad'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'impressionId' => 'setImpressionId',
        'type' => 'setType',
        'timestamp' => 'setTimestamp',
        'tokens' => 'setTokens',
        'mbox' => 'setMbox',
        'view' => 'setView',
        'pageLoad' => 'setPageLoad'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'impressionId' => 'getImpressionId',
        'type' => 'getType',
        'timestamp' => 'getTimestamp',
        'tokens' => 'getTokens',
        'mbox' => 'getMbox',
        'view' => 'getView',
        'pageLoad' => 'getPageLoad'
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
        $this->container['impressionId'] = isset($data['impressionId']) ? $data['impressionId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['tokens'] = isset($data['tokens']) ? $data['tokens'] : null;
        $this->container['mbox'] = isset($data['mbox']) ? $data['mbox'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
        $this->container['pageLoad'] = isset($data['pageLoad']) ? $data['pageLoad'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 200)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['impressionId']) && (mb_strlen($this->container['impressionId']) > 128)) {
            $invalidProperties[] = "invalid value for 'impressionId', the character length must be smaller than or equal to 128.";
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
     * @param string|null $id Notification id will be returned in response and will indicate that the notification was processed successfully.
     *
     * @return $this
     */
    public function setId($id)
    {
        if (!is_null($id) && (mb_strlen($id) > 200)) {
            throw new \InvalidArgumentException('invalid length for $id when calling NotificationAllOf., must be smaller than or equal to 200.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets impressionId
     *
     * @return string|null
     */
    public function getImpressionId()
    {
        return $this->container['impressionId'];
    }

    /**
     * Sets impressionId
     *
     * @param string|null $impressionId Impression id is used to stitch (link) the current notification with a previous notification or execute request. In case they both of them match, the second and other subsequent requests will not generate a new impression to the activity, experience etc.
     *
     * @return $this
     */
    public function setImpressionId($impressionId)
    {
        if (!is_null($impressionId) && (mb_strlen($impressionId) > 128)) {
            throw new \InvalidArgumentException('invalid length for $impressionId when calling NotificationAllOf., must be smaller than or equal to 128.');
        }

        $this->container['impressionId'] = $impressionId;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Adobe\Target\Delivery\v1\Model\MetricType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Adobe\Target\Delivery\v1\Model\MetricType|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int|null $timestamp Timestamp of the notification, in milliseconds elapsed since UNIX epoch.
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets tokens
     *
     * @return string[]|null
     */
    public function getTokens()
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     *
     * @param string[]|null $tokens A list of tokens for displayed content or clicked selectors, based on the type of notification.
     *
     * @return $this
     */
    public function setTokens($tokens)
    {
        $this->container['tokens'] = $tokens;

        return $this;
    }

    /**
     * Gets mbox
     *
     * @return \Adobe\Target\Delivery\v1\Model\NotificationMbox|null
     */
    public function getMbox()
    {
        return $this->container['mbox'];
    }

    /**
     * Sets mbox
     *
     * @param \Adobe\Target\Delivery\v1\Model\NotificationMbox|null $mbox mbox
     *
     * @return $this
     */
    public function setMbox($mbox)
    {
        $this->container['mbox'] = $mbox;

        return $this;
    }

    /**
     * Gets view
     *
     * @return \Adobe\Target\Delivery\v1\Model\NotificationView|null
     */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
     * Sets view
     *
     * @param \Adobe\Target\Delivery\v1\Model\NotificationView|null $view view
     *
     * @return $this
     */
    public function setView($view)
    {
        $this->container['view'] = $view;

        return $this;
    }

    /**
     * Gets pageLoad
     *
     * @return \Adobe\Target\Delivery\v1\Model\NotificationPageLoad|null
     */
    public function getPageLoad()
    {
        return $this->container['pageLoad'];
    }

    /**
     * Sets pageLoad
     *
     * @param \Adobe\Target\Delivery\v1\Model\NotificationPageLoad|null $pageLoad pageLoad
     *
     * @return $this
     */
    public function setPageLoad($pageLoad)
    {
        $this->container['pageLoad'] = $pageLoad;

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