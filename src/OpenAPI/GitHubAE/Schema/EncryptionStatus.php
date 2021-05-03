<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class EncryptionStatus
{
    public const SCHEMA_TITLE = 'encryption-status';
    public const SPL_HASH = '000000001ef898e8000000007fdcfded';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The status of updating an encryption key or disabling encryption at rest.
     */
    private ?string $result = null;
    /**
     * The error message if the `result` is `failure`.
     */
    private ?string $error = null;
    public function result() : ?string
    {
        return $this->result;
    }
    public function error() : ?string
    {
        return $this->error;
    }
}
