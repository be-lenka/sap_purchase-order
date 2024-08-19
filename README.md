# OpenAPIClient-php

This service enables you to create purchase orders through an API call from a source system outside SAP S/4HANA Cloud. Furthermore, the service enables you to read, update or delete existing purchase orders from the SAP S/4HANA Cloud system. The service is based on the OData protocol.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://:/sap/opu/odata4/sap/api_purchaseorder_2/srvd_a2x/sap/purchaseorder/0001*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountAssignmentApi* | [**purchaseOrderAccountAssignmentGet**](docs/Api/AccountAssignmentApi.md#purchaseorderaccountassignmentget) | **GET** /PurchaseOrderAccountAssignment | Get entities from PurchaseOrderAccountAssignment
*AccountAssignmentApi* | [**purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberGet**](docs/Api/AccountAssignmentApi.md#purchaseorderaccountassignmentpurchaseorderpurchaseorderitemaccountassignmentnumberget) | **GET** /PurchaseOrderAccountAssignment/{PurchaseOrder}/{PurchaseOrderItem}/{AccountAssignmentNumber} | Get entity from PurchaseOrderAccountAssignment by key
*AccountAssignmentApi* | [**purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPatch**](docs/Api/AccountAssignmentApi.md#purchaseorderaccountassignmentpurchaseorderpurchaseorderitemaccountassignmentnumberpatch) | **PATCH** /PurchaseOrderAccountAssignment/{PurchaseOrder}/{PurchaseOrderItem}/{AccountAssignmentNumber} | Update entity in PurchaseOrderAccountAssignment
*AccountAssignmentApi* | [**purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderGet**](docs/Api/AccountAssignmentApi.md#purchaseorderaccountassignmentpurchaseorderpurchaseorderitemaccountassignmentnumberpurchaseorderget) | **GET** /PurchaseOrderAccountAssignment/{PurchaseOrder}/{PurchaseOrderItem}/{AccountAssignmentNumber}/_PurchaseOrder | Get related _PurchaseOrder
*AccountAssignmentApi* | [**purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderItemGet**](docs/Api/AccountAssignmentApi.md#purchaseorderaccountassignmentpurchaseorderpurchaseorderitemaccountassignmentnumberpurchaseorderitemget) | **GET** /PurchaseOrderAccountAssignment/{PurchaseOrder}/{PurchaseOrderItem}/{AccountAssignmentNumber}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*AccountAssignmentApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentGet**](docs/Api/AccountAssignmentApi.md#purchaseorderitempurchaseorderpurchaseorderitempurordaccountassignmentget) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurOrdAccountAssignment | Get entities from related _PurOrdAccountAssignment
*AccountAssignmentApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentPost**](docs/Api/AccountAssignmentApi.md#purchaseorderitempurchaseorderpurchaseorderitempurordaccountassignmentpost) | **POST** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurOrdAccountAssignment | Add new entity to related _PurOrdAccountAssignment
*BatchRequestsApi* | [**batchPost**](docs/Api/BatchRequestsApi.md#batchpost) | **POST** /$batch | Send a group of requests
*HeaderNotesApi* | [**purchaseOrderNoteGet**](docs/Api/HeaderNotesApi.md#purchaseordernoteget) | **GET** /PurchaseOrderNote | Get entities from PurchaseOrderNote
*HeaderNotesApi* | [**purchaseOrderNotePurchaseOrderTextObjectTypeLanguageGet**](docs/Api/HeaderNotesApi.md#purchaseordernotepurchaseordertextobjecttypelanguageget) | **GET** /PurchaseOrderNote/{PurchaseOrder}/{TextObjectType}/{Language} | Get entity from PurchaseOrderNote by key
*HeaderNotesApi* | [**purchaseOrderNotePurchaseOrderTextObjectTypeLanguagePurchaseOrderGet**](docs/Api/HeaderNotesApi.md#purchaseordernotepurchaseordertextobjecttypelanguagepurchaseorderget) | **GET** /PurchaseOrderNote/{PurchaseOrder}/{TextObjectType}/{Language}/_PurchaseOrder | Get related _PurchaseOrder
*HeaderNotesApi* | [**purchaseOrderPurchaseOrderPurchaseOrderNoteGet**](docs/Api/HeaderNotesApi.md#purchaseorderpurchaseorderpurchaseordernoteget) | **GET** /PurchaseOrder/{PurchaseOrder}/_PurchaseOrderNote | Get entities from related _PurchaseOrderNote
*HeaderNotesApi* | [**purchaseOrderPurchaseOrderPurchaseOrderNotePost**](docs/Api/HeaderNotesApi.md#purchaseorderpurchaseorderpurchaseordernotepost) | **POST** /PurchaseOrder/{PurchaseOrder}/_PurchaseOrderNote | Add new entity to related _PurchaseOrderNote
*InvoicingPlanApi* | [**purchaseOrderInvoicingPlanGet**](docs/Api/InvoicingPlanApi.md#purchaseorderinvoicingplanget) | **GET** /PurchaseOrderInvoicingPlan | Get entities from PurchaseOrderInvoicingPlan
*InvoicingPlanApi* | [**purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderInvoicingPlanGet**](docs/Api/InvoicingPlanApi.md#purchaseorderinvoicingplanitempurchaseorderpurchaseorderiteminvoicingplaniteminvoicingplanpurchaseorderinvoicingplanget) | **GET** /PurchaseOrderInvoicingPlanItem/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlanItem}/{InvoicingPlan}/_PurchaseOrderInvoicingPlan | Get related _PurchaseOrderInvoicingPlan
*InvoicingPlanApi* | [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanGet**](docs/Api/InvoicingPlanApi.md#purchaseorderinvoicingplanpurchaseorderpurchaseorderiteminvoicingplanget) | **GET** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan} | Get entity from PurchaseOrderInvoicingPlan by key
*InvoicingPlanApi* | [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemGet**](docs/Api/InvoicingPlanApi.md#purchaseorderinvoicingplanpurchaseorderpurchaseorderiteminvoicingplanpoinvoicingplanitemget) | **GET** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan}/_POInvoicingPlanItem | Get entities from related _POInvoicingPlanItem
*InvoicingPlanApi* | [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemPost**](docs/Api/InvoicingPlanApi.md#purchaseorderinvoicingplanpurchaseorderpurchaseorderiteminvoicingplanpoinvoicingplanitempost) | **POST** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan}/_POInvoicingPlanItem | Add new entity to related _POInvoicingPlanItem
*InvoicingPlanApi* | [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPatch**](docs/Api/InvoicingPlanApi.md#purchaseorderinvoicingplanpurchaseorderpurchaseorderiteminvoicingplanpatch) | **PATCH** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan} | Update entity in PurchaseOrderInvoicingPlan
*InvoicingPlanApi* | [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderGet**](docs/Api/InvoicingPlanApi.md#purchaseorderinvoicingplanpurchaseorderpurchaseorderiteminvoicingplanpurchaseorderget) | **GET** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan}/_PurchaseOrder | Get related _PurchaseOrder
*InvoicingPlanApi* | [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderItemGet**](docs/Api/InvoicingPlanApi.md#purchaseorderinvoicingplanpurchaseorderpurchaseorderiteminvoicingplanpurchaseorderitemget) | **GET** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*InvoicingPlanApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanGet**](docs/Api/InvoicingPlanApi.md#purchaseorderitempurchaseorderpurchaseorderitempurchaseorderinvoicingplanget) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderInvoicingPlan | Get entities from related _PurchaseOrderInvoicingPlan
*InvoicingPlanApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanPost**](docs/Api/InvoicingPlanApi.md#purchaseorderitempurchaseorderpurchaseorderitempurchaseorderinvoicingplanpost) | **POST** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderInvoicingPlan | Add new entity to related _PurchaseOrderInvoicingPlan
*InvoicingPlanItemApi* | [**purchaseOrderInvoicingPlanItemGet**](docs/Api/InvoicingPlanItemApi.md#purchaseorderinvoicingplanitemget) | **GET** /PurchaseOrderInvoicingPlanItem | Get entities from PurchaseOrderInvoicingPlanItem
*InvoicingPlanItemApi* | [**purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanGet**](docs/Api/InvoicingPlanItemApi.md#purchaseorderinvoicingplanitempurchaseorderpurchaseorderiteminvoicingplaniteminvoicingplanget) | **GET** /PurchaseOrderInvoicingPlanItem/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlanItem}/{InvoicingPlan} | Get entity from PurchaseOrderInvoicingPlanItem by key
*InvoicingPlanItemApi* | [**purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPatch**](docs/Api/InvoicingPlanItemApi.md#purchaseorderinvoicingplanitempurchaseorderpurchaseorderiteminvoicingplaniteminvoicingplanpatch) | **PATCH** /PurchaseOrderInvoicingPlanItem/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlanItem}/{InvoicingPlan} | Update entity in PurchaseOrderInvoicingPlanItem
*InvoicingPlanItemApi* | [**purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderGet**](docs/Api/InvoicingPlanItemApi.md#purchaseorderinvoicingplanitempurchaseorderpurchaseorderiteminvoicingplaniteminvoicingplanpurchaseorderget) | **GET** /PurchaseOrderInvoicingPlanItem/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlanItem}/{InvoicingPlan}/_PurchaseOrder | Get related _PurchaseOrder
*InvoicingPlanItemApi* | [**purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderInvoicingPlanGet**](docs/Api/InvoicingPlanItemApi.md#purchaseorderinvoicingplanitempurchaseorderpurchaseorderiteminvoicingplaniteminvoicingplanpurchaseorderinvoicingplanget) | **GET** /PurchaseOrderInvoicingPlanItem/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlanItem}/{InvoicingPlan}/_PurchaseOrderInvoicingPlan | Get related _PurchaseOrderInvoicingPlan
*InvoicingPlanItemApi* | [**purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderItemGet**](docs/Api/InvoicingPlanItemApi.md#purchaseorderinvoicingplanitempurchaseorderpurchaseorderiteminvoicingplaniteminvoicingplanpurchaseorderitemget) | **GET** /PurchaseOrderInvoicingPlanItem/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlanItem}/{InvoicingPlan}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*InvoicingPlanItemApi* | [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemGet**](docs/Api/InvoicingPlanItemApi.md#purchaseorderinvoicingplanpurchaseorderpurchaseorderiteminvoicingplanpoinvoicingplanitemget) | **GET** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan}/_POInvoicingPlanItem | Get entities from related _POInvoicingPlanItem
*InvoicingPlanItemApi* | [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPOInvoicingPlanItemPost**](docs/Api/InvoicingPlanItemApi.md#purchaseorderinvoicingplanpurchaseorderpurchaseorderiteminvoicingplanpoinvoicingplanitempost) | **POST** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan}/_POInvoicingPlanItem | Add new entity to related _POInvoicingPlanItem
*ItemDeliveryAddressApi* | [**purOrderItemDeliveryAddressGet**](docs/Api/ItemDeliveryAddressApi.md#purorderitemdeliveryaddressget) | **GET** /PurOrderItemDeliveryAddress | Get entities from PurOrderItemDeliveryAddress
*ItemDeliveryAddressApi* | [**purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDGet**](docs/Api/ItemDeliveryAddressApi.md#purorderitemdeliveryaddresspurchaseorderpurchaseorderitemdeliveryaddressidget) | **GET** /PurOrderItemDeliveryAddress/{PurchaseOrder}/{PurchaseOrderItem}/{DeliveryAddressID} | Get entity from PurOrderItemDeliveryAddress by key
*ItemDeliveryAddressApi* | [**purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPatch**](docs/Api/ItemDeliveryAddressApi.md#purorderitemdeliveryaddresspurchaseorderpurchaseorderitemdeliveryaddressidpatch) | **PATCH** /PurOrderItemDeliveryAddress/{PurchaseOrder}/{PurchaseOrderItem}/{DeliveryAddressID} | Update entity in PurOrderItemDeliveryAddress
*ItemDeliveryAddressApi* | [**purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderGet**](docs/Api/ItemDeliveryAddressApi.md#purorderitemdeliveryaddresspurchaseorderpurchaseorderitemdeliveryaddressidpurchaseorderget) | **GET** /PurOrderItemDeliveryAddress/{PurchaseOrder}/{PurchaseOrderItem}/{DeliveryAddressID}/_PurchaseOrder | Get related _PurchaseOrder
*ItemDeliveryAddressApi* | [**purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderItemGet**](docs/Api/ItemDeliveryAddressApi.md#purorderitemdeliveryaddresspurchaseorderpurchaseorderitemdeliveryaddressidpurchaseorderitemget) | **GET** /PurOrderItemDeliveryAddress/{PurchaseOrder}/{PurchaseOrderItem}/{DeliveryAddressID}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*ItemDeliveryAddressApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemDeliveryAddressGet**](docs/Api/ItemDeliveryAddressApi.md#purchaseorderitempurchaseorderpurchaseorderitemdeliveryaddressget) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_DeliveryAddress | Get related _DeliveryAddress
*ItemNotesApi* | [**purchaseOrderItemNoteGet**](docs/Api/ItemNotesApi.md#purchaseorderitemnoteget) | **GET** /PurchaseOrderItemNote | Get entities from PurchaseOrderItemNote
*ItemNotesApi* | [**purchaseOrderItemNotePurchaseOrderPurchaseOrderItemTextObjectTypeLanguageGet**](docs/Api/ItemNotesApi.md#purchaseorderitemnotepurchaseorderpurchaseorderitemtextobjecttypelanguageget) | **GET** /PurchaseOrderItemNote/{PurchaseOrder}/{PurchaseOrderItem}/{TextObjectType}/{Language} | Get entity from PurchaseOrderItemNote by key
*ItemNotesApi* | [**purchaseOrderItemNotePurchaseOrderPurchaseOrderItemTextObjectTypeLanguagePurchaseOrderGet**](docs/Api/ItemNotesApi.md#purchaseorderitemnotepurchaseorderpurchaseorderitemtextobjecttypelanguagepurchaseorderget) | **GET** /PurchaseOrderItemNote/{PurchaseOrder}/{PurchaseOrderItem}/{TextObjectType}/{Language}/_PurchaseOrder | Get related _PurchaseOrder
*ItemNotesApi* | [**purchaseOrderItemNotePurchaseOrderPurchaseOrderItemTextObjectTypeLanguagePurchaseOrderItemGet**](docs/Api/ItemNotesApi.md#purchaseorderitemnotepurchaseorderpurchaseorderitemtextobjecttypelanguagepurchaseorderitemget) | **GET** /PurchaseOrderItemNote/{PurchaseOrder}/{PurchaseOrderItem}/{TextObjectType}/{Language}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*ItemNotesApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderItemNoteGet**](docs/Api/ItemNotesApi.md#purchaseorderitempurchaseorderpurchaseorderitempurchaseorderitemnoteget) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderItemNote | Get entities from related _PurchaseOrderItemNote
*ItemNotesApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderItemNotePost**](docs/Api/ItemNotesApi.md#purchaseorderitempurchaseorderpurchaseorderitempurchaseorderitemnotepost) | **POST** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderItemNote | Add new entity to related _PurchaseOrderItemNote
*PartnerApi* | [**purchaseOrderPartnerGet**](docs/Api/PartnerApi.md#purchaseorderpartnerget) | **GET** /PurchaseOrderPartner | Get entities from PurchaseOrderPartner
*PartnerApi* | [**purchaseOrderPartnerPurchaseOrderPartnerFunctionGet**](docs/Api/PartnerApi.md#purchaseorderpartnerpurchaseorderpartnerfunctionget) | **GET** /PurchaseOrderPartner/{PurchaseOrder}/{PartnerFunction} | Get entity from PurchaseOrderPartner by key
*PartnerApi* | [**purchaseOrderPartnerPurchaseOrderPartnerFunctionPurchaseOrderTPGet**](docs/Api/PartnerApi.md#purchaseorderpartnerpurchaseorderpartnerfunctionpurchaseordertpget) | **GET** /PurchaseOrderPartner/{PurchaseOrder}/{PartnerFunction}/_PurchaseOrderTP | Get related _PurchaseOrderTP
*PartnerApi* | [**purchaseOrderPurchaseOrderPurchaseOrderPartnerGet**](docs/Api/PartnerApi.md#purchaseorderpurchaseorderpurchaseorderpartnerget) | **GET** /PurchaseOrder/{PurchaseOrder}/_PurchaseOrderPartner | Get entities from related _PurchaseOrderPartner
*PricingElementApi* | [**purOrderItemPricingElementGet**](docs/Api/PricingElementApi.md#purorderitempricingelementget) | **GET** /PurOrderItemPricingElement | Get entities from PurOrderItemPricingElement
*PricingElementApi* | [**purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterGet**](docs/Api/PricingElementApi.md#purorderitempricingelementpurchaseorderpurchaseorderitempricingdocumentpricingdocumentitempricingproceduresteppricingprocedurecounterget) | **GET** /PurOrderItemPricingElement/{PurchaseOrder}/{PurchaseOrderItem}/{PricingDocument}/{PricingDocumentItem}/{PricingProcedureStep}/{PricingProcedureCounter} | Get entity from PurOrderItemPricingElement by key
*PricingElementApi* | [**purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPatch**](docs/Api/PricingElementApi.md#purorderitempricingelementpurchaseorderpurchaseorderitempricingdocumentpricingdocumentitempricingproceduresteppricingprocedurecounterpatch) | **PATCH** /PurOrderItemPricingElement/{PurchaseOrder}/{PurchaseOrderItem}/{PricingDocument}/{PricingDocumentItem}/{PricingProcedureStep}/{PricingProcedureCounter} | Update entity in PurOrderItemPricingElement
*PricingElementApi* | [**purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderGet**](docs/Api/PricingElementApi.md#purorderitempricingelementpurchaseorderpurchaseorderitempricingdocumentpricingdocumentitempricingproceduresteppricingprocedurecounterpurchaseorderget) | **GET** /PurOrderItemPricingElement/{PurchaseOrder}/{PurchaseOrderItem}/{PricingDocument}/{PricingDocumentItem}/{PricingProcedureStep}/{PricingProcedureCounter}/_PurchaseOrder | Get related _PurchaseOrder
*PricingElementApi* | [**purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderItemGet**](docs/Api/PricingElementApi.md#purorderitempricingelementpurchaseorderpurchaseorderitempricingdocumentpricingdocumentitempricingproceduresteppricingprocedurecounterpurchaseorderitemget) | **GET** /PurOrderItemPricingElement/{PurchaseOrder}/{PurchaseOrderItem}/{PricingDocument}/{PricingDocumentItem}/{PricingProcedureStep}/{PricingProcedureCounter}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*PricingElementApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementGet**](docs/Api/PricingElementApi.md#purchaseorderitempurchaseorderpurchaseorderitempurordpricingelementget) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurOrdPricingElement | Get entities from related _PurOrdPricingElement
*PricingElementApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementPost**](docs/Api/PricingElementApi.md#purchaseorderitempurchaseorderpurchaseorderitempurordpricingelementpost) | **POST** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurOrdPricingElement | Add new entity to related _PurOrdPricingElement
*PurchaseOrderApi* | [**pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderGet**](docs/Api/PurchaseOrderApi.md#posubcontractingcomponentpurchaseorderpurchaseorderitemschedulelinereservationitemrecordtypepurchaseorderget) | **GET** /POSubcontractingComponent/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/{ReservationItem}/{RecordType}/_PurchaseOrder | Get related _PurchaseOrder
*PurchaseOrderApi* | [**purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderGet**](docs/Api/PurchaseOrderApi.md#purorderitemdeliveryaddresspurchaseorderpurchaseorderitemdeliveryaddressidpurchaseorderget) | **GET** /PurOrderItemDeliveryAddress/{PurchaseOrder}/{PurchaseOrderItem}/{DeliveryAddressID}/_PurchaseOrder | Get related _PurchaseOrder
*PurchaseOrderApi* | [**purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderGet**](docs/Api/PurchaseOrderApi.md#purorderitempricingelementpurchaseorderpurchaseorderitempricingdocumentpricingdocumentitempricingproceduresteppricingprocedurecounterpurchaseorderget) | **GET** /PurOrderItemPricingElement/{PurchaseOrder}/{PurchaseOrderItem}/{PricingDocument}/{PricingDocumentItem}/{PricingProcedureStep}/{PricingProcedureCounter}/_PurchaseOrder | Get related _PurchaseOrder
*PurchaseOrderApi* | [**purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderGet**](docs/Api/PurchaseOrderApi.md#purchaseorderaccountassignmentpurchaseorderpurchaseorderitemaccountassignmentnumberpurchaseorderget) | **GET** /PurchaseOrderAccountAssignment/{PurchaseOrder}/{PurchaseOrderItem}/{AccountAssignmentNumber}/_PurchaseOrder | Get related _PurchaseOrder
*PurchaseOrderApi* | [**purchaseOrderGet**](docs/Api/PurchaseOrderApi.md#purchaseorderget) | **GET** /PurchaseOrder | Get entities from PurchaseOrder
*PurchaseOrderApi* | [**purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderGet**](docs/Api/PurchaseOrderApi.md#purchaseorderinvoicingplanitempurchaseorderpurchaseorderiteminvoicingplaniteminvoicingplanpurchaseorderget) | **GET** /PurchaseOrderInvoicingPlanItem/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlanItem}/{InvoicingPlan}/_PurchaseOrder | Get related _PurchaseOrder
*PurchaseOrderApi* | [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderGet**](docs/Api/PurchaseOrderApi.md#purchaseorderinvoicingplanpurchaseorderpurchaseorderiteminvoicingplanpurchaseorderget) | **GET** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan}/_PurchaseOrder | Get related _PurchaseOrder
*PurchaseOrderApi* | [**purchaseOrderItemNotePurchaseOrderPurchaseOrderItemTextObjectTypeLanguagePurchaseOrderGet**](docs/Api/PurchaseOrderApi.md#purchaseorderitemnotepurchaseorderpurchaseorderitemtextobjecttypelanguagepurchaseorderget) | **GET** /PurchaseOrderItemNote/{PurchaseOrder}/{PurchaseOrderItem}/{TextObjectType}/{Language}/_PurchaseOrder | Get related _PurchaseOrder
*PurchaseOrderApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderGet**](docs/Api/PurchaseOrderApi.md#purchaseorderitempurchaseorderpurchaseorderitempurchaseorderget) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrder | Get related _PurchaseOrder
*PurchaseOrderApi* | [**purchaseOrderNotePurchaseOrderTextObjectTypeLanguagePurchaseOrderGet**](docs/Api/PurchaseOrderApi.md#purchaseordernotepurchaseordertextobjecttypelanguagepurchaseorderget) | **GET** /PurchaseOrderNote/{PurchaseOrder}/{TextObjectType}/{Language}/_PurchaseOrder | Get related _PurchaseOrder
*PurchaseOrderApi* | [**purchaseOrderPartnerPurchaseOrderPartnerFunctionPurchaseOrderTPGet**](docs/Api/PurchaseOrderApi.md#purchaseorderpartnerpurchaseorderpartnerfunctionpurchaseordertpget) | **GET** /PurchaseOrderPartner/{PurchaseOrder}/{PartnerFunction}/_PurchaseOrderTP | Get related _PurchaseOrderTP
*PurchaseOrderApi* | [**purchaseOrderPost**](docs/Api/PurchaseOrderApi.md#purchaseorderpost) | **POST** /PurchaseOrder | Add new entity to PurchaseOrder
*PurchaseOrderApi* | [**purchaseOrderPurchaseOrderDelete**](docs/Api/PurchaseOrderApi.md#purchaseorderpurchaseorderdelete) | **DELETE** /PurchaseOrder/{PurchaseOrder} | Delete entity from PurchaseOrder
*PurchaseOrderApi* | [**purchaseOrderPurchaseOrderGet**](docs/Api/PurchaseOrderApi.md#purchaseorderpurchaseorderget) | **GET** /PurchaseOrder/{PurchaseOrder} | Get entity from PurchaseOrder by key
*PurchaseOrderApi* | [**purchaseOrderPurchaseOrderPatch**](docs/Api/PurchaseOrderApi.md#purchaseorderpurchaseorderpatch) | **PATCH** /PurchaseOrder/{PurchaseOrder} | Update entity in PurchaseOrder
*PurchaseOrderApi* | [**purchaseOrderPurchaseOrderPurchaseOrderItemGet**](docs/Api/PurchaseOrderApi.md#purchaseorderpurchaseorderpurchaseorderitemget) | **GET** /PurchaseOrder/{PurchaseOrder}/_PurchaseOrderItem | Get entities from related _PurchaseOrderItem
*PurchaseOrderApi* | [**purchaseOrderPurchaseOrderPurchaseOrderItemPost**](docs/Api/PurchaseOrderApi.md#purchaseorderpurchaseorderpurchaseorderitempost) | **POST** /PurchaseOrder/{PurchaseOrder}/_PurchaseOrderItem | Add new entity to related _PurchaseOrderItem
*PurchaseOrderApi* | [**purchaseOrderPurchaseOrderPurchaseOrderNoteGet**](docs/Api/PurchaseOrderApi.md#purchaseorderpurchaseorderpurchaseordernoteget) | **GET** /PurchaseOrder/{PurchaseOrder}/_PurchaseOrderNote | Get entities from related _PurchaseOrderNote
*PurchaseOrderApi* | [**purchaseOrderPurchaseOrderPurchaseOrderNotePost**](docs/Api/PurchaseOrderApi.md#purchaseorderpurchaseorderpurchaseordernotepost) | **POST** /PurchaseOrder/{PurchaseOrder}/_PurchaseOrderNote | Add new entity to related _PurchaseOrderNote
*PurchaseOrderApi* | [**purchaseOrderPurchaseOrderPurchaseOrderPartnerGet**](docs/Api/PurchaseOrderApi.md#purchaseorderpurchaseorderpurchaseorderpartnerget) | **GET** /PurchaseOrder/{PurchaseOrder}/_PurchaseOrderPartner | Get entities from related _PurchaseOrderPartner
*PurchaseOrderApi* | [**purchaseOrderPurchaseOrderSAPSelfGetOutputBinaryDataGet**](docs/Api/PurchaseOrderApi.md#purchaseorderpurchaseordersapselfgetoutputbinarydataget) | **GET** /PurchaseOrder/{PurchaseOrder}/SAP__self.GetOutputBinaryData() | Invoke function GetOutputBinaryData
*PurchaseOrderApi* | [**purchaseOrderPurchaseOrderSupplierAddressGet**](docs/Api/PurchaseOrderApi.md#purchaseorderpurchaseordersupplieraddressget) | **GET** /PurchaseOrder/{PurchaseOrder}/_SupplierAddress | Get related _SupplierAddress
*PurchaseOrderApi* | [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderGet**](docs/Api/PurchaseOrderApi.md#purchaseorderschedulelinepurchaseorderpurchaseorderitemschedulelinepurchaseorderget) | **GET** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/_PurchaseOrder | Get related _PurchaseOrder
*PurchaseOrderApi* | [**purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderPurchaseOrderTPGet**](docs/Api/PurchaseOrderApi.md#purchaseordersupplieraddresssupplieraddressidpurchaseorderpurchaseordertpget) | **GET** /PurchaseOrderSupplierAddress/{SupplierAddressID}/{PurchaseOrder}/_PurchaseOrderTP | Get related _PurchaseOrderTP
*PurchaseOrderItemApi* | [**pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderItemGet**](docs/Api/PurchaseOrderItemApi.md#posubcontractingcomponentpurchaseorderpurchaseorderitemschedulelinereservationitemrecordtypepurchaseorderitemget) | **GET** /POSubcontractingComponent/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/{ReservationItem}/{RecordType}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*PurchaseOrderItemApi* | [**purOrderItemDeliveryAddressPurchaseOrderPurchaseOrderItemDeliveryAddressIDPurchaseOrderItemGet**](docs/Api/PurchaseOrderItemApi.md#purorderitemdeliveryaddresspurchaseorderpurchaseorderitemdeliveryaddressidpurchaseorderitemget) | **GET** /PurOrderItemDeliveryAddress/{PurchaseOrder}/{PurchaseOrderItem}/{DeliveryAddressID}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*PurchaseOrderItemApi* | [**purOrderItemPricingElementPurchaseOrderPurchaseOrderItemPricingDocumentPricingDocumentItemPricingProcedureStepPricingProcedureCounterPurchaseOrderItemGet**](docs/Api/PurchaseOrderItemApi.md#purorderitempricingelementpurchaseorderpurchaseorderitempricingdocumentpricingdocumentitempricingproceduresteppricingprocedurecounterpurchaseorderitemget) | **GET** /PurOrderItemPricingElement/{PurchaseOrder}/{PurchaseOrderItem}/{PricingDocument}/{PricingDocumentItem}/{PricingProcedureStep}/{PricingProcedureCounter}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*PurchaseOrderItemApi* | [**purchaseOrderAccountAssignmentPurchaseOrderPurchaseOrderItemAccountAssignmentNumberPurchaseOrderItemGet**](docs/Api/PurchaseOrderItemApi.md#purchaseorderaccountassignmentpurchaseorderpurchaseorderitemaccountassignmentnumberpurchaseorderitemget) | **GET** /PurchaseOrderAccountAssignment/{PurchaseOrder}/{PurchaseOrderItem}/{AccountAssignmentNumber}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*PurchaseOrderItemApi* | [**purchaseOrderInvoicingPlanItemPurchaseOrderPurchaseOrderItemInvoicingPlanItemInvoicingPlanPurchaseOrderItemGet**](docs/Api/PurchaseOrderItemApi.md#purchaseorderinvoicingplanitempurchaseorderpurchaseorderiteminvoicingplaniteminvoicingplanpurchaseorderitemget) | **GET** /PurchaseOrderInvoicingPlanItem/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlanItem}/{InvoicingPlan}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*PurchaseOrderItemApi* | [**purchaseOrderInvoicingPlanPurchaseOrderPurchaseOrderItemInvoicingPlanPurchaseOrderItemGet**](docs/Api/PurchaseOrderItemApi.md#purchaseorderinvoicingplanpurchaseorderpurchaseorderiteminvoicingplanpurchaseorderitemget) | **GET** /PurchaseOrderInvoicingPlan/{PurchaseOrder}/{PurchaseOrderItem}/{InvoicingPlan}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*PurchaseOrderItemApi* | [**purchaseOrderItemGet**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitemget) | **GET** /PurchaseOrderItem | Get entities from PurchaseOrderItem
*PurchaseOrderItemApi* | [**purchaseOrderItemNotePurchaseOrderPurchaseOrderItemTextObjectTypeLanguagePurchaseOrderItemGet**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitemnotepurchaseorderpurchaseorderitemtextobjecttypelanguagepurchaseorderitemget) | **GET** /PurchaseOrderItemNote/{PurchaseOrder}/{PurchaseOrderItem}/{TextObjectType}/{Language}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*PurchaseOrderItemApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemDelete**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitempurchaseorderpurchaseorderitemdelete) | **DELETE** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem} | Delete entity from PurchaseOrderItem
*PurchaseOrderItemApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemDeliveryAddressGet**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitempurchaseorderpurchaseorderitemdeliveryaddressget) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_DeliveryAddress | Get related _DeliveryAddress
*PurchaseOrderItemApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemGet**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitempurchaseorderpurchaseorderitemget) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem} | Get entity from PurchaseOrderItem by key
*PurchaseOrderItemApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPatch**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitempurchaseorderpurchaseorderitempatch) | **PATCH** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem} | Update entity in PurchaseOrderItem
*PurchaseOrderItemApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentGet**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitempurchaseorderpurchaseorderitempurordaccountassignmentget) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurOrdAccountAssignment | Get entities from related _PurOrdAccountAssignment
*PurchaseOrderItemApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdAccountAssignmentPost**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitempurchaseorderpurchaseorderitempurordaccountassignmentpost) | **POST** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurOrdAccountAssignment | Add new entity to related _PurOrdAccountAssignment
*PurchaseOrderItemApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementGet**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitempurchaseorderpurchaseorderitempurordpricingelementget) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurOrdPricingElement | Get entities from related _PurOrdPricingElement
*PurchaseOrderItemApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurOrdPricingElementPost**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitempurchaseorderpurchaseorderitempurordpricingelementpost) | **POST** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurOrdPricingElement | Add new entity to related _PurOrdPricingElement
*PurchaseOrderItemApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderGet**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitempurchaseorderpurchaseorderitempurchaseorderget) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrder | Get related _PurchaseOrder
*PurchaseOrderItemApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanGet**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitempurchaseorderpurchaseorderitempurchaseorderinvoicingplanget) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderInvoicingPlan | Get entities from related _PurchaseOrderInvoicingPlan
*PurchaseOrderItemApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderInvoicingPlanPost**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitempurchaseorderpurchaseorderitempurchaseorderinvoicingplanpost) | **POST** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderInvoicingPlan | Add new entity to related _PurchaseOrderInvoicingPlan
*PurchaseOrderItemApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderItemNoteGet**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitempurchaseorderpurchaseorderitempurchaseorderitemnoteget) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderItemNote | Get entities from related _PurchaseOrderItemNote
*PurchaseOrderItemApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderItemNotePost**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitempurchaseorderpurchaseorderitempurchaseorderitemnotepost) | **POST** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderItemNote | Add new entity to related _PurchaseOrderItemNote
*PurchaseOrderItemApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPGet**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitempurchaseorderpurchaseorderitempurchaseorderschedulelinetpget) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderScheduleLineTP | Get entities from related _PurchaseOrderScheduleLineTP
*PurchaseOrderItemApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPPost**](docs/Api/PurchaseOrderItemApi.md#purchaseorderitempurchaseorderpurchaseorderitempurchaseorderschedulelinetppost) | **POST** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderScheduleLineTP | Add new entity to related _PurchaseOrderScheduleLineTP
*PurchaseOrderItemApi* | [**purchaseOrderPurchaseOrderPurchaseOrderItemGet**](docs/Api/PurchaseOrderItemApi.md#purchaseorderpurchaseorderpurchaseorderitemget) | **GET** /PurchaseOrder/{PurchaseOrder}/_PurchaseOrderItem | Get entities from related _PurchaseOrderItem
*PurchaseOrderItemApi* | [**purchaseOrderPurchaseOrderPurchaseOrderItemPost**](docs/Api/PurchaseOrderItemApi.md#purchaseorderpurchaseorderpurchaseorderitempost) | **POST** /PurchaseOrder/{PurchaseOrder}/_PurchaseOrderItem | Add new entity to related _PurchaseOrderItem
*PurchaseOrderItemApi* | [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderItemGet**](docs/Api/PurchaseOrderItemApi.md#purchaseorderschedulelinepurchaseorderpurchaseorderitemschedulelinepurchaseorderitemget) | **GET** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*ScheduleLinesApi* | [**pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeScheduleLineGet**](docs/Api/ScheduleLinesApi.md#posubcontractingcomponentpurchaseorderpurchaseorderitemschedulelinereservationitemrecordtypeschedulelineget) | **GET** /POSubcontractingComponent/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/{ReservationItem}/{RecordType}/_ScheduleLine | Get related _ScheduleLine
*ScheduleLinesApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPGet**](docs/Api/ScheduleLinesApi.md#purchaseorderitempurchaseorderpurchaseorderitempurchaseorderschedulelinetpget) | **GET** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderScheduleLineTP | Get entities from related _PurchaseOrderScheduleLineTP
*ScheduleLinesApi* | [**purchaseOrderItemPurchaseOrderPurchaseOrderItemPurchaseOrderScheduleLineTPPost**](docs/Api/ScheduleLinesApi.md#purchaseorderitempurchaseorderpurchaseorderitempurchaseorderschedulelinetppost) | **POST** /PurchaseOrderItem/{PurchaseOrder}/{PurchaseOrderItem}/_PurchaseOrderScheduleLineTP | Add new entity to related _PurchaseOrderScheduleLineTP
*ScheduleLinesApi* | [**purchaseOrderScheduleLineGet**](docs/Api/ScheduleLinesApi.md#purchaseorderschedulelineget) | **GET** /PurchaseOrderScheduleLine | Get entities from PurchaseOrderScheduleLine
*ScheduleLinesApi* | [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineGet**](docs/Api/ScheduleLinesApi.md#purchaseorderschedulelinepurchaseorderpurchaseorderitemschedulelineget) | **GET** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine} | Get entity from PurchaseOrderScheduleLine by key
*ScheduleLinesApi* | [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePatch**](docs/Api/ScheduleLinesApi.md#purchaseorderschedulelinepurchaseorderpurchaseorderitemschedulelinepatch) | **PATCH** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine} | Update entity in PurchaseOrderScheduleLine
*ScheduleLinesApi* | [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderGet**](docs/Api/ScheduleLinesApi.md#purchaseorderschedulelinepurchaseorderpurchaseorderitemschedulelinepurchaseorderget) | **GET** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/_PurchaseOrder | Get related _PurchaseOrder
*ScheduleLinesApi* | [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLinePurchaseOrderItemGet**](docs/Api/ScheduleLinesApi.md#purchaseorderschedulelinepurchaseorderpurchaseorderitemschedulelinepurchaseorderitemget) | **GET** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*ScheduleLinesApi* | [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentGet**](docs/Api/ScheduleLinesApi.md#purchaseorderschedulelinepurchaseorderpurchaseorderitemschedulelinesubcontractingcomponentget) | **GET** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/_SubcontractingComponent | Get entities from related _SubcontractingComponent
*ScheduleLinesApi* | [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentPost**](docs/Api/ScheduleLinesApi.md#purchaseorderschedulelinepurchaseorderpurchaseorderitemschedulelinesubcontractingcomponentpost) | **POST** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/_SubcontractingComponent | Add new entity to related _SubcontractingComponent
*SubcontractingComponentsApi* | [**pOSubcontractingComponentGet**](docs/Api/SubcontractingComponentsApi.md#posubcontractingcomponentget) | **GET** /POSubcontractingComponent | Get entities from POSubcontractingComponent
*SubcontractingComponentsApi* | [**pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeGet**](docs/Api/SubcontractingComponentsApi.md#posubcontractingcomponentpurchaseorderpurchaseorderitemschedulelinereservationitemrecordtypeget) | **GET** /POSubcontractingComponent/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/{ReservationItem}/{RecordType} | Get entity from POSubcontractingComponent by key
*SubcontractingComponentsApi* | [**pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePatch**](docs/Api/SubcontractingComponentsApi.md#posubcontractingcomponentpurchaseorderpurchaseorderitemschedulelinereservationitemrecordtypepatch) | **PATCH** /POSubcontractingComponent/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/{ReservationItem}/{RecordType} | Update entity in POSubcontractingComponent
*SubcontractingComponentsApi* | [**pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderGet**](docs/Api/SubcontractingComponentsApi.md#posubcontractingcomponentpurchaseorderpurchaseorderitemschedulelinereservationitemrecordtypepurchaseorderget) | **GET** /POSubcontractingComponent/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/{ReservationItem}/{RecordType}/_PurchaseOrder | Get related _PurchaseOrder
*SubcontractingComponentsApi* | [**pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypePurchaseOrderItemGet**](docs/Api/SubcontractingComponentsApi.md#posubcontractingcomponentpurchaseorderpurchaseorderitemschedulelinereservationitemrecordtypepurchaseorderitemget) | **GET** /POSubcontractingComponent/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/{ReservationItem}/{RecordType}/_PurchaseOrderItem | Get related _PurchaseOrderItem
*SubcontractingComponentsApi* | [**pOSubcontractingComponentPurchaseOrderPurchaseOrderItemScheduleLineReservationItemRecordTypeScheduleLineGet**](docs/Api/SubcontractingComponentsApi.md#posubcontractingcomponentpurchaseorderpurchaseorderitemschedulelinereservationitemrecordtypeschedulelineget) | **GET** /POSubcontractingComponent/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/{ReservationItem}/{RecordType}/_ScheduleLine | Get related _ScheduleLine
*SubcontractingComponentsApi* | [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentGet**](docs/Api/SubcontractingComponentsApi.md#purchaseorderschedulelinepurchaseorderpurchaseorderitemschedulelinesubcontractingcomponentget) | **GET** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/_SubcontractingComponent | Get entities from related _SubcontractingComponent
*SubcontractingComponentsApi* | [**purchaseOrderScheduleLinePurchaseOrderPurchaseOrderItemScheduleLineSubcontractingComponentPost**](docs/Api/SubcontractingComponentsApi.md#purchaseorderschedulelinepurchaseorderpurchaseorderitemschedulelinesubcontractingcomponentpost) | **POST** /PurchaseOrderScheduleLine/{PurchaseOrder}/{PurchaseOrderItem}/{ScheduleLine}/_SubcontractingComponent | Add new entity to related _SubcontractingComponent
*SupplierAddressApi* | [**purchaseOrderPurchaseOrderSupplierAddressGet**](docs/Api/SupplierAddressApi.md#purchaseorderpurchaseordersupplieraddressget) | **GET** /PurchaseOrder/{PurchaseOrder}/_SupplierAddress | Get related _SupplierAddress
*SupplierAddressApi* | [**purchaseOrderSupplierAddressGet**](docs/Api/SupplierAddressApi.md#purchaseordersupplieraddressget) | **GET** /PurchaseOrderSupplierAddress | Get entities from PurchaseOrderSupplierAddress
*SupplierAddressApi* | [**purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderGet**](docs/Api/SupplierAddressApi.md#purchaseordersupplieraddresssupplieraddressidpurchaseorderget) | **GET** /PurchaseOrderSupplierAddress/{SupplierAddressID}/{PurchaseOrder} | Get entity from PurchaseOrderSupplierAddress by key
*SupplierAddressApi* | [**purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderPatch**](docs/Api/SupplierAddressApi.md#purchaseordersupplieraddresssupplieraddressidpurchaseorderpatch) | **PATCH** /PurchaseOrderSupplierAddress/{SupplierAddressID}/{PurchaseOrder} | Update entity in PurchaseOrderSupplierAddress
*SupplierAddressApi* | [**purchaseOrderSupplierAddressSupplierAddressIDPurchaseOrderPurchaseOrderTPGet**](docs/Api/SupplierAddressApi.md#purchaseordersupplieraddresssupplieraddressidpurchaseorderpurchaseordertpget) | **GET** /PurchaseOrderSupplierAddress/{SupplierAddressID}/{PurchaseOrder}/_PurchaseOrderTP | Get related _PurchaseOrderTP

## Models

- [AdjustedQty](docs/Model/AdjustedQty.md)
- [BillingValue](docs/Model/BillingValue.md)
- [CDPercentage1](docs/Model/CDPercentage1.md)
- [CDPercentage2](docs/Model/CDPercentage2.md)
- [CndnBsAmt](docs/Model/CndnBsAmt.md)
- [CollectionOfPOInvoicingPlanItemType](docs/Model/CollectionOfPOInvoicingPlanItemType.md)
- [CollectionOfPOSubcontractingComponentType](docs/Model/CollectionOfPOSubcontractingComponentType.md)
- [CollectionOfPurOrderItemDeliveryAddressType](docs/Model/CollectionOfPurOrderItemDeliveryAddressType.md)
- [CollectionOfPurOrderItemPricingElementType](docs/Model/CollectionOfPurOrderItemPricingElementType.md)
- [CollectionOfPurchaseOrderAccountAssignmentType](docs/Model/CollectionOfPurchaseOrderAccountAssignmentType.md)
- [CollectionOfPurchaseOrderInvoicingPlanType](docs/Model/CollectionOfPurchaseOrderInvoicingPlanType.md)
- [CollectionOfPurchaseOrderItemNoteType](docs/Model/CollectionOfPurchaseOrderItemNoteType.md)
- [CollectionOfPurchaseOrderItemType](docs/Model/CollectionOfPurchaseOrderItemType.md)
- [CollectionOfPurchaseOrderNoteType](docs/Model/CollectionOfPurchaseOrderNoteType.md)
- [CollectionOfPurchaseOrderPartnerType](docs/Model/CollectionOfPurchaseOrderPartnerType.md)
- [CollectionOfPurchaseOrderScheduleLineType](docs/Model/CollectionOfPurchaseOrderScheduleLineType.md)
- [CollectionOfPurchaseOrderSupplierAddressType](docs/Model/CollectionOfPurchaseOrderSupplierAddressType.md)
- [CollectionOfPurchaseOrderType](docs/Model/CollectionOfPurchaseOrderType.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001DPurOrdGetOutputBinaryDataR](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001DPurOrdGetOutputBinaryDataR.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001DPurOrdGetOutputBinaryDataRCreate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001DPurOrdGetOutputBinaryDataRCreate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001DPurOrdGetOutputBinaryDataRUpdate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001DPurOrdGetOutputBinaryDataRUpdate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemType](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemType.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemTypeCreate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001POInvoicingPlanItemTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentType](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentType.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentTypeCreate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressType](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressType.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressTypeCreate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemDeliveryAddressTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementType](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementType.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementTypeCreate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentType](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentType.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentTypeCreate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderAccountAssignmentTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanType](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanType.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanTypeCreate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderInvoicingPlanTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemNoteType](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemNoteType.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemNoteTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemNoteTypeCreate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemNoteTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemNoteTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemTypeCreate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteType](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteType.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteTypeCreate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderNoteTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerType](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerType.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineType](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineType.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeCreate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeOpenPurchaseOrderQuantity](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeOpenPurchaseOrderQuantity.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressType](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressType.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressTypeCreate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderSupplierAddressTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderTypeCreate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001SAPMessage](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001SAPMessage.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001SAPMessageCreate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001SAPMessageCreate.md)
- [ComSapGatewaySrvdA2xApiPurchaseorder2V0001SAPMessageUpdate](docs/Model/ComSapGatewaySrvdA2xApiPurchaseorder2V0001SAPMessageUpdate.md)
- [ComponentScrap](docs/Model/ComponentScrap.md)
- [CondRoundingDiff](docs/Model/CondRoundingDiff.md)
- [ConditionAmount](docs/Model/ConditionAmount.md)
- [ConditionBasis](docs/Model/ConditionBasis.md)
- [ConditionFactor](docs/Model/ConditionFactor.md)
- [ConditionFactor1](docs/Model/ConditionFactor1.md)
- [ConditionValue](docs/Model/ConditionValue.md)
- [Count](docs/Model/Count.md)
- [Days1](docs/Model/Days1.md)
- [Days2](docs/Model/Days2.md)
- [DaysNet](docs/Model/DaysNet.md)
- [Denominator](docs/Model/Denominator.md)
- [Denominator1](docs/Model/Denominator1.md)
- [Denominator2](docs/Model/Denominator2.md)
- [Distribution](docs/Model/Distribution.md)
- [DownPayment](docs/Model/DownPayment.md)
- [DownPaymentAmount](docs/Model/DownPaymentAmount.md)
- [EffectiveValue](docs/Model/EffectiveValue.md)
- [EqualTo](docs/Model/EqualTo.md)
- [Error](docs/Model/Error.md)
- [ErrorError](docs/Model/ErrorError.md)
- [ErrorErrorDetailsInner](docs/Model/ErrorErrorDetailsInner.md)
- [ExchangeRate](docs/Model/ExchangeRate.md)
- [ExchangeRate1](docs/Model/ExchangeRate1.md)
- [ExpectedValue](docs/Model/ExpectedValue.md)
- [GRProcessingTime](docs/Model/GRProcessingTime.md)
- [GrossOrderValue](docs/Model/GrossOrderValue.md)
- [GrossWeight](docs/Model/GrossWeight.md)
- [LeadTimeOffset](docs/Model/LeadTimeOffset.md)
- [NetOrderPrice](docs/Model/NetOrderPrice.md)
- [NetOrderValue](docs/Model/NetOrderValue.md)
- [NetWeight](docs/Model/NetWeight.md)
- [NonDeductible](docs/Model/NonDeductible.md)
- [NumberOfVariableSizeComponents](docs/Model/NumberOfVariableSizeComponents.md)
- [Numerator](docs/Model/Numerator.md)
- [Numerator1](docs/Model/Numerator1.md)
- [OperationScrapIn](docs/Model/OperationScrapIn.md)
- [OrderQuantity](docs/Model/OrderQuantity.md)
- [OverallLimit](docs/Model/OverallLimit.md)
- [OverdelivTolerance](docs/Model/OverdelivTolerance.md)
- [PlannedDelivTime](docs/Model/PlannedDelivTime.md)
- [Points](docs/Model/Points.md)
- [PriceUnit](docs/Model/PriceUnit.md)
- [PricingUnit](docs/Model/PricingUnit.md)
- [Quantity](docs/Model/Quantity.md)
- [QuantityConversion](docs/Model/QuantityConversion.md)
- [QuantityConversion1](docs/Model/QuantityConversion1.md)
- [QuantityInUnitOfEntry](docs/Model/QuantityInUnitOfEntry.md)
- [Ratio](docs/Model/Ratio.md)
- [RequirementQuantity](docs/Model/RequirementQuantity.md)
- [ScaleBaseVal](docs/Model/ScaleBaseVal.md)
- [ScheduledQuantity](docs/Model/ScheduledQuantity.md)
- [Size1](docs/Model/Size1.md)
- [Size2](docs/Model/Size2.md)
- [Size3](docs/Model/Size3.md)
- [Subtotal1](docs/Model/Subtotal1.md)
- [Subtotal2](docs/Model/Subtotal2.md)
- [Subtotal3](docs/Model/Subtotal3.md)
- [Subtotal4](docs/Model/Subtotal4.md)
- [Subtotal5](docs/Model/Subtotal5.md)
- [Subtotal6](docs/Model/Subtotal6.md)
- [UnderdelTolerance](docs/Model/UnderdelTolerance.md)
- [VSIQuantity](docs/Model/VSIQuantity.md)
- [Volume](docs/Model/Volume.md)
- [WithdrawnQuantity](docs/Model/WithdrawnQuantity.md)

## Authorization

Authentication schemes defined for the API:
### OAuth2Auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://{host}:{port}`
- **Scopes**: 
    - **OV4:API_PURCHASEORDER_2**: 

### BasicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
