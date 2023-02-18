<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repos\DeleteFile\Request\Applicationjson;

final readonly class Author
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"}},"description":"object containing information about the author."}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'object containing information about the author.';
    /**
     * The name of the author (or committer) of the commit
     */
    public ?string $name;
    /**
     * The email of the author (or committer) of the commit
     */
    public ?string $email;

    public function __construct(string $name, string $email)
    {
        $this->name  = $name;
        $this->email = $email;
    }
}
