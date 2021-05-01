<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Path;

final class App
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Apps\GetAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Apps\GetAuthenticatedOperation();
    }
}
