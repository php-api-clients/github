<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class Actor
{
    public const SCHEMA_TITLE = 'Actor';
    public const SPL_HASH = '000000006887e6120000000064418fb6';
    public const SCHEMA_DESCRIPTION = 'Actor';
    private ?int $id = null;
    private ?string $login = null;
    private ?string $display_login = null;
    private ?string $gravatar_id = null;
    private ?string $url = null;
    private ?string $avatar_url = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function login() : ?string
    {
        return $this->login;
    }
    public function display_login() : ?string
    {
        return $this->display_login;
    }
    public function gravatar_id() : ?string
    {
        return $this->gravatar_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function avatar_url() : ?string
    {
        return $this->avatar_url;
    }
}
