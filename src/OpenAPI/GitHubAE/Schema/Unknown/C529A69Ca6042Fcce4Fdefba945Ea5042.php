<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C529A69Ca6042Fcce4Fdefba945Ea5042
{
    public const SCHEMA_JSON = '{"required":["author","committer","comment_count","message","tree","url"],"type":"object","properties":{"author":{"required":["name","email","date"],"type":"object","properties":{"name":{"type":"string"},"email":{"type":"string"},"date":{"type":"string","format":"date-time"}}},"committer":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"comment_count":{"type":"integer"},"message":{"type":"string"},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}},"url":{"type":"string","format":"uri"},"verification":{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = 'c_529a69ca6042fcce4fdefba945ea5042';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C1C83F34D8E9Fd7Fed62366771Acd55F2::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C1C83F34D8E9Fd7Fed62366771Acd55F2 $author;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217 $committer;
    private int $comment_count;
    private string $message;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C35C6300C6Fc8417Ed1Dc9061517F1506::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C35C6300C6Fc8417Ed1Dc9061517F1506 $tree;
    private string $url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Verification::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Verification $verification = null;
    public function author() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C1C83F34D8E9Fd7Fed62366771Acd55F2
    {
        return $this->author;
    }
    public function committer() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217
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
    public function tree() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C35C6300C6Fc8417Ed1Dc9061517F1506
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
