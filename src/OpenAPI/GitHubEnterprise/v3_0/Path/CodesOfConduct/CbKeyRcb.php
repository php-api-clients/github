<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\CodesOfConduct;

final class CbKeyRcb
{
    function get($key) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodesOfConduct\GetConductCode
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodesOfConduct\GetConductCode($key);
    }
}
