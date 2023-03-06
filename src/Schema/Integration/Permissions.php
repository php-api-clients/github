<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Integration;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"issues":{"type":"string"},"checks":{"type":"string"},"metadata":{"type":"string"},"contents":{"type":"string"},"deployments":{"type":"string"}},"description":"The set of permissions for the GitHub app","example":{"issues":"read","deployments":"write"},"additionalProperties":{"type":"string"}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The set of permissions for the GitHub app';
    public const SCHEMA_EXAMPLE_DATA = '{"issues":"read","deployments":"write","checks":"generated_checks","metadata":"generated_metadata","contents":"generated_contents"}';
    public function __construct(public ?string $issues, public ?string $checks, public ?string $metadata, public ?string $contents, public ?string $deployments)
    {
    }
}
