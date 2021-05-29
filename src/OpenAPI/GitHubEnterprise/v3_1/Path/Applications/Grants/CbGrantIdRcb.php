<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Applications\Grants;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\DeleteGrant;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetGrant;

final class CbGrantIdRcb
{
    function get($grant_id): GetGrant
    {
        return new GetGrant($grant_id);
    }

    function delete($grant_id): DeleteGrant
    {
        return new DeleteGrant($grant_id);
    }
}