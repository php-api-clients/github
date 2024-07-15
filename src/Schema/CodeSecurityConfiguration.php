<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeSecurityConfiguration
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "The ID of the code security configuration"
        },
        "name": {
            "type": "string",
            "description": "The name of the code security configuration. Must be unique within the organization."
        },
        "target_type": {
            "enum": [
                "global",
                "organization"
            ],
            "type": "string",
            "description": "The type of the code security configuration."
        },
        "description": {
            "type": "string",
            "description": "A description of the code security configuration"
        },
        "advanced_security": {
            "enum": [
                "enabled",
                "disabled"
            ],
            "type": "string",
            "description": "The enablement status of GitHub Advanced Security"
        },
        "dependency_graph": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of Dependency Graph"
        },
        "dependabot_alerts": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of Dependabot alerts"
        },
        "dependabot_security_updates": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of Dependabot security updates"
        },
        "code_scanning_default_setup": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of code scanning default setup"
        },
        "secret_scanning": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of secret scanning"
        },
        "secret_scanning_push_protection": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of secret scanning push protection"
        },
        "secret_scanning_validity_checks": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of secret scanning validity checks"
        },
        "private_vulnerability_reporting": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of private vulnerability reporting"
        },
        "enforcement": {
            "enum": [
                "enforced",
                "unenforced"
            ],
            "type": "string",
            "description": "The enforcement status for a security configuration"
        },
        "url": {
            "type": "string",
            "description": "The URL of the configuration",
            "format": "uri"
        },
        "html_url": {
            "type": "string",
            "description": "The URL of the configuration",
            "format": "uri"
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        }
    },
    "description": "A code security configuration"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'A code security configuration';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "name": "generated",
    "target_type": "global",
    "description": "generated",
    "advanced_security": "enabled",
    "dependency_graph": "not_set",
    "dependabot_alerts": "enabled",
    "dependabot_security_updates": "enabled",
    "code_scanning_default_setup": "enabled",
    "secret_scanning": "enabled",
    "secret_scanning_push_protection": "enabled",
    "secret_scanning_validity_checks": "enabled",
    "private_vulnerability_reporting": "enabled",
    "enforcement": "enforced",
    "url": "https:\\/\\/example.com\\/",
    "html_url": "https:\\/\\/example.com\\/",
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * id: The ID of the code security configuration
     * name: The name of the code security configuration. Must be unique within the organization.
     * targetType: The type of the code security configuration.
     * description: A description of the code security configuration
     * advancedSecurity: The enablement status of GitHub Advanced Security
     * dependencyGraph: The enablement status of Dependency Graph
     * dependabotAlerts: The enablement status of Dependabot alerts
     * dependabotSecurityUpdates: The enablement status of Dependabot security updates
     * codeScanningDefaultSetup: The enablement status of code scanning default setup
     * secretScanning: The enablement status of secret scanning
     * secretScanningPushProtection: The enablement status of secret scanning push protection
     * secretScanningValidityChecks: The enablement status of secret scanning validity checks
     * privateVulnerabilityReporting: The enablement status of private vulnerability reporting
     * enforcement: The enforcement status for a security configuration
     * url: The URL of the configuration
     * htmlUrl: The URL of the configuration
     */
    public function __construct(public int|null $id, public string|null $name, #[MapFrom('target_type')]
    public string|null $targetType, public string|null $description, #[MapFrom('advanced_security')]
    public string|null $advancedSecurity, #[MapFrom('dependency_graph')]
    public string|null $dependencyGraph, #[MapFrom('dependabot_alerts')]
    public string|null $dependabotAlerts, #[MapFrom('dependabot_security_updates')]
    public string|null $dependabotSecurityUpdates, #[MapFrom('code_scanning_default_setup')]
    public string|null $codeScanningDefaultSetup, #[MapFrom('secret_scanning')]
    public string|null $secretScanning, #[MapFrom('secret_scanning_push_protection')]
    public string|null $secretScanningPushProtection, #[MapFrom('secret_scanning_validity_checks')]
    public string|null $secretScanningValidityChecks, #[MapFrom('private_vulnerability_reporting')]
    public string|null $privateVulnerabilityReporting, public string|null $enforcement, public string|null $url, #[MapFrom('html_url')]
    public string|null $htmlUrl, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('updated_at')]
    public string|null $updatedAt,)
    {
    }
}
