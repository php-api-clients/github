<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Octocat;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebHookHeader\UserAgent;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class GetOctocat
{
    public const OPERATION_ID    = 'meta/get-octocat';
    public const OPERATION_MATCH = 'GET /octocat';
    private const METHOD         = 'GET';
    private const PATH           = '/octocat';
    /**The words to show in Octocat's speech bubble**/
    private string $s;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Octocat $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Octocat $hydrator, string $s)
    {
        $this->s                       = $s;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{s}'], [$this->s], self::PATH . '?s={s}'));
    }

    function createResponse(ResponseInterface $response): UserAgent
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/octocat-stream':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(UserAgent::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\WebHookHeader\\UserAgent', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
