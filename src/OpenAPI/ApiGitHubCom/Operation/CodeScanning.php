<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class CodeScanning
{
    public function listAlertsForOrg_($org, $tool_name, $tool_guid, $before, $after, int $page = 1, int $per_page = 30, string $direction = 'desc', $state, string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForOrg_($org, $tool_name, $tool_guid, $before, $after, $page, $per_page, $direction, $state, $sort);
    }
    public function listAlertsForRepo_($owner, $repo, $tool_name, $tool_guid, int $page = 1, int $per_page = 30, $ref, string $direction = 'desc', string $sort = 'number', $state) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForRepo_($owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $direction, $sort, $state);
    }
    public function getAlert_($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetAlert_($owner, $repo, $alert_number);
    }
    public function updateAlert_($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UpdateAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UpdateAlert_($owner, $repo, $alert_number);
    }
    public function listAlertInstances_($owner, $repo, $alert_number, int $page = 1, int $per_page = 30, $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertInstances_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertInstances_($owner, $repo, $alert_number, $page, $per_page, $ref);
    }
    public function listRecentAnalyses_($owner, $repo, $tool_name, $tool_guid, int $page = 1, int $per_page = 30, $ref, $sarif_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListRecentAnalyses_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListRecentAnalyses_($owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $sarif_id);
    }
    public function getAnalysis_($owner, $repo, $analysis_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetAnalysis_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetAnalysis_($owner, $repo, $analysis_id);
    }
    public function deleteAnalysis_($owner, $repo, $analysis_id, $confirm_delete) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\DeleteAnalysis_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\DeleteAnalysis_($owner, $repo, $analysis_id, $confirm_delete);
    }
    public function uploadSarif_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UploadSarif_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UploadSarif_($owner, $repo);
    }
    public function getSarif_($owner, $repo, $sarif_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetSarif_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetSarif_($owner, $repo, $sarif_id);
    }
}
