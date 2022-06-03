<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\GpgKeys;

final class CbGpgKeyIdRcb
{
    function get($gpg_key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetGpgKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetGpgKeyForAuthenticatedUser($gpg_key_id);
    }
    function delete($gpg_key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeleteGpgKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeleteGpgKeyForAuthenticatedUser($gpg_key_id);
    }
}
