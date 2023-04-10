<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\Applicationjson\H200;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Devcontainers
{
    public const SCHEMA_JSON = '{"required":["path"],"type":"object","properties":{"path":{"type":"string"},"name":{"type":"string"},"display_name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"generated_path_null","name":"generated_name_null","display_name":"generated_display_name_null"}';
    public function __construct(public string $path, public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('display_name')] public ?string $displayName)
    {
    }
}
