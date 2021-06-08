<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveRestrictionsForOrg
{
    private const OPERATION_ID = 'interactions/remove-restrictions-for-org';
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
        return new Request('delete', str_replace(['{org}'], [$this->org], '/orgs/{org}/interaction-limits?'));
    }

    function validateResponse(): void
    {
    }
}
