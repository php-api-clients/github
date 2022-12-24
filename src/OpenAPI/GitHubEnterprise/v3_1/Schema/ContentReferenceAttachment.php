<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ContentReferenceAttachment
{
    public const SCHEMA_JSON = '{"title":"ContentReferenceAttachment","required":["id","title","body"],"type":"object","properties":{"id":{"type":"integer","description":"The ID of the attachment","examples":[21]},"title":{"maxLength":1024,"type":"string","description":"The title of the attachment","examples":["Title of the attachment"]},"body":{"maxLength":262144,"type":"string","description":"The body of the attachment","examples":["Body of the attachment"]},"node_id":{"type":"string","description":"The node_id of the content attachment","examples":["MDE3OkNvbnRlbnRBdHRhY2htZW50MjE="]}},"description":"Content Reference attachments allow you to provide context around URLs posted in comments"}';
    public const SCHEMA_TITLE = 'ContentReferenceAttachment';
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
    private ?string $node_id = null;
    /**
     * The ID of the attachment
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The title of the attachment
     */
    public function title() : string
    {
        return $this->title;
    }
    /**
     * The body of the attachment
     */
    public function body() : string
    {
        return $this->body;
    }
    /**
     * The node_id of the content attachment
     */
    public function node_id() : ?string
    {
        return $this->node_id;
    }
}
