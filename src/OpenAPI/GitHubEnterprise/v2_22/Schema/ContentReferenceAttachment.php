<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class ContentReferenceAttachment
{
    public const SCHEMA_TITLE = 'ContentReferenceAttachment';
    public const SPL_HASH = '0000000031ee59a000000000484d7fbe';
    public const SCHEMA_DESCRIPTION = 'Content Reference attachments allow you to provide context around URLs posted in comments';
    /**
     * The ID of the attachment
     */
    private int $id;
    /**
     * The title of the attachment
     */
    private string $title;
    /**
     * The body of the attachment
     */
    private string $body;
    /**
     * The node_id of the content attachment
     */
    private string $node_id;
    public function id() : int
    {
        return $this->id;
    }
    public function title() : string
    {
        return $this->title;
    }
    public function body() : string
    {
        return $this->body;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
}
