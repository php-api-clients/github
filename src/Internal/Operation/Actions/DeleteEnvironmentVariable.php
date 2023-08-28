<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteEnvironmentVariable
{
    public const OPERATION_ID    = 'actions/delete-environment-variable';
    public const OPERATION_MATCH = 'DELETE /repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    /**The unique identifier of the repository. **/
    private int $repositoryId;
    /**The name of the variable. **/
    private string $name;
    /**The name of the environment. **/
    private string $environmentName;

    public function __construct(int $repositoryId, string $name, string $environmentName)
    {
        $this->repositoryId    = $repositoryId;
        $this->name            = $name;
        $this->environmentName = $environmentName;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{repository_id}', '{name}', '{environment_name}'], [$this->repositoryId, $this->name, $this->environmentName], self::PATH));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
