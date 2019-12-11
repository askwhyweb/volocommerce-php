# com.volocommerce.api.v1.sdk.invoker\AuthenticationApi

All URIs are relative to *https://api.volocommerce.io/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getJWTToken**](AuthenticationApi.md#getJWTToken) | **GET** /token | Retrieve auth token


# **getJWTToken**
> \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\JWTToken getJWTToken($authorization, $x_api_key)

Retrieve auth token



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
com.volocommerce.api.v1.sdk.invoker\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
com.volocommerce.api.v1.sdk.invoker\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new com.volocommerce.api.v1.sdk.invoker\Api\AuthenticationApi();
$authorization = "authorization_example"; // string | Base 64 encoded Basic Auth Header (base64[username:password]) i.e. if username is user123 and password is pass then header value will be Basic dXNlcjEyMzpwYXNz
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->getJWTToken($authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getJWTToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Base 64 encoded Basic Auth Header (base64[username:password]) i.e. if username is user123 and password is pass then header value will be Basic dXNlcjEyMzpwYXNz |
 **x_api_key** | **string**| API Key |

### Return type

[**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\JWTToken**](../Model/JWTToken.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

