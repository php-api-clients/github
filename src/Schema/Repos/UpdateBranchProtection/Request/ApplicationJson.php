<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "required_status_checks",
        "enforce_admins",
        "required_pull_request_reviews",
        "restrictions"
    ],
    "type": "object",
    "properties": {
        "required_status_checks": {
            "required": [
                "strict",
                "contexts"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "strict": {
                    "type": "boolean",
                    "description": "Require branches to be up to date before merging."
                },
                "contexts": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "**Closing down notice**: The list of status checks to require in order to merge into this branch. If any of these checks have recently been set by a particular GitHub App, they will be required to come from that app in future for the branch to merge. Use `checks` instead of `contexts` for more fine-grained control.",
                    "deprecated": true
                },
                "checks": {
                    "type": "array",
                    "items": {
                        "required": [
                            "context"
                        ],
                        "type": "object",
                        "properties": {
                            "context": {
                                "type": "string",
                                "description": "The name of the required check"
                            },
                            "app_id": {
                                "type": "integer",
                                "description": "The ID of the GitHub App that must provide this check. Omit this field to automatically select the GitHub App that has recently provided this check, or any app if it was not set by a GitHub App. Pass -1 to explicitly allow any app to set the status."
                            }
                        }
                    },
                    "description": "The list of status checks to require in order to merge into this branch."
                }
            },
            "description": "Require status checks to pass before merging. Set to `null` to disable."
        },
        "enforce_admins": {
            "type": [
                "boolean",
                "null"
            ],
            "description": "Enforce all configured restrictions for administrators. Set to `true` to enforce required status checks for repository administrators. Set to `null` to disable."
        },
        "required_pull_request_reviews": {
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "dismissal_restrictions": {
                    "type": "object",
                    "properties": {
                        "users": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "description": "The list of user `login`s with dismissal access"
                        },
                        "teams": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "description": "The list of team `slug`s with dismissal access"
                        },
                        "apps": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "description": "The list of app `slug`s with dismissal access"
                        }
                    },
                    "description": "Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories."
                },
                "dismiss_stale_reviews": {
                    "type": "boolean",
                    "description": "Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit."
                },
                "require_code_owner_reviews": {
                    "type": "boolean",
                    "description": "Blocks merging pull requests until [code owners](https:\\/\\/docs.github.com\\/articles\\/about-code-owners\\/) review them."
                },
                "required_approving_review_count": {
                    "type": "integer",
                    "description": "Specify the number of reviewers required to approve pull requests. Use a number between 1 and 6 or 0 to not require reviewers."
                },
                "require_last_push_approval": {
                    "type": "boolean",
                    "description": "Whether the most recent push must be approved by someone other than the person who pushed it. Default: `false`.",
                    "default": false
                },
                "bypass_pull_request_allowances": {
                    "type": "object",
                    "properties": {
                        "users": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "description": "The list of user `login`s allowed to bypass pull request requirements."
                        },
                        "teams": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "description": "The list of team `slug`s allowed to bypass pull request requirements."
                        },
                        "apps": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "description": "The list of app `slug`s allowed to bypass pull request requirements."
                        }
                    },
                    "description": "Allow specific users, teams, or apps to bypass pull request requirements."
                }
            },
            "description": "Require at least one approving review on a pull request, before merging. Set to `null` to disable."
        },
        "restrictions": {
            "required": [
                "users",
                "teams"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "users": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "The list of user `login`s with push access"
                },
                "teams": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "The list of team `slug`s with push access"
                },
                "apps": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "The list of app `slug`s with push access"
                }
            },
            "description": "Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable."
        },
        "required_linear_history": {
            "type": "boolean",
            "description": "Enforces a linear commit Git history, which prevents anyone from pushing merge commits to a branch. Set to `true` to enforce a linear commit history. Set to `false` to disable a linear commit Git history. Your repository must allow squash merging or rebase merging before you can enable a linear commit history. Default: `false`. For more information, see \\"[Requiring a linear commit history](https:\\/\\/docs.github.com\\/github\\/administering-a-repository\\/requiring-a-linear-commit-history)\\" in the GitHub Help documentation."
        },
        "allow_force_pushes": {
            "type": [
                "boolean",
                "null"
            ],
            "description": "Permits force pushes to the protected branch by anyone with write access to the repository. Set to `true` to allow force pushes. Set to `false` or `null` to block force pushes. Default: `false`. For more information, see \\"[Enabling force pushes to a protected branch](https:\\/\\/docs.github.com\\/github\\/administering-a-repository\\/enabling-force-pushes-to-a-protected-branch)\\" in the GitHub Help documentation.\\""
        },
        "allow_deletions": {
            "type": "boolean",
            "description": "Allows deletion of the protected branch by anyone with write access to the repository. Set to `false` to prevent deletion of the protected branch. Default: `false`. For more information, see \\"[Enabling force pushes to a protected branch](https:\\/\\/docs.github.com\\/github\\/administering-a-repository\\/enabling-force-pushes-to-a-protected-branch)\\" in the GitHub Help documentation."
        },
        "block_creations": {
            "type": "boolean",
            "description": "If set to `true`, the `restrictions` branch protection settings which limits who can push will also block pushes which create new branches, unless the push is initiated by a user, team, or app which has the ability to push. Set to `true` to restrict new branch creation. Default: `false`."
        },
        "required_conversation_resolution": {
            "type": "boolean",
            "description": "Requires all conversations on code to be resolved before a pull request can be merged into a branch that matches this rule. Set to `false` to disable. Default: `false`."
        },
        "lock_branch": {
            "type": "boolean",
            "description": "Whether to set the branch as read-only. If this is true, users will not be able to push to the branch. Default: `false`.",
            "default": false
        },
        "allow_fork_syncing": {
            "type": "boolean",
            "description": "Whether users can pull changes from upstream when the branch is locked. Set to `true` to allow fork syncing. Set to `false` to prevent fork syncing. Default: `false`.",
            "default": false
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "required_status_checks": {
        "strict": false,
        "contexts": [
            "generated",
            "generated"
        ],
        "checks": [
            {
                "context": "generated",
                "app_id": 6
            },
            {
                "context": "generated",
                "app_id": 6
            }
        ]
    },
    "enforce_admins": false,
    "required_pull_request_reviews": {
        "dismissal_restrictions": {
            "users": [
                "generated",
                "generated"
            ],
            "teams": [
                "generated",
                "generated"
            ],
            "apps": [
                "generated",
                "generated"
            ]
        },
        "dismiss_stale_reviews": false,
        "require_code_owner_reviews": false,
        "required_approving_review_count": 31,
        "require_last_push_approval": false,
        "bypass_pull_request_allowances": {
            "users": [
                "generated",
                "generated"
            ],
            "teams": [
                "generated",
                "generated"
            ],
            "apps": [
                "generated",
                "generated"
            ]
        }
    },
    "restrictions": {
        "users": [
            "generated",
            "generated"
        ],
        "teams": [
            "generated",
            "generated"
        ],
        "apps": [
            "generated",
            "generated"
        ]
    },
    "required_linear_history": false,
    "allow_force_pushes": false,
    "allow_deletions": false,
    "block_creations": false,
    "required_conversation_resolution": false,
    "lock_branch": false,
    "allow_fork_syncing": false
}';

    /**
     * requiredStatusChecks: Require status checks to pass before merging. Set to `null` to disable.
     * enforceAdmins: Enforce all configured restrictions for administrators. Set to `true` to enforce required status checks for repository administrators. Set to `null` to disable.
     * requiredPullRequestReviews: Require at least one approving review on a pull request, before merging. Set to `null` to disable.
     * restrictions: Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable.
     * requiredLinearHistory: Enforces a linear commit Git history, which prevents anyone from pushing merge commits to a branch. Set to `true` to enforce a linear commit history. Set to `false` to disable a linear commit Git history. Your repository must allow squash merging or rebase merging before you can enable a linear commit history. Default: `false`. For more information, see "[Requiring a linear commit history](https://docs.github.com/github/administering-a-repository/requiring-a-linear-commit-history)" in the GitHub Help documentation.
     * allowForcePushes: Permits force pushes to the protected branch by anyone with write access to the repository. Set to `true` to allow force pushes. Set to `false` or `null` to block force pushes. Default: `false`. For more information, see "[Enabling force pushes to a protected branch](https://docs.github.com/github/administering-a-repository/enabling-force-pushes-to-a-protected-branch)" in the GitHub Help documentation."
     * allowDeletions: Allows deletion of the protected branch by anyone with write access to the repository. Set to `false` to prevent deletion of the protected branch. Default: `false`. For more information, see "[Enabling force pushes to a protected branch](https://docs.github.com/github/administering-a-repository/enabling-force-pushes-to-a-protected-branch)" in the GitHub Help documentation.
     * blockCreations: If set to `true`, the `restrictions` branch protection settings which limits who can push will also block pushes which create new branches, unless the push is initiated by a user, team, or app which has the ability to push. Set to `true` to restrict new branch creation. Default: `false`.
     * requiredConversationResolution: Requires all conversations on code to be resolved before a pull request can be merged into a branch that matches this rule. Set to `false` to disable. Default: `false`.
     * lockBranch: Whether to set the branch as read-only. If this is true, users will not be able to push to the branch. Default: `false`.
     * allowForkSyncing: Whether users can pull changes from upstream when the branch is locked. Set to `true` to allow fork syncing. Set to `false` to prevent fork syncing. Default: `false`.
     */
    public function __construct(#[MapFrom('required_status_checks')]
    public Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredStatusChecks|null $requiredStatusChecks, #[MapFrom('enforce_admins')]
    public bool|null $enforceAdmins, #[MapFrom('required_pull_request_reviews')]
    public Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredPullRequestReviews|null $requiredPullRequestReviews, public Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\Restrictions|null $restrictions, #[MapFrom('required_linear_history')]
    public bool|null $requiredLinearHistory, #[MapFrom('allow_force_pushes')]
    public bool|null $allowForcePushes, #[MapFrom('allow_deletions')]
    public bool|null $allowDeletions, #[MapFrom('block_creations')]
    public bool|null $blockCreations, #[MapFrom('required_conversation_resolution')]
    public bool|null $requiredConversationResolution, #[MapFrom('lock_branch')]
    public bool|null $lockBranch, #[MapFrom('allow_fork_syncing')]
    public bool|null $allowForkSyncing,)
    {
    }
}
