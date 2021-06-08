<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Meta\Root;

final class Path
{
    function get(): Root
    {
        return new Root();
    }
}
