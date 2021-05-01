<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\\User\Keys;

final class CbKeyIdRcb
{
    function get($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Users\GetPublicSshKeyForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Users\GetPublicSshKeyForAuthenticatedOperation($key_id);
    }
    function delete($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Users\DeletePublicSshKeyForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Users\DeletePublicSshKeyForAuthenticatedOperation($key_id);
    }
}
