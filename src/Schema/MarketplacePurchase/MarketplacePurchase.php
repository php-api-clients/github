<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\MarketplacePurchase;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class MarketplacePurchase
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "billing_cycle": {
            "type": "string"
        },
        "next_billing_date": {
            "type": [
                "string",
                "null"
            ]
        },
        "is_installed": {
            "type": "boolean"
        },
        "unit_count": {
            "type": [
                "integer",
                "null"
            ]
        },
        "on_free_trial": {
            "type": "boolean"
        },
        "free_trial_ends_on": {
            "type": [
                "string",
                "null"
            ]
        },
        "updated_at": {
            "type": "string"
        },
        "plan": {
            "title": "Marketplace Listing Plan",
            "required": [
                "url",
                "accounts_url",
                "id",
                "number",
                "name",
                "description",
                "has_free_trial",
                "price_model",
                "unit_name",
                "monthly_price_in_cents",
                "state",
                "yearly_price_in_cents",
                "bullets"
            ],
            "type": "object",
            "properties": {
                "url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313"
                    ]
                },
                "accounts_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts"
                    ]
                },
                "id": {
                    "type": "integer",
                    "examples": [
                        1313
                    ]
                },
                "number": {
                    "type": "integer",
                    "examples": [
                        3
                    ]
                },
                "name": {
                    "type": "string",
                    "examples": [
                        "Pro"
                    ]
                },
                "description": {
                    "type": "string",
                    "examples": [
                        "A professional-grade CI solution"
                    ]
                },
                "monthly_price_in_cents": {
                    "type": "integer",
                    "examples": [
                        1099
                    ]
                },
                "yearly_price_in_cents": {
                    "type": "integer",
                    "examples": [
                        11870
                    ]
                },
                "price_model": {
                    "enum": [
                        "FREE",
                        "FLAT_RATE",
                        "PER_UNIT"
                    ],
                    "type": "string",
                    "examples": [
                        "FLAT_RATE"
                    ]
                },
                "has_free_trial": {
                    "type": "boolean",
                    "examples": [
                        true
                    ]
                },
                "unit_name": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "state": {
                    "type": "string",
                    "examples": [
                        "published"
                    ]
                },
                "bullets": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "examples": [
                        "Up to 25 private repositories",
                        "11 concurrent builds"
                    ]
                }
            },
            "description": "Marketplace Listing Plan"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "billing_cycle": "generated",
    "next_billing_date": "generated",
    "is_installed": false,
    "unit_count": 10,
    "on_free_trial": false,
    "free_trial_ends_on": "generated",
    "updated_at": "generated",
    "plan": {
        "url": "https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313",
        "accounts_url": "https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts",
        "id": 1313,
        "number": 3,
        "name": "Pro",
        "description": "A professional-grade CI solution",
        "monthly_price_in_cents": 1099,
        "yearly_price_in_cents": 11870,
        "price_model": "FLAT_RATE",
        "has_free_trial": true,
        "unit_name": "generated",
        "state": "published",
        "bullets": [
            "Up to 25 private repositories",
            "Up to 25 private repositories"
        ]
    }
}';

    /**
     * plan: Marketplace Listing Plan
     */
    public function __construct(#[MapFrom('billing_cycle')]
    public string|null $billingCycle, #[MapFrom('next_billing_date')]
    public string|null $nextBillingDate, #[MapFrom('is_installed')]
    public bool|null $isInstalled, #[MapFrom('unit_count')]
    public int|null $unitCount, #[MapFrom('on_free_trial')]
    public bool|null $onFreeTrial, #[MapFrom('free_trial_ends_on')]
    public string|null $freeTrialEndsOn, #[MapFrom('updated_at')]
    public string|null $updatedAt, public Schema\MarketplaceListingPlan|null $plan,)
    {
    }
}
