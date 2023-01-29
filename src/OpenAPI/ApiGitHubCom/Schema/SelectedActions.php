<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SelectedActions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"github_owned_allowed":{"type":"boolean","description":"Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization."},"verified_allowed":{"type":"boolean","description":"Whether actions from GitHub Marketplace verified creators are allowed. Set to `true` to allow all actions by GitHub Marketplace verified creators."},"patterns_allowed":{"type":"array","items":{"type":"string"},"description":"Specifies a list of string-matching patterns to allow specific action(s) and reusable workflow(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa\\/octocat@*`, `monalisa\\/octocat@v2`, `monalisa\\/*`.\\n\\n**Note**: The `patterns_allowed` setting only applies to public repositories."}}}';
    public const SCHEMA_TITLE = 'selected-actions';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization.
     */
    public readonly bool $github_owned_allowed;
    /**
     * Whether actions from GitHub Marketplace verified creators are allowed. Set to `true` to allow all actions by GitHub Marketplace verified creators.
     */
    public readonly bool $verified_allowed;
    /**
     * Specifies a list of string-matching patterns to allow specific action(s) and reusable workflow(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa/octocat@*`, `monalisa/octocat@v2`, `monalisa/*`.
     **Note**: The `patterns_allowed` setting only applies to public repositories.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SelectedActions\PatternsAllowed>
     */
    public readonly array $patterns_allowed;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SelectedActions\PatternsAllowed> $patterns_allowed
     */
    public function __construct(bool $github_owned_allowed, bool $verified_allowed, array $patterns_allowed)
    {
        $this->github_owned_allowed = $github_owned_allowed;
        $this->verified_allowed = $verified_allowed;
        $this->patterns_allowed = $patterns_allowed;
    }
}
