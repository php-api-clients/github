<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CredentialAuthorization
{
    public const SCHEMA_TITLE = 'Credential Authorization';
    public const SPL_HASH = '00000000252f5ea50000000029de5079';
    public const SCHEMA_DESCRIPTION = 'Credential Authorization';
    /**
     * User login that owns the underlying credential.
     */
    private ?string $login = null;
    /**
     * Unique identifier for the credential.
     */
    private ?int $credential_id = null;
    /**
     * Human-readable description of the credential type.
     */
    private ?string $credential_type = null;
    /**
     * Last eight characters of the credential. Only included in responses with credential_type of personal access token.
     */
    private ?string $token_last_eight = null;
    /**
     * Date when the credential was authorized for use.
     */
    private ?string $credential_authorized_at = null;
    /**
     * List of oauth scopes the token has been granted.
     */
    private array $scopes = array();
    /**
     * Unique string to distinguish the credential. Only included in responses with credential_type of SSH Key.
     */
    private ?string $fingerprint = null;
    /**
     * Date when the credential was last accessed. May be null if it was never accessed
     */
    private ?string $credential_accessed_at = null;
    private ?int $authorized_credential_id = null;
    /**
     * The title given to the ssh key. This will only be present when the credential is an ssh key.
     */
    private ?string $authorized_credential_title = null;
    /**
     * The note given to the token. This will only be present when the credential is a token.
     */
    private ?string $authorized_credential_note = null;
    public function login() : ?string
    {
        return $this->login;
    }
    public function credential_id() : ?int
    {
        return $this->credential_id;
    }
    public function credential_type() : ?string
    {
        return $this->credential_type;
    }
    public function token_last_eight() : ?string
    {
        return $this->token_last_eight;
    }
    public function credential_authorized_at() : ?string
    {
        return $this->credential_authorized_at;
    }
    public function scopes() : array
    {
        return $this->scopes;
    }
    public function fingerprint() : ?string
    {
        return $this->fingerprint;
    }
    public function credential_accessed_at() : ?string
    {
        return $this->credential_accessed_at;
    }
    public function authorized_credential_id() : ?int
    {
        return $this->authorized_credential_id;
    }
    public function authorized_credential_title() : ?string
    {
        return $this->authorized_credential_title;
    }
    public function authorized_credential_note() : ?string
    {
        return $this->authorized_credential_note;
    }
}
