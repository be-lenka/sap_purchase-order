# BeLenka\SAP\PurchaseOrder\PricingElementApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_purchaseorder_2/srvd_a2x/sap/purchaseorder/0001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purOrderItemPricingElementGet()**](PricingElementApi.md#purOrderItemPricingElementGet) | **GET** /PurOrderItemPricingElement | Get entities from PurOrderItemPricingElement |
| [**purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterGet()**](PricingElementApi.md#purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterGet) | **GET** /PurOrderItemPricingElement/{PurchaseOrder}/{PurchaseOrderItem}/{PricingDocument}/{PricingDocumentItem}/{PricingProcedureStep}/{PricingProcedureCounter} | Get entity from PurOrderItemPricingElement by key |
| [**purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPatch()**](PricingElementApi.md#purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPatch) | **PATCH** /PurOrderItemPricingElement/{PurchaseOrder}/{PurchaseOrderItem}/{PricingDocument}/{PricingDocumentItem}/{PricingProcedureStep}/{PricingProcedureCounter} | Update entity in PurOrderItemPricingElement |
| [**purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderGet()**](PricingElementApi.md#purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderGet) | **GET** /PurOrderItemPricingElement/{PurchaseOrder}/{PurchaseOrderItem}/{PricingDocument}/{PricingDocumentItem}/{PricingProcedureStep}/{PricingProcedureCounter}/_PurchaseOrder | Get related _PurchaseOrder |
| [**purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderItemGet()**](PricingElementApi.md#purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderItemGet) | **GET** /PurOrderItemPricingElement/{PurchaseOrder}/{PurchaseOrderItem}/{PricingDocument}/{PricingDocumentItem}/{PricingProcedureStep}/{PricingProcedureCounter}/_PurchaseOrderItem | Get related _PurchaseOrderItem |
| [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementGet()**](PricingElementApi.md#purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementGet) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurOrdPricingElement | Get entities from related _PurOrdPricingElement |
| [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementPost()**](PricingElementApi.md#purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementPost) | **POST** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurOrdPricingElement | Add new entity to related _PurOrdPricingElement |


## `purOrderItemPricingElementGet()`

```php
purOrderItemPricingElementGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurOrderItemPricingElementType
```

Get entities from PurOrderItemPricingElement

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\PricingElementApi(
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
    $result = $apiInstance->purOrderItemPricingElementGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingElementApi->purOrderItemPricingElementGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurOrderItemPricingElementType**](../Model/CollectionOfPurOrderItemPricingElementType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterGet()`

```php
purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterGet($purchase_order, $purchase_order_item, $pricing_document, $pricing_document_item, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementType
```

Get entity from PurOrderItemPricingElement by key

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\PricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchasing Document
$pricing_document = 'pricing_document_example'; // string | Number of the Document Condition
$pricing_document_item = 'pricing_document_item_example'; // string | Condition item number
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterGet($purchase_order, $purchase_order_item, $pricing_document, $pricing_document_item, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingElementApi->purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchasing Document | |
| **pricing_document** | **string**| Number of the Document Condition | |
| **pricing_document_item** | **string**| Condition item number | |
| **pricing_procedure_step** | **string**| Step Number | |
| **pricing_procedure_counter** | **string**| Condition Counter | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPatch()`

```php
purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPatch($purchase_order, $purchase_order_item, $pricing_document, $pricing_document_item, $pricing_procedure_step, $pricing_procedure_counter, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_pur_order_item_pricing_element_type_update)
```

Update entity in PurOrderItemPricingElement

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\PricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchasing Document
$pricing_document = 'pricing_document_example'; // string | Number of the Document Condition
$pricing_document_item = 'pricing_document_item_example'; // string | Condition item number
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter
$com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_pur_order_item_pricing_element_type_update = new \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementTypeUpdate(); // \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementTypeUpdate | New property values

try {
    $apiInstance->purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPatch($purchase_order, $purchase_order_item, $pricing_document, $pricing_document_item, $pricing_procedure_step, $pricing_procedure_counter, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_pur_order_item_pricing_element_type_update);
} catch (Exception $e) {
    echo 'Exception when calling PricingElementApi->purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchasing Document | |
| **pricing_document** | **string**| Number of the Document Condition | |
| **pricing_document_item** | **string**| Condition item number | |
| **pricing_procedure_step** | **string**| Step Number | |
| **pricing_procedure_counter** | **string**| Condition Counter | |
| **com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_pur_order_item_pricing_element_type_update** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementTypeUpdate.md)| New property values | |

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

## `purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderGet()`

```php
purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderGet($purchase_order, $purchase_order_item, $pricing_document, $pricing_document_item, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\PricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchasing Document
$pricing_document = 'pricing_document_example'; // string | Number of the Document Condition
$pricing_document_item = 'pricing_document_item_example'; // string | Condition item number
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderGet($purchase_order, $purchase_order_item, $pricing_document, $pricing_document_item, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingElementApi->purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchasing Document | |
| **pricing_document** | **string**| Number of the Document Condition | |
| **pricing_document_item** | **string**| Condition item number | |
| **pricing_procedure_step** | **string**| Step Number | |
| **pricing_procedure_counter** | **string**| Condition Counter | |
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

## `purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderItemGet()`

```php
purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderItemGet($purchase_order, $purchase_order_item, $pricing_document, $pricing_document_item, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\PricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchasing Document
$pricing_document = 'pricing_document_example'; // string | Number of the Document Condition
$pricing_document_item = 'pricing_document_item_example'; // string | Condition item number
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderItemGet($purchase_order, $purchase_order_item, $pricing_document, $pricing_document_item, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingElementApi->purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchasing Document | |
| **pricing_document** | **string**| Number of the Document Condition | |
| **pricing_document_item** | **string**| Condition item number | |
| **pricing_procedure_step** | **string**| Step Number | |
| **pricing_procedure_counter** | **string**| Condition Counter | |
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

## `purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementGet()`

```php
purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementGet($purchase_order, $purchase_order_item, $top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurOrderItemPricingElementType
```

Get entities from related _PurOrdPricingElement

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\PricingElementApi(
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
    $result = $apiInstance->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementGet($purchase_order, $purchase_order_item, $top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingElementApi->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurOrderItemPricingElementType**](../Model/CollectionOfPurOrderItemPricingElementType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementPost()`

```php
purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementPost($purchase_order, $purchase_order_item, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_pur_order_item_pricing_element_type_create): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementType
```

Add new entity to related _PurOrdPricingElement

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\PricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_pur_order_item_pricing_element_type_create = new \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementTypeCreate(); // \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementTypeCreate | New entity

try {
    $result = $apiInstance->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementPost($purchase_order, $purchase_order_item, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_pur_order_item_pricing_element_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingElementApi->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_pur_order_item_pricing_element_type_create** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementTypeCreate**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
