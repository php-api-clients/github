<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRuleParamsCodeScanningThreshold
{
    public const SCHEMA_JSON         = '{
    "title": "CodeScanningThreshold",
    "required": [
        "alerts",
        "security_alerts",
        "tool"
    ],
    "type": "object",
    "properties": {
        "alerts": {
            "enum": [
                "none",
                "errors",
                "errors_and_warnings",
                "all"
            ],
            "type": "string",
            "description": "Code scanning alert threshold"
        },
        "security_alerts": {
            "enum": [
                "none",
                "critical",
                "high_or_higher",
                "medium_or_higher",
                "all"
            ],
            "type": "string",
            "description": "Code scanning security alert threshold."
        },
        "tool": {
            "type": "string",
            "description": "The name of a code scanning tool"
        }
    },
    "description": "A tool and its thresholds."
}';
    public const SCHEMA_TITLE        = 'CodeScanningThreshold';
    public const SCHEMA_DESCRIPTION  = 'A tool and its thresholds.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "alerts": "all",
    "security_alerts": "none",
    "tool": "generated"
}';

    /**
     * alerts: Code scanning alert threshold
     * securityAlerts: Code scanning security alert threshold.
     * tool: The name of a code scanning tool
     */
    public function __construct(public string $alerts, #[MapFrom('security_alerts')]
    public string $securityAlerts, public string $tool,)
    {
    }
}
