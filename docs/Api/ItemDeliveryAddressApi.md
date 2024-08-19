# BeLenka\SAP\PurchaseOrder\ItemDeliveryAddressApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_purchaseorder_2/srvd_a2x/sap/purchaseorder/0001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purOrderItemDeliveryAddressGet()**](ItemDeliveryAddressApi.md#purOrderItemDeliveryAddressGet) | **GET** /PurOrderItemDeliveryAddress | Get entities from PurOrderItemDeliveryAddress |
| [**purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDGet()**](ItemDeliveryAddressApi.md#purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDGet) | **GET** /PurOrderItemDeliveryAddress/{PurchaseOrder}/{PurchaseOrderItem}/{DeliveryAddressID} | Get entity from PurOrderItemDeliveryAddress by key |
| [**purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPatch()**](ItemDeliveryAddressApi.md#purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPatch) | **PATCH** /PurOrderItemDeliveryAddress/{PurchaseOrder}/{PurchaseOrderItem}/{DeliveryAddressID} | Update entity in PurOrderItemDeliveryAddress |
| [**purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderGet()**](ItemDeliveryAddressApi.md#purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderGet) | **GET** /PurOrderItemDeliveryAddress/{PurchaseOrder}/{PurchaseOrderItem}/{DeliveryAddressID}/_PurchaseOrder | Get related _PurchaseOrder |
| [**purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderItemGet()**](ItemDeliveryAddressApi.md#purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderItemGet) | **GET** /PurOrderItemDeliveryAddress/{PurchaseOrder}/{PurchaseOrderItem}/{DeliveryAddressID}/_PurchaseOrderItem | Get related _PurchaseOrderItem |
| [**purchaseOrderItemPurchaseOrderPurchaseOrderItemDeliveryAddressGet()**](ItemDeliveryAddressApi.md#purchaseOrderItemPurchaseOrderPurchaseOrderItemDeliveryAddressGet) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_DeliveryAddress | Get related _DeliveryAddress |


## `purOrderItemDeliveryAddressGet()`

```php
purOrderItemDeliveryAddressGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurOrderItemDeliveryAddressType
```

Get entities from PurOrderItemDeliveryAddress

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ItemDeliveryAddressApi(
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
    $result = $apiInstance->purOrderItemDeliveryAddressGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemDeliveryAddressApi->purOrderItemDeliveryAddressGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurOrderItemDeliveryAddressType**](../Model/CollectionOfPurOrderItemDeliveryAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDGet()`

```php
purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDGet($purchase_order, $purchase_order_item, $delivery_address_id, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressType
```

Get entity from PurOrderItemDeliveryAddress by key

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ItemDeliveryAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$delivery_address_id = 'delivery_address_id_example'; // string | Manual address number in purchasing document item
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDGet($purchase_order, $purchase_order_item, $delivery_address_id, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemDeliveryAddressApi->purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **delivery_address_id** | **string**| Manual address number in purchasing document item | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPatch()`

```php
purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPatch($purchase_order, $purchase_order_item, $delivery_address_id, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_pur_order_item_delivery_address_type_update)
```

Update entity in PurOrderItemDeliveryAddress

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ItemDeliveryAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$delivery_address_id = 'delivery_address_id_example'; // string | Manual address number in purchasing document item
$com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_pur_order_item_delivery_address_type_update = new \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressTypeUpdate(); // \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressTypeUpdate | New property values

try {
    $apiInstance->purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPatch($purchase_order, $purchase_order_item, $delivery_address_id, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_pur_order_item_delivery_address_type_update);
} catch (Exception $e) {
    echo 'Exception when calling ItemDeliveryAddressApi->purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **delivery_address_id** | **string**| Manual address number in purchasing document item | |
| **com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_pur_order_item_delivery_address_type_update** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressTypeUpdate.md)| New property values | |

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

## `purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderGet()`

```php
purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderGet($purchase_order, $purchase_order_item, $delivery_address_id, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ItemDeliveryAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$delivery_address_id = 'delivery_address_id_example'; // string | Manual address number in purchasing document item
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderGet($purchase_order, $purchase_order_item, $delivery_address_id, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemDeliveryAddressApi->purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **delivery_address_id** | **string**| Manual address number in purchasing document item | |
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

## `purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderItemGet()`

```php
purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderItemGet($purchase_order, $purchase_order_item, $delivery_address_id, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ItemDeliveryAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchasing Document Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$delivery_address_id = 'delivery_address_id_example'; // string | Manual address number in purchasing document item
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderItemGet($purchase_order, $purchase_order_item, $delivery_address_id, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemDeliveryAddressApi->purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchasing Document Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **delivery_address_id** | **string**| Manual address number in purchasing document item | |
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

## `purchaseOrderItemPurchaseOrderPurchaseOrderItemDeliveryAddressGet()`

```php
purchaseOrderItemPurchaseOrderPurchaseOrderItemDeliveryAddressGet($purchase_order, $purchase_order_item, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressType
```

Get related _DeliveryAddress

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\ItemDeliveryAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$purchase_order_item = 'purchase_order_item_example'; // string | Item Number of Purchase Order
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderItemPurchaseOrderPurchaseOrderItemDeliveryAddressGet($purchase_order, $purchase_order_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemDeliveryAddressApi->purchaseOrderItemPurchaseOrderPurchaseOrderItemDeliveryAddressGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **purchase_order_item** | **string**| Item Number of Purchase Order | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
