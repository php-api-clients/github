<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom;

final class Client
{
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    private readonly \React\Http\Browser $browser;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator;
    public function __construct(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication, \React\Http\Browser $browser)
    {
        $this->authentication = $authentication;
        $this->browser = new \React\Http\Browser();
        $this->requestSchemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        $this->responseSchemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_RESPONSE);
        $this->hydrator = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper();
    }
    public function meta() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function apps() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function codesOfConduct() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function emojis() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Emojis
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Emojis($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function dependabot() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function secretScanning() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function activity() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function gists() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function gitignore() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function issues() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function licenses() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function markdown() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function orgs() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function actions() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function oidc() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function codeScanning() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function codespaces() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function interactions() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function migrations() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function packages() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function projects() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function repos() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function billing() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function teams() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function reactions() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function rateLimit() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\RateLimit
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\RateLimit($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function checks() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function dependencyGraph() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function git() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function pulls() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function search() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function users() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    /**
     * @return \React\Promise\PromiseInterface<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Root|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Meta\Response\Application\OctocatStream\H200|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Meta\Response\Application\Json\H200>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Meta\Response\Text\Plain\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Apps\Response\Application\Json\H201|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDeliveryItem>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Apps\Response\Application\Json\H202|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InstallationToken|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Apps\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UserMarketplacePurchase>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeOfConduct>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeOfConduct|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Emojis\Response\Application\Json\H200|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertWithRepository>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Dependabot\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotPublicKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationDependabotSecret|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlert>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotSecret|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationSecretScanningAlert>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\SecretScanning\Response\Application\Json\H503|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningAlert>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningAlert|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningLocation>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Event>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Activity\Response\Application\Json\H503|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Feed|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Thread>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Activity\Response\Application\Json\H202|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Thread|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ThreadSubscription|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Activity\Response\Application\Json\H200|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositorySubscription|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StarredRepository>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Gists\Response\Application\Json\H403|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistComment>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistComment|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistCommit>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Gists\Response\Application\Json\H404|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Gitignore\Response\Application\Json\H200>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitignoreTemplate|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Issues\Response\Application\Json\H503|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueComment>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueComment|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueEvent>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueEvent|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueEventForIssue>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Label>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineIssueEvents>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Label|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Milestone>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Milestone|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseSimple>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseContent|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Markdown\Response\Text\Html\H200|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationSimple>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Orgs\Response\Application\Json\H422|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationInvitation>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Orgs\Response\Application\Json\H202|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Orgs\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationInvitation|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Team>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamSimple>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageOrgEnterprise|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsOrganizationPermissions|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SelectedActions|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsGetDefaultWorkflowPermissions|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredWorkflow|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerApplication>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsPublicKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationActionsSecret|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationActionsVariable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepoRequiredWorkflow|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Artifact|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageByRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheList|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Job|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OidcCustomSubRepo|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsRepositoryPermissions|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsWorkflowAccessToRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EnvironmentApprovals>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PendingDeployment>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Deployment>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRunUsage|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsSecret|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsVariable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Workflow|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OidcCustomSub|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningOrganizationAlertItems>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CodeScanning\Response\Application\Json\H503|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertItems>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlert|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertInstance>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAnalysis>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAnalysis|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CodeScanning\Response\Application\JsonPlusSarif\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAnalysisDeletion|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningCodeqlDatabase>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningCodeqlDatabase|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningSarifsReceipt|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningSarifsStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesPublicKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesOrgSecret|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H202|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H503|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepoCodespacesSecret|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesUserPublicKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesSecret|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespaceExportDetails|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespaceWithFullRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Interactions\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InteractionLimitResponse|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PorterAuthor>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PorterAuthor|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PorterLargeFile>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Package>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Package|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Projects\Response\Application\Json\H403|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Projects\Response\Application\Json\H201|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Projects\Response\Application\Json\H503|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectColumn|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCard>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Projects\Response\Application\Json\H422|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCollaboratorPermission|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectColumn>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H403|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Autolink>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Autolink|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ShortBranch>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchWithProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranch|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchPullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H200>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeownersErrors|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Collaborator>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositoryInvitation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositoryCollaboratorPermission|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComment>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComment|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchShort>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H503|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CombinedCommitStatus|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Status>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommunityProfile|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComparison|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentTree|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Contributor>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Deployment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H202|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentStatus>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Environment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositoryInvitation>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeployKey>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeployKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Language|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MergedUpstream|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Page|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuild>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuildStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuild|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageDeployment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHealthCheck|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentFile|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseNotesContent|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitActivity>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContributorActivity>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ParticipationStats|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Status|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Tag>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TagProtection>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TagProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Topic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CloneTraffic|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentTraffic>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReferrerTraffic>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ViewTraffic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsBillingUsage|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackagesBillingUsage|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CombinedBillingUsage|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Teams\Response\Application\Json\H403|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamRepository|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimitOverview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckAnnotation>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckSuite|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckSuitePreference|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Checks\Response\Application\Json\H200|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependencyGraphDiff>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\DependencyGraph\Response\Application\Json\H201|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ShortBlob|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Blob|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitCommit|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitRef>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTag|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTree|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Pulls\Response\Application\Json\H503|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DiffEntry>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMergeResult|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Pulls\Response\Application\Json\H405|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Pulls\Response\Application\Json\H409|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewRequest|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Pulls\Response\Application\Json\H202|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Search\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Search\Response\Application\Json\H503|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Users\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PrivateUser|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Email>|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Key>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Key|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SshSigningKey>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SshSigningKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hovercard|\Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\KeySimple>>
     */
    public function call(string $call, array $params = array()) : \React\Promise\PromiseInterface
    {
        switch ($call) {
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Root::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->meta()->root();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Root {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Get::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->meta()->get();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetOctocat::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('s')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->meta()->getOctocat($params['s']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Meta\Response\Application\OctocatStream\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetAllVersions::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->meta()->getAllVersions();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetZen::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->meta()->getZen();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Meta\Response\Text\Plain\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetAuthenticated::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->getAuthenticated();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateFromManifest::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('code')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->createFromManifest($params['code']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Apps\Response\Application\Json\H201|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookConfigForApp::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->getWebhookConfigForApp();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UpdateWebhookConfigForApp::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->updateWebhookConfigForApp();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListWebhookDeliveries::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'cursor', 'redelivery')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->listWebhookDeliveries($params['per_page'], $params['cursor'], $params['redelivery']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookDelivery::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('delivery_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->getWebhookDelivery($params['delivery_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RedeliverWebhookDelivery::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('delivery_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->redeliverWebhookDelivery($params['delivery_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Apps\Response\Application\Json\H202|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallations::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page', 'since', 'outdated')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->listInstallations($params['per_page'], $params['page'], $params['since'], $params['outdated']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetInstallation::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('installation_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->getInstallation($params['installation_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteInstallation::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('installation_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->deleteInstallation($params['installation_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateInstallationAccessToken::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('installation_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->createInstallationAccessToken($params['installation_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InstallationToken|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\SuspendInstallation::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('installation_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->suspendInstallation($params['installation_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UnsuspendInstallation::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('installation_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->unsuspendInstallation($params['installation_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteAuthorization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('client_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->deleteAuthorization($params['client_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CheckToken::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('client_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->checkToken($params['client_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteToken::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('client_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->deleteToken($params['client_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ResetToken::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('client_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->resetToken($params['client_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ScopeToken::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('client_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->scopeToken($params['client_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetBySlug::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('app_slug')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->getBySlug($params['app_slug']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListReposAccessibleToInstallation::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->listReposAccessibleToInstallation($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Apps\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeInstallationAccessToken::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->revokeInstallationAccessToken();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccount::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('account_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->getSubscriptionPlanForAccount($params['account_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlans::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->listPlans($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlan::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('plan_id', 'sort', 'direction', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->listAccountsForPlan($params['plan_id'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccountStubbed::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('account_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->getSubscriptionPlanForAccountStubbed($params['account_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlansStubbed::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->listPlansStubbed($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlanStubbed::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('plan_id', 'sort', 'direction', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->listAccountsForPlanStubbed($params['plan_id'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetOrgInstallation::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->getOrgInstallation($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetRepoInstallation::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->getRepoInstallation($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationsForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->listInstallationsForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Apps\Response\Application\Json\H200|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationReposForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('installation_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->listInstallationReposForAuthenticatedUser($params['installation_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Apps\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\AddRepoToInstallationForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('installation_id', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->addRepoToInstallationForAuthenticatedUser($params['installation_id'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('installation_id', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->removeRepoFromInstallationForAuthenticatedUser($params['installation_id'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->listSubscriptionsForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUserStubbed::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->listSubscriptionsForAuthenticatedUserStubbed($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetUserInstallation::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->apps()->getUserInstallation($params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetAllCodesOfConduct::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codesOfConduct()->getAllCodesOfConduct();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetConductCode::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('key')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codesOfConduct()->getConductCode($params['key']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeOfConduct|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Emojis\Get::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->emojis()->get();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Emojis\Response\Application\Json\H200|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForEnterprise::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('enterprise', 'state', 'severity', 'ecosystem', 'package', 'scope', 'sort', 'direction', 'before', 'after', 'first', 'last', 'per_page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->listAlertsForEnterprise($params['enterprise'], $params['state'], $params['severity'], $params['ecosystem'], $params['package'], $params['scope'], $params['sort'], $params['direction'], $params['before'], $params['after'], $params['first'], $params['last'], $params['per_page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'state', 'severity', 'ecosystem', 'package', 'scope', 'sort', 'direction', 'before', 'after', 'first', 'last', 'per_page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->listAlertsForOrg($params['org'], $params['state'], $params['severity'], $params['ecosystem'], $params['package'], $params['scope'], $params['sort'], $params['direction'], $params['before'], $params['after'], $params['first'], $params['last'], $params['per_page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListOrgSecrets::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->listOrgSecrets($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Dependabot\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetOrgPublicKey::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->getOrgPublicKey($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->getOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationDependabotSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->createOrUpdateOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->deleteOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListSelectedReposForOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name', 'page', 'per_page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->listSelectedReposForOrgSecret($params['org'], $params['secret_name'], $params['page'], $params['per_page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Dependabot\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\SetSelectedReposForOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->setSelectedReposForOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\AddSelectedRepoToOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->addSelectedRepoToOrgSecret($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\RemoveSelectedRepoFromOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->removeSelectedRepoFromOrgSecret($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'state', 'severity', 'ecosystem', 'package', 'manifest', 'scope', 'sort', 'direction', 'page', 'per_page', 'before', 'after', 'first', 'last')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->listAlertsForRepo($params['owner'], $params['repo'], $params['state'], $params['severity'], $params['ecosystem'], $params['package'], $params['manifest'], $params['scope'], $params['sort'], $params['direction'], $params['page'], $params['per_page'], $params['before'], $params['after'], $params['first'], $params['last']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetAlert::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'alert_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->getAlert($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlert|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\UpdateAlert::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'alert_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->updateAlert($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListRepoSecrets::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->listRepoSecrets($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Dependabot\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoPublicKey::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->getRepoPublicKey($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->getRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateRepoSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->createOrUpdateRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteRepoSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependabot()->deleteRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForEnterprise::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('enterprise', 'state', 'secret_type', 'resolution', 'sort', 'direction', 'per_page', 'before', 'after')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->secretScanning()->listAlertsForEnterprise($params['enterprise'], $params['state'], $params['secret_type'], $params['resolution'], $params['sort'], $params['direction'], $params['per_page'], $params['before'], $params['after']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\SecretScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'state', 'secret_type', 'resolution', 'sort', 'direction', 'page', 'per_page', 'before', 'after')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->secretScanning()->listAlertsForOrg($params['org'], $params['state'], $params['secret_type'], $params['resolution'], $params['sort'], $params['direction'], $params['page'], $params['per_page'], $params['before'], $params['after']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\SecretScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'state', 'secret_type', 'resolution', 'sort', 'direction', 'page', 'per_page', 'before', 'after')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->secretScanning()->listAlertsForRepo($params['owner'], $params['repo'], $params['state'], $params['secret_type'], $params['resolution'], $params['sort'], $params['direction'], $params['page'], $params['per_page'], $params['before'], $params['after']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\SecretScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetAlert::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'alert_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->secretScanning()->getAlert($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningAlert|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\SecretScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\UpdateAlert::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'alert_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->secretScanning()->updateAlert($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningAlert|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\SecretScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListLocationsForAlert::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'alert_number', 'page', 'per_page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->secretScanning()->listLocationsForAlert($params['owner'], $params['repo'], $params['alert_number'], $params['page'], $params['per_page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\SecretScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEvents::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listPublicEvents($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Activity\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetFeeds::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->getFeeds();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Feed {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEventsForRepoNetwork::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listPublicEventsForRepoNetwork($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListNotificationsForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('all', 'participating', 'since', 'before', 'page', 'per_page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listNotificationsForAuthenticatedUser($params['all'], $params['participating'], $params['since'], $params['before'], $params['page'], $params['per_page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkNotificationsAsRead::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->markNotificationsAsRead();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Activity\Response\Application\Json\H202|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThread::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('thread_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->getThread($params['thread_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Thread|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkThreadAsRead::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('thread_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->markThreadAsRead($params['thread_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('thread_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->getThreadSubscriptionForAuthenticatedUser($params['thread_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ThreadSubscription|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\SetThreadSubscription::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('thread_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->setThreadSubscription($params['thread_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ThreadSubscription|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\DeleteThreadSubscription::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('thread_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->deleteThreadSubscription($params['thread_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicOrgEvents::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listPublicOrgEvents($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListRepoEvents::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listRepoEvents($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListRepoNotificationsForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'all', 'participating', 'since', 'before', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listRepoNotificationsForAuthenticatedUser($params['owner'], $params['repo'], $params['all'], $params['participating'], $params['since'], $params['before'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkRepoNotificationsAsRead::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->markRepoNotificationsAsRead($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Activity\Response\Application\Json\H202|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListStargazersForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listStargazersForRepo($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Activity\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListWatchersForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listWatchersForRepo($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetRepoSubscription::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->getRepoSubscription($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositorySubscription|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\SetRepoSubscription::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->setRepoSubscription($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositorySubscription {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\DeleteRepoSubscription::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->deleteRepoSubscription($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReposStarredByAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('sort', 'direction', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listReposStarredByAuthenticatedUser($params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\CheckRepoIsStarredByAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->checkRepoIsStarredByAuthenticatedUser($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\StarRepoForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->starRepoForAuthenticatedUser($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\UnstarRepoForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->unstarRepoForAuthenticatedUser($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListWatchedReposForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listWatchedReposForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListEventsForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listEventsForAuthenticatedUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListOrgEventsForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listOrgEventsForAuthenticatedUser($params['username'], $params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEventsForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listPublicEventsForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReceivedEventsForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listReceivedEventsForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReceivedPublicEventsForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listReceivedPublicEventsForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReposStarredByUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'sort', 'direction', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listReposStarredByUser($params['username'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Activity\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReposWatchedByUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->activity()->listReposWatchedByUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\List_::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('since', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->list_($params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Create::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->create();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListPublic::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('since', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->listPublic($params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListStarred::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('since', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->listStarred($params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Get::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gist_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->get($params['gist_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Gists\Response\Application\Json\H403|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Delete::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gist_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->delete($params['gist_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Update::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gist_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->update($params['gist_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListComments::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gist_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->listComments($params['gist_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\CreateComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gist_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->createComment($params['gist_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistComment|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gist_id', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->getComment($params['gist_id'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistComment|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Gists\Response\Application\Json\H403 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\DeleteComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gist_id', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->deleteComment($params['gist_id'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\UpdateComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gist_id', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->updateComment($params['gist_id'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListCommits::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gist_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->listCommits($params['gist_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListForks::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gist_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->listForks($params['gist_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Fork::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gist_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->fork($params['gist_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\CheckIsStarred::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gist_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->checkIsStarred($params['gist_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Gists\Response\Application\Json\H404|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Star::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gist_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->star($params['gist_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Unstar::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gist_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->unstar($params['gist_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetRevision::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gist_id', 'sha')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->getRevision($params['gist_id'], $params['sha']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'since', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gists()->listForUser($params['username'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetAllTemplates::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gitignore()->getAllTemplates();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetTemplate::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->gitignore()->getTemplate($params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitignoreTemplate|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\List_::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('filter', 'state', 'labels', 'sort', 'direction', 'since', 'collab', 'orgs', 'owned', 'pulls', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->list_($params['filter'], $params['state'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['collab'], $params['orgs'], $params['owned'], $params['pulls'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'filter', 'state', 'labels', 'sort', 'direction', 'since', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->listForOrg($params['org'], $params['filter'], $params['state'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListAssignees::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->listAssignees($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CheckUserCanBeAssigned::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'assignee')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->checkUserCanBeAssigned($params['owner'], $params['repo'], $params['assignee']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'milestone', 'state', 'assignee', 'creator', 'mentioned', 'labels', 'sort', 'direction', 'since', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->listForRepo($params['owner'], $params['repo'], $params['milestone'], $params['state'], $params['assignee'], $params['creator'], $params['mentioned'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Create::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->create($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Issues\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListCommentsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'sort', 'direction', 'since', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->listCommentsForRepo($params['owner'], $params['repo'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->getComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->deleteComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->updateComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEventsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->listEventsForRepo($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetEvent::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'event_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->getEvent($params['owner'], $params['repo'], $params['event_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueEvent|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Get::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->get($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Update::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->update($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Issues\Response\Application\Json\H503|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\AddAssignees::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->addAssignees($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveAssignees::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->removeAssignees($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CheckUserCanBeAssignedToIssue::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number', 'assignee')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->checkUserCanBeAssignedToIssue($params['owner'], $params['repo'], $params['issue_number'], $params['assignee']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListComments::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number', 'since', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->listComments($params['owner'], $params['repo'], $params['issue_number'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->createComment($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEvents::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->listEvents($params['owner'], $params['repo'], $params['issue_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsOnIssue::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->listLabelsOnIssue($params['owner'], $params['repo'], $params['issue_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\SetLabels::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->setLabels($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\AddLabels::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->addLabels($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveAllLabels::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->removeAllLabels($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveLabel::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->removeLabel($params['owner'], $params['repo'], $params['issue_number'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Lock::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->lock($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Unlock::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->unlock($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEventsForTimeline::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->listEventsForTimeline($params['owner'], $params['repo'], $params['issue_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->listLabelsForRepo($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateLabel::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->createLabel($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Label|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetLabel::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->getLabel($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Label|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteLabel::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->deleteLabel($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateLabel::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->updateLabel($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Label {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListMilestones::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'state', 'sort', 'direction', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->listMilestones($params['owner'], $params['repo'], $params['state'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateMilestone::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->createMilestone($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Milestone|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetMilestone::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'milestone_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->getMilestone($params['owner'], $params['repo'], $params['milestone_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Milestone|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteMilestone::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'milestone_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->deleteMilestone($params['owner'], $params['repo'], $params['milestone_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateMilestone::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'milestone_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->updateMilestone($params['owner'], $params['repo'], $params['milestone_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Milestone {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsForMilestone::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'milestone_number', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->listLabelsForMilestone($params['owner'], $params['repo'], $params['milestone_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('filter', 'state', 'labels', 'sort', 'direction', 'since', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->issues()->listForAuthenticatedUser($params['filter'], $params['state'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses\GetAllCommonlyUsed::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('featured', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->licenses()->getAllCommonlyUsed($params['featured'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses\Get::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('license')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->licenses()->get($params['license']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses\GetForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->licenses()->getForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseContent {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\Render::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->markdown()->render();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Markdown\Response\Text\Html\H200|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\RenderRaw::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->markdown()->renderRaw();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Markdown\Response\Text\Html\H200|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\List_::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('since', 'per_page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->list_($params['since'], $params['per_page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Get::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->get($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Update::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->update($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Orgs\Response\Application\Json\H422|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListBlockedUsers::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->listBlockedUsers($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckBlockedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->checkBlockedUser($params['org'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\BlockUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->blockUser($params['org'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UnblockUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->unblockUser($params['org'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListFailedInvitations::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->listFailedInvitations($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhooks::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->listWebhooks($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateWebhook::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->createWebhook($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhook::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'hook_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->getWebhook($params['org'], $params['hook_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\DeleteWebhook::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'hook_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->deleteWebhook($params['org'], $params['hook_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhook::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'hook_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->updateWebhook($params['org'], $params['hook_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookConfigForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'hook_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->getWebhookConfigForOrg($params['org'], $params['hook_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhookConfigForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'hook_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->updateWebhookConfigForOrg($params['org'], $params['hook_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhookDeliveries::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'hook_id', 'per_page', 'cursor', 'redelivery')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->listWebhookDeliveries($params['org'], $params['hook_id'], $params['per_page'], $params['cursor'], $params['redelivery']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookDelivery::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'hook_id', 'delivery_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->getWebhookDelivery($params['org'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RedeliverWebhookDelivery::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'hook_id', 'delivery_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->redeliverWebhookDelivery($params['org'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Orgs\Response\Application\Json\H202|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\PingWebhook::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'hook_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->pingWebhook($params['org'], $params['hook_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListAppInstallations::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->listAppInstallations($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Orgs\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPendingInvitations::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->listPendingInvitations($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateInvitation::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->createInvitation($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationInvitation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CancelInvitation::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'invitation_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->cancelInvitation($params['org'], $params['invitation_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListInvitationTeams::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'invitation_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->listInvitationTeams($params['org'], $params['invitation_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembers::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'filter', 'role', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->listMembers($params['org'], $params['filter'], $params['role'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckMembershipForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->checkMembershipForUser($params['org'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMember::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->removeMember($params['org'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->getMembershipForUser($params['org'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetMembershipForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->setMembershipForUser($params['org'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMembershipForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->removeMembershipForUser($params['org'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListOutsideCollaborators::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'filter', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->listOutsideCollaborators($params['org'], $params['filter'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ConvertMemberToOutsideCollaborator::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->convertMemberToOutsideCollaborator($params['org'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Orgs\Response\Application\Json\H202|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveOutsideCollaborator::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->removeOutsideCollaborator($params['org'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Orgs\Response\Application\Json\H422 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPublicMembers::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->listPublicMembers($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckPublicMembershipForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->checkPublicMembershipForUser($params['org'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetPublicMembershipForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->setPublicMembershipForAuthenticatedUser($params['org'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->removePublicMembershipForAuthenticatedUser($params['org'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListSecurityManagerTeams::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->listSecurityManagerTeams($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\AddSecurityManagerTeam::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->addSecurityManagerTeam($params['org'], $params['team_slug']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveSecurityManagerTeam::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->removeSecurityManagerTeam($params['org'], $params['team_slug']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'security_product', 'enablement')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->enableOrDisableSecurityProductOnAllOrgRepos($params['org'], $params['security_product'], $params['enablement']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembershipsForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('state', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->listMembershipsForAuthenticatedUser($params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->getMembershipForAuthenticatedUser($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateMembershipForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->updateMembershipForAuthenticatedUser($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->listForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->orgs()->listForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getActionsCacheUsageForOrg($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageOrgEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageByRepoForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getActionsCacheUsageByRepoForOrg($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getGithubActionsPermissionsOrganization($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsOrganizationPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->setGithubActionsPermissionsOrganization($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listSelectedRepositoriesEnabledGithubActionsOrganization($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->setSelectedRepositoriesEnabledGithubActionsOrganization($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->enableSelectedRepositoryGithubActionsOrganization($params['org'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->disableSelectedRepositoryGithubActionsOrganization($params['org'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getAllowedActionsOrganization($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SelectedActions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->setAllowedActionsOrganization($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getGithubActionsDefaultWorkflowPermissionsOrganization($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsGetDefaultWorkflowPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->setGithubActionsDefaultWorkflowPermissionsOrganization($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRequiredWorkflows::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listRequiredWorkflows($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRequiredWorkflow::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->createRequiredWorkflow($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredWorkflow|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRequiredWorkflow::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'required_workflow_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getRequiredWorkflow($params['org'], $params['required_workflow_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredWorkflow {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteRequiredWorkflow::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'required_workflow_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->deleteRequiredWorkflow($params['org'], $params['required_workflow_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateRequiredWorkflow::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'required_workflow_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->updateRequiredWorkflow($params['org'], $params['required_workflow_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredWorkflow|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedRepositoriesRequiredWorkflow::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'required_workflow_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listSelectedRepositoriesRequiredWorkflow($params['org'], $params['required_workflow_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedReposToRequiredWorkflow::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'required_workflow_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->setSelectedReposToRequiredWorkflow($params['org'], $params['required_workflow_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelectedRepoToRequiredWorkflow::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'required_workflow_id', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->addSelectedRepoToRequiredWorkflow($params['org'], $params['required_workflow_id'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelectedRepoFromRequiredWorkflow::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'required_workflow_id', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->removeSelectedRepoFromRequiredWorkflow($params['org'], $params['required_workflow_id'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listSelfHostedRunnersForOrg($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listRunnerApplicationsForOrg($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->createRegistrationTokenForOrg($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->createRemoveTokenForOrg($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'runner_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getSelfHostedRunnerForOrg($params['org'], $params['runner_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'runner_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->deleteSelfHostedRunnerFromOrg($params['org'], $params['runner_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'runner_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listLabelsForSelfHostedRunnerForOrg($params['org'], $params['runner_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'runner_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->setCustomLabelsForSelfHostedRunnerForOrg($params['org'], $params['runner_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'runner_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->addCustomLabelsToSelfHostedRunnerForOrg($params['org'], $params['runner_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'runner_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->removeAllCustomLabelsFromSelfHostedRunnerForOrg($params['org'], $params['runner_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'runner_id', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->removeCustomLabelFromSelfHostedRunnerForOrg($params['org'], $params['runner_id'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListOrgSecrets::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listOrgSecrets($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgPublicKey::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getOrgPublicKey($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationActionsSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->createOrUpdateOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->deleteOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedReposForOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name', 'page', 'per_page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listSelectedReposForOrgSecret($params['org'], $params['secret_name'], $params['page'], $params['per_page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedReposForOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->setSelectedReposForOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelectedRepoToOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->addSelectedRepoToOrgSecret($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelectedRepoFromOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->removeSelectedRepoFromOrgSecret($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListOrgVariables::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listOrgVariables($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrgVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->createOrgVariable($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getOrgVariable($params['org'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationActionsVariable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteOrgVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->deleteOrgVariable($params['org'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateOrgVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->updateOrgVariable($params['org'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedReposForOrgVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'name', 'page', 'per_page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listSelectedReposForOrgVariable($params['org'], $params['name'], $params['page'], $params['per_page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedReposForOrgVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->setSelectedReposForOrgVariable($params['org'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelectedRepoToOrgVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'name', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->addSelectedRepoToOrgVariable($params['org'], $params['name'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelectedRepoFromOrgVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'name', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->removeSelectedRepoFromOrgVariable($params['org'], $params['name'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoRequiredWorkflows::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listRepoRequiredWorkflows($params['org'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoRequiredWorkflow::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'repo', 'required_workflow_id_for_repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getRepoRequiredWorkflow($params['org'], $params['repo'], $params['required_workflow_id_for_repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepoRequiredWorkflow|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoRequiredWorkflowUsage::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'repo', 'required_workflow_id_for_repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getRepoRequiredWorkflowUsage($params['org'], $params['repo'], $params['required_workflow_id_for_repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListArtifactsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listArtifactsForRepo($params['owner'], $params['repo'], $params['per_page'], $params['page'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetArtifact::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'artifact_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getArtifact($params['owner'], $params['repo'], $params['artifact_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Artifact {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteArtifact::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'artifact_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->deleteArtifact($params['owner'], $params['repo'], $params['artifact_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadArtifact::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'artifact_id', 'archive_format')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->downloadArtifact($params['owner'], $params['repo'], $params['artifact_id'], $params['archive_format']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsage::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getActionsCacheUsage($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageByRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheList::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page', 'ref', 'key', 'sort', 'direction')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getActionsCacheList($params['owner'], $params['repo'], $params['per_page'], $params['page'], $params['ref'], $params['key'], $params['sort'], $params['direction']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheList {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheByKey::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'key', 'ref')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->deleteActionsCacheByKey($params['owner'], $params['repo'], $params['key'], $params['ref']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheList {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheById::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'cache_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->deleteActionsCacheById($params['owner'], $params['repo'], $params['cache_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetJobForWorkflowRun::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'job_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getJobForWorkflowRun($params['owner'], $params['repo'], $params['job_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Job {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadJobLogsForWorkflowRun::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'job_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->downloadJobLogsForWorkflowRun($params['owner'], $params['repo'], $params['job_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunJobForWorkflowRun::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'job_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->reRunJobForWorkflowRun($params['owner'], $params['repo'], $params['job_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetCustomOidcSubClaimForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getCustomOidcSubClaimForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OidcCustomSubRepo|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomOidcSubClaimForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->setCustomOidcSubClaimForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsRepository::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getGithubActionsPermissionsRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsRepositoryPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsRepository::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->setGithubActionsPermissionsRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowAccessToRepository::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getWorkflowAccessToRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsWorkflowAccessToRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetWorkflowAccessToRepository::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->setWorkflowAccessToRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsRepository::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getAllowedActionsRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SelectedActions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsRepository::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->setAllowedActionsRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getGithubActionsDefaultWorkflowPermissionsRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsGetDefaultWorkflowPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->setGithubActionsDefaultWorkflowPermissionsRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRequiredWorkflowRuns::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'required_workflow_id_for_repo', 'actor', 'branch', 'event', 'status', 'per_page', 'page', 'created', 'exclude_pull_requests', 'check_suite_id', 'head_sha')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listRequiredWorkflowRuns($params['owner'], $params['repo'], $params['required_workflow_id_for_repo'], $params['actor'], $params['branch'], $params['event'], $params['status'], $params['per_page'], $params['page'], $params['created'], $params['exclude_pull_requests'], $params['check_suite_id'], $params['head_sha']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listSelfHostedRunnersForRepo($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listRunnerApplicationsForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->createRegistrationTokenForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->createRemoveTokenForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'runner_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getSelfHostedRunnerForRepo($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'runner_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->deleteSelfHostedRunnerFromRepo($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'runner_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listLabelsForSelfHostedRunnerForRepo($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'runner_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->setCustomLabelsForSelfHostedRunnerForRepo($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'runner_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->addCustomLabelsToSelfHostedRunnerForRepo($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'runner_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->removeAllCustomLabelsFromSelfHostedRunnerForRepo($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'runner_id', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->removeCustomLabelFromSelfHostedRunnerForRepo($params['owner'], $params['repo'], $params['runner_id'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRunsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'actor', 'branch', 'event', 'status', 'per_page', 'page', 'created', 'exclude_pull_requests', 'check_suite_id', 'head_sha')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listWorkflowRunsForRepo($params['owner'], $params['repo'], $params['actor'], $params['branch'], $params['event'], $params['status'], $params['per_page'], $params['page'], $params['created'], $params['exclude_pull_requests'], $params['check_suite_id'], $params['head_sha']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRun::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id', 'exclude_pull_requests')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getWorkflowRun($params['owner'], $params['repo'], $params['run_id'], $params['exclude_pull_requests']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRun::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->deleteWorkflowRun($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetReviewsForRun::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getReviewsForRun($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ApproveWorkflowRun::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->approveWorkflowRun($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRunArtifacts::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listWorkflowRunArtifacts($params['owner'], $params['repo'], $params['run_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunAttempt::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id', 'attempt_number', 'exclude_pull_requests')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getWorkflowRunAttempt($params['owner'], $params['repo'], $params['run_id'], $params['attempt_number'], $params['exclude_pull_requests']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListJobsForWorkflowRunAttempt::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id', 'attempt_number', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listJobsForWorkflowRunAttempt($params['owner'], $params['repo'], $params['run_id'], $params['attempt_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadWorkflowRunAttemptLogs::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id', 'attempt_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->downloadWorkflowRunAttemptLogs($params['owner'], $params['repo'], $params['run_id'], $params['attempt_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CancelWorkflowRun::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->cancelWorkflowRun($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListJobsForWorkflowRun::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id', 'filter', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listJobsForWorkflowRun($params['owner'], $params['repo'], $params['run_id'], $params['filter'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadWorkflowRunLogs::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->downloadWorkflowRunLogs($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRunLogs::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->deleteWorkflowRunLogs($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetPendingDeploymentsForRun::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getPendingDeploymentsForRun($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReviewPendingDeploymentsForRun::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->reviewPendingDeploymentsForRun($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunWorkflow::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->reRunWorkflow($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunWorkflowFailedJobs::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->reRunWorkflowFailedJobs($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunUsage::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'run_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getWorkflowRunUsage($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRunUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoSecrets::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listRepoSecrets($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoPublicKey::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getRepoPublicKey($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateRepoSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->createOrUpdateRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteRepoSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->deleteRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoVariables::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listRepoVariables($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRepoVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->createRepoVariable($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getRepoVariable($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsVariable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteRepoVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->deleteRepoVariable($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateRepoVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->updateRepoVariable($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoWorkflows::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listRepoWorkflows($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflow::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'workflow_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getWorkflow($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Workflow {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DisableWorkflow::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'workflow_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->disableWorkflow($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateWorkflowDispatch::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'workflow_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->createWorkflowDispatch($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableWorkflow::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'workflow_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->enableWorkflow($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRuns::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'workflow_id', 'actor', 'branch', 'event', 'status', 'per_page', 'page', 'created', 'exclude_pull_requests', 'check_suite_id', 'head_sha')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listWorkflowRuns($params['owner'], $params['repo'], $params['workflow_id'], $params['actor'], $params['branch'], $params['event'], $params['status'], $params['per_page'], $params['page'], $params['created'], $params['exclude_pull_requests'], $params['check_suite_id'], $params['head_sha']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowUsage::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'workflow_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getWorkflowUsage($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListEnvironmentSecrets::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('repository_id', 'environment_name', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listEnvironmentSecrets($params['repository_id'], $params['environment_name'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentPublicKey::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('repository_id', 'environment_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getEnvironmentPublicKey($params['repository_id'], $params['environment_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('repository_id', 'environment_name', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getEnvironmentSecret($params['repository_id'], $params['environment_name'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateEnvironmentSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('repository_id', 'environment_name', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->createOrUpdateEnvironmentSecret($params['repository_id'], $params['environment_name'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('repository_id', 'environment_name', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->deleteEnvironmentSecret($params['repository_id'], $params['environment_name'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListEnvironmentVariables::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('repository_id', 'environment_name', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->listEnvironmentVariables($params['repository_id'], $params['environment_name'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateEnvironmentVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('repository_id', 'environment_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->createEnvironmentVariable($params['repository_id'], $params['environment_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('repository_id', 'environment_name', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->getEnvironmentVariable($params['repository_id'], $params['environment_name'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsVariable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('repository_id', 'name', 'environment_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->deleteEnvironmentVariable($params['repository_id'], $params['name'], $params['environment_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateEnvironmentVariable::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('repository_id', 'name', 'environment_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->actions()->updateEnvironmentVariable($params['repository_id'], $params['name'], $params['environment_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\GetOidcCustomSubTemplateForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->oidc()->getOidcCustomSubTemplateForOrg($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OidcCustomSub {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\UpdateOidcCustomSubTemplateForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->oidc()->updateOidcCustomSubTemplateForOrg($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'tool_name', 'tool_guid', 'before', 'after', 'page', 'per_page', 'direction', 'state', 'sort', 'severity')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codeScanning()->listAlertsForOrg($params['org'], $params['tool_name'], $params['tool_guid'], $params['before'], $params['after'], $params['page'], $params['per_page'], $params['direction'], $params['state'], $params['sort'], $params['severity']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CodeScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'tool_name', 'tool_guid', 'page', 'per_page', 'ref', 'direction', 'sort', 'state', 'severity')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codeScanning()->listAlertsForRepo($params['owner'], $params['repo'], $params['tool_name'], $params['tool_guid'], $params['page'], $params['per_page'], $params['ref'], $params['direction'], $params['sort'], $params['state'], $params['severity']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CodeScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetAlert::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'alert_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codeScanning()->getAlert($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlert|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CodeScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UpdateAlert::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'alert_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codeScanning()->updateAlert($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CodeScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertInstances::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'alert_number', 'page', 'per_page', 'ref')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codeScanning()->listAlertInstances($params['owner'], $params['repo'], $params['alert_number'], $params['page'], $params['per_page'], $params['ref']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CodeScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListRecentAnalyses::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'tool_name', 'tool_guid', 'page', 'per_page', 'ref', 'sarif_id', 'direction', 'sort')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codeScanning()->listRecentAnalyses($params['owner'], $params['repo'], $params['tool_name'], $params['tool_guid'], $params['page'], $params['per_page'], $params['ref'], $params['sarif_id'], $params['direction'], $params['sort']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CodeScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetAnalysis::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'analysis_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codeScanning()->getAnalysis($params['owner'], $params['repo'], $params['analysis_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAnalysis|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CodeScanning\Response\Application\JsonPlusSarif\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CodeScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\DeleteAnalysis::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'analysis_id', 'confirm_delete')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codeScanning()->deleteAnalysis($params['owner'], $params['repo'], $params['analysis_id'], $params['confirm_delete']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAnalysisDeletion|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CodeScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListCodeqlDatabases::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codeScanning()->listCodeqlDatabases($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CodeScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetCodeqlDatabase::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'language')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codeScanning()->getCodeqlDatabase($params['owner'], $params['repo'], $params['language']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningCodeqlDatabase|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CodeScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UploadSarif::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codeScanning()->uploadSarif($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningSarifsReceipt|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CodeScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetSarif::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'sarif_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codeScanning()->getSarif($params['owner'], $params['repo'], $params['sarif_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningSarifsStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CodeScanning\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page', 'org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->listInOrganization($params['per_page'], $params['page'], $params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H200|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetCodespacesBilling::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->setCodespacesBilling($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetCodespacesBillingUsers::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->setCodespacesBillingUsers($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteCodespacesBillingUsers::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->deleteCodespacesBillingUsers($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListOrgSecrets::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->listOrgSecrets($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetOrgPublicKey::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->getOrgPublicKey($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->getOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesOrgSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->createOrUpdateOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->deleteOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSelectedReposForOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name', 'page', 'per_page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->listSelectedReposForOrgSecret($params['org'], $params['secret_name'], $params['page'], $params['per_page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetSelectedReposForOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->setSelectedReposForOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddSelectedRepoToOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->addSelectedRepoToOrgSecret($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveSelectedRepoFromOrgSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'secret_name', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->removeSelectedRepoFromOrgSecret($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetCodespacesForUserInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page', 'org', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->getCodespacesForUserInOrg($params['per_page'], $params['page'], $params['org'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H200|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteFromOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'username', 'codespace_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->deleteFromOrganization($params['org'], $params['username'], $params['codespace_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H202|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopInOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'username', 'codespace_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->stopInOrganization($params['org'], $params['username'], $params['codespace_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInRepositoryForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page', 'owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->listInRepositoryForAuthenticatedUser($params['per_page'], $params['page'], $params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithRepoForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->createWithRepoForAuthenticatedUser($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page', 'owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->listDevcontainersInRepositoryForAuthenticatedUser($params['per_page'], $params['page'], $params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RepoMachinesForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'location', 'client_ip')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->repoMachinesForAuthenticatedUser($params['owner'], $params['repo'], $params['location'], $params['client_ip']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H200|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\PreFlightWithRepoForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'ref', 'client_ip')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->preFlightWithRepoForAuthenticatedUser($params['owner'], $params['repo'], $params['ref'], $params['client_ip']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepoSecrets::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->listRepoSecrets($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoPublicKey::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->getRepoPublicKey($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->getRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepoCodespacesSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateRepoSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->createOrUpdateRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteRepoSecret::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->deleteRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithPrForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->createWithPrForAuthenticatedUser($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->listForAuthenticatedUser($params['per_page'], $params['page'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H200|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->createForAuthenticatedUser();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSecretsForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->listSecretsForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetPublicKeyForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->getPublicKeyForAuthenticatedUser();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesUserPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetSecretForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->getSecretForAuthenticatedUser($params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateSecretForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->createOrUpdateSecretForAuthenticatedUser($params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteSecretForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->deleteSecretForAuthenticatedUser($params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepositoriesForSecretForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->listRepositoriesForSecretForAuthenticatedUser($params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetRepositoriesForSecretForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('secret_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->setRepositoriesForSecretForAuthenticatedUser($params['secret_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddRepositoryForSecretForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('secret_name', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->addRepositoryForSecretForAuthenticatedUser($params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('secret_name', 'repository_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->removeRepositoryForSecretForAuthenticatedUser($params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('codespace_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->getForAuthenticatedUser($params['codespace_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('codespace_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->deleteForAuthenticatedUser($params['codespace_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H202|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\UpdateForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('codespace_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->updateForAuthenticatedUser($params['codespace_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ExportForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('codespace_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->exportForAuthenticatedUser($params['codespace_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespaceExportDetails|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetExportDetailsForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('codespace_name', 'export_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->getExportDetailsForAuthenticatedUser($params['codespace_name'], $params['export_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespaceExportDetails|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CodespaceMachinesForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('codespace_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->codespaceMachinesForAuthenticatedUser($params['codespace_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\Response\Application\Json\H200|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\PublishForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('codespace_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->publishForAuthenticatedUser($params['codespace_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespaceWithFullRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StartForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('codespace_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->startForAuthenticatedUser($params['codespace_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('codespace_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->codespaces()->stopForAuthenticatedUser($params['codespace_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->interactions()->getRestrictionsForOrg($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Interactions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->interactions()->setRestrictionsForOrg($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InteractionLimitResponse|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->interactions()->removeRestrictionsForOrg($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->interactions()->getRestrictionsForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Interactions\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->interactions()->setRestrictionsForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InteractionLimitResponse|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->interactions()->removeRestrictionsForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->interactions()->getRestrictionsForAuthenticatedUser();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Interactions\Response\Application\Json\H200|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->interactions()->setRestrictionsForAuthenticatedUser();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InteractionLimitResponse|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->interactions()->removeRestrictionsForAuthenticatedUser();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page', 'exclude')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->listForOrg($params['org'], $params['per_page'], $params['page'], $params['exclude']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->startForOrg($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'migration_id', 'exclude')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->getStatusForOrg($params['org'], $params['migration_id'], $params['exclude']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DownloadArchiveForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'migration_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->downloadArchiveForOrg($params['org'], $params['migration_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'migration_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->deleteArchiveForOrg($params['org'], $params['migration_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'migration_id', 'repo_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->unlockRepoForOrg($params['org'], $params['migration_id'], $params['repo_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'migration_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->listReposForOrg($params['org'], $params['migration_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetImportStatus::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->getImportStatus($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartImport::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->startImport($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\CancelImport::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->cancelImport($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UpdateImport::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->updateImport($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetCommitAuthors::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'since')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->getCommitAuthors($params['owner'], $params['repo'], $params['since']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\MapCommitAuthor::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'author_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->mapCommitAuthor($params['owner'], $params['repo'], $params['author_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PorterAuthor|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetLargeFiles::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->getLargeFiles($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\SetLfsPreference::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->setLfsPreference($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->listForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->startForAuthenticatedUser();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('migration_id', 'exclude')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->getStatusForAuthenticatedUser($params['migration_id'], $params['exclude']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetArchiveForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('migration_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->getArchiveForAuthenticatedUser($params['migration_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('migration_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->deleteArchiveForAuthenticatedUser($params['migration_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('migration_id', 'repo_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->unlockRepoForAuthenticatedUser($params['migration_id'], $params['repo_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('migration_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->migrations()->listReposForAuthenticatedUser($params['migration_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'org', 'visibility')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->listPackagesForOrganization($params['package_type'], $params['org'], $params['visibility']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->getPackageForOrganization($params['package_type'], $params['package_name'], $params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Package {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->deletePackageForOrg($params['package_type'], $params['package_name'], $params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'org', 'token')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->restorePackageForOrg($params['package_type'], $params['package_name'], $params['org'], $params['token']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'org', 'page', 'per_page', 'state')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->getAllPackageVersionsForPackageOwnedByOrg($params['package_type'], $params['package_name'], $params['org'], $params['page'], $params['per_page'], $params['state']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForOrganization::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'org', 'package_version_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->getPackageVersionForOrganization($params['package_type'], $params['package_name'], $params['org'], $params['package_version_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'org', 'package_version_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->deletePackageVersionForOrg($params['package_type'], $params['package_name'], $params['org'], $params['package_version_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'org', 'package_version_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->restorePackageVersionForOrg($params['package_type'], $params['package_name'], $params['org'], $params['package_version_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'visibility')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->listPackagesForAuthenticatedUser($params['package_type'], $params['visibility']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->getPackageForAuthenticatedUser($params['package_type'], $params['package_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Package {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->deletePackageForAuthenticatedUser($params['package_type'], $params['package_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'token')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->restorePackageForAuthenticatedUser($params['package_type'], $params['package_name'], $params['token']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'page', 'per_page', 'state')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->getAllPackageVersionsForPackageOwnedByAuthenticatedUser($params['package_type'], $params['package_name'], $params['page'], $params['per_page'], $params['state']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'package_version_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->getPackageVersionForAuthenticatedUser($params['package_type'], $params['package_name'], $params['package_version_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'package_version_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->deletePackageVersionForAuthenticatedUser($params['package_type'], $params['package_name'], $params['package_version_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'package_version_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->restorePackageVersionForAuthenticatedUser($params['package_type'], $params['package_name'], $params['package_version_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'visibility', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->listPackagesForUser($params['package_type'], $params['visibility'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->getPackageForUser($params['package_type'], $params['package_name'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Package {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->deletePackageForUser($params['package_type'], $params['package_name'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'username', 'token')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->restorePackageForUser($params['package_type'], $params['package_name'], $params['username'], $params['token']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->getAllPackageVersionsForPackageOwnedByUser($params['package_type'], $params['package_name'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'package_version_id', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->getPackageVersionForUser($params['package_type'], $params['package_name'], $params['package_version_id'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'username', 'package_version_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->deletePackageVersionForUser($params['package_type'], $params['package_name'], $params['username'], $params['package_version_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('package_type', 'package_name', 'username', 'package_version_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->packages()->restorePackageVersionForUser($params['package_type'], $params['package_name'], $params['username'], $params['package_version_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'state', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->listForOrg($params['org'], $params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->createForOrg($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetCard::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('card_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->getCard($params['card_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCard|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteCard::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('card_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->deleteCard($params['card_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Projects\Response\Application\Json\H403|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateCard::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('card_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->updateCard($params['card_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCard|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveCard::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('card_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->moveCard($params['card_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Projects\Response\Application\Json\H201|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Projects\Response\Application\Json\H403|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Projects\Response\Application\Json\H503|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetColumn::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('column_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->getColumn($params['column_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectColumn|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteColumn::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('column_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->deleteColumn($params['column_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateColumn::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('column_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->updateColumn($params['column_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectColumn|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListCards::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('column_id', 'archived_state', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->listCards($params['column_id'], $params['archived_state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateCard::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('column_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->createCard($params['column_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCard|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Projects\Response\Application\Json\H422|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Projects\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveColumn::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('column_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->moveColumn($params['column_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Projects\Response\Application\Json\H201|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Get::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('project_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->get($params['project_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Delete::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('project_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->delete($params['project_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Projects\Response\Application\Json\H403|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Update::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('project_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->update($params['project_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Projects\Response\Application\Json\H403|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListCollaborators::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('project_id', 'affiliation', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->listCollaborators($params['project_id'], $params['affiliation'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\AddCollaborator::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('project_id', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->addCollaborator($params['project_id'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\RemoveCollaborator::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('project_id', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->removeCollaborator($params['project_id'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetPermissionForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('project_id', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->getPermissionForUser($params['project_id'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListColumns::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('project_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->listColumns($params['project_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateColumn::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('project_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->createColumn($params['project_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectColumn|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'state', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->listForRepo($params['owner'], $params['repo'], $params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->createForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->createForAuthenticatedUser();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'state', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->projects()->listForUser($params['username'], $params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'type', 'sort', 'direction', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listForOrg($params['org'], $params['type'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createInOrg($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Get::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->get($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Delete::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->delete($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H403|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Update::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->update($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListAutolinks::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listAutolinks($params['owner'], $params['repo'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateAutolink::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createAutolink($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Autolink|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAutolink::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'autolink_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getAutolink($params['owner'], $params['repo'], $params['autolink_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Autolink|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAutolink::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'autolink_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteAutolink($params['owner'], $params['repo'], $params['autolink_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableAutomatedSecurityFixes::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->enableAutomatedSecurityFixes($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableAutomatedSecurityFixes::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->disableAutomatedSecurityFixes($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListBranches::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'protected', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listBranches($params['owner'], $params['repo'], $params['protected'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetBranch::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getBranch($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchWithProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetBranchProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getBranchProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateBranchProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->updateBranchProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranch|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteBranchProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteBranchProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAdminBranchProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getAdminBranchProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchAdminEnforced {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetAdminBranchProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->setAdminBranchProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchAdminEnforced {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAdminBranchProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteAdminBranchProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPullRequestReviewProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getPullRequestReviewProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchPullRequestReview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeletePullRequestReviewProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deletePullRequestReviewProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdatePullRequestReviewProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->updatePullRequestReviewProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchPullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitSignatureProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getCommitSignatureProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitSignatureProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createCommitSignatureProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteCommitSignatureProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteCommitSignatureProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetStatusChecksProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getStatusChecksProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveStatusCheckProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->removeStatusCheckProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateStatusCheckProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->updateStatusCheckProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllStatusCheckContexts::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getAllStatusCheckContexts($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetStatusCheckContexts::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->setStatusCheckContexts($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddStatusCheckContexts::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->addStatusCheckContexts($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveStatusCheckContexts::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->removeStatusCheckContexts($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAccessRestrictions::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAccessRestrictions::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAppsWithAccessToProtectedBranch::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getAppsWithAccessToProtectedBranch($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetAppAccessRestrictions::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->setAppAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddAppAccessRestrictions::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->addAppAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveAppAccessRestrictions::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->removeAppAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTeamsWithAccessToProtectedBranch::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getTeamsWithAccessToProtectedBranch($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetTeamAccessRestrictions::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->setTeamAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddTeamAccessRestrictions::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->addTeamAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveTeamAccessRestrictions::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->removeTeamAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetUsersWithAccessToProtectedBranch::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getUsersWithAccessToProtectedBranch($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetUserAccessRestrictions::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->setUserAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddUserAccessRestrictions::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->addUserAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveUserAccessRestrictions::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->removeUserAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RenameBranch::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'branch')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->renameBranch($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchWithProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CodeownersErrors::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'ref')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->codeownersErrors($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeownersErrors|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCollaborators::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'affiliation', 'permission', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listCollaborators($params['owner'], $params['repo'], $params['affiliation'], $params['permission'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CheckCollaborator::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->checkCollaborator($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddCollaborator::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->addCollaborator($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositoryInvitation|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveCollaborator::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->removeCollaborator($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCollaboratorPermissionLevel::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getCollaboratorPermissionLevel($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositoryCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommitCommentsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listCommitCommentsForRepo($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getCommitComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteCommitComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteCommitComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateCommitComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->updateCommitComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommits::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'sha', 'path', 'author', 'since', 'until', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listCommits($params['owner'], $params['repo'], $params['sha'], $params['path'], $params['author'], $params['since'], $params['until'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListBranchesForHeadCommit::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'commit_sha')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listBranchesForHeadCommit($params['owner'], $params['repo'], $params['commit_sha']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommentsForCommit::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'commit_sha', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listCommentsForCommit($params['owner'], $params['repo'], $params['commit_sha'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'commit_sha')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createCommitComment($params['owner'], $params['repo'], $params['commit_sha']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPullRequestsAssociatedWithCommit::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'commit_sha', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listPullRequestsAssociatedWithCommit($params['owner'], $params['repo'], $params['commit_sha'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommit::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'page', 'per_page', 'ref')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getCommit($params['owner'], $params['repo'], $params['page'], $params['per_page'], $params['ref']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCombinedStatusForRef::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'ref', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getCombinedStatusForRef($params['owner'], $params['repo'], $params['ref'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CombinedCommitStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommitStatusesForRef::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'ref', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listCommitStatusesForRef($params['owner'], $params['repo'], $params['ref'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommunityProfileMetrics::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getCommunityProfileMetrics($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommunityProfile {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CompareCommits::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'page', 'per_page', 'basehead')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->compareCommits($params['owner'], $params['repo'], $params['page'], $params['per_page'], $params['basehead']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComparison|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetContent::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'path', 'ref')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getContent($params['owner'], $params['repo'], $params['path'], $params['ref']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentTree|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateFileContents::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'path')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createOrUpdateFileContents($params['owner'], $params['repo'], $params['path']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteFile::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'path')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteFile($params['owner'], $params['repo'], $params['path']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListContributors::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'anon', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listContributors($params['owner'], $params['repo'], $params['anon'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeployments::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'sha', 'ref', 'task', 'environment', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listDeployments($params['owner'], $params['repo'], $params['sha'], $params['ref'], $params['task'], $params['environment'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeployment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createDeployment($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Deployment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H202|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeployment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'deployment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getDeployment($params['owner'], $params['repo'], $params['deployment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Deployment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteDeployment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'deployment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteDeployment($params['owner'], $params['repo'], $params['deployment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeploymentStatuses::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'deployment_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listDeploymentStatuses($params['owner'], $params['repo'], $params['deployment_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeploymentStatus::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'deployment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createDeploymentStatus($params['owner'], $params['repo'], $params['deployment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeploymentStatus::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'deployment_id', 'status_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getDeploymentStatus($params['owner'], $params['repo'], $params['deployment_id'], $params['status_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDispatchEvent::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createDispatchEvent($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllEnvironments::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getAllEnvironments($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetEnvironment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'environment_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getEnvironment($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Environment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateEnvironment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'environment_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createOrUpdateEnvironment($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Environment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAnEnvironment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'environment_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteAnEnvironment($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeploymentBranchPolicies::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'environment_name', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listDeploymentBranchPolicies($params['owner'], $params['repo'], $params['environment_name'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeploymentBranchPolicy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'environment_name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createDeploymentBranchPolicy($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeploymentBranchPolicy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'environment_name', 'branch_policy_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getDeploymentBranchPolicy($params['owner'], $params['repo'], $params['environment_name'], $params['branch_policy_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateDeploymentBranchPolicy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'environment_name', 'branch_policy_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->updateDeploymentBranchPolicy($params['owner'], $params['repo'], $params['environment_name'], $params['branch_policy_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteDeploymentBranchPolicy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'environment_name', 'branch_policy_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteDeploymentBranchPolicy($params['owner'], $params['repo'], $params['environment_name'], $params['branch_policy_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForks::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'sort', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listForks($params['owner'], $params['repo'], $params['sort'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateFork::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createFork($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListWebhooks::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listWebhooks($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateWebhook::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createWebhook($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhook::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'hook_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getWebhook($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteWebhook::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'hook_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteWebhook($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateWebhook::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'hook_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->updateWebhook($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhookConfigForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'hook_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getWebhookConfigForRepo($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateWebhookConfigForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'hook_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->updateWebhookConfigForRepo($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListWebhookDeliveries::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'hook_id', 'per_page', 'cursor', 'redelivery')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listWebhookDeliveries($params['owner'], $params['repo'], $params['hook_id'], $params['per_page'], $params['cursor'], $params['redelivery']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhookDelivery::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'hook_id', 'delivery_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getWebhookDelivery($params['owner'], $params['repo'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RedeliverWebhookDelivery::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'hook_id', 'delivery_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->redeliverWebhookDelivery($params['owner'], $params['repo'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H202|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\PingWebhook::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'hook_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->pingWebhook($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\TestPushWebhook::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'hook_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->testPushWebhook($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListInvitations::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listInvitations($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteInvitation::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'invitation_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteInvitation($params['owner'], $params['repo'], $params['invitation_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateInvitation::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'invitation_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->updateInvitation($params['owner'], $params['repo'], $params['invitation_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositoryInvitation {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeployKeys::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listDeployKeys($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeployKey::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createDeployKey($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeployKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeployKey::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'key_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getDeployKey($params['owner'], $params['repo'], $params['key_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeployKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteDeployKey::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'key_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteDeployKey($params['owner'], $params['repo'], $params['key_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListLanguages::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listLanguages($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Language {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableLfsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->enableLfsForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H202|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableLfsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->disableLfsForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\MergeUpstream::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->mergeUpstream($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MergedUpstream|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Merge::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->merge($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPages::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getPages($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Page|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateInformationAboutPagesSite::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->updateInformationAboutPagesSite($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreatePagesSite::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createPagesSite($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Page|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeletePagesSite::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deletePagesSite($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPagesBuilds::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listPagesBuilds($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RequestPagesBuild::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->requestPagesBuild($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuildStatus {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetLatestPagesBuild::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getLatestPagesBuild($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuild {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPagesBuild::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'build_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getPagesBuild($params['owner'], $params['repo'], $params['build_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuild {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreatePagesDeployment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createPagesDeployment($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageDeployment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPagesHealthCheck::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getPagesHealthCheck($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHealthCheck|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReadme::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'ref')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getReadme($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentFile|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReadmeInDirectory::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'dir', 'ref')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getReadmeInDirectory($params['owner'], $params['repo'], $params['dir'], $params['ref']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentFile|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListReleases::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listReleases($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateRelease::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createRelease($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseAsset::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'asset_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getReleaseAsset($params['owner'], $params['repo'], $params['asset_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteReleaseAsset::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'asset_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteReleaseAsset($params['owner'], $params['repo'], $params['asset_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateReleaseAsset::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'asset_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->updateReleaseAsset($params['owner'], $params['repo'], $params['asset_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GenerateReleaseNotes::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->generateReleaseNotes($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseNotesContent|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetLatestRelease::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getLatestRelease($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseByTag::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'tag')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getReleaseByTag($params['owner'], $params['repo'], $params['tag']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetRelease::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'release_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getRelease($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteRelease::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'release_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteRelease($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateRelease::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'release_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->updateRelease($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListReleaseAssets::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'release_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listReleaseAssets($params['owner'], $params['repo'], $params['release_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UploadReleaseAsset::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'release_id', 'name', 'label')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->uploadReleaseAsset($params['owner'], $params['repo'], $params['release_id'], $params['name'], $params['label']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCodeFrequencyStats::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getCodeFrequencyStats($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H202|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitActivityStats::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getCommitActivityStats($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H202|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetContributorsStats::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getContributorsStats($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Repos\Response\Application\Json\H202|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetParticipationStats::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getParticipationStats($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ParticipationStats|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPunchCardStats::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getPunchCardStats($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitStatus::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'sha')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createCommitStatus($params['owner'], $params['repo'], $params['sha']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Status {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListTags::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listTags($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListTagProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listTagProtection($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateTagProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createTagProtection($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TagProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteTagProtection::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'tag_protection_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->deleteTagProtection($params['owner'], $params['repo'], $params['tag_protection_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DownloadTarballArchive::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'ref')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->downloadTarballArchive($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListTeams::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listTeams($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllTopics::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'page', 'per_page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getAllTopics($params['owner'], $params['repo'], $params['page'], $params['per_page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Topic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ReplaceAllTopics::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->replaceAllTopics($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Topic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetClones::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getClones($params['owner'], $params['repo'], $params['per']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CloneTraffic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTopPaths::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getTopPaths($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTopReferrers::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getTopReferrers($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetViews::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'per')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->getViews($params['owner'], $params['repo'], $params['per']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ViewTraffic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Transfer::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->transfer($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CheckVulnerabilityAlerts::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->checkVulnerabilityAlerts($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableVulnerabilityAlerts::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->enableVulnerabilityAlerts($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableVulnerabilityAlerts::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->disableVulnerabilityAlerts($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DownloadZipballArchive::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'ref')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->downloadZipballArchive($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateUsingTemplate::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('template_owner', 'template_repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createUsingTemplate($params['template_owner'], $params['template_repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPublic::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('since')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listPublic($params['since']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('visibility', 'affiliation', 'type', 'sort', 'direction', 'per_page', 'page', 'since', 'before')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listForAuthenticatedUser($params['visibility'], $params['affiliation'], $params['type'], $params['sort'], $params['direction'], $params['per_page'], $params['page'], $params['since'], $params['before']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->createForAuthenticatedUser();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListInvitationsForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listInvitationsForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeclineInvitationForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('invitation_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->declineInvitationForAuthenticatedUser($params['invitation_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AcceptInvitationForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('invitation_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->acceptInvitationForAuthenticatedUser($params['invitation_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'type', 'sort', 'direction', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->repos()->listForUser($params['username'], $params['type'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->billing()->getGithubActionsBillingOrg($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->billing()->getGithubPackagesBillingOrg($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackagesBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->billing()->getSharedStorageBillingOrg($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CombinedBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->billing()->getGithubActionsBillingUser($params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->billing()->getGithubPackagesBillingUser($params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackagesBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->billing()->getSharedStorageBillingUser($params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CombinedBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\List_::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->list_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\Create::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->create($params['org']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetByName::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->getByName($params['org'], $params['team_slug']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->deleteInOrg($params['org'], $params['team_slug']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->updateInOrg($params['org'], $params['team_slug']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionsInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'direction', 'per_page', 'page', 'pinned')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->listDiscussionsInOrg($params['org'], $params['team_slug'], $params['direction'], $params['per_page'], $params['page'], $params['pinned']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->createDiscussionInOrg($params['org'], $params['team_slug']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'discussion_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->getDiscussionInOrg($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'discussion_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->deleteDiscussionInOrg($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'discussion_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->updateDiscussionInOrg($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionCommentsInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'discussion_number', 'direction', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->listDiscussionCommentsInOrg($params['org'], $params['team_slug'], $params['discussion_number'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionCommentInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'discussion_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->createDiscussionCommentInOrg($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionCommentInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'discussion_number', 'comment_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->getDiscussionCommentInOrg($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionCommentInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'discussion_number', 'comment_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->deleteDiscussionCommentInOrg($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionCommentInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'discussion_number', 'comment_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->updateDiscussionCommentInOrg($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListPendingInvitationsInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->listPendingInvitationsInOrg($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListMembersInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'role', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->listMembersInOrg($params['org'], $params['team_slug'], $params['role'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMembershipForUserInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->getMembershipForUserInOrg($params['org'], $params['team_slug'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateMembershipForUserInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->addOrUpdateMembershipForUserInOrg($params['org'], $params['team_slug'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMembershipForUserInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->removeMembershipForUserInOrg($params['org'], $params['team_slug'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListProjectsInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->listProjectsInOrg($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForProjectInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'project_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->checkPermissionsForProjectInOrg($params['org'], $params['team_slug'], $params['project_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateProjectPermissionsInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'project_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->addOrUpdateProjectPermissionsInOrg($params['org'], $params['team_slug'], $params['project_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Teams\Response\Application\Json\H403 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveProjectInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'project_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->removeProjectInOrg($params['org'], $params['team_slug'], $params['project_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListReposInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->listReposInOrg($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForRepoInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->checkPermissionsForRepoInOrg($params['org'], $params['team_slug'], $params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamRepository|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateRepoPermissionsInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->addOrUpdateRepoPermissionsInOrg($params['org'], $params['team_slug'], $params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveRepoInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->removeRepoInOrg($params['org'], $params['team_slug'], $params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListChildInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->listChildInOrg($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->getLegacy($params['team_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->deleteLegacy($params['team_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->updateLegacy($params['team_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionsLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'direction', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->listDiscussionsLegacy($params['team_id'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->createDiscussionLegacy($params['team_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'discussion_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->getDiscussionLegacy($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'discussion_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->deleteDiscussionLegacy($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'discussion_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->updateDiscussionLegacy($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionCommentsLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'discussion_number', 'direction', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->listDiscussionCommentsLegacy($params['team_id'], $params['discussion_number'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionCommentLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'discussion_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->createDiscussionCommentLegacy($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionCommentLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'discussion_number', 'comment_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->getDiscussionCommentLegacy($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionCommentLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'discussion_number', 'comment_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->deleteDiscussionCommentLegacy($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionCommentLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'discussion_number', 'comment_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->updateDiscussionCommentLegacy($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListPendingInvitationsLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->listPendingInvitationsLegacy($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListMembersLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'role', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->listMembersLegacy($params['team_id'], $params['role'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMemberLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->getMemberLegacy($params['team_id'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddMemberLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->addMemberLegacy($params['team_id'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMemberLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->removeMemberLegacy($params['team_id'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMembershipForUserLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->getMembershipForUserLegacy($params['team_id'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateMembershipForUserLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->addOrUpdateMembershipForUserLegacy($params['team_id'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMembershipForUserLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->removeMembershipForUserLegacy($params['team_id'], $params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListProjectsLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->listProjectsLegacy($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForProjectLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'project_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->checkPermissionsForProjectLegacy($params['team_id'], $params['project_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateProjectPermissionsLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'project_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->addOrUpdateProjectPermissionsLegacy($params['team_id'], $params['project_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Teams\Response\Application\Json\H403|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveProjectLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'project_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->removeProjectLegacy($params['team_id'], $params['project_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListReposLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->listReposLegacy($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForRepoLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->checkPermissionsForRepoLegacy($params['team_id'], $params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamRepository|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateRepoPermissionsLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->addOrUpdateRepoPermissionsLegacy($params['team_id'], $params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveRepoLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->removeRepoLegacy($params['team_id'], $params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListChildLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->listChildLegacy($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->teams()->listForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionCommentInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'discussion_number', 'comment_number', 'content', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->listForTeamDiscussionCommentInOrg($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionCommentInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'discussion_number', 'comment_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->createForTeamDiscussionCommentInOrg($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForTeamDiscussionComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'discussion_number', 'comment_number', 'reaction_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->deleteForTeamDiscussionComment($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number'], $params['reaction_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'discussion_number', 'content', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->listForTeamDiscussionInOrg($params['org'], $params['team_slug'], $params['discussion_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionInOrg::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'discussion_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->createForTeamDiscussionInOrg($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForTeamDiscussion::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('org', 'team_slug', 'discussion_number', 'reaction_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->deleteForTeamDiscussion($params['org'], $params['team_slug'], $params['discussion_number'], $params['reaction_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForCommitComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id', 'content', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->listForCommitComment($params['owner'], $params['repo'], $params['comment_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForCommitComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->createForCommitComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForCommitComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id', 'reaction_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->deleteForCommitComment($params['owner'], $params['repo'], $params['comment_id'], $params['reaction_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForIssueComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id', 'content', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->listForIssueComment($params['owner'], $params['repo'], $params['comment_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForIssueComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->createForIssueComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForIssueComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id', 'reaction_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->deleteForIssueComment($params['owner'], $params['repo'], $params['comment_id'], $params['reaction_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForIssue::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number', 'content', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->listForIssue($params['owner'], $params['repo'], $params['issue_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForIssue::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->createForIssue($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForIssue::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'issue_number', 'reaction_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->deleteForIssue($params['owner'], $params['repo'], $params['issue_number'], $params['reaction_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForPullRequestReviewComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id', 'content', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->listForPullRequestReviewComment($params['owner'], $params['repo'], $params['comment_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForPullRequestReviewComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->createForPullRequestReviewComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForPullRequestComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id', 'reaction_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->deleteForPullRequestComment($params['owner'], $params['repo'], $params['comment_id'], $params['reaction_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForRelease::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'release_id', 'content', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->listForRelease($params['owner'], $params['repo'], $params['release_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForRelease::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'release_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->createForRelease($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForRelease::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'release_id', 'reaction_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->deleteForRelease($params['owner'], $params['repo'], $params['release_id'], $params['reaction_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionCommentLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'discussion_number', 'comment_number', 'content', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->listForTeamDiscussionCommentLegacy($params['team_id'], $params['discussion_number'], $params['comment_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionCommentLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'discussion_number', 'comment_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->createForTeamDiscussionCommentLegacy($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'discussion_number', 'content', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->listForTeamDiscussionLegacy($params['team_id'], $params['discussion_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionLegacy::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('team_id', 'discussion_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->reactions()->createForTeamDiscussionLegacy($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\RateLimit\Get::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->rateLimit()->get();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimitOverview|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Create::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->checks()->create($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Get::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'check_run_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->checks()->get($params['owner'], $params['repo'], $params['check_run_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Update::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'check_run_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->checks()->update($params['owner'], $params['repo'], $params['check_run_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListAnnotations::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'check_run_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->checks()->listAnnotations($params['owner'], $params['repo'], $params['check_run_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestRun::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'check_run_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->checks()->rerequestRun($params['owner'], $params['repo'], $params['check_run_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\CreateSuite::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->checks()->createSuite($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckSuite {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\SetSuitesPreferences::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->checks()->setSuitesPreferences($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckSuitePreference {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\GetSuite::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'check_suite_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->checks()->getSuite($params['owner'], $params['repo'], $params['check_suite_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckSuite {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListForSuite::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'check_suite_id', 'check_name', 'status', 'filter', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->checks()->listForSuite($params['owner'], $params['repo'], $params['check_suite_id'], $params['check_name'], $params['status'], $params['filter'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Checks\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestSuite::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'check_suite_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->checks()->rerequestSuite($params['owner'], $params['repo'], $params['check_suite_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListForRef::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'ref', 'check_name', 'status', 'filter', 'per_page', 'page', 'app_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->checks()->listForRef($params['owner'], $params['repo'], $params['ref'], $params['check_name'], $params['status'], $params['filter'], $params['per_page'], $params['page'], $params['app_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Checks\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListSuitesForRef::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'ref', 'app_id', 'check_name', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->checks()->listSuitesForRef($params['owner'], $params['repo'], $params['ref'], $params['app_id'], $params['check_name'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Checks\Response\Application\Json\H200 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\DiffRange::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'basehead', 'name')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependencyGraph()->diffRange($params['owner'], $params['repo'], $params['basehead'], $params['name']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\CreateRepositorySnapshot::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->dependencyGraph()->createRepositorySnapshot($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\DependencyGraph\Response\Application\Json\H201 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateBlob::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->git()->createBlob($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ShortBlob|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetBlob::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'file_sha')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->git()->getBlob($params['owner'], $params['repo'], $params['file_sha']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Blob|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateCommit::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->git()->createCommit($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitCommit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetCommit::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'commit_sha')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->git()->getCommit($params['owner'], $params['repo'], $params['commit_sha']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitCommit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\ListMatchingRefs::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'ref')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->git()->listMatchingRefs($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetRef::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'ref')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->git()->getRef($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateRef::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->git()->createRef($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\DeleteRef::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'ref')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->git()->deleteRef($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\UpdateRef::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'ref')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->git()->updateRef($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateTag::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->git()->createTag($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTag|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetTag::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'tag_sha')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->git()->getTag($params['owner'], $params['repo'], $params['tag_sha']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTag|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateTree::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->git()->createTree($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTree|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetTree::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'tree_sha', 'recursive')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->git()->getTree($params['owner'], $params['repo'], $params['tree_sha'], $params['recursive']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTree|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\List_::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'state', 'head', 'base', 'sort', 'direction', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->list_($params['owner'], $params['repo'], $params['state'], $params['head'], $params['base'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Create::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->create($params['owner'], $params['repo']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviewCommentsForRepo::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'sort', 'direction', 'since', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->listReviewCommentsForRepo($params['owner'], $params['repo'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReviewComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->getReviewComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeleteReviewComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->deleteReviewComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReviewComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->updateReviewComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Get::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->get($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Pulls\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Update::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->update($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviewComments::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number', 'sort', 'direction', 'since', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->listReviewComments($params['owner'], $params['repo'], $params['pull_number'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReviewComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->createReviewComment($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReplyForReviewComment::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number', 'comment_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->createReplyForReviewComment($params['owner'], $params['repo'], $params['pull_number'], $params['comment_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListCommits::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->listCommits($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListFiles::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->listFiles($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Pulls\Response\Application\Json\H503 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CheckIfMerged::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->checkIfMerged($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Merge::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->merge($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMergeResult|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Pulls\Response\Application\Json\H405|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Pulls\Response\Application\Json\H409|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListRequestedReviewers::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->listRequestedReviewers($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewRequest {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RequestReviewers::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->requestReviewers($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RemoveRequestedReviewers::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->removeRequestedReviewers($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviews::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->listReviews($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReview::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->createReview($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReview::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number', 'review_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->getReview($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReview::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number', 'review_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->updateReview($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeletePendingReview::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number', 'review_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->deletePendingReview($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListCommentsForReview::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number', 'review_id', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->listCommentsForReview($params['owner'], $params['repo'], $params['pull_number'], $params['review_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DismissReview::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number', 'review_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->dismissReview($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\SubmitReview::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number', 'review_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->submitReview($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateBranch::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('owner', 'repo', 'pull_number')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->pulls()->updateBranch($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Pulls\Response\Application\Json\H202|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Code::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('q', 'sort', 'order', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->search()->code($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Search\Response\Application\Json\H200|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Search\Response\Application\Json\H503|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Commits::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('q', 'sort', 'order', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->search()->commits($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Search\Response\Application\Json\H200|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\IssuesAndPullRequests::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('q', 'sort', 'order', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->search()->issuesAndPullRequests($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Search\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Search\Response\Application\Json\H503|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Labels::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('repository_id', 'q', 'sort', 'order', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->search()->labels($params['repository_id'], $params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Search\Response\Application\Json\H200|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Repos::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('q', 'sort', 'order', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->search()->repos($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Search\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Search\Response\Application\Json\H503|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Topics::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('q', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->search()->topics($params['q'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Search\Response\Application\Json\H200|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Users::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('q', 'sort', 'order', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->search()->users($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Search\Response\Application\Json\H200|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Search\Response\Application\Json\H503|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetAuthenticated::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->getAuthenticated();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Users\Response\Application\Json\H200|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UpdateAuthenticated::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->updateAuthenticated();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PrivateUser|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListBlockedByAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->listBlockedByAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckBlocked::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->checkBlocked($params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Block::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->block($params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unblock::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->unblock($params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\SetPrimaryEmailVisibilityForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->setPrimaryEmailVisibilityForAuthenticatedUser();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListEmailsForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->listEmailsForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\AddEmailForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->addEmailForAuthenticatedUser();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteEmailForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->deleteEmailForAuthenticatedUser();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowersForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->listFollowersForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowedByAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->listFollowedByAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckPersonIsFollowedByAuthenticated::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->checkPersonIsFollowedByAuthenticated($params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Follow::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->follow($params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unfollow::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->unfollow($params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->listGpgKeysForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreateGpgKeyForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->createGpgKeyForAuthenticatedUser();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetGpgKeyForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gpg_key_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->getGpgKeyForAuthenticatedUser($params['gpg_key_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteGpgKeyForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('gpg_key_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->deleteGpgKeyForAuthenticatedUser($params['gpg_key_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicSshKeysForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->listPublicSshKeysForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreatePublicSshKeyForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->createPublicSshKeyForAuthenticatedUser();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Key|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetPublicSshKeyForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('key_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->getPublicSshKeyForAuthenticatedUser($params['key_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Key|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeletePublicSshKeyForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('key_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->deletePublicSshKeyForAuthenticatedUser($params['key_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicEmailsForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->listPublicEmailsForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListSshSigningKeysForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->listSshSigningKeysForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreateSshSigningKeyForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array()) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->createSshSigningKeyForAuthenticatedUser();
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SshSigningKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetSshSigningKeyForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('ssh_signing_key_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->getSshSigningKeyForAuthenticatedUser($params['ssh_signing_key_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SshSigningKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteSshSigningKeyForAuthenticatedUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('ssh_signing_key_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->deleteSshSigningKeyForAuthenticatedUser($params['ssh_signing_key_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\List_::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('since', 'per_page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->list_($params['since'], $params['per_page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable|int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetByUsername::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->getByUsername($params['username']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Users\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowersForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->listFollowersForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowingForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->listFollowingForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckFollowingForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'target_user')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->checkFollowingForUser($params['username'], $params['target_user']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : int {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->listGpgKeysForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetContextForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'subject_type', 'subject_id')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->getContextForUser($params['username'], $params['subject_type'], $params['subject_id']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hovercard|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicKeysForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->listPublicKeysForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListSshSigningKeysForUser::OPERATION_MATCH:
                $requestBodyData = array();
                foreach (\array_keys($params) as $param) {
                    if (\in_array($param, array('username', 'per_page', 'page')) != false) {
                        \array_push($requestBodyData, $param);
                    }
                }
                $operation = $this->users()->listSshSigningKeysForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest($requestBodyData);
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
                    return $operation->createResponse($response);
                });
                break;
        }
        throw new \InvalidArgumentException();
    }
    public function hydrateObject(string $className, array $data) : object
    {
        return $this->hydrator->hydrateObject($className, $data);
    }
}
