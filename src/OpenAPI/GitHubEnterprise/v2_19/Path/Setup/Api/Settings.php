<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Setup\Api;

final class Settings
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\GetSettingsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\GetSettingsOperation();
    }
    function put() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\SetSettingsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\SetSettingsOperation();
    }
}
