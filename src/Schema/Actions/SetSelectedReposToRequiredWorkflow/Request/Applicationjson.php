<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Actions\SetSelectedReposToRequiredWorkflow\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"The IDs of the repositories for which the workflow should be required."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"selected_repository_ids":[13]}';
    /**
     * selected_repository_ids: The IDs of the repositories for which the workflow should be required.
     * @param ?array<int> $selected_repository_ids
     */
    public function __construct(public ?array $selected_repository_ids)
    {
    }
}
