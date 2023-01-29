<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class ListSelectedReposForOrgVariable
{
    private const OPERATION_ID = 'actions/list-selected-repos-for-org-variable';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/variables/{name}/repositories';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the variable.**/
    private string $name;
    /**Page number of the results to fetch.**/
    private int $page;
    /**The number of results per page (max 100).**/
    private int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator, string $org, string $name, int $page = 1, int $per_page = 30)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->org = $org;
        $this->name = $name;
        $this->page = $page;
        $this->per_page = $per_page;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{org}', '{name}', '{page}', '{per_page}'), array($this->org, $this->name, $this->page, $this->per_page), '/orgs/{org}/actions/variables/{name}/repositories?page={page}&per_page={per_page}'));
    }
    /**
     * @return \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListSelectedReposForOrgVariable\Response\Application\Json\H200|int
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListSelectedReposForOrgVariable\Response\Application\Json\H200|int
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListSelectedReposForOrgVariable\Response\Application\Json\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Operation\\ListSelectedReposForOrgVariable\\Response\\Application\\Json\\H200', $body);
                }
                break;
            /**Response when the visibility of the variable is not set to `selected`**/
            case 409:
                return 409;
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
