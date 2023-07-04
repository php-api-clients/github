<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet7EDBAE9C\TietAB82B9E6\Tiet0B3AAF7C;

use ApiClients\Client\GitHub\Schema;

abstract readonly class TietF305338E
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"organization":{"type":"object","additionalProperties":{"type":"string"}},"repository":{"type":"object","additionalProperties":{"type":"string"}},"other":{"type":"object","additionalProperties":{"type":"string"}}},"description":"Permissions requested, categorized by type of permission."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Permissions requested, categorized by type of permission.';
    public const SCHEMA_EXAMPLE_DATA = '{"organization":[],"repository":[],"other":[]}';

    public function __construct(public Schema\OrganizationProgrammaticAccessGrantRequest\Permissions\Organization|null $organization, public Schema\OrganizationProgrammaticAccessGrantRequest\Permissions\Repository|null $repository, public Schema\OrganizationProgrammaticAccessGrantRequest\Permissions\Other|null $other)
    {
    }
}
