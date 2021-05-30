<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class App
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetAuthenticated();
    }
}
