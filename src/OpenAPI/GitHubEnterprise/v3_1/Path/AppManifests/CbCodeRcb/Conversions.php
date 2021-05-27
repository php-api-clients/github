<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\AppManifests\CbCodeRcb;

final class Conversions
{
    function post($code) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\CreateFromManifestOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\CreateFromManifestOperation($code);
    }
}
