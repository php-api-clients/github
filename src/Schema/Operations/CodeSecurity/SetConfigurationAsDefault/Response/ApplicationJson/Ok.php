<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\CodeSecurity\SetConfigurationAsDefault\Response\ApplicationJson;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "default_for_new_repos": {
            "enum": [
                "all",
                "none",
                "private_and_internal",
                "public"
            ],
            "type": "string",
            "description": "Specifies which types of repository this security configuration is applied to by default."
        },
        "configuration": {
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
                        "organization",
                        "enterprise"
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
                "dependency_graph_autosubmit_action": {
                    "enum": [
                        "enabled",
                        "disabled",
                        "not_set"
                    ],
                    "type": "string",
                    "description": "The enablement status of Automatic dependency submission"
                },
                "dependency_graph_autosubmit_action_options": {
                    "type": "object",
                    "properties": {
                        "labeled_runners": {
                            "type": "boolean",
                            "description": "Whether to use runners labeled with \'dependency-submission\' or standard GitHub runners."
                        }
                    },
                    "description": "Feature options for Automatic dependency submission"
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
                "secret_scanning_non_provider_patterns": {
                    "enum": [
                        "enabled",
                        "disabled",
                        "not_set"
                    ],
                    "type": "string",
                    "description": "The enablement status of secret scanning non-provider patterns"
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
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "default_for_new_repos": "all",
    "configuration": {
        "id": 2,
        "name": "generated",
        "target_type": "global",
        "description": "generated",
        "advanced_security": "enabled",
        "dependency_graph": "not_set",
        "dependency_graph_autosubmit_action": "not_set",
        "dependency_graph_autosubmit_action_options": {
            "labeled_runners": false
        },
        "dependabot_alerts": "enabled",
        "dependabot_security_updates": "enabled",
        "code_scanning_default_setup": "enabled",
        "secret_scanning": "enabled",
        "secret_scanning_push_protection": "enabled",
        "secret_scanning_validity_checks": "enabled",
        "secret_scanning_non_provider_patterns": "enabled",
        "private_vulnerability_reporting": "enabled",
        "enforcement": "enforced",
        "url": "https:\\/\\/example.com\\/",
        "html_url": "https:\\/\\/example.com\\/",
        "created_at": "1970-01-01T00:00:00+00:00",
        "updated_at": "1970-01-01T00:00:00+00:00"
    }
}';

    /**
     * defaultForNewRepos: Specifies which types of repository this security configuration is applied to by default.
     * configuration: A code security configuration
     */
    public function __construct(#[MapFrom('default_for_new_repos')]
    public string|null $defaultForNewRepos, public Schema\CodeSecurityConfiguration|null $configuration,)
    {
    }
}
