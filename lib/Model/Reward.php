<?php
/**
 * Reward
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
 * Reward Class Doc Comment
 *
 * @category Class
 * @description Reward structure.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Reward implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Reward';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'reward_id' => 'string',
        'code' => 'string',
        'name' => 'string',
        'note' => 'string',
        'subtitle' => 'string',
        'points_cost' => 'float',
        'valid_time_from' => 'string',
        'valid_time_to' => 'string',
        'reward_group' => 'int',
        'reward_type_id' => 'string',
        'store_list' => '\CrmCareCloud\Webservice\RestApi\Client\Model\Store[]',
        'additional_properties' => '\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]',
        'priority' => 'int',
        'image_urls' => 'string[]',
        'reward_external_url' => 'string',
        'has_product_condition' => 'bool',
        'has_group_condition' => 'bool',
        'has_brand_condition' => 'bool',
        'has_product_bonus' => 'bool',
        'has_group_bonus' => 'bool',
        'has_brand_bonus' => 'bool',
        'reward_product_relation_conditions' => '\CrmCareCloud\Webservice\RestApi\Client\Model\RewardProductRelationCondition[]',
        'reward_product_relation_bonuses' => '\CrmCareCloud\Webservice\RestApi\Client\Model\RewardProductRelationBonus[]',
        'is_automated' => 'bool',
        'tags' => '\CrmCareCloud\Webservice\RestApi\Client\Model\Tag[]',
        'last_change' => 'string',
        'state' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'reward_id' => null,
        'code' => null,
        'name' => null,
        'note' => null,
        'subtitle' => null,
        'points_cost' => 'float',
        'valid_time_from' => null,
        'valid_time_to' => null,
        'reward_group' => null,
        'reward_type_id' => null,
        'store_list' => null,
        'additional_properties' => null,
        'priority' => null,
        'image_urls' => null,
        'reward_external_url' => null,
        'has_product_condition' => null,
        'has_group_condition' => null,
        'has_brand_condition' => null,
        'has_product_bonus' => null,
        'has_group_bonus' => null,
        'has_brand_bonus' => null,
        'reward_product_relation_conditions' => null,
        'reward_product_relation_bonuses' => null,
        'is_automated' => null,
        'tags' => null,
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
        'reward_id' => 'reward_id',
        'code' => 'code',
        'name' => 'name',
        'note' => 'note',
        'subtitle' => 'subtitle',
        'points_cost' => 'points_cost',
        'valid_time_from' => 'valid_time_from',
        'valid_time_to' => 'valid_time_to',
        'reward_group' => 'reward_group',
        'reward_type_id' => 'reward_type_id',
        'store_list' => 'store_list',
        'additional_properties' => 'additional_properties',
        'priority' => 'priority',
        'image_urls' => 'image_urls',
        'reward_external_url' => 'reward_external_url',
        'has_product_condition' => 'has_product_condition',
        'has_group_condition' => 'has_group_condition',
        'has_brand_condition' => 'has_brand_condition',
        'has_product_bonus' => 'has_product_bonus',
        'has_group_bonus' => 'has_group_bonus',
        'has_brand_bonus' => 'has_brand_bonus',
        'reward_product_relation_conditions' => 'reward_product_relation_conditions',
        'reward_product_relation_bonuses' => 'reward_product_relation_bonuses',
        'is_automated' => 'is_automated',
        'tags' => 'tags',
        'last_change' => 'last_change',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reward_id' => 'setRewardId',
        'code' => 'setCode',
        'name' => 'setName',
        'note' => 'setNote',
        'subtitle' => 'setSubtitle',
        'points_cost' => 'setPointsCost',
        'valid_time_from' => 'setValidTimeFrom',
        'valid_time_to' => 'setValidTimeTo',
        'reward_group' => 'setRewardGroup',
        'reward_type_id' => 'setRewardTypeId',
        'store_list' => 'setStoreList',
        'additional_properties' => 'setAdditionalProperties',
        'priority' => 'setPriority',
        'image_urls' => 'setImageUrls',
        'reward_external_url' => 'setRewardExternalUrl',
        'has_product_condition' => 'setHasProductCondition',
        'has_group_condition' => 'setHasGroupCondition',
        'has_brand_condition' => 'setHasBrandCondition',
        'has_product_bonus' => 'setHasProductBonus',
        'has_group_bonus' => 'setHasGroupBonus',
        'has_brand_bonus' => 'setHasBrandBonus',
        'reward_product_relation_conditions' => 'setRewardProductRelationConditions',
        'reward_product_relation_bonuses' => 'setRewardProductRelationBonuses',
        'is_automated' => 'setIsAutomated',
        'tags' => 'setTags',
        'last_change' => 'setLastChange',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reward_id' => 'getRewardId',
        'code' => 'getCode',
        'name' => 'getName',
        'note' => 'getNote',
        'subtitle' => 'getSubtitle',
        'points_cost' => 'getPointsCost',
        'valid_time_from' => 'getValidTimeFrom',
        'valid_time_to' => 'getValidTimeTo',
        'reward_group' => 'getRewardGroup',
        'reward_type_id' => 'getRewardTypeId',
        'store_list' => 'getStoreList',
        'additional_properties' => 'getAdditionalProperties',
        'priority' => 'getPriority',
        'image_urls' => 'getImageUrls',
        'reward_external_url' => 'getRewardExternalUrl',
        'has_product_condition' => 'getHasProductCondition',
        'has_group_condition' => 'getHasGroupCondition',
        'has_brand_condition' => 'getHasBrandCondition',
        'has_product_bonus' => 'getHasProductBonus',
        'has_group_bonus' => 'getHasGroupBonus',
        'has_brand_bonus' => 'getHasBrandBonus',
        'reward_product_relation_conditions' => 'getRewardProductRelationConditions',
        'reward_product_relation_bonuses' => 'getRewardProductRelationBonuses',
        'is_automated' => 'getIsAutomated',
        'tags' => 'getTags',
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

    const REWARD_GROUP_0 = 0;
const REWARD_GROUP_1 = 1;
const REWARD_GROUP_2 = 2;
const REWARD_GROUP_4 = 4;
const PRIORITY_1 = 1;
const PRIORITY_2 = 2;
const PRIORITY_3 = 3;
const PRIORITY_4 = 4;
const PRIORITY_5 = 5;
const PRIORITY_6 = 6;
const PRIORITY_7 = 7;
const PRIORITY_8 = 8;
const PRIORITY_9 = 9;
const STATE_0 = 0;
const STATE_1 = 1;
const STATE_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getRewardGroupAllowableValues()
    {
        return [
            self::REWARD_GROUP_0,
self::REWARD_GROUP_1,
self::REWARD_GROUP_2,
self::REWARD_GROUP_4,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getPriorityAllowableValues()
    {
        return [
            self::PRIORITY_1,
self::PRIORITY_2,
self::PRIORITY_3,
self::PRIORITY_4,
self::PRIORITY_5,
self::PRIORITY_6,
self::PRIORITY_7,
self::PRIORITY_8,
self::PRIORITY_9,        ];
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
        $this->container['reward_id'] = isset($data['reward_id']) ? $data['reward_id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['subtitle'] = isset($data['subtitle']) ? $data['subtitle'] : null;
        $this->container['points_cost'] = isset($data['points_cost']) ? $data['points_cost'] : null;
        $this->container['valid_time_from'] = isset($data['valid_time_from']) ? $data['valid_time_from'] : null;
        $this->container['valid_time_to'] = isset($data['valid_time_to']) ? $data['valid_time_to'] : null;
        $this->container['reward_group'] = isset($data['reward_group']) ? $data['reward_group'] : null;
        $this->container['reward_type_id'] = isset($data['reward_type_id']) ? $data['reward_type_id'] : null;
        $this->container['store_list'] = isset($data['store_list']) ? $data['store_list'] : null;
        $this->container['additional_properties'] = isset($data['additional_properties']) ? $data['additional_properties'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['image_urls'] = isset($data['image_urls']) ? $data['image_urls'] : null;
        $this->container['reward_external_url'] = isset($data['reward_external_url']) ? $data['reward_external_url'] : null;
        $this->container['has_product_condition'] = isset($data['has_product_condition']) ? $data['has_product_condition'] : null;
        $this->container['has_group_condition'] = isset($data['has_group_condition']) ? $data['has_group_condition'] : null;
        $this->container['has_brand_condition'] = isset($data['has_brand_condition']) ? $data['has_brand_condition'] : null;
        $this->container['has_product_bonus'] = isset($data['has_product_bonus']) ? $data['has_product_bonus'] : null;
        $this->container['has_group_bonus'] = isset($data['has_group_bonus']) ? $data['has_group_bonus'] : null;
        $this->container['has_brand_bonus'] = isset($data['has_brand_bonus']) ? $data['has_brand_bonus'] : null;
        $this->container['reward_product_relation_conditions'] = isset($data['reward_product_relation_conditions']) ? $data['reward_product_relation_conditions'] : null;
        $this->container['reward_product_relation_bonuses'] = isset($data['reward_product_relation_bonuses']) ? $data['reward_product_relation_bonuses'] : null;
        $this->container['is_automated'] = isset($data['is_automated']) ? $data['is_automated'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['reward_group'] === null) {
            $invalidProperties[] = "'reward_group' can't be null";
        }
        $allowedValues = $this->getRewardGroupAllowableValues();
        if (!is_null($this->container['reward_group']) && !in_array($this->container['reward_group'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reward_group', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['store_list'] === null) {
            $invalidProperties[] = "'store_list' can't be null";
        }
        $allowedValues = $this->getPriorityAllowableValues();
        if (!is_null($this->container['priority']) && !in_array($this->container['priority'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'priority', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets reward_id
     *
     * @return string
     */
    public function getRewardId()
    {
        return $this->container['reward_id'];
    }

    /**
     * Sets reward_id
     *
     * @param string $reward_id The unique ID of the reward.
     *
     * @return $this
     */
    public function setRewardId($reward_id)
    {
        $this->container['reward_id'] = $reward_id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Code of the reward.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * @param string $name Name of the reward.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note Additional text.
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->container['subtitle'];
    }

    /**
     * Sets subtitle
     *
     * @param string $subtitle Text of subtitle.
     *
     * @return $this
     */
    public function setSubtitle($subtitle)
    {
        $this->container['subtitle'] = $subtitle;

        return $this;
    }

    /**
     * Gets points_cost
     *
     * @return float
     */
    public function getPointsCost()
    {
        return $this->container['points_cost'];
    }

    /**
     * Sets points_cost
     *
     * @param float $points_cost Number of points, that will be spent by the voucher redemption.
     *
     * @return $this
     */
    public function setPointsCost($points_cost)
    {
        $this->container['points_cost'] = $points_cost;

        return $this;
    }

    /**
     * Gets valid_time_from
     *
     * @return string
     */
    public function getValidTimeFrom()
    {
        return $this->container['valid_time_from'];
    }

    /**
     * Sets valid_time_from
     *
     * @param string $valid_time_from Time the reward is valid from. *(HH:MM:SS)*
     *
     * @return $this
     */
    public function setValidTimeFrom($valid_time_from)
    {
        $this->container['valid_time_from'] = $valid_time_from;

        return $this;
    }

    /**
     * Gets valid_time_to
     *
     * @return string
     */
    public function getValidTimeTo()
    {
        return $this->container['valid_time_to'];
    }

    /**
     * Sets valid_time_to
     *
     * @param string $valid_time_to Time the reward is valid to. *(HH:MM:SS)*
     *
     * @return $this
     */
    public function setValidTimeTo($valid_time_to)
    {
        $this->container['valid_time_to'] = $valid_time_to;

        return $this;
    }

    /**
     * Gets reward_group
     *
     * @return int
     */
    public function getRewardGroup()
    {
        return $this->container['reward_group'];
    }

    /**
     * Sets reward_group
     *
     * @param int $reward_group The unique ID of the reward group. *Possible values: 0 - party time voucher / 1 - catalog voucher / 2 - campaign voucher/ 4 - simple reward*
     *
     * @return $this
     */
    public function setRewardGroup($reward_group)
    {
        $allowedValues = $this->getRewardGroupAllowableValues();
        if (!in_array($reward_group, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reward_group', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reward_group'] = $reward_group;

        return $this;
    }

    /**
     * Gets reward_type_id
     *
     * @return string
     */
    public function getRewardTypeId()
    {
        return $this->container['reward_type_id'];
    }

    /**
     * Sets reward_type_id
     *
     * @param string $reward_type_id The type of reward describes the reward behavior. For example, a Percentage discount, Buy one + get one discounted product, and others.
     *
     * @return $this
     */
    public function setRewardTypeId($reward_type_id)
    {
        $this->container['reward_type_id'] = $reward_type_id;

        return $this;
    }

    /**
     * Gets store_list
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\Store[]
     */
    public function getStoreList()
    {
        return $this->container['store_list'];
    }

    /**
     * Sets store_list
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\Store[] $store_list List of the stores where the reward can be redeemed.
     *
     * @return $this
     */
    public function setStoreList($store_list)
    {
        $this->container['store_list'] = $store_list;

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
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[] $additional_properties Additional properties.
     *
     * @return $this
     */
    public function setAdditionalProperties($additional_properties)
    {
        $this->container['additional_properties'] = $additional_properties;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority Priority of the reward. *1 is the highest priority*
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $allowedValues = $this->getPriorityAllowableValues();
        if (!is_null($priority) && !in_array($priority, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'priority', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets image_urls
     *
     * @return string[]
     */
    public function getImageUrls()
    {
        return $this->container['image_urls'];
    }

    /**
     * Sets image_urls
     *
     * @param string[] $image_urls List of reward image URL addresses.
     *
     * @return $this
     */
    public function setImageUrls($image_urls)
    {
        $this->container['image_urls'] = $image_urls;

        return $this;
    }

    /**
     * Gets reward_external_url
     *
     * @return string
     */
    public function getRewardExternalUrl()
    {
        return $this->container['reward_external_url'];
    }

    /**
     * Sets reward_external_url
     *
     * @param string $reward_external_url External URL addresses.
     *
     * @return $this
     */
    public function setRewardExternalUrl($reward_external_url)
    {
        $this->container['reward_external_url'] = $reward_external_url;

        return $this;
    }

    /**
     * Gets has_product_condition
     *
     * @return bool
     */
    public function getHasProductCondition()
    {
        return $this->container['has_product_condition'];
    }

    /**
     * Sets has_product_condition
     *
     * @param bool $has_product_condition Parameter says, if there is product condition on reward.
     *
     * @return $this
     */
    public function setHasProductCondition($has_product_condition)
    {
        $this->container['has_product_condition'] = $has_product_condition;

        return $this;
    }

    /**
     * Gets has_group_condition
     *
     * @return bool
     */
    public function getHasGroupCondition()
    {
        return $this->container['has_group_condition'];
    }

    /**
     * Sets has_group_condition
     *
     * @param bool $has_group_condition Parameter says, if there is group condition on reward.
     *
     * @return $this
     */
    public function setHasGroupCondition($has_group_condition)
    {
        $this->container['has_group_condition'] = $has_group_condition;

        return $this;
    }

    /**
     * Gets has_brand_condition
     *
     * @return bool
     */
    public function getHasBrandCondition()
    {
        return $this->container['has_brand_condition'];
    }

    /**
     * Sets has_brand_condition
     *
     * @param bool $has_brand_condition Parameter says, if there is brand condition on reward.
     *
     * @return $this
     */
    public function setHasBrandCondition($has_brand_condition)
    {
        $this->container['has_brand_condition'] = $has_brand_condition;

        return $this;
    }

    /**
     * Gets has_product_bonus
     *
     * @return bool
     */
    public function getHasProductBonus()
    {
        return $this->container['has_product_bonus'];
    }

    /**
     * Sets has_product_bonus
     *
     * @param bool $has_product_bonus Parameter says, if there is product bonus on reward.
     *
     * @return $this
     */
    public function setHasProductBonus($has_product_bonus)
    {
        $this->container['has_product_bonus'] = $has_product_bonus;

        return $this;
    }

    /**
     * Gets has_group_bonus
     *
     * @return bool
     */
    public function getHasGroupBonus()
    {
        return $this->container['has_group_bonus'];
    }

    /**
     * Sets has_group_bonus
     *
     * @param bool $has_group_bonus Parameter says, if there is group bonus on reward.
     *
     * @return $this
     */
    public function setHasGroupBonus($has_group_bonus)
    {
        $this->container['has_group_bonus'] = $has_group_bonus;

        return $this;
    }

    /**
     * Gets has_brand_bonus
     *
     * @return bool
     */
    public function getHasBrandBonus()
    {
        return $this->container['has_brand_bonus'];
    }

    /**
     * Sets has_brand_bonus
     *
     * @param bool $has_brand_bonus Parameter says, if there is brand bonus on reward.
     *
     * @return $this
     */
    public function setHasBrandBonus($has_brand_bonus)
    {
        $this->container['has_brand_bonus'] = $has_brand_bonus;

        return $this;
    }

    /**
     * Gets reward_product_relation_conditions
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\RewardProductRelationCondition[]
     */
    public function getRewardProductRelationConditions()
    {
        return $this->container['reward_product_relation_conditions'];
    }

    /**
     * Sets reward_product_relation_conditions
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\RewardProductRelationCondition[] $reward_product_relation_conditions Conditions between reward and product.
     *
     * @return $this
     */
    public function setRewardProductRelationConditions($reward_product_relation_conditions)
    {
        $this->container['reward_product_relation_conditions'] = $reward_product_relation_conditions;

        return $this;
    }

    /**
     * Gets reward_product_relation_bonuses
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\RewardProductRelationBonus[]
     */
    public function getRewardProductRelationBonuses()
    {
        return $this->container['reward_product_relation_bonuses'];
    }

    /**
     * Sets reward_product_relation_bonuses
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\RewardProductRelationBonus[] $reward_product_relation_bonuses Bonuses between reward and product.
     *
     * @return $this
     */
    public function setRewardProductRelationBonuses($reward_product_relation_bonuses)
    {
        $this->container['reward_product_relation_bonuses'] = $reward_product_relation_bonuses;

        return $this;
    }

    /**
     * Gets is_automated
     *
     * @return bool
     */
    public function getIsAutomated()
    {
        return $this->container['is_automated'];
    }

    /**
     * Sets is_automated
     *
     * @param bool $is_automated Parameter says, if reward is automated or not. If reward is automated, means it's applied by rules of the reward. Otherwise have to be applied manually.
     *
     * @return $this
     */
    public function setIsAutomated($is_automated)
    {
        $this->container['is_automated'] = $is_automated;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\Tag[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\Tag[] $tags List of the tags assigned to the reward.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
     * @param int $state State of the reward *Possible values are: 0 - deleted / 1 - active / 2 - non active*
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
