<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

final class FailedInvitations
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListFailedInvitations
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListFailedInvitations($org, $per_page, $page);
    }
}
