<?php
/**
 * PersonalInformation
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
 * Swagger Codegen version: 3.0.26
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
 * PersonalInformation Class Doc Comment
 *
 * @category Class
 * @description Personal information of the customer.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PersonalInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PersonalInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'salutation' => 'string',
'gender' => 'int',
'first_name' => 'string',
'last_name' => 'string',
'pre_nominals' => 'string',
'post_nominals' => 'string',
'birthdate' => '\DateTime',
'email' => 'string',
'phone' => 'string',
'language_id' => 'string',
'store_id' => 'string',
'photo_url' => 'string',
'address' => '\CrmCareCloud\Webservice\RestApi\Client\Model\Address',
'agreement' => '\CrmCareCloud\Webservice\RestApi\Client\Model\Agreement'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'salutation' => null,
'gender' => null,
'first_name' => null,
'last_name' => null,
'pre_nominals' => null,
'post_nominals' => null,
'birthdate' => 'date',
'email' => null,
'phone' => null,
'language_id' => null,
'store_id' => null,
'photo_url' => null,
'address' => null,
'agreement' => null    ];

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
        'salutation' => 'salutation',
'gender' => 'gender',
'first_name' => 'first_name',
'last_name' => 'last_name',
'pre_nominals' => 'pre_nominals',
'post_nominals' => 'post_nominals',
'birthdate' => 'birthdate',
'email' => 'email',
'phone' => 'phone',
'language_id' => 'language_id',
'store_id' => 'store_id',
'photo_url' => 'photo_url',
'address' => 'address',
'agreement' => 'agreement'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'salutation' => 'setSalutation',
'gender' => 'setGender',
'first_name' => 'setFirstName',
'last_name' => 'setLastName',
'pre_nominals' => 'setPreNominals',
'post_nominals' => 'setPostNominals',
'birthdate' => 'setBirthdate',
'email' => 'setEmail',
'phone' => 'setPhone',
'language_id' => 'setLanguageId',
'store_id' => 'setStoreId',
'photo_url' => 'setPhotoUrl',
'address' => 'setAddress',
'agreement' => 'setAgreement'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'salutation' => 'getSalutation',
'gender' => 'getGender',
'first_name' => 'getFirstName',
'last_name' => 'getLastName',
'pre_nominals' => 'getPreNominals',
'post_nominals' => 'getPostNominals',
'birthdate' => 'getBirthdate',
'email' => 'getEmail',
'phone' => 'getPhone',
'language_id' => 'getLanguageId',
'store_id' => 'getStoreId',
'photo_url' => 'getPhotoUrl',
'address' => 'getAddress',
'agreement' => 'getAgreement'    ];

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

    const GENDER_1 = 1;
const GENDER_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_1,
self::GENDER_2,        ];
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
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['pre_nominals'] = isset($data['pre_nominals']) ? $data['pre_nominals'] : null;
        $this->container['post_nominals'] = isset($data['post_nominals']) ? $data['post_nominals'] : null;
        $this->container['birthdate'] = isset($data['birthdate']) ? $data['birthdate'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['language_id'] = isset($data['language_id']) ? $data['language_id'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['photo_url'] = isset($data['photo_url']) ? $data['photo_url'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['agreement'] = isset($data['agreement']) ? $data['agreement'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['language_id'] === null) {
            $invalidProperties[] = "'language_id' can't be null";
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
     * Gets salutation
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string $salutation Customer's salutation. If it is not set in POST or PUT calls, it will be generated automatically.
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return int
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param int $gender Gender of the customer *Possible values: 1 - male, 2 - female*
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name First name of the customer.
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Last name of the customer.
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets pre_nominals
     *
     * @return string
     */
    public function getPreNominals()
    {
        return $this->container['pre_nominals'];
    }

    /**
     * Sets pre_nominals
     *
     * @param string $pre_nominals Academic degrees, academic titles, other titles of customer placed before name.
     *
     * @return $this
     */
    public function setPreNominals($pre_nominals)
    {
        $this->container['pre_nominals'] = $pre_nominals;

        return $this;
    }

    /**
     * Gets post_nominals
     *
     * @return string
     */
    public function getPostNominals()
    {
        return $this->container['post_nominals'];
    }

    /**
     * Sets post_nominals
     *
     * @param string $post_nominals Academic degrees, academic titles, other titles of customer placed after name.
     *
     * @return $this
     */
    public function setPostNominals($post_nominals)
    {
        $this->container['post_nominals'] = $post_nominals;

        return $this;
    }

    /**
     * Gets birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->container['birthdate'];
    }

    /**
     * Sets birthdate
     *
     * @param \DateTime $birthdate Customer's date of birth. *(YYYY-MM-DD)*
     *
     * @return $this
     */
    public function setBirthdate($birthdate)
    {
        $this->container['birthdate'] = $birthdate;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email of the customer.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone number of the customer with international prefix (420000000000).
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets language_id
     *
     * @return string
     */
    public function getLanguageId()
    {
        return $this->container['language_id'];
    }

    /**
     * Sets language_id
     *
     * @param string $language_id The unique ID of the language by ISO 639-1 code.
     *
     * @return $this
     */
    public function setLanguageId($language_id)
    {
        $this->container['language_id'] = $language_id;

        return $this;
    }

    /**
     * Gets store_id
     *
     * @return string
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     *
     * @param string $store_id The unique ID of the original customer account store of registration. In case of the customer update, the request cant delete the parameter's value. Only updated.
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets photo_url
     *
     * @return string
     */
    public function getPhotoUrl()
    {
        return $this->container['photo_url'];
    }

    /**
     * Sets photo_url
     *
     * @param string $photo_url URL address of the customer photo. If customer has no photo, this parameter is not send.
     *
     * @return $this
     */
    public function setPhotoUrl($photo_url)
    {
        $this->container['photo_url'] = $photo_url;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets agreement
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\Agreement
     */
    public function getAgreement()
    {
        return $this->container['agreement'];
    }

    /**
     * Sets agreement
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\Agreement $agreement agreement
     *
     * @return $this
     */
    public function setAgreement($agreement)
    {
        $this->container['agreement'] = $agreement;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
