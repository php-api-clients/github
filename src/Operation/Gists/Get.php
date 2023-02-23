<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Gists;

final class Get
{
    public const OPERATION_ID = 'gists/get';
    public const OPERATION_MATCH = 'GET /gists/{gist_id}';
    private const METHOD = 'GET';
    private const PATH = '/gists/{gist_id}';
    /**The unique identifier of the gist.**/
    private string $gist_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb $hydrator, string $gist_id)
    {
        $this->gist_id = $gist_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{gist_id}'), array($this->gist_id), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\GistSimple|\ApiClients\Client\Github\Schema\Operation\Gists\Get\Response\Applicationjson\H403|\ApiClients\Client\Github\Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\GistSimple|\ApiClients\Client\Github\Schema\Operation\Gists\Get\Response\Applicationjson\H403|\ApiClients\Client\Github\Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Resource not found**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\GistSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\GistSimple', $body);
                }
                break;
            /**Resource not found**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\Gists\Get\Response\Applicationjson\H403::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403', $body);
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\BasicError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
