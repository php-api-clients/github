<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Search
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function code_(string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Code_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Code_($this->requestSchemaValidator, $this->responseSchemaValidator, $q, $sort, $order, $per_page, $page);
    }
    public function commits_(string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Commits_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Commits_($this->requestSchemaValidator, $this->responseSchemaValidator, $q, $sort, $order, $per_page, $page);
    }
    public function issuesAndPullRequests_(string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\IssuesAndPullRequests_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\IssuesAndPullRequests_($this->requestSchemaValidator, $this->responseSchemaValidator, $q, $sort, $order, $per_page, $page);
    }
    public function labels_(int $repository_id, string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Labels_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Labels_($this->requestSchemaValidator, $this->responseSchemaValidator, $repository_id, $q, $sort, $order, $per_page, $page);
    }
    public function repos_(string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Repos_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Repos_($this->requestSchemaValidator, $this->responseSchemaValidator, $q, $sort, $order, $per_page, $page);
    }
    public function topics_(string $q, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Topics_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Topics_($this->requestSchemaValidator, $this->responseSchemaValidator, $q, $per_page, $page);
    }
    public function users_(string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Users_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Users_($this->requestSchemaValidator, $this->responseSchemaValidator, $q, $sort, $order, $per_page, $page);
    }
}
