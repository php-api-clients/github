<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleRequiredDeployments
{
    public const SCHEMA_JSON         = '{"title":"required_deployments","required":["type"],"type":"object","properties":{"type":{"enum":["required_deployments"],"type":"string"},"parameters":{"required":["required_deployment_environments"],"type":"object","properties":{"required_deployment_environments":{"type":"array","items":{"type":"string"},"description":"The environments that must be successfully deployed to before branches can be merged."}}}},"description":"Parameters to be used for the required_deployments rule"}';
    public const SCHEMA_TITLE        = 'required_deployments';
    public const SCHEMA_DESCRIPTION  = 'Parameters to be used for the required_deployments rule';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"required_deployments","parameters":{"required_deployment_environments":["generated_required_deployment_environments_null"]}}';

    public function __construct(public string $type, public ?Schema\RepositoryRuleRequiredDeployments\Parameters $parameters)
    {
    }
}
