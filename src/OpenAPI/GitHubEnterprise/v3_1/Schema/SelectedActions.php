<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class SelectedActions
{
    public const SCHEMA_TITLE       = 'selected-actions';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization.
     */
    private bool $github_owned_allowed;
    /**
     * Specifies a list of string-matching patterns to allow specific action(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa/octocat@*`, `monalisa/octocat@v2`, `monalisa/*`."
     */
    private array $patterns_allowed = [];

    /**
     * Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization.
     */
    public function github_owned_allowed(): bool
    {
        return $this->github_owned_allowed;
    }

    /**
     * Specifies a list of string-matching patterns to allow specific action(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa/octocat@*`, `monalisa/octocat@v2`, `monalisa/*`."
     */
    public function patterns_allowed(): array
    {
        return $this->patterns_allowed;
    }
}
