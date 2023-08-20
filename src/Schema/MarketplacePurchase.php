<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class MarketplacePurchase
{
    public const SCHEMA_JSON         = '{
    "title": "Marketplace Purchase",
    "required": [
        "url",
        "id",
        "type",
        "login",
        "marketplace_purchase"
    ],
    "type": "object",
    "properties": {
        "url": {
            "type": "string"
        },
        "type": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "login": {
            "type": "string"
        },
        "organization_billing_email": {
            "type": "string"
        },
        "email": {
            "type": [
                "string",
                "null"
            ]
        },
        "marketplace_pending_change": {
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "is_installed": {
                    "type": "boolean"
                },
                "effective_date": {
                    "type": "string"
                },
                "unit_count": {
                    "type": [
                        "integer",
                        "null"
                    ]
                },
                "id": {
                    "type": "integer"
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
        },
        "marketplace_purchase": {
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
        }
    },
    "description": "Marketplace Purchase"
}';
    public const SCHEMA_TITLE        = 'Marketplace Purchase';
    public const SCHEMA_DESCRIPTION  = 'Marketplace Purchase';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "generated",
    "type": "generated",
    "id": 2,
    "login": "generated",
    "organization_billing_email": "generated",
    "email": "generated",
    "marketplace_pending_change": {
        "is_installed": false,
        "effective_date": "generated",
        "unit_count": 10,
        "id": 2,
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
    },
    "marketplace_purchase": {
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
    }
}';

    public function __construct(public string $url, public string $type, public int $id, public string $login, #[MapFrom('organization_billing_email')]
    public string|null $organizationBillingEmail, public string|null $email, #[MapFrom('marketplace_pending_change')]
    public Schema\MarketplacePurchase\MarketplacePendingChange|null $marketplacePendingChange, #[MapFrom('marketplace_purchase')]
    public Schema\MarketplacePurchase\MarketplacePurchase $marketplacePurchase,)
    {
    }
}
