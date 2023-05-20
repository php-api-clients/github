<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Gists\CheckIsStarred\Response\ApplicationJson;

final readonly class NotFound
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{},"additionalProperties":false}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
