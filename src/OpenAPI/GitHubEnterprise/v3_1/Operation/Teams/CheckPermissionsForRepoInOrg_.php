<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams;

final class CheckPermissionsForRepoInOrg_
{
    private const OPERATION_ID = 'teams/check-permissions-for-repo-in-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The slug of the team name.**/
    private readonly string $team_slug;
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, string $team_slug, string $owner, string $repo)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->owner = $owner;
        $this->repo = $repo;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{team_slug}', '{owner}', '{repo}'), array($this->org, $this->team_slug, $this->owner, $this->repo), '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}'));
    }
    function validateResponse()
    {
    }
}
