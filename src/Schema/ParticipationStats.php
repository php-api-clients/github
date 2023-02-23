<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class ParticipationStats
{
    public const SCHEMA_JSON = '{"title":"Participation Stats","required":["all","owner"],"type":"object","properties":{"all":{"type":"array","items":{"type":"integer"}},"owner":{"type":"array","items":{"type":"integer"}}}}';
    public const SCHEMA_TITLE = 'Participation Stats';
    public const SCHEMA_DESCRIPTION = '';
    public ?array $all;
    public ?array $owner;
    public function __construct(array $all, array $owner)
    {
        $this->all = $all;
        $this->owner = $owner;
    }
}
