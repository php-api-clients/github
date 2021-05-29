<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Label
{
    public const SCHEMA_TITLE       = 'Label';
    public const SCHEMA_DESCRIPTION = 'Color-coded labels help you categorize and filter your issues (just like labels in Gmail).';
    private ?int $id                = null;
    private ?string $node_id        = null;
    /**
     * URL for the label
     */
    private ?string $url = null;
    /**
     * The name of the label.
     */
    private ?string $name        = null;
    private ?string $description = null;
    /**
     * 6-character hex code, without the leading #, identifying the color
     */
    private ?string $color = null;
    private ?bool $default = null;

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    /**
     * URL for the label
     */
    public function url(): ?string
    {
        return $this->url;
    }

    /**
     * The name of the label.
     */
    public function name(): ?string
    {
        return $this->name;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    /**
     * 6-character hex code, without the leading #, identifying the color
     */
    public function color(): ?string
    {
        return $this->color;
    }

    public function default(): ?bool
    {
        return $this->default;
    }
}
