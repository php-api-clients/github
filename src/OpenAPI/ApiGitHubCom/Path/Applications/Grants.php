<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Applications;

final class Grants
{
    function get(int $per_page = 30, int $page = 1, $client_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\ListGrants
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\ListGrants($per_page, $page, $client_id);
    }
}
