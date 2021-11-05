# Store

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**store_id** | **string** | The unique id of the store in CareCloud | 
**store_code** | **string** | External code of the store | 
**name** | **string** | Name of the store | 
**store_address** | [**\CareCloud\Model\Address**](Address.md) |  | [optional] 
**contact_email** | **string** | Contact email of the store | [optional] 
**manager_name** | **string** | Name of the store manager | [optional] 
**phone_number** | **string** | Phone number of the store with international prefix (420000000) | [optional] 
**partner_id** | **string** | The unique id for the partner | 
**system_id** | **string** | The external unique id of the store in external system | 
**gps_coordinates** | [**\CareCloud\Model\GPSCoordinates**](GPSCoordinates.md) |  | [optional] 
**url_address** | **string** | URL address of the store | [optional] 
**opening** | [**\CareCloud\Model\OpeningDay[]**](OpeningDay.md) | List of opening days | [optional] 
**image_urls** | **string[]** | A list of image URL addresses | [optional] 
**visibility_for_customer** | **int** | State of the visibility for the customer *Possible values are: 0 - invisible / 1- visible* | [optional] 
**short_description** | **string** | Short description of the store | [optional] 
**description** | **string** | Long description of the store | [optional] 
**registration_id** | **string** | Legal registration number of the store | [optional] 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the store *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

