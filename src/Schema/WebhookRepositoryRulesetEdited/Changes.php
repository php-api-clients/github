<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited;

use ApiClients\Client\GitHub\Schema;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "object",
            "properties": {
                "from": {
                    "type": "string"
                }
            }
        },
        "enforcement": {
            "type": "object",
            "properties": {
                "from": {
                    "type": "string"
                }
            }
        },
        "conditions": {
            "type": "object",
            "properties": {
                "added": {
                    "type": "array",
                    "items": {
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
                    }
                },
                "deleted": {
                    "type": "array",
                    "items": {
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
                    }
                },
                "updated": {
                    "type": "array",
                    "items": {
                        "type": "object",
                        "properties": {
                            "condition": {
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
                            "changes": {
                                "type": "object",
                                "properties": {
                                    "condition_type": {
                                        "type": "object",
                                        "properties": {
                                            "from": {
                                                "type": "string"
                                            }
                                        }
                                    },
                                    "target": {
                                        "type": "object",
                                        "properties": {
                                            "from": {
                                                "type": "string"
                                            }
                                        }
                                    },
                                    "include": {
                                        "type": "object",
                                        "properties": {
                                            "from": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                }
                                            }
                                        }
                                    },
                                    "exclude": {
                                        "type": "object",
                                        "properties": {
                                            "from": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        },
        "rules": {
            "type": "object",
            "properties": {
                "added": {
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
                                "description": "Choose which environments must be successfully deployed to before refs can be pushed into a ref that matches this rule."
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
                                "description": "Choose which status checks must pass before the ref is updated. When enabled, commits must first be pushed to another ref where the checks pass."
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
                            },
                            {
                                "title": "file_path_restriction",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "file_path_restriction"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "restricted_file_paths"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "restricted_file_paths": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "The file paths that are restricted from being pushed to the commit graph."
                                            }
                                        }
                                    }
                                },
                                "description": "Note: file_path_restriction is in beta and subject to change.\\n\\nPrevent commits that include changes in specified file paths from being pushed to the commit graph."
                            },
                            {
                                "title": "max_file_path_length",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "max_file_path_length"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "max_file_path_length"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "max_file_path_length": {
                                                "maximum": 256,
                                                "minimum": 1,
                                                "type": "integer",
                                                "description": "The maximum amount of characters allowed in file paths"
                                            }
                                        }
                                    }
                                },
                                "description": "Note: max_file_path_length is in beta and subject to change.\\n\\nPrevent commits that include file paths that exceed a specified character limit from being pushed to the commit graph."
                            },
                            {
                                "title": "file_extension_restriction",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "file_extension_restriction"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "restricted_file_extensions"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "restricted_file_extensions": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "The file extensions that are restricted from being pushed to the commit graph."
                                            }
                                        }
                                    }
                                },
                                "description": "Note: file_extension_restriction is in beta and subject to change.\\n\\nPrevent commits that include files with specified file extensions from being pushed to the commit graph."
                            },
                            {
                                "title": "max_file_size",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "max_file_size"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "max_file_size"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "max_file_size": {
                                                "maximum": 100,
                                                "minimum": 1,
                                                "type": "integer",
                                                "description": "The maximum file size allowed in megabytes. This limit does not apply to Git Large File Storage (Git LFS)."
                                            }
                                        }
                                    }
                                },
                                "description": "Note: max_file_size is in beta and subject to change.\\n\\nPrevent commits that exceed a specified file size limit from being pushed to the commit."
                            },
                            {
                                "title": "workflows",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "workflows"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "workflows"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "workflows": {
                                                "type": "array",
                                                "items": {
                                                    "title": "WorkflowFileReference",
                                                    "required": [
                                                        "path",
                                                        "repository_id"
                                                    ],
                                                    "type": "object",
                                                    "properties": {
                                                        "path": {
                                                            "type": "string",
                                                            "description": "The path to the workflow file"
                                                        },
                                                        "ref": {
                                                            "type": "string",
                                                            "description": "The ref (branch or tag) of the workflow file to use"
                                                        },
                                                        "repository_id": {
                                                            "type": "integer",
                                                            "description": "The ID of the repository where the workflow is defined"
                                                        },
                                                        "sha": {
                                                            "type": "string",
                                                            "description": "The commit SHA of the workflow file to use"
                                                        }
                                                    },
                                                    "description": "A workflow that must run for this rule to pass"
                                                },
                                                "description": "Workflows that must pass for this rule to pass."
                                            }
                                        }
                                    }
                                },
                                "description": "Require all changes made to a targeted branch to pass the specified workflows before they can be merged."
                            },
                            {
                                "title": "code_scanning",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "code_scanning"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "code_scanning_tools"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "code_scanning_tools": {
                                                "type": "array",
                                                "items": {
                                                    "title": "CodeScanningTool",
                                                    "required": [
                                                        "alerts_threshold",
                                                        "security_alerts_threshold",
                                                        "tool"
                                                    ],
                                                    "type": "object",
                                                    "properties": {
                                                        "alerts_threshold": {
                                                            "enum": [
                                                                "none",
                                                                "errors",
                                                                "errors_and_warnings",
                                                                "all"
                                                            ],
                                                            "type": "string",
                                                            "description": "The severity level at which code scanning results that raise alerts block a reference update. For more information on alert severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                                        },
                                                        "security_alerts_threshold": {
                                                            "enum": [
                                                                "none",
                                                                "critical",
                                                                "high_or_higher",
                                                                "medium_or_higher",
                                                                "all"
                                                            ],
                                                            "type": "string",
                                                            "description": "The severity level at which code scanning results that raise security alerts block a reference update. For more information on security severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                                        },
                                                        "tool": {
                                                            "type": "string",
                                                            "description": "The name of a code scanning tool"
                                                        }
                                                    },
                                                    "description": "A tool that must provide code scanning results for this rule to pass."
                                                },
                                                "description": "Tools that must provide code scanning results for this rule to pass."
                                            }
                                        }
                                    }
                                },
                                "description": "Choose which tools must provide code scanning results before the reference is updated. When configured, code scanning must be enabled and have results for both the commit and the reference being updated."
                            }
                        ],
                        "description": "A repository rule."
                    }
                },
                "deleted": {
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
                                "description": "Choose which environments must be successfully deployed to before refs can be pushed into a ref that matches this rule."
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
                                "description": "Choose which status checks must pass before the ref is updated. When enabled, commits must first be pushed to another ref where the checks pass."
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
                            },
                            {
                                "title": "file_path_restriction",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "file_path_restriction"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "restricted_file_paths"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "restricted_file_paths": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "The file paths that are restricted from being pushed to the commit graph."
                                            }
                                        }
                                    }
                                },
                                "description": "Note: file_path_restriction is in beta and subject to change.\\n\\nPrevent commits that include changes in specified file paths from being pushed to the commit graph."
                            },
                            {
                                "title": "max_file_path_length",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "max_file_path_length"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "max_file_path_length"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "max_file_path_length": {
                                                "maximum": 256,
                                                "minimum": 1,
                                                "type": "integer",
                                                "description": "The maximum amount of characters allowed in file paths"
                                            }
                                        }
                                    }
                                },
                                "description": "Note: max_file_path_length is in beta and subject to change.\\n\\nPrevent commits that include file paths that exceed a specified character limit from being pushed to the commit graph."
                            },
                            {
                                "title": "file_extension_restriction",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "file_extension_restriction"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "restricted_file_extensions"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "restricted_file_extensions": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "The file extensions that are restricted from being pushed to the commit graph."
                                            }
                                        }
                                    }
                                },
                                "description": "Note: file_extension_restriction is in beta and subject to change.\\n\\nPrevent commits that include files with specified file extensions from being pushed to the commit graph."
                            },
                            {
                                "title": "max_file_size",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "max_file_size"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "max_file_size"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "max_file_size": {
                                                "maximum": 100,
                                                "minimum": 1,
                                                "type": "integer",
                                                "description": "The maximum file size allowed in megabytes. This limit does not apply to Git Large File Storage (Git LFS)."
                                            }
                                        }
                                    }
                                },
                                "description": "Note: max_file_size is in beta and subject to change.\\n\\nPrevent commits that exceed a specified file size limit from being pushed to the commit."
                            },
                            {
                                "title": "workflows",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "workflows"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "workflows"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "workflows": {
                                                "type": "array",
                                                "items": {
                                                    "title": "WorkflowFileReference",
                                                    "required": [
                                                        "path",
                                                        "repository_id"
                                                    ],
                                                    "type": "object",
                                                    "properties": {
                                                        "path": {
                                                            "type": "string",
                                                            "description": "The path to the workflow file"
                                                        },
                                                        "ref": {
                                                            "type": "string",
                                                            "description": "The ref (branch or tag) of the workflow file to use"
                                                        },
                                                        "repository_id": {
                                                            "type": "integer",
                                                            "description": "The ID of the repository where the workflow is defined"
                                                        },
                                                        "sha": {
                                                            "type": "string",
                                                            "description": "The commit SHA of the workflow file to use"
                                                        }
                                                    },
                                                    "description": "A workflow that must run for this rule to pass"
                                                },
                                                "description": "Workflows that must pass for this rule to pass."
                                            }
                                        }
                                    }
                                },
                                "description": "Require all changes made to a targeted branch to pass the specified workflows before they can be merged."
                            },
                            {
                                "title": "code_scanning",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "code_scanning"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "code_scanning_tools"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "code_scanning_tools": {
                                                "type": "array",
                                                "items": {
                                                    "title": "CodeScanningTool",
                                                    "required": [
                                                        "alerts_threshold",
                                                        "security_alerts_threshold",
                                                        "tool"
                                                    ],
                                                    "type": "object",
                                                    "properties": {
                                                        "alerts_threshold": {
                                                            "enum": [
                                                                "none",
                                                                "errors",
                                                                "errors_and_warnings",
                                                                "all"
                                                            ],
                                                            "type": "string",
                                                            "description": "The severity level at which code scanning results that raise alerts block a reference update. For more information on alert severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                                        },
                                                        "security_alerts_threshold": {
                                                            "enum": [
                                                                "none",
                                                                "critical",
                                                                "high_or_higher",
                                                                "medium_or_higher",
                                                                "all"
                                                            ],
                                                            "type": "string",
                                                            "description": "The severity level at which code scanning results that raise security alerts block a reference update. For more information on security severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                                        },
                                                        "tool": {
                                                            "type": "string",
                                                            "description": "The name of a code scanning tool"
                                                        }
                                                    },
                                                    "description": "A tool that must provide code scanning results for this rule to pass."
                                                },
                                                "description": "Tools that must provide code scanning results for this rule to pass."
                                            }
                                        }
                                    }
                                },
                                "description": "Choose which tools must provide code scanning results before the reference is updated. When configured, code scanning must be enabled and have results for both the commit and the reference being updated."
                            }
                        ],
                        "description": "A repository rule."
                    }
                },
                "updated": {
                    "type": "array",
                    "items": {
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
                                        "description": "Choose which environments must be successfully deployed to before refs can be pushed into a ref that matches this rule."
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
                                        "description": "Choose which status checks must pass before the ref is updated. When enabled, commits must first be pushed to another ref where the checks pass."
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
                                    },
                                    {
                                        "title": "file_path_restriction",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "file_path_restriction"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "restricted_file_paths"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "restricted_file_paths": {
                                                        "type": "array",
                                                        "items": {
                                                            "type": "string"
                                                        },
                                                        "description": "The file paths that are restricted from being pushed to the commit graph."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Note: file_path_restriction is in beta and subject to change.\\n\\nPrevent commits that include changes in specified file paths from being pushed to the commit graph."
                                    },
                                    {
                                        "title": "max_file_path_length",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "max_file_path_length"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "max_file_path_length"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "max_file_path_length": {
                                                        "maximum": 256,
                                                        "minimum": 1,
                                                        "type": "integer",
                                                        "description": "The maximum amount of characters allowed in file paths"
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Note: max_file_path_length is in beta and subject to change.\\n\\nPrevent commits that include file paths that exceed a specified character limit from being pushed to the commit graph."
                                    },
                                    {
                                        "title": "file_extension_restriction",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "file_extension_restriction"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "restricted_file_extensions"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "restricted_file_extensions": {
                                                        "type": "array",
                                                        "items": {
                                                            "type": "string"
                                                        },
                                                        "description": "The file extensions that are restricted from being pushed to the commit graph."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Note: file_extension_restriction is in beta and subject to change.\\n\\nPrevent commits that include files with specified file extensions from being pushed to the commit graph."
                                    },
                                    {
                                        "title": "max_file_size",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "max_file_size"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "max_file_size"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "max_file_size": {
                                                        "maximum": 100,
                                                        "minimum": 1,
                                                        "type": "integer",
                                                        "description": "The maximum file size allowed in megabytes. This limit does not apply to Git Large File Storage (Git LFS)."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Note: max_file_size is in beta and subject to change.\\n\\nPrevent commits that exceed a specified file size limit from being pushed to the commit."
                                    },
                                    {
                                        "title": "workflows",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "workflows"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "workflows"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "workflows": {
                                                        "type": "array",
                                                        "items": {
                                                            "title": "WorkflowFileReference",
                                                            "required": [
                                                                "path",
                                                                "repository_id"
                                                            ],
                                                            "type": "object",
                                                            "properties": {
                                                                "path": {
                                                                    "type": "string",
                                                                    "description": "The path to the workflow file"
                                                                },
                                                                "ref": {
                                                                    "type": "string",
                                                                    "description": "The ref (branch or tag) of the workflow file to use"
                                                                },
                                                                "repository_id": {
                                                                    "type": "integer",
                                                                    "description": "The ID of the repository where the workflow is defined"
                                                                },
                                                                "sha": {
                                                                    "type": "string",
                                                                    "description": "The commit SHA of the workflow file to use"
                                                                }
                                                            },
                                                            "description": "A workflow that must run for this rule to pass"
                                                        },
                                                        "description": "Workflows that must pass for this rule to pass."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Require all changes made to a targeted branch to pass the specified workflows before they can be merged."
                                    },
                                    {
                                        "title": "code_scanning",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "code_scanning"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "code_scanning_tools"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "code_scanning_tools": {
                                                        "type": "array",
                                                        "items": {
                                                            "title": "CodeScanningTool",
                                                            "required": [
                                                                "alerts_threshold",
                                                                "security_alerts_threshold",
                                                                "tool"
                                                            ],
                                                            "type": "object",
                                                            "properties": {
                                                                "alerts_threshold": {
                                                                    "enum": [
                                                                        "none",
                                                                        "errors",
                                                                        "errors_and_warnings",
                                                                        "all"
                                                                    ],
                                                                    "type": "string",
                                                                    "description": "The severity level at which code scanning results that raise alerts block a reference update. For more information on alert severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                                                },
                                                                "security_alerts_threshold": {
                                                                    "enum": [
                                                                        "none",
                                                                        "critical",
                                                                        "high_or_higher",
                                                                        "medium_or_higher",
                                                                        "all"
                                                                    ],
                                                                    "type": "string",
                                                                    "description": "The severity level at which code scanning results that raise security alerts block a reference update. For more information on security severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                                                },
                                                                "tool": {
                                                                    "type": "string",
                                                                    "description": "The name of a code scanning tool"
                                                                }
                                                            },
                                                            "description": "A tool that must provide code scanning results for this rule to pass."
                                                        },
                                                        "description": "Tools that must provide code scanning results for this rule to pass."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Choose which tools must provide code scanning results before the reference is updated. When configured, code scanning must be enabled and have results for both the commit and the reference being updated."
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
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": {
        "from": "generated"
    },
    "enforcement": {
        "from": "generated"
    },
    "conditions": {
        "added": [
            {
                "ref_name": {
                    "include": [
                        "generated",
                        "generated"
                    ],
                    "exclude": [
                        "generated",
                        "generated"
                    ]
                }
            },
            {
                "ref_name": {
                    "include": [
                        "generated",
                        "generated"
                    ],
                    "exclude": [
                        "generated",
                        "generated"
                    ]
                }
            }
        ],
        "deleted": [
            {
                "ref_name": {
                    "include": [
                        "generated",
                        "generated"
                    ],
                    "exclude": [
                        "generated",
                        "generated"
                    ]
                }
            },
            {
                "ref_name": {
                    "include": [
                        "generated",
                        "generated"
                    ],
                    "exclude": [
                        "generated",
                        "generated"
                    ]
                }
            }
        ],
        "updated": [
            {
                "condition": {
                    "ref_name": {
                        "include": [
                            "generated",
                            "generated"
                        ],
                        "exclude": [
                            "generated",
                            "generated"
                        ]
                    }
                },
                "changes": {
                    "condition_type": {
                        "from": "generated"
                    },
                    "target": {
                        "from": "generated"
                    },
                    "include": {
                        "from": [
                            "generated",
                            "generated"
                        ]
                    },
                    "exclude": {
                        "from": [
                            "generated",
                            "generated"
                        ]
                    }
                }
            },
            {
                "condition": {
                    "ref_name": {
                        "include": [
                            "generated",
                            "generated"
                        ],
                        "exclude": [
                            "generated",
                            "generated"
                        ]
                    }
                },
                "changes": {
                    "condition_type": {
                        "from": "generated"
                    },
                    "target": {
                        "from": "generated"
                    },
                    "include": {
                        "from": [
                            "generated",
                            "generated"
                        ]
                    },
                    "exclude": {
                        "from": [
                            "generated",
                            "generated"
                        ]
                    }
                }
            }
        ]
    },
    "rules": {
        "added": [
            null,
            null
        ],
        "deleted": [
            null,
            null
        ],
        "updated": [
            {
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
            },
            {
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
            }
        ]
    }
}';

    public function __construct(public Schema\WebhookRepositoryRulesetEdited\Changes\Name|null $name, public Schema\WebhookRepositoryRulesetEdited\Changes\Enforcement|null $enforcement, public Schema\WebhookRepositoryRulesetEdited\Changes\Conditions|null $conditions, public Schema\WebhookRepositoryRulesetEdited\Changes\Rules|null $rules)
    {
    }
}
