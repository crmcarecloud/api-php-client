# Status

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status_id** | **string** | The unique id of the status | [optional] 
**name** | **string** | Name of the status | 
**description** | **string** | Short description of the status | 
**qualification_period** | **int** | The period of time (in months) in which it is necessary to qualify for the status based on defined conditions. | [optional] 
**qualification_turnover** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\QualificationTurnover[]**](QualificationTurnover.md) | The turnover necessary to be met to qualify for the status based on defined conditions. | [optional] 
**previous_status** | **string** | The previous status required to qualify for the next status based on defined conditions. The conditions are defined in parameters qualification_period and qualification_turnover. | [optional] 
**next_status** | **string** | Id of the following status. | [optional] 
**validity_period** | **string** | Definition of the status validity period | 
**collection_points** | **bool** | Enable / disable points collection | 
**payment_points** | **bool** | Enable / disable payment by points | 
**qualification_type** | **int** | The status achieving principle *(0 - after creation of the account / 1 - manually / 2 - after the defined conditions are met)* | 
**discount** | **int** | The basic loyalty discount | 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

