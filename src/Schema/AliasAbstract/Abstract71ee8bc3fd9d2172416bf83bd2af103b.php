<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract71ee8bc3fd9d2172416bf83bd2af103b
{
    public const SCHEMA_JSON = '{"title":"Workflow","required":["badge_url","created_at","html_url","id","name","node_id","path","state","updated_at","url"],"type":["object","null"],"properties":{"badge_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":"string"},"node_id":{"type":"string"},"path":{"type":"string"},"state":{"type":"string"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Workflow';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"badge_url":"https:\\/\\/example.com\\/","created_at":"1970-01-01T00:00:00+00:00","html_url":"https:\\/\\/example.com\\/","id":13,"name":"generated_name_null","node_id":"generated_node_id_null","path":"generated_path_null","state":"generated_state_null","updated_at":"1970-01-01T00:00:00+00:00","url":"https:\\/\\/example.com\\/"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('badge_url')] public string $badgeUrl, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $path, public string $state, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, public string $url)
    {
    }
}
