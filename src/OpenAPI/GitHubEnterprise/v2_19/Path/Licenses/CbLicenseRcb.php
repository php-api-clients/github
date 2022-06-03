<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Licenses;

final class CbLicenseRcb
{
    function get($license) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Licenses\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Licenses\Get($license);
    }
}
