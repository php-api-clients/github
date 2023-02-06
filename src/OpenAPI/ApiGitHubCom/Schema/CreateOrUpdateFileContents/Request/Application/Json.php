<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateOrUpdateFileContents\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["message","content"],"type":"object","properties":{"message":{"type":"string","description":"The commit message."},"content":{"type":"string","description":"The new file content, using Base64 encoding."},"sha":{"type":"string","description":"**Required if you are updating a file**. The blob SHA of the file being replaced."},"branch":{"type":"string","description":"The branch name. Default: the repository\\u2019s default branch (usually `master`)"},"committer":{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author or committer of the commit. You\'ll receive a `422` status code if `name` is omitted."},"email":{"type":"string","description":"The email of the author or committer of the commit. You\'ll receive a `422` status code if `email` is omitted."},"date":{"type":"string","examples":["\\"2013-01-05T13:13:22+05:00\\""]}},"description":"The person that committed the file. Default: the authenticated user."},"author":{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author or committer of the commit. You\'ll receive a `422` status code if `name` is omitted."},"email":{"type":"string","description":"The email of the author or committer of the commit. You\'ll receive a `422` status code if `email` is omitted."},"date":{"type":"string","examples":["\\"2013-01-15T17:13:22+05:00\\""]}},"description":"The author of the file. Default: The `committer` or the authenticated user if you omit `committer`."}}}';
    public const SCHEMA_EXAMPLE = '{"committer":{"date":"\\"2013-01-05T13:13:22+05:00\\""},"author":{"date":"\\"2013-01-15T17:13:22+05:00\\""}}';
    public const SCHEMA_TITLE = 'CreateOrUpdateFileContents\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The commit message.
     */
    public readonly string $message;
    /**
     * The new file content, using Base64 encoding.
     */
    public readonly string $content;
    /**
     * **Required if you are updating a file**. The blob SHA of the file being replaced.
     */
    public readonly ?string $sha;
    /**
     * The branch name. Default: the repository’s default branch (usually `master`)
     */
    public readonly ?string $branch;
    /**
     * The person that committed the file. Default: the authenticated user.
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Committer $committer;
    /**
     * The author of the file. Default: The `committer` or the authenticated user if you omit `committer`.
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Author $author;
    public function __construct(string $message, string $content, string $sha, string $branch, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Committer $committer, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Author $author)
    {
        $this->message = $message;
        $this->content = $content;
        $this->sha = $sha;
        $this->branch = $branch;
        $this->committer = $committer;
        $this->author = $author;
    }
}
