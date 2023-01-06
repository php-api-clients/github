<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateOrUpdateFileContents;

final class Request
{
    public const SCHEMA_JSON = '{"required":["message","content"],"type":"object","properties":{"message":{"type":"string","description":"The commit message."},"content":{"type":"string","description":"The new file content, using Base64 encoding."},"sha":{"type":"string","description":"**Required if you are updating a file**. The blob SHA of the file being replaced."},"branch":{"type":"string","description":"The branch name. Default: the repository\\u2019s default branch (usually `master`)"},"committer":{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author or committer of the commit. You\'ll receive a `422` status code if `name` is omitted."},"email":{"type":"string","description":"The email of the author or committer of the commit. You\'ll receive a `422` status code if `email` is omitted."},"date":{"type":"string","examples":["\\"2013-01-05T13:13:22+05:00\\""]}},"description":"The person that committed the file. Default: the authenticated user."},"author":{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author or committer of the commit. You\'ll receive a `422` status code if `name` is omitted."},"email":{"type":"string","description":"The email of the author or committer of the commit. You\'ll receive a `422` status code if `email` is omitted."},"date":{"type":"string","examples":["\\"2013-01-15T17:13:22+05:00\\""]}},"description":"The author of the file. Default: The `committer` or the authenticated user if you omit `committer`."}}}';
    public const SCHEMA_TITLE = 'CreateOrUpdateFileContents\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The commit message.
     */
    private string $message;
    /**
     * The new file content, using Base64 encoding.
     */
    private string $content;
    /**
     * **Required if you are updating a file**. The blob SHA of the file being replaced.
     */
    private ?string $sha = null;
    /**
     * The branch name. Default: the repository’s default branch (usually `master`)
     */
    private ?string $branch = null;
    /**
     * The person that committed the file. Default: the authenticated user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Committer::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Committer $committer = null;
    /**
     * The author of the file. Default: The `committer` or the authenticated user if you omit `committer`.
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
     * The new file content, using Base64 encoding.
     */
    public function content() : string
    {
        return $this->content;
    }
    /**
     * **Required if you are updating a file**. The blob SHA of the file being replaced.
     */
    public function sha() : ?string
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
     * The person that committed the file. Default: the authenticated user.
     */
    public function committer() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Committer
    {
        return $this->committer;
    }
    /**
     * The author of the file. Default: The `committer` or the authenticated user if you omit `committer`.
     */
    public function author() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Author
    {
        return $this->author;
    }
}
