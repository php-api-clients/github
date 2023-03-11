<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Codespaces;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class UpdateForAuthenticatedUser
{
    public const OPERATION_ID = 'codespaces/update-for-authenticated-user';
    public const OPERATION_MATCH = 'PATCH /user/codespaces/{codespace_name}';
    private const METHOD = 'PATCH';
    private const PATH = '/user/codespaces/{codespace_name}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The name of the codespace.**/
    private string $codespace_name;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb $hydrator, string $codespace_name)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->codespace_name = $codespace_name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Codespaces\UpdateForAuthenticatedUser\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{codespace_name}'), array($this->codespace_name), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return Schema\Codespace
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Codespace
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Codespace::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Codespace::class, $body);
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
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
