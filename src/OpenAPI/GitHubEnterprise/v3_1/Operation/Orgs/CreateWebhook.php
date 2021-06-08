<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateWebhook
{
    private const OPERATION_ID = 'orgs/create-webhook';
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
        return new Request('post', str_replace(['{org}'], [$this->org], '/orgs/{org}/hooks?'));
    }

    function validateResponse(): void
    {
    }
}
