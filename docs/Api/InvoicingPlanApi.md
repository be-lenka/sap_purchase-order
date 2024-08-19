# BeLenka\SAP\PurchaseOrder\InvoicingPlanApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_purchaseorder_2/srvd_a2x/sap/purchaseorder/0001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purchaseOrderInvoicingPlanGet()**](InvoicingPlanApi.md#purchaseOrderInvoicingPlanGet) | **GET** /PurchaseOrderInvoicingPlan | Get entities from PurchaseOrderInvoicingPlan |
| [**purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderInvoicingPlanGet()**](InvoicingPlanApi.md#purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderInvoicingPlanGet) | **GET** /PurchaseOrderInvoicingPlanItem/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlanItem}/{InvoicingPlan}/_PurchaseOrderInvoicingPlan | Get related _PurchaseOrderInvoicingPlan |
| [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanGet()**](InvoicingPlanApi.md#purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanGet) | **GET** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan} | Get entity from PurchaseOrderInvoicingPlan by key |
| [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemGet()**](InvoicingPlanApi.md#purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemGet) | **GET** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan}/_POInvoicingPlanItem | Get entities from related _POInvoicingPlanItem |
| [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemPost()**](InvoicingPlanApi.md#purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemPost) | **POST** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan}/_POInvoicingPlanItem | Add new entity to related _POInvoicingPlanItem |
| [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPatch()**](InvoicingPlanApi.md#purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPatch) | **PATCH** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan} | Update entity in PurchaseOrderInvoicingPlan |
| [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderGet()**](InvoicingPlanApi.md#purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderGet) | **GET** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan}/_PurchaseOrder | Get related _PurchaseOrder |
| [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderItemGet()**](InvoicingPlanApi.md#purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderItemGet) | **GET** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan}/_PurchaseOrderItem | Get related _PurchaseOrderItem |
| [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanGet()**](InvoicingPlanApi.md#purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanGet) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderInvoicingPlan | Get entities from related _PurchaseOrderInvoicingPlan |
| [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanPost()**](InvoicingPlanApi.md#purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanPost) | **POST** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderInvoicingPlan | Add new entity to related _PurchaseOrderInvoicingPlan |


## `purchaseOrderInvoicingPlanGet()`

```php
purchaseOrderInvoicingPlanGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderInvoicingPlanType
```

Get entities from PurchaseOrderInvoicingPlan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 50; // int | Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter)
$count = True; // bool | Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderInvoicingPlanGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingPlanApi->purchaseOrderInvoicingPlanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **top** | **int**| Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter) | [optional] |
| **count** | **bool**| Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderInvoicingPlanType**](../Model/CollectionOfPurchaseOrderInvoicingPlanType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderInvoicingPlanGet()`

```php
purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderInvoicingPlanGet($purchase_order, $purchase_order_item, $invoicing_plan_item, $invoicing_plan, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanType
```

Get related _PurchaseOrderInvoicingPlan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$invoicing_plan_item = 'invoicing_plan_item_example'; // string | Item for billing plan/invoice plan/payment cards
$invoicing_plan = 'invoicing_plan_example'; // string | Billing/Invoicing Plan Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderInvoicingPlanGet($purchase_order, $purchase_order_item, $invoicing_plan_item, $invoicing_plan, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingPlanApi->purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderInvoicingPlanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **invoicing_plan_item** | **string**| Item for billing plan/invoice plan/payment cards | |
| **invoicing_plan** | **string**| Billing/Invoicing Plan Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanGet()`

```php
purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanGet($purchase_order, $purchase_order_item, $invoicing_plan, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanType
```

Get entity from PurchaseOrderInvoicingPlan by key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$invoicing_plan = 'invoicing_plan_example'; // string | Billing/Invoicing Plan Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanGet($purchase_order, $purchase_order_item, $invoicing_plan, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingPlanApi->purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **invoicing_plan** | **string**| Billing/Invoicing Plan Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemGet()`

```php
purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemGet($purchase_order, $purchase_order_item, $invoicing_plan, $top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPOInvoicingPlanItemType
```

Get entities from related _POInvoicingPlanItem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$invoicing_plan = 'invoicing_plan_example'; // string | Billing/Invoicing Plan Number
$top = 50; // int | Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter)
$count = True; // bool | Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemGet($purchase_order, $purchase_order_item, $invoicing_plan, $top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingPlanApi->purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **invoicing_plan** | **string**| Billing/Invoicing Plan Number | |
| **top** | **int**| Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter) | [optional] |
| **count** | **bool**| Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPOInvoicingPlanItemType**](../Model/CollectionOfPOInvoicingPlanItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemPost()`

```php
purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemPost($purchase_order, $purchase_order_item, $invoicing_plan, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_invoicing_plan_item_type_create): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemType
```

Add new entity to related _POInvoicingPlanItem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$invoicing_plan = 'invoicing_plan_example'; // string | Billing/Invoicing Plan Number
$com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_invoicing_plan_item_type_create = new \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemTypeCreate(); // \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemTypeCreate | New entity

try {
    $result = $apiInstance->purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemPost($purchase_order, $purchase_order_item, $invoicing_plan, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_invoicing_plan_item_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingPlanApi->purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **invoicing_plan** | **string**| Billing/Invoicing Plan Number | |
| **com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_invoicing_plan_item_type_create** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemTypeCreate**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPatch()`

```php
purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPatch($purchase_order, $purchase_order_item, $invoicing_plan, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_invoicing_plan_type_update)
```

Update entity in PurchaseOrderInvoicingPlan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$invoicing_plan = 'invoicing_plan_example'; // string | Billing/Invoicing Plan Number
$com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_invoicing_plan_type_update = new \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanTypeUpdate(); // \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanTypeUpdate | New property values

try {
    $apiInstance->purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPatch($purchase_order, $purchase_order_item, $invoicing_plan, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_invoicing_plan_type_update);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingPlanApi->purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **invoicing_plan** | **string**| Billing/Invoicing Plan Number | |
| **com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_invoicing_plan_type_update** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanTypeUpdate.md)| New property values | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderGet()`

```php
purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderGet($purchase_order, $purchase_order_item, $invoicing_plan, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType
```

Get related _PurchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$invoicing_plan = 'invoicing_plan_example'; // string | Billing/Invoicing Plan Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderGet($purchase_order, $purchase_order_item, $invoicing_plan, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingPlanApi->purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **invoicing_plan** | **string**| Billing/Invoicing Plan Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderItemGet()`

```php
purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderItemGet($purchase_order, $purchase_order_item, $invoicing_plan, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType
```

Get related _PurchaseOrderItem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$invoicing_plan = 'invoicing_plan_example'; // string | Billing/Invoicing Plan Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderItemGet($purchase_order, $purchase_order_item, $invoicing_plan, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingPlanApi->purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **invoicing_plan** | **string**| Billing/Invoicing Plan Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanGet()`

```php
purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanGet($purchase_order, $purchase_order_item, $top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderInvoicingPlanType
```

Get entities from related _PurchaseOrderInvoicingPlan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$top = 50; // int | Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter)
$count = True; // bool | Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanGet($purchase_order, $purchase_order_item, $top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingPlanApi->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **top** | **int**| Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter) | [optional] |
| **count** | **bool**| Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderInvoicingPlanType**](../Model/CollectionOfPurchaseOrderInvoicingPlanType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanPost()`

```php
purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanPost($purchase_order, $purchase_order_item, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_invoicing_plan_type_create): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanType
```

Add new entity to related _PurchaseOrderInvoicingPlan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\PurchaseOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_invoicing_plan_type_create = new \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanTypeCreate(); // \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanTypeCreate | New entity

try {
    $result = $apiInstance->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanPost($purchase_order, $purchase_order_item, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_invoicing_plan_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingPlanApi->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_invoicing_plan_type_create** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanTypeCreate**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
