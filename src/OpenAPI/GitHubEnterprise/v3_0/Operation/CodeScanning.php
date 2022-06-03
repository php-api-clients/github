<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation;

final class CodeScanning
{
    public function listAlertsForRepo_($owner, $repo, $tool_name, $tool_guid, int $page = 1, int $per_page = 30, $ref, $state) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\ListAlertsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\ListAlertsForRepo_($owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $state);
    }
    public function getAlert_($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\GetAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\GetAlert_($owner, $repo, $alert_number);
    }
    public function updateAlert_($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\UpdateAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\UpdateAlert_($owner, $repo, $alert_number);
    }
    public function listRecentAnalyses_($owner, $repo, $tool_name, $tool_guid, int $page = 1, int $per_page = 30, $ref, $sarif_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\ListRecentAnalyses_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\ListRecentAnalyses_($owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $sarif_id);
    }
    public function uploadSarif_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\UploadSarif_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\UploadSarif_($owner, $repo);
    }
}
