<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Path;

final class App
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Apps\GetAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Apps\GetAuthenticatedOperation();
    }
}
