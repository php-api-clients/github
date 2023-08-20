<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Rules;

use ApiClients\Client\GitHub\Attribute\CastUnionToType\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Rule;
use ApiClients\Client\GitHub\Schema;

final readonly class Updated
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "rule": {
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
                    "description": "Prevent merge commits from being pushed to matching branches."
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
                    "description": "Choose which environments must be successfully deployed to before branches can be merged into a branch that matches this rule."
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
                    "description": "Commits pushed to matching branches must have verified signatures."
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
                    "description": "Choose which status checks must pass before branches can be merged into a branch that matches this rule. When enabled, commits must first be pushed to another branch, then merged or pushed directly to a branch that matches this rule after status checks have passed."
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
                    "description": "Prevent users with push access from force pushing to branches."
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
        "changes": {
            "type": "object",
            "properties": {
                "configuration": {
                    "type": "object",
                    "properties": {
                        "from": {
                            "type": "string"
                        }
                    }
                },
                "rule_type": {
                    "type": "object",
                    "properties": {
                        "from": {
                            "type": "string"
                        }
                    }
                },
                "pattern": {
                    "type": "object",
                    "properties": {
                        "from": {
                            "type": "string"
                        }
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "rule": null,
    "changes": {
        "configuration": {
            "from": "generated"
        },
        "rule_type": {
            "from": "generated"
        },
        "pattern": {
            "from": "generated"
        }
    }
}';

    /**
     * rule: A repository rule.
     */
    public function __construct(#[Rule]
    public Schema\RepositoryRuleCreation|Schema\RepositoryRuleUpdate|Schema\RepositoryRuleDeletion|Schema\RepositoryRuleRequiredLinearHistory|Schema\RepositoryRuleRequiredDeployments|Schema\RepositoryRuleRequiredSignatures|Schema\RepositoryRulePullRequest|Schema\RepositoryRuleRequiredStatusChecks|Schema\RepositoryRuleNonFastForward|Schema\RepositoryRuleCommitMessagePattern|Schema\RepositoryRuleCommitAuthorEmailPattern|Schema\RepositoryRuleCommitterEmailPattern|Schema\RepositoryRuleBranchNamePattern|Schema\RepositoryRuleTagNamePattern|null $rule, public Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes|null $changes,)
    {
    }
}
