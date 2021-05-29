<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class PageBuild_Event
{
    public const SCHEMA_TITLE = 'page_build event';
    public const SCHEMA_DESCRIPTION = 'Page Build';
    private ?int $id = null;
    /**
     * The [List GitHub Pages builds](https://docs.github.com/en/rest/reference/repos#list-github-pages-builds) itself.
     */
    private array $build = array();
    /**
     * A git repository
     */
    private array $repository = array();
    private array $sender = array();
    /**
     * Installation
     */
    private array $installation = array();
    private array $organization = array();
    public function id() : ?int
    {
        return $this->id;
    }
    public function build() : array
    {
        return $this->build;
    }
    public function repository() : array
    {
        return $this->repository;
    }
    public function sender() : array
    {
        return $this->sender;
    }
    public function installation() : array
    {
        return $this->installation;
    }
    public function organization() : array
    {
        return $this->organization;
    }
}
