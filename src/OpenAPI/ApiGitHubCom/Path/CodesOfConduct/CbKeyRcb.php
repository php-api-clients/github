<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\CodesOfConduct;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetConductCode;

final class CbKeyRcb
{
    function get($key): GetConductCode
    {
        return new GetConductCode($key);
    }
}
