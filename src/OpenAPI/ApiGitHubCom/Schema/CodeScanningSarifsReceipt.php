<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningSarifsReceipt
{
    public const SCHEMA_TITLE = 'code-scanning-sarifs-receipt';
    public const SPL_HASH = '0000000054d5e2130000000071115dec';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An identifier for the upload.
     */
    private string $id;
    /**
     * The REST API URL for checking the status of the upload.
     */
    private string $url;
    public function id() : string
    {
        return $this->id;
    }
    public function url() : string
    {
        return $this->url;
    }
}
