<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions\Secrets;

final class PublicKey
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetOrgPublicKey
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetOrgPublicKey($org);
    }
}
