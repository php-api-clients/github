<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class AddSecurityManagerTeam_
{
    private const OPERATION_ID = 'orgs/add-security-manager-team';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The slug of the team name.**/
    private readonly string $team_slug;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, string $team_slug)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{org}', '{team_slug}'), array($this->org, $this->team_slug), '/orgs/{org}/security-managers/teams/{team_slug}'));
    }
    function validateResponse()
    {
    }
}
