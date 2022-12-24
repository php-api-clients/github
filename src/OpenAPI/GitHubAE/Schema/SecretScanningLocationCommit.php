<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class SecretScanningLocationCommit
{
    public const SCHEMA_JSON = '{"required":["path","start_line","end_line","start_column","end_column","blob_sha","blob_url","commit_sha","commit_url"],"type":"object","properties":{"path":{"type":"string","description":"The file path in the repository","examples":["\\/example\\/secrets.txt"]},"start_line":{"type":"number","description":"Line number at which the secret starts in the file"},"end_line":{"type":"number","description":"Line number at which the secret ends in the file"},"start_column":{"type":"number","description":"The column at which the secret starts within the start line when the file is interpreted as 8BIT ASCII"},"end_column":{"type":"number","description":"The column at which the secret ends within the end line when the file is interpreted as 8BIT ASCII"},"blob_sha":{"type":"string","description":"SHA-1 hash ID of the associated blob","examples":["af5626b4a114abcb82d63db7c8082c3c4756e51b"]},"blob_url":{"type":"string","description":"The API URL to get the associated blob resource"},"commit_sha":{"type":"string","description":"SHA-1 hash ID of the associated commit","examples":["af5626b4a114abcb82d63db7c8082c3c4756e51b"]},"commit_url":{"type":"string","description":"The API URL to get the associated commit resource"}},"description":"Represents a \'commit\' secret scanning location type. This location type shows that a secret was detected inside a commit to a repository."}';
    public const SCHEMA_TITLE = 'secret-scanning-location-commit';
    public const SCHEMA_DESCRIPTION = 'Represents a \'commit\' secret scanning location type. This location type shows that a secret was detected inside a commit to a repository.';
    /**
     * The file path in the repository
     */
    private string $path;
    /**
     * Line number at which the secret starts in the file
     */
    private int $start_line;
    /**
     * Line number at which the secret ends in the file
     */
    private int $end_line;
    /**
     * The column at which the secret starts within the start line when the file is interpreted as 8BIT ASCII
     */
    private int $start_column;
    /**
     * The column at which the secret ends within the end line when the file is interpreted as 8BIT ASCII
     */
    private int $end_column;
    /**
     * SHA-1 hash ID of the associated blob
     */
    private string $blob_sha;
    /**
     * The API URL to get the associated blob resource
     */
    private string $blob_url;
    /**
     * SHA-1 hash ID of the associated commit
     */
    private string $commit_sha;
    /**
     * The API URL to get the associated commit resource
     */
    private string $commit_url;
    /**
     * The file path in the repository
     */
    public function path() : string
    {
        return $this->path;
    }
    /**
     * Line number at which the secret starts in the file
     */
    public function start_line() : int
    {
        return $this->start_line;
    }
    /**
     * Line number at which the secret ends in the file
     */
    public function end_line() : int
    {
        return $this->end_line;
    }
    /**
     * The column at which the secret starts within the start line when the file is interpreted as 8BIT ASCII
     */
    public function start_column() : int
    {
        return $this->start_column;
    }
    /**
     * The column at which the secret ends within the end line when the file is interpreted as 8BIT ASCII
     */
    public function end_column() : int
    {
        return $this->end_column;
    }
    /**
     * SHA-1 hash ID of the associated blob
     */
    public function blob_sha() : string
    {
        return $this->blob_sha;
    }
    /**
     * The API URL to get the associated blob resource
     */
    public function blob_url() : string
    {
        return $this->blob_url;
    }
    /**
     * SHA-1 hash ID of the associated commit
     */
    public function commit_sha() : string
    {
        return $this->commit_sha;
    }
    /**
     * The API URL to get the associated commit resource
     */
    public function commit_url() : string
    {
        return $this->commit_url;
    }
}
