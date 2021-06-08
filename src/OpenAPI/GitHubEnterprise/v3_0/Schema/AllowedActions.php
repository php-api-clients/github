<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class AllowedActions
{
    public const SCHEMA_TITLE       = 'allowed-actions';
    public const SCHEMA_DESCRIPTION = 'The permissions policy that controls the actions that are allowed to run. Can be one of: `all`, `local_only`, or `selected`.';
}
