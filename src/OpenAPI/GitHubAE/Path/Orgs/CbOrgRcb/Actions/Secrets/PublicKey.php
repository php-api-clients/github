<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions\Secrets;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetOrgPublicKey;

final class PublicKey
{
    function get($org): GetOrgPublicKey
    {
        return new GetOrgPublicKey($org);
    }
}
