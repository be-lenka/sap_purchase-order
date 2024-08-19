# # ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurOrderItemPricingElementTypeCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order** | **string** | Purchasing Document Number |
**purchase_order_item** | **string** | Item Number of Purchasing Document |
**pricing_document** | **string** | Number of the Document Condition |
**pricing_document_item** | **string** | Condition item number |
**pricing_procedure_step** | **string** |  |
**pricing_procedure_counter** | **string** | Condition Counter |
**condition_type** | **string** |  | [optional]
**condition_base_amount** | [**\BeLenka\SAP\PurchaseOrder\Model\CndnBsAmt**](CndnBsAmt.md) |  | [optional]
**condition_rate_amount** | [**\BeLenka\SAP\PurchaseOrder\Model\ConditionAmount**](ConditionAmount.md) |  | [optional]
**condition_rate_ratio** | [**\BeLenka\SAP\PurchaseOrder\Model\Ratio**](Ratio.md) |  | [optional]
**condition_rate_ratio_unit** | **string** | Unit of Measurement | [optional]
**condition_currency** | **string** | Currency Key | [optional]
**condition_quantity** | [**\BeLenka\SAP\PurchaseOrder\Model\PricingUnit**](PricingUnit.md) |  | [optional]
**condition_quantity_unit** | **string** | Condition Unit in the Document | [optional]
**condition_to_base_qty_nmrtr** | [**\BeLenka\SAP\PurchaseOrder\Model\Numerator1**](Numerator1.md) |  | [optional]
**condition_to_base_qty_dnmntr** | [**\BeLenka\SAP\PurchaseOrder\Model\Denominator1**](Denominator1.md) |  | [optional]
**account_key_for_gl_account** | **string** |  | [optional]
**gl_account** | **string** | G/L Account Number | [optional]
**tax_code** | **string** | Tax on Sales/Purchases Code | [optional]
**acct_key_for_accruals_gl_account** | **string** | Account Key - Accruals / Provisions | [optional]
**accruals_gl_account** | **string** | Number of Accruals Account | [optional]
**withholding_tax_code** | **string** | Withholding Tax Code | [optional]
**freight_supplier** | **string** | Account Number of Supplier | [optional]
**cndn_rounding_off_diff_amount** | [**\BeLenka\SAP\PurchaseOrder\Model\CondRoundingDiff**](CondRoundingDiff.md) |  | [optional]
**transaction_currency** | **string** | SD Document Currency | [optional]
**prcg_procedure_counter_for_header** | **string** | Condition Counter (Header) | [optional]
**structure_condition** | **string** |  | [optional]
**period_factor_for_cndn_basis_value** | [**\BeLenka\SAP\PurchaseOrder\Model\ConditionFactor1**](ConditionFactor1.md) |  | [optional]
**condition_alternative_currency** | **string** | Condition Currency (for Cumulation Fields) | [optional]
**condition_amount_in_local_crcy** | [**\BeLenka\SAP\PurchaseOrder\Model\ConditionValue**](ConditionValue.md) |  | [optional]
**billing_price_source** | **string** |  | [optional]
**tax_jurisdiction_level** | **string** | Tax jurisdiction code level | [optional]
**condition_byte_sequence** | **string** | Bit encrypted flags in Pricing | [optional]
**condition_basis_limit_exceeded** | **string** | Indicator for Maximum Condition Basis Value | [optional]
**condition_amount_limit_exceeded** | **string** | Indicator for Maximum Condition Amount | [optional]
**cumulated_condition_basis_value** | [**\BeLenka\SAP\PurchaseOrder\Model\ConditionBasis**](ConditionBasis.md) |  | [optional]
**customer_rebate_recipient** | **string** | Customer number (rebate recipient) | [optional]
**variant_condition** | **string** | Variant Condition Key | [optional]
**condition_acct_assgmt_relevance** | **string** | Relevance for Account Assignment | [optional]
**condition_matrix_maint_relevance** | **string** | Indicator: Matrix Maintenance | [optional]
**configbl_parameters_and_formulas** | **string** | Identifier of CPF Formula in Document | [optional]
**condition_adjusted_quantity** | [**\BeLenka\SAP\PurchaseOrder\Model\AdjustedQty**](AdjustedQty.md) |  | [optional]
**condition_type_name** | **string** |  | [optional]
**tax_code_name** | **string** |  | [optional]
**condition_is_deletable** | **bool** |  | [optional]
**pricing_procedure** | **string** | Procedure (Pricing, Output Control, Acct. Det., Costing,...) | [optional]
**superordinate_document** | **string** |  | [optional]
**superordinate_document_item** | **string** |  | [optional]
**sap__messages** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001SAPMessageCreate[]**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001SAPMessageCreate.md) |  | [optional]
**_purchase_order** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderTypeCreate**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderTypeCreate.md) |  | [optional]
**_purchase_order_item** | [**\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemTypeCreate**](ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderItemTypeCreate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
