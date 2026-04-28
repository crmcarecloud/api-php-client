# Point

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**point_id** | **string** | The unique ID of the point record. | [optional] 
**customer_id** | **string** | The unique ID of the customer. [GET /customers](https://carecloud.readme.io/reference/getcustomers) | 
**assigned_points** | **float** | The number of earned points. | [optional] 
**available_points** | **float** | The number of points available actually taking into account the eventual points redemption. | [optional] 
**point_type_id** | **string** | The unique ID of the point type. [GET /point-types](https://carecloud.readme.io/reference/getpointtypes) | 
**partner_id** | **string** | The unique ID of the partner company. [GET /partners](https://carecloud.readme.io/reference/getpartners) | 
**valid_to** | **string** | Timestamp until which the point record is valid. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | [optional] 
**state** | **int** | State of the point record. *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 
**created_at** | **string** | Timestamp of the point record creation. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | [optional] 
**note** | **string** | Note for the new point record. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

