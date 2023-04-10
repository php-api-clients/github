<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Integration;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"issues":{"type":"string"},"checks":{"type":"string"},"metadata":{"type":"string"},"contents":{"type":"string"},"deployments":{"type":"string"}},"description":"The set of permissions for the GitHub app","example":{"issues":"read","deployments":"write"},"additionalProperties":{"type":"string"}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The set of permissions for the GitHub app';
    public const SCHEMA_EXAMPLE_DATA = '{"issues":"read","deployments":"write","checks":"generated_checks_null","metadata":"generated_metadata_null","contents":"generated_contents_null"}';
    public function __construct(public ?string $issues, public ?string $checks, public ?string $metadata, public ?string $contents, public ?string $deployments)
    {
    }
}
