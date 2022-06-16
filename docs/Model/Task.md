# Task

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**task_id** | **string** | The unique id of the task | [optional] 
**task_type_id** | **string** | The unique id of the task type | 
**task_state_id** | **string** | The unique id of the task state | 
**customer_id** | **string** | The unique id of the customer. | 
**task_note** | **string** | Text note of the task | [optional] 
**task_title** | **string** | Title of the task | 
**task_priority** | **int** | The parameter filters tasks by their priority. *Possible values are: 1 - Critical / 2 - Major / 3 - Normal / 4 - Minor.* | 
**due_date** | [**\DateTime**](\DateTime.md) | Due date of the task (YYYY-MM-DD) | [optional] 
**created_at** | **string** | Date and time when task was created *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the event type *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

