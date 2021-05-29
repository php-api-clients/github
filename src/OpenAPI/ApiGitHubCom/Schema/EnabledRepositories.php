<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class EnabledRepositories
{
    public const SCHEMA_TITLE       = 'enabled-repositories';
    public const SCHEMA_DESCRIPTION = 'The policy that controls the repositories in the organization that are allowed to run GitHub Actions. Can be one of: `all`, `none`, or `selected`.';
}
