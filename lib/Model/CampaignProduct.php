<?php
/**
 * CampaignProduct
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
 * Discover the essentials of the CareCloud platform API, from authentication methods to available resources. Explore the REST API, which allows you to seamlessly connect the CareCloud platform with other systems.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@carecloud.cz
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.55
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
 * CampaignProduct Class Doc Comment
 *
 * @category Class
 * @description Campaign product structure.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignProduct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CampaignProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'campaign_product_id' => 'string',
        'product_id' => 'string',
        'currency_id' => 'string',
        'campaign_id' => 'string',
        'value' => 'float',
        'value_type_id' => 'int',
        'valid_from' => 'string',
        'valid_to' => 'string',
        'display_in' => 'string[]',
        'type_id' => 'string',
        'presentation_data' => '\CrmCareCloud\Webservice\RestApi\Client\Model\CampaignPresentationData',
        'campaign_product_property_records' => '\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]',
        'last_change' => 'string',
        'state' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'campaign_product_id' => null,
        'product_id' => null,
        'currency_id' => null,
        'campaign_id' => null,
        'value' => 'float',
        'value_type_id' => null,
        'valid_from' => null,
        'valid_to' => null,
        'display_in' => null,
        'type_id' => null,
        'presentation_data' => null,
        'campaign_product_property_records' => null,
        'last_change' => null,
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
        'campaign_product_id' => 'campaign_product_id',
        'product_id' => 'product_id',
        'currency_id' => 'currency_id',
        'campaign_id' => 'campaign_id',
        'value' => 'value',
        'value_type_id' => 'value_type_id',
        'valid_from' => 'valid_from',
        'valid_to' => 'valid_to',
        'display_in' => 'display_in',
        'type_id' => 'type_id',
        'presentation_data' => 'presentation_data',
        'campaign_product_property_records' => 'campaign_product_property_records',
        'last_change' => 'last_change',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaign_product_id' => 'setCampaignProductId',
        'product_id' => 'setProductId',
        'currency_id' => 'setCurrencyId',
        'campaign_id' => 'setCampaignId',
        'value' => 'setValue',
        'value_type_id' => 'setValueTypeId',
        'valid_from' => 'setValidFrom',
        'valid_to' => 'setValidTo',
        'display_in' => 'setDisplayIn',
        'type_id' => 'setTypeId',
        'presentation_data' => 'setPresentationData',
        'campaign_product_property_records' => 'setCampaignProductPropertyRecords',
        'last_change' => 'setLastChange',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaign_product_id' => 'getCampaignProductId',
        'product_id' => 'getProductId',
        'currency_id' => 'getCurrencyId',
        'campaign_id' => 'getCampaignId',
        'value' => 'getValue',
        'value_type_id' => 'getValueTypeId',
        'valid_from' => 'getValidFrom',
        'valid_to' => 'getValidTo',
        'display_in' => 'getDisplayIn',
        'type_id' => 'getTypeId',
        'presentation_data' => 'getPresentationData',
        'campaign_product_property_records' => 'getCampaignProductPropertyRecords',
        'last_change' => 'getLastChange',
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

    const VALUE_TYPE_ID_1 = 1;
const VALUE_TYPE_ID_2 = 2;
const STATE_0 = 0;
const STATE_1 = 1;

    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getValueTypeIdAllowableValues()
    {
        return [
            self::VALUE_TYPE_ID_1,
self::VALUE_TYPE_ID_2,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_0,
self::STATE_1,        ];
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
        $this->container['campaign_product_id'] = isset($data['campaign_product_id']) ? $data['campaign_product_id'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['value_type_id'] = isset($data['value_type_id']) ? $data['value_type_id'] : null;
        $this->container['valid_from'] = isset($data['valid_from']) ? $data['valid_from'] : null;
        $this->container['valid_to'] = isset($data['valid_to']) ? $data['valid_to'] : null;
        $this->container['display_in'] = isset($data['display_in']) ? $data['display_in'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['presentation_data'] = isset($data['presentation_data']) ? $data['presentation_data'] : null;
        $this->container['campaign_product_property_records'] = isset($data['campaign_product_property_records']) ? $data['campaign_product_property_records'] : null;
        $this->container['last_change'] = isset($data['last_change']) ? $data['last_change'] : null;
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

        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['currency_id'] === null) {
            $invalidProperties[] = "'currency_id' can't be null";
        }
        if ($this->container['campaign_id'] === null) {
            $invalidProperties[] = "'campaign_id' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['value_type_id'] === null) {
            $invalidProperties[] = "'value_type_id' can't be null";
        }
        $allowedValues = $this->getValueTypeIdAllowableValues();
        if (!is_null($this->container['value_type_id']) && !in_array($this->container['value_type_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'value_type_id', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['valid_from'] === null) {
            $invalidProperties[] = "'valid_from' can't be null";
        }
        if ($this->container['valid_to'] === null) {
            $invalidProperties[] = "'valid_to' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalidProperties[] = "'type_id' can't be null";
        }
        if ($this->container['presentation_data'] === null) {
            $invalidProperties[] = "'presentation_data' can't be null";
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
     * Gets campaign_product_id
     *
     * @return string
     */
    public function getCampaignProductId()
    {
        return $this->container['campaign_product_id'];
    }

    /**
     * Sets campaign_product_id
     *
     * @param string $campaign_product_id The unique ID of the campaign product.
     *
     * @return $this
     */
    public function setCampaignProductId($campaign_product_id)
    {
        $this->container['campaign_product_id'] = $campaign_product_id;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id The unique ID of the product.
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

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
     * Gets campaign_id
     *
     * @return string
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param string $campaign_id The unique ID of the campaign.
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value Value of the product.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets value_type_id
     *
     * @return int
     */
    public function getValueTypeId()
    {
        return $this->container['value_type_id'];
    }

    /**
     * Sets value_type_id
     *
     * @param int $value_type_id Type of value (1 - percentage discount value, 2 - final price).
     *
     * @return $this
     */
    public function setValueTypeId($value_type_id)
    {
        $allowedValues = $this->getValueTypeIdAllowableValues();
        if (!in_array($value_type_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'value_type_id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['value_type_id'] = $value_type_id;

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
     * @param string $valid_from Validity of the campaign product from the date. *(YYYY-MM-DD HH:MM:SS)*
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
     * @param string $valid_to Validity of the campaign product to the date. *(YYYY-MM-DD HH:MM:SS)*
     *
     * @return $this
     */
    public function setValidTo($valid_to)
    {
        $this->container['valid_to'] = $valid_to;

        return $this;
    }

    /**
     * Gets display_in
     *
     * @return string[]
     */
    public function getDisplayIn()
    {
        return $this->container['display_in'];
    }

    /**
     * Sets display_in
     *
     * @param string[] $display_in List of possible display places.
     *
     * @return $this
     */
    public function setDisplayIn($display_in)
    {
        $this->container['display_in'] = $display_in;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return string
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param string $type_id Type of a campaign product.
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets presentation_data
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\CampaignPresentationData
     */
    public function getPresentationData()
    {
        return $this->container['presentation_data'];
    }

    /**
     * Sets presentation_data
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\CampaignPresentationData $presentation_data presentation_data
     *
     * @return $this
     */
    public function setPresentationData($presentation_data)
    {
        $this->container['presentation_data'] = $presentation_data;

        return $this;
    }

    /**
     * Gets campaign_product_property_records
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]
     */
    public function getCampaignProductPropertyRecords()
    {
        return $this->container['campaign_product_property_records'];
    }

    /**
     * Sets campaign_product_property_records
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[] $campaign_product_property_records List of campaign product property records.
     *
     * @return $this
     */
    public function setCampaignProductPropertyRecords($campaign_product_property_records)
    {
        $this->container['campaign_product_property_records'] = $campaign_product_property_records;

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
     * @param int $state State of the card. *Possible values are: 0 - blocked / 1 - active*
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
