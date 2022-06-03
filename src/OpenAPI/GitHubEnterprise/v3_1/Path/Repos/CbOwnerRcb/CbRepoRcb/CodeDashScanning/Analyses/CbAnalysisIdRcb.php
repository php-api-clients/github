<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses;

final class CbAnalysisIdRcb
{
    function get($owner, $repo, $analysis_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetAnalysis
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetAnalysis($owner, $repo, $analysis_id);
    }
    function delete($owner, $repo, $analysis_id, $confirm_delete) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\DeleteAnalysis
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\DeleteAnalysis($owner, $repo, $analysis_id, $confirm_delete);
    }
}
