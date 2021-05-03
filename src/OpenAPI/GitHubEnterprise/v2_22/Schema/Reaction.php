<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class Reaction
{
    public const SCHEMA_TITLE = 'Reaction';
    public const SPL_HASH = '000000003d2c33300000000068da5fbb';
    public const SCHEMA_DESCRIPTION = 'Reactions to conversations provide a way to help people express their feelings more simply and effectively.';
    private ?int $id = null;
    private ?string $node_id = null;
    private $user;
    /**
     * The reaction to use
     */
    private ?string $content = null;
    private ?string $created_at = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function user()
    {
        return $this->user;
    }
    public function content() : ?string
    {
        return $this->content;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
}
