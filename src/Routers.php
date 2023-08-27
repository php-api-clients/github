<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

final class Routers
{
    private Router\Get\Meta|null $router🔀Get🔀Meta                                 = null;
    private Router\Get\SecurityAdvisories|null $router🔀Get🔀SecurityAdvisories     = null;
    private Router\Get\Apps|null $router🔀Get🔀Apps                                 = null;
    private Router\Get\CodesOfConduct|null $router🔀Get🔀CodesOfConduct             = null;
    private Router\Get\Emojis|null $router🔀Get🔀Emojis                             = null;
    private Router\Get\Activity|null $router🔀Get🔀Activity                         = null;
    private Router\Get\Gists|null $router🔀Get🔀Gists                               = null;
    private Router\Get\Issues|null $router🔀Get🔀Issues                             = null;
    private Router\Get\Licenses|null $router🔀Get🔀Licenses                         = null;
    private Router\Get\Orgs|null $router🔀Get🔀Orgs                                 = null;
    private Router\Get\RateLimit|null $router🔀Get🔀RateLimit                       = null;
    private Router\Get\Repos|null $router🔀Get🔀Repos                               = null;
    private Router\Get\Users|null $router🔀Get🔀Users                               = null;
    private Router\Get\Gitignore|null $router🔀Get🔀Gitignore                       = null;
    private Router\Get\Projects|null $router🔀Get🔀Projects                         = null;
    private Router\Get\Search|null $router🔀Get🔀Search                             = null;
    private Router\Get\Teams|null $router🔀Get🔀Teams                               = null;
    private Router\Get\Codespaces|null $router🔀Get🔀Codespaces                     = null;
    private Router\Get\Interactions|null $router🔀Get🔀Interactions                 = null;
    private Router\Get\Migrations|null $router🔀Get🔀Migrations                     = null;
    private Router\Get\Packages|null $router🔀Get🔀Packages                         = null;
    private Router\Get\Dependabot|null $router🔀Get🔀Dependabot                     = null;
    private Router\Get\SecretScanning|null $router🔀Get🔀SecretScanning             = null;
    private Router\Get\Actions|null $router🔀Get🔀Actions                           = null;
    private Router\Get\CodeScanning|null $router🔀Get🔀CodeScanning                 = null;
    private Router\Get\Copilot|null $router🔀Get🔀Copilot                           = null;
    private Router\Get\Pulls|null $router🔀Get🔀Pulls                               = null;
    private Router\Get\Billing|null $router🔀Get🔀Billing                           = null;
    private Router\Get\Checks|null $router🔀Get🔀Checks                             = null;
    private Router\Get\DependencyGraph|null $router🔀Get🔀DependencyGraph           = null;
    private Router\Get\Reactions|null $router🔀Get🔀Reactions                       = null;
    private Router\Get\Oidc|null $router🔀Get🔀Oidc                                 = null;
    private Router\Get\Git|null $router🔀Get🔀Git                                   = null;
    private Router\Post\Apps|null $router🔀Post🔀Apps                               = null;
    private Router\Post\Gists|null $router🔀Post🔀Gists                             = null;
    private Router\Post\Orgs|null $router🔀Post🔀Orgs                               = null;
    private Router\Post\Migrations|null $router🔀Post🔀Migrations                   = null;
    private Router\Post\Projects|null $router🔀Post🔀Projects                       = null;
    private Router\Post\Repos|null $router🔀Post🔀Repos                             = null;
    private Router\Post\Teams|null $router🔀Post🔀Teams                             = null;
    private Router\Post\Actions|null $router🔀Post🔀Actions                         = null;
    private Router\Post\Codespaces|null $router🔀Post🔀Codespaces                   = null;
    private Router\Post\Copilot|null $router🔀Post🔀Copilot                         = null;
    private Router\Post\CodeScanning|null $router🔀Post🔀CodeScanning               = null;
    private Router\Post\DependencyGraph|null $router🔀Post🔀DependencyGraph         = null;
    private Router\Post\Git|null $router🔀Post🔀Git                                 = null;
    private Router\Post\SecurityAdvisories|null $router🔀Post🔀SecurityAdvisories   = null;
    private Router\Post\Reactions|null $router🔀Post🔀Reactions                     = null;
    private Router\Post\Packages|null $router🔀Post🔀Packages                       = null;
    private Router\Post\Checks|null $router🔀Post🔀Checks                           = null;
    private Router\Post\Issues|null $router🔀Post🔀Issues                           = null;
    private Router\Post\Pulls|null $router🔀Post🔀Pulls                             = null;
    private Router\Post\Markdown|null $router🔀Post🔀Markdown                       = null;
    private Router\Post\Users|null $router🔀Post🔀Users                             = null;
    private Router\Patch\Apps|null $router🔀Patch🔀Apps                             = null;
    private Router\Patch\Activity|null $router🔀Patch🔀Activity                     = null;
    private Router\Patch\Projects|null $router🔀Patch🔀Projects                     = null;
    private Router\Patch\Repos|null $router🔀Patch🔀Repos                           = null;
    private Router\Patch\Codespaces|null $router🔀Patch🔀Codespaces                 = null;
    private Router\Patch\Users|null $router🔀Patch🔀Users                           = null;
    private Router\Patch\Gists|null $router🔀Patch🔀Gists                           = null;
    private Router\Patch\Orgs|null $router🔀Patch🔀Orgs                             = null;
    private Router\Patch\Teams|null $router🔀Patch🔀Teams                           = null;
    private Router\Patch\Migrations|null $router🔀Patch🔀Migrations                 = null;
    private Router\Patch\Actions|null $router🔀Patch🔀Actions                       = null;
    private Router\Patch\Checks|null $router🔀Patch🔀Checks                         = null;
    private Router\Patch\CodeScanning|null $router🔀Patch🔀CodeScanning             = null;
    private Router\Patch\Issues|null $router🔀Patch🔀Issues                         = null;
    private Router\Patch\Pulls|null $router🔀Patch🔀Pulls                           = null;
    private Router\Patch\SecurityAdvisories|null $router🔀Patch🔀SecurityAdvisories = null;
    private Router\Patch\Dependabot|null $router🔀Patch🔀Dependabot                 = null;
    private Router\Patch\Git|null $router🔀Patch🔀Git                               = null;
    private Router\Patch\SecretScanning|null $router🔀Patch🔀SecretScanning         = null;
    private Router\List\Apps|null $router🔀List🔀Apps                               = null;
    private Router\List\Gists|null $router🔀List🔀Gists                             = null;
    private Router\List\Users|null $router🔀List🔀Users                             = null;
    private Router\List\Issues|null $router🔀List🔀Issues                           = null;
    private Router\List\Migrations|null $router🔀List🔀Migrations                   = null;
    private Router\List\Orgs|null $router🔀List🔀Orgs                               = null;
    private Router\List\Packages|null $router🔀List🔀Packages                       = null;
    private Router\List\Repos|null $router🔀List🔀Repos                             = null;
    private Router\List\Activity|null $router🔀List🔀Activity                       = null;
    private Router\List\Teams|null $router🔀List🔀Teams                             = null;
    private Router\List\Licenses|null $router🔀List🔀Licenses                       = null;
    private Router\List\Projects|null $router🔀List🔀Projects                       = null;
    private Router\List\CodeScanning|null $router🔀List🔀CodeScanning               = null;
    private Router\List\SecretScanning|null $router🔀List🔀SecretScanning           = null;
    private Router\List\Pulls|null $router🔀List🔀Pulls                             = null;
    private Router\List\Dependabot|null $router🔀List🔀Dependabot                   = null;
    private Router\List\Reactions|null $router🔀List🔀Reactions                     = null;
    private Router\List\Checks|null $router🔀List🔀Checks                           = null;
    private Router\Delete\Apps|null $router🔀Delete🔀Apps                           = null;
    private Router\Delete\Gists|null $router🔀Delete🔀Gists                         = null;
    private Router\Delete\Interactions|null $router🔀Delete🔀Interactions           = null;
    private Router\Delete\Projects|null $router🔀Delete🔀Projects                   = null;
    private Router\Delete\Repos|null $router🔀Delete🔀Repos                         = null;
    private Router\Delete\Users|null $router🔀Delete🔀Users                         = null;
    private Router\Delete\Codespaces|null $router🔀Delete🔀Codespaces               = null;
    private Router\Delete\Activity|null $router🔀Delete🔀Activity                   = null;
    private Router\Delete\Orgs|null $router🔀Delete🔀Orgs                           = null;
    private Router\Delete\Teams|null $router🔀Delete🔀Teams                         = null;
    private Router\Delete\Migrations|null $router🔀Delete🔀Migrations               = null;
    private Router\Delete\Packages|null $router🔀Delete🔀Packages                   = null;
    private Router\Delete\Actions|null $router🔀Delete🔀Actions                     = null;
    private Router\Delete\CodeScanning|null $router🔀Delete🔀CodeScanning           = null;
    private Router\Delete\Dependabot|null $router🔀Delete🔀Dependabot               = null;
    private Router\Delete\Git|null $router🔀Delete🔀Git                             = null;
    private Router\Delete\Issues|null $router🔀Delete🔀Issues                       = null;
    private Router\Delete\Pulls|null $router🔀Delete🔀Pulls                         = null;
    private Router\Delete\Copilot|null $router🔀Delete🔀Copilot                     = null;
    private Router\Delete\Reactions|null $router🔀Delete🔀Reactions                 = null;
    private Router\Put\Apps|null $router🔀Put🔀Apps                                 = null;
    private Router\Put\Activity|null $router🔀Put🔀Activity                         = null;
    private Router\Put\Actions|null $router🔀Put🔀Actions                           = null;
    private Router\Put\Orgs|null $router🔀Put🔀Orgs                                 = null;
    private Router\Put\Codespaces|null $router🔀Put🔀Codespaces                     = null;
    private Router\Put\Repos|null $router🔀Put🔀Repos                               = null;
    private Router\Put\Projects|null $router🔀Put🔀Projects                         = null;
    private Router\Put\Migrations|null $router🔀Put🔀Migrations                     = null;
    private Router\Put\Interactions|null $router🔀Put🔀Interactions                 = null;
    private Router\Put\Teams|null $router🔀Put🔀Teams                               = null;
    private Router\Put\Gists|null $router🔀Put🔀Gists                               = null;
    private Router\Put\Users|null $router🔀Put🔀Users                               = null;
    private Router\Put\Oidc|null $router🔀Put🔀Oidc                                 = null;
    private Router\Put\Dependabot|null $router🔀Put🔀Dependabot                     = null;
    private Router\Put\Issues|null $router🔀Put🔀Issues                             = null;
    private Router\Put\Pulls|null $router🔀Put🔀Pulls                               = null;
    private Router\Stream\Migrations|null $router🔀Stream🔀Migrations               = null;
    private Router\Stream\Repos|null $router🔀Stream🔀Repos                         = null;
    private Router\Stream\Actions|null $router🔀Stream🔀Actions                     = null;

