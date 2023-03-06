<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\Transfer\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["new_owner"],"type":"object","properties":{"new_owner":{"type":"string","description":"The username or organization name the repository will be transferred to."},"new_name":{"type":"string","description":"The new name to be given to the repository."},"team_ids":{"type":"array","items":{"type":"integer"},"description":"ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"new_owner":"generated_new_owner","new_name":"generated_new_name","team_ids":[13]}';
    /**
     * new_owner: The username or organization name the repository will be transferred to.
     * new_name: The new name to be given to the repository.
     * team_ids: ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories.
     * @param array<int> $team_ids
     */
    public function __construct(public ?string $new_owner, public string $new_name, public array $team_ids)
    {
    }
}
