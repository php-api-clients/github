<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Markdown;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Markdown\RenderRawOperation;

final class Raw
{
    function post(): RenderRawOperation
    {
        return new RenderRawOperation();
    }
}
