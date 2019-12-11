<?php
/**
 * PurchaseOrdersApi
 * PHP version 5
 *
 * @category Class
 * @package  com.volocommerce.api.v1.sdk.invoker
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Volo Public APIs
 *
 * Volo Public APIs
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.client;

use \com.volocommerce.api.v1.sdk.invoker\ApiClient;
use \com.volocommerce.api.v1.sdk.invoker\ApiException;
use \com.volocommerce.api.v1.sdk.invoker\Configuration;
use \com.volocommerce.api.v1.sdk.invoker\ObjectSerializer;

/**
 * PurchaseOrdersApi Class Doc Comment
 *
 * @category Class
 * @package  com.volocommerce.api.v1.sdk.invoker
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseOrdersApi
{
    /**
     * API Client
     *
     * @var \com.volocommerce.api.v1.sdk.invoker\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \com.volocommerce.api.v1.sdk.invoker\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\com.volocommerce.api.v1.sdk.invoker\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \com.volocommerce.api.v1.sdk.invoker\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \com.volocommerce.api.v1.sdk.invoker\ApiClient $apiClient set the API client
     *
     * @return PurchaseOrdersApi
     */
    public function setApiClient(\com.volocommerce.api.v1.sdk.invoker\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation confirmDelivery
     *
     * Confirm Delivery.
     *
     * @param int $purchase_order_id  (required)
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @param \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\AddConfirmDeliveryRequest $body  (optional)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return void
     */
    public function confirmDelivery($purchase_order_id, $authorization, $x_api_key, $body = null)
    {
        list($response) = $this->confirmDeliveryWithHttpInfo($purchase_order_id, $authorization, $x_api_key, $body);
        return $response;
    }

    /**
     * Operation confirmDeliveryWithHttpInfo
     *
     * Confirm Delivery.
     *
     * @param int $purchase_order_id  (required)
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @param \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\AddConfirmDeliveryRequest $body  (optional)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function confirmDeliveryWithHttpInfo($purchase_order_id, $authorization, $x_api_key, $body = null)
    {
        // verify the required parameter 'purchase_order_id' is set
        if ($purchase_order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $purchase_order_id when calling confirmDelivery');
        }
        // verify the required parameter 'authorization' is set
        if ($authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling confirmDelivery');
        }
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_api_key when calling confirmDelivery');
        }
        // parse inputs
        $resourcePath = "/purchaseOrders/{purchaseOrderId}/delivery";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = $this->apiClient->getSerializer()->toHeaderValue($x_api_key);
        }
        // path params
        if ($purchase_order_id !== null) {
            $resourcePath = str_replace(
                "{" . "purchaseOrderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($purchase_order_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/purchaseOrders/{purchaseOrderId}/delivery'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation confirmOrder
     *
     * Confirm Purchase Order.
     *
     * @param int $purchase_order_id  (required)
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return void
     */
    public function confirmOrder($purchase_order_id, $authorization, $x_api_key)
    {
        list($response) = $this->confirmOrderWithHttpInfo($purchase_order_id, $authorization, $x_api_key);
        return $response;
    }

    /**
     * Operation confirmOrderWithHttpInfo
     *
     * Confirm Purchase Order.
     *
     * @param int $purchase_order_id  (required)
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function confirmOrderWithHttpInfo($purchase_order_id, $authorization, $x_api_key)
    {
        // verify the required parameter 'purchase_order_id' is set
        if ($purchase_order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $purchase_order_id when calling confirmOrder');
        }
        // verify the required parameter 'authorization' is set
        if ($authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling confirmOrder');
        }
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_api_key when calling confirmOrder');
        }
        // parse inputs
        $resourcePath = "/purchaseOrders/{purchaseOrderId}/confirm";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = $this->apiClient->getSerializer()->toHeaderValue($x_api_key);
        }
        // path params
        if ($purchase_order_id !== null) {
            $resourcePath = str_replace(
                "{" . "purchaseOrderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($purchase_order_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/purchaseOrders/{purchaseOrderId}/confirm'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation doUpdate
     *
     * Update Purchase Order.
     *
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @param \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\UpdatePurchaseOrder $body  (optional)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return void
     */
    public function doUpdate($authorization, $x_api_key, $body = null)
    {
        list($response) = $this->doUpdateWithHttpInfo($authorization, $x_api_key, $body);
        return $response;
    }

    /**
     * Operation doUpdateWithHttpInfo
     *
     * Update Purchase Order.
     *
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @param \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\UpdatePurchaseOrder $body  (optional)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function doUpdateWithHttpInfo($authorization, $x_api_key, $body = null)
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling doUpdate');
        }
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_api_key when calling doUpdate');
        }
        // parse inputs
        $resourcePath = "/purchaseOrders";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json; charset=utf-8']);

        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = $this->apiClient->getSerializer()->toHeaderValue($x_api_key);
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/purchaseOrders'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getDetails
     *
     * Get Purchase Order Details
     *
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @param int $id Purchase Order ID (optional)
     * @param string $purchase_order_number Purchase Order Number (optional)
     * @param \DateTime $start_creation_date Start date for comparison by using purchase order creation date (optional)
     * @param \DateTime $end_creation_date End date for comparison by using purchase order creation date (optional)
     * @param \DateTime $start_confirm_date Start date for comparison by using purchase order confirm date (optional)
     * @param \DateTime $end_confirm_date End date for comparison by using purchase order confirm date (optional)
     * @param string $order_status Order Status (optional)
     * @param string $order_type Order Type (optional)
     * @param int $location_id Location Id (optional)
     * @param int $supplier_id Supplier Id (optional)
     * @param int $page_number Page number (optional)
     * @param int $entries_per_page No of entries per page (optional)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PurchaseOrderResponse
     */
    public function getDetails($authorization, $x_api_key, $id = null, $purchase_order_number = null, $start_creation_date = null, $end_creation_date = null, $start_confirm_date = null, $end_confirm_date = null, $order_status = null, $order_type = null, $location_id = null, $supplier_id = null, $page_number = null, $entries_per_page = null)
    {
        list($response) = $this->getDetailsWithHttpInfo($authorization, $x_api_key, $id, $purchase_order_number, $start_creation_date, $end_creation_date, $start_confirm_date, $end_confirm_date, $order_status, $order_type, $location_id, $supplier_id, $page_number, $entries_per_page);
        return $response;
    }

    /**
     * Operation getDetailsWithHttpInfo
     *
     * Get Purchase Order Details
     *
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @param int $id Purchase Order ID (optional)
     * @param string $purchase_order_number Purchase Order Number (optional)
     * @param \DateTime $start_creation_date Start date for comparison by using purchase order creation date (optional)
     * @param \DateTime $end_creation_date End date for comparison by using purchase order creation date (optional)
     * @param \DateTime $start_confirm_date Start date for comparison by using purchase order confirm date (optional)
     * @param \DateTime $end_confirm_date End date for comparison by using purchase order confirm date (optional)
     * @param string $order_status Order Status (optional)
     * @param string $order_type Order Type (optional)
     * @param int $location_id Location Id (optional)
     * @param int $supplier_id Supplier Id (optional)
     * @param int $page_number Page number (optional)
     * @param int $entries_per_page No of entries per page (optional)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return array of \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PurchaseOrderResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDetailsWithHttpInfo($authorization, $x_api_key, $id = null, $purchase_order_number = null, $start_creation_date = null, $end_creation_date = null, $start_confirm_date = null, $end_confirm_date = null, $order_status = null, $order_type = null, $location_id = null, $supplier_id = null, $page_number = null, $entries_per_page = null)
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling getDetails');
        }
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_api_key when calling getDetails');
        }
        // parse inputs
        $resourcePath = "/purchaseOrders";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }
        // query params
        if ($purchase_order_number !== null) {
            $queryParams['purchaseOrderNumber'] = $this->apiClient->getSerializer()->toQueryValue($purchase_order_number);
        }
        // query params
        if ($start_creation_date !== null) {
            $queryParams['startCreationDate'] = $this->apiClient->getSerializer()->toQueryValue($start_creation_date);
        }
        // query params
        if ($end_creation_date !== null) {
            $queryParams['endCreationDate'] = $this->apiClient->getSerializer()->toQueryValue($end_creation_date);
        }
        // query params
        if ($start_confirm_date !== null) {
            $queryParams['startConfirmDate'] = $this->apiClient->getSerializer()->toQueryValue($start_confirm_date);
        }
        // query params
        if ($end_confirm_date !== null) {
            $queryParams['endConfirmDate'] = $this->apiClient->getSerializer()->toQueryValue($end_confirm_date);
        }
        // query params
        if ($order_status !== null) {
            $queryParams['orderStatus'] = $this->apiClient->getSerializer()->toQueryValue($order_status);
        }
        // query params
        if ($order_type !== null) {
            $queryParams['orderType'] = $this->apiClient->getSerializer()->toQueryValue($order_type);
        }
        // query params
        if ($location_id !== null) {
            $queryParams['locationId'] = $this->apiClient->getSerializer()->toQueryValue($location_id);
        }
        // query params
        if ($supplier_id !== null) {
            $queryParams['supplierId'] = $this->apiClient->getSerializer()->toQueryValue($supplier_id);
        }
        // query params
        if ($page_number !== null) {
            $queryParams['pageNumber'] = $this->apiClient->getSerializer()->toQueryValue($page_number);
        }
        // query params
        if ($entries_per_page !== null) {
            $queryParams['entriesPerPage'] = $this->apiClient->getSerializer()->toQueryValue($entries_per_page);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = $this->apiClient->getSerializer()->toHeaderValue($x_api_key);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PurchaseOrderResponse',
                '/purchaseOrders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PurchaseOrderResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PurchaseOrderResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\VoloAPIErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation removePurchaseOrder
     *
     * Remove Purchase Order
     *
     * @param int $purchase_order_id Purchase Order ID (required)
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return void
     */
    public function removePurchaseOrder($purchase_order_id, $authorization, $x_api_key)
    {
        list($response) = $this->removePurchaseOrderWithHttpInfo($purchase_order_id, $authorization, $x_api_key);
        return $response;
    }

    /**
     * Operation removePurchaseOrderWithHttpInfo
     *
     * Remove Purchase Order
     *
     * @param int $purchase_order_id Purchase Order ID (required)
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function removePurchaseOrderWithHttpInfo($purchase_order_id, $authorization, $x_api_key)
    {
        // verify the required parameter 'purchase_order_id' is set
        if ($purchase_order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $purchase_order_id when calling removePurchaseOrder');
        }
        // verify the required parameter 'authorization' is set
        if ($authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling removePurchaseOrder');
        }
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_api_key when calling removePurchaseOrder');
        }
        // parse inputs
        $resourcePath = "/purchaseOrders/{purchaseOrderId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = $this->apiClient->getSerializer()->toHeaderValue($x_api_key);
        }
        // path params
        if ($purchase_order_id !== null) {
            $resourcePath = str_replace(
                "{" . "purchaseOrderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($purchase_order_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/purchaseOrders/{purchaseOrderId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation removePurchaseOrderItems
     *
     * Remove Purchase Order Item
     *
     * @param int $purchase_order_id Purchase Order ID (required)
     * @param int $purchase_order_item_id Purchase Order Item ID (required)
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return void
     */
    public function removePurchaseOrderItems($purchase_order_id, $purchase_order_item_id, $authorization, $x_api_key)
    {
        list($response) = $this->removePurchaseOrderItemsWithHttpInfo($purchase_order_id, $purchase_order_item_id, $authorization, $x_api_key);
        return $response;
    }

    /**
     * Operation removePurchaseOrderItemsWithHttpInfo
     *
     * Remove Purchase Order Item
     *
     * @param int $purchase_order_id Purchase Order ID (required)
     * @param int $purchase_order_item_id Purchase Order Item ID (required)
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function removePurchaseOrderItemsWithHttpInfo($purchase_order_id, $purchase_order_item_id, $authorization, $x_api_key)
    {
        // verify the required parameter 'purchase_order_id' is set
        if ($purchase_order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $purchase_order_id when calling removePurchaseOrderItems');
        }
        // verify the required parameter 'purchase_order_item_id' is set
        if ($purchase_order_item_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $purchase_order_item_id when calling removePurchaseOrderItems');
        }
        // verify the required parameter 'authorization' is set
        if ($authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling removePurchaseOrderItems');
        }
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_api_key when calling removePurchaseOrderItems');
        }
        // parse inputs
        $resourcePath = "/purchaseOrders/{purchaseOrderId}/orderItem/{purchaseOrderItemId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = $this->apiClient->getSerializer()->toHeaderValue($x_api_key);
        }
        // path params
        if ($purchase_order_id !== null) {
            $resourcePath = str_replace(
                "{" . "purchaseOrderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($purchase_order_id),
                $resourcePath
            );
        }
        // path params
        if ($purchase_order_item_id !== null) {
            $resourcePath = str_replace(
                "{" . "purchaseOrderItemId" . "}",
                $this->apiClient->getSerializer()->toPathValue($purchase_order_item_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/purchaseOrders/{purchaseOrderId}/orderItem/{purchaseOrderItemId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation savePurchaseOrders
     *
     * Add a list of Purchase Order
     *
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @param \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\AddPurchaseOrders $body  (optional)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PurchaseOrderResponseBeanList
     */
    public function savePurchaseOrders($authorization, $x_api_key, $body = null)
    {
        list($response) = $this->savePurchaseOrdersWithHttpInfo($authorization, $x_api_key, $body);
        return $response;
    }

    /**
     * Operation savePurchaseOrdersWithHttpInfo
     *
     * Add a list of Purchase Order
     *
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @param \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\AddPurchaseOrders $body  (optional)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return array of \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PurchaseOrderResponseBeanList, HTTP status code, HTTP response headers (array of strings)
     */
    public function savePurchaseOrdersWithHttpInfo($authorization, $x_api_key, $body = null)
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling savePurchaseOrders');
        }
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_api_key when calling savePurchaseOrders');
        }
        // parse inputs
        $resourcePath = "/purchaseOrders";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json; charset=utf-8']);

        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = $this->apiClient->getSerializer()->toHeaderValue($x_api_key);
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PurchaseOrderResponseBeanList',
                '/purchaseOrders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PurchaseOrderResponseBeanList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\PurchaseOrderResponseBeanList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\VoloAPIErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateDeliveries
     *
     * Update deliveries.
     *
     * @param int $purchase_order_id  (required)
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @param \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\UpdateDelivery $body  (optional)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return void
     */
    public function updateDeliveries($purchase_order_id, $authorization, $x_api_key, $body = null)
    {
        list($response) = $this->updateDeliveriesWithHttpInfo($purchase_order_id, $authorization, $x_api_key, $body);
        return $response;
    }

    /**
     * Operation updateDeliveriesWithHttpInfo
     *
     * Update deliveries.
     *
     * @param int $purchase_order_id  (required)
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @param \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\UpdateDelivery $body  (optional)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDeliveriesWithHttpInfo($purchase_order_id, $authorization, $x_api_key, $body = null)
    {
        // verify the required parameter 'purchase_order_id' is set
        if ($purchase_order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $purchase_order_id when calling updateDeliveries');
        }
        // verify the required parameter 'authorization' is set
        if ($authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling updateDeliveries');
        }
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_api_key when calling updateDeliveries');
        }
        // parse inputs
        $resourcePath = "/purchaseOrders/{purchaseOrderId}/delivery";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = $this->apiClient->getSerializer()->toHeaderValue($x_api_key);
        }
        // path params
        if ($purchase_order_id !== null) {
            $resourcePath = str_replace(
                "{" . "purchaseOrderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($purchase_order_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/purchaseOrders/{purchaseOrderId}/delivery'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}