<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class AddRepoToInstallation
{
    private const OPERATION_ID = 'apps/add-repo-to-installation';
    /**installation_id parameter**/
    public int $installation_id;
    public int $repository_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($installation_id, $repository_id)
    {
        $this->installation_id = $installation_id;
        $this->repository_id   = $repository_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace(['{installation_id}', '{repository_id}'], [$this->installation_id, $this->repository_id], '/user/installations/{installation_id}/repositories/{repository_id}?'));
    }

    function validateResponse(): void
    {
    }
}
