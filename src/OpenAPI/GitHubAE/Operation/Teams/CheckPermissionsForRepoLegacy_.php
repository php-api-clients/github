<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams;

final class CheckPermissionsForRepoLegacy_
{
    private const OPERATION_ID = 'teams/check-permissions-for-repo-legacy';
    /**The unique identifier of the team.**/
    private readonly int $team_id;
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $team_id, string $owner, string $repo)
    {
        $this->team_id = $team_id;
        $this->owner = $owner;
        $this->repo = $repo;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{team_id}', '{owner}', '{repo}'), array($this->team_id, $this->owner, $this->repo), '/teams/{team_id}/repos/{owner}/{repo}'));
    }
    function validateResponse()
    {
    }
}
