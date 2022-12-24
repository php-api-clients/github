<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C7D6Cb727373223A19B029C6A4Ff32226
{
    public const SCHEMA_JSON = '{"title":"Committer","required":["name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."}';
    public const SCHEMA_TITLE = 'Committer';
    public const SCHEMA_DESCRIPTION = 'Metaproperties for Git author/committer information.';
    private ?string $date = null;
    private $email;
    /**
     * The git author's name.
     */
    private string $name;
    private ?string $username = null;
    public function date() : ?string
    {
        return $this->date;
    }
    public function email()
    {
        return $this->email;
    }
    /**
     * The git author's name.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function username() : ?string
    {
        return $this->username;
    }
}
