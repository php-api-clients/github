<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class EncryptionStatus
{
    public const SCHEMA_TITLE = 'encryption-status';
    public const SCHEMA_DESCRIPTION = '';
    /**The status of updating an encryption key or disabling encryption at rest.**/
    private string $result;
    /**The error message if the `result` is `failure`.**/
    private string $error;
    public function result() : string
    {
        return $this->result;
    }
    public function error() : string
    {
        return $this->error;
    }
}
