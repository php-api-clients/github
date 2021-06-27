<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

final class Keys
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicSshKeysForAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicSshKeysForAuthenticated($per_page, $page);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreatePublicSshKeyForAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreatePublicSshKeyForAuthenticated();
    }
}
