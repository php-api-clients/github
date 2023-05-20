<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class ParticipationStats
{
    public const SCHEMA_JSON         = '{"title":"Participation Stats","required":["all","owner"],"type":"object","properties":{"all":{"type":"array","items":{"type":"integer"}},"owner":{"type":"array","items":{"type":"integer"}}}}';
    public const SCHEMA_TITLE        = 'Participation Stats';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"all":[4,5],"owner":[6,7]}';

    public function __construct(public array $all, public array $owner)
    {
    }
}
