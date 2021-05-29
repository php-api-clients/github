<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class IssueComment
{
    public const SCHEMA_TITLE       = 'Issue Comment';
    public const SCHEMA_DESCRIPTION = 'Comments provide a way for people to collaborate on an issue.';
    /**
     * Unique identifier of the issue comment
     */
    private ?int $id         = null;
    private ?string $node_id = null;
    /**
     * URL for the issue comment
     */
    private ?string $url = null;
    /**
     * Contents of the issue comment
     */
    private ?string $body      = null;
    private ?string $body_text = null;
    private ?string $body_html = null;
    private ?string $html_url  = null;
    private $user;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private ?string $issue_url  = null;
    /**
     * How the author is associated with the repository.
     */
    private ?string $author_association = null;
    private $performed_via_github_app;
    private array $reactions = [];

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function body(): ?string
    {
        return $this->body;
    }

    public function body_text(): ?string
    {
        return $this->body_text;
    }

    public function body_html(): ?string
    {
        return $this->body_html;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function user()
    {
        return $this->user;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function issue_url(): ?string
    {
        return $this->issue_url;
    }

    public function author_association(): ?string
    {
        return $this->author_association;
    }

    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }

    public function reactions(): array
    {
        return $this->reactions;
    }
}
