<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRulesetConditionsRepositoryNameTarget;

final readonly class RepositoryName
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"include":{"type":"array","items":{"type":"string"},"description":"Array of repository names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~ALL` to include all repositories."},"exclude":{"type":"array","items":{"type":"string"},"description":"Array of repository names or patterns to exclude. The condition will not pass if any of these patterns match."},"protected":{"type":"boolean","description":"Whether renaming of target repositories is prevented."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"include":["generated_include_null"],"exclude":["generated_exclude_null"],"protected":false}';

    /**
     * include: Array of repository names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~ALL` to include all repositories.
     *
     * @param ?array<string> $include
     * exclude: Array of repository names or patterns to exclude. The condition will not pass if any of these patterns match.
     * @param ?array<string> $exclude
     * protected: Whether renaming of target repositories is prevented.
     */
    public function __construct(public ?array $include, public ?array $exclude, public ?bool $protected)
    {
    }
}
