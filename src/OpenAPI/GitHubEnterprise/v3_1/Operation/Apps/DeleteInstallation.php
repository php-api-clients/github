<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteInstallation
{
    private const OPERATION_ID = 'apps/delete-installation';
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
        return new Request('delete', str_replace(['{installation_id}'], [$this->installation_id], '/app/installations/{installation_id}?'));
    }

    function validateResponse(): void
    {
    }
}
