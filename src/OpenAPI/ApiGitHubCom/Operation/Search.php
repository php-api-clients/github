<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Search
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function code(string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Code
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Code($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $q, $sort, $order, $per_page, $page);
    }
    public function commits(string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Commits
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Commits($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $q, $sort, $order, $per_page, $page);
    }
    public function issuesAndPullRequests(string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\IssuesAndPullRequests
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\IssuesAndPullRequests($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $q, $sort, $order, $per_page, $page);
    }
    public function labels(int $repository_id, string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Labels
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Labels($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $repository_id, $q, $sort, $order, $per_page, $page);
    }
    public function repos(string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Repos
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $q, $sort, $order, $per_page, $page);
    }
    public function topics(string $q, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Topics
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Topics($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $q, $per_page, $page);
    }
    public function users(string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Users
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $q, $sort, $order, $per_page, $page);
    }
}
