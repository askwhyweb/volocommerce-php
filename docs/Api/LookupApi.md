# com.volocommerce.api.v1.sdk.invoker\LookupApi

All URIs are relative to *https://api.volocommerce.io/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderTaxRates**](LookupApi.md#getOrderTaxRates) | **GET** /lookup/taxRates | Returns standard set of Tax Rates


# **getOrderTaxRates**
> \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\TaxCodesResultResponse getOrderTaxRates($authorization, $x_api_key)

Returns standard set of Tax Rates

Returns standard set of Tax Rates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new com.volocommerce.api.v1.sdk.invoker\Api\LookupApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->getOrderTaxRates($authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->getOrderTaxRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

[**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\TaxCodesResultResponse**](../Model/TaxCodesResultResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

