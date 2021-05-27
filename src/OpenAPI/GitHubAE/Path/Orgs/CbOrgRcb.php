<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs;

final class CbOrgRcb
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetOperation($org);
    }
    function patch($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\UpdateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\UpdateOperation($org);
    }
}
