<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Migrations;

final class ListReposForUser
{
    private const OPERATION_ID = 'migrations/list-repos-for-user';
    /**migration_id parameter**/
    public int $migration_id;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($migration_id, int $per_page = 30, int $page = 1)
    {
        $this->migration_id = $migration_id;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{migration_id}', '{per_page}', '{page}'), array($this->migration_id, $this->per_page, $this->page), '/user/migrations/{migration_id}/repositories?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
