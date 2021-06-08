<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetUserInstallation
{
    private const OPERATION_ID = 'apps/get-user-installation';
    /**This API is under preview and subject to change.**/
    public string $accept;
    public string $username;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct(string $accept = 'application/vnd.github.machine-man-preview+json', $username)
    {
        $this->accept   = $accept;
        $this->username = $username;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{username}'], [$this->username], '/users/{username}/installation?'));
    }

    function validateResponse(): void
    {
    }
}
