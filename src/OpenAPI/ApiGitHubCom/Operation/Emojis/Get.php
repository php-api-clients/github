<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Emojis;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Emojis;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Emojis\Get\Response\Applicationjson\H200;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class Get
{
    public const OPERATION_ID    = 'emojis/get';
    public const OPERATION_MATCH = 'GET /emojis';
    private const METHOD         = 'GET';
    private const PATH           = '/emojis';
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Emojis $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Emojis $hydrator)
    {
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    function createResponse(ResponseInterface $response): H200
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Operation\\Emojis\\Get\\Response\\Applicationjson\\H200', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
