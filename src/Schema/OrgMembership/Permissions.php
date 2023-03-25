<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\OrgMembership;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"required":["can_create_repository"],"type":"object","properties":{"can_create_repository":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"canCreateRepository":false}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('can_create_repository')] public bool $canCreateRepository)
    {
    }
}
