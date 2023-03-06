<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Actions\ReviewPendingDeploymentsForRun\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["environment_ids","state","comment"],"type":"object","properties":{"environment_ids":{"type":"array","items":{"type":"integer","examples":[161171787]},"description":"The list of environment ids to approve or reject","examples":[161171787,161171795]},"state":{"enum":["approved","rejected"],"type":"string","description":"Whether to approve or reject deployment to the specified environments.","examples":["approved"]},"comment":{"type":"string","description":"A comment to accompany the deployment review","examples":["Ship it!"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"environment_ids":[161171787],"state":"approved","comment":"Ship it!"}';
    /**
     * environment_ids: The list of environment ids to approve or reject
     * @param ?array<int> $environment_ids
     * state: Whether to approve or reject deployment to the specified environments.
     * comment: A comment to accompany the deployment review
     */
    public function __construct(public ?array $environment_ids, public ?string $state, public ?string $comment)
    {
    }
}
