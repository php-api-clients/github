<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class CodeScanningSarifsReceipt
{
    public const SCHEMA_TITLE = 'code-scanning-sarifs-receipt';
    public const SPL_HASH = '0000000008b927a500000000412ebbda';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An identifier for the upload.
     */
    private ?string $id = null;
    /**
     * The REST API URL for checking the status of the upload.
     */
    private ?string $url = null;
    public function id() : ?string
    {
        return $this->id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
}
