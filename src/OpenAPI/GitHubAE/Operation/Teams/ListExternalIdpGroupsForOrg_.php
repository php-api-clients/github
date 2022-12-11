<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams;

final class ListExternalIdpGroupsForOrg_
{
    private const OPERATION_ID = 'teams/list-external-idp-groups-for-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page token**/
    private readonly int $page;
    /**Limits the list to groups containing the text in the group name**/
    private readonly string $display_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, int $per_page = 30, int $page, string $display_name)
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
