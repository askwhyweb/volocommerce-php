# com.volocommerce.api.v1.sdk.invoker\WebhooksApi

All URIs are relative to *https://api.volocommerce.io/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createHook**](WebhooksApi.md#createHook) | **POST** /webhooks | Returns registed webhook id
[**doDelete**](WebhooksApi.md#doDelete) | **DELETE** /webhooks/{webHookId} | Delete registered webhook
[**getAvailableEvents**](WebhooksApi.md#getAvailableEvents) | **GET** /webhooks/events | Returns list of available events
[**getAvailableScope**](WebhooksApi.md#getAvailableScope) | **GET** /webhooks/scopes/{eventType} | Returns list of available scopes
[**getWebHooks**](WebhooksApi.md#getWebHooks) | **GET** /webhooks | Returns registered webhooks
[**updateWebhooks**](WebhooksApi.md#updateWebhooks) | **PUT** /webhooks/{webHookId} | Update registered webhook


# **createHook**
> \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\WebHookSubcribeResponse createHook($authorization, $x_api_key, $body)

Returns registed webhook id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new com.volocommerce.api.v1.sdk.invoker\Api\WebhooksApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\RegisterWebHookRequest(); // \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\RegisterWebHookRequest | 

try {
    $result = $api_instance->createHook($authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\RegisterWebHookRequest**](../Model/RegisterWebHookRequest.md)|  | [optional]

### Return type

[**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\WebHookSubcribeResponse**](../Model/WebHookSubcribeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **doDelete**
> \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\DeleteWebHookResponse doDelete($web_hook_id, $authorization, $x_api_key)

Delete registered webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new com.volocommerce.api.v1.sdk.invoker\Api\WebhooksApi();
$web_hook_id = 56; // int | WebHook ID
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->doDelete($web_hook_id, $authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->doDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_hook_id** | **int**| WebHook ID |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

[**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\DeleteWebHookResponse**](../Model/DeleteWebHookResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailableEvents**
> \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\EventResponse getAvailableEvents($authorization, $x_api_key)

Returns list of available events



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new com.volocommerce.api.v1.sdk.invoker\Api\WebhooksApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->getAvailableEvents($authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getAvailableEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

[**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\EventResponse**](../Model/EventResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailableScope**
> \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\ScopeResponse getAvailableScope($event_type, $authorization, $x_api_key)

Returns list of available scopes



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new com.volocommerce.api.v1.sdk.invoker\Api\WebhooksApi();
$event_type = "event_type_example"; // string | Event Type
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->getAvailableScope($event_type, $authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getAvailableScope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_type** | **string**| Event Type |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

[**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\ScopeResponse**](../Model/ScopeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebHooks**
> \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\WebHookResponse getWebHooks($authorization, $x_api_key, $web_hook_id, $event, $type, $code)

Returns registered webhooks



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new com.volocommerce.api.v1.sdk.invoker\Api\WebhooksApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$web_hook_id = 56; // int | WebHook ID to join scopes and fetch subscriptions
$event = "event_example"; // string | Event - example REFUND
$type = "type_example"; // string | Type to group scope codes for a WebHook
$code = "code_example"; // string | Code - example amazon.fr|3

try {
    $result = $api_instance->getWebHooks($authorization, $x_api_key, $web_hook_id, $event, $type, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebHooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **web_hook_id** | **int**| WebHook ID to join scopes and fetch subscriptions | [optional]
 **event** | **string**| Event - example REFUND | [optional]
 **type** | **string**| Type to group scope codes for a WebHook | [optional]
 **code** | **string**| Code - example amazon.fr|3 | [optional]

### Return type

[**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\WebHookResponse**](../Model/WebHookResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhooks**
> \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\WebHookUpdateResponse updateWebhooks($web_hook_id, $authorization, $x_api_key, $body)

Update registered webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new com.volocommerce.api.v1.sdk.invoker\Api\WebhooksApi();
$web_hook_id = 56; // int | WebHook ID
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\UpdateWebHookRequest(); // \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\UpdateWebHookRequest | 

try {
    $result = $api_instance->updateWebhooks($web_hook_id, $authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_hook_id** | **int**| WebHook ID |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\UpdateWebHookRequest**](../Model/UpdateWebHookRequest.md)|  | [optional]

### Return type

[**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\WebHookUpdateResponse**](../Model/WebHookUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

