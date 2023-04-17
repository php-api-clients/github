<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

abstract readonly class Abstract64f93e7beb03b1402b202b0b2c35ea3b
{
    public const SCHEMA_JSON         = '{"required":["operator","pattern"],"type":"object","properties":{"name":{"type":"string","description":"How this rule will appear to users."},"negate":{"type":"boolean","description":"If true, the rule will fail if the pattern matches."},"operator":{"enum":["starts_with","ends_with","contains","regex"],"type":"string","description":"The operator to use for matching."},"pattern":{"type":"string","description":"The pattern to match with."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","negate":false,"operator":"starts_with","pattern":"generated_pattern_null"}';

    /**
     * name: How this rule will appear to users.
     * negate: If true, the rule will fail if the pattern matches.
     * operator: The operator to use for matching.
     * pattern: The pattern to match with.
     */
    public function __construct(public ?string $name, public ?bool $negate, public string $operator, public string $pattern)
    {
    }
}
