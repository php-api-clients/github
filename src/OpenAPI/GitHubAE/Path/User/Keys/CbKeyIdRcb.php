<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\Keys;

final class CbKeyIdRcb
{
    function get($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetPublicSshKeyForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetPublicSshKeyForAuthenticatedOperation($key_id);
    }
    function delete($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeletePublicSshKeyForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeletePublicSshKeyForAuthenticatedOperation($key_id);
    }
}
