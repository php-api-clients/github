<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Authorization
{
    public const SCHEMA_TITLE       = 'Authorization';
    public const SCHEMA_DESCRIPTION = 'The authorization for an OAuth app, GitHub App, or a Personal Access Token.';
    private int $id;
    private string $url;
    /**
     * A list of scopes that this authorization is in.
     */
    private array $scopes = [];
    private string $token;
    private string $token_last_eight;
    private string $hashed_token;
    private array $app = [];
    private string $note;
    private string $note_url;
    private string $updated_at;
    private string $created_at;
    private string $fingerprint;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class) */
    private SimpleUser $user;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScopedInstallation::class) */
    private ScopedInstallation $installation;

    public function id(): int
    {
        return $this->id;
    }

    public function url(): string
    {
        return $this->url;
    }

    /**
     * A list of scopes that this authorization is in.
     */
    public function scopes(): array
    {
        return $this->scopes;
    }

    public function token(): string
    {
        return $this->token;
    }

    public function token_last_eight(): string
    {
        return $this->token_last_eight;
    }

    public function hashed_token(): string
    {
        return $this->hashed_token;
    }

    public function app(): array
    {
        return $this->app;
    }

    public function note(): string
    {
        return $this->note;
    }

    public function note_url(): string
    {
        return $this->note_url;
    }

    public function updated_at(): string
    {
        return $this->updated_at;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function fingerprint(): string
    {
        return $this->fingerprint;
    }

    public function user(): SimpleUser
    {
        return $this->user;
    }

    public function installation(): ScopedInstallation
    {
        return $this->installation;
    }
}
