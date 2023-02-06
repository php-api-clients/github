<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeleteFile\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["message","sha"],"type":"object","properties":{"message":{"type":"string","description":"The commit message."},"sha":{"type":"string","description":"The blob SHA of the file being deleted."},"branch":{"type":"string","description":"The branch name. Default: the repository\\u2019s default branch (usually `master`)"},"committer":{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"}},"description":"object containing information about the committer."},"author":{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"}},"description":"object containing information about the author."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'DeleteFile\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The commit message.
     */
    public readonly string $message;
    /**
     * The blob SHA of the file being deleted.
     */
    public readonly string $sha;
    /**
     * The branch name. Default: the repository’s default branch (usually `master`)
     */
    public readonly ?string $branch;
    /**
     * object containing information about the committer.
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Committer $committer;
    /**
     * object containing information about the author.
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Author $author;
    public function __construct(string $message, string $sha, string $branch, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Committer $committer, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Author $author)
    {
        $this->message = $message;
        $this->sha = $sha;
        $this->branch = $branch;
        $this->committer = $committer;
        $this->author = $author;
    }
}
