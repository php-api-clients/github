<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams;

final class AddOrUpdateRepoPermissions_
{
    private const OPERATION_ID = 'teams/add-or-update-repo-permissions';
    /****/
    public int $team_id;
    /****/
    public string $owner;
    /****/
    public string $repo;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($team_id, $owner, $repo)
    {
        $this->team_id = $team_id;
        $this->owner = $owner;
        $this->repo = $repo;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{team_id}', '{owner}', '{repo}'), array($this->team_id, $this->owner, $this->repo), '/teams/{team_id}/repos/{owner}/{repo}?'));
    }
    function validateResponse()
    {
    }
}
