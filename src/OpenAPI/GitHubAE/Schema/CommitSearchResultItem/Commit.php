<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CommitSearchResultItem;

final class Commit
{
    public const SCHEMA_JSON = '{"required":["author","committer","comment_count","message","tree","url"],"type":"object","properties":{"author":{"required":["name","email","date"],"type":"object","properties":{"name":{"type":"string"},"email":{"type":"string"},"date":{"type":"string","format":"date-time"}}},"committer":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"comment_count":{"type":"integer"},"message":{"type":"string"},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}},"url":{"type":"string","format":"uri"},"verification":{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = 'CommitSearchResultItem\\Commit';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Commit\Author::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Commit\Author $author;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Commit\Committer::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Commit\Committer $committer;
    private int $comment_count;
    private string $message;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Commit\Tree::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Commit\Tree $tree;
    private string $url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Verification::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Verification $verification = null;
    public function author() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Commit\Author
    {
        return $this->author;
    }
    public function committer() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Commit\Committer
    {
        return $this->committer;
    }
    public function comment_count() : int
    {
        return $this->comment_count;
    }
    public function message() : string
    {
        return $this->message;
    }
    public function tree() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Commit\Tree
    {
        return $this->tree;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function verification() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Verification
    {
        return $this->verification;
    }
}
