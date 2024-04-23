<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CopilotUsageMetrics
{
    public const SCHEMA_JSON         = '{
    "title": "Copilot Usage Metrics",
    "required": [
        "day",
        "breakdown"
    ],
    "type": "object",
    "properties": {
        "day": {
            "type": "string",
            "description": "The date for which the usage metrics are reported, in `YYYY-MM-DD` format.",
            "format": "date"
        },
        "total_suggestions_count": {
            "type": "integer",
            "description": "The total number of Copilot code completion suggestions shown to users."
        },
        "total_acceptances_count": {
            "type": "integer",
            "description": "The total number of Copilot code completion suggestions accepted by users."
        },
        "total_lines_suggested": {
            "type": "integer",
            "description": "The total number of lines of code completions suggested by Copilot."
        },
        "total_lines_accepted": {
            "type": "integer",
            "description": "The total number of lines of code completions accepted by users."
        },
        "total_active_users": {
            "type": "integer",
            "description": "The total number of users who were shown Copilot code completion suggestions during the day specified."
        },
        "total_chat_acceptances": {
            "type": "integer",
            "description": "The total instances of users who accepted code suggested by Copilot Chat in the IDE (panel and inline)."
        },
        "total_chat_turns": {
            "type": "integer",
            "description": "The total number of chat turns (prompt and response pairs) sent between users and Copilot Chat in the IDE."
        },
        "total_active_chat_users": {
            "type": "integer",
            "description": "The total number of users who interacted with Copilot Chat in the IDE during the day specified."
        },
        "breakdown": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "type": "object",
                "properties": {
                    "language": {
                        "type": "string",
                        "description": "The language in which Copilot suggestions were shown to users in the specified editor."
                    },
                    "editor": {
                        "type": "string",
                        "description": "The editor in which Copilot suggestions were shown to users for the specified language."
                    },
                    "suggestions_count": {
                        "type": "integer",
                        "description": "The number of Copilot suggestions shown to users in the editor specified during the day specified."
                    },
                    "acceptances_count": {
                        "type": "integer",
                        "description": "The number of Copilot suggestions accepted by users in the editor specified during the day specified."
                    },
                    "lines_suggested": {
                        "type": "integer",
                        "description": "The number of lines of code suggested by Copilot in the editor specified during the day specified."
                    },
                    "lines_accepted": {
                        "type": "integer",
                        "description": "The number of lines of code accepted by users in the editor specified during the day specified."
                    },
                    "active_users": {
                        "type": "integer",
                        "description": "The number of users who were shown Copilot completion suggestions in the editor specified during the day specified."
                    }
                },
                "description": "Breakdown of Copilot usage by editor for this language",
                "additionalProperties": true
            },
            "description": "Breakdown of Copilot code completions usage by language and editor"
        }
    },
    "description": "Summary of Copilot usage.",
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = 'Copilot Usage Metrics';
    public const SCHEMA_DESCRIPTION  = 'Summary of Copilot usage.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "day": "generated",
    "total_suggestions_count": 23,
    "total_acceptances_count": 23,
    "total_lines_suggested": 21,
    "total_lines_accepted": 20,
    "total_active_users": 18,
    "total_chat_acceptances": 22,
    "total_chat_turns": 16,
    "total_active_chat_users": 23,
    "breakdown": null
}';

    /**
     * day: The date for which the usage metrics are reported, in `YYYY-MM-DD` format.
     * totalSuggestionsCount: The total number of Copilot code completion suggestions shown to users.
     * totalAcceptancesCount: The total number of Copilot code completion suggestions accepted by users.
     * totalLinesSuggested: The total number of lines of code completions suggested by Copilot.
     * totalLinesAccepted: The total number of lines of code completions accepted by users.
     * totalActiveUsers: The total number of users who were shown Copilot code completion suggestions during the day specified.
     * totalChatAcceptances: The total instances of users who accepted code suggested by Copilot Chat in the IDE (panel and inline).
     * totalChatTurns: The total number of chat turns (prompt and response pairs) sent between users and Copilot Chat in the IDE.
     * totalActiveChatUsers: The total number of users who interacted with Copilot Chat in the IDE during the day specified.
     * breakdown: Breakdown of Copilot code completions usage by language and editor
     */
    public function __construct(public string $day, #[MapFrom('total_suggestions_count')]
    public int|null $totalSuggestionsCount, #[MapFrom('total_acceptances_count')]
    public int|null $totalAcceptancesCount, #[MapFrom('total_lines_suggested')]
    public int|null $totalLinesSuggested, #[MapFrom('total_lines_accepted')]
    public int|null $totalLinesAccepted, #[MapFrom('total_active_users')]
    public int|null $totalActiveUsers, #[MapFrom('total_chat_acceptances')]
    public int|null $totalChatAcceptances, #[MapFrom('total_chat_turns')]
    public int|null $totalChatTurns, #[MapFrom('total_active_chat_users')]
    public int|null $totalActiveChatUsers, public array|null $breakdown,)
    {
    }
}
