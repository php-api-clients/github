<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Orgs;

final class CbOrgRcb
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Orgs\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Orgs\Get($org);
    }
    function patch($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Orgs\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Orgs\Update($org);
    }
}
