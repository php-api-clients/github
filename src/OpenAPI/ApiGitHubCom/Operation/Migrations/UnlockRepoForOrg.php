<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class UnlockRepoForOrg
{
    private const OPERATION_ID = 'migrations/unlock-repo-for-org';
    public string $org;
    /**migration_id parameter**/
    public int $migration_id;
    /**repo_name parameter**/
    public string $repo_name;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $migration_id, $repo_name)
    {
        $this->org          = $org;
        $this->migration_id = $migration_id;
        $this->repo_name    = $repo_name;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{org}', '{migration_id}', '{repo_name}'], [$this->org, $this->migration_id, $this->repo_name], '/orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock?'));
    }

    function validateResponse(): void
    {
    }
}
