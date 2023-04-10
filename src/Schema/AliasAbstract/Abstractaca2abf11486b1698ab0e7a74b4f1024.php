<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstractaca2abf11486b1698ab0e7a74b4f1024
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"digest":"generated_digest_null","name":"generated_name_null"}';
    public function __construct(public ?string $digest, public ?string $name)
    {
    }
}
