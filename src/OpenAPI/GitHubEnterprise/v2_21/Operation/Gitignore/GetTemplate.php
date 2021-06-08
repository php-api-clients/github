<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Gitignore;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetTemplate
{
    private const OPERATION_ID = 'gitignore/get-template';
    public string $name;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($name)
    {
        $this->name = $name;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{name}'], [$this->name], '/gitignore/templates/{name}?'));
    }

    function validateResponse(): void
    {
    }
}
