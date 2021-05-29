<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Applications\Grants;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\DeleteGrantOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\GetGrantOperation;

final class CbGrantIdRcb
{
    function get($grant_id): GetGrantOperation
    {
        return new GetGrantOperation($grant_id);
    }

    function delete($grant_id): DeleteGrantOperation
    {
        return new DeleteGrantOperation($grant_id);
    }
}
