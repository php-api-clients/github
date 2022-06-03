<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps;

final class ListReposAccessibleToInstallation_
{
    private const OPERATION_ID = 'apps/list-repos-accessible-to-installation';
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $per_page = 30, int $page = 1)
    {
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{per_page}', '{page}'), array($this->per_page, $this->page), '/installation/repositories?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
