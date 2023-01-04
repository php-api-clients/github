<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class SecretScanning
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function getSecurityAnalysisSettingsForEnterprise(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetSecurityAnalysisSettingsForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetSecurityAnalysisSettingsForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function patchSecurityAnalysisSettingsForEnterprise(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function listAlertsForEnterprise(string $enterprise, string $state, string $secret_type, string $resolution, string $sort = 'created', string $direction = 'desc', int $per_page = 30, string $before, string $after) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $state, $secret_type, $resolution, $sort, $direction, $per_page, $before, $after);
    }
    public function postSecurityProductEnablementForEnterprise(string $enterprise, string $security_product, string $enablement) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\PostSecurityProductEnablementForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\PostSecurityProductEnablementForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $security_product, $enablement);
    }
    public function listAlertsForOrg(string $org, string $state, string $secret_type, string $resolution, string $sort = 'created', string $direction = 'desc', int $page = 1, int $per_page = 30, string $before, string $after) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $state, $secret_type, $resolution, $sort, $direction, $page, $per_page, $before, $after);
    }
    public function listAlertsForRepo(string $owner, string $repo, string $state, string $secret_type, string $resolution, string $sort = 'created', string $direction = 'desc', int $page = 1, int $per_page = 30, string $before, string $after) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $state, $secret_type, $resolution, $sort, $direction, $page, $per_page, $before, $after);
    }
    public function getAlert(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetAlert
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetAlert($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $alert_number);
    }
    public function updateAlert(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\UpdateAlert
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\UpdateAlert($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $alert_number);
    }
    public function listLocationsForAlert(string $owner, string $repo, int $alert_number, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListLocationsForAlert
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListLocationsForAlert($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $alert_number, $page, $per_page);
    }
}
