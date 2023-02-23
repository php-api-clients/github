<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Actions\ReviewPendingDeploymentsForRun\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["environment_ids","state","comment"],"type":"object","properties":{"environment_ids":{"type":"array","items":{"type":"integer","examples":[161171787]},"description":"The list of environment ids to approve or reject","examples":[161171787,161171795]},"state":{"enum":["approved","rejected"],"type":"string","description":"Whether to approve or reject deployment to the specified environments.","examples":["approved"]},"comment":{"type":"string","description":"A comment to accompany the deployment review","examples":["Ship it!"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The list of environment ids to approve or reject
     */
    public ?array $environment_ids;
    /**
     * Whether to approve or reject deployment to the specified environments.
     */
    public ?string $state;
    /**
     * A comment to accompany the deployment review
     */
    public ?string $comment;
    public function __construct(array $environment_ids, string $state, string $comment)
    {
        $this->environment_ids = $environment_ids;
        $this->state = $state;
        $this->comment = $comment;
    }
}
