<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class AuthorizationWithUser
{
    public const SCHEMA_TITLE = 'authorization-with-user';
    public const SPL_HASH = '000000006e7b788b000000005d0d00fd';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $url;
    private array $scopes;
    private string $token;
    private string $token_last_eight;
    private string $hashed_token;
    private object $app;
    private string $note;
    private string $note_url;
    private string $updated_at;
    private string $created_at;
    private string $fingerprint;
    private object $user;
    public function id() : int
    {
        return $this->id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function scopes() : array
    {
        return $this->scopes;
    }
    public function token() : string
    {
        return $this->token;
    }
    public function token_last_eight() : string
    {
        return $this->token_last_eight;
    }
    public function hashed_token() : string
    {
        return $this->hashed_token;
    }
    public function app() : object
    {
        return $this->app;
    }
    public function note() : string
    {
        return $this->note;
    }
    public function note_url() : string
    {
        return $this->note_url;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function fingerprint() : string
    {
        return $this->fingerprint;
    }
    public function user() : object
    {
        return $this->user;
    }
}
