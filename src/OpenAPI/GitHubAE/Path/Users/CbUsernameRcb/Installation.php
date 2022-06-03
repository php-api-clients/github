<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb;

final class Installation
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetUserInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetUserInstallation($username);
    }
}
