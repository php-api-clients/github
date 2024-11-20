<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CopilotDotcomChat
{
    public const SCHEMA_JSON         = '{
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
    "description": "Usage metrics for Copilot Chat in github.com",
    "additionalProperties": true
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Usage metrics for Copilot Chat in github.com';
    public const SCHEMA_EXAMPLE_DATA = '{
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
}';

    /**
     * totalEngagedUsers: Total number of users who prompted Copilot Chat on github.com at least once.
     * models: List of model metrics for a custom models and the default model.
     */
    public function __construct(#[MapFrom('total_engaged_users')]
    public int|null $totalEngagedUsers, public array|null $models,)
    {
    }
}
