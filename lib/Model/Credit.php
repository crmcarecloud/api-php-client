<?php
/**
 * Credit
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
 * Credit Class Doc Comment
 *
 * @category Class
 * @description A customer credit.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Credit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Credit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'credit_id' => 'string',
        'customer_id' => 'string',
        'assigned_credits' => 'float',
        'available_credits' => 'float',
        'credit_type_id' => 'string',
        'partner_id' => 'string',
        'valid_to' => 'string',
        'currency_id' => 'string',
        'state' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'credit_id' => null,
        'customer_id' => null,
        'assigned_credits' => 'float',
        'available_credits' => 'float',
        'credit_type_id' => null,
        'partner_id' => null,
        'valid_to' => null,
        'currency_id' => null,
        'state' => null
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
        'credit_id' => 'credit_id',
        'customer_id' => 'customer_id',
        'assigned_credits' => 'assigned_credits',
        'available_credits' => 'available_credits',
        'credit_type_id' => 'credit_type_id',
        'partner_id' => 'partner_id',
        'valid_to' => 'valid_to',
        'currency_id' => 'currency_id',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'credit_id' => 'setCreditId',
        'customer_id' => 'setCustomerId',
        'assigned_credits' => 'setAssignedCredits',
        'available_credits' => 'setAvailableCredits',
        'credit_type_id' => 'setCreditTypeId',
        'partner_id' => 'setPartnerId',
        'valid_to' => 'setValidTo',
        'currency_id' => 'setCurrencyId',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'credit_id' => 'getCreditId',
        'customer_id' => 'getCustomerId',
        'assigned_credits' => 'getAssignedCredits',
        'available_credits' => 'getAvailableCredits',
        'credit_type_id' => 'getCreditTypeId',
        'partner_id' => 'getPartnerId',
        'valid_to' => 'getValidTo',
        'currency_id' => 'getCurrencyId',
        'state' => 'getState'
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
        $this->container['credit_id'] = isset($data['credit_id']) ? $data['credit_id'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['assigned_credits'] = isset($data['assigned_credits']) ? $data['assigned_credits'] : null;
        $this->container['available_credits'] = isset($data['available_credits']) ? $data['available_credits'] : null;
        $this->container['credit_type_id'] = isset($data['credit_type_id']) ? $data['credit_type_id'] : null;
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
        $this->container['valid_to'] = isset($data['valid_to']) ? $data['valid_to'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['credit_type_id'] === null) {
            $invalidProperties[] = "'credit_type_id' can't be null";
        }
        if ($this->container['partner_id'] === null) {
            $invalidProperties[] = "'partner_id' can't be null";
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
     * Gets credit_id
     *
     * @return string
     */
    public function getCreditId()
    {
        return $this->container['credit_id'];
    }

    /**
     * Sets credit_id
     *
     * @param string $credit_id The unique ID of the credit record.
     *
     * @return $this
     */
    public function setCreditId($credit_id)
    {
        $this->container['credit_id'] = $credit_id;

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
     * Gets assigned_credits
     *
     * @return float
     */
    public function getAssignedCredits()
    {
        return $this->container['assigned_credits'];
    }

    /**
     * Sets assigned_credits
     *
     * @param float $assigned_credits The number of earned credits in the record.
     *
     * @return $this
     */
    public function setAssignedCredits($assigned_credits)
    {
        $this->container['assigned_credits'] = $assigned_credits;

        return $this;
    }

    /**
     * Gets available_credits
     *
     * @return float
     */
    public function getAvailableCredits()
    {
        return $this->container['available_credits'];
    }

    /**
     * Sets available_credits
     *
     * @param float $available_credits The number of available credits from the record.
     *
     * @return $this
     */
    public function setAvailableCredits($available_credits)
    {
        $this->container['available_credits'] = $available_credits;

        return $this;
    }

    /**
     * Gets credit_type_id
     *
     * @return string
     */
    public function getCreditTypeId()
    {
        return $this->container['credit_type_id'];
    }

    /**
     * Sets credit_type_id
     *
     * @param string $credit_type_id Type of the credit record.
     *
     * @return $this
     */
    public function setCreditTypeId($credit_type_id)
    {
        $this->container['credit_type_id'] = $credit_type_id;

        return $this;
    }

    /**
     * Gets partner_id
     *
     * @return string
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param string $partner_id The unique ID of the partner company.
     *
     * @return $this
     */
    public function setPartnerId($partner_id)
    {
        $this->container['partner_id'] = $partner_id;

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
     * @param string $valid_to Date and time of the credit record validity to. *(YYYY-MM-DD HH:MM:SS)*
     *
     * @return $this
     */
    public function setValidTo($valid_to)
    {
        $this->container['valid_to'] = $valid_to;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string $currency_id The unique ID of the currency.
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

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
     * @param int $state State of the credit record. *Possible values are: 0 - deleted / 1 - active / 2 - non active*
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
