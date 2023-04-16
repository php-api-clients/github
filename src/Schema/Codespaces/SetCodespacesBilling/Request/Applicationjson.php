<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Codespaces\SetCodespacesBilling\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
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
