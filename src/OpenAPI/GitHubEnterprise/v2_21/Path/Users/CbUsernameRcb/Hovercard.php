<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Users\CbUsernameRcb;

final class Hovercard
{
    function get($username, $subject_type, $subject_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Users\GetContextForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Users\GetContextForUser($username, $subject_type, $subject_id);
    }
}
