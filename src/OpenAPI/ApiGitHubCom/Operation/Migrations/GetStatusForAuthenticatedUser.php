<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetStatusForAuthenticatedUser
{
    private const OPERATION_ID = 'migrations/get-status-for-authenticated-user';
    /**migration_id parameter**/
    public int $migration_id;
    public array $exclude;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($migration_id, $exclude)
    {
        $this->migration_id = $migration_id;
        $this->exclude      = $exclude;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{migration_id}', '{exclude}'], [$this->migration_id, $this->exclude], '/user/migrations/{migration_id}?exclude={exclude}'));
    }

    function validateResponse(): void
    {
    }
}
