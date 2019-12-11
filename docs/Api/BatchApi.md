# com.volocommerce.api.v1.sdk.invoker\BatchApi

All URIs are relative to *https://api.volocommerce.io/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBatchStatus**](BatchApi.md#getBatchStatus) | **GET** /batch/status/{batchId} | Returns status of a given batch. The batch ID is provided by the asynchronous methods


# **getBatchStatus**
> \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\BatchStatusResponse getBatchStatus($batch_id, $authorization, $x_api_key)

Returns status of a given batch. The batch ID is provided by the asynchronous methods



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new com.volocommerce.api.v1.sdk.invoker\Api\BatchApi();
$batch_id = "batch_id_example"; // string | Batch ID
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->getBatchStatus($batch_id, $authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->getBatchStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| Batch ID |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

[**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\BatchStatusResponse**](../Model/BatchStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

