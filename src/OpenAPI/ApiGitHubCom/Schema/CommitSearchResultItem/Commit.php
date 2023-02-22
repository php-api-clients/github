<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitSearchResultItem;

final readonly class Commit
{
    public const SCHEMA_JSON = '{"required":["author","committer","comment_count","message","tree","url"],"type":"object","properties":{"author":{"required":["name","email","date"],"type":"object","properties":{"name":{"type":"string"},"email":{"type":"string"},"date":{"type":"string","format":"date-time"}}},"committer":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"comment_count":{"type":"integer"},"message":{"type":"string"},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}},"url":{"type":"string","format":"uri"},"verification":{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitSearchResultItem\Commit\Author $author;
    public mixed $committer;
    public ?int $comment_count;
    public ?string $message;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ShortBranch\Commit $tree;
    public ?string $url;
    public \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Verification $verification;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitSearchResultItem\Commit\Author $author, mixed $committer, int $comment_count, string $message, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ShortBranch\Commit $tree, string $url, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Verification $verification)
    {
        $this->author = $author;
        $this->committer = $committer;
        $this->comment_count = $comment_count;
        $this->message = $message;
        $this->tree = $tree;
        $this->url = $url;
        $this->verification = $verification;
    }
}
