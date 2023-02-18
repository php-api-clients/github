<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Gitignore\Templates\CbNameRcb;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitignoreTemplate;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class GetTemplate
{
    public const OPERATION_ID    = 'gitignore/get-template';
    public const OPERATION_MATCH = 'GET /gitignore/templates/{name}';
    private const METHOD         = 'GET';
    private const PATH           = '/gitignore/templates/{name}';
    private string $name;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly CbNameRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, CbNameRcb $hydrator, string $name)
    {
        $this->name                    = $name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{name}'], [$this->name], self::PATH));
    }

    function createResponse(ResponseInterface $response): GitignoreTemplate
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(GitignoreTemplate::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\GitignoreTemplate', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
