<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path;

final class App
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\GetAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\GetAuthenticatedOperation();
    }
}