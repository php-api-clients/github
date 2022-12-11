<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity;

final class ListOrgEventsForAuthenticatedUser_
{
    private const OPERATION_ID = 'activity/list-org-events-for-authenticated-user';
    /**The handle for the GitHub user account.**/
    private readonly string $username;
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $username, string $org, int $per_page = 30, int $page = 1)
    {
        $this->username = $username;
        $this->org = $org;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{username}', '{org}', '{per_page}', '{page}'), array($this->username, $this->org, $this->per_page, $this->page), '/users/{username}/events/orgs/{org}?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
