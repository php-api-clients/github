<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Authorization;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class App
{
    public const SCHEMA_JSON = '{"required":["client_id","name","url"],"type":"object","properties":{"client_id":{"type":"string"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"clientId":"generated_client_id_null","name":"generated_name_null","url":"https:\\/\\/example.com\\/"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('client_id')] public string $clientId, public string $name, public string $url)
    {
    }
}
