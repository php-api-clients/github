<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprise\Settings;

final class License
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetLicenseInformation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetLicenseInformation();
    }
}
