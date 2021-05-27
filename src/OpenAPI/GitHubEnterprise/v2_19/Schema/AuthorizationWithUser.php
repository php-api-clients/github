<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class AuthorizationWithUser
{
    public const SCHEMA_TITLE = 'authorization-with-user';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $id = null;
    private ?string $url = null;
    private array $scopes = array();
    private ?string $token = null;
    private ?string $token_last_eight = null;
    private ?string $hashed_token = null;
    private array $app = array();
    private ?string $note = null;
    private ?string $note_url = null;
    private ?string $updated_at = null;
    private ?string $created_at = null;
    private ?string $fingerprint = null;
    private array $user = array();
    public function id() : ?int
    {
        return $this->id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function scopes() : array
    {
        return $this->scopes;
    }
    public function token() : ?string
    {
        return $this->token;
    }
    public function token_last_eight() : ?string
    {
        return $this->token_last_eight;
    }
    public function hashed_token() : ?string
    {
        return $this->hashed_token;
    }
    public function app() : array
    {
        return $this->app;
    }
    public function note() : ?string
    {
        return $this->note;
    }
    public function note_url() : ?string
    {
        return $this->note_url;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function fingerprint() : ?string
    {
        return $this->fingerprint;
    }
    public function user() : array
    {
        return $this->user;
    }
}
