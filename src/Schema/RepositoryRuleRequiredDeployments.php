<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleRequiredDeployments
{
    public const SCHEMA_JSON         = '{
    "title": "required_deployments",
    "required": [
        "type"
    ],
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "required_deployments"
            ],
            "type": "string"
        },
        "parameters": {
            "required": [
                "required_deployment_environments"
            ],
            "type": "object",
            "properties": {
                "required_deployment_environments": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "The environments that must be successfully deployed to before branches can be merged."
                }
            }
        }
    },
    "description": "Choose which environments must be successfully deployed to before refs can be pushed into a ref that matches this rule."
}';
    public const SCHEMA_TITLE        = 'required_deployments';
    public const SCHEMA_DESCRIPTION  = 'Choose which environments must be successfully deployed to before refs can be pushed into a ref that matches this rule.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "required_deployments",
    "parameters": {
        "required_deployment_environments": [
            "generated",
            "generated"
        ]
    }
}';

    public function __construct(public string $type, public Schema\RepositoryRuleRequiredDeployments\Parameters|null $parameters)
    {
    }
}
