<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\ListSelfHostedRunnersForOrg;

final class Runners
{
    function get($org, int $per_page = 30, int $page = 1): ListSelfHostedRunnersForOrg
    {
        return new ListSelfHostedRunnersForOrg($org, $per_page, $page);
    }
}
