<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Path\\Enterprise\Settings;

final class License
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\EnterpriseAdmin\GetLicenseInformationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\EnterpriseAdmin\GetLicenseInformationOperation();
    }
}
