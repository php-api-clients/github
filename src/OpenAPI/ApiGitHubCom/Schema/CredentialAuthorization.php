<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CredentialAuthorization
{
    public const SCHEMA_TITLE       = 'Credential Authorization';
    public const SCHEMA_DESCRIPTION = 'Credential Authorization';
    /**
     * User login that owns the underlying credential.
     */
    private string $login;
    /**
     * Unique identifier for the credential.
     */
    private int $credential_id;
    /**
     * Human-readable description of the credential type.
     */
    private string $credential_type;
    /**
     * Last eight characters of the credential. Only included in responses with credential_type of personal access token.
     */
    private string $token_last_eight;
    /**
     * Date when the credential was authorized for use.
     */
    private string $credential_authorized_at;
    /**
     * List of oauth scopes the token has been granted.
     */
    private array $scopes = [];
    /**
     * Unique string to distinguish the credential. Only included in responses with credential_type of SSH Key.
     */
    private string $fingerprint;
    /**
     * Date when the credential was last accessed. May be null if it was never accessed
     */
    private string $credential_accessed_at;
    private int $authorized_credential_id;
    /**
     * The title given to the ssh key. This will only be present when the credential is an ssh key.
     */
    private string $authorized_credential_title;
    /**
     * The note given to the token. This will only be present when the credential is a token.
     */
    private string $authorized_credential_note;

    /**
     * User login that owns the underlying credential.
     */
    public function login(): string
    {
        return $this->login;
    }

    /**
     * Unique identifier for the credential.
     */
    public function credential_id(): int
    {
        return $this->credential_id;
    }

    /**
     * Human-readable description of the credential type.
     */
    public function credential_type(): string
    {
        return $this->credential_type;
    }

    /**
     * Last eight characters of the credential. Only included in responses with credential_type of personal access token.
     */
    public function token_last_eight(): string
    {
        return $this->token_last_eight;
    }

    /**
     * Date when the credential was authorized for use.
     */
    public function credential_authorized_at(): string
    {
        return $this->credential_authorized_at;
    }

    /**
     * List of oauth scopes the token has been granted.
     */
    public function scopes(): array
    {
        return $this->scopes;
    }

    /**
     * Unique string to distinguish the credential. Only included in responses with credential_type of SSH Key.
     */
    public function fingerprint(): string
    {
        return $this->fingerprint;
    }

    /**
     * Date when the credential was last accessed. May be null if it was never accessed
     */
    public function credential_accessed_at(): string
    {
        return $this->credential_accessed_at;
    }

    public function authorized_credential_id(): int
    {
        return $this->authorized_credential_id;
    }

    /**
     * The title given to the ssh key. This will only be present when the credential is an ssh key.
     */
    public function authorized_credential_title(): string
    {
        return $this->authorized_credential_title;
    }

    /**
     * The note given to the token. This will only be present when the credential is a token.
     */
    public function authorized_credential_note(): string
    {
        return $this->authorized_credential_note;
    }
}
