<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
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
    /**The unique identifier of the repository. **/
    private int $repositoryId;
    /**The name of the environment. The name must be URL encoded. For example, any slashes in the name must be replaced with `%2F`. **/
    private string $environmentName;
    /**The name of the secret. **/
    private string $secretName;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Secrets\SecretName $hydrator, int $repositoryId, string $environmentName, string $secretName)
    {
        $this->repositoryId    = $repositoryId;
        $this->environmentName = $environmentName;
        $this->secretName      = $secretName;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Actions\CreateOrUpdateEnvironmentSecret\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PUT', str_replace(['{repository_id}', '{environment_name}', '{secret_name}'], [$this->repositoryId, $this->environmentName, $this->secretName], '/repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\EmptyObject|WithoutBody
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
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}