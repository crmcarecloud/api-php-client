# StamperCampaign

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stamper_campaign_id** | **string** | The unique ID of the stamper campaign. | [optional] 
**partner_id** | **string** | The unique ID of the CareCloud partner. | [optional] 
**name** | **string** | Name of the stamper campaign. The translation is return depending on the language value in the HTTP request header &#x60;Accept-Language&#x60;. | [optional] 
**description** | **string** | Description of the stamper campaign. The translation is return depending on the language value in the HTTP request header &#x60;Accept-Language&#x60;. | [optional] 
**stamp_count** | **int** | The amount of stamps on the stamp card. | [optional] 
**valid_from** | **string** | Stamp campaign validity from. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**valid_to** | **string** | Stamp campaign validity to. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**count_of_campaign_repetitions** | **int** | The number how many times can be campaign repeated. The number says how many stamper cards could be filled by customer in that campaign. | [optional] 
**stamper_conditions** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\StamperCondition[]**](StamperCondition.md) | List of defined stamper conditions. | [optional] 
**stamper_bonus_checkpoints** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\StamperBonusCheckpoint[]**](StamperBonusCheckpoint.md) | List of defined stamper checkpoints for bonuses. | [optional] 
**last_change** | **string** | Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the stamper campaign. *Possible values are: 0 - deleted / 1 - active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

