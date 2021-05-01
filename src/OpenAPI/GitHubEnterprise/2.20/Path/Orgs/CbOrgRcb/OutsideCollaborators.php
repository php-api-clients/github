<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Path\\Orgs\CbOrgRcb;

final class OutsideCollaborators
{
    function get($org, string $filter = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Orgs\ListOutsideCollaboratorsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Orgs\ListOutsideCollaboratorsOperation($org, $filter, $per_page, $page);
    }
}
