# BeLenka\SAP\PurchaseOrder\AccountAssignmentApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_purchaseorder_2/srvd_a2x/sap/purchaseorder/0001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purchaseOrderAccountAssignmentGet()**](AccountAssignmentApi.md#purchaseOrderAccountAssignmentGet) | **GET** /PurchaseOrderAccountAssignment | Get entities from PurchaseOrderAccountAssignment |
| [**purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberGet()**](AccountAssignmentApi.md#purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberGet) | **GET** /PurchaseOrderAccountAssignment/{PurchaseOrder}/{PurchaseOrderItem}/{AccountAssignmentNumber} | Get entity from PurchaseOrderAccountAssignment by key |
| [**purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPatch()**](AccountAssignmentApi.md#purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPatch) | **PATCH** /PurchaseOrderAccountAssignment/{PurchaseOrder}/{PurchaseOrderItem}/{AccountAssignmentNumber} | Update entity in PurchaseOrderAccountAssignment |
| [**purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderGet()**](AccountAssignmentApi.md#purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderGet) | **GET** /PurchaseOrderAccountAssignment/{PurchaseOrder}/{PurchaseOrderItem}/{AccountAssignmentNumber}/_PurchaseOrder | Get related _PurchaseOrder |
| [**purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderItemGet()**](AccountAssignmentApi.md#purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderItemGet) | **GET** /PurchaseOrderAccountAssignment/{PurchaseOrder}/{PurchaseOrderItem}/{AccountAssignmentNumber}/_PurchaseOrderItem | Get related _PurchaseOrderItem |
| [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentGet()**](AccountAssignmentApi.md#purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentGet) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurOrdAccountAssignment | Get entities from related _PurOrdAccountAssignment |
| [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentPost()**](AccountAssignmentApi.md#purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentPost) | **POST** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurOrdAccountAssignment | Add new entity to related _PurOrdAccountAssignment |


## `purchaseOrderAccountAssignmentGet()`

```php
purchaseOrderAccountAssignmentGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderAccountAssignmentType
```

Get entities from PurchaseOrderAccountAssignment

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\AccountAssignmentApi(
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
    $result = $apiInstance->purchaseOrderAccountAssignmentGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAssignmentApi->purchaseOrderAccountAssignmentGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderAccountAssignmentType**](../Model/CollectionOfPurchaseOrderAccountAssignmentType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberGet()`

```php
purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberGet($purchase_order, $purchase_order_item, $account_assignment_number, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentType
```

Get entity from PurchaseOrderAccountAssignment by key

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\AccountAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchasing Document
$account_assignment_number = 'account_assignment_number_example'; // string | Sequential Number of Account Assignment
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberGet($purchase_order, $purchase_order_item, $account_assignment_number, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAssignmentApi->purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchasing Document | |
| **account_assignment_number** | **string**| Sequential Number of Account Assignment | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPatch()`

```php
purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPatch($purchase_order, $purchase_order_item, $account_assignment_number, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_account_assignment_type_update)
```

Update entity in PurchaseOrderAccountAssignment

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\AccountAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchasing Document
$account_assignment_number = 'account_assignment_number_example'; // string | Sequential Number of Account Assignment
$com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_account_assignment_type_update = new \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentTypeUpdate(); // \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentTypeUpdate | New property values

try {
    $apiInstance->purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPatch($purchase_order, $purchase_order_item, $account_assignment_number, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_account_assignment_type_update);
} catch (Exception $e) {
    echo 'Exception when calling AccountAssignmentApi->purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchasing Document | |
| **account_assignment_number** | **string**| Sequential Number of Account Assignment | |
| **com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_account_assignment_type_update** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentTypeUpdate.md)| New property values | |

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

## `purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderGet()`

```php
purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderGet($purchase_order, $purchase_order_item, $account_assignment_number, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\AccountAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchasing Document
$account_assignment_number = 'account_assignment_number_example'; // string | Sequential Number of Account Assignment
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderGet($purchase_order, $purchase_order_item, $account_assignment_number, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAssignmentApi->purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchasing Document | |
| **account_assignment_number** | **string**| Sequential Number of Account Assignment | |
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

## `purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderItemGet()`

```php
purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderItemGet($purchase_order, $purchase_order_item, $account_assignment_number, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\AccountAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchasing Document
$account_assignment_number = 'account_assignment_number_example'; // string | Sequential Number of Account Assignment
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderItemGet($purchase_order, $purchase_order_item, $account_assignment_number, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAssignmentApi->purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchasing Document | |
| **account_assignment_number** | **string**| Sequential Number of Account Assignment | |
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

## `purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentGet()`

```php
purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentGet($purchase_order, $purchase_order_item, $top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderAccountAssignmentType
```

Get entities from related _PurOrdAccountAssignment

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\AccountAssignmentApi(
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
    $result = $apiInstance->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentGet($purchase_order, $purchase_order_item, $top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAssignmentApi->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderAccountAssignmentType**](../Model/CollectionOfPurchaseOrderAccountAssignmentType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentPost()`

```php
purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentPost($purchase_order, $purchase_order_item, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_account_assignment_type_create): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentType
```

Add new entity to related _PurOrdAccountAssignment

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\AccountAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_account_assignment_type_create = new \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentTypeCreate(); // \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentTypeCreate | New entity

try {
    $result = $apiInstance->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentPost($purchase_order, $purchase_order_item, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_account_assignment_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAssignmentApi->purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_account_assignment_type_create** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentTypeCreate**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
