<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleRequiredDeployments;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Parameters
{
    public const SCHEMA_JSON         = '{"required":["required_deployment_environments"],"type":"object","properties":{"required_deployment_environments":{"type":"array","items":{"type":"string"},"description":"The environments that must be successfully deployed to before branches can be merged."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"required_deployment_environments":["generated","generated"]}';

    /**
     * requiredDeploymentEnvironments: The environments that must be successfully deployed to before branches can be merged.
     */
    public function __construct(#[MapFrom('required_deployment_environments')] public array $requiredDeploymentEnvironments)
    {
    }
}
