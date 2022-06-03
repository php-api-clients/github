<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

final class UnlockRepoForOrg_
{
    private const OPERATION_ID = 'migrations/unlock-repo-for-org';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The unique identifier of the migration.**/
    public int $migration_id;
    /**repo_name parameter**/
    public string $repo_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $migration_id, $repo_name)
    {
        $this->org = $org;
        $this->migration_id = $migration_id;
        $this->repo_name = $repo_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{migration_id}', '{repo_name}'), array($this->org, $this->migration_id, $this->repo_name), '/orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock?'));
    }
    function validateResponse()
    {
    }
}
