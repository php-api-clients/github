<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\FileCommit\Commit;

final readonly class Author
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $date;
    public ?string $name;
    public ?string $email;
    public function __construct(string $date, string $name, string $email)
    {
        $this->date = $date;
        $this->name = $name;
        $this->email = $email;
    }
}
