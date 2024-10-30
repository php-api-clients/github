<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CopilotIdeChat
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Usage metrics for Copilot Chat in the IDE.';
    public const SCHEMA_EXAMPLE_DATA = '{
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
}';

    /**
     * totalEngagedUsers: Total number of users who prompted Copilot Chat in the IDE.
     */
    public function __construct(#[MapFrom('total_engaged_users')]
    public int|null $totalEngagedUsers, public array|null $editors,)
    {
    }
}
