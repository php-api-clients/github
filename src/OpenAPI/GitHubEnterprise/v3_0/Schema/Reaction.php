<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Reaction
{
    public const SCHEMA_TITLE = 'Reaction';
    public const SPL_HASH = '000000001f1e2b95000000004be6709d';
    public const SCHEMA_DESCRIPTION = 'Reactions to conversations provide a way to help people express their feelings more simply and effectively.';
    private int $id;
    private string $node_id;
    private $user;
    /**
     * The reaction to use
     */
    private string $content;
    private string $created_at;
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function user()
    {
        return $this->user;
    }
    public function content() : string
    {
        return $this->content;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
}
