<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps;

final class ListInstallationReposForAuthenticatedUser_
{
    private const OPERATION_ID = 'apps/list-installation-repos-for-authenticated-user';
    /**This API is under preview and subject to change.**/
    public string $accept;
    /**installation_id parameter**/
    public int $installation_id;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id, int $per_page = 30, int $page = 1)
    {
        $this->accept = $accept;
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
