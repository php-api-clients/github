<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Pulls\Update\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"title":{"type":"string","description":"The title of the pull request."},"body":{"type":"string","description":"The contents of the pull request."},"state":{"enum":["open","closed"],"type":"string","description":"State of this Pull Request. Either `open` or `closed`."},"base":{"type":"string","description":"The name of the branch you want your changes pulled into. This should be an existing branch on the current repository. You cannot update the base branch on a pull request to point to another repository."},"maintainer_can_modify":{"type":"boolean","description":"Indicates whether [maintainers can modify](https:\\/\\/docs.github.com\\/articles\\/allowing-changes-to-a-pull-request-branch-created-from-a-fork\\/) the pull request."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The title of the pull request.
     */
    public ?string $title;
    /**
     * The contents of the pull request.
     */
    public ?string $body;
    /**
     * State of this Pull Request. Either `open` or `closed`.
     */
    public ?string $state;
    /**
     * The name of the branch you want your changes pulled into. This should be an existing branch on the current repository. You cannot update the base branch on a pull request to point to another repository.
     */
    public ?string $base;
    /**
     * Indicates whether [maintainers can modify](https://docs.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     */
    public ?bool $maintainer_can_modify;
    public function __construct(string $title, string $body, string $state, string $base, bool $maintainer_can_modify)
    {
        $this->title = $title;
        $this->body = $body;
        $this->state = $state;
        $this->base = $base;
        $this->maintainer_can_modify = $maintainer_can_modify;
    }
}
