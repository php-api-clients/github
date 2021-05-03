<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class EncryptionKey
{
    public const SCHEMA_TITLE = 'encryption-key';
    public const SPL_HASH = '000000007ee6930b0000000021479ea3';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The time the encryption was last updated. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: YYYY-MM-DDTHH:MM:SSZ.
     */
    private string $updated_at;
    /**
     * The current version of the encryption key uploaded for the primary host.
     */
    private string $primary_key_version;
    /**
     * The current version of the encryption key uploaded for the replica host.
     */
    private string $replica_key_version;
    /**
     * The current version of the encryption key uploaded for the backup host.
     */
    private string $backup_key_version;
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function primary_key_version() : string
    {
        return $this->primary_key_version;
    }
    public function replica_key_version() : string
    {
        return $this->replica_key_version;
    }
    public function backup_key_version() : string
    {
        return $this->backup_key_version;
    }
}
