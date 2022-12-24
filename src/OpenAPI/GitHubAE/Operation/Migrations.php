<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Migrations
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function listForOrg_(string $org, int $per_page = 30, int $page = 1, array $exclude) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $per_page, $page, $exclude);
    }
    public function startForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\StartForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\StartForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function getStatusForOrg_(string $org, int $migration_id, array $exclude) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\GetStatusForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\GetStatusForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $migration_id, $exclude);
    }
    public function listForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function startForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\StartForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\StartForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getArchiveForAuthenticatedUser_(int $migration_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\GetArchiveForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\GetArchiveForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $migration_id);
    }
    public function listReposForAuthenticatedUser_(int $migration_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListReposForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListReposForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $migration_id, $per_page, $page);
    }
}
