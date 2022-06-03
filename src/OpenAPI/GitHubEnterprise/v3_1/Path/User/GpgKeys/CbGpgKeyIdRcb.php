<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User\GpgKeys;

final class CbGpgKeyIdRcb
{
    function get($gpg_key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetGpgKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetGpgKeyForAuthenticatedUser($gpg_key_id);
    }
    function delete($gpg_key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\DeleteGpgKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\DeleteGpgKeyForAuthenticatedUser($gpg_key_id);
    }
}
