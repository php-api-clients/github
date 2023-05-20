<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{"required":["total_count","devcontainers"],"type":"object","properties":{"total_count":{"type":"integer"},"devcontainers":{"type":"array","items":{"required":["path"],"type":"object","properties":{"path":{"type":"string"},"name":{"type":"string"},"display_name":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":11,"devcontainers":[{"path":"generated","name":"generated","display_name":"generated"},{"path":"generated","name":"generated","display_name":"generated"}]}';

    public function __construct(#[MapFrom('total_count')] public int $totalCount, public array $devcontainers)
    {
    }
}
