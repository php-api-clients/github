<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\DeleteFile\Request;

use ApiClients\Client\GitHub\Schema;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["message","sha"],"type":"object","properties":{"message":{"type":"string","description":"The commit message."},"sha":{"type":"string","description":"The blob SHA of the file being deleted."},"branch":{"type":"string","description":"The branch name. Default: the repository\\u2019s default branch"},"committer":{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"}},"description":"object containing information about the committer."},"author":{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"}},"description":"object containing information about the author."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated","sha":"generated","branch":"generated","committer":{"name":"generated","email":"generated"},"author":{"name":"generated","email":"generated"}}';

    /**
     * message: The commit message.
     * sha: The blob SHA of the file being deleted.
     * branch: The branch name. Default: the repository’s default branch
     * committer: object containing information about the committer.
     * author: object containing information about the author.
     */
    public function __construct(public string $message, public string $sha, public string|null $branch, public Schema\Repos\DeleteFile\Request\ApplicationJson\Committer|null $committer, public Schema\Repos\DeleteFile\Request\ApplicationJson\Author|null $author)
    {
    }
}
