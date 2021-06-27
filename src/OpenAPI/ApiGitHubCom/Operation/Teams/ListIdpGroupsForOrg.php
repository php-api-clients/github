<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

final class ListIdpGroupsForOrg
{
    private const OPERATION_ID = 'teams/list-idp-groups-for-org';
    /****/
    public string $org;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page token**/
    public string $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, int $per_page = 30, $page)
    {
        $this->org = $org;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{per_page}', '{page}'), array($this->org, $this->per_page, $this->page), '/orgs/{org}/team-sync/groups?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
