# ActionsSendBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_application_id** | **string** | Id of the external application that requested one time password. If you dont have external application id, guide how to get it is available [here](#section/Authentication) | 
**communication_channel_id** | **int** | The unique id of the communication channel. *Possible values are: 1 - email / 2- SMS / 4 - PUSH notification (Apple or Google)/ 5 - internal system notification* | 
**recipient** | **string** | Recipient of the message with OTP. The parameter could contain email, phone number or other identifier of the message recipient. | 
**otp_type** | **int** | Parameter sets witch OTP type should be generated. *Possible values: 1- alphanumeric, 2- numeric* | [optional] [default to OTP_TYPE.1]
**message_template_id** | **string** | The unique id of the message_template. If not set, CareCloud uses default value from the system configuration | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

