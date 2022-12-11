<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

final class UnlockRepoForAuthenticatedUser_
{
    private const OPERATION_ID = 'migrations/unlock-repo-for-authenticated-user';
    /**The unique identifier of the migration.**/
    private readonly int $migration_id;
    /**repo_name parameter**/
    private readonly string $repo_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $migration_id, string $repo_name)
    {
        $this->migration_id = $migration_id;
        $this->repo_name = $repo_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{migration_id}', '{repo_name}'), array($this->migration_id, $this->repo_name), '/user/migrations/{migration_id}/repos/{repo_name}/lock'));
    }
    function validateResponse()
    {
    }
}
