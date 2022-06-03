<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path;

final class User
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetAuthenticated();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\UpdateAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\UpdateAuthenticated();
    }
}
