# BeLenka\SAP\PurchaseOrder\SubcontractingComponentsApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_purchaseorder_2/srvd_a2x/sap/purchaseorder/0001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pOSubcontractingComponentGet()**](SubcontractingComponentsApi.md#pOSubcontractingComponentGet) | **GET** /POSubcontractingComponent | Get entities from POSubcontractingComponent |
| [**pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeGet()**](SubcontractingComponentsApi.md#pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeGet) | **GET** /POSubcontractingComponent/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/{ReservationItem}/{RecordType} | Get entity from POSubcontractingComponent by key |
| [**pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePatch()**](SubcontractingComponentsApi.md#pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePatch) | **PATCH** /POSubcontractingComponent/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/{ReservationItem}/{RecordType} | Update entity in POSubcontractingComponent |
| [**pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderGet()**](SubcontractingComponentsApi.md#pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderGet) | **GET** /POSubcontractingComponent/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/{ReservationItem}/{RecordType}/_PurchaseOrder | Get related _PurchaseOrder |
| [**pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderItemGet()**](SubcontractingComponentsApi.md#pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderItemGet) | **GET** /POSubcontractingComponent/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/{ReservationItem}/{RecordType}/_PurchaseOrderItem | Get related _PurchaseOrderItem |
| [**pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeScheduleLineGet()**](SubcontractingComponentsApi.md#pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeScheduleLineGet) | **GET** /POSubcontractingComponent/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/{ReservationItem}/{RecordType}/_ScheduleLine | Get related _ScheduleLine |
| [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentGet()**](SubcontractingComponentsApi.md#purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentGet) | **GET** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/_SubcontractingComponent | Get entities from related _SubcontractingComponent |
| [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentPost()**](SubcontractingComponentsApi.md#purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentPost) | **POST** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/_SubcontractingComponent | Add new entity to related _SubcontractingComponent |


## `pOSubcontractingComponentGet()`

```php
pOSubcontractingComponentGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPOSubcontractingComponentType
```

Get entities from POSubcontractingComponent

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\SubcontractingComponentsApi(
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
    $result = $apiInstance->pOSubcontractingComponentGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubcontractingComponentsApi->pOSubcontractingComponentGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPOSubcontractingComponentType**](../Model/CollectionOfPOSubcontractingComponentType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeGet()`

```php
pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeGet($purchase_order, $purchase_order_item, $schedule_line, $reservation_item, $record_type, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentType
```

Get entity from POSubcontractingComponent by key

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\SubcontractingComponentsApi(
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
    $result = $apiInstance->pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeGet($purchase_order, $purchase_order_item, $schedule_line, $reservation_item, $record_type, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubcontractingComponentsApi->pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePatch()`

```php
pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePatch($purchase_order, $purchase_order_item, $schedule_line, $reservation_item, $record_type, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_subcontracting_component_type_update)
```

Update entity in POSubcontractingComponent

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\SubcontractingComponentsApi(
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
$com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_subcontracting_component_type_update = new \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentTypeUpdate(); // \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentTypeUpdate | New property values

try {
    $apiInstance->pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePatch($purchase_order, $purchase_order_item, $schedule_line, $reservation_item, $record_type, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_subcontracting_component_type_update);
} catch (Exception $e) {
    echo 'Exception when calling SubcontractingComponentsApi->pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePatch: ', $e->getMessage(), PHP_EOL;
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
| **com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_po_subcontracting_component_type_update** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentTypeUpdate.md)| New property values | |

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

## `pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderGet()`

```php
pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderGet($purchase_order, $purchase_order_item, $schedule_line, $reservation_item, $record_type, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\SubcontractingComponentsApi(
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
    $result = $apiInstance->pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderGet($purchase_order, $purchase_order_item, $schedule_line, $reservation_item, $record_type, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubcontractingComponentsApi->pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderItemGet()`

```php
pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderItemGet($purchase_order, $purchase_order_item, $schedule_line, $reservation_item, $record_type, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\SubcontractingComponentsApi(
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
    $result = $apiInstance->pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderItemGet($purchase_order, $purchase_order_item, $schedule_line, $reservation_item, $record_type, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubcontractingComponentsApi->pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\SubcontractingComponentsApi(
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
    echo 'Exception when calling SubcontractingComponentsApi->pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeScheduleLineGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\SubcontractingComponentsApi(
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
    echo 'Exception when calling SubcontractingComponentsApi->purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\SubcontractingComponentsApi(
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
    echo 'Exception when calling SubcontractingComponentsApi->purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentPost: ', $e->getMessage(), PHP_EOL;
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
