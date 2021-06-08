<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteArchiveForOrg
{
    private const OPERATION_ID = 'migrations/delete-archive-for-org';
    public string $org;
    /**migration_id parameter**/
    public int $migration_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $migration_id)
    {
        $this->org          = $org;
        $this->migration_id = $migration_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{org}', '{migration_id}'], [$this->org, $this->migration_id], '/orgs/{org}/migrations/{migration_id}/archive?'));
    }

    function validateResponse(): void
    {
    }
}
