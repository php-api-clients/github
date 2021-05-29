<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\ListOutsideCollaboratorsOperation;

final class OutsideCollaborators
{
    function get($org, string $filter = 'all', int $per_page = 30, int $page = 1): ListOutsideCollaboratorsOperation
    {
        return new ListOutsideCollaboratorsOperation($org, $filter, $per_page, $page);
    }
}
