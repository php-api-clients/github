<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
abstract readonly class Abstract7edbae9cab82b9e60b3aaf7cf305338e
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"organization":{"type":"object","additionalProperties":{"type":"string"}},"repository":{"type":"object","additionalProperties":{"type":"string"}},"other":{"type":"object","additionalProperties":{"type":"string"}}},"description":"Permissions requested, categorized by type of permission."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Permissions requested, categorized by type of permission.';
    public const SCHEMA_EXAMPLE_DATA = '{"organization":null,"repository":null,"other":null}';
    public function __construct(public mixed $organization, public mixed $repository, public mixed $other)
    {
    }
}
