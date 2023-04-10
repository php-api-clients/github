<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract209d04e127a5f89885df3848973b280a
{
    public const SCHEMA_JSON = '{"required":["id","url","project_id","project_url","column_name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string","format":"uri"},"project_id":{"type":"integer"},"project_url":{"type":"string","format":"uri"},"column_name":{"type":"string"},"previous_column_name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"url":"https:\\/\\/example.com\\/","project_id":13,"project_url":"https:\\/\\/example.com\\/","column_name":"generated_column_name_null","previous_column_name":"generated_previous_column_name_null"}';
    public function __construct(public int $id, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('project_id')] public int $projectId, #[\EventSauce\ObjectHydrator\MapFrom('project_url')] public string $projectUrl, #[\EventSauce\ObjectHydrator\MapFrom('column_name')] public string $columnName, #[\EventSauce\ObjectHydrator\MapFrom('previous_column_name')] public ?string $previousColumnName)
    {
    }
}
