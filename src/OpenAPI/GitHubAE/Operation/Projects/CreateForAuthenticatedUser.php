<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateForAuthenticatedUser
{
    private const OPERATION_ID = 'projects/create-for-authenticated-user';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace([], [], '/user/projects?'));
    }

    function validateResponse(): void
    {
    }
}
