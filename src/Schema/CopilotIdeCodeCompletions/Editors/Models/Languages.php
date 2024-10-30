<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CopilotIdeCodeCompletions\Editors\Models;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Languages
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Usage metrics for a given language for the given editor for Copilot code completions.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "total_engaged_users": 19,
    "total_code_suggestions": 22,
    "total_code_acceptances": 22,
    "total_code_lines_suggested": 26,
    "total_code_lines_accepted": 25
}';

    /**
     * name: Name of the language used for Copilot code completion suggestions, for the given editor.
     * totalEngagedUsers: Number of users who accepted at least one Copilot code completion suggestion for the given editor, for the given language. Includes both full and partial acceptances.
     * totalCodeSuggestions: The number of Copilot code suggestions generated for the given editor, for the given language.
     * totalCodeAcceptances: The number of Copilot code suggestions accepted for the given editor, for the given language. Includes both full and partial acceptances.
     * totalCodeLinesSuggested: The number of lines of code suggested by Copilot code completions for the given editor, for the given language.
     * totalCodeLinesAccepted: The number of lines of code accepted from Copilot code suggestions for the given editor, for the given language.
     */
    public function __construct(public string|null $name, #[MapFrom('total_engaged_users')]
    public int|null $totalEngagedUsers, #[MapFrom('total_code_suggestions')]
    public int|null $totalCodeSuggestions, #[MapFrom('total_code_acceptances')]
    public int|null $totalCodeAcceptances, #[MapFrom('total_code_lines_suggested')]
    public int|null $totalCodeLinesSuggested, #[MapFrom('total_code_lines_accepted')]
    public int|null $totalCodeLinesAccepted,)
    {
    }
}
