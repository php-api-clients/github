<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CopilotDotcomPullRequests;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Repositories
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
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
}';

    /**
     * name: Repository name
     * totalEngagedUsers: The number of users who generated pull request summaries using Copilot for Pull Requests in the given repository.
     * models: List of model metrics for custom models and the default model.
     */
    public function __construct(public string|null $name, #[MapFrom('total_engaged_users')]
    public int|null $totalEngagedUsers, public array|null $models,)
    {
    }
}
