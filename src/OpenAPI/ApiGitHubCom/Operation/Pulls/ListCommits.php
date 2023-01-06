<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls;

final class ListCommits
{
    private const OPERATION_ID = 'pulls/list-commits';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls/{pull_number}/commits';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The number that identifies the pull request.**/
    private readonly int $pull_number;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, string $owner, string $repo, int $pull_number, int $per_page = 30, int $page = 1)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pull_number = $pull_number;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{pull_number}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->pull_number, $this->per_page, $this->page), '/repos/{owner}/{repo}/pulls/{pull_number}/commits?per_page={per_page}&page={page}'));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListCommits\Response\Application\Json\H200
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        $hydrator = new \WyriHaximus\Hydrator\Hydrator();
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListCommits\Response\Application\Json\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\ListCommits\\Response\\Application\\Json\\H200', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
