<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub;

interface OperationsInterface
{
    public function meta(): Operation\Meta;

    public function securityAdvisories(): Operation\SecurityAdvisories;

    public function apps(): Operation\Apps;

    public function codesOfConduct(): Operation\CodesOfConduct;

    public function emojis(): Operation\Emojis;

    public function dependabot(): Operation\Dependabot;

    public function secretScanning(): Operation\SecretScanning;

    public function activity(): Operation\Activity;

    public function gists(): Operation\Gists;

    public function gitignore(): Operation\Gitignore;

    public function issues(): Operation\Issues;

    public function licenses(): Operation\Licenses;

    public function markdown(): Operation\Markdown;

    public function orgs(): Operation\Orgs;

    public function actions(): Operation\Actions;

    public function oidc(): Operation\Oidc;

    public function codeScanning(): Operation\CodeScanning;

    public function codespaces(): Operation\Codespaces;

    public function copilot(): Operation\Copilot;

    public function packages(): Operation\Packages;

    public function interactions(): Operation\Interactions;

    public function migrations(): Operation\Migrations;

    public function projects(): Operation\Projects;

    public function repos(): Operation\Repos;

    public function billing(): Operation\Billing;

    public function teams(): Operation\Teams;

    public function reactions(): Operation\Reactions;

    public function rateLimit(): Operation\RateLimit;

    public function checks(): Operation\Checks;

    public function dependencyGraph(): Operation\DependencyGraph;

    public function git(): Operation\Git;

    public function pulls(): Operation\Pulls;

    public function search(): Operation\Search;

    public function users(): Operation\Users;
}
