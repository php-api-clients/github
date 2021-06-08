<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Gitignore;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetAllTemplates
{
    private const OPERATION_ID = 'gitignore/get-all-templates';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace([], [], '/gitignore/templates?'));
    }

    function validateResponse(): void
    {
    }
}
