<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RuleSuite;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RuleEvaluations
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "rule_source": {
            "type": "object",
            "properties": {
                "type": {
                    "type": "string",
                    "description": "The type of rule source."
                },
                "id": {
                    "type": [
                        "integer",
                        "null"
                    ],
                    "description": "The ID of the rule source."
                },
                "name": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The name of the rule source."
                }
            }
        },
        "enforcement": {
            "enum": [
                "active",
                "evaluate",
                "deleted ruleset"
            ],
            "type": "string",
            "description": "The enforcement level of this rule source."
        },
        "result": {
            "enum": [
                "pass",
                "fail"
            ],
            "type": "string",
            "description": "The result of the evaluation of the individual rule."
        },
        "rule_type": {
            "type": "string",
            "description": "The type of rule."
        },
        "details": {
            "type": "string",
            "description": "Any associated details with the rule evaluation."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "rule_source": {
        "type": "generated",
        "id": 2,
        "name": "generated"
    },
    "enforcement": "active",
    "result": "fail",
    "rule_type": "generated",
    "details": "generated"
}';

    /**
     * enforcement: The enforcement level of this rule source.
     * result: The result of the evaluation of the individual rule.
     * ruleType: The type of rule.
     * details: Any associated details with the rule evaluation.
     */
    public function __construct(#[MapFrom('rule_source')]
    public Schema\RuleSuite\RuleEvaluations\RuleSource|null $ruleSource, public string|null $enforcement, public string|null $result, #[MapFrom('rule_type')]
    public string|null $ruleType, public string|null $details,)
    {
    }
}
