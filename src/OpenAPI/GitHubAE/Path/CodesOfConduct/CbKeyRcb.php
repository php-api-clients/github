<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\CodesOfConduct;

final class CbKeyRcb
{
    function get($key) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct\GetConductCode
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct\GetConductCode($key);
    }
}
