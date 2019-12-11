<?php
/**
 * AddOrderItemResponse
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
 * AddOrderItemResponse Class Doc Comment
 *
 * @category    Class
 * @package     com.volocommerce.api.v1.sdk.invoker
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AddOrderItemResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AddOrderItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'esp_order_number' => 'int',
        'order_item_response' => '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\AddOrderItemResponseBean[]',
        'page_context' => '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PageContext'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'esp_order_number' => 'int32',
        'order_item_response' => null,
        'page_context' => null
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
        'esp_order_number' => 'espOrderNumber',
        'order_item_response' => 'orderItemResponse',
        'page_context' => 'pageContext'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'esp_order_number' => 'setEspOrderNumber',
        'order_item_response' => 'setOrderItemResponse',
        'page_context' => 'setPageContext'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'esp_order_number' => 'getEspOrderNumber',
        'order_item_response' => 'getOrderItemResponse',
        'page_context' => 'getPageContext'
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
        $this->container['esp_order_number'] = isset($data['esp_order_number']) ? $data['esp_order_number'] : null;
        $this->container['order_item_response'] = isset($data['order_item_response']) ? $data['order_item_response'] : null;
        $this->container['page_context'] = isset($data['page_context']) ? $data['page_context'] : null;
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
     * Gets esp_order_number
     * @return int
     */
    public function getEspOrderNumber()
    {
        return $this->container['esp_order_number'];
    }

    /**
     * Sets esp_order_number
     * @param int $esp_order_number
     * @return $this
     */
    public function setEspOrderNumber($esp_order_number)
    {
        $this->container['esp_order_number'] = $esp_order_number;

        return $this;
    }

    /**
     * Gets order_item_response
     * @return \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\AddOrderItemResponseBean[]
     */
    public function getOrderItemResponse()
    {
        return $this->container['order_item_response'];
    }

    /**
     * Sets order_item_response
     * @param \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\AddOrderItemResponseBean[] $order_item_response
     * @return $this
     */
    public function setOrderItemResponse($order_item_response)
    {
        $this->container['order_item_response'] = $order_item_response;

        return $this;
    }

    /**
     * Gets page_context
     * @return \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PageContext
     */
    public function getPageContext()
    {
        return $this->container['page_context'];
    }

    /**
     * Sets page_context
     * @param \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PageContext $page_context
     * @return $this
     */
    public function setPageContext($page_context)
    {
        $this->container['page_context'] = $page_context;

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


