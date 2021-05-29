<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetArchiveForAuthenticatedUser
{
    private const OPERATION_ID = 'migrations/get-archive-for-authenticated-user';
    /**migration_id parameter**/
    public int $migration_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($migration_id)
    {
        $this->migration_id = $migration_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{migration_id}'], [$this->migration_id], '/user/migrations/{migration_id}/archive?'));
    }

    function validateResponse(): void
    {
    }
}
