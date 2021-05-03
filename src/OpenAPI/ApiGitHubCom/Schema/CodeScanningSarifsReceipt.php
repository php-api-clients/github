<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningSarifsReceipt
{
    public const SCHEMA_TITLE = 'code-scanning-sarifs-receipt';
    public const SPL_HASH = '00000000252f456d0000000029de5079';
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
