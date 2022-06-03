<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs;

final class CbOrgRcb
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\Get($org);
    }
    function patch($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\Update($org);
    }
}
