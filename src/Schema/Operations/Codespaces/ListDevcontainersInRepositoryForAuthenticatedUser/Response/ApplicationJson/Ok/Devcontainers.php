<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Devcontainers
{
    public const SCHEMA_JSON         = '{"required":["path"],"type":"object","properties":{"path":{"type":"string"},"name":{"type":"string"},"display_name":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"generated","name":"generated","display_name":"generated"}';

    public function __construct(public string $path, public string|null $name, #[MapFrom('display_name')]
    public string|null $displayName,)
    {
    }
}
