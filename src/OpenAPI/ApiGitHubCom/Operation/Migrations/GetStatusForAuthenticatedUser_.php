<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

final class GetStatusForAuthenticatedUser_
{
    private const OPERATION_ID = 'migrations/get-status-for-authenticated-user';
    /**The unique identifier of the migration.**/
    private readonly int $migration_id;
    private readonly array $exclude;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $migration_id, array $exclude)
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
