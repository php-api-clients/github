<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\FileCommit\Commit;

final readonly class Author
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"date":"generated","name":"generated","email":"generated"}';

    public function __construct(public ?string $date, public ?string $name, public ?string $email)
    {
    }
}
