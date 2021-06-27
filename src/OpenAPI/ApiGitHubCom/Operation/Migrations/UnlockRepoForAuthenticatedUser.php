<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

final class UnlockRepoForAuthenticatedUser
{
    private const OPERATION_ID = 'migrations/unlock-repo-for-authenticated-user';
    /**migration_id parameter**/
    public int $migration_id;
    /**repo_name parameter**/
    public string $repo_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($migration_id, $repo_name)
    {
        $this->migration_id = $migration_id;
        $this->repo_name = $repo_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{migration_id}', '{repo_name}'), array($this->migration_id, $this->repo_name), '/user/migrations/{migration_id}/repos/{repo_name}/lock?'));
    }
    function validateResponse()
    {
    }
}
