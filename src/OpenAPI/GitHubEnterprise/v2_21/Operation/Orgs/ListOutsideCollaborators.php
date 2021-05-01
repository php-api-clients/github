<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Orgs;

final class ListOutsideCollaborators
{
    private const OPERATION_ID = 'orgs/list-outside-collaborators';
    /****/
    public string $org;
    /**Filter the list of outside collaborators. Can be one of:  
    \* `2fa_disabled`: Outside collaborators without [two-factor authentication](https://github.com/blog/1614-two-factor-authentication) enabled.  
    \* `all`: All outside collaborators.**/
    public string $filter;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, string $filter = 'all', int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->filter = $filter;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{filter}', '{per_page}', '{page}'), array($this->org, $this->filter, $this->per_page, $this->page), '/orgs/{org}/outside_collaborators?filter={filter}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
