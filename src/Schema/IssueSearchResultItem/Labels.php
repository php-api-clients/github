<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\IssueSearchResultItem;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Labels
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer","format":"int64"},"node_id":{"type":"string"},"url":{"type":"string"},"name":{"type":"string"},"color":{"type":"string"},"default":{"type":"boolean"},"description":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"node_id":"generated_node_id_null","url":"generated_url_null","name":"generated_name_null","color":"generated_color_null","default":false,"description":"generated_description_null"}';
    public function __construct(public ?int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, public ?string $url, public ?string $name, public ?string $color, public ?bool $default, public ?string $description)
    {
    }
}
