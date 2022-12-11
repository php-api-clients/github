<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class ListMembers_
{
    private const OPERATION_ID = 'orgs/list-members';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**Filter members returned in the list. `2fa_disabled` means that only members without [two-factor authentication](https://github.com/blog/1614-two-factor-authentication) enabled will be returned. This options is only available for organization owners.**/
    private readonly string $filter;
    /**Filter members returned by their role.**/
    private readonly string $role;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, string $filter = 'all', string $role = 'all', int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->filter = $filter;
        $this->role = $role;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{filter}', '{role}', '{per_page}', '{page}'), array($this->org, $this->filter, $this->role, $this->per_page, $this->page), '/orgs/{org}/members?filter={filter}&role={role}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
