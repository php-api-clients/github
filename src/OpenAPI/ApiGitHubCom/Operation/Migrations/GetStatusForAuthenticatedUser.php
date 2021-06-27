<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

final class GetStatusForAuthenticatedUser
{
    private const OPERATION_ID = 'migrations/get-status-for-authenticated-user';
    /**migration_id parameter**/
    public int $migration_id;
    /****/
    public array $exclude;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($migration_id, $exclude)
    {
        $this->migration_id = $migration_id;
        $this->exclude = $exclude;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{migration_id}', '{exclude}'), array($this->migration_id, $this->exclude), '/user/migrations/{migration_id}?exclude={exclude}'));
    }
    function validateResponse()
    {
    }
}
