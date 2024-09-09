<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

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
        "security_severity_level": {
            "enum": [
                "low",
                "medium",
                "high",
                "critical",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "The security severity of the alert."
        },
        "description": {
            "type": "string",
            "description": "A short description of the rule used to detect the alert."
        },
        "full_description": {
            "type": "string",
            "description": "A description of the rule used to detect the alert."
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
        "help": {
            "type": [
                "string",
                "null"
            ],
            "description": "Detailed documentation for the rule as GitHub Flavored Markdown."
        },
        "help_uri": {
            "type": [
                "string",
                "null"
            ],
            "description": "A link to the documentation for the rule used to detect the alert."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": "generated",
    "name": "generated",
    "severity": "error",
    "security_severity_level": "low",
    "description": "generated",
    "full_description": "generated",
    "tags": null,
    "help": "generated",
    "help_uri": "generated"
}';

    /**
     * id: A unique identifier for the rule used to detect the alert.
     * name: The name of the rule used to detect the alert.
     * severity: The severity of the alert.
     * securitySeverityLevel: The security severity of the alert.
     * description: A short description of the rule used to detect the alert.
     * fullDescription: A description of the rule used to detect the alert.
     * tags: A set of tags applicable for the rule.
     * help: Detailed documentation for the rule as GitHub Flavored Markdown.
     * helpUri: A link to the documentation for the rule used to detect the alert.
     */
    public function __construct(public string|null $id, public string|null $name, public string|null $severity, #[MapFrom('security_severity_level')]
    public string|null $securitySeverityLevel, public string|null $description, #[MapFrom('full_description')]
    public string|null $fullDescription, public array|null $tags, public string|null $help, #[MapFrom('help_uri')]
    public string|null $helpUri,)
    {
    }
}
