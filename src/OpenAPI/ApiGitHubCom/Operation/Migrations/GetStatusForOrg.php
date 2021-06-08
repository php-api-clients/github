<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetStatusForOrg
{
    private const OPERATION_ID = 'migrations/get-status-for-org';
    public string $org;
    /**migration_id parameter**/
    public int $migration_id;
    /**Exclude attributes from the API response to improve performance**/
    public array $exclude;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $migration_id, $exclude)
    {
        $this->org          = $org;
        $this->migration_id = $migration_id;
        $this->exclude      = $exclude;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{migration_id}', '{exclude}'], [$this->org, $this->migration_id, $this->exclude], '/orgs/{org}/migrations/{migration_id}?exclude={exclude}'));
    }

    function validateResponse(): void
    {
    }
}
