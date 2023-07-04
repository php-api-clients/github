<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest;

use ApiClients\Client\GitHub\Schema;

final readonly class PermissionsUpgraded
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"organization":{"type":"object","additionalProperties":{"type":"string"}},"repository":{"type":"object","additionalProperties":{"type":"string"}},"other":{"type":"object","additionalProperties":{"type":"string"}}},"description":"Requested permissions that elevate access for a previously approved request for access, categorized by type of permission."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Requested permissions that elevate access for a previously approved request for access, categorized by type of permission.';
    public const SCHEMA_EXAMPLE_DATA = '{"organization":[],"repository":[],"other":[]}';

    public function __construct(public Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Organization|null $organization, public Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Repository|null $repository, public Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Other|null $other)
    {
    }
}
