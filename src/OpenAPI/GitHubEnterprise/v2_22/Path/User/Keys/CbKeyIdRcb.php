<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\User\Keys;

final class CbKeyIdRcb
{
    function get($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Users\GetPublicSshKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Users\GetPublicSshKeyForAuthenticatedUser($key_id);
    }
    function delete($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Users\DeletePublicSshKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Users\DeletePublicSshKeyForAuthenticatedUser($key_id);
    }
}
