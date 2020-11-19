<?php
/**
 * PrefetchResponse
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
 * PrefetchResponse Class Doc Comment
 *
 * @category Class
 * @description The object that will return the prefetched content based on the request, active activites etc
 * @package  Adobe\Target\Delivery\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PrefetchResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PrefetchResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'views' => '\Adobe\Target\Delivery\v1\Model\View[]',
        'pageLoad' => '\Adobe\Target\Delivery\v1\Model\PageLoadResponse',
        'mboxes' => '\Adobe\Target\Delivery\v1\Model\PrefetchMboxResponse[]',
        'metrics' => '\Adobe\Target\Delivery\v1\Model\Metric[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'views' => null,
        'pageLoad' => null,
        'mboxes' => null,
        'metrics' => null
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
        'views' => 'views',
        'pageLoad' => 'pageLoad',
        'mboxes' => 'mboxes',
        'metrics' => 'metrics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'views' => 'setViews',
        'pageLoad' => 'setPageLoad',
        'mboxes' => 'setMboxes',
        'metrics' => 'setMetrics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'views' => 'getViews',
        'pageLoad' => 'getPageLoad',
        'mboxes' => 'getMboxes',
        'metrics' => 'getMetrics'
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
        $this->container['views'] = isset($data['views']) ? $data['views'] : null;
        $this->container['pageLoad'] = isset($data['pageLoad']) ? $data['pageLoad'] : null;
        $this->container['mboxes'] = isset($data['mboxes']) ? $data['mboxes'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets views
     *
     * @return \Adobe\Target\Delivery\v1\Model\View[]|null
     */
    public function getViews()
    {
        return $this->container['views'];
    }

    /**
     * Sets views
     *
     * @param \Adobe\Target\Delivery\v1\Model\View[]|null $views Contains all the views matching the request.
     *
     * @return $this
     */
    public function setViews($views)
    {
        $this->container['views'] = $views;

        return $this;
    }

    /**
     * Gets pageLoad
     *
     * @return \Adobe\Target\Delivery\v1\Model\PageLoadResponse|null
     */
    public function getPageLoad()
    {
        return $this->container['pageLoad'];
    }

    /**
     * Sets pageLoad
     *
     * @param \Adobe\Target\Delivery\v1\Model\PageLoadResponse|null $pageLoad pageLoad
     *
     * @return $this
     */
    public function setPageLoad($pageLoad)
    {
        $this->container['pageLoad'] = $pageLoad;

        return $this;
    }

    /**
     * Gets mboxes
     *
     * @return \Adobe\Target\Delivery\v1\Model\PrefetchMboxResponse[]|null
     */
    public function getMboxes()
    {
        return $this->container['mboxes'];
    }

    /**
     * Sets mboxes
     *
     * @param \Adobe\Target\Delivery\v1\Model\PrefetchMboxResponse[]|null $mboxes Prefetched mboxes, including content and notification tokens to be sent back when the mboxes are displayed.
     *
     * @return $this
     */
    public function setMboxes($mboxes)
    {
        $this->container['mboxes'] = $mboxes;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return \Adobe\Target\Delivery\v1\Model\Metric[]|null
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param \Adobe\Target\Delivery\v1\Model\Metric[]|null $metrics The click track metrics that are not assigned to a view but are present in activites that have views, except in case the same activity is serving content for selectors both assinged to a view and selectors without any views, and having click track metrics that are not assotiated with any view within the activity, then:   * in case of a prefetch only request, these metrics (tokens) will be set in the prefetch response's metrics.   * in case of an execute only request, the metrics will be set in the page load response's metrics.   * in case of a request, with both, execute and prefetch, metrics will be set in the page load response's     metrics only.
     *
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;

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
