<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\ContributorActivity;

final readonly class Weeks
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"w":{"type":"integer"},"a":{"type":"integer"},"d":{"type":"integer"},"c":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"w":1,"a":1,"d":1,"c":1}';

    public function __construct(public ?int $w, public ?int $a, public ?int $d, public ?int $c)
    {
    }
}
