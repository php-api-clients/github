<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class User
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetAuthenticated();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UpdateAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UpdateAuthenticated();
    }
}
