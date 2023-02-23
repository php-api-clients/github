<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Actions;

final class ListRepoRequiredWorkflows
{
    public const OPERATION_ID = 'actions/list-repo-required-workflows';
    public const OPERATION_MATCH = 'GET /repos/{org}/{repo}/actions/required_workflows';
    private const METHOD = 'GET';
    private const PATH = '/repos/{org}/{repo}/actions/required_workflows';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows $hydrator, string $org, string $repo, int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->repo = $repo;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{repo}', '{per_page}', '{page}'), array($this->org, $this->repo, $this->per_page, $this->page), self::PATH . '?per_page={per_page}&page={page}'));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\Operation\Actions\ListRepoRequiredWorkflows\Response\Applicationjson\H200|\ApiClients\Client\Github\Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\Operation\Actions\ListRepoRequiredWorkflows\Response\Applicationjson\H200|\ApiClients\Client\Github\Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Resource not found**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\Actions\ListRepoRequiredWorkflows\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListRepoRequiredWorkflows\\Response\\Applicationjson\\H200', $body);
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\BasicError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
