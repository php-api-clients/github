<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\OauthAuthorizations\CreateAuthorization;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\OauthAuthorizations\ListAuthorizations;

final class Authorizations
{
    function get(int $per_page = 30, int $page = 1, $client_id): ListAuthorizations
    {
        return new ListAuthorizations($per_page, $page, $client_id);
    }

    function post(): CreateAuthorization
    {
        return new CreateAuthorization();
    }
}
