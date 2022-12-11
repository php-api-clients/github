<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation;

final class CodeScanning
{
    public function listAlertsForRepo_(string $owner, string $repo, string $tool_name, string|null $tool_guid, int $page = 1, int $per_page = 30, string $ref, string $state) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\ListAlertsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\ListAlertsForRepo_($owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $state);
    }
    public function getAlert_(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetAlert_($owner, $repo, $alert_number);
    }
    public function updateAlert_(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\UpdateAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\UpdateAlert_($owner, $repo, $alert_number);
    }
    public function listAlertInstances_(string $owner, string $repo, int $alert_number, int $page = 1, int $per_page = 30, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\ListAlertInstances_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\ListAlertInstances_($owner, $repo, $alert_number, $page, $per_page, $ref);
    }
    public function listRecentAnalyses_(string $owner, string $repo, string $tool_name, string|null $tool_guid, int $page = 1, int $per_page = 30, string $ref, string $sarif_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\ListRecentAnalyses_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\ListRecentAnalyses_($owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $sarif_id);
    }
    public function getAnalysis_(string $owner, string $repo, int $analysis_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetAnalysis_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetAnalysis_($owner, $repo, $analysis_id);
    }
    public function deleteAnalysis_(string $owner, string $repo, int $analysis_id, string|null $confirm_delete) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\DeleteAnalysis_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\DeleteAnalysis_($owner, $repo, $analysis_id, $confirm_delete);
    }
    public function uploadSarif_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\UploadSarif_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\UploadSarif_($owner, $repo);
    }
    public function getSarif_(string $owner, string $repo, string $sarif_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetSarif_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetSarif_($owner, $repo, $sarif_id);
    }
}
