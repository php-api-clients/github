<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Codespaces;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
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

final class RemoveSelectedRepoFromOrgSecret
{
    public const OPERATION_ID    = 'codespaces/remove-selected-repo-from-org-secret';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/codespaces/secrets/{secret_name}/repositories/{repository_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/codespaces/secrets/{secret_name}/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the secret.**/
    private string $secretName;
    private int $repositoryId;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb $hydrator, string $org, string $secretName, int $repositoryId)
    {
        $this->org                     = $org;
        $this->secretName              = $secretName;
        $this->repositoryId            = $repositoryId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{secret_name}', '{repository_id}'], [$this->org, $this->secretName, $this->repositoryId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): mixed
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Resource not found
                    **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Validation failed, or the endpoint has been spammed.
                    **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
