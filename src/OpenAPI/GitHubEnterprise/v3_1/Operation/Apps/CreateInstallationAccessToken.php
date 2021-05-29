<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateInstallationAccessToken
{
    private const OPERATION_ID = 'apps/create-installation-access-token';
    /**installation_id parameter**/
    public int $installation_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($installation_id)
    {
        $this->installation_id = $installation_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{installation_id}'], [$this->installation_id], '/app/installations/{installation_id}/access_tokens?'));
    }

    function validateResponse(): void
    {
    }
}