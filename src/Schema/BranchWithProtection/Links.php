<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\BranchWithProtection;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["html","self"],"type":"object","properties":{"html":{"type":"string"},"self":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":"generated_html","self":"generated_self"}';
    public function __construct(public ?string $html, public ?string $self)
    {
    }
}
