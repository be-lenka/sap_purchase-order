# # ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order** | **string** | Purchasing Document Number | [optional]
**purchase_order_item** | **string** | Item Number of Purchasing Document | [optional]
**schedule_line** | **string** | Delivery Schedule Line Counter | [optional]
**schedule_line_delivery_date** | **\DateTime** | Item Delivery Date | [optional]
**sched_line_stsc_delivery_date** | **\DateTime** | Statistics-Relevant Delivery Date | [optional]
**performance_period_start_date** | **\DateTime** | Start Date for Period of Performance | [optional]
**performance_period_end_date** | **\DateTime** | End Date for Period of Performance | [optional]
**schedule_line_delivery_time** | **string** | Delivery Date Time-Spot | [optional]
**batch** | **string** | Batch Number | [optional]
**batch_by_supplier** | **string** | Supplier Batch Number | [optional]
**schedule_line_order_quantity** | [**\BeLenka\SAP\PurchaseOrder\Model\ScheduledQuantity**](ScheduledQuantity.md) |  | [optional]
**open_purchase_order_quantity** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeOpenPurchaseOrderQuantity**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderScheduleLineTypeOpenPurchaseOrderQuantity.md) |  | [optional]
**purchase_order_quantity_unit** | **string** | Purchase Order Unit of Measure | [optional]
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
**sap__messages** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001SAPMessage[]**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001SAPMessage.md) |  | [optional]
**_purchase_order** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderType.md) |  | [optional]
**_purchase_order_item** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemType.md) |  | [optional]
**_subcontracting_component** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentType[]**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001POSubcontractingComponentType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
