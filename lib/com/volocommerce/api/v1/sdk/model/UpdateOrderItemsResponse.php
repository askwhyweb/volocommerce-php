<?php
/**
 * UpdateOrderItemsResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  com.volocommerce.api.v1.sdk.invoker
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Volo Public APIs
 *
 * Volo Public APIs
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model;

use \ArrayAccess;

/**
 * UpdateOrderItemsResponse Class Doc Comment
 *
 * @category    Class
 * @package     com.volocommerce.api.v1.sdk.invoker
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateOrderItemsResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UpdateOrderItemsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'esp_order_no' => 'int',
        'update_order_items_response' => '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\UpdateOrderItemsResponseBean[]',
        'context' => '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PageContext'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'esp_order_no' => 'int64',
        'update_order_items_response' => null,
        'context' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'esp_order_no' => 'espOrderNo',
        'update_order_items_response' => 'updateOrderItemsResponse',
        'context' => 'context'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'esp_order_no' => 'setEspOrderNo',
        'update_order_items_response' => 'setUpdateOrderItemsResponse',
        'context' => 'setContext'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'esp_order_no' => 'getEspOrderNo',
        'update_order_items_response' => 'getUpdateOrderItemsResponse',
        'context' => 'getContext'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['esp_order_no'] = isset($data['esp_order_no']) ? $data['esp_order_no'] : null;
        $this->container['update_order_items_response'] = isset($data['update_order_items_response']) ? $data['update_order_items_response'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets esp_order_no
     * @return int
     */
    public function getEspOrderNo()
    {
        return $this->container['esp_order_no'];
    }

    /**
     * Sets esp_order_no
     * @param int $esp_order_no
     * @return $this
     */
    public function setEspOrderNo($esp_order_no)
    {
        $this->container['esp_order_no'] = $esp_order_no;

        return $this;
    }

    /**
     * Gets update_order_items_response
     * @return \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\UpdateOrderItemsResponseBean[]
     */
    public function getUpdateOrderItemsResponse()
    {
        return $this->container['update_order_items_response'];
    }

    /**
     * Sets update_order_items_response
     * @param \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\UpdateOrderItemsResponseBean[] $update_order_items_response
     * @return $this
     */
    public function setUpdateOrderItemsResponse($update_order_items_response)
    {
        $this->container['update_order_items_response'] = $update_order_items_response;

        return $this;
    }

    /**
     * Gets context
     * @return \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PageContext
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     * @param \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PageContext $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\com.volocommerce.api.v1.sdk.invoker\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\com.volocommerce.api.v1.sdk.invoker\ObjectSerializer::sanitizeForSerialization($this));
    }
}


