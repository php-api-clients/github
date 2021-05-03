<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class ContentReferenceAttachment
{
    public const SCHEMA_TITLE = 'ContentReferenceAttachment';
    public const SCHEMA_DESCRIPTION = 'Content Reference attachments allow you to provide context around URLs posted in comments';
    /**
     * The ID of the attachment
     */
    private ?int $id = null;
    /**
     * The title of the attachment
     */
    private ?string $title = null;
    /**
     * The body of the attachment
     */
    private ?string $body = null;
    /**
     * The node_id of the content attachment
     */
    private ?string $node_id = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function title() : ?string
    {
        return $this->title;
    }
    public function body() : ?string
    {
        return $this->body;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
}
