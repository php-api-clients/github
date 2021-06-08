<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListReposForOrg
{
    private const OPERATION_ID = 'migrations/list-repos-for-org';
    public string $org;
    /**migration_id parameter**/
    public int $migration_id;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $migration_id, int $per_page = 30, int $page = 1)
    {
        $this->org          = $org;
        $this->migration_id = $migration_id;
        $this->per_page     = $per_page;
        $this->page         = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{migration_id}', '{per_page}', '{page}'], [$this->org, $this->migration_id, $this->per_page, $this->page], '/orgs/{org}/migrations/{migration_id}/repositories?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
