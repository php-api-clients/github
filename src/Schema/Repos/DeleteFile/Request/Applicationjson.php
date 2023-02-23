<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\DeleteFile\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["message","sha"],"type":"object","properties":{"message":{"type":"string","description":"The commit message."},"sha":{"type":"string","description":"The blob SHA of the file being deleted."},"branch":{"type":"string","description":"The branch name. Default: the repository\\u2019s default branch (usually `master`)"},"committer":{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"}},"description":"object containing information about the committer."},"author":{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"}},"description":"object containing information about the author."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The commit message.
     */
    public ?string $message;
    /**
     * The blob SHA of the file being deleted.
     */
    public ?string $sha;
    /**
     * The branch name. Default: the repository’s default branch (usually `master`)
     */
    public string $branch;
    /**
     * object containing information about the committer.
     */
    public \ApiClients\Client\Github\Schema\Repos\DeleteFile\Request\Applicationjson\Committer $committer;
    /**
     * object containing information about the author.
     */
    public \ApiClients\Client\Github\Schema\Repos\DeleteFile\Request\Applicationjson\Author $author;
    public function __construct(string $message, string $sha, string $branch, \ApiClients\Client\Github\Schema\Repos\DeleteFile\Request\Applicationjson\Committer $committer, \ApiClients\Client\Github\Schema\Repos\DeleteFile\Request\Applicationjson\Author $author)
    {
        $this->message = $message;
        $this->sha = $sha;
        $this->branch = $branch;
        $this->committer = $committer;
        $this->author = $author;
    }
}
