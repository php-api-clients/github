<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class ListForAuthenticatedUser
{
    private const OPERATION_ID = 'codespaces/list-for-authenticated-user';
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    /**ID of the Repository to filter on**/
    public int $repository_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $per_page = 30, int $page = 1, $repository_id)
    {
        $this->per_page = $per_page;
        $this->page = $page;
        $this->repository_id = $repository_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{per_page}', '{page}', '{repository_id}'), array($this->per_page, $this->page, $this->repository_id), '/user/codespaces?per_page={per_page}&page={page}&repository_id={repository_id}'));
    }
    function validateResponse()
    {
    }
}
