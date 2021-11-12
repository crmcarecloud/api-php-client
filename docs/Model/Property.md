# Property

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_id** | **string** | The unique id of the property | [optional] 
**name** | **string** | Name of the property | 
**description** | **string** | User defined description of the property | [optional] 
**data_type** | **string** | Data type of the final value * Possible values: string / boolean / integer / date / timestamp / float / customized data types* | 
**items** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyItem[]**](PropertyItem.md) | List of possible values. Used for multivalued data types ( like enum, multiselect) | [optional] 
**is_required** | **bool** | The settings whether the property is a required parameter of the specific entity | 
**is_unique** | **bool** | The setting whether the property contains a unique value within the specific entity | 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the property *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

