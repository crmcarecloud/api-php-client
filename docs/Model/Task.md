# Task

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**task_id** | **string** | The unique ID of the task. | [optional] 
**task_type_id** | **string** | The unique ID of the task type. | 
**task_state_id** | **string** | The unique ID of the task state. | 
**customer_id** | **string** | The unique ID of the customer. | 
**task_note** | **string** | Text note of the task. | [optional] 
**task_title** | **string** | Title of the task. | 
**task_priority** | **int** | The parameter filters tasks by their priority. *Possible values are: 1 - Critical / 2 - Major / 3 - Normal / 4 - Minor.* | 
**due_date** | [**\DateTime**](\DateTime.md) | Due date of the task in ISO-8601 format (&#x60;YYYY-MM-DD&#x60;). | [optional] 
**created_at** | **string** | Timestamp of the task creation. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 
**state** | **int** | State of the task. *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

