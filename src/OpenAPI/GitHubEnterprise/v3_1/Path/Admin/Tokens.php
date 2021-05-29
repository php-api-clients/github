<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPersonalAccessTokensOperation;

final class Tokens
{
    function get(int $per_page = 30, int $page = 1): ListPersonalAccessTokensOperation
    {
        return new ListPersonalAccessTokensOperation($per_page, $page);
    }
}
