<?php
/**
 * Message
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
 * Message Class Doc Comment
 *
 * @category Class
 * @description Message resource.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Message implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Message';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'message_id' => 'string',
        'status' => 'int',
        'message_template_id' => 'string',
        'customer_id' => 'string',
        'contact' => 'string',
        'title' => 'string',
        'send_time' => 'string',
        'opened_time' => 'string',
        'mail_client_user_agent' => 'string',
        'mail_client_language' => 'string',
        'communication_channel_id' => 'int',
        'message_data' => '\CrmCareCloud\Webservice\RestApi\Client\Model\Parameter[]',
        'attachments' => '\CrmCareCloud\Webservice\RestApi\Client\Model\Attachment[]',
        'last_change' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'message_id' => null,
        'status' => null,
        'message_template_id' => null,
        'customer_id' => null,
        'contact' => null,
        'title' => null,
        'send_time' => null,
        'opened_time' => null,
        'mail_client_user_agent' => null,
        'mail_client_language' => null,
        'communication_channel_id' => null,
        'message_data' => null,
        'attachments' => null,
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
        'message_id' => 'message_id',
        'status' => 'status',
        'message_template_id' => 'message_template_id',
        'customer_id' => 'customer_id',
        'contact' => 'contact',
        'title' => 'title',
        'send_time' => 'send_time',
        'opened_time' => 'opened_time',
        'mail_client_user_agent' => 'mail_client_user_agent',
        'mail_client_language' => 'mail_client_language',
        'communication_channel_id' => 'communication_channel_id',
        'message_data' => 'message_data',
        'attachments' => 'attachments',
        'last_change' => 'last_change'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message_id' => 'setMessageId',
        'status' => 'setStatus',
        'message_template_id' => 'setMessageTemplateId',
        'customer_id' => 'setCustomerId',
        'contact' => 'setContact',
        'title' => 'setTitle',
        'send_time' => 'setSendTime',
        'opened_time' => 'setOpenedTime',
        'mail_client_user_agent' => 'setMailClientUserAgent',
        'mail_client_language' => 'setMailClientLanguage',
        'communication_channel_id' => 'setCommunicationChannelId',
        'message_data' => 'setMessageData',
        'attachments' => 'setAttachments',
        'last_change' => 'setLastChange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message_id' => 'getMessageId',
        'status' => 'getStatus',
        'message_template_id' => 'getMessageTemplateId',
        'customer_id' => 'getCustomerId',
        'contact' => 'getContact',
        'title' => 'getTitle',
        'send_time' => 'getSendTime',
        'opened_time' => 'getOpenedTime',
        'mail_client_user_agent' => 'getMailClientUserAgent',
        'mail_client_language' => 'getMailClientLanguage',
        'communication_channel_id' => 'getCommunicationChannelId',
        'message_data' => 'getMessageData',
        'attachments' => 'getAttachments',
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

    const STATUS_0 = 0;
const STATUS_1 = 1;
const STATUS_MINUS_1 = -1;
const STATUS_MINUS_2 = -2;
const STATUS_2 = 2;
const STATUS_4 = 4;
const COMMUNICATION_CHANNEL_ID_1 = 1;
const COMMUNICATION_CHANNEL_ID_2 = 2;
const COMMUNICATION_CHANNEL_ID_4 = 4;
const COMMUNICATION_CHANNEL_ID_5 = 5;

    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
self::STATUS_1,
self::STATUS_MINUS_1,
self::STATUS_MINUS_2,
self::STATUS_2,
self::STATUS_4,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getCommunicationChannelIdAllowableValues()
    {
        return [
            self::COMMUNICATION_CHANNEL_ID_1,
self::COMMUNICATION_CHANNEL_ID_2,
self::COMMUNICATION_CHANNEL_ID_4,
self::COMMUNICATION_CHANNEL_ID_5,        ];
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
        $this->container['message_id'] = isset($data['message_id']) ? $data['message_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message_template_id'] = isset($data['message_template_id']) ? $data['message_template_id'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['send_time'] = isset($data['send_time']) ? $data['send_time'] : null;
        $this->container['opened_time'] = isset($data['opened_time']) ? $data['opened_time'] : null;
        $this->container['mail_client_user_agent'] = isset($data['mail_client_user_agent']) ? $data['mail_client_user_agent'] : null;
        $this->container['mail_client_language'] = isset($data['mail_client_language']) ? $data['mail_client_language'] : null;
        $this->container['communication_channel_id'] = isset($data['communication_channel_id']) ? $data['communication_channel_id'] : null;
        $this->container['message_data'] = isset($data['message_data']) ? $data['message_data'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['message_template_id'] === null) {
            $invalidProperties[] = "'message_template_id' can't be null";
        }
        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['communication_channel_id'] === null) {
            $invalidProperties[] = "'communication_channel_id' can't be null";
        }
        $allowedValues = $this->getCommunicationChannelIdAllowableValues();
        if (!is_null($this->container['communication_channel_id']) && !in_array($this->container['communication_channel_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'communication_channel_id', must be one of '%s'",
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
     * Gets message_id
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param string $message_id The unique ID of the message.
     *
     * @return $this
     */
    public function setMessageId($message_id)
    {
        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status The status ID of the message. *Possible values are: 0 - message was not send / 1 - message was send successfully / -1 - message was not received (it was returned) / -2 - message was not received (soft bounce) / 2 - an error occurred while sending / 4 - customer has no agreements (GDPR)*
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets message_template_id
     *
     * @return string
     */
    public function getMessageTemplateId()
    {
        return $this->container['message_template_id'];
    }

    /**
     * Sets message_template_id
     *
     * @param string $message_template_id The unique ID of the message_template.
     *
     * @return $this
     */
    public function setMessageTemplateId($message_template_id)
    {
        $this->container['message_template_id'] = $message_template_id;

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
     * @param string $customer_id The unique ID of the card holder.
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param string $contact Email address or phone number of customer in case of send message to different contact than customer has in database.
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Subject of the email message/ Title of notification message / Preview of the text message . Mandatory only in case of email template.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets send_time
     *
     * @return string
     */
    public function getSendTime()
    {
        return $this->container['send_time'];
    }

    /**
     * Sets send_time
     *
     * @param string $send_time Date and time when message was send from server to recipient. *(YYYY-MM-DD HH:MM:SS)*
     *
     * @return $this
     */
    public function setSendTime($send_time)
    {
        $this->container['send_time'] = $send_time;

        return $this;
    }

    /**
     * Gets opened_time
     *
     * @return string
     */
    public function getOpenedTime()
    {
        return $this->container['opened_time'];
    }

    /**
     * Sets opened_time
     *
     * @param string $opened_time Date and time when message was opened by recipient. *(YYYY-MM-DD HH:MM:SS)*
     *
     * @return $this
     */
    public function setOpenedTime($opened_time)
    {
        $this->container['opened_time'] = $opened_time;

        return $this;
    }

    /**
     * Gets mail_client_user_agent
     *
     * @return string
     */
    public function getMailClientUserAgent()
    {
        return $this->container['mail_client_user_agent'];
    }

    /**
     * Sets mail_client_user_agent
     *
     * @param string $mail_client_user_agent User agent of the mail client application where message was opened.
     *
     * @return $this
     */
    public function setMailClientUserAgent($mail_client_user_agent)
    {
        $this->container['mail_client_user_agent'] = $mail_client_user_agent;

        return $this;
    }

    /**
     * Gets mail_client_language
     *
     * @return string
     */
    public function getMailClientLanguage()
    {
        return $this->container['mail_client_language'];
    }

    /**
     * Sets mail_client_language
     *
     * @param string $mail_client_language Language of the mail client application where message was opened.
     *
     * @return $this
     */
    public function setMailClientLanguage($mail_client_language)
    {
        $this->container['mail_client_language'] = $mail_client_language;

        return $this;
    }

    /**
     * Gets communication_channel_id
     *
     * @return int
     */
    public function getCommunicationChannelId()
    {
        return $this->container['communication_channel_id'];
    }

    /**
     * Sets communication_channel_id
     *
     * @param int $communication_channel_id The unique ID of the communication channel. *Possible values are: 1 - email / 2- SMS / 4 - PUSH notification (Apple or Google)/ 5 - internal system notification*
     *
     * @return $this
     */
    public function setCommunicationChannelId($communication_channel_id)
    {
        $allowedValues = $this->getCommunicationChannelIdAllowableValues();
        if (!in_array($communication_channel_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'communication_channel_id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['communication_channel_id'] = $communication_channel_id;

        return $this;
    }

    /**
     * Gets message_data
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\Parameter[]
     */
    public function getMessageData()
    {
        return $this->container['message_data'];
    }

    /**
     * Sets message_data
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\Parameter[] $message_data Message data could contains array of customized parameters. They may have influence on message display or add values to message.
     *
     * @return $this
     */
    public function setMessageData($message_data)
    {
        $this->container['message_data'] = $message_data;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\Attachment[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\Attachment[] $attachments List of the attachments for the message. A single attachment has a size limit of 1 MB. File type restrictions: .jpg, .jpeg, .png, .gif, and .pdf.
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

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
