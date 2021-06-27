<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class Authorizations
{
    function get(int $per_page = 30, int $page = 1, $client_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\ListAuthorizations
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\ListAuthorizations($per_page, $page, $client_id);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\CreateAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\CreateAuthorization();
    }
}
