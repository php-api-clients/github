<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User\Keys;

final class CbKeyIdRcb
{
    function get($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetPublicSshKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetPublicSshKeyForAuthenticatedUser($key_id);
    }
    function delete($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\DeletePublicSshKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\DeletePublicSshKeyForAuthenticatedUser($key_id);
    }
}
