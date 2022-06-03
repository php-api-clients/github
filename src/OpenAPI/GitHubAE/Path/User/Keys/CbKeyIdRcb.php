<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\Keys;

final class CbKeyIdRcb
{
    function get($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetPublicSshKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetPublicSshKeyForAuthenticatedUser($key_id);
    }
    function delete($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeletePublicSshKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeletePublicSshKeyForAuthenticatedUser($key_id);
    }
}
