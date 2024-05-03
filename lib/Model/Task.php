<?php
/**
 * Task
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
 * Task Class Doc Comment
 *
 * @category Class
 * @description Task resource.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Task implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Task';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'task_id' => 'string',
        'task_type_id' => 'string',
        'task_state_id' => 'string',
        'customer_id' => 'string',
        'task_note' => 'string',
        'task_title' => 'string',
        'task_priority' => 'int',
        'due_date' => '\DateTime',
        'created_at' => 'string',
        'state' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'task_id' => null,
        'task_type_id' => null,
        'task_state_id' => null,
        'customer_id' => null,
        'task_note' => null,
        'task_title' => null,
        'task_priority' => null,
        'due_date' => 'date',
        'created_at' => null,
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
        'task_id' => 'task_id',
        'task_type_id' => 'task_type_id',
        'task_state_id' => 'task_state_id',
        'customer_id' => 'customer_id',
        'task_note' => 'task_note',
        'task_title' => 'task_title',
        'task_priority' => 'task_priority',
        'due_date' => 'due_date',
        'created_at' => 'created_at',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'task_id' => 'setTaskId',
        'task_type_id' => 'setTaskTypeId',
        'task_state_id' => 'setTaskStateId',
        'customer_id' => 'setCustomerId',
        'task_note' => 'setTaskNote',
        'task_title' => 'setTaskTitle',
        'task_priority' => 'setTaskPriority',
        'due_date' => 'setDueDate',
        'created_at' => 'setCreatedAt',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'task_id' => 'getTaskId',
        'task_type_id' => 'getTaskTypeId',
        'task_state_id' => 'getTaskStateId',
        'customer_id' => 'getCustomerId',
        'task_note' => 'getTaskNote',
        'task_title' => 'getTaskTitle',
        'task_priority' => 'getTaskPriority',
        'due_date' => 'getDueDate',
        'created_at' => 'getCreatedAt',
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

    const TASK_PRIORITY_1 = 1;
const TASK_PRIORITY_2 = 2;
const TASK_PRIORITY_3 = 3;
const TASK_PRIORITY_4 = 4;
const STATE_0 = 0;
const STATE_1 = 1;
const STATE_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getTaskPriorityAllowableValues()
    {
        return [
            self::TASK_PRIORITY_1,
self::TASK_PRIORITY_2,
self::TASK_PRIORITY_3,
self::TASK_PRIORITY_4,        ];
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
        $this->container['task_id'] = isset($data['task_id']) ? $data['task_id'] : null;
        $this->container['task_type_id'] = isset($data['task_type_id']) ? $data['task_type_id'] : null;
        $this->container['task_state_id'] = isset($data['task_state_id']) ? $data['task_state_id'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['task_note'] = isset($data['task_note']) ? $data['task_note'] : null;
        $this->container['task_title'] = isset($data['task_title']) ? $data['task_title'] : null;
        $this->container['task_priority'] = isset($data['task_priority']) ? $data['task_priority'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
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

        if ($this->container['task_type_id'] === null) {
            $invalidProperties[] = "'task_type_id' can't be null";
        }
        if ($this->container['task_state_id'] === null) {
            $invalidProperties[] = "'task_state_id' can't be null";
        }
        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['task_title'] === null) {
            $invalidProperties[] = "'task_title' can't be null";
        }
        if ($this->container['task_priority'] === null) {
            $invalidProperties[] = "'task_priority' can't be null";
        }
        $allowedValues = $this->getTaskPriorityAllowableValues();
        if (!is_null($this->container['task_priority']) && !in_array($this->container['task_priority'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'task_priority', must be one of '%s'",
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
     * Gets task_id
     *
     * @return string
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param string $task_id The unique ID of the task.
     *
     * @return $this
     */
    public function setTaskId($task_id)
    {
        $this->container['task_id'] = $task_id;

        return $this;
    }

    /**
     * Gets task_type_id
     *
     * @return string
     */
    public function getTaskTypeId()
    {
        return $this->container['task_type_id'];
    }

    /**
     * Sets task_type_id
     *
     * @param string $task_type_id The unique ID of the task type.
     *
     * @return $this
     */
    public function setTaskTypeId($task_type_id)
    {
        $this->container['task_type_id'] = $task_type_id;

        return $this;
    }

    /**
     * Gets task_state_id
     *
     * @return string
     */
    public function getTaskStateId()
    {
        return $this->container['task_state_id'];
    }

    /**
     * Sets task_state_id
     *
     * @param string $task_state_id The unique ID of the task state.
     *
     * @return $this
     */
    public function setTaskStateId($task_state_id)
    {
        $this->container['task_state_id'] = $task_state_id;

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
     * Gets task_note
     *
     * @return string
     */
    public function getTaskNote()
    {
        return $this->container['task_note'];
    }

    /**
     * Sets task_note
     *
     * @param string $task_note Text note of the task.
     *
     * @return $this
     */
    public function setTaskNote($task_note)
    {
        $this->container['task_note'] = $task_note;

        return $this;
    }

    /**
     * Gets task_title
     *
     * @return string
     */
    public function getTaskTitle()
    {
        return $this->container['task_title'];
    }

    /**
     * Sets task_title
     *
     * @param string $task_title Title of the task.
     *
     * @return $this
     */
    public function setTaskTitle($task_title)
    {
        $this->container['task_title'] = $task_title;

        return $this;
    }

    /**
     * Gets task_priority
     *
     * @return int
     */
    public function getTaskPriority()
    {
        return $this->container['task_priority'];
    }

    /**
     * Sets task_priority
     *
     * @param int $task_priority The parameter filters tasks by their priority. *Possible values are: 1 - Critical / 2 - Major / 3 - Normal / 4 - Minor.*
     *
     * @return $this
     */
    public function setTaskPriority($task_priority)
    {
        $allowedValues = $this->getTaskPriorityAllowableValues();
        if (!in_array($task_priority, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'task_priority', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['task_priority'] = $task_priority;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date Due date of the task. *(YYYY-MM-DD)*
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

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
     * @param string $created_at Date and time when task was created. *(YYYY-MM-DD HH:MM:SS)*
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
     * @param int $state State of the event type. *Possible values are: 0 - deleted / 1 - active / 2 - non active*
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
