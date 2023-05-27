<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_encode;
use function str_replace;

final class UpdateEnvironmentVariable
{
    public const OPERATION_ID    = 'actions/update-environment-variable';
    public const OPERATION_MATCH = 'PATCH /repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The unique identifier of the repository. **/
    private int $repositoryId;
    /**The name of the variable. **/
    private string $name;
    /**The name of the environment. **/
    private string $environmentName;

    public function __construct(SchemaValidator $requestSchemaValidator, int $repositoryId, string $name, string $environmentName)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->repositoryId           = $repositoryId;
        $this->name                   = $name;
        $this->environmentName        = $environmentName;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Actions\UpdateEnvironmentVariable\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{repository_id}', '{name}', '{environment_name}'], [$this->repositoryId, $this->name, $this->environmentName], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    /**
     * @return array{code: int}
     */
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
