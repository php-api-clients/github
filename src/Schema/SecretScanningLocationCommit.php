<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class SecretScanningLocationCommit
{
    public const SCHEMA_JSON = '{"required":["path","start_line","end_line","start_column","end_column","blob_sha","blob_url","commit_sha","commit_url"],"type":"object","properties":{"path":{"type":"string","description":"The file path in the repository","examples":["\\/example\\/secrets.txt"]},"start_line":{"type":"number","description":"Line number at which the secret starts in the file"},"end_line":{"type":"number","description":"Line number at which the secret ends in the file"},"start_column":{"type":"number","description":"The column at which the secret starts within the start line when the file is interpreted as 8BIT ASCII"},"end_column":{"type":"number","description":"The column at which the secret ends within the end line when the file is interpreted as 8BIT ASCII"},"blob_sha":{"type":"string","description":"SHA-1 hash ID of the associated blob","examples":["af5626b4a114abcb82d63db7c8082c3c4756e51b"]},"blob_url":{"type":"string","description":"The API URL to get the associated blob resource"},"commit_sha":{"type":"string","description":"SHA-1 hash ID of the associated commit","examples":["af5626b4a114abcb82d63db7c8082c3c4756e51b"]},"commit_url":{"type":"string","description":"The API URL to get the associated commit resource"}},"description":"Represents a \'commit\' secret scanning location type. This location type shows that a secret was detected inside a commit to a repository."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Represents a \'commit\' secret scanning location type. This location type shows that a secret was detected inside a commit to a repository.';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"\\/example\\/secrets.txt","start_line":13,"end_line":13,"start_column":13,"end_column":13,"blob_sha":"af5626b4a114abcb82d63db7c8082c3c4756e51b","blob_url":"generated_blob_url","commit_sha":"af5626b4a114abcb82d63db7c8082c3c4756e51b","commit_url":"generated_commit_url"}';
    /**
     * path: The file path in the repository
     * start_line: Line number at which the secret starts in the file
     * end_line: Line number at which the secret ends in the file
     * start_column: The column at which the secret starts within the start line when the file is interpreted as 8BIT ASCII
     * end_column: The column at which the secret ends within the end line when the file is interpreted as 8BIT ASCII
     * blob_sha: SHA-1 hash ID of the associated blob
     * blob_url: The API URL to get the associated blob resource
     * commit_sha: SHA-1 hash ID of the associated commit
     * commit_url: The API URL to get the associated commit resource
     */
    public function __construct(public ?string $path, public ?int $start_line, public ?int $end_line, public ?int $start_column, public ?int $end_column, public ?string $blob_sha, public ?string $blob_url, public ?string $commit_sha, public ?string $commit_url)
    {
    }
}
