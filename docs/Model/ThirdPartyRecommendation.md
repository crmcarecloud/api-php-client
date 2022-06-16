# ThirdPartyRecommendation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**third_party_recommendation_id** | **string** | The unique id of the third party recommendation | [optional] 
**customer_id** | **string** | The unique id of the CareCloud customer. Required only if &#x60;product_id&#x60; is not set. | [optional] 
**product** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ProductIdentification**](ProductIdentification.md) |  | [optional] 
**recommended_product** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ProductIdentification**](ProductIdentification.md) |  | [optional] 
**recommendation_system_id** | **string** | The unique id of the third party recommendation system from resource recommendation systems | 
**recommendation_system_dataset_id** | **string** | The unique id of the third party recommendation system dataset | 
**score** | **float** | Score of the recommendation. Depends of score we will pick products to recommendation. Higher score means better results. | 
**state** | **int** | State of the recommendation *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

