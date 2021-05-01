<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class User
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetAuthenticatedOperation();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UpdateAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UpdateAuthenticatedOperation();
    }
}
