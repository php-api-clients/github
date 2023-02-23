<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Codespaces;

final class ListSecretsForAuthenticatedUser
{
    public const OPERATION_ID = 'codespaces/list-secrets-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/codespaces/secrets';
    private const METHOD = 'GET';
    private const PATH = '/user/codespaces/secrets';
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\Secrets $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\Secrets $hydrator, int $per_page = 30, int $page = 1)
    {
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{per_page}', '{page}'), array($this->per_page, $this->page), self::PATH . '?per_page={per_page}&page={page}'));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\Operation\Codespaces\ListSecretsForAuthenticatedUser\Response\Applicationjson\H200
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\Operation\Codespaces\ListSecretsForAuthenticatedUser\Response\Applicationjson\H200
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\Codespaces\ListSecretsForAuthenticatedUser\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\Codespaces\\ListSecretsForAuthenticatedUser\\Response\\Applicationjson\\H200', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
