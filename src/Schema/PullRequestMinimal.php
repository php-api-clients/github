<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PullRequestMinimal
{
    public const SCHEMA_JSON = '{"title":"Pull Request Minimal","required":["id","number","url","head","base"],"type":"object","properties":{"id":{"type":"integer"},"number":{"type":"integer"},"url":{"type":"string"},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"sha":{"type":"string"},"repo":{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}}},"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"sha":{"type":"string"},"repo":{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}}}}}';
    public const SCHEMA_TITLE = 'Pull Request Minimal';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"number":13,"url":"generated_url","head":{"ref":"generated_ref","sha":"generated_sha","repo":{"id":13,"url":"generated_url","name":"generated_name"}},"base":{"ref":"generated_ref","sha":"generated_sha","repo":{"id":13,"url":"generated_url","name":"generated_name"}}}';
    public function __construct(public ?int $id, public ?int $number, public ?string $url, public ?Schema\PullRequestMinimal\Head $head, public ?Schema\PullRequestMinimal\Head $base)
    {
    }
}
