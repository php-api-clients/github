<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class DeleteSecretForAuthenticatedUser
{
    private const OPERATION_ID = 'codespaces/delete-secret-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/codespaces/secrets/{secret_name}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    /**The name of the secret.**/
    private string $secret_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, string $secret_name)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->secret_name = $secret_name;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('DELETE', \str_replace(array('{secret_name}'), array($this->secret_name), '/user/codespaces/secrets/{secret_name}'));
    }
    /**
     * @return int
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : int
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 204:
                return 204;
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
