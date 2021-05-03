<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ApiOverview
{
    public const SCHEMA_TITLE = 'Api Overview';
    public const SPL_HASH = '000000001d5bae1a00000000544e0d87';
    public const SCHEMA_DESCRIPTION = 'Api Overview';
    private ?bool $verifiable_password_authentication = null;
    private ?object $ssh_key_fingerprints = null;
    private array $hooks = array();
    private array $web = array();
    private array $api = array();
    private array $git = array();
    private array $packages = array();
    private array $pages = array();
    private array $importer = array();
    private array $actions = array();
    private array $dependabot = array();
    public function verifiable_password_authentication() : ?bool
    {
        return $this->verifiable_password_authentication;
    }
    public function ssh_key_fingerprints() : ?object
    {
        return $this->ssh_key_fingerprints;
    }
    public function hooks() : array
    {
        return $this->hooks;
    }
    public function web() : array
    {
        return $this->web;
    }
    public function api() : array
    {
        return $this->api;
    }
    public function git() : array
    {
        return $this->git;
    }
    public function packages() : array
    {
        return $this->packages;
    }
    public function pages() : array
    {
        return $this->pages;
    }
    public function importer() : array
    {
        return $this->importer;
    }
    public function actions() : array
    {
        return $this->actions;
    }
    public function dependabot() : array
    {
        return $this->dependabot;
    }
}
