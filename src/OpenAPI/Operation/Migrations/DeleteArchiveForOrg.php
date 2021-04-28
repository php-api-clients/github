<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Migrations;

final class DeleteArchiveForOrg
{
    private const OPERATION_ID = 'migrations/delete-archive-for-org';
    /****/
    public string $org;
    /**migration_id parameter**/
    public int $migration_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $migration_id)
    {
        $this->org = $org;
        $this->migration_id = $migration_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{migration_id}'), array($this->org, $this->migration_id), '/orgs/{org}/migrations/{migration_id}/archive?'));
    }
    function validateResponse()
    {
    }
}
