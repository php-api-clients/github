<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookStatus\Commit;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Parents
{
    public const SCHEMA_JSON = '{"required":["sha","url","html_url"],"type":"object","properties":{"html_url":{"type":"string","format":"uri"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html_url":"generated_html_url","sha":"generated_sha","url":"generated_url"}';
    public function __construct(public ?string $html_url, public ?string $sha, public ?string $url)
    {
    }
}
