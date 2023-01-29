<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Actor
{
    public const SCHEMA_JSON = '{"title":"Actor","required":["id","login","gravatar_id","url","avatar_url"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":"string"},"display_login":{"type":"string"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"avatar_url":{"type":"string","format":"uri"}},"description":"Actor"}';
    public const SCHEMA_TITLE = 'Actor';
    public const SCHEMA_DESCRIPTION = 'Actor';
    public readonly int $id;
    public readonly string $login;
    public readonly ?string $display_login;
    public readonly ?string $gravatar_id;
    public readonly string $url;
    public readonly string $avatar_url;
    public function __construct(int $id, string $login, string $display_login, string $gravatar_id, string $url, string $avatar_url)
    {
        $this->id = $id;
        $this->login = $login;
        $this->display_login = $display_login;
        $this->gravatar_id = $gravatar_id;
        $this->url = $url;
        $this->avatar_url = $avatar_url;
    }
}
