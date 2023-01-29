<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Checks
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function create(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Create
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Create($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function get(string $owner, string $repo, int $check_run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Get($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $check_run_id);
    }
    public function update(string $owner, string $repo, int $check_run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Update($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $check_run_id);
    }
    public function listAnnotations(string $owner, string $repo, int $check_run_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListAnnotations
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListAnnotations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $check_run_id, $per_page, $page);
    }
    public function rerequestRun(string $owner, string $repo, int $check_run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestRun($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $check_run_id);
    }
    public function createSuite(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\CreateSuite
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\CreateSuite($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function setSuitesPreferences(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\SetSuitesPreferences
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\SetSuitesPreferences($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function getSuite(string $owner, string $repo, int $check_suite_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\GetSuite
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\GetSuite($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $check_suite_id);
    }
    public function listForSuite(string $owner, string $repo, int $check_suite_id, string $check_name, string $status, string $filter = 'latest', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListForSuite
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListForSuite($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $check_suite_id, $check_name, $status, $filter, $per_page, $page);
    }
    public function rerequestSuite(string $owner, string $repo, int $check_suite_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestSuite
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestSuite($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $check_suite_id);
    }
    public function listForRef(string $owner, string $repo, string $ref, string $check_name, string $status, string $filter = 'latest', int $per_page = 30, int $page = 1, int $app_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListForRef
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListForRef($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $ref, $check_name, $status, $filter, $per_page, $page, $app_id);
    }
    public function listSuitesForRef(string $owner, string $repo, string $ref, int $app_id, string $check_name, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListSuitesForRef
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListSuitesForRef($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $ref, $app_id, $check_name, $per_page, $page);
    }
}
