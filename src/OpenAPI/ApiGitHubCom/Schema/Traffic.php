<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class Traffic
{
    public const SCHEMA_JSON        = '{"title":"Traffic","required":["timestamp","uniques","count"],"type":"object","properties":{"timestamp":{"type":"string","format":"date-time"},"uniques":{"type":"integer"},"count":{"type":"integer"}}}';
    public const SCHEMA_TITLE       = 'Traffic';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $timestamp;
    public ?int $uniques;
    public ?int $count;

    public function __construct(string $timestamp, int $uniques, int $count)
    {
        $this->timestamp = $timestamp;
        $this->uniques   = $uniques;
        $this->count     = $count;
    }
}
