<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps;

final class ListInstallationReposForAuthenticatedUser_
{
    private const OPERATION_ID = 'apps/list-installation-repos-for-authenticated-user';
    /**The unique identifier of the installation.**/
    private readonly int $installation_id;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $installation_id, int $per_page = 30, int $page = 1)
    {
        $this->installation_id = $installation_id;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{installation_id}', '{per_page}', '{page}'), array($this->installation_id, $this->per_page, $this->page), '/user/installations/{installation_id}/repositories?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
