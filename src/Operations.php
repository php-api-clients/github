<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

final readonly class Operations implements OperationsInterface
{
    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function meta(): Operation\Meta
    {
        return new Operation\Meta($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function securityAdvisories(): Operation\SecurityAdvisories
    {
        return new Operation\SecurityAdvisories($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function apps(): Operation\Apps
    {
        return new Operation\Apps($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function codesOfConduct(): Operation\CodesOfConduct
    {
        return new Operation\CodesOfConduct($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function emojis(): Operation\Emojis
    {
        return new Operation\Emojis($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function dependabot(): Operation\Dependabot
    {
        return new Operation\Dependabot($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function secretScanning(): Operation\SecretScanning
    {
        return new Operation\SecretScanning($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function activity(): Operation\Activity
    {
        return new Operation\Activity($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function gists(): Operation\Gists
    {
        return new Operation\Gists($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function gitignore(): Operation\Gitignore
    {
        return new Operation\Gitignore($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function issues(): Operation\Issues
    {
        return new Operation\Issues($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function licenses(): Operation\Licenses
    {
        return new Operation\Licenses($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function markdown(): Operation\Markdown
    {
        return new Operation\Markdown($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function orgs(): Operation\Orgs
    {
        return new Operation\Orgs($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function actions(): Operation\Actions
    {
        return new Operation\Actions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function oidc(): Operation\Oidc
    {
        return new Operation\Oidc($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function codeScanning(): Operation\CodeScanning
    {
        return new Operation\CodeScanning($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function codespaces(): Operation\Codespaces
    {
        return new Operation\Codespaces($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function copilot(): Operation\Copilot
    {
        return new Operation\Copilot($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function packages(): Operation\Packages
    {
        return new Operation\Packages($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function interactions(): Operation\Interactions
    {
        return new Operation\Interactions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function migrations(): Operation\Migrations
    {
        return new Operation\Migrations($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function projects(): Operation\Projects
    {
        return new Operation\Projects($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function repos(): Operation\Repos
    {
        return new Operation\Repos($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function billing(): Operation\Billing
    {
        return new Operation\Billing($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function teams(): Operation\Teams
    {
        return new Operation\Teams($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function reactions(): Operation\Reactions
    {
        return new Operation\Reactions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function rateLimit(): Operation\RateLimit
    {
        return new Operation\RateLimit($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function checks(): Operation\Checks
    {
        return new Operation\Checks($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function dependencyGraph(): Operation\DependencyGraph
    {
        return new Operation\DependencyGraph($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function git(): Operation\Git
    {
        return new Operation\Git($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function pulls(): Operation\Pulls
    {
        return new Operation\Pulls($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function search(): Operation\Search
    {
        return new Operation\Search($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }

    public function users(): Operation\Users
    {
        return new Operation\Users($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators);
    }
}
