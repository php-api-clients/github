<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleCodeScanning;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Parameters
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
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
}';

    /**
     * codeScanningTools: Tools that must provide code scanning results for this rule to pass.
     */
    public function __construct(#[MapFrom('code_scanning_tools')]
    public array $codeScanningTools,)
    {
    }
}
