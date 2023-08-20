<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CodeScanningAlertRuleSummary
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": [
                "string",
                "null"
            ],
            "description": "A unique identifier for the rule used to detect the alert."
        },
        "name": {
            "type": "string",
            "description": "The name of the rule used to detect the alert."
        },
        "tags": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "type": "string"
            },
            "description": "A set of tags applicable for the rule."
        },
        "severity": {
            "enum": [
                "none",
                "note",
                "warning",
                "error",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "The severity of the alert."
        },
        "description": {
            "type": "string",
            "description": "A short description of the rule used to detect the alert."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": "generated",
    "name": "generated",
    "tags": null,
    "severity": "error",
    "description": "generated"
}';

    /**
     * id: A unique identifier for the rule used to detect the alert.
     * name: The name of the rule used to detect the alert.
     * tags: A set of tags applicable for the rule.
     * severity: The severity of the alert.
     * description: A short description of the rule used to detect the alert.
     */
    public function __construct(public string|null $id, public string|null $name, public array|null $tags, public string|null $severity, public string|null $description)
    {
    }
}
