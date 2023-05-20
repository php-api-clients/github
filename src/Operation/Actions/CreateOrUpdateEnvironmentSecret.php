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
use function json_encode;
use function str_replace;

final class CreateOrUpdateEnvironmentSecret
{
    public const OPERATION_ID    = 'actions/create-or-update-environment-secret';
    public const OPERATION_MATCH = 'PUT /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}';
    private const METHOD         = 'PUT';
    private const PATH           = '/repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The unique identifier of the repository. **/
    private int $repositoryId;
    /**The name of the environment. **/
    private string $environmentName;
    /**The name of the secret. **/
    private string $secretName;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Secrets\SecretName $hydrator;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Secrets\SecretName $hydrator, int $repositoryId, string $environmentName, string $secretName)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->repositoryId            = $repositoryId;
        $this->environmentName         = $environmentName;
        $this->secretName              = $secretName;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Actions\CreateOrUpdateEnvironmentSecret\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{repository_id}', '{environment_name}', '{secret_name}'], [$this->repositoryId, $this->environmentName, $this->secretName], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    /**
     * @return Schema\EmptyObject|array{code: int}
     */
    public function createResponse(ResponseInterface $response): Schema\EmptyObject|array
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response when creating a secret
                     **/
                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\EmptyObject::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\EmptyObject::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Response when updating a secret
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
