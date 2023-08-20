<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleEnforcement
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "disabled",
        "active",
        "evaluate"
    ],
    "type": "string",
    "description": "The enforcement level of the ruleset. `evaluate` allows admins to test rules before enforcing them. Admins can view insights on the Rule Insights page (`evaluate` is only available with GitHub Enterprise)."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The enforcement level of the ruleset. `evaluate` allows admins to test rules before enforcing them. Admins can view insights on the Rule Insights page (`evaluate` is only available with GitHub Enterprise).';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
