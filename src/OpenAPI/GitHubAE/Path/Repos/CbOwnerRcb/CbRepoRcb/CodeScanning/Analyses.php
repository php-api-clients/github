<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning;

final class Analyses
{
    function get($owner, $repo, $tool_name, $tool_guid, int $page = 1, int $per_page = 30, $ref, $sarif_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListRecentAnalysesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListRecentAnalysesOperation($owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $sarif_id);
    }
}
