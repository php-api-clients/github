<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Authorizations;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\DeleteAuthorization;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\GetAuthorization;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\UpdateAuthorization;

final class CbAuthorizationIdRcb
{
    function get($authorization_id): GetAuthorization
    {
        return new GetAuthorization($authorization_id);
    }

    function delete($authorization_id): DeleteAuthorization
    {
        return new DeleteAuthorization($authorization_id);
    }

    function patch($authorization_id): UpdateAuthorization
    {
        return new UpdateAuthorization($authorization_id);
    }
}
