<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\CreateOrgRuleset\Request;

use ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Schema\Repos\CreateOrgRuleset\Request\ApplicationJson\Conditions;
use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name",
        "enforcement"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the ruleset."
        },
        "target": {
            "enum": [
                "branch",
                "tag"
            ],
            "type": "string",
            "description": "The target of the ruleset."
        },
        "enforcement": {
            "enum": [
                "disabled",
                "active",
                "evaluate"
            ],
            "type": "string",
            "description": "The enforcement level of the ruleset. `evaluate` allows admins to test rules before enforcing them. Admins can view insights on the Rule Insights page (`evaluate` is only available with GitHub Enterprise)."
        },
        "bypass_actors": {
            "type": "array",
            "items": {
                "title": "Repository Ruleset Bypass Actor",
                "required": [
                    "actor_id",
                    "actor_type",
                    "bypass_mode"
                ],
                "type": "object",
                "properties": {
                    "actor_id": {
                        "type": "integer",
                        "description": "The ID of the actor that can bypass a ruleset. If `actor_type` is `OrganizationAdmin`, this should be `1`."
                    },
                    "actor_type": {
                        "enum": [
                            "RepositoryRole",
                            "Team",
                            "Integration",
                            "OrganizationAdmin"
                        ],
                        "type": "string",
                        "description": "The type of actor that can bypass a ruleset"
                    },
                    "bypass_mode": {
                        "enum": [
                            "always",
                            "pull_request"
                        ],
                        "type": "string",
                        "description": "When the specified actor can bypass the ruleset. `pull_request` means that an actor can only bypass rules on pull requests."
                    }
                },
                "description": "An actor that can bypass rules in a ruleset"
            },
            "description": "The actors that can bypass the rules in this ruleset"
        },
        "conditions": {
            "title": "Organization ruleset conditions",
            "type": "object",
            "oneOf": [
                {
                    "title": "repository_name_and_ref_name",
                    "type": "object",
                    "allOf": [
                        {
                            "title": "Repository ruleset conditions for ref names",
                            "type": "object",
                            "properties": {
                                "ref_name": {
                                    "type": "object",
                                    "properties": {
                                        "include": {
                                            "type": "array",
                                            "items": {
                                                "type": "string"
                                            },
                                            "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
                                        },
                                        "exclude": {
                                            "type": "array",
                                            "items": {
                                                "type": "string"
                                            },
                                            "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
                                        }
                                    }
                                }
                            },
                            "description": "Parameters for a repository ruleset ref name condition"
                        },
                        {
                            "title": "Repository ruleset conditions for repository names",
                            "required": [
                                "repository_name"
                            ],
                            "type": "object",
                            "properties": {
                                "repository_name": {
                                    "type": "object",
                                    "properties": {
                                        "include": {
                                            "type": "array",
                                            "items": {
                                                "type": "string"
                                            },
                                            "description": "Array of repository names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~ALL` to include all repositories."
                                        },
                                        "exclude": {
                                            "type": "array",
                                            "items": {
                                                "type": "string"
                                            },
                                            "description": "Array of repository names or patterns to exclude. The condition will not pass if any of these patterns match."
                                        },
                                        "protected": {
                                            "type": "boolean",
                                            "description": "Whether renaming of target repositories is prevented."
                                        }
                                    }
                                }
                            },
                            "description": "Parameters for a repository name condition"
                        }
                    ],
                    "description": "Conditions to target repositories by name and refs by name"
                },
                {
                    "title": "repository_id_and_ref_name",
                    "type": "object",
                    "allOf": [
                        {
                            "title": "Repository ruleset conditions for ref names",
                            "type": "object",
                            "properties": {
                                "ref_name": {
                                    "type": "object",
                                    "properties": {
                                        "include": {
                                            "type": "array",
                                            "items": {
                                                "type": "string"
                                            },
                                            "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
                                        },
                                        "exclude": {
                                            "type": "array",
                                            "items": {
                                                "type": "string"
                                            },
                                            "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
                                        }
                                    }
                                }
                            },
                            "description": "Parameters for a repository ruleset ref name condition"
                        },
                        {
                            "title": "Repository ruleset conditions for repository IDs",
                            "required": [
                                "repository_id"
                            ],
                            "type": "object",
                            "properties": {
                                "repository_id": {
                                    "type": "object",
                                    "properties": {
                                        "repository_ids": {
                                            "type": "array",
                                            "items": {
                                                "type": "integer"
                                            },
                                            "description": "The repository IDs that the ruleset applies to. One of these IDs must match for the condition to pass."
                                        }
                                    }
                                }
                            },
                            "description": "Parameters for a repository ID condition"
                        }
                    ],
                    "description": "Conditions to target repositories by id and refs by name"
                }
            ],
            "description": "Conditions for an organization ruleset. The conditions object should contain both `repository_name` and `ref_name` properties or both `repository_id` and `ref_name` properties."
        },
        "rules": {
            "type": "array",
            "items": {
                "title": "Repository Rule",
                "type": "object",
                "oneOf": [
                    {
                        "title": "creation",
                        "required": [
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "type": {
                                "enum": [
                                    "creation"
                                ],
                                "type": "string"
                            }
                        },
                        "description": "Only allow users with bypass permission to create matching refs."
                    },
                    {
                        "title": "update",
                        "required": [
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "type": {
                                "enum": [
                                    "update"
                                ],
                                "type": "string"
                            },
                            "parameters": {
                                "required": [
                                    "update_allows_fetch_and_merge"
                                ],
                                "type": "object",
                                "properties": {
                                    "update_allows_fetch_and_merge": {
                                        "type": "boolean",
                                        "description": "Branch can pull changes from its upstream repository"
                                    }
                                }
                            }
                        },
                        "description": "Only allow users with bypass permission to update matching refs."
                    },
                    {
                        "title": "deletion",
                        "required": [
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "type": {
                                "enum": [
                                    "deletion"
                                ],
                                "type": "string"
                            }
                        },
                        "description": "Only allow users with bypass permissions to delete matching refs."
                    },
                    {
                        "title": "required_linear_history",
                        "required": [
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "type": {
                                "enum": [
                                    "required_linear_history"
                                ],
                                "type": "string"
                            }
                        },
                        "description": "Prevent merge commits from being pushed to matching refs."
                    },
                    {
                        "title": "required_deployments",
                        "required": [
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "type": {
                                "enum": [
                                    "required_deployments"
                                ],
                                "type": "string"
                            },
                            "parameters": {
                                "required": [
                                    "required_deployment_environments"
                                ],
                                "type": "object",
                                "properties": {
                                    "required_deployment_environments": {
                                        "type": "array",
                                        "items": {
                                            "type": "string"
                                        },
                                        "description": "The environments that must be successfully deployed to before branches can be merged."
                                    }
                                }
                            }
                        },
                        "description": "Choose which environments must be successfully deployed to before refs can be merged into a branch that matches this rule."
                    },
                    {
                        "title": "required_signatures",
                        "required": [
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "type": {
                                "enum": [
                                    "required_signatures"
                                ],
                                "type": "string"
                            }
                        },
                        "description": "Commits pushed to matching refs must have verified signatures."
                    },
                    {
                        "title": "pull_request",
                        "required": [
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "type": {
                                "enum": [
                                    "pull_request"
                                ],
                                "type": "string"
                            },
                            "parameters": {
                                "required": [
                                    "dismiss_stale_reviews_on_push",
                                    "require_code_owner_review",
                                    "require_last_push_approval",
                                    "required_approving_review_count",
                                    "required_review_thread_resolution"
                                ],
                                "type": "object",
                                "properties": {
                                    "dismiss_stale_reviews_on_push": {
                                        "type": "boolean",
                                        "description": "New, reviewable commits pushed will dismiss previous pull request review approvals."
                                    },
                                    "require_code_owner_review": {
                                        "type": "boolean",
                                        "description": "Require an approving review in pull requests that modify files that have a designated code owner."
                                    },
                                    "require_last_push_approval": {
                                        "type": "boolean",
                                        "description": "Whether the most recent reviewable push must be approved by someone other than the person who pushed it."
                                    },
                                    "required_approving_review_count": {
                                        "maximum": 10,
                                        "minimum": 0,
                                        "type": "integer",
                                        "description": "The number of approving reviews that are required before a pull request can be merged."
                                    },
                                    "required_review_thread_resolution": {
                                        "type": "boolean",
                                        "description": "All conversations on code must be resolved before a pull request can be merged."
                                    }
                                }
                            }
                        },
                        "description": "Require all commits be made to a non-target branch and submitted via a pull request before they can be merged."
                    },
                    {
                        "title": "required_status_checks",
                        "required": [
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "type": {
                                "enum": [
                                    "required_status_checks"
                                ],
                                "type": "string"
                            },
                            "parameters": {
                                "required": [
                                    "required_status_checks",
                                    "strict_required_status_checks_policy"
                                ],
                                "type": "object",
                                "properties": {
                                    "required_status_checks": {
                                        "type": "array",
                                        "items": {
                                            "title": "StatusCheckConfiguration",
                                            "required": [
                                                "context"
                                            ],
                                            "type": "object",
                                            "properties": {
                                                "context": {
                                                    "type": "string",
                                                    "description": "The status check context name that must be present on the commit."
                                                },
                                                "integration_id": {
                                                    "type": "integer",
                                                    "description": "The optional integration ID that this status check must originate from."
                                                }
                                            },
                                            "description": "Required status check"
                                        },
                                        "description": "Status checks that are required."
                                    },
                                    "strict_required_status_checks_policy": {
                                        "type": "boolean",
                                        "description": "Whether pull requests targeting a matching branch must be tested with the latest code. This setting will not take effect unless at least one status check is enabled."
                                    }
                                }
                            }
                        },
                        "description": "Choose which status checks must pass before branches can be merged into a branch that matches this rule. When enabled, commits must first be pushed to another branch, then merged or pushed directly to a ref that matches this rule after status checks have passed."
                    },
                    {
                        "title": "non_fast_forward",
                        "required": [
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "type": {
                                "enum": [
                                    "non_fast_forward"
                                ],
                                "type": "string"
                            }
                        },
                        "description": "Prevent users with push access from force pushing to refs."
                    },
                    {
                        "title": "commit_message_pattern",
                        "required": [
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "type": {
                                "enum": [
                                    "commit_message_pattern"
                                ],
                                "type": "string"
                            },
                            "parameters": {
                                "required": [
                                    "operator",
                                    "pattern"
                                ],
                                "type": "object",
                                "properties": {
                                    "name": {
                                        "type": "string",
                                        "description": "How this rule will appear to users."
                                    },
                                    "negate": {
                                        "type": "boolean",
                                        "description": "If true, the rule will fail if the pattern matches."
                                    },
                                    "operator": {
                                        "enum": [
                                            "starts_with",
                                            "ends_with",
                                            "contains",
                                            "regex"
                                        ],
                                        "type": "string",
                                        "description": "The operator to use for matching."
                                    },
                                    "pattern": {
                                        "type": "string",
                                        "description": "The pattern to match with."
                                    }
                                }
                            }
                        },
                        "description": "Parameters to be used for the commit_message_pattern rule"
                    },
                    {
                        "title": "commit_author_email_pattern",
                        "required": [
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "type": {
                                "enum": [
                                    "commit_author_email_pattern"
                                ],
                                "type": "string"
                            },
                            "parameters": {
                                "required": [
                                    "operator",
                                    "pattern"
                                ],
                                "type": "object",
                                "properties": {
                                    "name": {
                                        "type": "string",
                                        "description": "How this rule will appear to users."
                                    },
                                    "negate": {
                                        "type": "boolean",
                                        "description": "If true, the rule will fail if the pattern matches."
                                    },
                                    "operator": {
                                        "enum": [
                                            "starts_with",
                                            "ends_with",
                                            "contains",
                                            "regex"
                                        ],
                                        "type": "string",
                                        "description": "The operator to use for matching."
                                    },
                                    "pattern": {
                                        "type": "string",
                                        "description": "The pattern to match with."
                                    }
                                }
                            }
                        },
                        "description": "Parameters to be used for the commit_author_email_pattern rule"
                    },
                    {
                        "title": "committer_email_pattern",
                        "required": [
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "type": {
                                "enum": [
                                    "committer_email_pattern"
                                ],
                                "type": "string"
                            },
                            "parameters": {
                                "required": [
                                    "operator",
                                    "pattern"
                                ],
                                "type": "object",
                                "properties": {
                                    "name": {
                                        "type": "string",
                                        "description": "How this rule will appear to users."
                                    },
                                    "negate": {
                                        "type": "boolean",
                                        "description": "If true, the rule will fail if the pattern matches."
                                    },
                                    "operator": {
                                        "enum": [
                                            "starts_with",
                                            "ends_with",
                                            "contains",
                                            "regex"
                                        ],
                                        "type": "string",
                                        "description": "The operator to use for matching."
                                    },
                                    "pattern": {
                                        "type": "string",
                                        "description": "The pattern to match with."
                                    }
                                }
                            }
                        },
                        "description": "Parameters to be used for the committer_email_pattern rule"
                    },
                    {
                        "title": "branch_name_pattern",
                        "required": [
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "type": {
                                "enum": [
                                    "branch_name_pattern"
                                ],
                                "type": "string"
                            },
                            "parameters": {
                                "required": [
                                    "operator",
                                    "pattern"
                                ],
                                "type": "object",
                                "properties": {
                                    "name": {
                                        "type": "string",
                                        "description": "How this rule will appear to users."
                                    },
                                    "negate": {
                                        "type": "boolean",
                                        "description": "If true, the rule will fail if the pattern matches."
                                    },
                                    "operator": {
                                        "enum": [
                                            "starts_with",
                                            "ends_with",
                                            "contains",
                                            "regex"
                                        ],
                                        "type": "string",
                                        "description": "The operator to use for matching."
                                    },
                                    "pattern": {
                                        "type": "string",
                                        "description": "The pattern to match with."
                                    }
                                }
                            }
                        },
                        "description": "Parameters to be used for the branch_name_pattern rule"
                    },
                    {
                        "title": "tag_name_pattern",
                        "required": [
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "type": {
                                "enum": [
                                    "tag_name_pattern"
                                ],
                                "type": "string"
                            },
                            "parameters": {
                                "required": [
                                    "operator",
                                    "pattern"
                                ],
                                "type": "object",
                                "properties": {
                                    "name": {
                                        "type": "string",
                                        "description": "How this rule will appear to users."
                                    },
                                    "negate": {
                                        "type": "boolean",
                                        "description": "If true, the rule will fail if the pattern matches."
                                    },
                                    "operator": {
                                        "enum": [
                                            "starts_with",
                                            "ends_with",
                                            "contains",
                                            "regex"
                                        ],
                                        "type": "string",
                                        "description": "The operator to use for matching."
                                    },
                                    "pattern": {
                                        "type": "string",
                                        "description": "The pattern to match with."
                                    }
                                }
                            }
                        },
                        "description": "Parameters to be used for the tag_name_pattern rule"
                    }
                ],
                "description": "A repository rule."
            },
            "description": "An array of rules within the ruleset."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "target": "tag",
    "enforcement": "disabled",
    "bypass_actors": [
        {
            "actor_id": 8,
            "actor_type": "OrganizationAdmin",
            "bypass_mode": "always"
        },
        {
            "actor_id": 8,
            "actor_type": "OrganizationAdmin",
            "bypass_mode": "always"
        }
    ],
    "conditions": null,
    "rules": [
        null,
        null
    ]
}';

    /**
     * name: The name of the ruleset.
     * target: The target of the ruleset.
     * enforcement: The enforcement level of the ruleset. `evaluate` allows admins to test rules before enforcing them. Admins can view insights on the Rule Insights page (`evaluate` is only available with GitHub Enterprise).
     * bypassActors: The actors that can bypass the rules in this ruleset
     * conditions: Conditions for an organization ruleset. The conditions object should contain both `repository_name` and `ref_name` properties or both `repository_id` and `ref_name` properties.
     * rules: An array of rules within the ruleset.
     */
    public function __construct(public string $name, public string|null $target, public string $enforcement, #[MapFrom('bypass_actors')]
    public array|null $bypassActors, #[Conditions]
    public Schema\RepositoryRulesetConditions|null $conditions, public array|null $rules,)
    {
    }
}
