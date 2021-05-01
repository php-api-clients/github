<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\\Users\CbUsernameRcb;

final class Installation
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps\GetUserInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps\GetUserInstallationOperation($accept, $username);
    }
}