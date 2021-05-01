<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Path;

final class App
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Apps\GetAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Apps\GetAuthenticatedOperation();
    }
}
