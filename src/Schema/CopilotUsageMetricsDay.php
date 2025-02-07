<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class CopilotUsageMetricsDay
{
    public const SCHEMA_JSON         = '{
    "title": "Copilot Usage Metrics",
    "required": [
        "date"
    ],
    "type": "object",
    "properties": {
        "date": {
            "type": "string",
            "description": "The date for which the usage metrics are aggregated, in `YYYY-MM-DD` format.",
            "format": "date"
        },
        "total_active_users": {
            "type": "integer",
            "description": "The total number of Copilot users with activity belonging to any Copilot feature, globally, for the given day. Includes passive activity such as receiving a code suggestion, as well as engagement activity such as accepting a code suggestion or prompting chat. Does not include authentication events. Is not limited to the individual features detailed on the endpoint."
        },
        "total_engaged_users": {
            "type": "integer",
            "description": "The total number of Copilot users who engaged with any Copilot feature, for the given day. Examples include but are not limited to accepting a code suggestion, prompting Copilot chat, or triggering a PR Summary. Does not include authentication events. Is not limited to the individual features detailed on the endpoint."
        },
        "copilot_ide_code_completions": {
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "total_engaged_users": {
                    "type": "integer",
                    "description": "Number of users who accepted at least one Copilot code suggestion, across all active editors. Includes both full and partial acceptances."
                },
                "languages": {
                    "type": "array",
                    "items": {
                        "type": "object",
                        "properties": {
                            "name": {
                                "type": "string",
                                "description": "Name of the language used for Copilot code completion suggestions."
                            },
                            "total_engaged_users": {
                                "type": "integer",
                                "description": "Number of users who accepted at least one Copilot code completion suggestion for the given language. Includes both full and partial acceptances."
                            }
                        },
                        "description": "Usage metrics for a given language for the given editor for Copilot code completions."
                    },
                    "description": "Code completion metrics for active languages."
                },
                "editors": {
                    "type": "array",
                    "items": {
                        "type": "object",
                        "properties": {
                            "name": {
                                "type": "string",
                                "description": "Name of the given editor."
                            },
                            "total_engaged_users": {
                                "type": "integer",
                                "description": "Number of users who accepted at least one Copilot code completion suggestion for the given editor. Includes both full and partial acceptances."
                            },
                            "models": {
                                "type": "array",
                                "items": {
                                    "type": "object",
                                    "properties": {
                                        "name": {
                                            "type": "string",
                                            "description": "Name of the model used for Copilot code completion suggestions. If the default model is used will appear as \'default\'."
                                        },
                                        "is_custom_model": {
                                            "type": "boolean",
                                            "description": "Indicates whether a model is custom or default."
                                        },
                                        "custom_model_training_date": {
                                            "type": [
                                                "string",
                                                "null"
                                            ],
                                            "description": "The training date for the custom model."
                                        },
                                        "total_engaged_users": {
                                            "type": "integer",
                                            "description": "Number of users who accepted at least one Copilot code completion suggestion for the given editor, for the given language and model. Includes both full and partial acceptances."
                                        },
                                        "languages": {
                                            "type": "array",
                                            "items": {
                                                "type": "object",
                                                "properties": {
                                                    "name": {
                                                        "type": "string",
                                                        "description": "Name of the language used for Copilot code completion suggestions, for the given editor."
                                                    },
                                                    "total_engaged_users": {
                                                        "type": "integer",
                                                        "description": "Number of users who accepted at least one Copilot code completion suggestion for the given editor, for the given language. Includes both full and partial acceptances."
                                                    },
                                                    "total_code_suggestions": {
                                                        "type": "integer",
                                                        "description": "The number of Copilot code suggestions generated for the given editor, for the given language."
                                                    },
                                                    "total_code_acceptances": {
                                                        "type": "integer",
                                                        "description": "The number of Copilot code suggestions accepted for the given editor, for the given language. Includes both full and partial acceptances."
                                                    },
                                                    "total_code_lines_suggested": {
                                                        "type": "integer",
                                                        "description": "The number of lines of code suggested by Copilot code completions for the given editor, for the given language."
                                                    },
                                                    "total_code_lines_accepted": {
                                                        "type": "integer",
                                                        "description": "The number of lines of code accepted from Copilot code suggestions for the given editor, for the given language."
                                                    }
                                                },
                                                "description": "Usage metrics for a given language for the given editor for Copilot code completions."
                                            },
                                            "description": "Code completion metrics for active languages, for the given editor."
                                        }
                                    }
                                },
                                "description": "List of model metrics for custom models and the default model."
                            }
                        },
                        "description": "Copilot code completion metrics for active editors.",
                        "additionalProperties": true
                    }
                }
            },
            "description": "Usage metrics for Copilot editor code completions in the IDE.",
            "additionalProperties": true
        },
        "copilot_ide_chat": {
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "total_engaged_users": {
                    "type": "integer",
                    "description": "Total number of users who prompted Copilot Chat in the IDE."
                },
                "editors": {
                    "type": "array",
                    "items": {
                        "type": "object",
                        "properties": {
                            "name": {
                                "type": "string",
                                "description": "Name of the given editor."
                            },
                            "total_engaged_users": {
                                "type": "integer",
                                "description": "The number of users who prompted Copilot Chat in the specified editor."
                            },
                            "models": {
                                "type": "array",
                                "items": {
                                    "type": "object",
                                    "properties": {
                                        "name": {
                                            "type": "string",
                                            "description": "Name of the model used for Copilot Chat. If the default model is used will appear as \'default\'."
                                        },
                                        "is_custom_model": {
                                            "type": "boolean",
                                            "description": "Indicates whether a model is custom or default."
                                        },
                                        "custom_model_training_date": {
                                            "type": [
                                                "string",
                                                "null"
                                            ],
                                            "description": "The training date for the custom model."
                                        },
                                        "total_engaged_users": {
                                            "type": "integer",
                                            "description": "The number of users who prompted Copilot Chat in the given editor and model."
                                        },
                                        "total_chats": {
                                            "type": "integer",
                                            "description": "The total number of chats initiated by users in the given editor and model."
                                        },
                                        "total_chat_insertion_events": {
                                            "type": "integer",
                                            "description": "The number of times users accepted a code suggestion from Copilot Chat using the \'Insert Code\' UI element, for the given editor."
                                        },
                                        "total_chat_copy_events": {
                                            "type": "integer",
                                            "description": "The number of times users copied a code suggestion from Copilot Chat using the keyboard, or the \'Copy\' UI element, for the given editor."
                                        }
                                    }
                                },
                                "description": "List of model metrics for custom models and the default model."
                            }
                        },
                        "description": "Copilot Chat metrics, for active editors."
                    }
                }
            },
            "description": "Usage metrics for Copilot Chat in the IDE.",
            "additionalProperties": true
        },
        "copilot_dotcom_chat": {
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "total_engaged_users": {
                    "type": "integer",
                    "description": "Total number of users who prompted Copilot Chat on github.com at least once."
                },
                "models": {
                    "type": "array",
                    "items": {
                        "type": "object",
                        "properties": {
                            "name": {
                                "type": "string",
                                "description": "Name of the model used for Copilot Chat. If the default model is used will appear as \'default\'."
                            },
                            "is_custom_model": {
                                "type": "boolean",
                                "description": "Indicates whether a model is custom or default."
                            },
                            "custom_model_training_date": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "description": "The training date for the custom model (if applicable)."
                            },
                            "total_engaged_users": {
                                "type": "integer",
                                "description": "Total number of users who prompted Copilot Chat on github.com at least once for each model."
                            },
                            "total_chats": {
                                "type": "integer",
                                "description": "Total number of chats initiated by users on github.com."
                            }
                        }
                    },
                    "description": "List of model metrics for a custom models and the default model."
                }
            },
            "description": "Usage metrics for Copilot Chat in GitHub.com",
            "additionalProperties": true
        },
        "copilot_dotcom_pull_requests": {
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "total_engaged_users": {
                    "type": "integer",
                    "description": "The number of users who used Copilot for Pull Requests on github.com to generate a pull request summary at least once."
                },
                "repositories": {
                    "type": "array",
                    "items": {
                        "type": "object",
                        "properties": {
                            "name": {
                                "type": "string",
                                "description": "Repository name"
                            },
                            "total_engaged_users": {
                                "type": "integer",
                                "description": "The number of users who generated pull request summaries using Copilot for Pull Requests in the given repository."
                            },
                            "models": {
                                "type": "array",
                                "items": {
                                    "type": "object",
                                    "properties": {
                                        "name": {
                                            "type": "string",
                                            "description": "Name of the model used for Copilot pull request summaries. If the default model is used will appear as \'default\'."
                                        },
                                        "is_custom_model": {
                                            "type": "boolean",
                                            "description": "Indicates whether a model is custom or default."
                                        },
                                        "custom_model_training_date": {
                                            "type": [
                                                "string",
                                                "null"
                                            ],
                                            "description": "The training date for the custom model."
                                        },
                                        "total_pr_summaries_created": {
                                            "type": "integer",
                                            "description": "The number of pull request summaries generated using Copilot for Pull Requests in the given repository."
                                        },
                                        "total_engaged_users": {
                                            "type": "integer",
                                            "description": "The number of users who generated pull request summaries using Copilot for Pull Requests in the given repository and model."
                                        }
                                    }
                                },
                                "description": "List of model metrics for custom models and the default model."
                            }
                        }
                    },
                    "description": "Repositories in which users used Copilot for Pull Requests to generate pull request summaries"
                }
            },
            "description": "Usage metrics for Copilot for pull requests.",
            "additionalProperties": true
        }
    },
    "description": "Copilot usage metrics for a given day.",
    "additionalProperties": true
}';
    public const SCHEMA_TITLE        = 'Copilot Usage Metrics';
    public const SCHEMA_DESCRIPTION  = 'Copilot usage metrics for a given day.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "date": "generated",
    "total_active_users": 18,
    "total_engaged_users": 19,
    "copilot_ide_code_completions": {
        "total_engaged_users": 19,
        "languages": [
            {
                "name": "generated",
                "total_engaged_users": 19
            },
            {
                "name": "generated",
                "total_engaged_users": 19
            }
        ],
        "editors": [
            {
                "name": "generated",
                "total_engaged_users": 19,
                "models": [
                    {
                        "name": "generated",
                        "is_custom_model": false,
                        "custom_model_training_date": "generated",
                        "total_engaged_users": 19,
                        "languages": [
                            {
                                "name": "generated",
                                "total_engaged_users": 19,
                                "total_code_suggestions": 22,
                                "total_code_acceptances": 22,
                                "total_code_lines_suggested": 26,
                                "total_code_lines_accepted": 25
                            },
                            {
                                "name": "generated",
                                "total_engaged_users": 19,
                                "total_code_suggestions": 22,
                                "total_code_acceptances": 22,
                                "total_code_lines_suggested": 26,
                                "total_code_lines_accepted": 25
                            }
                        ]
                    },
                    {
                        "name": "generated",
                        "is_custom_model": false,
                        "custom_model_training_date": "generated",
                        "total_engaged_users": 19,
                        "languages": [
                            {
                                "name": "generated",
                                "total_engaged_users": 19,
                                "total_code_suggestions": 22,
                                "total_code_acceptances": 22,
                                "total_code_lines_suggested": 26,
                                "total_code_lines_accepted": 25
                            },
                            {
                                "name": "generated",
                                "total_engaged_users": 19,
                                "total_code_suggestions": 22,
                                "total_code_acceptances": 22,
                                "total_code_lines_suggested": 26,
                                "total_code_lines_accepted": 25
                            }
                        ]
                    }
                ]
            },
            {
                "name": "generated",
                "total_engaged_users": 19,
                "models": [
                    {
                        "name": "generated",
                        "is_custom_model": false,
                        "custom_model_training_date": "generated",
                        "total_engaged_users": 19,
                        "languages": [
                            {
                                "name": "generated",
                                "total_engaged_users": 19,
                                "total_code_suggestions": 22,
                                "total_code_acceptances": 22,
                                "total_code_lines_suggested": 26,
                                "total_code_lines_accepted": 25
                            },
                            {
                                "name": "generated",
                                "total_engaged_users": 19,
                                "total_code_suggestions": 22,
                                "total_code_acceptances": 22,
                                "total_code_lines_suggested": 26,
                                "total_code_lines_accepted": 25
                            }
                        ]
                    },
                    {
                        "name": "generated",
                        "is_custom_model": false,
                        "custom_model_training_date": "generated",
                        "total_engaged_users": 19,
                        "languages": [
                            {
                                "name": "generated",
                                "total_engaged_users": 19,
                                "total_code_suggestions": 22,
                                "total_code_acceptances": 22,
                                "total_code_lines_suggested": 26,
                                "total_code_lines_accepted": 25
                            },
                            {
                                "name": "generated",
                                "total_engaged_users": 19,
                                "total_code_suggestions": 22,
                                "total_code_acceptances": 22,
                                "total_code_lines_suggested": 26,
                                "total_code_lines_accepted": 25
                            }
                        ]
                    }
                ]
            }
        ]
    },
    "copilot_ide_chat": {
        "total_engaged_users": 19,
        "editors": [
            {
                "name": "generated",
                "total_engaged_users": 19,
                "models": [
                    {
                        "name": "generated",
                        "is_custom_model": false,
                        "custom_model_training_date": "generated",
                        "total_engaged_users": 19,
                        "total_chats": 11,
                        "total_chat_insertion_events": 27,
                        "total_chat_copy_events": 22
                    },
                    {
                        "name": "generated",
                        "is_custom_model": false,
                        "custom_model_training_date": "generated",
                        "total_engaged_users": 19,
                        "total_chats": 11,
                        "total_chat_insertion_events": 27,
                        "total_chat_copy_events": 22
                    }
                ]
            },
            {
                "name": "generated",
                "total_engaged_users": 19,
                "models": [
                    {
                        "name": "generated",
                        "is_custom_model": false,
                        "custom_model_training_date": "generated",
                        "total_engaged_users": 19,
                        "total_chats": 11,
                        "total_chat_insertion_events": 27,
                        "total_chat_copy_events": 22
                    },
                    {
                        "name": "generated",
                        "is_custom_model": false,
                        "custom_model_training_date": "generated",
                        "total_engaged_users": 19,
                        "total_chats": 11,
                        "total_chat_insertion_events": 27,
                        "total_chat_copy_events": 22
                    }
                ]
            }
        ]
    },
    "copilot_dotcom_chat": {
        "total_engaged_users": 19,
        "models": [
            {
                "name": "generated",
                "is_custom_model": false,
                "custom_model_training_date": "generated",
                "total_engaged_users": 19,
                "total_chats": 11
            },
            {
                "name": "generated",
                "is_custom_model": false,
                "custom_model_training_date": "generated",
                "total_engaged_users": 19,
                "total_chats": 11
            }
        ]
    },
    "copilot_dotcom_pull_requests": {
        "total_engaged_users": 19,
        "repositories": [
            {
                "name": "generated",
                "total_engaged_users": 19,
                "models": [
                    {
                        "name": "generated",
                        "is_custom_model": false,
                        "custom_model_training_date": "generated",
                        "total_pr_summaries_created": 26,
                        "total_engaged_users": 19
                    },
                    {
                        "name": "generated",
                        "is_custom_model": false,
                        "custom_model_training_date": "generated",
                        "total_pr_summaries_created": 26,
                        "total_engaged_users": 19
                    }
                ]
            },
            {
                "name": "generated",
                "total_engaged_users": 19,
                "models": [
                    {
                        "name": "generated",
                        "is_custom_model": false,
                        "custom_model_training_date": "generated",
                        "total_pr_summaries_created": 26,
                        "total_engaged_users": 19
                    },
                    {
                        "name": "generated",
                        "is_custom_model": false,
                        "custom_model_training_date": "generated",
                        "total_pr_summaries_created": 26,
                        "total_engaged_users": 19
                    }
                ]
            }
        ]
    }
}';

    /**
     * date: The date for which the usage metrics are aggregated, in `YYYY-MM-DD` format.
     * totalActiveUsers: The total number of Copilot users with activity belonging to any Copilot feature, globally, for the given day. Includes passive activity such as receiving a code suggestion, as well as engagement activity such as accepting a code suggestion or prompting chat. Does not include authentication events. Is not limited to the individual features detailed on the endpoint.
     * totalEngagedUsers: The total number of Copilot users who engaged with any Copilot feature, for the given day. Examples include but are not limited to accepting a code suggestion, prompting Copilot chat, or triggering a PR Summary. Does not include authentication events. Is not limited to the individual features detailed on the endpoint.
     * copilotIdeCodeCompletions: Usage metrics for Copilot editor code completions in the IDE.
     * copilotIdeChat: Usage metrics for Copilot Chat in the IDE.
     * copilotDotcomChat: Usage metrics for Copilot Chat in GitHub.com
     * copilotDotcomPullRequests: Usage metrics for Copilot for pull requests.
     */
    public function __construct(public string $date, #[MapFrom('total_active_users')]
    public int|null $totalActiveUsers, #[MapFrom('total_engaged_users')]
    public int|null $totalEngagedUsers, #[MapFrom('copilot_ide_code_completions')]
    public Schema\CopilotIdeCodeCompletions|null $copilotIdeCodeCompletions, #[MapFrom('copilot_ide_chat')]
    public Schema\CopilotIdeChat|null $copilotIdeChat, #[MapFrom('copilot_dotcom_chat')]
    public Schema\CopilotDotcomChat|null $copilotDotcomChat, #[MapFrom('copilot_dotcom_pull_requests')]
    public Schema\CopilotDotcomPullRequests|null $copilotDotcomPullRequests,)
    {
    }
}
