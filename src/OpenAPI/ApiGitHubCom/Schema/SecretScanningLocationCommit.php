<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class SecretScanningLocationCommit
{
    public const SCHEMA_JSON = '{"required":["path","start_line","end_line","start_column","end_column","blob_sha","blob_url","commit_sha","commit_url"],"type":"object","properties":{"path":{"type":"string","description":"The file path in the repository","examples":["\\/example\\/secrets.txt"]},"start_line":{"type":"number","description":"Line number at which the secret starts in the file"},"end_line":{"type":"number","description":"Line number at which the secret ends in the file"},"start_column":{"type":"number","description":"The column at which the secret starts within the start line when the file is interpreted as 8BIT ASCII"},"end_column":{"type":"number","description":"The column at which the secret ends within the end line when the file is interpreted as 8BIT ASCII"},"blob_sha":{"type":"string","description":"SHA-1 hash ID of the associated blob","examples":["af5626b4a114abcb82d63db7c8082c3c4756e51b"]},"blob_url":{"type":"string","description":"The API URL to get the associated blob resource"},"commit_sha":{"type":"string","description":"SHA-1 hash ID of the associated commit","examples":["af5626b4a114abcb82d63db7c8082c3c4756e51b"]},"commit_url":{"type":"string","description":"The API URL to get the associated commit resource"}},"description":"Represents a \'commit\' secret scanning location type. This location type shows that a secret was detected inside a commit to a repository."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Represents a \'commit\' secret scanning location type. This location type shows that a secret was detected inside a commit to a repository.';
    /**
     * The file path in the repository
     */
    public ?string $path;
    /**
     * Line number at which the secret starts in the file
     */
    public ?int $start_line;
    /**
     * Line number at which the secret ends in the file
     */
    public ?int $end_line;
    /**
     * The column at which the secret starts within the start line when the file is interpreted as 8BIT ASCII
     */
    public ?int $start_column;
    /**
     * The column at which the secret ends within the end line when the file is interpreted as 8BIT ASCII
     */
    public ?int $end_column;
    /**
     * SHA-1 hash ID of the associated blob
     */
    public ?string $blob_sha;
    /**
     * The API URL to get the associated blob resource
     */
    public ?string $blob_url;
    /**
     * SHA-1 hash ID of the associated commit
     */
    public ?string $commit_sha;
    /**
     * The API URL to get the associated commit resource
     */
    public ?string $commit_url;
    public function __construct(string $path, int $start_line, int $end_line, int $start_column, int $end_column, string $blob_sha, string $blob_url, string $commit_sha, string $commit_url)
    {
        $this->path = $path;
        $this->start_line = $start_line;
        $this->end_line = $end_line;
        $this->start_column = $start_column;
        $this->end_column = $end_column;
        $this->blob_sha = $blob_sha;
        $this->blob_url = $blob_url;
        $this->commit_sha = $commit_sha;
        $this->commit_url = $commit_url;
    }
}
