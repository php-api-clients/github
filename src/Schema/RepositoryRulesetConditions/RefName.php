<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRulesetConditions;

final readonly class RefName
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"include":{"type":"array","items":{"type":"string"},"description":"Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."},"exclude":{"type":"array","items":{"type":"string"},"description":"Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"include":["generated_include_null"],"exclude":["generated_exclude_null"]}';

    /**
     * include: Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches.
     *
     * @param ?array<string> $include
     * exclude: Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match.
     * @param ?array<string> $exclude
     */
    public function __construct(public ?array $include, public ?array $exclude)
    {
    }
}
