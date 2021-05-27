<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses;

final class CbAnalysisIdRcb
{
    function get($owner, $repo, $analysis_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetAnalysisOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetAnalysisOperation($owner, $repo, $analysis_id);
    }
    function delete($owner, $repo, $analysis_id, $confirm_delete) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\DeleteAnalysisOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\DeleteAnalysisOperation($owner, $repo, $analysis_id, $confirm_delete);
    }
}
