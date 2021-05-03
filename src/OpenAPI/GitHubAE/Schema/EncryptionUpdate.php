<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class EncryptionUpdate
{
    public const SCHEMA_TITLE = 'encryption-update';
    public const SPL_HASH = '000000007ee6930c0000000021479ea3';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A message indicating the action being taken on the encryption key.
     */
    private string $message;
    /**
     * The REST API URL to retrieve the status of updating or deleting the encryption key. The status URL contain the status `request_id`.
     */
    private string $status_url;
    public function message() : string
    {
        return $this->message;
    }
    public function status_url() : string
    {
        return $this->status_url;
    }
}
