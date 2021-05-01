<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class SelectedActions
{
    public const SCHEMA_TITLE = 'selected-actions';
    public const SCHEMA_DESCRIPTION = '';
    /**Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization.**/
    private boolean $github_owned_allowed;
    /**Specifies a list of string-matching patterns to allow specific action(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa/octocat@*`, `monalisa/octocat@v2`, `monalisa/*`."**/
    private array $patterns_allowed;
    public function github_owned_allowed() : boolean
    {
        return $this->github_owned_allowed;
    }
    public function patterns_allowed() : array
    {
        return $this->patterns_allowed;
    }
}