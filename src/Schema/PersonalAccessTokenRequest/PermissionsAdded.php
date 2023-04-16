<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest;

final readonly class PermissionsAdded
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"organization":{"type":"object","additionalProperties":{"type":"string"}},"repository":{"type":"object","additionalProperties":{"type":"string"}},"other":{"type":"object","additionalProperties":{"type":"string"}}},"description":"New requested permissions, categorized by type of permission."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'New requested permissions, categorized by type of permission.';
    public const SCHEMA_EXAMPLE_DATA = '{"organization":null,"repository":null,"other":null}';

    public function __construct(public mixed $organization, public mixed $repository, public mixed $other)
    {
    }
}
