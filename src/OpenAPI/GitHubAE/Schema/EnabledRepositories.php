<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class EnabledRepositories
{
    public const SCHEMA_TITLE = 'enabled-repositories';
    public const SPL_HASH = '000000001f77f88b000000002b0b9da2';
    public const SCHEMA_DESCRIPTION = 'The policy that controls the repositories in the organization that are allowed to run GitHub Actions. Can be one of: `all`, `none`, or `selected`.';
}
