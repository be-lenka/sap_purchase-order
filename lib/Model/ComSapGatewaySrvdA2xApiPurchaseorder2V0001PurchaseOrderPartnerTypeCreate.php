<?php
/**
 * ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  BeLenka\SAP\PurchaseOrder
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Purchase Order
 *
 * This service enables you to create purchase orders through an API call from a source system outside SAP S/4HANA Cloud. Furthermore, the service enables you to read, update or delete existing purchase orders from the SAP S/4HANA Cloud system. The service is based on the OData protocol.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BeLenka\SAP\PurchaseOrder\Model;

use \ArrayAccess;
use \BeLenka\SAP\PurchaseOrder\ObjectSerializer;

/**
 * ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\PurchaseOrder
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.sap.gateway.srvd_a2x.api_purchaseorder_2.v0001.PurchaseOrderPartner_Type-create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'purchase_order' => 'string',
        'partner_function' => 'string',
        'supplier_subrange' => 'string',
        'plant' => 'string',
        'purchasing_organization' => 'string',
        'partner_counter' => 'string',
        'created_by_user' => 'string',
        'creation_date' => '\DateTime',
        'purchasing_document_partner_type' => 'string',
        'supplier' => 'string',
        'supplier_hierarchy_category' => 'string',
        'supplier_contact' => 'string',
        'person_work_agreement' => 'string',
        'employment_internal_id' => 'string',
        'default_partner' => 'bool',
        '_purchase_order_tp' => '\BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderTypeCreate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'purchase_order' => null,
        'partner_function' => null,
        'supplier_subrange' => null,
        'plant' => null,
        'purchasing_organization' => null,
        'partner_counter' => null,
        'created_by_user' => null,
        'creation_date' => 'date',
        'purchasing_document_partner_type' => null,
        'supplier' => null,
        'supplier_hierarchy_category' => null,
        'supplier_contact' => null,
        'person_work_agreement' => null,
        'employment_internal_id' => null,
        'default_partner' => null,
        '_purchase_order_tp' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'purchase_order' => false,
		'partner_function' => false,
		'supplier_subrange' => false,
		'plant' => false,
		'purchasing_organization' => false,
		'partner_counter' => false,
		'created_by_user' => false,
		'creation_date' => true,
		'purchasing_document_partner_type' => false,
		'supplier' => false,
		'supplier_hierarchy_category' => false,
		'supplier_contact' => false,
		'person_work_agreement' => false,
		'employment_internal_id' => false,
		'default_partner' => false,
		'_purchase_order_tp' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'purchase_order' => 'PurchaseOrder',
        'partner_function' => 'PartnerFunction',
        'supplier_subrange' => 'SupplierSubrange',
        'plant' => 'Plant',
        'purchasing_organization' => 'PurchasingOrganization',
        'partner_counter' => 'PartnerCounter',
        'created_by_user' => 'CreatedByUser',
        'creation_date' => 'CreationDate',
        'purchasing_document_partner_type' => 'PurchasingDocumentPartnerType',
        'supplier' => 'Supplier',
        'supplier_hierarchy_category' => 'SupplierHierarchyCategory',
        'supplier_contact' => 'SupplierContact',
        'person_work_agreement' => 'PersonWorkAgreement',
        'employment_internal_id' => 'EmploymentInternalID',
        'default_partner' => 'DefaultPartner',
        '_purchase_order_tp' => '_PurchaseOrderTP'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchase_order' => 'setPurchaseOrder',
        'partner_function' => 'setPartnerFunction',
        'supplier_subrange' => 'setSupplierSubrange',
        'plant' => 'setPlant',
        'purchasing_organization' => 'setPurchasingOrganization',
        'partner_counter' => 'setPartnerCounter',
        'created_by_user' => 'setCreatedByUser',
        'creation_date' => 'setCreationDate',
        'purchasing_document_partner_type' => 'setPurchasingDocumentPartnerType',
        'supplier' => 'setSupplier',
        'supplier_hierarchy_category' => 'setSupplierHierarchyCategory',
        'supplier_contact' => 'setSupplierContact',
        'person_work_agreement' => 'setPersonWorkAgreement',
        'employment_internal_id' => 'setEmploymentInternalId',
        'default_partner' => 'setDefaultPartner',
        '_purchase_order_tp' => '_setPurchaseOrderTp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchase_order' => 'getPurchaseOrder',
        'partner_function' => 'getPartnerFunction',
        'supplier_subrange' => 'getSupplierSubrange',
        'plant' => 'getPlant',
        'purchasing_organization' => 'getPurchasingOrganization',
        'partner_counter' => 'getPartnerCounter',
        'created_by_user' => 'getCreatedByUser',
        'creation_date' => 'getCreationDate',
        'purchasing_document_partner_type' => 'getPurchasingDocumentPartnerType',
        'supplier' => 'getSupplier',
        'supplier_hierarchy_category' => 'getSupplierHierarchyCategory',
        'supplier_contact' => 'getSupplierContact',
        'person_work_agreement' => 'getPersonWorkAgreement',
        'employment_internal_id' => 'getEmploymentInternalId',
        'default_partner' => 'getDefaultPartner',
        '_purchase_order_tp' => '_getPurchaseOrderTp'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('purchase_order', $data ?? [], null);
        $this->setIfExists('partner_function', $data ?? [], null);
        $this->setIfExists('supplier_subrange', $data ?? [], null);
        $this->setIfExists('plant', $data ?? [], null);
        $this->setIfExists('purchasing_organization', $data ?? [], null);
        $this->setIfExists('partner_counter', $data ?? [], null);
        $this->setIfExists('created_by_user', $data ?? [], null);
        $this->setIfExists('creation_date', $data ?? [], null);
        $this->setIfExists('purchasing_document_partner_type', $data ?? [], null);
        $this->setIfExists('supplier', $data ?? [], null);
        $this->setIfExists('supplier_hierarchy_category', $data ?? [], null);
        $this->setIfExists('supplier_contact', $data ?? [], null);
        $this->setIfExists('person_work_agreement', $data ?? [], null);
        $this->setIfExists('employment_internal_id', $data ?? [], null);
        $this->setIfExists('default_partner', $data ?? [], null);
        $this->setIfExists('_purchase_order_tp', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['purchase_order'] === null) {
            $invalidProperties[] = "'purchase_order' can't be null";
        }
        if ((mb_strlen($this->container['purchase_order']) > 10)) {
            $invalidProperties[] = "invalid value for 'purchase_order', the character length must be smaller than or equal to 10.";
        }

        if ($this->container['partner_function'] === null) {
            $invalidProperties[] = "'partner_function' can't be null";
        }
        if ((mb_strlen($this->container['partner_function']) > 2)) {
            $invalidProperties[] = "invalid value for 'partner_function', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['supplier_subrange']) && (mb_strlen($this->container['supplier_subrange']) > 6)) {
            $invalidProperties[] = "invalid value for 'supplier_subrange', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['plant']) && (mb_strlen($this->container['plant']) > 4)) {
            $invalidProperties[] = "invalid value for 'plant', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['purchasing_organization']) && (mb_strlen($this->container['purchasing_organization']) > 4)) {
            $invalidProperties[] = "invalid value for 'purchasing_organization', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['partner_counter']) && (mb_strlen($this->container['partner_counter']) > 3)) {
            $invalidProperties[] = "invalid value for 'partner_counter', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['created_by_user']) && (mb_strlen($this->container['created_by_user']) > 12)) {
            $invalidProperties[] = "invalid value for 'created_by_user', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['purchasing_document_partner_type']) && (mb_strlen($this->container['purchasing_document_partner_type']) > 2)) {
            $invalidProperties[] = "invalid value for 'purchasing_document_partner_type', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['supplier']) && (mb_strlen($this->container['supplier']) > 10)) {
            $invalidProperties[] = "invalid value for 'supplier', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['supplier_hierarchy_category']) && (mb_strlen($this->container['supplier_hierarchy_category']) > 1)) {
            $invalidProperties[] = "invalid value for 'supplier_hierarchy_category', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['supplier_contact']) && (mb_strlen($this->container['supplier_contact']) > 10)) {
            $invalidProperties[] = "invalid value for 'supplier_contact', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['person_work_agreement']) && (mb_strlen($this->container['person_work_agreement']) > 8)) {
            $invalidProperties[] = "invalid value for 'person_work_agreement', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['employment_internal_id']) && (mb_strlen($this->container['employment_internal_id']) > 8)) {
            $invalidProperties[] = "invalid value for 'employment_internal_id', the character length must be smaller than or equal to 8.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets purchase_order
     *
     * @return string
     */
    public function getPurchaseOrder()
    {
        return $this->container['purchase_order'];
    }

    /**
     * Sets purchase_order
     *
     * @param string $purchase_order Purchasing Document Number
     *
     * @return self
     */
    public function setPurchaseOrder($purchase_order)
    {
        if (is_null($purchase_order)) {
            throw new \InvalidArgumentException('non-nullable purchase_order cannot be null');
        }
        if ((mb_strlen($purchase_order) > 10)) {
            throw new \InvalidArgumentException('invalid length for $purchase_order when calling ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate., must be smaller than or equal to 10.');
        }

        $this->container['purchase_order'] = $purchase_order;

        return $this;
    }

    /**
     * Gets partner_function
     *
     * @return string
     */
    public function getPartnerFunction()
    {
        return $this->container['partner_function'];
    }

    /**
     * Sets partner_function
     *
     * @param string $partner_function partner_function
     *
     * @return self
     */
    public function setPartnerFunction($partner_function)
    {
        if (is_null($partner_function)) {
            throw new \InvalidArgumentException('non-nullable partner_function cannot be null');
        }
        if ((mb_strlen($partner_function) > 2)) {
            throw new \InvalidArgumentException('invalid length for $partner_function when calling ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate., must be smaller than or equal to 2.');
        }

        $this->container['partner_function'] = $partner_function;

        return $this;
    }

    /**
     * Gets supplier_subrange
     *
     * @return string|null
     */
    public function getSupplierSubrange()
    {
        return $this->container['supplier_subrange'];
    }

    /**
     * Sets supplier_subrange
     *
     * @param string|null $supplier_subrange supplier_subrange
     *
     * @return self
     */
    public function setSupplierSubrange($supplier_subrange)
    {
        if (is_null($supplier_subrange)) {
            throw new \InvalidArgumentException('non-nullable supplier_subrange cannot be null');
        }
        if ((mb_strlen($supplier_subrange) > 6)) {
            throw new \InvalidArgumentException('invalid length for $supplier_subrange when calling ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate., must be smaller than or equal to 6.');
        }

        $this->container['supplier_subrange'] = $supplier_subrange;

        return $this;
    }

    /**
     * Gets plant
     *
     * @return string|null
     */
    public function getPlant()
    {
        return $this->container['plant'];
    }

    /**
     * Sets plant
     *
     * @param string|null $plant plant
     *
     * @return self
     */
    public function setPlant($plant)
    {
        if (is_null($plant)) {
            throw new \InvalidArgumentException('non-nullable plant cannot be null');
        }
        if ((mb_strlen($plant) > 4)) {
            throw new \InvalidArgumentException('invalid length for $plant when calling ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate., must be smaller than or equal to 4.');
        }

        $this->container['plant'] = $plant;

        return $this;
    }

    /**
     * Gets purchasing_organization
     *
     * @return string|null
     */
    public function getPurchasingOrganization()
    {
        return $this->container['purchasing_organization'];
    }

    /**
     * Sets purchasing_organization
     *
     * @param string|null $purchasing_organization Purchasing Organization
     *
     * @return self
     */
    public function setPurchasingOrganization($purchasing_organization)
    {
        if (is_null($purchasing_organization)) {
            throw new \InvalidArgumentException('non-nullable purchasing_organization cannot be null');
        }
        if ((mb_strlen($purchasing_organization) > 4)) {
            throw new \InvalidArgumentException('invalid length for $purchasing_organization when calling ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate., must be smaller than or equal to 4.');
        }

        $this->container['purchasing_organization'] = $purchasing_organization;

        return $this;
    }

    /**
     * Gets partner_counter
     *
     * @return string|null
     */
    public function getPartnerCounter()
    {
        return $this->container['partner_counter'];
    }

    /**
     * Sets partner_counter
     *
     * @param string|null $partner_counter partner_counter
     *
     * @return self
     */
    public function setPartnerCounter($partner_counter)
    {
        if (is_null($partner_counter)) {
            throw new \InvalidArgumentException('non-nullable partner_counter cannot be null');
        }
        if ((mb_strlen($partner_counter) > 3)) {
            throw new \InvalidArgumentException('invalid length for $partner_counter when calling ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate., must be smaller than or equal to 3.');
        }

        $this->container['partner_counter'] = $partner_counter;

        return $this;
    }

    /**
     * Gets created_by_user
     *
     * @return string|null
     */
    public function getCreatedByUser()
    {
        return $this->container['created_by_user'];
    }

    /**
     * Sets created_by_user
     *
     * @param string|null $created_by_user Name of Person Responsible for Creating the Object
     *
     * @return self
     */
    public function setCreatedByUser($created_by_user)
    {
        if (is_null($created_by_user)) {
            throw new \InvalidArgumentException('non-nullable created_by_user cannot be null');
        }
        if ((mb_strlen($created_by_user) > 12)) {
            throw new \InvalidArgumentException('invalid length for $created_by_user when calling ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate., must be smaller than or equal to 12.');
        }

        $this->container['created_by_user'] = $created_by_user;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return \DateTime|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param \DateTime|null $creation_date Record Creation Date
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        if (is_null($creation_date)) {
            array_push($this->openAPINullablesSetToNull, 'creation_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('creation_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets purchasing_document_partner_type
     *
     * @return string|null
     */
    public function getPurchasingDocumentPartnerType()
    {
        return $this->container['purchasing_document_partner_type'];
    }

    /**
     * Sets purchasing_document_partner_type
     *
     * @param string|null $purchasing_document_partner_type Type of partner number
     *
     * @return self
     */
    public function setPurchasingDocumentPartnerType($purchasing_document_partner_type)
    {
        if (is_null($purchasing_document_partner_type)) {
            throw new \InvalidArgumentException('non-nullable purchasing_document_partner_type cannot be null');
        }
        if ((mb_strlen($purchasing_document_partner_type) > 2)) {
            throw new \InvalidArgumentException('invalid length for $purchasing_document_partner_type when calling ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate., must be smaller than or equal to 2.');
        }

        $this->container['purchasing_document_partner_type'] = $purchasing_document_partner_type;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return string|null
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param string|null $supplier Account Number of Supplier
     *
     * @return self
     */
    public function setSupplier($supplier)
    {
        if (is_null($supplier)) {
            throw new \InvalidArgumentException('non-nullable supplier cannot be null');
        }
        if ((mb_strlen($supplier) > 10)) {
            throw new \InvalidArgumentException('invalid length for $supplier when calling ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate., must be smaller than or equal to 10.');
        }

        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets supplier_hierarchy_category
     *
     * @return string|null
     */
    public function getSupplierHierarchyCategory()
    {
        return $this->container['supplier_hierarchy_category'];
    }

    /**
     * Sets supplier_hierarchy_category
     *
     * @param string|null $supplier_hierarchy_category Hierarchy Category: Supplier Hierarchy
     *
     * @return self
     */
    public function setSupplierHierarchyCategory($supplier_hierarchy_category)
    {
        if (is_null($supplier_hierarchy_category)) {
            throw new \InvalidArgumentException('non-nullable supplier_hierarchy_category cannot be null');
        }
        if ((mb_strlen($supplier_hierarchy_category) > 1)) {
            throw new \InvalidArgumentException('invalid length for $supplier_hierarchy_category when calling ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate., must be smaller than or equal to 1.');
        }

        $this->container['supplier_hierarchy_category'] = $supplier_hierarchy_category;

        return $this;
    }

    /**
     * Gets supplier_contact
     *
     * @return string|null
     */
    public function getSupplierContact()
    {
        return $this->container['supplier_contact'];
    }

    /**
     * Sets supplier_contact
     *
     * @param string|null $supplier_contact Number of Contact Person
     *
     * @return self
     */
    public function setSupplierContact($supplier_contact)
    {
        if (is_null($supplier_contact)) {
            throw new \InvalidArgumentException('non-nullable supplier_contact cannot be null');
        }
        if ((mb_strlen($supplier_contact) > 10)) {
            throw new \InvalidArgumentException('invalid length for $supplier_contact when calling ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate., must be smaller than or equal to 10.');
        }

        $this->container['supplier_contact'] = $supplier_contact;

        return $this;
    }

    /**
     * Gets person_work_agreement
     *
     * @return string|null
     */
    public function getPersonWorkAgreement()
    {
        return $this->container['person_work_agreement'];
    }

    /**
     * Sets person_work_agreement
     *
     * @param string|null $person_work_agreement person_work_agreement
     *
     * @return self
     */
    public function setPersonWorkAgreement($person_work_agreement)
    {
        if (is_null($person_work_agreement)) {
            throw new \InvalidArgumentException('non-nullable person_work_agreement cannot be null');
        }
        if ((mb_strlen($person_work_agreement) > 8)) {
            throw new \InvalidArgumentException('invalid length for $person_work_agreement when calling ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate., must be smaller than or equal to 8.');
        }

        $this->container['person_work_agreement'] = $person_work_agreement;

        return $this;
    }

    /**
     * Gets employment_internal_id
     *
     * @return string|null
     */
    public function getEmploymentInternalId()
    {
        return $this->container['employment_internal_id'];
    }

    /**
     * Sets employment_internal_id
     *
     * @param string|null $employment_internal_id employment_internal_id
     *
     * @return self
     */
    public function setEmploymentInternalId($employment_internal_id)
    {
        if (is_null($employment_internal_id)) {
            throw new \InvalidArgumentException('non-nullable employment_internal_id cannot be null');
        }
        if ((mb_strlen($employment_internal_id) > 8)) {
            throw new \InvalidArgumentException('invalid length for $employment_internal_id when calling ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderPartnerTypeCreate., must be smaller than or equal to 8.');
        }

        $this->container['employment_internal_id'] = $employment_internal_id;

        return $this;
    }

    /**
     * Gets default_partner
     *
     * @return bool|null
     */
    public function getDefaultPartner()
    {
        return $this->container['default_partner'];
    }

    /**
     * Sets default_partner
     *
     * @param bool|null $default_partner default_partner
     *
     * @return self
     */
    public function setDefaultPartner($default_partner)
    {
        if (is_null($default_partner)) {
            throw new \InvalidArgumentException('non-nullable default_partner cannot be null');
        }
        $this->container['default_partner'] = $default_partner;

        return $this;
    }

    /**
     * Gets _purchase_order_tp
     *
     * @return \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderTypeCreate|null
     */
    public function _getPurchaseOrderTp()
    {
    return $this->container['_purchase_order_tp'];
    }

    /**
     * Sets _purchase_order_tp
     *
     * @param \BeLenka\SAP\PurchaseOrder\Model\ComSapGatewaySrvdA2xApiPurchaseorder2V0001PurchaseOrderTypeCreate|null $_purchase_order_tp _purchase_order_tp
     *
     * @return self
     */
    public function _setPurchaseOrderTp($_purchase_order_tp)
    {
        if (is_null($_purchase_order_tp)) {
            throw new \InvalidArgumentException('non-nullable _purchase_order_tp cannot be null');
        }
        $this->container['_purchase_order_tp'] = $_purchase_order_tp;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


