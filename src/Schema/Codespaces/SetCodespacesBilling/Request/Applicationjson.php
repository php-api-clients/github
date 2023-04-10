<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Codespaces\SetCodespacesBilling\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["visibility"],"type":"object","properties":{"visibility":{"enum":["disabled","selected_members","all_members","all_members_and_outside_collaborators"],"type":"string","description":"Which users can access codespaces in the organization. `disabled` means that no users can access codespaces in the organization."},"selected_usernames":{"maxItems":100,"type":"array","items":{"type":"string"},"description":"The usernames of the organization members who should have access to codespaces in the organization. Required when `visibility` is `selected_members`. The provided list of usernames will replace any existing value."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"visibility":"disabled","selected_usernames":["generated_selected_usernames_null"]}';
    /**
     * visibility: Which users can access codespaces in the organization. `disabled` means that no users can access codespaces in the organization.
     * selectedUsernames: The usernames of the organization members who should have access to codespaces in the organization. Required when `visibility` is `selected_members`. The provided list of usernames will replace any existing value.
     * @param ?array<string> $selectedUsernames
     */
    public function __construct(public string $visibility, #[\EventSauce\ObjectHydrator\MapFrom('selected_usernames')] public ?array $selectedUsernames)
    {
    }
}
