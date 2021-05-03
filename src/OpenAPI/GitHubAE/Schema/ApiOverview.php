<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ApiOverview
{
    public const SCHEMA_TITLE = 'Api Overview';
    public const SPL_HASH = '000000007ee6ed010000000021479ea3';
    public const SCHEMA_DESCRIPTION = 'Api Overview';
    private bool $verifiable_password_authentication;
    private object $ssh_key_fingerprints;
    private array $hooks;
    private array $web;
    private array $api;
    private array $git;
    private array $packages;
    private array $pages;
    private array $importer;
    private array $actions;
    private array $dependabot;
    public function verifiable_password_authentication() : bool
    {
        return $this->verifiable_password_authentication;
    }
    public function ssh_key_fingerprints() : object
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
