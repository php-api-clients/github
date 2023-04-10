<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\OrgMembership;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"required":["can_create_repository"],"type":"object","properties":{"can_create_repository":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"can_create_repository":false}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('can_create_repository')] public bool $canCreateRepository)
    {
    }
}
