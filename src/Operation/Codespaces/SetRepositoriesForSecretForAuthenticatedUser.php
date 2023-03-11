<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Codespaces;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class SetRepositoriesForSecretForAuthenticatedUser
{
    public const OPERATION_ID = 'codespaces/set-repositories-for-secret-for-authenticated-user';
    public const OPERATION_MATCH = 'PUT /user/codespaces/secrets/{secret_name}/repositories';
    private const METHOD = 'PUT';
    private const PATH = '/user/codespaces/secrets/{secret_name}/repositories';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The name of the secret.**/
    private string $secret_name;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb\Repositories $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb\Repositories $hydrator, string $secret_name)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->secret_name = $secret_name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Codespaces\SetRepositoriesForSecretForAuthenticatedUser\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{secret_name}'), array($this->secret_name), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : void
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
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
