# StamperStamp

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stamp_id** | **string** | The unique ID of the stamper stamp. | [optional] 
**customer_id** | **string** | The unique ID of the stamper card holder. | [optional] 
**purchase_id** | **string** | The unique ID of the purchase that triggered the stamp to be collected. | [optional] 
**stamper_card_id** | **string** | The unique ID of the stamper card. | [optional] 
**stamp_order** | **int** | An order of the stamp in the card. If null, the stamp is not assign to any stamper card. | [optional] 
**stamper_condition_id** | **string** | The unique ID of the stamper condition. An information about condition is available at the stamper campaign that stamp is part of. | [optional] 
**created_at** | **string** | Date and time when the customer collected the stamp. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**last_change** | **string** | Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the stamp. *Possible values are: 0 - deleted / 1 - active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

