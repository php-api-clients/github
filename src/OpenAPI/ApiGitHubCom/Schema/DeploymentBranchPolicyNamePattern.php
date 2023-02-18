<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class DeploymentBranchPolicyNamePattern
{
    public const SCHEMA_JSON        = '{"title":"Deployment branch policy name pattern","required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name pattern that branches must match in order to deploy to the environment.\\n\\nWildcard characters will not match `\\/`. For example, to match branches that begin with `release\\/` and contain an additional single slash, use `release\\/*\\/*`.\\nFor more information about pattern matching syntax, see the [Ruby File.fnmatch documentation](https:\\/\\/ruby-doc.org\\/core-2.5.1\\/File.html#method-c-fnmatch).","examples":["release\\/*"]}}}';
    public const SCHEMA_TITLE       = 'Deployment branch policy name pattern';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name pattern that branches must match in order to deploy to the environment.

    Wildcard characters will not match `/`. For example, to match branches that begin with `release/` and contain an additional single slash, use `release/*`.
    For more information about pattern matching syntax, see the [Ruby File.fnmatch documentation](https://ruby-doc.org/core-2.5.1/File.html#method-c-fnmatch).
     */
    public ?string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
