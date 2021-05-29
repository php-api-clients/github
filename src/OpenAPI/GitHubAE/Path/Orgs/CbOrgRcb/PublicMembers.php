<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListPublicMembers;

final class PublicMembers
{
    function get($org, int $per_page = 30, int $page = 1): ListPublicMembers
    {
        return new ListPublicMembers($org, $per_page, $page);
    }
}
