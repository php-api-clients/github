<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Copilot\AddCopilotForBusinessSeatsForTeams\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["selected_teams"],"type":"object","properties":{"selected_teams":{"minItems":1,"type":"array","items":{"type":"string"},"description":"List of team names within the organization to which to grant access to GitHub Copilot."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"selected_teams":["generated"]}';

    /**
     * selectedTeams: List of team names within the organization to which to grant access to GitHub Copilot.
     */
    public function __construct(#[MapFrom('selected_teams')]
    public array $selectedTeams,)
    {
    }
}
