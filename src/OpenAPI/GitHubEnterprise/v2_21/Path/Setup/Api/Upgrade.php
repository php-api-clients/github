<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Setup\Api;

final class Upgrade
{
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\UpgradeLicenseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\UpgradeLicenseOperation();
    }
}
