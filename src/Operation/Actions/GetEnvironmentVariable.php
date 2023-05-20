<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class GetEnvironmentVariable
{
    public const OPERATION_ID    = 'actions/get-environment-variable';
    public const OPERATION_MATCH = 'GET /repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    private const METHOD         = 'GET';
    private const PATH           = '/repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    /**The unique identifier of the repository. **/
    private int $repositoryId;
    /**The name of the environment. **/
    private string $environmentName;
    /**The name of the variable. **/
    private string $name;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Variables\Name $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Variables\Name $hydrator, int $repositoryId, string $environmentName, string $name)
    {
        $this->repositoryId            = $repositoryId;
        $this->environmentName         = $environmentName;
        $this->name                    = $name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{repository_id}', '{environment_name}', '{name}'], [$this->repositoryId, $this->environmentName, $this->name], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\ActionsVariable
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ActionsVariable::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\ActionsVariable::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
