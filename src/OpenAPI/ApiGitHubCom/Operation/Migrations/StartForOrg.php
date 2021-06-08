<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class StartForOrg
{
    private const OPERATION_ID = 'migrations/start-for-org';
    public string $org;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org)
    {
        $this->org = $org;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{org}'], [$this->org], '/orgs/{org}/migrations?'));
    }

    function validateResponse(): void
    {
    }
}
