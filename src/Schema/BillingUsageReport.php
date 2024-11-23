<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class BillingUsageReport
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "usageItems": {
            "type": "array",
            "items": {
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
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "usageItems": [
        {
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
        },
        {
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
        }
    ]
}';

    public function __construct(public array|null $usageItems)
    {
    }
}
