<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPersonalAccessTokens;

final class Tokens
{
    function get(int $per_page = 30, int $page = 1): ListPersonalAccessTokens
    {
        return new ListPersonalAccessTokens($per_page, $page);
    }
}
