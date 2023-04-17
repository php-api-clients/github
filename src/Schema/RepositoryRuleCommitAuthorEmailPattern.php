<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleCommitAuthorEmailPattern
{
    public const SCHEMA_JSON         = '{"title":"commit_author_email_pattern","required":["type"],"type":"object","properties":{"type":{"enum":["commit_author_email_pattern"],"type":"string"},"parameters":{"required":["operator","pattern"],"type":"object","properties":{"name":{"type":"string","description":"How this rule will appear to users."},"negate":{"type":"boolean","description":"If true, the rule will fail if the pattern matches."},"operator":{"enum":["starts_with","ends_with","contains","regex"],"type":"string","description":"The operator to use for matching."},"pattern":{"type":"string","description":"The pattern to match with."}}}},"description":"Parameters to be used for the commit_author_email_pattern rule"}';
    public const SCHEMA_TITLE        = 'commit_author_email_pattern';
    public const SCHEMA_DESCRIPTION  = 'Parameters to be used for the commit_author_email_pattern rule';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"commit_author_email_pattern","parameters":{"name":"generated_name_null","negate":false,"operator":"starts_with","pattern":"generated_pattern_null"}}';

    public function __construct(public string $type, public ?Schema\RepositoryRuleCommitAuthorEmailPattern\Parameters $parameters)
    {
    }
}
