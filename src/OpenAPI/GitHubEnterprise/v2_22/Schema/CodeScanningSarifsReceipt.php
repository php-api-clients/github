<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class CodeScanningSarifsReceipt
{
    public const SCHEMA_TITLE       = 'code-scanning-sarifs-receipt';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An identifier for the upload.
     */
    private string $id;
    /**
     * The REST API URL for checking the status of the upload.
     */
    private string $url;

    /**
     * An identifier for the upload.
     */
    public function id(): string
    {
        return $this->id;
    }

    /**
     * The REST API URL for checking the status of the upload.
     */
    public function url(): string
    {
        return $this->url;
    }
}
