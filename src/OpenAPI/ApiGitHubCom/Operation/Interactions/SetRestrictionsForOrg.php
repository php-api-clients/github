<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class SetRestrictionsForOrg
{
    private const OPERATION_ID = 'interactions/set-restrictions-for-org';
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
        return new Request('put', str_replace(['{org}'], [$this->org], '/orgs/{org}/interaction-limits?'));
    }

    function validateResponse(): void
    {
    }
}
