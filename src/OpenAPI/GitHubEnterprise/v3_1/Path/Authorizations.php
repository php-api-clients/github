<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path;

final class Authorizations
{
    function get(int $per_page = 30, int $page = 1, $client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\ListAuthorizationsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\ListAuthorizationsOperation($per_page, $page, $client_id);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\CreateAuthorizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\CreateAuthorizationOperation();
    }
}
