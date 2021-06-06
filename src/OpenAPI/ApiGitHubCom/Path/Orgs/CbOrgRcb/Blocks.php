<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

final class Blocks
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListBlockedUsers
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListBlockedUsers($org);
    }
}
