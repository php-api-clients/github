<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Secrets;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgPublicKeyOperation;

final class PublicKey
{
    function get($org): GetOrgPublicKeyOperation
    {
        return new GetOrgPublicKeyOperation($org);
    }
}
