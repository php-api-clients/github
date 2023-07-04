<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRuleRequiredDeployments
{
    public const SCHEMA_JSON         = '{"title":"required_deployments","required":["type"],"type":"object","properties":{"type":{"enum":["required_deployments"],"type":"string"},"ruleset_source_type":{"enum":["Repository","Organization"],"type":"string","description":"The type of source of the ruleset that this rule is configured in"},"ruleset_source":{"type":"string","description":"The name of the source of the ruleset that this rule is configured in"},"ruleset_id":{"type":"integer","description":"The ID of the ruleset that this rule is configured in"},"parameters":{"required":["required_deployment_environments"],"type":"object","properties":{"required_deployment_environments":{"type":"array","items":{"type":"string"},"description":"The environments that must be successfully deployed to before branches can be merged."}}}},"description":"Choose which environments must be successfully deployed to before branches can be merged into a branch that matches this rule."}';
    public const SCHEMA_TITLE        = 'required_deployments';
    public const SCHEMA_DESCRIPTION  = 'Choose which environments must be successfully deployed to before branches can be merged into a branch that matches this rule.';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"required_deployments","ruleset_source_type":"Repository","ruleset_source":"generated","ruleset_id":10,"parameters":{"required_deployment_environments":["generated","generated"]}}';

    /**
     * rulesetSourceType: The type of source of the ruleset that this rule is configured in
     * rulesetSource: The name of the source of the ruleset that this rule is configured in
     * rulesetId: The ID of the ruleset that this rule is configured in
     */
    public function __construct(public string $type, #[MapFrom('ruleset_source_type')]
    public string|null $rulesetSourceType, #[MapFrom('ruleset_source')]
    public string|null $rulesetSource, #[MapFrom('ruleset_id')]
    public int|null $rulesetId, public Schema\RepositoryRuleRequiredDeployments\Parameters|null $parameters,)
    {
    }
}
