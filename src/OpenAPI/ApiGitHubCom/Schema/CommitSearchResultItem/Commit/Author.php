<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitSearchResultItem\Commit;

final readonly class Author
{
    public const SCHEMA_JSON        = '{"required":["name","email","date"],"type":"object","properties":{"name":{"type":"string"},"email":{"type":"string"},"date":{"type":"string","format":"date-time"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $name;
    public ?string $email;
    public ?string $date;

    public function __construct(string $name, string $email, string $date)
    {
        $this->name  = $name;
        $this->email = $email;
        $this->date  = $date;
    }
}
