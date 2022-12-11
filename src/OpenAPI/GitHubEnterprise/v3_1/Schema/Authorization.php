<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class Authorization
{
    public const SCHEMA_TITLE = 'Authorization';
    public const SCHEMA_DESCRIPTION = 'The authorization for an OAuth app, GitHub App, or a Personal Access Token.';
    private int $id;
    private string $url;
    /**
     * A list of scopes that this authorization is in.
     */
    private $scopes;
    private string $token;
    private $token_last_eight;
    private $hashed_token;
    private array $app = array();
    private $note;
    private $note_url;
    private string $updated_at;
    private string $created_at;
    private $fingerprint;
    private $user;
    private $installation;
    public function id() : int
    {
        return $this->id;
    }
    public function url() : string
    {
        return $this->url;
    }
    /**
     * A list of scopes that this authorization is in.
     */
    public function scopes()
    {
        return $this->scopes;
    }
    public function token() : string
    {
        return $this->token;
    }
    public function token_last_eight()
    {
        return $this->token_last_eight;
    }
    public function hashed_token()
    {
        return $this->hashed_token;
    }
    public function app() : array
    {
        return $this->app;
    }
    public function note()
    {
        return $this->note;
    }
    public function note_url()
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
    public function fingerprint()
    {
        return $this->fingerprint;
    }
    public function user()
    {
        return $this->user;
    }
    public function installation()
    {
        return $this->installation;
    }
}
