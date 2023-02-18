<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\App;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class GetAuthenticated
{
    public const OPERATION_ID    = 'apps/get-authenticated';
    public const OPERATION_MATCH = 'GET /app';
    private const METHOD         = 'GET';
    private const PATH           = '/app';
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly App $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, App $hydrator)
    {
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    function createResponse(ResponseInterface $response): Integration
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Integration::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Integration', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
