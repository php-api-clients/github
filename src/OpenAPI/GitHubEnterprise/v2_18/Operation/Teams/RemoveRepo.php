<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveRepo
{
    private const OPERATION_ID = 'teams/remove-repo';
    public int $team_id;
    public string $owner;
    public string $repo;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($team_id, $owner, $repo)
    {
        $this->team_id = $team_id;
        $this->owner   = $owner;
        $this->repo    = $repo;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{team_id}', '{owner}', '{repo}'], [$this->team_id, $this->owner, $this->repo], '/teams/{team_id}/repos/{owner}/{repo}?'));
    }

    function validateResponse(): void
    {
    }
}
