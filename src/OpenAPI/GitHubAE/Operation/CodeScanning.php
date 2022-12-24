<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class CodeScanning
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function listAlertsForOrg_(string $org, string $tool_name, string|null $tool_guid, string $before, string $after, int $page = 1, int $per_page = 30, string $direction = 'desc', string $state, string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListAlertsForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListAlertsForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $tool_name, $tool_guid, $before, $after, $page, $per_page, $direction, $state, $sort);
    }
    public function listAlertsForRepo_(string $owner, string $repo, string $tool_name, string|null $tool_guid, int $page = 1, int $per_page = 30, string $ref, string $direction = 'desc', string $sort = 'created', string $state) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListAlertsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListAlertsForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $direction, $sort, $state);
    }
    public function getAlert_(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetAlert_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $alert_number);
    }
    public function updateAlert_(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\UpdateAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\UpdateAlert_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $alert_number);
    }
    public function listAlertInstances_(string $owner, string $repo, int $alert_number, int $page = 1, int $per_page = 30, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListAlertInstances_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListAlertInstances_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $alert_number, $page, $per_page, $ref);
    }
    public function listRecentAnalyses_(string $owner, string $repo, string $tool_name, string|null $tool_guid, int $page = 1, int $per_page = 30, string $ref, string $sarif_id, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListRecentAnalyses_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListRecentAnalyses_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $sarif_id, $direction, $sort);
    }
    public function getAnalysis_(string $owner, string $repo, int $analysis_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetAnalysis_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetAnalysis_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $analysis_id);
    }
    public function deleteAnalysis_(string $owner, string $repo, int $analysis_id, string|null $confirm_delete) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\DeleteAnalysis_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\DeleteAnalysis_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $analysis_id, $confirm_delete);
    }
    public function uploadSarif_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\UploadSarif_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\UploadSarif_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getSarif_(string $owner, string $repo, string $sarif_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetSarif_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetSarif_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $sarif_id);
    }
}
