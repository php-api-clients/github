<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\ListPublicMembersOperation;

final class PublicMembers
{
    function get($org, int $per_page = 30, int $page = 1): ListPublicMembersOperation
    {
        return new ListPublicMembersOperation($org, $per_page, $page);
    }
}
