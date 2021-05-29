<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Applications;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\ListGrants;

final class Grants
{
    function get(int $per_page = 30, int $page = 1, $client_id): ListGrants
    {
        return new ListGrants($per_page, $page, $client_id);
    }
}