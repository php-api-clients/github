<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Licenses;

final class CbLicenseRcb
{
    function get($license) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses\GetOperation($license);
    }
}
