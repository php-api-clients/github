<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories\CbRepositoryIdRcb;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class AddRepoToInstallationForAuthenticatedUser
{
    public const OPERATION_ID    = 'apps/add-repo-to-installation-for-authenticated-user';
    public const OPERATION_MATCH = 'PUT /user/installations/{installation_id}/repositories/{repository_id}';
    private const METHOD         = 'PUT';
    private const PATH           = '/user/installations/{installation_id}/repositories/{repository_id}';
    /**The unique identifier of the installation.**/
    private int $installation_id;
    /**The unique identifier of the repository.**/
    private int $repository_id;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly CbRepositoryIdRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, CbRepositoryIdRcb $hydrator, int $installation_id, int $repository_id)
    {
        $this->installation_id         = $installation_id;
        $this->repository_id           = $repository_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{installation_id}', '{repository_id}'], [$this->installation_id, $this->repository_id], self::PATH));
    }

    function createResponse(ResponseInterface $response): BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Resource not found**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }

                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
