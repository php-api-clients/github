<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Projects;

final class MoveCard
{
    public const OPERATION_ID = 'projects/move-card';
    public const OPERATION_MATCH = 'POST /projects/columns/cards/{card_id}/moves';
    private const METHOD = 'POST';
    private const PATH = '/projects/columns/cards/{card_id}/moves';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The unique identifier of the card.**/
    private int $card_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb\Moves $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb\Moves $hydrator, int $card_id)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->card_id = $card_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Projects\MoveCard\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{card_id}'), array($this->card_id), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\Operation\Gists\CheckIsStarred\Response\Applicationjson\H404|\ApiClients\Client\Github\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H403|\ApiClients\Client\Github\Schema\BasicError|\ApiClients\Client\Github\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503|\ApiClients\Client\Github\Schema\ValidationError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\Operation\Gists\CheckIsStarred\Response\Applicationjson\H404|\ApiClients\Client\Github\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H403|\ApiClients\Client\Github\Schema\BasicError|\ApiClients\Client\Github\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503|\ApiClients\Client\Github\Schema\ValidationError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Validation failed, or the endpoint has been spammed.**/
            case 201:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\Gists\CheckIsStarred\Response\Applicationjson\H404::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\Gists\\CheckIsStarred\\Response\\Applicationjson\\H404', $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H403::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403', $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 401:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\BasicError', $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 503:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503', $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\ValidationError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
