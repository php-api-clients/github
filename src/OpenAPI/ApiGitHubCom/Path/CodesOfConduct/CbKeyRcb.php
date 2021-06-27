<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\CodesOfConduct;

final class CbKeyRcb
{
    function get($key) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetConductCode
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetConductCode($key);
    }
}
