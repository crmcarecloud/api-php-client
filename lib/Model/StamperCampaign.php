<?php
/**
 * StamperCampaign
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
 * StamperCampaign Class Doc Comment
 *
 * @category Class
 * @description Stamper campaign resource.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StamperCampaign implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StamperCampaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'stamper_campaign_id' => 'string',
        'partner_id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'stamp_count' => 'int',
        'valid_from' => 'string',
        'valid_to' => 'string',
        'count_of_campaign_repetitions' => 'int',
        'stamper_conditions' => '\CrmCareCloud\Webservice\RestApi\Client\Model\StamperCondition[]',
        'stamper_bonus_checkpoints' => '\CrmCareCloud\Webservice\RestApi\Client\Model\StamperBonusCheckpoint[]',
        'last_change' => 'string',
        'state' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'stamper_campaign_id' => null,
        'partner_id' => null,
        'name' => null,
        'description' => null,
        'stamp_count' => null,
        'valid_from' => null,
        'valid_to' => null,
        'count_of_campaign_repetitions' => null,
        'stamper_conditions' => null,
        'stamper_bonus_checkpoints' => null,
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
        'stamper_campaign_id' => 'stamper_campaign_id',
        'partner_id' => 'partner_id',
        'name' => 'name',
        'description' => 'description',
        'stamp_count' => 'stamp_count',
        'valid_from' => 'valid_from',
        'valid_to' => 'valid_to',
        'count_of_campaign_repetitions' => 'count_of_campaign_repetitions',
        'stamper_conditions' => 'stamper_conditions',
        'stamper_bonus_checkpoints' => 'stamper_bonus_checkpoints',
        'last_change' => 'last_change',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stamper_campaign_id' => 'setStamperCampaignId',
        'partner_id' => 'setPartnerId',
        'name' => 'setName',
        'description' => 'setDescription',
        'stamp_count' => 'setStampCount',
        'valid_from' => 'setValidFrom',
        'valid_to' => 'setValidTo',
        'count_of_campaign_repetitions' => 'setCountOfCampaignRepetitions',
        'stamper_conditions' => 'setStamperConditions',
        'stamper_bonus_checkpoints' => 'setStamperBonusCheckpoints',
        'last_change' => 'setLastChange',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stamper_campaign_id' => 'getStamperCampaignId',
        'partner_id' => 'getPartnerId',
        'name' => 'getName',
        'description' => 'getDescription',
        'stamp_count' => 'getStampCount',
        'valid_from' => 'getValidFrom',
        'valid_to' => 'getValidTo',
        'count_of_campaign_repetitions' => 'getCountOfCampaignRepetitions',
        'stamper_conditions' => 'getStamperConditions',
        'stamper_bonus_checkpoints' => 'getStamperBonusCheckpoints',
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

    const STATE_0 = 0;
const STATE_1 = 1;

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
        $this->container['stamper_campaign_id'] = isset($data['stamper_campaign_id']) ? $data['stamper_campaign_id'] : null;
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['stamp_count'] = isset($data['stamp_count']) ? $data['stamp_count'] : null;
        $this->container['valid_from'] = isset($data['valid_from']) ? $data['valid_from'] : null;
        $this->container['valid_to'] = isset($data['valid_to']) ? $data['valid_to'] : null;
        $this->container['count_of_campaign_repetitions'] = isset($data['count_of_campaign_repetitions']) ? $data['count_of_campaign_repetitions'] : null;
        $this->container['stamper_conditions'] = isset($data['stamper_conditions']) ? $data['stamper_conditions'] : null;
        $this->container['stamper_bonus_checkpoints'] = isset($data['stamper_bonus_checkpoints']) ? $data['stamper_bonus_checkpoints'] : null;
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
     * Gets stamper_campaign_id
     *
     * @return string
     */
    public function getStamperCampaignId()
    {
        return $this->container['stamper_campaign_id'];
    }

    /**
     * Sets stamper_campaign_id
     *
     * @param string $stamper_campaign_id The unique ID of the stamper campaign.
     *
     * @return $this
     */
    public function setStamperCampaignId($stamper_campaign_id)
    {
        $this->container['stamper_campaign_id'] = $stamper_campaign_id;

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
     * @param string $partner_id The unique ID of the CareCloud partner.
     *
     * @return $this
     */
    public function setPartnerId($partner_id)
    {
        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the stamper campaign. The translation is return depending on the language value in the HTTP request header `Accept-Language`.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the stamper campaign. The translation is return depending on the language value in the HTTP request header `Accept-Language`.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets stamp_count
     *
     * @return int
     */
    public function getStampCount()
    {
        return $this->container['stamp_count'];
    }

    /**
     * Sets stamp_count
     *
     * @param int $stamp_count The amount of stamps on the stamp card.
     *
     * @return $this
     */
    public function setStampCount($stamp_count)
    {
        $this->container['stamp_count'] = $stamp_count;

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
     * @param string $valid_from Stamp campaign validity from. *(YYYY-MM-DD HH:MM:SS)*
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
     * @param string $valid_to Stamp campaign validity to. *(YYYY-MM-DD HH:MM:SS)*
     *
     * @return $this
     */
    public function setValidTo($valid_to)
    {
        $this->container['valid_to'] = $valid_to;

        return $this;
    }

    /**
     * Gets count_of_campaign_repetitions
     *
     * @return int
     */
    public function getCountOfCampaignRepetitions()
    {
        return $this->container['count_of_campaign_repetitions'];
    }

    /**
     * Sets count_of_campaign_repetitions
     *
     * @param int $count_of_campaign_repetitions The number how many times can be campaign repeated. The number says how many stamper cards could be filled by customer in that campaign.
     *
     * @return $this
     */
    public function setCountOfCampaignRepetitions($count_of_campaign_repetitions)
    {
        $this->container['count_of_campaign_repetitions'] = $count_of_campaign_repetitions;

        return $this;
    }

    /**
     * Gets stamper_conditions
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\StamperCondition[]
     */
    public function getStamperConditions()
    {
        return $this->container['stamper_conditions'];
    }

    /**
     * Sets stamper_conditions
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\StamperCondition[] $stamper_conditions List of defined stamper conditions.
     *
     * @return $this
     */
    public function setStamperConditions($stamper_conditions)
    {
        $this->container['stamper_conditions'] = $stamper_conditions;

        return $this;
    }

    /**
     * Gets stamper_bonus_checkpoints
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\StamperBonusCheckpoint[]
     */
    public function getStamperBonusCheckpoints()
    {
        return $this->container['stamper_bonus_checkpoints'];
    }

    /**
     * Sets stamper_bonus_checkpoints
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\StamperBonusCheckpoint[] $stamper_bonus_checkpoints List of defined stamper checkpoints for bonuses.
     *
     * @return $this
     */
    public function setStamperBonusCheckpoints($stamper_bonus_checkpoints)
    {
        $this->container['stamper_bonus_checkpoints'] = $stamper_bonus_checkpoints;

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
     * @param int $state State of the stamper campaign. *Possible values are: 0 - deleted / 1 - active*
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
