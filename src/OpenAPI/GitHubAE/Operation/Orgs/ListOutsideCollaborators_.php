<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs;

final class ListOutsideCollaborators_
{
    private const OPERATION_ID = 'orgs/list-outside-collaborators';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**Filter the list of outside collaborators. `2fa_disabled` means that only outside collaborators without [two-factor authentication](https://github.com/blog/1614-two-factor-authentication) enabled will be returned.**/
    public string $filter;
    /**The number of results per page (max 100).**/
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
