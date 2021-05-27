<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Orgs\CbOrgRcb\Actions\Secrets;

final class PublicKey
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetOrgPublicKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetOrgPublicKeyOperation($org);
    }
}
