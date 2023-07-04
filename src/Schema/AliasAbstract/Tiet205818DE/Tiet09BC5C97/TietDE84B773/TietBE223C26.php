<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet205818DE\Tiet09BC5C97\TietDE84B773;

abstract readonly class TietBE223C26
{
    public const SCHEMA_JSON         = '{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"admin":false,"maintain":false,"push":false,"triage":false,"pull":false}';

    public function __construct(public bool $admin, public bool|null $maintain, public bool $push, public bool|null $triage, public bool $pull)
    {
    }
}