    public function __construct(private AuthenticationInterface $authentication, private Browser $browser, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function router🔀Get🔀Meta(): Router\Get\Meta
    {
        if ($this->router🔀Get🔀Meta instanceof Router\Get\Meta === false) {
            $this->router🔀Get🔀Meta = new Router\Get\Meta(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Meta;
    }

    public function router🔀Get🔀SecurityAdvisories(): Router\Get\SecurityAdvisories
    {
        if ($this->router🔀Get🔀SecurityAdvisories instanceof Router\Get\SecurityAdvisories === false) {
            $this->router🔀Get🔀SecurityAdvisories = new Router\Get\SecurityAdvisories(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀SecurityAdvisories;
    }

    public function router🔀Get🔀Apps(): Router\Get\Apps
    {
        if ($this->router🔀Get🔀Apps instanceof Router\Get\Apps === false) {
            $this->router🔀Get🔀Apps = new Router\Get\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Apps;
    }

    public function router🔀Get🔀CodesOfConduct(): Router\Get\CodesOfConduct
    {
        if ($this->router🔀Get🔀CodesOfConduct instanceof Router\Get\CodesOfConduct === false) {
            $this->router🔀Get🔀CodesOfConduct = new Router\Get\CodesOfConduct(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀CodesOfConduct;
    }

    public function router🔀Get🔀Emojis(): Router\Get\Emojis
    {
        if ($this->router🔀Get🔀Emojis instanceof Router\Get\Emojis === false) {
            $this->router🔀Get🔀Emojis = new Router\Get\Emojis(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Emojis;
    }

    public function router🔀Get🔀Activity(): Router\Get\Activity
    {
        if ($this->router🔀Get🔀Activity instanceof Router\Get\Activity === false) {
            $this->router🔀Get🔀Activity = new Router\Get\Activity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Activity;
    }

    public function router🔀Get🔀Gists(): Router\Get\Gists
    {
        if ($this->router🔀Get🔀Gists instanceof Router\Get\Gists === false) {
            $this->router🔀Get🔀Gists = new Router\Get\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Gists;
    }

    public function router🔀Get🔀Issues(): Router\Get\Issues
    {
        if ($this->router🔀Get🔀Issues instanceof Router\Get\Issues === false) {
            $this->router🔀Get🔀Issues = new Router\Get\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Issues;
    }

    public function router🔀Get🔀Licenses(): Router\Get\Licenses
    {
        if ($this->router🔀Get🔀Licenses instanceof Router\Get\Licenses === false) {
            $this->router🔀Get🔀Licenses = new Router\Get\Licenses(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Licenses;
    }

    public function router🔀Get🔀Orgs(): Router\Get\Orgs
    {
        if ($this->router🔀Get🔀Orgs instanceof Router\Get\Orgs === false) {
            $this->router🔀Get🔀Orgs = new Router\Get\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Orgs;
    }

    public function router🔀Get🔀RateLimit(): Router\Get\RateLimit
    {
        if ($this->router🔀Get🔀RateLimit instanceof Router\Get\RateLimit === false) {
            $this->router🔀Get🔀RateLimit = new Router\Get\RateLimit(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀RateLimit;
    }

    public function router🔀Get🔀Repos(): Router\Get\Repos
    {
        if ($this->router🔀Get🔀Repos instanceof Router\Get\Repos === false) {
            $this->router🔀Get🔀Repos = new Router\Get\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Repos;
    }

    public function router🔀Get🔀Users(): Router\Get\Users
    {
        if ($this->router🔀Get🔀Users instanceof Router\Get\Users === false) {
            $this->router🔀Get🔀Users = new Router\Get\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Users;
    }

    public function router🔀Get🔀Gitignore(): Router\Get\Gitignore
    {
        if ($this->router🔀Get🔀Gitignore instanceof Router\Get\Gitignore === false) {
            $this->router🔀Get🔀Gitignore = new Router\Get\Gitignore(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Gitignore;
    }

    public function router🔀Get🔀Projects(): Router\Get\Projects
    {
        if ($this->router🔀Get🔀Projects instanceof Router\Get\Projects === false) {
            $this->router🔀Get🔀Projects = new Router\Get\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Projects;
    }

    public function router🔀Get🔀Search(): Router\Get\Search
    {
        if ($this->router🔀Get🔀Search instanceof Router\Get\Search === false) {
            $this->router🔀Get🔀Search = new Router\Get\Search(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Search;
    }

    public function router🔀Get🔀Teams(): Router\Get\Teams
    {
        if ($this->router🔀Get🔀Teams instanceof Router\Get\Teams === false) {
            $this->router🔀Get🔀Teams = new Router\Get\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Teams;
    }

    public function router🔀Get🔀Codespaces(): Router\Get\Codespaces
    {
        if ($this->router🔀Get🔀Codespaces instanceof Router\Get\Codespaces === false) {
            $this->router🔀Get🔀Codespaces = new Router\Get\Codespaces(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Codespaces;
    }

    public function router🔀Get🔀Interactions(): Router\Get\Interactions
    {
        if ($this->router🔀Get🔀Interactions instanceof Router\Get\Interactions === false) {
            $this->router🔀Get🔀Interactions = new Router\Get\Interactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Interactions;
    }

    public function router🔀Get🔀Migrations(): Router\Get\Migrations
    {
        if ($this->router🔀Get🔀Migrations instanceof Router\Get\Migrations === false) {
            $this->router🔀Get🔀Migrations = new Router\Get\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Migrations;
    }

    public function router🔀Get🔀Packages(): Router\Get\Packages
    {
        if ($this->router🔀Get🔀Packages instanceof Router\Get\Packages === false) {
            $this->router🔀Get🔀Packages = new Router\Get\Packages(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Packages;
    }

    public function router🔀Get🔀Dependabot(): Router\Get\Dependabot
    {
        if ($this->router🔀Get🔀Dependabot instanceof Router\Get\Dependabot === false) {
            $this->router🔀Get🔀Dependabot = new Router\Get\Dependabot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Dependabot;
    }

    public function router🔀Get🔀SecretScanning(): Router\Get\SecretScanning
    {
        if ($this->router🔀Get🔀SecretScanning instanceof Router\Get\SecretScanning === false) {
            $this->router🔀Get🔀SecretScanning = new Router\Get\SecretScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀SecretScanning;
    }

    public function router🔀Get🔀Actions(): Router\Get\Actions
    {
        if ($this->router🔀Get🔀Actions instanceof Router\Get\Actions === false) {
            $this->router🔀Get🔀Actions = new Router\Get\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Actions;
    }

    public function router🔀Get🔀CodeScanning(): Router\Get\CodeScanning
    {
        if ($this->router🔀Get🔀CodeScanning instanceof Router\Get\CodeScanning === false) {
            $this->router🔀Get🔀CodeScanning = new Router\Get\CodeScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀CodeScanning;
    }

    public function router🔀Get🔀Copilot(): Router\Get\Copilot
    {
        if ($this->router🔀Get🔀Copilot instanceof Router\Get\Copilot === false) {
            $this->router🔀Get🔀Copilot = new Router\Get\Copilot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Copilot;
    }

    public function router🔀Get🔀Pulls(): Router\Get\Pulls
    {
        if ($this->router🔀Get🔀Pulls instanceof Router\Get\Pulls === false) {
            $this->router🔀Get🔀Pulls = new Router\Get\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Pulls;
    }

    public function router🔀Get🔀Billing(): Router\Get\Billing
    {
        if ($this->router🔀Get🔀Billing instanceof Router\Get\Billing === false) {
            $this->router🔀Get🔀Billing = new Router\Get\Billing(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Billing;
    }

    public function router🔀Get🔀Checks(): Router\Get\Checks
    {
        if ($this->router🔀Get🔀Checks instanceof Router\Get\Checks === false) {
            $this->router🔀Get🔀Checks = new Router\Get\Checks(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Checks;
    }

    public function router🔀Get🔀DependencyGraph(): Router\Get\DependencyGraph
    {
        if ($this->router🔀Get🔀DependencyGraph instanceof Router\Get\DependencyGraph === false) {
            $this->router🔀Get🔀DependencyGraph = new Router\Get\DependencyGraph(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀DependencyGraph;
    }

    public function router🔀Get🔀Reactions(): Router\Get\Reactions
    {
        if ($this->router🔀Get🔀Reactions instanceof Router\Get\Reactions === false) {
            $this->router🔀Get🔀Reactions = new Router\Get\Reactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Reactions;
    }

    public function router🔀Get🔀Oidc(): Router\Get\Oidc
    {
        if ($this->router🔀Get🔀Oidc instanceof Router\Get\Oidc === false) {
            $this->router🔀Get🔀Oidc = new Router\Get\Oidc(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Oidc;
    }

    public function router🔀Get🔀Git(): Router\Get\Git
    {
        if ($this->router🔀Get🔀Git instanceof Router\Get\Git === false) {
            $this->router🔀Get🔀Git = new Router\Get\Git(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Get🔀Git;
    }

    public function router🔀Post🔀Apps(): Router\Post\Apps
    {
        if ($this->router🔀Post🔀Apps instanceof Router\Post\Apps === false) {
            $this->router🔀Post🔀Apps = new Router\Post\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Apps;
    }

    public function router🔀Post🔀Gists(): Router\Post\Gists
    {
        if ($this->router🔀Post🔀Gists instanceof Router\Post\Gists === false) {
            $this->router🔀Post🔀Gists = new Router\Post\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Gists;
    }

    public function router🔀Post🔀Orgs(): Router\Post\Orgs
    {
        if ($this->router🔀Post🔀Orgs instanceof Router\Post\Orgs === false) {
            $this->router🔀Post🔀Orgs = new Router\Post\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Orgs;
    }

    public function router🔀Post🔀Migrations(): Router\Post\Migrations
    {
        if ($this->router🔀Post🔀Migrations instanceof Router\Post\Migrations === false) {
            $this->router🔀Post🔀Migrations = new Router\Post\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Migrations;
    }

    public function router🔀Post🔀Projects(): Router\Post\Projects
    {
        if ($this->router🔀Post🔀Projects instanceof Router\Post\Projects === false) {
            $this->router🔀Post🔀Projects = new Router\Post\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Projects;
    }

    public function router🔀Post🔀Repos(): Router\Post\Repos
    {
        if ($this->router🔀Post🔀Repos instanceof Router\Post\Repos === false) {
            $this->router🔀Post🔀Repos = new Router\Post\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Repos;
    }

    public function router🔀Post🔀Teams(): Router\Post\Teams
    {
        if ($this->router🔀Post🔀Teams instanceof Router\Post\Teams === false) {
            $this->router🔀Post🔀Teams = new Router\Post\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Teams;
    }

    public function router🔀Post🔀Actions(): Router\Post\Actions
    {
        if ($this->router🔀Post🔀Actions instanceof Router\Post\Actions === false) {
            $this->router🔀Post🔀Actions = new Router\Post\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Actions;
    }

    public function router🔀Post🔀Codespaces(): Router\Post\Codespaces
    {
        if ($this->router🔀Post🔀Codespaces instanceof Router\Post\Codespaces === false) {
            $this->router🔀Post🔀Codespaces = new Router\Post\Codespaces(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Codespaces;
    }

    public function router🔀Post🔀Copilot(): Router\Post\Copilot
    {
        if ($this->router🔀Post🔀Copilot instanceof Router\Post\Copilot === false) {
            $this->router🔀Post🔀Copilot = new Router\Post\Copilot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Copilot;
    }

    public function router🔀Post🔀CodeScanning(): Router\Post\CodeScanning
    {
        if ($this->router🔀Post🔀CodeScanning instanceof Router\Post\CodeScanning === false) {
            $this->router🔀Post🔀CodeScanning = new Router\Post\CodeScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀CodeScanning;
    }

    public function router🔀Post🔀DependencyGraph(): Router\Post\DependencyGraph
    {
        if ($this->router🔀Post🔀DependencyGraph instanceof Router\Post\DependencyGraph === false) {
            $this->router🔀Post🔀DependencyGraph = new Router\Post\DependencyGraph(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀DependencyGraph;
    }

    public function router🔀Post🔀Git(): Router\Post\Git
    {
        if ($this->router🔀Post🔀Git instanceof Router\Post\Git === false) {
            $this->router🔀Post🔀Git = new Router\Post\Git(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Git;
    }

    public function router🔀Post🔀SecurityAdvisories(): Router\Post\SecurityAdvisories
    {
        if ($this->router🔀Post🔀SecurityAdvisories instanceof Router\Post\SecurityAdvisories === false) {
            $this->router🔀Post🔀SecurityAdvisories = new Router\Post\SecurityAdvisories(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀SecurityAdvisories;
    }

    public function router🔀Post🔀Reactions(): Router\Post\Reactions
    {
        if ($this->router🔀Post🔀Reactions instanceof Router\Post\Reactions === false) {
            $this->router🔀Post🔀Reactions = new Router\Post\Reactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Reactions;
    }

    public function router🔀Post🔀Packages(): Router\Post\Packages
    {
        if ($this->router🔀Post🔀Packages instanceof Router\Post\Packages === false) {
            $this->router🔀Post🔀Packages = new Router\Post\Packages(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Packages;
    }

    public function router🔀Post🔀Checks(): Router\Post\Checks
    {
        if ($this->router🔀Post🔀Checks instanceof Router\Post\Checks === false) {
            $this->router🔀Post🔀Checks = new Router\Post\Checks(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Checks;
    }

    public function router🔀Post🔀Issues(): Router\Post\Issues
    {
        if ($this->router🔀Post🔀Issues instanceof Router\Post\Issues === false) {
            $this->router🔀Post🔀Issues = new Router\Post\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Issues;
    }

    public function router🔀Post🔀Pulls(): Router\Post\Pulls
    {
        if ($this->router🔀Post🔀Pulls instanceof Router\Post\Pulls === false) {
            $this->router🔀Post🔀Pulls = new Router\Post\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Pulls;
    }

    public function router🔀Post🔀Markdown(): Router\Post\Markdown
    {
        if ($this->router🔀Post🔀Markdown instanceof Router\Post\Markdown === false) {
            $this->router🔀Post🔀Markdown = new Router\Post\Markdown(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Markdown;
    }

    public function router🔀Post🔀Users(): Router\Post\Users
    {
        if ($this->router🔀Post🔀Users instanceof Router\Post\Users === false) {
            $this->router🔀Post🔀Users = new Router\Post\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Post🔀Users;
    }

    public function router🔀Patch🔀Apps(): Router\Patch\Apps
    {
        if ($this->router🔀Patch🔀Apps instanceof Router\Patch\Apps === false) {
            $this->router🔀Patch🔀Apps = new Router\Patch\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Apps;
    }

    public function router🔀Patch🔀Activity(): Router\Patch\Activity
    {
        if ($this->router🔀Patch🔀Activity instanceof Router\Patch\Activity === false) {
            $this->router🔀Patch🔀Activity = new Router\Patch\Activity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Activity;
    }

    public function router🔀Patch🔀Projects(): Router\Patch\Projects
    {
        if ($this->router🔀Patch🔀Projects instanceof Router\Patch\Projects === false) {
            $this->router🔀Patch🔀Projects = new Router\Patch\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Projects;
    }

    public function router🔀Patch🔀Repos(): Router\Patch\Repos
    {
        if ($this->router🔀Patch🔀Repos instanceof Router\Patch\Repos === false) {
            $this->router🔀Patch🔀Repos = new Router\Patch\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Repos;
    }

    public function router🔀Patch🔀Codespaces(): Router\Patch\Codespaces
    {
        if ($this->router🔀Patch🔀Codespaces instanceof Router\Patch\Codespaces === false) {
            $this->router🔀Patch🔀Codespaces = new Router\Patch\Codespaces(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Codespaces;
    }

    public function router🔀Patch🔀Users(): Router\Patch\Users
    {
        if ($this->router🔀Patch🔀Users instanceof Router\Patch\Users === false) {
            $this->router🔀Patch🔀Users = new Router\Patch\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Users;
    }

    public function router🔀Patch🔀Gists(): Router\Patch\Gists
    {
        if ($this->router🔀Patch🔀Gists instanceof Router\Patch\Gists === false) {
            $this->router🔀Patch🔀Gists = new Router\Patch\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Gists;
    }

    public function router🔀Patch🔀Orgs(): Router\Patch\Orgs
    {
        if ($this->router🔀Patch🔀Orgs instanceof Router\Patch\Orgs === false) {
            $this->router🔀Patch🔀Orgs = new Router\Patch\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Orgs;
    }

    public function router🔀Patch🔀Teams(): Router\Patch\Teams
    {
        if ($this->router🔀Patch🔀Teams instanceof Router\Patch\Teams === false) {
            $this->router🔀Patch🔀Teams = new Router\Patch\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Teams;
    }

    public function router🔀Patch🔀Migrations(): Router\Patch\Migrations
    {
        if ($this->router🔀Patch🔀Migrations instanceof Router\Patch\Migrations === false) {
            $this->router🔀Patch🔀Migrations = new Router\Patch\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Migrations;
    }

    public function router🔀Patch🔀Actions(): Router\Patch\Actions
    {
        if ($this->router🔀Patch🔀Actions instanceof Router\Patch\Actions === false) {
            $this->router🔀Patch🔀Actions = new Router\Patch\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Actions;
    }

    public function router🔀Patch🔀Checks(): Router\Patch\Checks
    {
        if ($this->router🔀Patch🔀Checks instanceof Router\Patch\Checks === false) {
            $this->router🔀Patch🔀Checks = new Router\Patch\Checks(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Checks;
    }

    public function router🔀Patch🔀CodeScanning(): Router\Patch\CodeScanning
    {
        if ($this->router🔀Patch🔀CodeScanning instanceof Router\Patch\CodeScanning === false) {
            $this->router🔀Patch🔀CodeScanning = new Router\Patch\CodeScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀CodeScanning;
    }

    public function router🔀Patch🔀Issues(): Router\Patch\Issues
    {
        if ($this->router🔀Patch🔀Issues instanceof Router\Patch\Issues === false) {
            $this->router🔀Patch🔀Issues = new Router\Patch\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Issues;
    }

    public function router🔀Patch🔀Pulls(): Router\Patch\Pulls
    {
        if ($this->router🔀Patch🔀Pulls instanceof Router\Patch\Pulls === false) {
            $this->router🔀Patch🔀Pulls = new Router\Patch\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Pulls;
    }

    public function router🔀Patch🔀SecurityAdvisories(): Router\Patch\SecurityAdvisories
    {
        if ($this->router🔀Patch🔀SecurityAdvisories instanceof Router\Patch\SecurityAdvisories === false) {
            $this->router🔀Patch🔀SecurityAdvisories = new Router\Patch\SecurityAdvisories(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀SecurityAdvisories;
    }

    public function router🔀Patch🔀Dependabot(): Router\Patch\Dependabot
    {
        if ($this->router🔀Patch🔀Dependabot instanceof Router\Patch\Dependabot === false) {
            $this->router🔀Patch🔀Dependabot = new Router\Patch\Dependabot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Dependabot;
    }

    public function router🔀Patch🔀Git(): Router\Patch\Git
    {
        if ($this->router🔀Patch🔀Git instanceof Router\Patch\Git === false) {
            $this->router🔀Patch🔀Git = new Router\Patch\Git(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀Git;
    }

    public function router🔀Patch🔀SecretScanning(): Router\Patch\SecretScanning
    {
        if ($this->router🔀Patch🔀SecretScanning instanceof Router\Patch\SecretScanning === false) {
            $this->router🔀Patch🔀SecretScanning = new Router\Patch\SecretScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Patch🔀SecretScanning;
    }

    public function router🔀List🔀Apps(): Router\List\Apps
    {
        if ($this->router🔀List🔀Apps instanceof Router\List\Apps === false) {
            $this->router🔀List🔀Apps = new Router\List\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Apps;
    }

    public function router🔀List🔀Gists(): Router\List\Gists
    {
        if ($this->router🔀List🔀Gists instanceof Router\List\Gists === false) {
            $this->router🔀List🔀Gists = new Router\List\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Gists;
    }

    public function router🔀List🔀Users(): Router\List\Users
    {
        if ($this->router🔀List🔀Users instanceof Router\List\Users === false) {
            $this->router🔀List🔀Users = new Router\List\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Users;
    }

    public function router🔀List🔀Issues(): Router\List\Issues
    {
        if ($this->router🔀List🔀Issues instanceof Router\List\Issues === false) {
            $this->router🔀List🔀Issues = new Router\List\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Issues;
    }

    public function router🔀List🔀Migrations(): Router\List\Migrations
    {
        if ($this->router🔀List🔀Migrations instanceof Router\List\Migrations === false) {
            $this->router🔀List🔀Migrations = new Router\List\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Migrations;
    }

    public function router🔀List🔀Orgs(): Router\List\Orgs
    {
        if ($this->router🔀List🔀Orgs instanceof Router\List\Orgs === false) {
            $this->router🔀List🔀Orgs = new Router\List\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Orgs;
    }

    public function router🔀List🔀Packages(): Router\List\Packages
    {
        if ($this->router🔀List🔀Packages instanceof Router\List\Packages === false) {
            $this->router🔀List🔀Packages = new Router\List\Packages(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Packages;
    }

    public function router🔀List🔀Repos(): Router\List\Repos
    {
        if ($this->router🔀List🔀Repos instanceof Router\List\Repos === false) {
            $this->router🔀List🔀Repos = new Router\List\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Repos;
    }

    public function router🔀List🔀Activity(): Router\List\Activity
    {
        if ($this->router🔀List🔀Activity instanceof Router\List\Activity === false) {
            $this->router🔀List🔀Activity = new Router\List\Activity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Activity;
    }

    public function router🔀List🔀Teams(): Router\List\Teams
    {
        if ($this->router🔀List🔀Teams instanceof Router\List\Teams === false) {
            $this->router🔀List🔀Teams = new Router\List\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Teams;
    }

    public function router🔀List🔀Licenses(): Router\List\Licenses
    {
        if ($this->router🔀List🔀Licenses instanceof Router\List\Licenses === false) {
            $this->router🔀List🔀Licenses = new Router\List\Licenses(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Licenses;
    }

    public function router🔀List🔀Projects(): Router\List\Projects
    {
        if ($this->router🔀List🔀Projects instanceof Router\List\Projects === false) {
            $this->router🔀List🔀Projects = new Router\List\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Projects;
    }

    public function router🔀List🔀CodeScanning(): Router\List\CodeScanning
    {
        if ($this->router🔀List🔀CodeScanning instanceof Router\List\CodeScanning === false) {
            $this->router🔀List🔀CodeScanning = new Router\List\CodeScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀CodeScanning;
    }

    public function router🔀List🔀SecretScanning(): Router\List\SecretScanning
    {
        if ($this->router🔀List🔀SecretScanning instanceof Router\List\SecretScanning === false) {
            $this->router🔀List🔀SecretScanning = new Router\List\SecretScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀SecretScanning;
    }

    public function router🔀List🔀Pulls(): Router\List\Pulls
    {
        if ($this->router🔀List🔀Pulls instanceof Router\List\Pulls === false) {
            $this->router🔀List🔀Pulls = new Router\List\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Pulls;
    }

    public function router🔀List🔀Dependabot(): Router\List\Dependabot
    {
        if ($this->router🔀List🔀Dependabot instanceof Router\List\Dependabot === false) {
            $this->router🔀List🔀Dependabot = new Router\List\Dependabot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Dependabot;
    }

    public function router🔀List🔀Reactions(): Router\List\Reactions
    {
        if ($this->router🔀List🔀Reactions instanceof Router\List\Reactions === false) {
            $this->router🔀List🔀Reactions = new Router\List\Reactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Reactions;
    }

    public function router🔀List🔀Checks(): Router\List\Checks
    {
        if ($this->router🔀List🔀Checks instanceof Router\List\Checks === false) {
            $this->router🔀List🔀Checks = new Router\List\Checks(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀List🔀Checks;
    }

    public function router🔀Delete🔀Apps(): Router\Delete\Apps
    {
        if ($this->router🔀Delete🔀Apps instanceof Router\Delete\Apps === false) {
            $this->router🔀Delete🔀Apps = new Router\Delete\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Apps;
    }

    public function router🔀Delete🔀Gists(): Router\Delete\Gists
    {
        if ($this->router🔀Delete🔀Gists instanceof Router\Delete\Gists === false) {
            $this->router🔀Delete🔀Gists = new Router\Delete\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Gists;
    }

    public function router🔀Delete🔀Interactions(): Router\Delete\Interactions
    {
        if ($this->router🔀Delete🔀Interactions instanceof Router\Delete\Interactions === false) {
            $this->router🔀Delete🔀Interactions = new Router\Delete\Interactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Interactions;
    }

    public function router🔀Delete🔀Projects(): Router\Delete\Projects
    {
        if ($this->router🔀Delete🔀Projects instanceof Router\Delete\Projects === false) {
            $this->router🔀Delete🔀Projects = new Router\Delete\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Projects;
    }

    public function router🔀Delete🔀Repos(): Router\Delete\Repos
    {
        if ($this->router🔀Delete🔀Repos instanceof Router\Delete\Repos === false) {
            $this->router🔀Delete🔀Repos = new Router\Delete\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Repos;
    }

    public function router🔀Delete🔀Users(): Router\Delete\Users
    {
        if ($this->router🔀Delete🔀Users instanceof Router\Delete\Users === false) {
            $this->router🔀Delete🔀Users = new Router\Delete\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Users;
    }

    public function router🔀Delete🔀Codespaces(): Router\Delete\Codespaces
    {
        if ($this->router🔀Delete🔀Codespaces instanceof Router\Delete\Codespaces === false) {
            $this->router🔀Delete🔀Codespaces = new Router\Delete\Codespaces(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Codespaces;
    }

    public function router🔀Delete🔀Activity(): Router\Delete\Activity
    {
        if ($this->router🔀Delete🔀Activity instanceof Router\Delete\Activity === false) {
            $this->router🔀Delete🔀Activity = new Router\Delete\Activity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Activity;
    }

    public function router🔀Delete🔀Orgs(): Router\Delete\Orgs
    {
        if ($this->router🔀Delete🔀Orgs instanceof Router\Delete\Orgs === false) {
            $this->router🔀Delete🔀Orgs = new Router\Delete\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Orgs;
    }

    public function router🔀Delete🔀Teams(): Router\Delete\Teams
    {
        if ($this->router🔀Delete🔀Teams instanceof Router\Delete\Teams === false) {
            $this->router🔀Delete🔀Teams = new Router\Delete\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Teams;
    }

    public function router🔀Delete🔀Migrations(): Router\Delete\Migrations
    {
        if ($this->router🔀Delete🔀Migrations instanceof Router\Delete\Migrations === false) {
            $this->router🔀Delete🔀Migrations = new Router\Delete\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Migrations;
    }

    public function router🔀Delete🔀Packages(): Router\Delete\Packages
    {
        if ($this->router🔀Delete🔀Packages instanceof Router\Delete\Packages === false) {
            $this->router🔀Delete🔀Packages = new Router\Delete\Packages(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Packages;
    }

    public function router🔀Delete🔀Actions(): Router\Delete\Actions
    {
        if ($this->router🔀Delete🔀Actions instanceof Router\Delete\Actions === false) {
            $this->router🔀Delete🔀Actions = new Router\Delete\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Actions;
    }

    public function router🔀Delete🔀CodeScanning(): Router\Delete\CodeScanning
    {
        if ($this->router🔀Delete🔀CodeScanning instanceof Router\Delete\CodeScanning === false) {
            $this->router🔀Delete🔀CodeScanning = new Router\Delete\CodeScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀CodeScanning;
    }

    public function router🔀Delete🔀Dependabot(): Router\Delete\Dependabot
    {
        if ($this->router🔀Delete🔀Dependabot instanceof Router\Delete\Dependabot === false) {
            $this->router🔀Delete🔀Dependabot = new Router\Delete\Dependabot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Dependabot;
    }

    public function router🔀Delete🔀Git(): Router\Delete\Git
    {
        if ($this->router🔀Delete🔀Git instanceof Router\Delete\Git === false) {
            $this->router🔀Delete🔀Git = new Router\Delete\Git(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Git;
    }

    public function router🔀Delete🔀Issues(): Router\Delete\Issues
    {
        if ($this->router🔀Delete🔀Issues instanceof Router\Delete\Issues === false) {
            $this->router🔀Delete🔀Issues = new Router\Delete\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Issues;
    }

    public function router🔀Delete🔀Pulls(): Router\Delete\Pulls
    {
        if ($this->router🔀Delete🔀Pulls instanceof Router\Delete\Pulls === false) {
            $this->router🔀Delete🔀Pulls = new Router\Delete\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Pulls;
    }

    public function router🔀Delete🔀Copilot(): Router\Delete\Copilot
    {
        if ($this->router🔀Delete🔀Copilot instanceof Router\Delete\Copilot === false) {
            $this->router🔀Delete🔀Copilot = new Router\Delete\Copilot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Copilot;
    }

    public function router🔀Delete🔀Reactions(): Router\Delete\Reactions
    {
        if ($this->router🔀Delete🔀Reactions instanceof Router\Delete\Reactions === false) {
            $this->router🔀Delete🔀Reactions = new Router\Delete\Reactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Delete🔀Reactions;
    }

    public function router🔀Put🔀Apps(): Router\Put\Apps
    {
        if ($this->router🔀Put🔀Apps instanceof Router\Put\Apps === false) {
            $this->router🔀Put🔀Apps = new Router\Put\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Apps;
    }

    public function router🔀Put🔀Activity(): Router\Put\Activity
    {
        if ($this->router🔀Put🔀Activity instanceof Router\Put\Activity === false) {
            $this->router🔀Put🔀Activity = new Router\Put\Activity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Activity;
    }

    public function router🔀Put🔀Actions(): Router\Put\Actions
    {
        if ($this->router🔀Put🔀Actions instanceof Router\Put\Actions === false) {
            $this->router🔀Put🔀Actions = new Router\Put\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Actions;
    }

    public function router🔀Put🔀Orgs(): Router\Put\Orgs
    {
        if ($this->router🔀Put🔀Orgs instanceof Router\Put\Orgs === false) {
            $this->router🔀Put🔀Orgs = new Router\Put\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Orgs;
    }

    public function router🔀Put🔀Codespaces(): Router\Put\Codespaces
    {
        if ($this->router🔀Put🔀Codespaces instanceof Router\Put\Codespaces === false) {
            $this->router🔀Put🔀Codespaces = new Router\Put\Codespaces(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Codespaces;
    }

    public function router🔀Put🔀Repos(): Router\Put\Repos
    {
        if ($this->router🔀Put🔀Repos instanceof Router\Put\Repos === false) {
            $this->router🔀Put🔀Repos = new Router\Put\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Repos;
    }

    public function router🔀Put🔀Projects(): Router\Put\Projects
    {
        if ($this->router🔀Put🔀Projects instanceof Router\Put\Projects === false) {
            $this->router🔀Put🔀Projects = new Router\Put\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Projects;
    }

    public function router🔀Put🔀Migrations(): Router\Put\Migrations
    {
        if ($this->router🔀Put🔀Migrations instanceof Router\Put\Migrations === false) {
            $this->router🔀Put🔀Migrations = new Router\Put\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Migrations;
    }

    public function router🔀Put🔀Interactions(): Router\Put\Interactions
    {
        if ($this->router🔀Put🔀Interactions instanceof Router\Put\Interactions === false) {
            $this->router🔀Put🔀Interactions = new Router\Put\Interactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Interactions;
    }

    public function router🔀Put🔀Teams(): Router\Put\Teams
    {
        if ($this->router🔀Put🔀Teams instanceof Router\Put\Teams === false) {
            $this->router🔀Put🔀Teams = new Router\Put\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Teams;
    }

    public function router🔀Put🔀Gists(): Router\Put\Gists
    {
        if ($this->router🔀Put🔀Gists instanceof Router\Put\Gists === false) {
            $this->router🔀Put🔀Gists = new Router\Put\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Gists;
    }

    public function router🔀Put🔀Users(): Router\Put\Users
    {
        if ($this->router🔀Put🔀Users instanceof Router\Put\Users === false) {
            $this->router🔀Put🔀Users = new Router\Put\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Users;
    }

    public function router🔀Put🔀Oidc(): Router\Put\Oidc
    {
        if ($this->router🔀Put🔀Oidc instanceof Router\Put\Oidc === false) {
            $this->router🔀Put🔀Oidc = new Router\Put\Oidc(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Oidc;
    }

    public function router🔀Put🔀Dependabot(): Router\Put\Dependabot
    {
        if ($this->router🔀Put🔀Dependabot instanceof Router\Put\Dependabot === false) {
            $this->router🔀Put🔀Dependabot = new Router\Put\Dependabot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Dependabot;
    }

    public function router🔀Put🔀Issues(): Router\Put\Issues
    {
        if ($this->router🔀Put🔀Issues instanceof Router\Put\Issues === false) {
            $this->router🔀Put🔀Issues = new Router\Put\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Issues;
    }

    public function router🔀Put🔀Pulls(): Router\Put\Pulls
    {
        if ($this->router🔀Put🔀Pulls instanceof Router\Put\Pulls === false) {
            $this->router🔀Put🔀Pulls = new Router\Put\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Put🔀Pulls;
    }

    public function router🔀Stream🔀Migrations(): Router\Stream\Migrations
    {
        if ($this->router🔀Stream🔀Migrations instanceof Router\Stream\Migrations === false) {
            $this->router🔀Stream🔀Migrations = new Router\Stream\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Stream🔀Migrations;
    }

    public function router🔀Stream🔀Repos(): Router\Stream\Repos
    {
        if ($this->router🔀Stream🔀Repos instanceof Router\Stream\Repos === false) {
            $this->router🔀Stream🔀Repos = new Router\Stream\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Stream🔀Repos;
    }

    public function router🔀Stream🔀Actions(): Router\Stream\Actions
    {
        if ($this->router🔀Stream🔀Actions instanceof Router\Stream\Actions === false) {
            $this->router🔀Stream🔀Actions = new Router\Stream\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->router🔀Stream🔀Actions;
    }
}
