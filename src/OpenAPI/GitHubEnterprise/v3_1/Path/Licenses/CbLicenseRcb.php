<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Licenses;

final class CbLicenseRcb
{
    function get($license) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Licenses\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Licenses\Get($license);
    }
}
