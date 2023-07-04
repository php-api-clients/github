<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest;

use ApiClients\Client\GitHub\Schema;

final readonly class PermissionsResult
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"organization":{"type":"object","additionalProperties":{"type":"string"}},"repository":{"type":"object","additionalProperties":{"type":"string"}},"other":{"type":"object","additionalProperties":{"type":"string"}}},"description":"Permissions requested, categorized by type of permission. This field incorporates `permissions_added` and `permissions_upgraded`."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Permissions requested, categorized by type of permission. This field incorporates `permissions_added` and `permissions_upgraded`.';
    public const SCHEMA_EXAMPLE_DATA = '{"organization":[],"repository":[],"other":[]}';

    public function __construct(public Schema\PersonalAccessTokenRequest\PermissionsResult\Organization|null $organization, public Schema\PersonalAccessTokenRequest\PermissionsResult\Repository|null $repository, public Schema\PersonalAccessTokenRequest\PermissionsResult\Other|null $other)
    {
    }
}
