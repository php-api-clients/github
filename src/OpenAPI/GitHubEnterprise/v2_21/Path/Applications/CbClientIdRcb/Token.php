<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Applications\CbClientIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\CheckToken;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\DeleteToken;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\ResetToken;

final class Token
{
    function post($client_id): CheckToken
    {
        return new CheckToken($client_id);
    }

    function delete($client_id): DeleteToken
    {
        return new DeleteToken($client_id);
    }

    function patch($client_id): ResetToken
    {
        return new ResetToken($client_id);
    }
}
