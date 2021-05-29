<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class IssueEventForIssue
{
    public const SCHEMA_TITLE       = 'Issue Event for Issue';
    public const SCHEMA_DESCRIPTION = 'Issue Event for Issue';
    private int $id;
    private string $node_id;
    private string $url;
    /**
     * Simple User
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\SimpleUser::class)
     */
    private SimpleUser $actor = [];
    private string $event;
    private string $commit_id;
    private string $commit_url;
    private string $created_at;
    private string $sha;
    private string $html_url;
    private string $message;
    private string $issue_url;
    private string $updated_at;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    private string $body;
    private string $lock_reason;
    private string $submitted_at;
    private string $state;
    private string $pull_request_url;
    private string $body_html;
    private string $body_text;

    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    public function url(): string
    {
        return $this->url;
    }

    /**
     * Simple User
     */
    public function actor(): SimpleUser
    {
        return $this->actor;
    }

    public function event(): string
    {
        return $this->event;
    }

    public function commit_id(): string
    {
        return $this->commit_id;
    }

    public function commit_url(): string
    {
        return $this->commit_url;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function sha(): string
    {
        return $this->sha;
    }

    public function html_url(): string
    {
        return $this->html_url;
    }

    public function message(): string
    {
        return $this->message;
    }

    public function issue_url(): string
    {
        return $this->issue_url;
    }

    public function updated_at(): string
    {
        return $this->updated_at;
    }

    /**
     * How the author is associated with the repository.
     */
    public function author_association(): string
    {
        return $this->author_association;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function lock_reason(): string
    {
        return $this->lock_reason;
    }

    public function submitted_at(): string
    {
        return $this->submitted_at;
    }

    public function state(): string
    {
        return $this->state;
    }

    public function pull_request_url(): string
    {
        return $this->pull_request_url;
    }

    public function body_html(): string
    {
        return $this->body_html;
    }

    public function body_text(): string
    {
        return $this->body_text;
    }
}
