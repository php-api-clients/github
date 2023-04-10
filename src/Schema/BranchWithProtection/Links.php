<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\BranchWithProtection;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["html","self"],"type":"object","properties":{"html":{"type":"string"},"self":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":"generated_html_null","self":"https:\\/\\/example.com\\/"}';
    public function __construct(public string $html, public string $self)
    {
    }
}
