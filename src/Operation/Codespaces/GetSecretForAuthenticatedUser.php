<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Codespaces;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetSecretForAuthenticatedUser
{
    public const OPERATION_ID = 'codespaces/get-secret-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/codespaces/secrets/{secret_name}';
    private const METHOD = 'GET';
    private const PATH = '/user/codespaces/secrets/{secret_name}';
    /**The name of the secret.**/
    private string $secretName;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb $hydrator, string $secretName)
    {
        $this->secretName = $secretName;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{secret_name}'), array($this->secretName), self::PATH));
    }
    /**
     * @return Schema\CodespacesSecret
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\CodespacesSecret
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\CodespacesSecret::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\CodespacesSecret::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
