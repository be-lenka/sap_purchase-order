# # ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentTypeCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order** | **string** |  |
**purchase_order_item** | **string** |  |
**schedule_line** | **string** | Delivery Schedule Line Counter |
**reservation_item** | **string** |  |
**record_type** | **string** |  |
**material** | **string** | Material Number | [optional]
**is_material_provision** | **bool** | Material Provision Indicator | [optional]
**material_provision_type** | **string** |  | [optional]
**material_qty_to_base_qty_nmrtr** | [**\BeLenka\SAP\PurchaseOrder\Model\Numerator**](Numerator.md) |  | [optional]
**material_qty_to_base_qty_dnmntr** | [**\BeLenka\SAP\PurchaseOrder\Model\Denominator**](Denominator.md) |  | [optional]
**material_revision_level** | **string** |  | [optional]
**material_comp_is_variable_sized** | **bool** | Variable-Sized Item Indicator | [optional]
**material_component_is_phantom_item** | **bool** | Phantom Item Indicator | [optional]
**reservation** | **string** | Number of reservation/dependent requirements | [optional]
**requirement_date** | **\DateTime** | Material Component Requirement Date | [optional]
**requirement_time** | **string** | Material Component Requirement Time | [optional]
**reservation_is_finally_issued** | **bool** | Final Issue for Reservation | [optional]
**base_unit** | **string** |  | [optional]
**quantity_in_entry_unit** | [**\BeLenka\SAP\PurchaseOrder\Model\QuantityInUnitOfEntry**](QuantityInUnitOfEntry.md) |  | [optional]
**entry_unit** | **string** | Unit of entry | [optional]
**variable_size_item_quantity** | [**\BeLenka\SAP\PurchaseOrder\Model\NumberOfVariableSizeComponents**](NumberOfVariableSizeComponents.md) |  | [optional]
**variable_size_item_unit** | **string** | Variable-Size Item Unit of Measure | [optional]
**variable_size_component_unit** | **string** | Unit of Measure for Variable-Size Components | [optional]
**variable_size_component_quantity** | [**\BeLenka\SAP\PurchaseOrder\Model\VSIQuantity**](VSIQuantity.md) |  | [optional]
**unit_of_measure_for_size1_to3** | **string** | Unit of measure for sizes 1 to 3 | [optional]
**size1** | [**\BeLenka\SAP\PurchaseOrder\Model\Size1**](Size1.md) |  | [optional]
**size2** | [**\BeLenka\SAP\PurchaseOrder\Model\Size2**](Size2.md) |  | [optional]
**size3** | [**\BeLenka\SAP\PurchaseOrder\Model\Size3**](Size3.md) |  | [optional]
**plant** | **string** |  | [optional]
**latest_requirement_date** | **\DateTime** |  | [optional]
**order_level_value** | **string** |  | [optional]
**order_path_value** | **string** |  | [optional]
**bill_of_material_item_number** | **string** |  | [optional]
**matl_comp_free_defined_attribute** | **string** |  | [optional]
**bom_item_category** | **string** | Bill of Material Item Category | [optional]
**is_bulk_material_component** | **bool** | Indicator: Bulk Material | [optional]
**account_assignment_category** | **string** |  | [optional]
**inventory_special_stock_type** | **string** | Inventory Special Stock Type | [optional]
**consumption_posting** | **string** |  | [optional]
**inventory_special_stock_valn_type** | **string** | Inventory Special Stock Valuation Type | [optional]
**debit_credit_code** | **string** | Debit/Credit Code | [optional]
**quantity_is_fixed** | **bool** |  | [optional]
**component_scrap_in_percent** | [**\BeLenka\SAP\PurchaseOrder\Model\ComponentScrap**](ComponentScrap.md) |  | [optional]
**operation_scrap_in_percent** | [**\BeLenka\SAP\PurchaseOrder\Model\OperationScrapIn**](OperationScrapIn.md) |  | [optional]
**is_net_scrap** | **bool** |  | [optional]
**lead_time_offset** | [**\BeLenka\SAP\PurchaseOrder\Model\LeadTimeOffset**](LeadTimeOffset.md) |  | [optional]
**quantity_distribution_key** | **string** | MRP Distribution Key | [optional]
**formula_key** | **string** | Formula Key for Variable-Size Items | [optional]
**storage_location** | **string** |  | [optional]
**production_supply_area** | **string** |  | [optional]
**bom_item_text2** | **string** | BOM Item Text (Line 2) | [optional]
**change_number** | **string** |  | [optional]
**sap__messages** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001SAPMessageCreate[]**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001SAPMessageCreate.md) |  | [optional]
**_purchase_order** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderTypeCreate**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderTypeCreate.md) |  | [optional]
**_purchase_order_item** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemTypeCreate**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemTypeCreate.md) |  | [optional]
**_schedule_line** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeCreate**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeCreate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
