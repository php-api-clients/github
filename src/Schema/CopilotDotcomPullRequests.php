<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CopilotDotcomPullRequests
{
    public const SCHEMA_JSON         = '{
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
                                    "description": "Name of the language used for Copilot code completion suggestions, for the given editor."
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Usage metrics for Copilot for pull requests.';
    public const SCHEMA_EXAMPLE_DATA = '{
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
}';

    /**
     * totalEngagedUsers: The number of users who used Copilot for Pull Requests on github.com to generate a pull request summary at least once.
     * repositories: Repositories in which users used Copilot for Pull Requests to generate pull request summaries
     */
    public function __construct(#[MapFrom('total_engaged_users')]
    public int|null $totalEngagedUsers, public array|null $repositories,)
    {
    }
}
