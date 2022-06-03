<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\User\Keys;

final class CbKeyIdRcb
{
    function get($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Users\GetPublicSshKeyForAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Users\GetPublicSshKeyForAuthenticated($key_id);
    }
    function delete($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Users\DeletePublicSshKeyForAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Users\DeletePublicSshKeyForAuthenticated($key_id);
    }
}
