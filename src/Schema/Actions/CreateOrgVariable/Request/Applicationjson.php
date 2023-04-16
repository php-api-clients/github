<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Actions\CreateOrgVariable\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name","value","visibility"],"type":"object","properties":{"name":{"type":"string","description":"The name of the variable."},"value":{"type":"string","description":"The value of the variable."},"visibility":{"enum":["all","private","selected"],"type":"string","description":"The type of repositories in the organization that can access the variable. `selected` means only the repositories specified by `selected_repository_ids` can access the variable."},"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"An array of repository ids that can access the organization variable. You can only provide a list of repository ids when the `visibility` is set to `selected`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","value":"generated_value_null","visibility":"all","selected_repository_ids":[13]}';
    /**
     * name: The name of the variable.
     * value: The value of the variable.
     * visibility: The type of repositories in the organization that can access the variable. `selected` means only the repositories specified by `selected_repository_ids` can access the variable.
     * selectedRepositoryIds: An array of repository ids that can access the organization variable. You can only provide a list of repository ids when the `visibility` is set to `selected`.
     * @param ?array<int> $selectedRepositoryIds
     */
    public function __construct(public string $name, public string $value, public string $visibility, #[\EventSauce\ObjectHydrator\MapFrom('selected_repository_ids')] public ?array $selectedRepositoryIds)
    {
    }
}
