<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesSecret;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class GetSecretForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/get-secret-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/codespaces/secrets/{secret_name}';
    private const METHOD         = 'GET';
    private const PATH           = '/user/codespaces/secrets/{secret_name}';
    /**The name of the secret.**/
    private string $secret_name;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly CbSecretNameRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, CbSecretNameRcb $hydrator, string $secret_name)
    {
        $this->secret_name             = $secret_name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{secret_name}'], [$this->secret_name], self::PATH));
    }

    function createResponse(ResponseInterface $response): CodespacesSecret
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(CodespacesSecret::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\CodespacesSecret', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
