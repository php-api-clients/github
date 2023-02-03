<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class CodeScanning
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
    public function listAlertsForOrg(string $org, string $tool_name, string|null $tool_guid, string $before, string $after, int $page = 1, int $per_page = 30, string $direction = 'desc', string $state, string $sort = 'created', string $severity) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $tool_name, $tool_guid, $before, $after, $page, $per_page, $direction, $state, $sort, $severity);
    }
    public function listAlertsForRepo(string $owner, string $repo, string $tool_name, string|null $tool_guid, int $page = 1, int $per_page = 30, string $ref, string $direction = 'desc', string $sort = 'created', string $state, string $severity) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $direction, $sort, $state, $severity);
    }
    public function getAlert(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetAlert
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetAlert($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $alert_number);
    }
    public function updateAlert(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UpdateAlert
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UpdateAlert($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $alert_number);
    }
    public function listAlertInstances(string $owner, string $repo, int $alert_number, int $page = 1, int $per_page = 30, string $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertInstances
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertInstances($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $alert_number, $page, $per_page, $ref);
    }
    public function listRecentAnalyses(string $owner, string $repo, string $tool_name, string|null $tool_guid, int $page = 1, int $per_page = 30, string $ref, string $sarif_id, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListRecentAnalyses
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListRecentAnalyses($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $sarif_id, $direction, $sort);
    }
    public function getAnalysis(string $owner, string $repo, int $analysis_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetAnalysis
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetAnalysis($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $analysis_id);
    }
    public function deleteAnalysis(string $owner, string $repo, int $analysis_id, string|null $confirm_delete) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\DeleteAnalysis
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\DeleteAnalysis($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $analysis_id, $confirm_delete);
    }
    public function listCodeqlDatabases(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListCodeqlDatabases
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListCodeqlDatabases($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function getCodeqlDatabase(string $owner, string $repo, string $language) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetCodeqlDatabase
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetCodeqlDatabase($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $language);
    }
    public function uploadSarif(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UploadSarif
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UploadSarif($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function getSarif(string $owner, string $repo, string $sarif_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetSarif
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetSarif($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $sarif_id);
    }
}
