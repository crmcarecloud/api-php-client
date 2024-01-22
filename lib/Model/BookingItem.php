<?php
/**
 * BookingItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * REST API Reference
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@carecloud.cz
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.46
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CrmCareCloud\Webservice\RestApi\Client\Model;

use \ArrayAccess;
use \CrmCareCloud\Webservice\RestApi\Client\ObjectSerializer;

/**
 * BookingItem Class Doc Comment
 *
 * @category Class
 * @description Booking item structure.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BookingItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BookingItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'booking_item_id' => 'string',
        'customer_id' => 'string',
        'time_slot_id' => 'string',
        'booking_ticket' => '\CrmCareCloud\Webservice\RestApi\Client\Model\BookingTicket',
        'valid_from' => 'string',
        'valid_to' => 'string',
        'capacity_taken' => 'int',
        'booking_item_status' => 'string',
        'additional_properties' => '\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]',
        'created_at' => 'string',
        'state' => 'int',
        'last_change' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'booking_item_id' => null,
        'customer_id' => null,
        'time_slot_id' => null,
        'booking_ticket' => null,
        'valid_from' => null,
        'valid_to' => null,
        'capacity_taken' => null,
        'booking_item_status' => null,
        'additional_properties' => null,
        'created_at' => null,
        'state' => null,
        'last_change' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string,string>
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string,string|null>
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'booking_item_id' => 'booking_item_id',
        'customer_id' => 'customer_id',
        'time_slot_id' => 'time_slot_id',
        'booking_ticket' => 'booking_ticket',
        'valid_from' => 'valid_from',
        'valid_to' => 'valid_to',
        'capacity_taken' => 'capacity_taken',
        'booking_item_status' => 'booking_item_status',
        'additional_properties' => 'additional_properties',
        'created_at' => 'created_at',
        'state' => 'state',
        'last_change' => 'last_change'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'booking_item_id' => 'setBookingItemId',
        'customer_id' => 'setCustomerId',
        'time_slot_id' => 'setTimeSlotId',
        'booking_ticket' => 'setBookingTicket',
        'valid_from' => 'setValidFrom',
        'valid_to' => 'setValidTo',
        'capacity_taken' => 'setCapacityTaken',
        'booking_item_status' => 'setBookingItemStatus',
        'additional_properties' => 'setAdditionalProperties',
        'created_at' => 'setCreatedAt',
        'state' => 'setState',
        'last_change' => 'setLastChange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'booking_item_id' => 'getBookingItemId',
        'customer_id' => 'getCustomerId',
        'time_slot_id' => 'getTimeSlotId',
        'booking_ticket' => 'getBookingTicket',
        'valid_from' => 'getValidFrom',
        'valid_to' => 'getValidTo',
        'capacity_taken' => 'getCapacityTaken',
        'booking_item_status' => 'getBookingItemStatus',
        'additional_properties' => 'getAdditionalProperties',
        'created_at' => 'getCreatedAt',
        'state' => 'getState',
        'last_change' => 'getLastChange'
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
        return self::$swaggerModelName;
    }

    const STATE_0 = 0;
const STATE_1 = 1;
const STATE_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_0,
self::STATE_1,
self::STATE_2,        ];
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
        $this->container['booking_item_id'] = isset($data['booking_item_id']) ? $data['booking_item_id'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['time_slot_id'] = isset($data['time_slot_id']) ? $data['time_slot_id'] : null;
        $this->container['booking_ticket'] = isset($data['booking_ticket']) ? $data['booking_ticket'] : null;
        $this->container['valid_from'] = isset($data['valid_from']) ? $data['valid_from'] : null;
        $this->container['valid_to'] = isset($data['valid_to']) ? $data['valid_to'] : null;
        $this->container['capacity_taken'] = isset($data['capacity_taken']) ? $data['capacity_taken'] : 1;
        $this->container['booking_item_status'] = isset($data['booking_item_status']) ? $data['booking_item_status'] : null;
        $this->container['additional_properties'] = isset($data['additional_properties']) ? $data['additional_properties'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['last_change'] = isset($data['last_change']) ? $data['last_change'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['time_slot_id'] === null) {
            $invalidProperties[] = "'time_slot_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets booking_item_id
     *
     * @return string
     */
    public function getBookingItemId()
    {
        return $this->container['booking_item_id'];
    }

    /**
     * Sets booking_item_id
     *
     * @param string $booking_item_id The unique ID of the booking item.
     *
     * @return $this
     */
    public function setBookingItemId($booking_item_id)
    {
        $this->container['booking_item_id'] = $booking_item_id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id The unique ID of the customer.
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets time_slot_id
     *
     * @return string
     */
    public function getTimeSlotId()
    {
        return $this->container['time_slot_id'];
    }

    /**
     * Sets time_slot_id
     *
     * @param string $time_slot_id The unique ID of the booking time slot.
     *
     * @return $this
     */
    public function setTimeSlotId($time_slot_id)
    {
        $this->container['time_slot_id'] = $time_slot_id;

        return $this;
    }

    /**
     * Gets booking_ticket
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\BookingTicket
     */
    public function getBookingTicket()
    {
        return $this->container['booking_ticket'];
    }

    /**
     * Sets booking_ticket
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\BookingTicket $booking_ticket booking_ticket
     *
     * @return $this
     */
    public function setBookingTicket($booking_ticket)
    {
        $this->container['booking_ticket'] = $booking_ticket;

        return $this;
    }

    /**
     * Gets valid_from
     *
     * @return string
     */
    public function getValidFrom()
    {
        return $this->container['valid_from'];
    }

    /**
     * Sets valid_from
     *
     * @param string $valid_from Date and time when time slot starts. *(YYYY-MM-DD HH:MM:SS)*
     *
     * @return $this
     */
    public function setValidFrom($valid_from)
    {
        $this->container['valid_from'] = $valid_from;

        return $this;
    }

    /**
     * Gets valid_to
     *
     * @return string
     */
    public function getValidTo()
    {
        return $this->container['valid_to'];
    }

    /**
     * Sets valid_to
     *
     * @param string $valid_to Date and time when time slot ends. *(YYYY-MM-DD HH:MM:SS)*
     *
     * @return $this
     */
    public function setValidTo($valid_to)
    {
        $this->container['valid_to'] = $valid_to;

        return $this;
    }

    /**
     * Gets capacity_taken
     *
     * @return int
     */
    public function getCapacityTaken()
    {
        return $this->container['capacity_taken'];
    }

    /**
     * Sets capacity_taken
     *
     * @param int $capacity_taken How much capacity is taken by the booking item. If not set, value is 1.
     *
     * @return $this
     */
    public function setCapacityTaken($capacity_taken)
    {
        $this->container['capacity_taken'] = $capacity_taken;

        return $this;
    }

    /**
     * Gets booking_item_status
     *
     * @return string
     */
    public function getBookingItemStatus()
    {
        return $this->container['booking_item_status'];
    }

    /**
     * Sets booking_item_status
     *
     * @param string $booking_item_status Current status of the booking item from resource [booking-statuses](#tag/Booking-statuses). If not set, CareCloud uses default booking status.
     *
     * @return $this
     */
    public function setBookingItemStatus($booking_item_status)
    {
        $this->container['booking_item_status'] = $booking_item_status;

        return $this;
    }

    /**
     * Gets additional_properties
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]
     */
    public function getAdditionalProperties()
    {
        return $this->container['additional_properties'];
    }

    /**
     * Sets additional_properties
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[] $additional_properties List of additional property records.
     *
     * @return $this
     */
    public function setAdditionalProperties($additional_properties)
    {
        $this->container['additional_properties'] = $additional_properties;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at Date and time of the booking item. *(YYYY-MM-DD HH:MM:SS)*
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets state
     *
     * @return int
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param int $state State of the booking item record. *Possible values are: 0 - deleted / 1 - active / 2 - non active*
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets last_change
     *
     * @return string
     */
    public function getLastChange()
    {
        return $this->container['last_change'];
    }

    /**
     * Sets last_change
     *
     * @param string $last_change Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)*
     *
     * @return $this
     */
    public function setLastChange($last_change)
    {
        $this->container['last_change'] = $last_change;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
