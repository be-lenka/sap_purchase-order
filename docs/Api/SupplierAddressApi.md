# BeLenka\SAP\PurchaseOrder\SupplierAddressApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_purchaseorder_2/srvd_a2x/sap/purchaseorder/0001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purchaseOrderPurchaseOrderSupplierAddressGet()**](SupplierAddressApi.md#purchaseOrderPurchaseOrderSupplierAddressGet) | **GET** /PurchaseOrder/{PurchaseOrder}/_SupplierAddress | Get related _SupplierAddress |
| [**purchaseOrderSupplierAddressGet()**](SupplierAddressApi.md#purchaseOrderSupplierAddressGet) | **GET** /PurchaseOrderSupplierAddress | Get entities from PurchaseOrderSupplierAddress |
| [**purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderGet()**](SupplierAddressApi.md#purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderGet) | **GET** /PurchaseOrderSupplierAddress/{SupplierAddressID}/{PurchaseOrder} | Get entity from PurchaseOrderSupplierAddress by key |
| [**purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderPatch()**](SupplierAddressApi.md#purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderPatch) | **PATCH** /PurchaseOrderSupplierAddress/{SupplierAddressID}/{PurchaseOrder} | Update entity in PurchaseOrderSupplierAddress |
| [**purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderPurchaseOrderTPGet()**](SupplierAddressApi.md#purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderPurchaseOrderTPGet) | **GET** /PurchaseOrderSupplierAddress/{SupplierAddressID}/{PurchaseOrder}/_PurchaseOrderTP | Get related _PurchaseOrderTP |


## `purchaseOrderPurchaseOrderSupplierAddressGet()`

```php
purchaseOrderPurchaseOrderSupplierAddressGet($purchase_order, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressType
```

Get related _SupplierAddress

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\SupplierAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderPurchaseOrderSupplierAddressGet($purchase_order, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierAddressApi->purchaseOrderPurchaseOrderSupplierAddressGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderSupplierAddressGet()`

```php
purchaseOrderSupplierAddressGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderSupplierAddressType
```

Get entities from PurchaseOrderSupplierAddress

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\SupplierAddressApi(
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
    $result = $apiInstance->purchaseOrderSupplierAddressGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierAddressApi->purchaseOrderSupplierAddressGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderSupplierAddressType**](../Model/CollectionOfPurchaseOrderSupplierAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderGet()`

```php
purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderGet($supplier_address_id, $purchase_order, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressType
```

Get entity from PurchaseOrderSupplierAddress by key

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\SupplierAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier_address_id = 'supplier_address_id_example'; // string | Address Number
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderGet($supplier_address_id, $purchase_order, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierAddressApi->purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier_address_id** | **string**| Address Number | |
| **purchase_order** | **string**| Purchase Order Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderPatch()`

```php
purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderPatch($supplier_address_id, $purchase_order, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_supplier_address_type_update)
```

Update entity in PurchaseOrderSupplierAddress

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\SupplierAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier_address_id = 'supplier_address_id_example'; // string | Address Number
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_supplier_address_type_update = new \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressTypeUpdate(); // \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressTypeUpdate | New property values

try {
    $apiInstance->purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderPatch($supplier_address_id, $purchase_order, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_supplier_address_type_update);
} catch (Exception $e) {
    echo 'Exception when calling SupplierAddressApi->purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier_address_id** | **string**| Address Number | |
| **purchase_order** | **string**| Purchase Order Number | |
| **com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_supplier_address_type_update** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressTypeUpdate.md)| New property values | |

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

## `purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderPurchaseOrderTPGet()`

```php
purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderPurchaseOrderTPGet($supplier_address_id, $purchase_order, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType
```

Get related _PurchaseOrderTP

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\SupplierAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier_address_id = 'supplier_address_id_example'; // string | Address Number
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderPurchaseOrderTPGet($supplier_address_id, $purchase_order, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierAddressApi->purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderPurchaseOrderTPGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier_address_id** | **string**| Address Number | |
| **purchase_order** | **string**| Purchase Order Number | |
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
