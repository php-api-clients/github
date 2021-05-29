<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class AddOrUpdateRepoPermissionsLegacy
{
    private const OPERATION_ID = 'teams/add-or-update-repo-permissions-legacy';
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
        return new Request('put', str_replace(['{team_id}', '{owner}', '{repo}'], [$this->team_id, $this->owner, $this->repo], '/teams/{team_id}/repos/{owner}/{repo}?'));
    }

    function validateResponse(): void
    {
    }
}
