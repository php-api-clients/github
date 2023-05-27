<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietFF56CC5B\TietA763EEA7\Tiet71AA4AC6;

use ApiClients\Client\GitHub\Schema;

abstract readonly class TietF5624593
{
    public const SCHEMA_JSON         = '{"title":"Check Run Pull Request","required":["url","id","number","head","base"],"type":"object","properties":{"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"id":{"type":"integer"},"number":{"type":"integer"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = 'Check Run Pull Request';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"base":{"ref":"generated","repo":{"id":2,"name":"generated","url":"https:\\/\\/example.com\\/"},"sha":"generated"},"head":{"ref":"generated","repo":{"id":2,"name":"generated","url":"https:\\/\\/example.com\\/"},"sha":"generated"},"id":2,"number":6,"url":"https:\\/\\/example.com\\/"}';

    public function __construct(public Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base $base, public Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Head $head, public int $id, public int $number, public string $url)
    {
    }
}
