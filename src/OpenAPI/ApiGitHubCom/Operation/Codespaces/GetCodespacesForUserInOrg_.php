<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class GetCodespacesForUserInOrg_
{
    private const OPERATION_ID = 'codespaces/get-codespaces-for-user-in-org';
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The handle for the GitHub user account.**/
    private readonly string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $per_page = 30, int $page = 1, string $org, string $username)
    {
        $this->per_page = $per_page;
        $this->page = $page;
        $this->org = $org;
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{per_page}', '{page}', '{org}', '{username}'), array($this->per_page, $this->page, $this->org, $this->username), '/orgs/{org}/members/{username}/codespaces?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
