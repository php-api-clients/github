<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Commit;

final readonly class Commit
{
    public const SCHEMA_JSON = '{"required":["author","committer","comment_count","message","tree","url"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"author":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"committer":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"message":{"type":"string","examples":["Fix all the bugs"]},"comment_count":{"type":"integer","examples":[0]},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","examples":["827efc6d56897b048c772eb4087f854f46256132"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tree\\/827efc6d56897b048c772eb4087f854f46256132"]}}},"verification":{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $url;
    public mixed $author;
    public mixed $committer;
    public ?string $message;
    public ?int $comment_count;
    public ?\ApiClients\Client\Github\Schema\Commit\Commit\Tree $tree;
    public \ApiClients\Client\Github\Schema\Verification $verification;
    public function __construct(string $url, mixed $author, mixed $committer, string $message, int $comment_count, \ApiClients\Client\Github\Schema\Commit\Commit\Tree $tree, \ApiClients\Client\Github\Schema\Verification $verification)
    {
        $this->url = $url;
        $this->author = $author;
        $this->committer = $committer;
        $this->message = $message;
        $this->comment_count = $comment_count;
        $this->tree = $tree;
        $this->verification = $verification;
    }
}
