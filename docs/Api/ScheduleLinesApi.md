# BeLenka\SAP\PurchaseOrder\ScheduleLinesApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_purchaseorder_2/srvd_a2x/sap/purchaseorder/0001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeScheduleLineGet()**](ScheduleLinesApi.md#pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeScheduleLineGet) | **GET** /POSubcontractingComponent/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/{ReservationItem}/{RecordType}/_ScheduleLine | Get related _ScheduleLine |
| [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPGet()**](ScheduleLinesApi.md#purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPGet) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderScheduleLineTP | Get entities from related _PurchaseOrderScheduleLineTP |
| [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPPost()**](ScheduleLinesApi.md#purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPPost) | **POST** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderScheduleLineTP | Add new entity to related _PurchaseOrderScheduleLineTP |
| [**purchaseOrderScheduleLineGet()**](ScheduleLinesApi.md#purchaseOrderScheduleLineGet) | **GET** /PurchaseOrderScheduleLine | Get entities from PurchaseOrderScheduleLine |
| [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineGet()**](ScheduleLinesApi.md#purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineGet) | **GET** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine} | Get entity from PurchaseOrderScheduleLine by key |
| [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePatch()**](ScheduleLinesApi.md#purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePatch) | **PATCH** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine} | Update entity in PurchaseOrderScheduleLine |
| [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderGet()**](ScheduleLinesApi.md#purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderGet) | **GET** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/_PurchaseOrder | Get related _PurchaseOrder |
| [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderItemGet()**](ScheduleLinesApi.md#purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderItemGet) | **GET** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/_PurchaseOrderItem | Get related _PurchaseOrderItem |
| [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentGet()**](ScheduleLinesApi.md#purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentGet) | **GET** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/_SubcontractingComponent | Get entities from related _SubcontractingComponent |
| [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentPost()**](ScheduleLinesApi.md#purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentPost) | **POST** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/_SubcontractingComponent | Add new entity to related _SubcontractingComponent |


## `pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeScheduleLineGet()`

```php
pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeScheduleLineGet($purchase_order, $purchase_order_item, $schedule_line, $reservation_item, $record_type, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineType
```

Get related _ScheduleLine

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ScheduleLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document
$purchase_order_item = 'purchase_order_item_example'; // string | Purchasing Document Item
$schedule_line = 'schedule_line_example'; // string | Delivery Schedule Line Counter
$reservation_item = 'reservation_item_example'; // string | Reservation Item
$record_type = 'record_type_example'; // string | Reservation Record Type
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeScheduleLineGet($purchase_order, $purchase_order_item, $schedule_line, $reservation_item, $record_type, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleLinesApi->pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeScheduleLineGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document | |
| **purchase_order_item** | **string**| Purchasing Document Item | |
| **schedule_line** | **string**| Delivery Schedule Line Counter | |
| **reservation_item** | **string**| Reservation Item | |
| **record_type** | **string**| Reservation Record Type | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPGet()`

```php
purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPGet($purchase_order, $purchase_order_item, $top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderScheduleLineType
```

Get entities from related _PurchaseOrderScheduleLineTP

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ScheduleLinesApi(
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
    $result = $apiInstance->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPGet($purchase_order, $purchase_order_item, $top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleLinesApi->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderScheduleLineType**](../Model/CollectionOfPurchaseOrderScheduleLineType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPPost()`

```php
purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPPost($purchase_order, $purchase_order_item, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_schedule_line_type_create): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineType
```

Add new entity to related _PurchaseOrderScheduleLineTP

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ScheduleLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_schedule_line_type_create = new \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeCreate(); // \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeCreate | New entity

try {
    $result = $apiInstance->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPPost($purchase_order, $purchase_order_item, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_schedule_line_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleLinesApi->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_schedule_line_type_create** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeCreate**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderScheduleLineGet()`

```php
purchaseOrderScheduleLineGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderScheduleLineType
```

Get entities from PurchaseOrderScheduleLine

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ScheduleLinesApi(
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
    $result = $apiInstance->purchaseOrderScheduleLineGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleLinesApi->purchaseOrderScheduleLineGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderScheduleLineType**](../Model/CollectionOfPurchaseOrderScheduleLineType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineGet()`

```php
purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineGet($purchase_order, $purchase_order_item, $schedule_line, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineType
```

Get entity from PurchaseOrderScheduleLine by key

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ScheduleLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchasing Document
$schedule_line = 'schedule_line_example'; // string | Delivery Schedule Line Counter
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineGet($purchase_order, $purchase_order_item, $schedule_line, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleLinesApi->purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchasing Document | |
| **schedule_line** | **string**| Delivery Schedule Line Counter | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePatch()`

```php
purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePatch($purchase_order, $purchase_order_item, $schedule_line, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_schedule_line_type_update)
```

Update entity in PurchaseOrderScheduleLine

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ScheduleLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchasing Document
$schedule_line = 'schedule_line_example'; // string | Delivery Schedule Line Counter
$com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_schedule_line_type_update = new \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeUpdate(); // \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeUpdate | New property values

try {
    $apiInstance->purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePatch($purchase_order, $purchase_order_item, $schedule_line, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_schedule_line_type_update);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleLinesApi->purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchasing Document | |
| **schedule_line** | **string**| Delivery Schedule Line Counter | |
| **com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_schedule_line_type_update** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeUpdate.md)| New property values | |

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

## `purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderGet()`

```php
purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderGet($purchase_order, $purchase_order_item, $schedule_line, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ScheduleLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchasing Document
$schedule_line = 'schedule_line_example'; // string | Delivery Schedule Line Counter
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderGet($purchase_order, $purchase_order_item, $schedule_line, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleLinesApi->purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchasing Document | |
| **schedule_line** | **string**| Delivery Schedule Line Counter | |
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

## `purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderItemGet()`

```php
purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderItemGet($purchase_order, $purchase_order_item, $schedule_line, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ScheduleLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchasing Document
$schedule_line = 'schedule_line_example'; // string | Delivery Schedule Line Counter
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderItemGet($purchase_order, $purchase_order_item, $schedule_line, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleLinesApi->purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchasing Document | |
| **schedule_line** | **string**| Delivery Schedule Line Counter | |
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

## `purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentGet()`

```php
purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentGet($purchase_order, $purchase_order_item, $schedule_line, $top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPOSubcontractingComponentType
```

Get entities from related _SubcontractingComponent

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ScheduleLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchasing Document
$schedule_line = 'schedule_line_example'; // string | Delivery Schedule Line Counter
$top = 50; // int | Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter)
$count = True; // bool | Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentGet($purchase_order, $purchase_order_item, $schedule_line, $top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleLinesApi->purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchasing Document | |
| **schedule_line** | **string**| Delivery Schedule Line Counter | |
| **top** | **int**| Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter) | [optional] |
| **count** | **bool**| Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPOSubcontractingComponentType**](../Model/CollectionOfPOSubcontractingComponentType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentPost()`

```php
purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentPost($purchase_order, $purchase_order_item, $schedule_line, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_subcontracting_component_type_create): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentType
```

Add new entity to related _SubcontractingComponent

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ScheduleLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchasing Document
$schedule_line = 'schedule_line_example'; // string | Delivery Schedule Line Counter
$com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_subcontracting_component_type_create = new \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentTypeCreate(); // \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentTypeCreate | New entity

try {
    $result = $apiInstance->purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentPost($purchase_order, $purchase_order_item, $schedule_line, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_subcontracting_component_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleLinesApi->purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchasing Document | |
| **schedule_line** | **string**| Delivery Schedule Line Counter | |
| **com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_subcontracting_component_type_create** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentTypeCreate**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
