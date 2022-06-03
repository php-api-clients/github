<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\CodesOfConduct;

final class CbKeyRcb
{
    function get($key) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\CodesOfConduct\GetConductCode
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\CodesOfConduct\GetConductCode($key);
    }
}
