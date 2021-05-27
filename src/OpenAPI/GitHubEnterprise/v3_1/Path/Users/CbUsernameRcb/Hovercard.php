<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Users\CbUsernameRcb;

final class Hovercard
{
    function get($username, $subject_type, $subject_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetContextForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetContextForUserOperation($username, $subject_type, $subject_id);
    }
}
