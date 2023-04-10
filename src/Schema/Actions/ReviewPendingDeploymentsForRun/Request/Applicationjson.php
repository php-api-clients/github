<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Actions\ReviewPendingDeploymentsForRun\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["environment_ids","state","comment"],"type":"object","properties":{"environment_ids":{"type":"array","items":{"type":"integer","examples":[161171787]},"description":"The list of environment ids to approve or reject","examples":[161171787,161171795]},"state":{"enum":["approved","rejected"],"type":"string","description":"Whether to approve or reject deployment to the specified environments.","examples":["approved"]},"comment":{"type":"string","description":"A comment to accompany the deployment review","examples":["Ship it!"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"environment_ids":[161171787],"state":"approved","comment":"Ship it!"}';
    /**
     * environmentIds: The list of environment ids to approve or reject
     * @param array<int> $environmentIds
     * state: Whether to approve or reject deployment to the specified environments.
     * comment: A comment to accompany the deployment review
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('environment_ids')] public array $environmentIds, public string $state, public string $comment)
    {
    }
}
