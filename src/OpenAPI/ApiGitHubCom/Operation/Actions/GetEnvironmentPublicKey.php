<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetEnvironmentPublicKey
{
    private const OPERATION_ID = 'actions/get-environment-public-key';
    public int $repository_id;
    /**The name of the environment**/
    public string $environment_name;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($repository_id, $environment_name)
    {
        $this->repository_id    = $repository_id;
        $this->environment_name = $environment_name;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{repository_id}', '{environment_name}'], [$this->repository_id, $this->environment_name], '/repositories/{repository_id}/environments/{environment_name}/secrets/public-key?'));
    }

    function validateResponse(): void
    {
    }
}
