<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Setup\Api;

final class Settings
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\GetSettings
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\GetSettings();
    }
    function put() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\SetSettings
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\SetSettings();
    }
}
