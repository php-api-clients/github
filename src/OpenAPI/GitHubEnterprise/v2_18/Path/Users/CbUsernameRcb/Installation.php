<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Users\CbUsernameRcb;

final class Installation
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\GetUserInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\GetUserInstallation($accept, $username);
    }
}
