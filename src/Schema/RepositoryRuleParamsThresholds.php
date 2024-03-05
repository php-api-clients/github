<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRuleParamsThresholds
{
    public const SCHEMA_JSON         = '{
    "title": "Thresholds",
    "required": [
        "code_scanning_alert_threshold",
        "code_scanning_security_alert_threshold"
    ],
    "type": "object",
    "properties": {
        "code_scanning_alert_threshold": {
            "enum": [
                "none",
                "errors",
                "errors_and_warnings",
                "all"
            ],
            "type": "string",
            "description": "Code scanning alert threshold"
        },
        "code_scanning_security_alert_threshold": {
            "enum": [
                "none",
                "critical",
                "high_or_higher",
                "medium_or_higher",
                "all"
            ],
            "type": "string",
            "description": "Code scanning security alert threshold."
        }
    },
    "description": "This setting will not take effect unless at least one code scanning status check is enabled."
}';
    public const SCHEMA_TITLE        = 'Thresholds';
    public const SCHEMA_DESCRIPTION  = 'This setting will not take effect unless at least one code scanning status check is enabled.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "code_scanning_alert_threshold": "none",
    "code_scanning_security_alert_threshold": "all"
}';

    /**
     * codeScanningAlertThreshold: Code scanning alert threshold
     * codeScanningSecurityAlertThreshold: Code scanning security alert threshold.
     */
    public function __construct(#[MapFrom('code_scanning_alert_threshold')]
    public string $codeScanningAlertThreshold, #[MapFrom('code_scanning_security_alert_threshold')]
    public string $codeScanningSecurityAlertThreshold,)
    {
    }
}
