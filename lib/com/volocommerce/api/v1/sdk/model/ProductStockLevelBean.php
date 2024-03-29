<?php
/**
 * ProductStockLevelBean
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
 * ProductStockLevelBean Class Doc Comment
 *
 * @category    Class
 * @package     com.volocommerce.api.v1.sdk.invoker
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductStockLevelBean implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductStockLevelBean';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'stock_number' => 'string',
        'on_hand' => 'int',
        'available' => 'int',
        'committed' => 'int',
        'pickable' => 'int',
        'unavailable' => 'int',
        'on_order' => 'int',
        'to_ship' => 'int',
        'listed' => '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\Listed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'stock_number' => null,
        'on_hand' => 'int32',
        'available' => 'int32',
        'committed' => 'int32',
        'pickable' => 'int32',
        'unavailable' => 'int32',
        'on_order' => 'int32',
        'to_ship' => 'int32',
        'listed' => null
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
        'stock_number' => 'stockNumber',
        'on_hand' => 'onHand',
        'available' => 'available',
        'committed' => 'committed',
        'pickable' => 'pickable',
        'unavailable' => 'unavailable',
        'on_order' => 'onOrder',
        'to_ship' => 'toShip',
        'listed' => 'listed'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'stock_number' => 'setStockNumber',
        'on_hand' => 'setOnHand',
        'available' => 'setAvailable',
        'committed' => 'setCommitted',
        'pickable' => 'setPickable',
        'unavailable' => 'setUnavailable',
        'on_order' => 'setOnOrder',
        'to_ship' => 'setToShip',
        'listed' => 'setListed'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'stock_number' => 'getStockNumber',
        'on_hand' => 'getOnHand',
        'available' => 'getAvailable',
        'committed' => 'getCommitted',
        'pickable' => 'getPickable',
        'unavailable' => 'getUnavailable',
        'on_order' => 'getOnOrder',
        'to_ship' => 'getToShip',
        'listed' => 'getListed'
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
        $this->container['stock_number'] = isset($data['stock_number']) ? $data['stock_number'] : null;
        $this->container['on_hand'] = isset($data['on_hand']) ? $data['on_hand'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['committed'] = isset($data['committed']) ? $data['committed'] : null;
        $this->container['pickable'] = isset($data['pickable']) ? $data['pickable'] : null;
        $this->container['unavailable'] = isset($data['unavailable']) ? $data['unavailable'] : null;
        $this->container['on_order'] = isset($data['on_order']) ? $data['on_order'] : null;
        $this->container['to_ship'] = isset($data['to_ship']) ? $data['to_ship'] : null;
        $this->container['listed'] = isset($data['listed']) ? $data['listed'] : null;
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
     * Gets stock_number
     * @return string
     */
    public function getStockNumber()
    {
        return $this->container['stock_number'];
    }

    /**
     * Sets stock_number
     * @param string $stock_number
     * @return $this
     */
    public function setStockNumber($stock_number)
    {
        $this->container['stock_number'] = $stock_number;

        return $this;
    }

    /**
     * Gets on_hand
     * @return int
     */
    public function getOnHand()
    {
        return $this->container['on_hand'];
    }

    /**
     * Sets on_hand
     * @param int $on_hand
     * @return $this
     */
    public function setOnHand($on_hand)
    {
        $this->container['on_hand'] = $on_hand;

        return $this;
    }

    /**
     * Gets available
     * @return int
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     * @param int $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets committed
     * @return int
     */
    public function getCommitted()
    {
        return $this->container['committed'];
    }

    /**
     * Sets committed
     * @param int $committed
     * @return $this
     */
    public function setCommitted($committed)
    {
        $this->container['committed'] = $committed;

        return $this;
    }

    /**
     * Gets pickable
     * @return int
     */
    public function getPickable()
    {
        return $this->container['pickable'];
    }

    /**
     * Sets pickable
     * @param int $pickable
     * @return $this
     */
    public function setPickable($pickable)
    {
        $this->container['pickable'] = $pickable;

        return $this;
    }

    /**
     * Gets unavailable
     * @return int
     */
    public function getUnavailable()
    {
        return $this->container['unavailable'];
    }

    /**
     * Sets unavailable
     * @param int $unavailable
     * @return $this
     */
    public function setUnavailable($unavailable)
    {
        $this->container['unavailable'] = $unavailable;

        return $this;
    }

    /**
     * Gets on_order
     * @return int
     */
    public function getOnOrder()
    {
        return $this->container['on_order'];
    }

    /**
     * Sets on_order
     * @param int $on_order
     * @return $this
     */
    public function setOnOrder($on_order)
    {
        $this->container['on_order'] = $on_order;

        return $this;
    }

    /**
     * Gets to_ship
     * @return int
     */
    public function getToShip()
    {
        return $this->container['to_ship'];
    }

    /**
     * Sets to_ship
     * @param int $to_ship
     * @return $this
     */
    public function setToShip($to_ship)
    {
        $this->container['to_ship'] = $to_ship;

        return $this;
    }

    /**
     * Gets listed
     * @return \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\Listed
     */
    public function getListed()
    {
        return $this->container['listed'];
    }

    /**
     * Sets listed
     * @param \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\Listed $listed
     * @return $this
     */
    public function setListed($listed)
    {
        $this->container['listed'] = $listed;

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


