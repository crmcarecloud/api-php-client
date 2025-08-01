<?php
/**
 * GetPurchasePaymentSummary200ResponseData
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
 * GetPurchasePaymentSummary200ResponseData Class Doc Comment
 *
 * @category Class
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetPurchasePaymentSummary200ResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetPurchasePaymentSummary200Response_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'earned_points' => 'float',
        'used_credits' => 'float',
        'used_points' => 'float',
        'used_points_total' => 'float',
        'used_vouchers' => '\CrmCareCloud\Webservice\RestApi\Client\Model\Voucher[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'earned_points' => 'float',
        'used_credits' => 'float',
        'used_points' => 'float',
        'used_points_total' => 'float',
        'used_vouchers' => null
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
        'earned_points' => 'earned_points',
        'used_credits' => 'used_credits',
        'used_points' => 'used_points',
        'used_points_total' => 'used_points_total',
        'used_vouchers' => 'used_vouchers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'earned_points' => 'setEarnedPoints',
        'used_credits' => 'setUsedCredits',
        'used_points' => 'setUsedPoints',
        'used_points_total' => 'setUsedPointsTotal',
        'used_vouchers' => 'setUsedVouchers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'earned_points' => 'getEarnedPoints',
        'used_credits' => 'getUsedCredits',
        'used_points' => 'getUsedPoints',
        'used_points_total' => 'getUsedPointsTotal',
        'used_vouchers' => 'getUsedVouchers'
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
        $this->container['earned_points'] = isset($data['earned_points']) ? $data['earned_points'] : null;
        $this->container['used_credits'] = isset($data['used_credits']) ? $data['used_credits'] : null;
        $this->container['used_points'] = isset($data['used_points']) ? $data['used_points'] : null;
        $this->container['used_points_total'] = isset($data['used_points_total']) ? $data['used_points_total'] : null;
        $this->container['used_vouchers'] = isset($data['used_vouchers']) ? $data['used_vouchers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets earned_points
     *
     * @return float
     */
    public function getEarnedPoints()
    {
        return $this->container['earned_points'];
    }

    /**
     * Sets earned_points
     *
     * @param float $earned_points Amount of earned points of the purchase.
     *
     * @return $this
     */
    public function setEarnedPoints($earned_points)
    {
        $this->container['earned_points'] = $earned_points;

        return $this;
    }

    /**
     * Gets used_credits
     *
     * @return float
     */
    public function getUsedCredits()
    {
        return $this->container['used_credits'];
    }

    /**
     * Sets used_credits
     *
     * @param float $used_credits Amount of credits used to pay of the purchase.
     *
     * @return $this
     */
    public function setUsedCredits($used_credits)
    {
        $this->container['used_credits'] = $used_credits;

        return $this;
    }

    /**
     * Gets used_points
     *
     * @return float
     */
    public function getUsedPoints()
    {
        return $this->container['used_points'];
    }

    /**
     * Sets used_points
     *
     * @param float $used_points Amount of points used to pay of the purchase.
     *
     * @return $this
     */
    public function setUsedPoints($used_points)
    {
        $this->container['used_points'] = $used_points;

        return $this;
    }

    /**
     * Gets used_points_total
     *
     * @return float
     */
    public function getUsedPointsTotal()
    {
        return $this->container['used_points_total'];
    }

    /**
     * Sets used_points_total
     *
     * @param float $used_points_total Amount of points used to pay and used in vouchers of the purchase.
     *
     * @return $this
     */
    public function setUsedPointsTotal($used_points_total)
    {
        $this->container['used_points_total'] = $used_points_total;

        return $this;
    }

    /**
     * Gets used_vouchers
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\Voucher[]
     */
    public function getUsedVouchers()
    {
        return $this->container['used_vouchers'];
    }

    /**
     * Sets used_vouchers
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\Voucher[] $used_vouchers List of used vouchers.
     *
     * @return $this
     */
    public function setUsedVouchers($used_vouchers)
    {
        $this->container['used_vouchers'] = $used_vouchers;

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
