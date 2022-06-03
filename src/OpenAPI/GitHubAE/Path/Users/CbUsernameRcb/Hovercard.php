<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb;

final class Hovercard
{
    function get($username, $subject_type, $subject_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetContextForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetContextForUser($username, $subject_type, $subject_id);
    }
}
