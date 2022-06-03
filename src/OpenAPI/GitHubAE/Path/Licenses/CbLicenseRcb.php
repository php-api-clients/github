<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Licenses;

final class CbLicenseRcb
{
    function get($license) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\Get($license);
    }
}
