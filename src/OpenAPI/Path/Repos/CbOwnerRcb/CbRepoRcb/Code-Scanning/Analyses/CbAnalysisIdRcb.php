<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Code-Scanning\Analyses;

final class CbAnalysisIdRcb
{
    function get($owner, $repo, $analysis_id) : \ApiClients\Client\Github\OpenAPI\Operation\CodeScanning\GetAnalysisOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\CodeScanning\GetAnalysisOperation($owner, $repo, $analysis_id);
    }
    function delete($owner, $repo, $analysis_id, $confirm_delete) : \ApiClients\Client\Github\OpenAPI\Operation\CodeScanning\DeleteAnalysisOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\CodeScanning\DeleteAnalysisOperation($owner, $repo, $analysis_id, $confirm_delete);
    }
}
