<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Users\CbUsernameRcb;

final class Installation
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\GetUserInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\GetUserInstallation($username);
    }
}
