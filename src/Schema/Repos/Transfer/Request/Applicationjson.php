<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\Transfer\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Applicationjson
{
    public const SCHEMA_JSON         = '{"required":["new_owner"],"type":"object","properties":{"new_owner":{"type":"string","description":"The username or organization name the repository will be transferred to."},"new_name":{"type":"string","description":"The new name to be given to the repository."},"team_ids":{"type":"array","items":{"type":"integer"},"description":"ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"new_owner":"generated_new_owner_null","new_name":"generated_new_name_null","team_ids":[13]}';

    /**
     * newOwner: The username or organization name the repository will be transferred to.
     * newName: The new name to be given to the repository.
     * teamIds: ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories.
     *
     * @param ?array<int> $teamIds
     */
    public function __construct(#[MapFrom('new_owner')] public string $newOwner, #[MapFrom('new_name')] public ?string $newName, #[MapFrom('team_ids')] public ?array $teamIds)
    {
    }
}
