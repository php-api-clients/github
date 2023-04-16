<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CommitSearchResultItem\Commit;

final readonly class Author
{
    public const SCHEMA_JSON         = '{"required":["name","email","date"],"type":"object","properties":{"name":{"type":"string"},"email":{"type":"string"},"date":{"type":"string","format":"date-time"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","email":"generated_email_null","date":"1970-01-01T00:00:00+00:00"}';

    public function __construct(public string $name, public string $email, public string $date)
    {
    }
}
