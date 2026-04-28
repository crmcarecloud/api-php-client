# Card

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_id** | **string** | The unique ID of the card. | [optional] 
**customer_id** | **string** | The unique ID of the card holder. [GET /customers](https://carecloud.readme.io/reference/getcustomers) | [optional] 
**card_type_id** | **string** | The unique ID of the card type. [GET /card-types](https://carecloud.readme.io/reference/getcardtypes) | 
**card_number** | **string** | Card number. | 
**secondary_card_number** | **string** | Alternative card number for this card. | [optional] 
**valid_from** | **string** | Timestamp from which the card is valid. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | [optional] 
**valid_to** | **string** | Timestamp until which the card is valid. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | [optional] 
**store_id** | **string** | The unique ID of the store where the card was assigned to a customer. [GET /stores](https://carecloud.readme.io/reference/getstores) | [optional] 
**last_change** | **string** | Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the card. *Possible values are: 0 - blocked / 1 - active* | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

