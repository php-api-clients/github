<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\\Orgs;

final class CbOrgRcb
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Orgs\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Orgs\GetOperation($org);
    }
    function patch($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Orgs\UpdateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Orgs\UpdateOperation($org);
    }
}
