<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot;

final class ListSelectedReposForOrgSecret
{
    private const OPERATION_ID = 'dependabot/list-selected-repos-for-org-secret';
    public const OPERATION_MATCH = 'GET /orgs/{org}/dependabot/secrets/{secret_name}/repositories';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The name of the secret.**/
    private readonly string $secret_name;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, string $org, string $secret_name, int $page = 1, int $per_page = 30)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->org = $org;
        $this->secret_name = $secret_name;
        $this->page = $page;
        $this->per_page = $per_page;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{secret_name}', '{page}', '{per_page}'), array($this->org, $this->secret_name, $this->page, $this->per_page), '/orgs/{org}/dependabot/secrets/{secret_name}/repositories?page={page}&per_page={per_page}'));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListSelectedReposForOrgSecret\Response\Application\Json\H200
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        $hydrator = new \WyriHaximus\Hydrator\Hydrator();
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListSelectedReposForOrgSecret\Response\Application\Json\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\ListSelectedReposForOrgSecret\\Response\\Application\\Json\\H200', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
