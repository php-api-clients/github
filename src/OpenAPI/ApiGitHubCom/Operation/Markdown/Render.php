<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Markdown;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Markdown\Render\Request\Applicationjson;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebHookHeader\UserAgent;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function json_encode;
use function str_replace;

final class Render
{
    public const OPERATION_ID    = 'markdown/render';
    public const OPERATION_MATCH = 'POST /markdown';
    private const METHOD         = 'POST';
    private const PATH           = '/markdown';
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Markdown $hydrator;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Markdown $hydrator)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Applicationjson::SCHEMA_JSON, Schema::class));

        return new Request(self::METHOD, str_replace([], [], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    function createResponse(ResponseInterface $response): UserAgent
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'text/html':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\WebHookHeader\\UserAgent', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
