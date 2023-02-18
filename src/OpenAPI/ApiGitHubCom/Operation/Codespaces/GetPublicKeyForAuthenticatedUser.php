<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\User\Codespaces\Secrets\PublicKey;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesUserPublicKey;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class GetPublicKeyForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/get-public-key-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/codespaces/secrets/public-key';
    private const METHOD         = 'GET';
    private const PATH           = '/user/codespaces/secrets/public-key';
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly PublicKey $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, PublicKey $hydrator)
    {
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    function createResponse(ResponseInterface $response): CodespacesUserPublicKey
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(CodespacesUserPublicKey::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\CodespacesUserPublicKey', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
