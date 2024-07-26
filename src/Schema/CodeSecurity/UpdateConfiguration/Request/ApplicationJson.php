<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CodeSecurity\UpdateConfiguration\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the code security configuration. Must be unique within the organization."
        },
        "description": {
            "maxLength": 255,
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
        }
    },
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
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
    "enforcement": "enforced"
}';

    /**
     * name: The name of the code security configuration. Must be unique within the organization.
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
     */
    public function __construct(public string|null $name, public string|null $description, #[MapFrom('advanced_security')]
    public string|null $advancedSecurity, #[MapFrom('dependency_graph')]
    public string|null $dependencyGraph, #[MapFrom('dependabot_alerts')]
    public string|null $dependabotAlerts, #[MapFrom('dependabot_security_updates')]
    public string|null $dependabotSecurityUpdates, #[MapFrom('code_scanning_default_setup')]
    public string|null $codeScanningDefaultSetup, #[MapFrom('secret_scanning')]
    public string|null $secretScanning, #[MapFrom('secret_scanning_push_protection')]
    public string|null $secretScanningPushProtection, #[MapFrom('secret_scanning_validity_checks')]
    public string|null $secretScanningValidityChecks, #[MapFrom('private_vulnerability_reporting')]
    public string|null $privateVulnerabilityReporting, public string|null $enforcement,)
    {
    }
}
