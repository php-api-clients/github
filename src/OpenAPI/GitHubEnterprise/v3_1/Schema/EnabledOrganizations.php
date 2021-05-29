<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class EnabledOrganizations
{
    public const SCHEMA_TITLE       = 'enabled-organizations';
    public const SCHEMA_DESCRIPTION = 'The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions. Can be one of: `all`, `none`, or `selected`.';
}
