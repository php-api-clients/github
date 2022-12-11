<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

final class ListReposForOrg_
{
    private const OPERATION_ID = 'migrations/list-repos-for-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The unique identifier of the migration.**/
    private readonly int $migration_id;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, int $migration_id, int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->migration_id = $migration_id;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{migration_id}', '{per_page}', '{page}'), array($this->org, $this->migration_id, $this->per_page, $this->page), '/orgs/{org}/migrations/{migration_id}/repositories?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
