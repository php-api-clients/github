<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\ListRecentAnalyses;

final class Analyses
{
    function get($owner, $repo, $tool_name, $tool_guid, int $page = 1, int $per_page = 30, $ref, $sarif_id): ListRecentAnalyses
    {
        return new ListRecentAnalyses($owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $sarif_id);
    }
}
