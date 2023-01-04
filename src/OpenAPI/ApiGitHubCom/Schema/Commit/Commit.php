<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit;

final class Commit
{
    public const SCHEMA_JSON = '{"required":["author","committer","comment_count","message","tree","url"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"author":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"committer":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"message":{"type":"string","examples":["Fix all the bugs"]},"comment_count":{"type":"integer","examples":[0]},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","examples":["827efc6d56897b048c772eb4087f854f46256132"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tree\\/827efc6d56897b048c772eb4087f854f46256132"]}}},"verification":{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = 'Commit\\Commit';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Author::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Author $author;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Committer::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Committer $committer;
    private string $message;
    private int $comment_count;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Tree::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Tree $tree;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Verification::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Verification $verification = null;
    public function url() : string
    {
        return $this->url;
    }
    public function author() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Author
    {
        return $this->author;
    }
    public function committer() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Committer
    {
        return $this->committer;
    }
    public function message() : string
    {
        return $this->message;
    }
    public function comment_count() : int
    {
        return $this->comment_count;
    }
    public function tree() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Tree
    {
        return $this->tree;
    }
    public function verification() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Verification
    {
        return $this->verification;
    }
}
