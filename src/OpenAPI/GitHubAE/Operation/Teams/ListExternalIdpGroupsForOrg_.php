<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams;

final class ListExternalIdpGroupsForOrg_
{
    private const OPERATION_ID = 'teams/list-external-idp-groups-for-org';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page token**/
    public int $page;
    /**Limits the list to groups containing the text in the group name**/
    public string $display_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, int $per_page = 30, $page, $display_name)
    {
        $this->org = $org;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->display_name = $display_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{per_page}', '{page}', '{display_name}'), array($this->org, $this->per_page, $this->page, $this->display_name), '/orgs/{org}/external-groups?per_page={per_page}&page={page}&display_name={display_name}'));
    }
    function validateResponse()
    {
    }
}
