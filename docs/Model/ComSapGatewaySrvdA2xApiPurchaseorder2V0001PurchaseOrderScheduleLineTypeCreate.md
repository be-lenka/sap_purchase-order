# # ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order** | **string** | Purchasing Document Number |
**purchase_order_item** | **string** | Item Number of Purchasing Document |
**schedule_line** | **string** | Delivery Schedule Line Counter |
**schedule_line_delivery_date** | **\DateTime** | Item Delivery Date | [optional]
**sched_line_stsc_delivery_date** | **\DateTime** | Statistics-Relevant Delivery Date | [optional]
**performance_period_start_date** | **\DateTime** | Start Date for Period of Performance | [optional]
**performance_period_end_date** | **\DateTime** | End Date for Period of Performance | [optional]
**schedule_line_delivery_time** | **string** | Delivery Date Time-Spot | [optional]
**batch** | **string** | Batch Number | [optional]
**batch_by_supplier** | **string** | Supplier Batch Number | [optional]
**schedule_line_order_quantity** | [**\BeLenka\SAP\PurchaseOrder\Model\ScheduledQuantity**](ScheduledQuantity.md) |  | [optional]
**open_purchase_order_quantity** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeOpenPurchaseOrderQuantity**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeOpenPurchaseOrderQuantity.md) |  | [optional]
**currency** | **string** | Currency Key | [optional]
**purchase_requisition** | **string** | Purchase Requisition Number | [optional]
**purchase_requisition_item** | **string** | Item Number of Purchase Requisition | [optional]
**deliv_date_category** | **string** | Category of delivery date | [optional]
**schedule_line_order_date** | **\DateTime** | Order date of schedule line | [optional]
**product_availability_date** | **\DateTime** | Material Staging/Availability Date | [optional]
**loading_date** | **\DateTime** |  | [optional]
**loading_time** | **string** | Loading Time (Local Time Relating to a Shipping Point) | [optional]
**transportation_planning_date** | **\DateTime** | Transportation Planning Date | [optional]
**transportation_planning_time** | **string** | Transp. Planning Time (Local, Relating to a Shipping Point) | [optional]
**goods_issue_date** | **\DateTime** |  | [optional]
**goods_issue_time** | **string** | Time of Goods Issue (Local, Relating to a Plant) | [optional]
**route_schedule** | **string** |  | [optional]
**product_availability_time** | **string** | Material Staging Time (Local, Relating to a Plant) | [optional]
**sap__messages** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001SAPMessageCreate[]**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001SAPMessageCreate.md) |  | [optional]
**_purchase_order** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderTypeCreate**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderTypeCreate.md) |  | [optional]
**_purchase_order_item** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemTypeCreate**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemTypeCreate.md) |  | [optional]
**_subcontracting_component** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentTypeCreate[]**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentTypeCreate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
