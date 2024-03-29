<?php
/**
 * LocationBean
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
 * LocationBean Class Doc Comment
 *
 * @category    Class
 * @package     com.volocommerce.api.v1.sdk.invoker
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LocationBean implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LocationBean';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'description' => 'string',
        'parent_id' => 'int',
        'pickable' => 'bool',
        'physical_location' => 'bool',
        'virtual_stock' => 'bool',
        'picking_priority' => 'int',
        'unavailable_for_listing' => 'bool',
        'last_updated_date' => '\DateTime',
        'walk_priority' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'description' => null,
        'parent_id' => 'int32',
        'pickable' => null,
        'physical_location' => null,
        'virtual_stock' => null,
        'picking_priority' => 'int32',
        'unavailable_for_listing' => null,
        'last_updated_date' => 'date-time',
        'walk_priority' => 'int32'
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
        'id' => 'id',
        'description' => 'description',
        'parent_id' => 'parentId',
        'pickable' => 'pickable',
        'physical_location' => 'physicalLocation',
        'virtual_stock' => 'virtualStock',
        'picking_priority' => 'pickingPriority',
        'unavailable_for_listing' => 'unavailableForListing',
        'last_updated_date' => 'lastUpdatedDate',
        'walk_priority' => 'walkPriority'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'description' => 'setDescription',
        'parent_id' => 'setParentId',
        'pickable' => 'setPickable',
        'physical_location' => 'setPhysicalLocation',
        'virtual_stock' => 'setVirtualStock',
        'picking_priority' => 'setPickingPriority',
        'unavailable_for_listing' => 'setUnavailableForListing',
        'last_updated_date' => 'setLastUpdatedDate',
        'walk_priority' => 'setWalkPriority'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'description' => 'getDescription',
        'parent_id' => 'getParentId',
        'pickable' => 'getPickable',
        'physical_location' => 'getPhysicalLocation',
        'virtual_stock' => 'getVirtualStock',
        'picking_priority' => 'getPickingPriority',
        'unavailable_for_listing' => 'getUnavailableForListing',
        'last_updated_date' => 'getLastUpdatedDate',
        'walk_priority' => 'getWalkPriority'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['pickable'] = isset($data['pickable']) ? $data['pickable'] : null;
        $this->container['physical_location'] = isset($data['physical_location']) ? $data['physical_location'] : null;
        $this->container['virtual_stock'] = isset($data['virtual_stock']) ? $data['virtual_stock'] : null;
        $this->container['picking_priority'] = isset($data['picking_priority']) ? $data['picking_priority'] : null;
        $this->container['unavailable_for_listing'] = isset($data['unavailable_for_listing']) ? $data['unavailable_for_listing'] : null;
        $this->container['last_updated_date'] = isset($data['last_updated_date']) ? $data['last_updated_date'] : null;
        $this->container['walk_priority'] = isset($data['walk_priority']) ? $data['walk_priority'] : null;
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
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets parent_id
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     * @param int $parent_id
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets pickable
     * @return bool
     */
    public function getPickable()
    {
        return $this->container['pickable'];
    }

    /**
     * Sets pickable
     * @param bool $pickable
     * @return $this
     */
    public function setPickable($pickable)
    {
        $this->container['pickable'] = $pickable;

        return $this;
    }

    /**
     * Gets physical_location
     * @return bool
     */
    public function getPhysicalLocation()
    {
        return $this->container['physical_location'];
    }

    /**
     * Sets physical_location
     * @param bool $physical_location
     * @return $this
     */
    public function setPhysicalLocation($physical_location)
    {
        $this->container['physical_location'] = $physical_location;

        return $this;
    }

    /**
     * Gets virtual_stock
     * @return bool
     */
    public function getVirtualStock()
    {
        return $this->container['virtual_stock'];
    }

    /**
     * Sets virtual_stock
     * @param bool $virtual_stock
     * @return $this
     */
    public function setVirtualStock($virtual_stock)
    {
        $this->container['virtual_stock'] = $virtual_stock;

        return $this;
    }

    /**
     * Gets picking_priority
     * @return int
     */
    public function getPickingPriority()
    {
        return $this->container['picking_priority'];
    }

    /**
     * Sets picking_priority
     * @param int $picking_priority
     * @return $this
     */
    public function setPickingPriority($picking_priority)
    {
        $this->container['picking_priority'] = $picking_priority;

        return $this;
    }

    /**
     * Gets unavailable_for_listing
     * @return bool
     */
    public function getUnavailableForListing()
    {
        return $this->container['unavailable_for_listing'];
    }

    /**
     * Sets unavailable_for_listing
     * @param bool $unavailable_for_listing
     * @return $this
     */
    public function setUnavailableForListing($unavailable_for_listing)
    {
        $this->container['unavailable_for_listing'] = $unavailable_for_listing;

        return $this;
    }

    /**
     * Gets last_updated_date
     * @return \DateTime
     */
    public function getLastUpdatedDate()
    {
        return $this->container['last_updated_date'];
    }

    /**
     * Sets last_updated_date
     * @param \DateTime $last_updated_date
     * @return $this
     */
    public function setLastUpdatedDate($last_updated_date)
    {
        $this->container['last_updated_date'] = $last_updated_date;

        return $this;
    }

    /**
     * Gets walk_priority
     * @return int
     */
    public function getWalkPriority()
    {
        return $this->container['walk_priority'];
    }

    /**
     * Sets walk_priority
     * @param int $walk_priority
     * @return $this
     */
    public function setWalkPriority($walk_priority)
    {
        $this->container['walk_priority'] = $walk_priority;

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


