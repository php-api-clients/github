<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetRestrictionsForOrg
{
    private const OPERATION_ID = 'interactions/get-restrictions-for-org';
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
        return new Request('get', str_replace(['{org}'], [$this->org], '/orgs/{org}/interaction-limits?'));
    }

    function validateResponse(): void
    {
    }
}
