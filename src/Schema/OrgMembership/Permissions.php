<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\OrgMembership;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Permissions
{
    public const SCHEMA_JSON         = '{"required":["can_create_repository"],"type":"object","properties":{"can_create_repository":{"type":"boolean"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"can_create_repository":false}';

    public function __construct(#[MapFrom('can_create_repository')]
    public bool $canCreateRepository,)
    {
    }
}
