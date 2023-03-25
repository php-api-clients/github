<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Actions\SetSelectedReposForOrgVariable\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"The IDs of the repositories that can access the organization variable."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"selectedRepositoryIds":[13]}';
    /**
     * selectedRepositoryIds: The IDs of the repositories that can access the organization variable.
     * @param array<int> $selectedRepositoryIds
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('selected_repository_ids')] public array $selectedRepositoryIds)
    {
    }
}
