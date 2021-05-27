<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path;

final class User
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetAuthenticatedOperation();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\UpdateAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\UpdateAuthenticatedOperation();
    }
}
