<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Output;

final class Images
{
    public const SCHEMA_JSON = '{"required":["alt","image_url"],"type":"object","properties":{"alt":{"type":"string","description":"The alternative text for the image."},"image_url":{"type":"string","description":"The full URL of the image."},"caption":{"type":"string","description":"A short image description."}}}';
    public const SCHEMA_TITLE = 'Output\\Images';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The alternative text for the image.
     */
    private string $alt;
    /**
     * The full URL of the image.
     */
    private string $image_url;
    /**
     * A short image description.
     */
    private ?string $caption = null;
    /**
     * The alternative text for the image.
     */
    public function alt() : string
    {
        return $this->alt;
    }
    /**
     * The full URL of the image.
     */
    public function image_url() : string
    {
        return $this->image_url;
    }
    /**
     * A short image description.
     */
    public function caption() : ?string
    {
        return $this->caption;
    }
}
