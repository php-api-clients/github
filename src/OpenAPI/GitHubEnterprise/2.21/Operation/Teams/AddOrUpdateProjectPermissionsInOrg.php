<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Teams;

final class AddOrUpdateProjectPermissionsInOrg
{
    private const OPERATION_ID = 'teams/add-or-update-project-permissions-in-org';
    /****/
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    /****/
    public int $project_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $team_slug, $project_id)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->project_id = $project_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{org}', '{team_slug}', '{project_id}'), array($this->org, $this->team_slug, $this->project_id), '/orgs/{org}/teams/{team_slug}/projects/{project_id}?'));
    }
    function validateResponse()
    {
    }
}
