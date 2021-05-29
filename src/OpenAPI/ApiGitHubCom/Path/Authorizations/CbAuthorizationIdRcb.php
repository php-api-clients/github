<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Authorizations;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\DeleteAuthorizationOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\GetAuthorizationOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\UpdateAuthorizationOperation;

final class CbAuthorizationIdRcb
{
    function get($authorization_id): GetAuthorizationOperation
    {
        return new GetAuthorizationOperation($authorization_id);
    }

    function delete($authorization_id): DeleteAuthorizationOperation
    {
        return new DeleteAuthorizationOperation($authorization_id);
    }

    function patch($authorization_id): UpdateAuthorizationOperation
    {
        return new UpdateAuthorizationOperation($authorization_id);
    }
}
