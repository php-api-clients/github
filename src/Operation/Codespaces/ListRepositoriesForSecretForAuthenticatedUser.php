<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Codespaces;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListRepositoriesForSecretForAuthenticatedUser
{
    public const OPERATION_ID = 'codespaces/list-repositories-for-secret-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/codespaces/secrets/{secret_name}/repositories';
    private const METHOD = 'GET';
    private const PATH = '/user/codespaces/secrets/{secret_name}/repositories';
    /**The name of the secret.**/
    private string $secret_name;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb\Repositories $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb\Repositories $hydrator, string $secret_name)
    {
        $this->secret_name = $secret_name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{secret_name}'), array($this->secret_name), self::PATH));
    }
    /**
     * @return Schema\Operation\Actions\ListSelectedReposForOrgSecret\Response\Applicationjson\H200
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Actions\ListSelectedReposForOrgSecret\Response\Applicationjson\H200
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Actions\ListSelectedReposForOrgSecret\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Actions\ListSelectedReposForOrgSecret\Response\Applicationjson\H200::class, $body);
                }
                break;
            /**Requires authentication**/
            case 401:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
            /**Forbidden**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
            /**Internal Error**/
            case 500:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
