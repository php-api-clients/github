<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookPush;

final readonly class Pusher
{
    public const SCHEMA_JSON = '{"title":"Committer","required":["name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."}';
    public const SCHEMA_TITLE = 'Committer';
    public const SCHEMA_DESCRIPTION = 'Metaproperties for Git author/committer information.';
    public string $date;
    public ?string $email;
    /**
     * The git author's name.
     */
    public ?string $name;
    public string $username;
    public function __construct(string $date, string $email, string $name, string $username)
    {
        $this->date = $date;
        $this->email = $email;
        $this->name = $name;
        $this->username = $username;
    }
}
