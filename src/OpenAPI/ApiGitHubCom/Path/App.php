<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class App
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetAuthenticatedOperation();
    }
}
