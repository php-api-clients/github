<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract89d46ec0ee21a22863fbe55465d1c42c
{
    public const SCHEMA_JSON = '{"required":["name","color"],"type":"object","properties":{"name":{"type":"string"},"color":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","color":"generated_color_null"}';
    public function __construct(public string $name, public string $color)
    {
    }
}
