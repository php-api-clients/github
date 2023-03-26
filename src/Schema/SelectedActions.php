<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class SelectedActions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"github_owned_allowed":{"type":"boolean","description":"Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization."},"verified_allowed":{"type":"boolean","description":"Whether actions from GitHub Marketplace verified creators are allowed. Set to `true` to allow all actions by GitHub Marketplace verified creators."},"patterns_allowed":{"type":"array","items":{"type":"string"},"description":"Specifies a list of string-matching patterns to allow specific action(s) and reusable workflow(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa\\/octocat@*`, `monalisa\\/octocat@v2`, `monalisa\\/*`.\\n\\n**Note**: The `patterns_allowed` setting only applies to public repositories."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"github_owned_allowed":false,"verified_allowed":false,"patterns_allowed":["generated_patterns_allowed_null"]}';
    /**
     * githubOwnedAllowed: Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization.
     * verifiedAllowed: Whether actions from GitHub Marketplace verified creators are allowed. Set to `true` to allow all actions by GitHub Marketplace verified creators.
     * patternsAllowed: Specifies a list of string-matching patterns to allow specific action(s) and reusable workflow(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa/octocat@*`, `monalisa/octocat@v2`, `monalisa/*`.
     **Note**: The `patterns_allowed` setting only applies to public repositories.
     * @param ?array<string> $patternsAllowed
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('github_owned_allowed')] public ?bool $githubOwnedAllowed, #[\EventSauce\ObjectHydrator\MapFrom('verified_allowed')] public ?bool $verifiedAllowed, #[\EventSauce\ObjectHydrator\MapFrom('patterns_allowed')] public ?array $patternsAllowed)
    {
    }
}
