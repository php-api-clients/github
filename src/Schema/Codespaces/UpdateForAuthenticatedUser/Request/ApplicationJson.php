<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Codespaces\UpdateForAuthenticatedUser\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"machine":{"type":"string","description":"A valid machine to transition this codespace to."},"display_name":{"type":"string","description":"Display name for this codespace"},"recent_folders":{"type":"array","items":{"type":"string"},"description":"Recently opened folders inside the codespace. It is currently used by the clients to determine the folder path to load the codespace in."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"machine":"generated","display_name":"generated","recent_folders":["generated","generated"]}';

    /**
     * machine: A valid machine to transition this codespace to.
     * displayName: Display name for this codespace
     * recentFolders: Recently opened folders inside the codespace. It is currently used by the clients to determine the folder path to load the codespace in.
     */
    public function __construct(public ?string $machine, #[MapFrom('display_name')] public ?string $displayName, #[MapFrom('recent_folders')] public ?array $recentFolders)
    {
    }
}
