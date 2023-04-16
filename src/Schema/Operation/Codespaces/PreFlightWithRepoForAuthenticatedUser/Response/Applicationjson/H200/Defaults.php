<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operation\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\Applicationjson\H200;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Defaults
{
    public const SCHEMA_JSON         = '{"required":["location","devcontainer_path"],"type":"object","properties":{"location":{"type":"string"},"devcontainer_path":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"location":"generated_location_null","devcontainer_path":"generated_devcontainer_path_null"}';

    public function __construct(public string $location, #[MapFrom('devcontainer_path')] public ?string $devcontainerPath)
    {
    }
}
