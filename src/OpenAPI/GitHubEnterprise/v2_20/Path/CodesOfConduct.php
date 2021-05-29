<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\CodesOfConduct\GetAllCodesOfConduct;

final class CodesOfConduct
{
    function get(): GetAllCodesOfConduct
    {
        return new GetAllCodesOfConduct();
    }
}
