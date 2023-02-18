<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class AddSelectedRepoToOrgSecret
{
    public const OPERATION_ID    = 'codespaces/add-selected-repo-to-org-secret';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/codespaces/secrets/{secret_name}/repositories/{repository_id}';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/codespaces/secrets/{secret_name}/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the secret.**/
    private string $secret_name;
    private int $repository_id;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly CbRepositoryIdRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, CbRepositoryIdRcb $hydrator, string $org, string $secret_name, int $repository_id)
    {
        $this->org                     = $org;
        $this->secret_name             = $secret_name;
        $this->repository_id           = $repository_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{secret_name}', '{repository_id}'], [$this->org, $this->secret_name, $this->repository_id], self::PATH));
    }

    function createResponse(ResponseInterface $response): BasicError|ValidationError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Validation failed, or the endpoint has been spammed.**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }

                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\ValidationError', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
