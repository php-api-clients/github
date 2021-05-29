<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\Create;

final class Teams
{
    function get($org, int $per_page = 30, int $page = 1): [$org, $per_page, $page];
}

function post($org): Create
{
    return new Create($org);
}
}
