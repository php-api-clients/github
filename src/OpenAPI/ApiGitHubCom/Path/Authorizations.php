<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\CreateAuthorizationOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\ListAuthorizationsOperation;

final class Authorizations
{
    function get(int $per_page = 30, int $page = 1, $client_id): ListAuthorizationsOperation
    {
        return new ListAuthorizationsOperation($per_page, $page, $client_id);
    }

    function post(): CreateAuthorizationOperation
    {
        return new CreateAuthorizationOperation();
    }
}
