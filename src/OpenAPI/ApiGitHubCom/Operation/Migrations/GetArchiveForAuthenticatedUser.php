<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

final class GetArchiveForAuthenticatedUser
{
    private const OPERATION_ID = 'migrations/get-archive-for-authenticated-user';
    /**migration_id parameter**/
    public int $migration_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($migration_id)
    {
        $this->migration_id = $migration_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{migration_id}'), array($this->migration_id), '/user/migrations/{migration_id}/archive?'));
    }
    function validateResponse()
    {
    }
}
