<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Users\CbUsernameRcb;

final class Hovercard
{
    function get($username, $subject_type, $subject_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Users\GetContextForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Users\GetContextForUser($username, $subject_type, $subject_id);
    }
}
