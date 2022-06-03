<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Licenses;

final class CbLicenseRcb
{
    function get($license) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Licenses\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Licenses\Get($license);
    }
}
