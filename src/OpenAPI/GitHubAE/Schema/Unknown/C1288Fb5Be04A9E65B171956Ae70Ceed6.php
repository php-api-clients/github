<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C1288Fb5Be04A9E65B171956Ae70Ceed6
{
    public const SCHEMA_JSON = '{"title":"Commit","required":["id","tree_id","distinct","message","timestamp","url","author","committer"],"type":"object","properties":{"added":{"type":"array","items":{"type":"string"},"description":"An array of files added in the commit."},"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"distinct":{"type":"boolean","description":"Whether this commit is distinct from any that have been pushed before."},"id":{"type":"string"},"message":{"type":"string","description":"The commit message."},"modified":{"type":"array","items":{"type":"string"},"description":"An array of files modified by the commit."},"removed":{"type":"array","items":{"type":"string"},"description":"An array of files removed in the commit."},"timestamp":{"type":"string","description":"The ISO 8601 timestamp of the commit.","format":"date-time"},"tree_id":{"type":"string"},"url":{"type":"string","description":"URL that points to the commit API resource.","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Commit';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An array of files added in the commit.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $added = array();
    /**
     * Metaproperties for Git author/committer information.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C826D39048B9E90A609260A6C25135A2F::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C826D39048B9E90A609260A6C25135A2F $author;
    /**
     * Metaproperties for Git author/committer information.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C826D39048B9E90A609260A6C25135A2F::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C826D39048B9E90A609260A6C25135A2F $committer;
    /**
     * Whether this commit is distinct from any that have been pushed before.
     */
    private bool $distinct;
    private string $id;
    /**
     * The commit message.
     */
    private string $message;
    /**
     * An array of files modified by the commit.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $modified = array();
    /**
     * An array of files removed in the commit.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $removed = array();
    /**
     * The ISO 8601 timestamp of the commit.
     */
    private string $timestamp;
    private string $tree_id;
    /**
     * URL that points to the commit API resource.
     */
    private string $url;
    /**
     * An array of files added in the commit.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function added() : array
    {
        return $this->added;
    }
    /**
     * Metaproperties for Git author/committer information.
     */
    public function author() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C826D39048B9E90A609260A6C25135A2F
    {
        return $this->author;
    }
    /**
     * Metaproperties for Git author/committer information.
     */
    public function committer() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C826D39048B9E90A609260A6C25135A2F
    {
        return $this->committer;
    }
    /**
     * Whether this commit is distinct from any that have been pushed before.
     */
    public function distinct() : bool
    {
        return $this->distinct;
    }
    public function id() : string
    {
        return $this->id;
    }
    /**
     * The commit message.
     */
    public function message() : string
    {
        return $this->message;
    }
    /**
     * An array of files modified by the commit.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function modified() : array
    {
        return $this->modified;
    }
    /**
     * An array of files removed in the commit.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function removed() : array
    {
        return $this->removed;
    }
    /**
     * The ISO 8601 timestamp of the commit.
     */
    public function timestamp() : string
    {
        return $this->timestamp;
    }
    public function tree_id() : string
    {
        return $this->tree_id;
    }
    /**
     * URL that points to the commit API resource.
     */
    public function url() : string
    {
        return $this->url;
    }
}
