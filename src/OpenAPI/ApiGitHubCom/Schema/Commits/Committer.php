<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commits;

final class Committer
{
    public const SCHEMA_JSON = '{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Committer';
    public const SCHEMA_DESCRIPTION = 'Metaproperties for Git author/committer information.';
    public readonly ?string $date;
    public readonly ?string $email;
    /**
     * The git author's name.
     */
    public readonly string $name;
    public readonly ?string $username;
    public function __construct(string $date, string $email, string $name, string $username)
    {
        $this->date = $date;
        $this->email = $email;
        $this->name = $name;
        $this->username = $username;
    }
}
