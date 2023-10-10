<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class DeploymentBranchPolicyNamePatternWithType
{
    public const SCHEMA_JSON         = '{
    "title": "Deployment branch and tag policy name pattern",
    "required": [
        "name"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name pattern that branches or tags must match in order to deploy to the environment.\\n\\nWildcard characters will not match `\\/`. For example, to match branches that begin with `release\\/` and contain an additional single slash, use `release\\/*\\/*`.\\nFor more information about pattern matching syntax, see the [Ruby File.fnmatch documentation](https:\\/\\/ruby-doc.org\\/core-2.5.1\\/File.html#method-c-fnmatch).",
            "examples": [
                "release\\/*"
            ]
        },
        "type": {
            "enum": [
                "branch",
                "tag"
            ],
            "type": "string",
            "description": "Whether this rule targets a branch or tag",
            "examples": [
                "branch"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = 'Deployment branch and tag policy name pattern';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "release\\/*",
    "type": "branch"
}';

    /**
     * name: The name pattern that branches or tags must match in order to deploy to the environment.

    Wildcard characters will not match `/`. For example, to match branches that begin with `release/` and contain an additional single slash, use `release/*`.
    For more information about pattern matching syntax, see the [Ruby File.fnmatch documentation](https://ruby-doc.org/core-2.5.1/File.html#method-c-fnmatch).
     * type: Whether this rule targets a branch or tag
     */
    public function __construct(public string $name, public string|null $type)
    {
    }
}
