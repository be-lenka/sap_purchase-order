# BeLenka\SAP\PurchaseOrder\HeaderNotesApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_purchaseorder_2/srvd_a2x/sap/purchaseorder/0001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purchaseOrderNoteGet()**](HeaderNotesApi.md#purchaseOrderNoteGet) | **GET** /PurchaseOrderNote | Get entities from PurchaseOrderNote |
| [**purchaseOrderNotePurchaseOrderTextObjectTypeLanguageGet()**](HeaderNotesApi.md#purchaseOrderNotePurchaseOrderTextObjectTypeLanguageGet) | **GET** /PurchaseOrderNote/{PurchaseOrder}/{TextObjectType}/{Language} | Get entity from PurchaseOrderNote by key |
| [**purchaseOrderNotePurchaseOrderTextObjectTypeLanguagePurchaseOrderGet()**](HeaderNotesApi.md#purchaseOrderNotePurchaseOrderTextObjectTypeLanguagePurchaseOrderGet) | **GET** /PurchaseOrderNote/{PurchaseOrder}/{TextObjectType}/{Language}/_PurchaseOrder | Get related _PurchaseOrder |
| [**purchaseOrderPurchaseOrderPurchaseOrderNoteGet()**](HeaderNotesApi.md#purchaseOrderPurchaseOrderPurchaseOrderNoteGet) | **GET** /PurchaseOrder/{PurchaseOrder}/_PurchaseOrderNote | Get entities from related _PurchaseOrderNote |
| [**purchaseOrderPurchaseOrderPurchaseOrderNotePost()**](HeaderNotesApi.md#purchaseOrderPurchaseOrderPurchaseOrderNotePost) | **POST** /PurchaseOrder/{PurchaseOrder}/_PurchaseOrderNote | Add new entity to related _PurchaseOrderNote |


## `purchaseOrderNoteGet()`

```php
purchaseOrderNoteGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderNoteType
```

Get entities from PurchaseOrderNote

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\HeaderNotesApi(
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
    $result = $apiInstance->purchaseOrderNoteGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderNotesApi->purchaseOrderNoteGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderNoteType**](../Model/CollectionOfPurchaseOrderNoteType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderNotePurchaseOrderTextObjectTypeLanguageGet()`

```php
purchaseOrderNotePurchaseOrderTextObjectTypeLanguageGet($purchase_order, $text_object_type, $language, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteType
```

Get entity from PurchaseOrderNote by key

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\HeaderNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$text_object_type = 'text_object_type_example'; // string | Text ID
$language = 'language_example'; // string | Language Key
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderNotePurchaseOrderTextObjectTypeLanguageGet($purchase_order, $text_object_type, $language, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderNotesApi->purchaseOrderNotePurchaseOrderTextObjectTypeLanguageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **text_object_type** | **string**| Text ID | |
| **language** | **string**| Language Key | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderNotePurchaseOrderTextObjectTypeLanguagePurchaseOrderGet()`

```php
purchaseOrderNotePurchaseOrderTextObjectTypeLanguagePurchaseOrderGet($purchase_order, $text_object_type, $language, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType
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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\HeaderNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$text_object_type = 'text_object_type_example'; // string | Text ID
$language = 'language_example'; // string | Language Key
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderNotePurchaseOrderTextObjectTypeLanguagePurchaseOrderGet($purchase_order, $text_object_type, $language, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderNotesApi->purchaseOrderNotePurchaseOrderTextObjectTypeLanguagePurchaseOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **text_object_type** | **string**| Text ID | |
| **language** | **string**| Language Key | |
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

## `purchaseOrderPurchaseOrderPurchaseOrderNoteGet()`

```php
purchaseOrderPurchaseOrderPurchaseOrderNoteGet($purchase_order, $top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderNoteType
```

Get entities from related _PurchaseOrderNote

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\HeaderNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$top = 50; // int | Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter)
$count = True; // bool | Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->purchaseOrderPurchaseOrderPurchaseOrderNoteGet($purchase_order, $top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderNotesApi->purchaseOrderPurchaseOrderPurchaseOrderNoteGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **top** | **int**| Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter) | [optional] |
| **count** | **bool**| Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\CollectionOfPurchaseOrderNoteType**](../Model/CollectionOfPurchaseOrderNoteType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderPurchaseOrderPurchaseOrderNotePost()`

```php
purchaseOrderPurchaseOrderPurchaseOrderNotePost($purchase_order, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_note_type_create): \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteType
```

Add new entity to related _PurchaseOrderNote

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


$apiInstance = new BeLenka\SAP\PurchaseOrder\Api\HeaderNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = 'purchase_order_example'; // string | Purchase Order Number
$com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_note_type_create = new \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteTypeCreate(); // \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteTypeCreate | New entity

try {
    $result = $apiInstance->purchaseOrderPurchaseOrderPurchaseOrderNotePost($purchase_order, $com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_note_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderNotesApi->purchaseOrderPurchaseOrderPurchaseOrderNotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | **string**| Purchase Order Number | |
| **com_sap_gateway_srvd_a2x_api_purchaseorder2_v0001_purchase_order_note_type_create** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteTypeCreate**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteType**](../Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
