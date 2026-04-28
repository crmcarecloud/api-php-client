# AgreementList

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agreement_id** | **string** | The unique ID of the consents in CareCloud. | [optional] 
**name** | **string** | Name of the consent in CareCloud. | [optional] 
**text** | **string** | Text of the consent in CareCloud. The language version of the text is returned by language setup in the HTTP header of the request. | [optional] 
**withdrawal_text** | **string** | Text when a customer wants to withdraw his consent. The language version of the text is returned by language setup in the HTTP header of the request. | [optional] 
**communication_channel_id** | **string** | The unique ID of the communication channel. [GET /communication-channels](https://carecloud.readme.io/reference/getcommunicationchannels) | [optional] 
**text_id** | **string** | Text identification of the consent. | [optional] 
**last_change** | **string** | Timestamp of the last change. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

