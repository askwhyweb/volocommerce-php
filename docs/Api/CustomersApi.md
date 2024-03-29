# com.volocommerce.api.v1.sdk.invoker\CustomersApi

All URIs are relative to *https://api.volocommerce.io/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**doUpdate**](CustomersApi.md#doUpdate) | **PUT** /customers | Update Customer
[**getCustomers**](CustomersApi.md#getCustomers) | **GET** /customers | Returns a list of customers
[**removeCustomer**](CustomersApi.md#removeCustomer) | **DELETE** /customers/{customerId} | Delete the customer
[**saveCustomers**](CustomersApi.md#saveCustomers) | **POST** /customers | Add a list of customers


# **doUpdate**
> doUpdate($body)

Update Customer

Update Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new com.volocommerce.api.v1.sdk.invoker\Api\CustomersApi();
$body = new \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\UpdateCustomer(); // \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\UpdateCustomer | 

try {
    $api_instance->doUpdate($body);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->doUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\UpdateCustomer**](../Model/UpdateCustomer.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomers**
> \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\CustomerResponse getCustomers($authorization, $x_api_key, $id, $name, $company_name, $postcode, $email, $phone, $merchant_type)

Returns a list of customers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new com.volocommerce.api.v1.sdk.invoker\Api\CustomersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$id = 56; // int | Customer ID
$name = "name_example"; // string | First name or last name of the customer
$company_name = "company_name_example"; // string | Company Name
$postcode = "postcode_example"; // string | Postcode of the address
$email = "email_example"; // string | Email address of the customer
$phone = "phone_example"; // string | Phone number of the customer
$merchant_type = "merchant_type_example"; // string | Merchant type of the customer

try {
    $result = $api_instance->getCustomers($authorization, $x_api_key, $id, $name, $company_name, $postcode, $email, $phone, $merchant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **id** | **int**| Customer ID | [optional]
 **name** | **string**| First name or last name of the customer | [optional]
 **company_name** | **string**| Company Name | [optional]
 **postcode** | **string**| Postcode of the address | [optional]
 **email** | **string**| Email address of the customer | [optional]
 **phone** | **string**| Phone number of the customer | [optional]
 **merchant_type** | **string**| Merchant type of the customer | [optional]

### Return type

[**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeCustomer**
> \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\DeleteCustomerResponse removeCustomer($customer_id, $authorization, $x_api_key)

Delete the customer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new com.volocommerce.api.v1.sdk.invoker\Api\CustomersApi();
$customer_id = 56; // int | Customer id
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->removeCustomer($customer_id, $authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->removeCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer id |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

[**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\DeleteCustomerResponse**](../Model/DeleteCustomerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveCustomers**
> \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\CustomerResponseBeanList saveCustomers($authorization, $x_api_key, $body)

Add a list of customers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new com.volocommerce.api.v1.sdk.invoker\Api\CustomersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\AddCustomers(); // \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\AddCustomers | 

try {
    $result = $api_instance->saveCustomers($authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->saveCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\AddCustomers**](../Model/AddCustomers.md)|  | [optional]

### Return type

[**\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\CustomerResponseBeanList**](../Model/CustomerResponseBeanList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

