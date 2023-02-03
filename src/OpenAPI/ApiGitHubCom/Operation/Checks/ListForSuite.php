<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks;

final class ListForSuite
{
    private const OPERATION_ID = 'checks/list-for-suite';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/check-suites/{check_suite_id}/check-runs';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the check suite.**/
    private int $check_suite_id;
    /**Returns check runs with the specified `name`.**/
    private string $check_name;
    /**Returns check runs with the specified `status`.**/
    private string $status;
    /**Filters check runs by their `completed_at` timestamp. `latest` returns the most recent check runs.**/
    private string $filter;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, string $owner, string $repo, int $check_suite_id, string $check_name, string $status, string $filter = 'latest', int $per_page = 30, int $page = 1)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->check_suite_id = $check_suite_id;
        $this->check_name = $check_name;
        $this->status = $status;
        $this->filter = $filter;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{owner}', '{repo}', '{check_suite_id}', '{check_name}', '{status}', '{filter}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->check_suite_id, $this->check_name, $this->status, $this->filter, $this->per_page, $this->page), '/repos/{owner}/{repo}/check-suites/{check_suite_id}/check-runs?check_name={check_name}&status={status}&filter={filter}&per_page={per_page}&page={page}'));
    }
    /**
     * @return \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListForSuite\Response\Application\Json\H200
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListForSuite\Response\Application\Json\H200
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListForSuite\Response\Application\Json\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Operation\\ListForSuite\\Response\\Application\\Json\\H200', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
