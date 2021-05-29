<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetContextForUserOperation;

final class Hovercard
{
    function get($username, $subject_type, $subject_id): GetContextForUserOperation
    {
        return new GetContextForUserOperation($username, $subject_type, $subject_id);
    }
}
