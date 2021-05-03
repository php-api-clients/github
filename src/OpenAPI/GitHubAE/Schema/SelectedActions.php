<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class SelectedActions
{
    public const SCHEMA_TITLE = 'selected-actions';
    public const SPL_HASH = '000000005dfdae1a0000000040885a06';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization.
     */
    private ?bool $github_owned_allowed = null;
    /**
     * Whether actions in GitHub Marketplace from verified creators are allowed. Set to `true` to allow all GitHub Marketplace actions by verified creators.
     */
    private ?bool $verified_allowed = null;
    /**
     * Specifies a list of string-matching patterns to allow specific action(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa/octocat@*`, `monalisa/octocat@v2`, `monalisa/*`."
     */
    private array $patterns_allowed = array();
    public function github_owned_allowed() : ?bool
    {
        return $this->github_owned_allowed;
    }
    public function verified_allowed() : ?bool
    {
        return $this->verified_allowed;
    }
    public function patterns_allowed() : array
    {
        return $this->patterns_allowed;
    }
}
