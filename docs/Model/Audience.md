# Audience

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audience_id** | **string** | The unique ID of the audience. | [optional] 
**name** | **string** | Name of the audience. | 
**communication_channel_id** | **string** | The unique ID of the communication channel from CareCloud. The list of communication channels is available at [GET /communication-channels](https://carecloud.readme.io/reference/getcommunicationchannels). | 
**state** | **int** | State of the audience. *Possible values are: 0 - deleted / 1 - active* | 
**last_change** | **string** | Timestamp of the last change. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 
**created_by** | **string** | The unique ID of the user that created the record. The list of users is available at [GET /users](https://carecloud.readme.io/reference/getusers) (enterprise interface only). | [optional] 
**updated_by** | **string** | The unique ID of the user that last updated the record. The list of users is available at [GET /users](https://carecloud.readme.io/reference/getusers) (enterprise interface only). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

