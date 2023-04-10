<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstractc23f2af09e530976a2e3984a52070677
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"role":{"enum":["member","maintainer"],"type":"string","description":"The role that this user should have in the team.","default":"member"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"role":"member"}';
    /**
     * role: The role that this user should have in the team.
     */
    public function __construct(public ?string $role)
    {
    }
}
