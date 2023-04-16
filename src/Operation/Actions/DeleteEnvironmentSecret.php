<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteEnvironmentSecret
{
    public const OPERATION_ID    = 'actions/delete-environment-secret';
    public const OPERATION_MATCH = 'DELETE /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}';
    /**The unique identifier of the repository.**/
    private int $repositoryId;
    /**The name of the environment.**/
    private string $environmentName;
    /**The name of the secret.**/
    private string $secretName;

    public function __construct(int $repositoryId, string $environmentName, string $secretName)
    {
        $this->repositoryId    = $repositoryId;
        $this->environmentName = $environmentName;
        $this->secretName      = $secretName;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{repository_id}', '{environment_name}', '{secret_name}'], [$this->repositoryId, $this->environmentName, $this->secretName], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
