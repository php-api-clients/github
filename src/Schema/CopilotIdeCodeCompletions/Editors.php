<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CopilotIdeCodeCompletions;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Editors
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Copilot code completion metrics for active editors.';
    public const SCHEMA_EXAMPLE_DATA = '{
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
}';

    /**
     * name: Name of the given editor.
     * totalEngagedUsers: Number of users who accepted at least one Copilot code completion suggestion for the given editor. Includes both full and partial acceptances.
     * models: List of model metrics for custom models and the default model.
     */
    public function __construct(public string|null $name, #[MapFrom('total_engaged_users')]
    public int|null $totalEngagedUsers, public array|null $models,)
    {
    }
}
