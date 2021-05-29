<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\CodesOfConduct;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetConductCodeOperation;

final class CbKeyRcb
{
    function get($key): GetConductCodeOperation
    {
        return new GetConductCodeOperation($key);
    }
}
