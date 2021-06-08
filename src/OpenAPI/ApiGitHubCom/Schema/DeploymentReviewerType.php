<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class DeploymentReviewerType
{
    public const SCHEMA_TITLE       = 'deployment-reviewer-type';
    public const SCHEMA_DESCRIPTION = 'The type of reviewer. Must be one of: `User` or `Team`';
}
