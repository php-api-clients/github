<?php

namespace ApiClients\Client\Github\OpenAPI\Schema;

final class Actor
{
    public const SCHEMA_TITLE = 'Actor';
    public const SCHEMA_DESCRIPTION = 'Actor';
    private int $id;
    private string $login;
    private string $display_login;
    private string $gravatar_id;
    private string $url;
    private string $avatar_url;
    public function id() : int
    {
        return $this->id;
    }
    public function login() : string
    {
        return $this->login;
    }
    public function display_login() : string
    {
        return $this->display_login;
    }
    public function gravatar_id() : string
    {
        return $this->gravatar_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function avatar_url() : string
    {
        return $this->avatar_url;
    }
}
