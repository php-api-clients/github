<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\BillingUsageReport;

final readonly class UsageItems
{
    public const SCHEMA_JSON         = '{
    "required": [
        "date",
        "product",
        "sku",
        "quantity",
        "unitType",
        "pricePerUnit",
        "grossAmount",
        "discountAmount",
        "netAmount",
        "organizationName"
    ],
    "type": "object",
    "properties": {
        "date": {
            "type": "string",
            "description": "Date of the usage line item."
        },
        "product": {
            "type": "string",
            "description": "Product name."
        },
        "sku": {
            "type": "string",
            "description": "SKU name."
        },
        "quantity": {
            "type": "integer",
            "description": "Quantity of the usage line item."
        },
        "unitType": {
            "type": "string",
            "description": "Unit type of the usage line item."
        },
        "pricePerUnit": {
            "type": "number",
            "description": "Price per unit of the usage line item."
        },
        "grossAmount": {
            "type": "number",
            "description": "Gross amount of the usage line item."
        },
        "discountAmount": {
            "type": "number",
            "description": "Discount amount of the usage line item."
        },
        "netAmount": {
            "type": "number",
            "description": "Net amount of the usage line item."
        },
        "organizationName": {
            "type": "string",
            "description": "Name of the organization."
        },
        "repositoryName": {
            "type": "string",
            "description": "Name of the repository."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "date": "generated",
    "product": "generated",
    "sku": "generated",
    "quantity": 8,
    "unitType": "generated",
    "pricePerUnit": 1.2,
    "grossAmount": 1.1,
    "discountAmount": 1.4,
    "netAmount": 0.9,
    "organizationName": "generated",
    "repositoryName": "generated"
}';

    /**
     * date: Date of the usage line item.
     * product: Product name.
     * sku: SKU name.
     * quantity: Quantity of the usage line item.
     * unitType: Unit type of the usage line item.
     * pricePerUnit: Price per unit of the usage line item.
     * grossAmount: Gross amount of the usage line item.
     * discountAmount: Discount amount of the usage line item.
     * netAmount: Net amount of the usage line item.
     * organizationName: Name of the organization.
     * repositoryName: Name of the repository.
     */
    public function __construct(public string $date, public string $product, public string $sku, public int $quantity, public string $unitType, public int|float $pricePerUnit, public int|float $grossAmount, public int|float $discountAmount, public int|float $netAmount, public string $organizationName, public string|null $repositoryName)
    {
    }
}
