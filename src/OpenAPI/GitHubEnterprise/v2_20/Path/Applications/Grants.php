<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Applications;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\ListGrantsOperation;

final class Grants
{
    function get(int $per_page = 30, int $page = 1, $client_id): ListGrantsOperation
    {
        return new ListGrantsOperation($per_page, $page, $client_id);
    }
}
