<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CopilotUsageMetrics;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Breakdown
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Breakdown of Copilot usage by editor for this language';
    public const SCHEMA_EXAMPLE_DATA = '{
    "language": "generated",
    "editor": "generated",
    "suggestions_count": 17,
    "acceptances_count": 17,
    "lines_suggested": 15,
    "lines_accepted": 14,
    "active_users": 12
}';

    /**
     * language: The language in which Copilot suggestions were shown to users in the specified editor.
     * editor: The editor in which Copilot suggestions were shown to users for the specified language.
     * suggestionsCount: The number of Copilot suggestions shown to users in the editor specified during the day specified.
     * acceptancesCount: The number of Copilot suggestions accepted by users in the editor specified during the day specified.
     * linesSuggested: The number of lines of code suggested by Copilot in the editor specified during the day specified.
     * linesAccepted: The number of lines of code accepted by users in the editor specified during the day specified.
     * activeUsers: The number of users who were shown Copilot completion suggestions in the editor specified during the day specified.
     */
    public function __construct(public string|null $language, public string|null $editor, #[MapFrom('suggestions_count')]
    public int|null $suggestionsCount, #[MapFrom('acceptances_count')]
    public int|null $acceptancesCount, #[MapFrom('lines_suggested')]
    public int|null $linesSuggested, #[MapFrom('lines_accepted')]
    public int|null $linesAccepted, #[MapFrom('active_users')]
    public int|null $activeUsers,)
    {
    }
}
