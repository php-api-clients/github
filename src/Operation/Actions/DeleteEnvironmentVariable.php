<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteEnvironmentVariable
{
    public const OPERATION_ID    = 'actions/delete-environment-variable';
    public const OPERATION_MATCH = 'DELETE /repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    /**The unique identifier of the repository.**/
    private int $repositoryId;
    /**The name of the variable.**/
    private string $name;
    /**The name of the environment.**/
    private string $environmentName;

    public function __construct(int $repositoryId, string $name, string $environmentName)
    {
        $this->repositoryId    = $repositoryId;
        $this->name            = $name;
        $this->environmentName = $environmentName;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{repository_id}', '{name}', '{environment_name}'], [$this->repositoryId, $this->name, $this->environmentName], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
