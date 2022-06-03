<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams;

final class DeleteInOrg_
{
    private const OPERATION_ID = 'teams/delete-in-org';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The slug of the team name.**/
    public string $team_slug;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $team_slug)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{team_slug}'), array($this->org, $this->team_slug), '/orgs/{org}/teams/{team_slug}?'));
    }
    function validateResponse()
    {
    }
}
