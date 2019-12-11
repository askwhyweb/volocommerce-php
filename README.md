# SwaggerClient-php
Volo Public APIs

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.volocommerce.io/1.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**getJWTToken**](docs/Api/AuthenticationApi.md#getjwttoken) | **GET** /token | Retrieve auth token
*BatchApi* | [**getBatchStatus**](docs/Api/BatchApi.md#getbatchstatus) | **GET** /batch/status/{batchId} | Returns status of a given batch. The batch ID is provided by the asynchronous methods
*CouriersApi* | [**getCourierNames**](docs/Api/CouriersApi.md#getcouriernames) | **GET** /couriers | Returns a list of active couriers
*CustomersApi* | [**doUpdate**](docs/Api/CustomersApi.md#doupdate) | **PUT** /customers | Update Customer
*CustomersApi* | [**getCustomers**](docs/Api/CustomersApi.md#getcustomers) | **GET** /customers | Returns a list of customers
*CustomersApi* | [**removeCustomer**](docs/Api/CustomersApi.md#removecustomer) | **DELETE** /customers/{customerId} | Delete the customer
*CustomersApi* | [**saveCustomers**](docs/Api/CustomersApi.md#savecustomers) | **POST** /customers | Add a list of customers
*LocationsApi* | [**doRemove**](docs/Api/LocationsApi.md#doremove) | **DELETE** /locations/{locationId} | Remove Locations
*LocationsApi* | [**doUpdate**](docs/Api/LocationsApi.md#doupdate) | **PUT** /locations | Update Locations
*LocationsApi* | [**getLocations**](docs/Api/LocationsApi.md#getlocations) | **GET** /locations | Returns locations based on given criteria
*LocationsApi* | [**saveLocations**](docs/Api/LocationsApi.md#savelocations) | **POST** /locations | Add new locations
*LookupApi* | [**getOrderTaxRates**](docs/Api/LookupApi.md#getordertaxrates) | **GET** /lookup/taxRates | Returns standard set of Tax Rates
*ProductsApi* | [**getAllExportableFields**](docs/Api/ProductsApi.md#getallexportablefields) | **GET** /products/fieldNames | Returns a list of Exportable Fields
*ProductsApi* | [**getCourierName**](docs/Api/ProductsApi.md#getcouriername) | **GET** /products/ebay/courierNames | Returns the courier name used on eBay template for products
*ProductsApi* | [**getInventoryFlags**](docs/Api/ProductsApi.md#getinventoryflags) | **GET** /products/flags/{flagType} | Returns a list of inventory flags
*ProductsApi* | [**getPartialProducts**](docs/Api/ProductsApi.md#getpartialproducts) | **GET** /products/partial | Returns smaller standard set of product data
*ProductsApi* | [**getProductImages**](docs/Api/ProductsApi.md#getproductimages) | **GET** /products/images | Returns a list of Product Image
*ProductsApi* | [**getProductPriceNames**](docs/Api/ProductsApi.md#getproductpricenames) | **GET** /products/priceLevels | Returns a list of Product Price Names
*ProductsApi* | [**getProductPrices**](docs/Api/ProductsApi.md#getproductprices) | **GET** /products/prices | Returns a list of Product Image
*ProductsApi* | [**getProducts**](docs/Api/ProductsApi.md#getproducts) | **GET** /products | Returns standard set of product data for products matching given search criteria
*ProductsApi* | [**getQuestionMessage**](docs/Api/ProductsApi.md#getquestionmessage) | **GET** /products/question/message | Returns eBay question content
*ProductsApi* | [**getQuestions**](docs/Api/ProductsApi.md#getquestions) | **GET** /products/questions | Returns a list of eBay product question data
*ProductsApi* | [**getStockLevels**](docs/Api/ProductsApi.md#getstocklevels) | **GET** /products/stockLevels | Returns product stock levels
*ProductsApi* | [**getStockLevels_0**](docs/Api/ProductsApi.md#getstocklevels_0) | **GET** /products/stockLevels/locations | Returns the locations and quantity of where given stock numbers are stored
*ProductsApi* | [**importProducts**](docs/Api/ProductsApi.md#importproducts) | **POST** /products/import | Import product data
*ProductsApi* | [**searchProductsByField**](docs/Api/ProductsApi.md#searchproductsbyfield) | **POST** /products/searchByField | Define product data to be retrieved
*ProductsApi* | [**sendProductAnswer**](docs/Api/ProductsApi.md#sendproductanswer) | **POST** /products/question/reply | Send reply to eBay product questions
*ProductsApi* | [**updateProducts**](docs/Api/ProductsApi.md#updateproducts) | **PUT** /products/partial | Update stock level and prices of products
*ProductsApi* | [**updateProductsAsync**](docs/Api/ProductsApi.md#updateproductsasync) | **PUT** /products/partial/async | Update stock level and prices of products asynchronously
*PurchaseOrdersApi* | [**confirmDelivery**](docs/Api/PurchaseOrdersApi.md#confirmdelivery) | **POST** /purchaseOrders/{purchaseOrderId}/delivery | Confirm Delivery.
*PurchaseOrdersApi* | [**confirmOrder**](docs/Api/PurchaseOrdersApi.md#confirmorder) | **POST** /purchaseOrders/{purchaseOrderId}/confirm | Confirm Purchase Order.
*PurchaseOrdersApi* | [**doUpdate**](docs/Api/PurchaseOrdersApi.md#doupdate) | **PUT** /purchaseOrders | Update Purchase Order.
*PurchaseOrdersApi* | [**getDetails**](docs/Api/PurchaseOrdersApi.md#getdetails) | **GET** /purchaseOrders | Get Purchase Order Details
*PurchaseOrdersApi* | [**removePurchaseOrder**](docs/Api/PurchaseOrdersApi.md#removepurchaseorder) | **DELETE** /purchaseOrders/{purchaseOrderId} | Remove Purchase Order
*PurchaseOrdersApi* | [**removePurchaseOrderItems**](docs/Api/PurchaseOrdersApi.md#removepurchaseorderitems) | **DELETE** /purchaseOrders/{purchaseOrderId}/orderItem/{purchaseOrderItemId} | Remove Purchase Order Item
*PurchaseOrdersApi* | [**savePurchaseOrders**](docs/Api/PurchaseOrdersApi.md#savepurchaseorders) | **POST** /purchaseOrders | Add a list of Purchase Order
*PurchaseOrdersApi* | [**updateDeliveries**](docs/Api/PurchaseOrdersApi.md#updatedeliveries) | **PUT** /purchaseOrders/{purchaseOrderId}/delivery | Update deliveries.
*SalesOrdersApi* | [**addOrderHistories**](docs/Api/SalesOrdersApi.md#addorderhistories) | **PUT** /salesOrders/histories | Add history entries/notes to sales orders
*SalesOrdersApi* | [**addOrderItem**](docs/Api/SalesOrdersApi.md#addorderitem) | **POST** /salesOrders/{espOrderNo}/orderItems | Add Order Items for sales order
*SalesOrdersApi* | [**deleteOrderItems**](docs/Api/SalesOrdersApi.md#deleteorderitems) | **DELETE** /salesOrders/{espOrderNo}/orderItems/{orderItemId} | Deletes order items from order
*SalesOrdersApi* | [**getAmazonRefundReasons**](docs/Api/SalesOrdersApi.md#getamazonrefundreasons) | **GET** /salesOrders/amazon/refund/reasons | Returns a list of Amazon refund reasons
*SalesOrdersApi* | [**getOrderCredits**](docs/Api/SalesOrdersApi.md#getordercredits) | **GET** /salesOrders/credits | Returns array of order credits
*SalesOrdersApi* | [**getOrderHistories**](docs/Api/SalesOrdersApi.md#getorderhistories) | **GET** /salesOrders/histories | Returns order histories for given order numbers
*SalesOrdersApi* | [**getOrderStatuses**](docs/Api/SalesOrdersApi.md#getorderstatuses) | **GET** /salesOrders/statuses | Returns List of all Sales Order Statuses
*SalesOrdersApi* | [**getOrders**](docs/Api/SalesOrdersApi.md#getorders) | **GET** /salesOrders | Returns a list of orders
*SalesOrdersApi* | [**getSalesOrderFlags**](docs/Api/SalesOrdersApi.md#getsalesorderflags) | **GET** /salesOrders/flags/{flagType} | Returns List Sales order flags
*SalesOrdersApi* | [**getSellerIds**](docs/Api/SalesOrdersApi.md#getsellerids) | **GET** /salesOrders/sellers | Returns a list of seller ids
*SalesOrdersApi* | [**getStockActions**](docs/Api/SalesOrdersApi.md#getstockactions) | **GET** /salesOrders/refund/stockActions | Returns stock actions to process refunds
*SalesOrdersApi* | [**issueRefund**](docs/Api/SalesOrdersApi.md#issuerefund) | **POST** /salesOrders/{espOrderNo}/refund | Issue Refund
*SalesOrdersApi* | [**saveOrders**](docs/Api/SalesOrdersApi.md#saveorders) | **POST** /salesOrders | Create orders within Volo
*SalesOrdersApi* | [**savePayment**](docs/Api/SalesOrdersApi.md#savepayment) | **POST** /salesOrders/{espOrderNo}/payments | Payment details for SalesOrder within Volo
*SalesOrdersApi* | [**updateOrderItems**](docs/Api/SalesOrdersApi.md#updateorderitems) | **PUT** /salesOrders/{espOrderNo}/orderItems | Update to an order Item
*SalesOrdersApi* | [**updateOrders**](docs/Api/SalesOrdersApi.md#updateorders) | **PUT** /salesOrders | Update order details
*SalesOrdersApi* | [**updateOrdersAsync**](docs/Api/SalesOrdersApi.md#updateordersasync) | **PUT** /salesOrders/async | Updates order details
*SalesOrdersApi* | [**updateSalesOrderPayment**](docs/Api/SalesOrdersApi.md#updatesalesorderpayment) | **PUT** /salesOrders/{espOrderNo}/payments/{paymentId} | Update payment details of sales order
*SuppliersApi* | [**doUpdate**](docs/Api/SuppliersApi.md#doupdate) | **PUT** /suppliers | Update Supplier
*SuppliersApi* | [**getSuppliers**](docs/Api/SuppliersApi.md#getsuppliers) | **GET** /suppliers | Returns a list of suppliers
*SuppliersApi* | [**removeSupplier**](docs/Api/SuppliersApi.md#removesupplier) | **DELETE** /suppliers/{supplierId} | Delete the supplier
*SuppliersApi* | [**saveSupplier**](docs/Api/SuppliersApi.md#savesupplier) | **POST** /suppliers | Add a list of suppliers
*WebhooksApi* | [**createHook**](docs/Api/WebhooksApi.md#createhook) | **POST** /webhooks | Returns registed webhook id
*WebhooksApi* | [**doDelete**](docs/Api/WebhooksApi.md#dodelete) | **DELETE** /webhooks/{webHookId} | Delete registered webhook
*WebhooksApi* | [**getAvailableEvents**](docs/Api/WebhooksApi.md#getavailableevents) | **GET** /webhooks/events | Returns list of available events
*WebhooksApi* | [**getAvailableScope**](docs/Api/WebhooksApi.md#getavailablescope) | **GET** /webhooks/scopes/{eventType} | Returns list of available scopes
*WebhooksApi* | [**getWebHooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /webhooks | Returns registered webhooks
*WebhooksApi* | [**updateWebhooks**](docs/Api/WebhooksApi.md#updatewebhooks) | **PUT** /webhooks/{webHookId} | Update registered webhook


## Documentation For Models

 - [APIError](docs/Model/APIError.md)
 - [AddConfirmDeliveryRequest](docs/Model/AddConfirmDeliveryRequest.md)
 - [AddCustomers](docs/Model/AddCustomers.md)
 - [AddItem](docs/Model/AddItem.md)
 - [AddLocationResponse](docs/Model/AddLocationResponse.md)
 - [AddLocations](docs/Model/AddLocations.md)
 - [AddOrderItemResponse](docs/Model/AddOrderItemResponse.md)
 - [AddOrderItemResponseBean](docs/Model/AddOrderItemResponseBean.md)
 - [AddOrderItems](docs/Model/AddOrderItems.md)
 - [AddOrderResponse](docs/Model/AddOrderResponse.md)
 - [AddPurchaseOrders](docs/Model/AddPurchaseOrders.md)
 - [AddSalesOrderItemsRequest](docs/Model/AddSalesOrderItemsRequest.md)
 - [AddSalesOrdersBean](docs/Model/AddSalesOrdersBean.md)
 - [AddSuppliers](docs/Model/AddSuppliers.md)
 - [AddUpdatedLocationResponse](docs/Model/AddUpdatedLocationResponse.md)
 - [AddUpdatedSupplierResponse](docs/Model/AddUpdatedSupplierResponse.md)
 - [AmazonRefundReasonResponse](docs/Model/AmazonRefundReasonResponse.md)
 - [BatchStatusBean](docs/Model/BatchStatusBean.md)
 - [BatchStatusResponse](docs/Model/BatchStatusResponse.md)
 - [ChannelListedQuantity](docs/Model/ChannelListedQuantity.md)
 - [CollectOrderResponse](docs/Model/CollectOrderResponse.md)
 - [ConfirmDeliveryRequest](docs/Model/ConfirmDeliveryRequest.md)
 - [ConfirmPurchaseOrderItems](docs/Model/ConfirmPurchaseOrderItems.md)
 - [CountryRatesResponseBean](docs/Model/CountryRatesResponseBean.md)
 - [CourierBean](docs/Model/CourierBean.md)
 - [CourierResponse](docs/Model/CourierResponse.md)
 - [CreateItem](docs/Model/CreateItem.md)
 - [CreateLocationResponse](docs/Model/CreateLocationResponse.md)
 - [CreateOrderItems](docs/Model/CreateOrderItems.md)
 - [CreateSalesOrderPaymentBean](docs/Model/CreateSalesOrderPaymentBean.md)
 - [CreateSalesOrderPaymentResponse](docs/Model/CreateSalesOrderPaymentResponse.md)
 - [CustomImportLayout](docs/Model/CustomImportLayout.md)
 - [CustomImportRequest](docs/Model/CustomImportRequest.md)
 - [CustomerBean](docs/Model/CustomerBean.md)
 - [CustomerRequestBean](docs/Model/CustomerRequestBean.md)
 - [CustomerResponse](docs/Model/CustomerResponse.md)
 - [CustomerResponseBean](docs/Model/CustomerResponseBean.md)
 - [CustomerResponseBeanList](docs/Model/CustomerResponseBeanList.md)
 - [DeleteCustomerResponse](docs/Model/DeleteCustomerResponse.md)
 - [DeleteOrderItemsResponse](docs/Model/DeleteOrderItemsResponse.md)
 - [DeleteSupplierResponse](docs/Model/DeleteSupplierResponse.md)
 - [DeleteWebHookResponse](docs/Model/DeleteWebHookResponse.md)
 - [Depth](docs/Model/Depth.md)
 - [EbayCourierNameResponse](docs/Model/EbayCourierNameResponse.md)
 - [EventResponse](docs/Model/EventResponse.md)
 - [ExportableFieldsResponse](docs/Model/ExportableFieldsResponse.md)
 - [ExportableFieldsResponseBean](docs/Model/ExportableFieldsResponseBean.md)
 - [FlagsResponse](docs/Model/FlagsResponse.md)
 - [FullProductByField](docs/Model/FullProductByField.md)
 - [Height](docs/Model/Height.md)
 - [History](docs/Model/History.md)
 - [ImportData](docs/Model/ImportData.md)
 - [ImportProductsResponse](docs/Model/ImportProductsResponse.md)
 - [ImportRow](docs/Model/ImportRow.md)
 - [IssueRefundParams](docs/Model/IssueRefundParams.md)
 - [Item](docs/Model/Item.md)
 - [ItemUpdateInput](docs/Model/ItemUpdateInput.md)
 - [ItemUpdateInputList](docs/Model/ItemUpdateInputList.md)
 - [JWTToken](docs/Model/JWTToken.md)
 - [KeyValueBean](docs/Model/KeyValueBean.md)
 - [LayoutFields](docs/Model/LayoutFields.md)
 - [Listed](docs/Model/Listed.md)
 - [LocationBean](docs/Model/LocationBean.md)
 - [LocationsParamBean](docs/Model/LocationsParamBean.md)
 - [LocationsResponse](docs/Model/LocationsResponse.md)
 - [MessageResponse](docs/Model/MessageResponse.md)
 - [Order](docs/Model/Order.md)
 - [OrderBean](docs/Model/OrderBean.md)
 - [OrderCredit](docs/Model/OrderCredit.md)
 - [OrderCreditDTO](docs/Model/OrderCreditDTO.md)
 - [OrderCreditResponse](docs/Model/OrderCreditResponse.md)
 - [OrderCreditType](docs/Model/OrderCreditType.md)
 - [OrderCredits](docs/Model/OrderCredits.md)
 - [OrderHistories](docs/Model/OrderHistories.md)
 - [OrderHistory](docs/Model/OrderHistory.md)
 - [OrderHistoryResponse](docs/Model/OrderHistoryResponse.md)
 - [OrderItems](docs/Model/OrderItems.md)
 - [OrderItemsResponseBean](docs/Model/OrderItemsResponseBean.md)
 - [OrderStatusResponse](docs/Model/OrderStatusResponse.md)
 - [OrderUpdate](docs/Model/OrderUpdate.md)
 - [OrderUpdateAsync](docs/Model/OrderUpdateAsync.md)
 - [OrderUpdateAsyncBean](docs/Model/OrderUpdateAsyncBean.md)
 - [OrdersResponse](docs/Model/OrdersResponse.md)
 - [OutPutField](docs/Model/OutPutField.md)
 - [OutgoingOrders](docs/Model/OutgoingOrders.md)
 - [PageContext](docs/Model/PageContext.md)
 - [Pagination](docs/Model/Pagination.md)
 - [PartialProduct](docs/Model/PartialProduct.md)
 - [PartialProductResult](docs/Model/PartialProductResult.md)
 - [PartialProductUpdateResult](docs/Model/PartialProductUpdateResult.md)
 - [PartialProductUpdates](docs/Model/PartialProductUpdates.md)
 - [Payment](docs/Model/Payment.md)
 - [PaymentBean](docs/Model/PaymentBean.md)
 - [Payments](docs/Model/Payments.md)
 - [PaymentsBean](docs/Model/PaymentsBean.md)
 - [Price](docs/Model/Price.md)
 - [Prices](docs/Model/Prices.md)
 - [ProductBean](docs/Model/ProductBean.md)
 - [ProductImageResponse](docs/Model/ProductImageResponse.md)
 - [ProductImagesItems](docs/Model/ProductImagesItems.md)
 - [ProductLocationBean](docs/Model/ProductLocationBean.md)
 - [ProductPriceNamesResponse](docs/Model/ProductPriceNamesResponse.md)
 - [ProductPriceNamesResponseBean](docs/Model/ProductPriceNamesResponseBean.md)
 - [ProductPriceResponse](docs/Model/ProductPriceResponse.md)
 - [ProductPriceResponseBean](docs/Model/ProductPriceResponseBean.md)
 - [ProductResultBean](docs/Model/ProductResultBean.md)
 - [ProductSearchByFieldResponse](docs/Model/ProductSearchByFieldResponse.md)
 - [ProductStockLevelBean](docs/Model/ProductStockLevelBean.md)
 - [ProductUpdate](docs/Model/ProductUpdate.md)
 - [ProductsAPISearchCriteria](docs/Model/ProductsAPISearchCriteria.md)
 - [ProductsSearchByFieldRequest](docs/Model/ProductsSearchByFieldRequest.md)
 - [PurchaseOrderBean](docs/Model/PurchaseOrderBean.md)
 - [PurchaseOrderItems](docs/Model/PurchaseOrderItems.md)
 - [PurchaseOrderRequestBean](docs/Model/PurchaseOrderRequestBean.md)
 - [PurchaseOrderRequestItems](docs/Model/PurchaseOrderRequestItems.md)
 - [PurchaseOrderResponse](docs/Model/PurchaseOrderResponse.md)
 - [PurchaseOrderResponseBean](docs/Model/PurchaseOrderResponseBean.md)
 - [PurchaseOrderResponseBeanList](docs/Model/PurchaseOrderResponseBeanList.md)
 - [QuestionDataBean](docs/Model/QuestionDataBean.md)
 - [QuestionMessage](docs/Model/QuestionMessage.md)
 - [QuestionResult](docs/Model/QuestionResult.md)
 - [RefundOrderItem](docs/Model/RefundOrderItem.md)
 - [RefundPaymentItem](docs/Model/RefundPaymentItem.md)
 - [RefundSalesOrderResponse](docs/Model/RefundSalesOrderResponse.md)
 - [RegisterWebHookRequest](docs/Model/RegisterWebHookRequest.md)
 - [ReplyProductQuestionBean](docs/Model/ReplyProductQuestionBean.md)
 - [SalesOrderPaymentBean](docs/Model/SalesOrderPaymentBean.md)
 - [SalesOrderPaymentResponse](docs/Model/SalesOrderPaymentResponse.md)
 - [SalesOrdersRefundResponseDTO](docs/Model/SalesOrdersRefundResponseDTO.md)
 - [Scope](docs/Model/Scope.md)
 - [ScopeResponse](docs/Model/ScopeResponse.md)
 - [SellerIdResponse](docs/Model/SellerIdResponse.md)
 - [SellerIdsBean](docs/Model/SellerIdsBean.md)
 - [ShippingRefundItem](docs/Model/ShippingRefundItem.md)
 - [StockActionBean](docs/Model/StockActionBean.md)
 - [StockActionsResultBean](docs/Model/StockActionsResultBean.md)
 - [StockLevel](docs/Model/StockLevel.md)
 - [StockLevelResult](docs/Model/StockLevelResult.md)
 - [StockLocationResponse](docs/Model/StockLocationResponse.md)
 - [StockLocationResponseBean](docs/Model/StockLocationResponseBean.md)
 - [SupplierBean](docs/Model/SupplierBean.md)
 - [SupplierRequestBean](docs/Model/SupplierRequestBean.md)
 - [SupplierResponseBean](docs/Model/SupplierResponseBean.md)
 - [SupplierResponseBeanList](docs/Model/SupplierResponseBeanList.md)
 - [SuppliersResponse](docs/Model/SuppliersResponse.md)
 - [TaxCodesResultResponse](docs/Model/TaxCodesResultResponse.md)
 - [TaxCodesResultResponseBean](docs/Model/TaxCodesResultResponseBean.md)
 - [TaxRatesResponseBean](docs/Model/TaxRatesResponseBean.md)
 - [UpdateAsyncResponse](docs/Model/UpdateAsyncResponse.md)
 - [UpdateCustomer](docs/Model/UpdateCustomer.md)
 - [UpdateCustomerRequest](docs/Model/UpdateCustomerRequest.md)
 - [UpdateDeliveries](docs/Model/UpdateDeliveries.md)
 - [UpdateDelivery](docs/Model/UpdateDelivery.md)
 - [UpdateLocation](docs/Model/UpdateLocation.md)
 - [UpdateLocationBean](docs/Model/UpdateLocationBean.md)
 - [UpdateLocationResponse](docs/Model/UpdateLocationResponse.md)
 - [UpdateOrderItemsResponse](docs/Model/UpdateOrderItemsResponse.md)
 - [UpdateOrderItemsResponseBean](docs/Model/UpdateOrderItemsResponseBean.md)
 - [UpdateProductAsyncResponse](docs/Model/UpdateProductAsyncResponse.md)
 - [UpdatePurchaseOrder](docs/Model/UpdatePurchaseOrder.md)
 - [UpdatePurchaseOrderItems](docs/Model/UpdatePurchaseOrderItems.md)
 - [UpdatePurchaseOrderItemsBean](docs/Model/UpdatePurchaseOrderItemsBean.md)
 - [UpdatePurchaseOrderRequest](docs/Model/UpdatePurchaseOrderRequest.md)
 - [UpdateResponseJsonEntries](docs/Model/UpdateResponseJsonEntries.md)
 - [UpdateResponseJsonEntry](docs/Model/UpdateResponseJsonEntry.md)
 - [UpdateSalesOrderAsyncBean](docs/Model/UpdateSalesOrderAsyncBean.md)
 - [UpdateSalesOrderErrorResponse](docs/Model/UpdateSalesOrderErrorResponse.md)
 - [UpdateSalesOrderPaymentBean](docs/Model/UpdateSalesOrderPaymentBean.md)
 - [UpdateSalesOrderPaymentRequest](docs/Model/UpdateSalesOrderPaymentRequest.md)
 - [UpdateSalesOrderPaymentResponse](docs/Model/UpdateSalesOrderPaymentResponse.md)
 - [UpdateSalesOrderPaymentResponseBean](docs/Model/UpdateSalesOrderPaymentResponseBean.md)
 - [UpdateSalesOrdersBean](docs/Model/UpdateSalesOrdersBean.md)
 - [UpdateSupplier](docs/Model/UpdateSupplier.md)
 - [UpdateSupplierRequest](docs/Model/UpdateSupplierRequest.md)
 - [UpdateWebHookRequest](docs/Model/UpdateWebHookRequest.md)
 - [VoloAPIErrorResponse](docs/Model/VoloAPIErrorResponse.md)
 - [WebHookAuth](docs/Model/WebHookAuth.md)
 - [WebHookAuthResponse](docs/Model/WebHookAuthResponse.md)
 - [WebHookRequestScope](docs/Model/WebHookRequestScope.md)
 - [WebHookResponse](docs/Model/WebHookResponse.md)
 - [WebHookResponseBean](docs/Model/WebHookResponseBean.md)
 - [WebHookScopeCode](docs/Model/WebHookScopeCode.md)
 - [WebHookSubcribeResponse](docs/Model/WebHookSubcribeResponse.md)
 - [WebHookSubscribeResponseBean](docs/Model/WebHookSubscribeResponseBean.md)
 - [WebHookUpdateResponse](docs/Model/WebHookUpdateResponse.md)
 - [WebServiceMessage](docs/Model/WebServiceMessage.md)
 - [Weight](docs/Model/Weight.md)
 - [Width](docs/Model/Width.md)


## Documentation For Authorization


## API-Key-Header

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header

## JWT-HEADER

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header

## basicAuth

- **Type**: HTTP basic authentication


## Author




