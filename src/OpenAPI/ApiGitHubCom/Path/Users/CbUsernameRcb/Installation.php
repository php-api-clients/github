<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Users\CbUsernameRcb;

final class Installation
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetUserInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetUserInstallationOperation($username);
    }
}