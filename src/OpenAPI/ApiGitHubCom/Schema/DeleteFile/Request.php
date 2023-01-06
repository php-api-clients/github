<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeleteFile;

final class Request
{
    public const SCHEMA_JSON = '{"required":["message","sha"],"type":"object","properties":{"message":{"type":"string","description":"The commit message."},"sha":{"type":"string","description":"The blob SHA of the file being deleted."},"branch":{"type":"string","description":"The branch name. Default: the repository\\u2019s default branch (usually `master`)"},"committer":{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"}},"description":"object containing information about the committer."},"author":{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"}},"description":"object containing information about the author."}}}';
    public const SCHEMA_TITLE = 'DeleteFile\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The commit message.
     */
    private string $message;
    /**
     * The blob SHA of the file being deleted.
     */
    private string $sha;
    /**
     * The branch name. Default: the repository’s default branch (usually `master`)
     */
    private ?string $branch = null;
    /**
     * object containing information about the committer.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Committer::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Committer $committer = null;
    /**
     * object containing information about the author.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Author::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Author $author = null;
    /**
     * The commit message.
     */
    public function message() : string
    {
        return $this->message;
    }
    /**
     * The blob SHA of the file being deleted.
     */
    public function sha() : string
    {
        return $this->sha;
    }
    /**
     * The branch name. Default: the repository’s default branch (usually `master`)
     */
    public function branch() : ?string
    {
        return $this->branch;
    }
    /**
     * object containing information about the committer.
     */
    public function committer() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Committer
    {
        return $this->committer;
    }
    /**
     * object containing information about the author.
     */
    public function author() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Author
    {
        return $this->author;
    }
}
