<?php
/**
 * ProductSynchronizationForReward
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
 * ProductSynchronizationForReward Class Doc Comment
 *
 * @category Class
 * @description Product resource.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductSynchronizationForReward implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductSynchronizationForReward';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'product_id' => 'string',
        'plu_id' => '\CrmCareCloud\Webservice\RestApi\Client\Model\PluId',
        'reward_product_relation_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'product_id' => null,
        'plu_id' => null,
        'reward_product_relation_type' => null
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
        'product_id' => 'product_id',
        'plu_id' => 'plu_id',
        'reward_product_relation_type' => 'reward_product_relation_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'plu_id' => 'setPluId',
        'reward_product_relation_type' => 'setRewardProductRelationType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'plu_id' => 'getPluId',
        'reward_product_relation_type' => 'getRewardProductRelationType'
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

    const REWARD_PRODUCT_RELATION_TYPE_0 = 0;
const REWARD_PRODUCT_RELATION_TYPE_1 = 1;

    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getRewardProductRelationTypeAllowableValues()
    {
        return [
            self::REWARD_PRODUCT_RELATION_TYPE_0,
self::REWARD_PRODUCT_RELATION_TYPE_1,        ];
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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['plu_id'] = isset($data['plu_id']) ? $data['plu_id'] : null;
        $this->container['reward_product_relation_type'] = isset($data['reward_product_relation_type']) ? $data['reward_product_relation_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['reward_product_relation_type'] === null) {
            $invalidProperties[] = "'reward_product_relation_type' can't be null";
        }
        $allowedValues = $this->getRewardProductRelationTypeAllowableValues();
        if (!is_null($this->container['reward_product_relation_type']) && !in_array($this->container['reward_product_relation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reward_product_relation_type', must be one of '%s'",
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
     * @param string $product_id The unique ID of the product. Product ID is required when parameter `plu_ids` is not set.
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets plu_id
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\PluId
     */
    public function getPluId()
    {
        return $this->container['plu_id'];
    }

    /**
     * Sets plu_id
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\PluId $plu_id plu_id
     *
     * @return $this
     */
    public function setPluId($plu_id)
    {
        $this->container['plu_id'] = $plu_id;

        return $this;
    }

    /**
     * Gets reward_product_relation_type
     *
     * @return int
     */
    public function getRewardProductRelationType()
    {
        return $this->container['reward_product_relation_type'];
    }

    /**
     * Sets reward_product_relation_type
     *
     * @param int $reward_product_relation_type Describes the relation between the product and the reward. *Possible values:  0 - Condition - It is used when you need to list mandatory products in the shopping cart for reward application  / 1 - Bonus - It is used when products are part of a reward to the customer*
     *
     * @return $this
     */
    public function setRewardProductRelationType($reward_product_relation_type)
    {
        $allowedValues = $this->getRewardProductRelationTypeAllowableValues();
        if (!in_array($reward_product_relation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reward_product_relation_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reward_product_relation_type'] = $reward_product_relation_type;

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
