<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class PermissionsResult
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"organization":{"type":"object","additionalProperties":{"type":"string"}},"repository":{"type":"object","additionalProperties":{"type":"string"}},"other":{"type":"object","additionalProperties":{"type":"string"}}},"description":"Permissions requested, categorized by type of permission. This field incorporates `permissions_added` and `permissions_upgraded`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Permissions requested, categorized by type of permission. This field incorporates `permissions_added` and `permissions_upgraded`.';
    public const SCHEMA_EXAMPLE_DATA = '{"organization":null,"repository":null,"other":null}';
    public function __construct(public mixed $organization, public mixed $repository, public mixed $other)
    {
    }
}
