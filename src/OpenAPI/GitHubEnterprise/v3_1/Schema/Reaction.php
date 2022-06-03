<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class Reaction
{
    public const SCHEMA_TITLE = 'Reaction';
    public const SCHEMA_DESCRIPTION = 'Reactions to conversations provide a way to help people express their feelings more simply and effectively.';
    private int $id;
    private string $node_id;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableSimpleUser $user = null;
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
    /**
     * Simple User
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableSimpleUser
    {
        return $this->user;
    }
    /**
     * The reaction to use
     */
    public function content() : string
    {
        return $this->content;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
}
