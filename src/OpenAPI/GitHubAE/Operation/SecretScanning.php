<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class SecretScanning
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function listAlertsForEnterprise_(string $enterprise, string $state, string $secret_type, string $resolution, string $sort = 'created', string $direction = 'desc', int $per_page = 30, string $before, string $after) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\ListAlertsForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\ListAlertsForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $state, $secret_type, $resolution, $sort, $direction, $per_page, $before, $after);
    }
    public function listAlertsForRepo_(string $owner, string $repo, string $state, string $secret_type, string $resolution, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\ListAlertsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\ListAlertsForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $state, $secret_type, $resolution, $page, $per_page);
    }
    public function getAlert_(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\GetAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\GetAlert_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $alert_number);
    }
    public function updateAlert_(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\UpdateAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\UpdateAlert_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $alert_number);
    }
    public function listLocationsForAlert_(string $owner, string $repo, int $alert_number, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\ListLocationsForAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\ListLocationsForAlert_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $alert_number, $page, $per_page);
    }
}
