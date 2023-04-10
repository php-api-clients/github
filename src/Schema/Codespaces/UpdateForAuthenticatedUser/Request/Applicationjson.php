<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Codespaces\UpdateForAuthenticatedUser\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"machine":{"type":"string","description":"A valid machine to transition this codespace to."},"display_name":{"type":"string","description":"Display name for this codespace"},"recent_folders":{"type":"array","items":{"type":"string"},"description":"Recently opened folders inside the codespace. It is currently used by the clients to determine the folder path to load the codespace in."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"machine":"generated_machine_null","display_name":"generated_display_name_null","recent_folders":["generated_recent_folders_null"]}';
    /**
     * machine: A valid machine to transition this codespace to.
     * displayName: Display name for this codespace
     * recentFolders: Recently opened folders inside the codespace. It is currently used by the clients to determine the folder path to load the codespace in.
     * @param ?array<string> $recentFolders
     */
    public function __construct(public ?string $machine, #[\EventSauce\ObjectHydrator\MapFrom('display_name')] public ?string $displayName, #[\EventSauce\ObjectHydrator\MapFrom('recent_folders')] public ?array $recentFolders)
    {
    }
}
