<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetContextForUser;

final class Hovercard
{
    function get($username, $subject_type, $subject_id): GetContextForUser
    {
        return new GetContextForUser($username, $subject_type, $subject_id);
    }
}
