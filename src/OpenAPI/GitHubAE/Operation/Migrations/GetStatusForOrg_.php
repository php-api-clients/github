<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations;

final class GetStatusForOrg_
{
    private const OPERATION_ID = 'migrations/get-status-for-org';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The unique identifier of the migration.**/
    public int $migration_id;
    /**Exclude attributes from the API response to improve performance**/
    public array $exclude;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $migration_id, $exclude)
    {
        $this->org = $org;
        $this->migration_id = $migration_id;
        $this->exclude = $exclude;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{migration_id}', '{exclude}'), array($this->org, $this->migration_id, $this->exclude), '/orgs/{org}/migrations/{migration_id}?exclude={exclude}'));
    }
    function validateResponse()
    {
    }
}
