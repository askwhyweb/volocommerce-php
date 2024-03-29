<?php
/**
 * UpdateWebHookRequest
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
 * UpdateWebHookRequest Class Doc Comment
 *
 * @category    Class
 * @package     com.volocommerce.api.v1.sdk.invoker
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateWebHookRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UpdateWebHookRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'scopes' => '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\WebHookRequestScope[]',
        'end_point_url' => 'string',
        'event' => 'string',
        'content_type' => 'string',
        'auth' => '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\WebHookAuth',
        'active' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'scopes' => null,
        'end_point_url' => null,
        'event' => null,
        'content_type' => null,
        'auth' => null,
        'active' => null
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
        'scopes' => 'scopes',
        'end_point_url' => 'endPointUrl',
        'event' => 'event',
        'content_type' => 'contentType',
        'auth' => 'auth',
        'active' => 'active'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'scopes' => 'setScopes',
        'end_point_url' => 'setEndPointUrl',
        'event' => 'setEvent',
        'content_type' => 'setContentType',
        'auth' => 'setAuth',
        'active' => 'setActive'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'scopes' => 'getScopes',
        'end_point_url' => 'getEndPointUrl',
        'event' => 'getEvent',
        'content_type' => 'getContentType',
        'auth' => 'getAuth',
        'active' => 'getActive'
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

    const EVENT_REFUND = 'REFUND';
    const EVENT_ORDER_SHIPPED = 'ORDER_SHIPPED';
    const EVENT_CHANNEL_STOCK_UPDATE = 'CHANNEL_STOCK_UPDATE';
    const EVENT_STOCK_MOVEMENT = 'STOCK_MOVEMENT';
    const CONTENT_TYPE_JSON = 'JSON';
    const CONTENT_TYPE_XML = 'XML';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEventAllowableValues()
    {
        return [
            self::EVENT_REFUND,
            self::EVENT_ORDER_SHIPPED,
            self::EVENT_CHANNEL_STOCK_UPDATE,
            self::EVENT_STOCK_MOVEMENT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getContentTypeAllowableValues()
    {
        return [
            self::CONTENT_TYPE_JSON,
            self::CONTENT_TYPE_XML,
        ];
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
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
        $this->container['end_point_url'] = isset($data['end_point_url']) ? $data['end_point_url'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['auth'] = isset($data['auth']) ? $data['auth'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getEventAllowableValues();
        if (!in_array($this->container['event'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'event', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getContentTypeAllowableValues();
        if (!in_array($this->container['content_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'content_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        $allowed_values = $this->getEventAllowableValues();
        if (!in_array($this->container['event'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getContentTypeAllowableValues();
        if (!in_array($this->container['content_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets scopes
     * @return \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\WebHookRequestScope[]
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     * @param \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\WebHookRequestScope[] $scopes
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;

        return $this;
    }

    /**
     * Gets end_point_url
     * @return string
     */
    public function getEndPointUrl()
    {
        return $this->container['end_point_url'];
    }

    /**
     * Sets end_point_url
     * @param string $end_point_url
     * @return $this
     */
    public function setEndPointUrl($end_point_url)
    {
        $this->container['end_point_url'] = $end_point_url;

        return $this;
    }

    /**
     * Gets event
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     * @param string $event
     * @return $this
     */
    public function setEvent($event)
    {
        $allowed_values = $this->getEventAllowableValues();
        if (!is_null($event) && !in_array($event, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'event', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets content_type
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     * @param string $content_type
     * @return $this
     */
    public function setContentType($content_type)
    {
        $allowed_values = $this->getContentTypeAllowableValues();
        if (!is_null($content_type) && !in_array($content_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'content_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets auth
     * @return \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\WebHookAuth
     */
    public function getAuth()
    {
        return $this->container['auth'];
    }

    /**
     * Sets auth
     * @param \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\WebHookAuth $auth
     * @return $this
     */
    public function setAuth($auth)
    {
        $this->container['auth'] = $auth;

        return $this;
    }

    /**
     * Gets active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param bool $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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


