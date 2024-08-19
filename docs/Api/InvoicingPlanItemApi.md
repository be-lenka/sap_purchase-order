# BeLenka\SAP\PurchaseOrder\InvoicingPlanItemApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_purchaseorder_2/srvd_a2x/sap/purchaseorder/0001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purchaseOrderInvoicingPlanItemGet()**](InvoicingPlanItemApi.md#purchaseOrderInvoicingPlanItemGet) | **GET** /PurchaseOrderInvoicingPlanItem | Get entities from PurchaseOrderInvoicingPlanItem |
| [**purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanGet()**](InvoicingPlanItemApi.md#purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanGet) | **GET** /PurchaseOrderInvoicingPlanItem/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlanItem}/{InvoicingPlan} | Get entity from PurchaseOrderInvoicingPlanItem by key |
| [**purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPatch()**](InvoicingPlanItemApi.md#purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPatch) | **PATCH** /PurchaseOrderInvoicingPlanItem/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlanItem}/{InvoicingPlan} | Update entity in PurchaseOrderInvoicingPlanItem |
| [**purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderGet()**](InvoicingPlanItemApi.md#purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderGet) | **GET** /PurchaseOrderInvoicingPlanItem/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlanItem}/{InvoicingPlan}/_PurchaseOrder | Get related _PurchaseOrder |
| [**purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderInvoicingPlanGet()**](InvoicingPlanItemApi.md#purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderInvoicingPlanGet) | **GET** /PurchaseOrderInvoicingPlanItem/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlanItem}/{InvoicingPlan}/_PurchaseOrderInvoicingPlan | Get related _PurchaseOrderInvoicingPlan |
| [**purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderItemGet()**](InvoicingPlanItemApi.md#purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderItemGet) | **GET** /PurchaseOrderInvoicingPlanItem/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlanItem}/{InvoicingPlan}/_PurchaseOrderItem | Get related _PurchaseOrderItem |
| [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemGet()**](InvoicingPlanItemApi.md#purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemGet) | **GET** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan}/_POInvoicingPlanItem | Get entities from related _POInvoicingPlanItem |
| [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemPost()**](InvoicingPlanItemApi.md#purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemPost) | **POST** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan}/_POInvoicingPlanItem | Add new entity to related _POInvoicingPlanItem |


## `purchaseOrderInvoicingPlanItemGet()`

```php
purchaseOrderInvoicingPlanItemGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPOInvoicingPlanItemType
```

Get entities from PurchaseOrderInvoicingPlanItem

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanItemApi(
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
    $result = $apiInstance->purchaseOrderInvoicingPlanItemGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingPlanItemApi->purchaseOrderInvoicingPlanItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPOInvoicingPlanItemType**](../Model/CollectionOfPOInvoicingPlanItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanGet()`

```php
purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanGet($purchase_order, $purchase_order_item, $invoicing_plan_item, $invoicing_plan, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemType
```

Get entity from PurchaseOrderInvoicingPlanItem by key

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanItemApi(
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
    $result = $apiInstance->purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanGet($purchase_order, $purchase_order_item, $invoicing_plan_item, $invoicing_plan, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingPlanItemApi->purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPatch()`

```php
purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPatch($purchase_order, $purchase_order_item, $invoicing_plan_item, $invoicing_plan, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_invoicing_plan_item_type_update)
```

Update entity in PurchaseOrderInvoicingPlanItem

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$invoicing_plan_item = 'invoicing_plan_item_example'; // string | Item for billing plan/invoice plan/payment cards
$invoicing_plan = 'invoicing_plan_example'; // string | Billing/Invoicing Plan Number
$com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_invoicing_plan_item_type_update = new \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemTypeUpdate(); // \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemTypeUpdate | New property values

try {
    $apiInstance->purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPatch($purchase_order, $purchase_order_item, $invoicing_plan_item, $invoicing_plan, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_invoicing_plan_item_type_update);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingPlanItemApi->purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **invoicing_plan_item** | **string**| Item for billing plan/invoice plan/payment cards | |
| **invoicing_plan** | **string**| Billing/Invoicing Plan Number | |
| **com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_invoicing_plan_item_type_update** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemTypeUpdate.md)| New property values | |

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

## `purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderGet()`

```php
purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderGet($purchase_order, $purchase_order_item, $invoicing_plan_item, $invoicing_plan, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanItemApi(
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
    $result = $apiInstance->purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderGet($purchase_order, $purchase_order_item, $invoicing_plan_item, $invoicing_plan, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingPlanItemApi->purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType.md)

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanItemApi(
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
    echo 'Exception when calling InvoicingPlanItemApi->purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderInvoicingPlanGet: ', $e->getMessage(), PHP_EOL;
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

## `purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderItemGet()`

```php
purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderItemGet($purchase_order, $purchase_order_item, $invoicing_plan_item, $invoicing_plan, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanItemApi(
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
    $result = $apiInstance->purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderItemGet($purchase_order, $purchase_order_item, $invoicing_plan_item, $invoicing_plan, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingPlanItemApi->purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType.md)

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanItemApi(
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
    echo 'Exception when calling InvoicingPlanItemApi->purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\InvoicingPlanItemApi(
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
    echo 'Exception when calling InvoicingPlanItemApi->purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemPost: ', $e->getMessage(), PHP_EOL;
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
