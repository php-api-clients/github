<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleCodeScanning
{
    public const SCHEMA_JSON         = '{
    "title": "code_scanning",
    "required": [
        "type"
    ],
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "code_scanning"
            ],
            "type": "string"
        },
        "parameters": {
            "required": [
                "code_scanning_tools"
            ],
            "type": "object",
            "properties": {
                "code_scanning_tools": {
                    "type": "array",
                    "items": {
                        "title": "CodeScanningTool",
                        "required": [
                            "alerts_threshold",
                            "security_alerts_threshold",
                            "tool"
                        ],
                        "type": "object",
                        "properties": {
                            "alerts_threshold": {
                                "enum": [
                                    "none",
                                    "errors",
                                    "errors_and_warnings",
                                    "all"
                                ],
                                "type": "string",
                                "description": "The severity level at which code scanning results that raise alerts block a reference update. For more information on alert severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                            },
                            "security_alerts_threshold": {
                                "enum": [
                                    "none",
                                    "critical",
                                    "high_or_higher",
                                    "medium_or_higher",
                                    "all"
                                ],
                                "type": "string",
                                "description": "The severity level at which code scanning results that raise security alerts block a reference update. For more information on security severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                            },
                            "tool": {
                                "type": "string",
                                "description": "The name of a code scanning tool"
                            }
                        },
                        "description": "A tool that must provide code scanning results for this rule to pass."
                    },
                    "description": "Tools that must provide code scanning results for this rule to pass."
                }
            }
        }
    },
    "description": "Choose which tools must provide code scanning results before the reference is updated. When configured, code scanning must be enabled and have results for both the commit and the reference being updated."
}';
    public const SCHEMA_TITLE        = 'code_scanning';
    public const SCHEMA_DESCRIPTION  = 'Choose which tools must provide code scanning results before the reference is updated. When configured, code scanning must be enabled and have results for both the commit and the reference being updated.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "code_scanning",
    "parameters": {
        "code_scanning_tools": [
            {
                "alerts_threshold": "all",
                "security_alerts_threshold": "none",
                "tool": "generated"
            },
            {
                "alerts_threshold": "all",
                "security_alerts_threshold": "none",
                "tool": "generated"
            }
        ]
    }
}';

    public function __construct(public string $type, public Schema\RepositoryRuleCodeScanning\Parameters|null $parameters)
    {
    }
}
