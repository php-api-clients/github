<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot;

final class ListSelectedReposForOrgSecret_
{
    private const OPERATION_ID = 'dependabot/list-selected-repos-for-org-secret';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The name of the secret.**/
    private readonly string $secret_name;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, string $secret_name, int $page = 1, int $per_page = 30)
    {
        $this->org = $org;
        $this->secret_name = $secret_name;
        $this->page = $page;
        $this->per_page = $per_page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{secret_name}', '{page}', '{per_page}'), array($this->org, $this->secret_name, $this->page, $this->per_page), '/orgs/{org}/dependabot/secrets/{secret_name}/repositories?page={page}&per_page={per_page}'));
    }
    function validateResponse()
    {
    }
}
