<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\CodesOfConduct;

final class CbKeyRcb
{
    function get($key) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodesOfConduct\GetConductCode
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodesOfConduct\GetConductCode($key);
    }
}
