<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetBySlug
{
    private const OPERATION_ID = 'apps/get-by-slug';
    public string $app_slug;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($app_slug)
    {
        $this->app_slug = $app_slug;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{app_slug}'], [$this->app_slug], '/apps/{app_slug}?'));
    }

    function validateResponse(): void
    {
    }
}
