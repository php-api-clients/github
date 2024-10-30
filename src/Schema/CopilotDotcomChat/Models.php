<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CopilotDotcomChat;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Models
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "is_custom_model": false,
    "custom_model_training_date": "generated",
    "total_engaged_users": 19,
    "total_chats": 11
}';

    /**
     * name: Name of the language used for Copilot code completion suggestions, for the given editor.
     * isCustomModel: Indicates whether a model is custom or default.
     * customModelTrainingDate: The training date for the custom model (if applicable).
     * totalEngagedUsers: Total number of users who prompted Copilot Chat on github.com at least once for each model.
     * totalChats: Total number of chats initiated by users on github.com.
     */
    public function __construct(public string|null $name, #[MapFrom('is_custom_model')]
    public bool|null $isCustomModel, #[MapFrom('custom_model_training_date')]
    public string|null $customModelTrainingDate, #[MapFrom('total_engaged_users')]
    public int|null $totalEngagedUsers, #[MapFrom('total_chats')]
    public int|null $totalChats,)
    {
    }
}
