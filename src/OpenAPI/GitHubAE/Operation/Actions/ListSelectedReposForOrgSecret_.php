<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

final class ListSelectedReposForOrgSecret_
{
    private const OPERATION_ID = 'actions/list-selected-repos-for-org-secret';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The name of the secret.**/
    public string $secret_name;
    /**Page number of the results to fetch.**/
    public int $page;
    /**The number of results per page (max 100).**/
    public int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $secret_name, int $page = 1, int $per_page = 30)
    {
        $this->org = $org;
        $this->secret_name = $secret_name;
        $this->page = $page;
        $this->per_page = $per_page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{secret_name}', '{page}', '{per_page}'), array($this->org, $this->secret_name, $this->page, $this->per_page), '/orgs/{org}/actions/secrets/{secret_name}/repositories?page={page}&per_page={per_page}'));
    }
    function validateResponse()
    {
    }
}
