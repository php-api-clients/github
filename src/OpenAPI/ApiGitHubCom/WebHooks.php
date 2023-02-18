<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom;

final class WebHooks implements \ApiClients\Contracts\OpenAPI\WebHookInterface
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\BranchProtectionRule $branchProtectionRule = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\CheckRun $checkRun = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\CheckSuite $checkSuite = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\CodeScanningAlert $codeScanningAlert = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\CommitComment $commitComment = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Create $create = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Delete $delete = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\DependabotAlert $dependabotAlert = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\DeployKey $deployKey = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Deployment $deployment = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\DeploymentStatus $deploymentStatus = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Discussion $discussion = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\DiscussionComment $discussionComment = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Fork $fork = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\GithubAppAuthorization $githubAppAuthorization = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Gollum $gollum = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Installation $installation = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\InstallationRepositories $installationRepositories = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\InstallationTarget $installationTarget = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\IssueComment $issueComment = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Issues $issues = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Label $label = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\MarketplacePurchase $marketplacePurchase = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Member $member = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Membership $membership = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\MergeGroup $mergeGroup = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Meta $meta = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Milestone $milestone = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\OrgBlock $orgBlock = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Organization $organization = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Package $package = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\PageBuild $pageBuild = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Ping $ping = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\ProjectCard $projectCard = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Project $project = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\ProjectColumn $projectColumn = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\ProjectsV2 $projectsV2 = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\ProjectsV2Item $projectsV2Item = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Public_ $public = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\PullRequest $pullRequest = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\PullRequestReviewComment $pullRequestReviewComment = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\PullRequestReview $pullRequestReview = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\PullRequestReviewThread $pullRequestReviewThread = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Push $push = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\RegistryPackage $registryPackage = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Release $release = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Repository $repository = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\RepositoryDispatch $repositoryDispatch = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\RepositoryImport $repositoryImport = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\RepositoryVulnerabilityAlert $repositoryVulnerabilityAlert = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\SecretScanningAlert $secretScanningAlert = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\SecretScanningAlertLocation $secretScanningAlertLocation = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\SecurityAdvisory $securityAdvisory = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\SecurityAndAnalysis $securityAndAnalysis = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Sponsorship $sponsorship = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Star $star = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Status $status = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\TeamAdd $teamAdd = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Team $team = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Watch $watch = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\WorkflowDispatch $workflowDispatch = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\WorkflowJob $workflowJob = null;
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\WorkflowRun $workflowRun = null;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, Hydrators $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function resolve(array $headers, array $data) : string
    {
        $error = new \RuntimeException('No event matching given headers and data');
        try {
            if ($this->branchProtectionRule instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\BranchProtectionRule === false) {
                $this->branchProtectionRule = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\BranchProtectionRule($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀BranchProtectionRule());
            }
            return $this->branchProtectionRule->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaa;
        }
        webhooks_aaaaa:
        try {
            if ($this->checkRun instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\CheckRun === false) {
                $this->checkRun = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\CheckRun($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀CheckRun());
            }
            return $this->checkRun->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaab;
        }
        webhooks_aaaab:
        try {
            if ($this->checkSuite instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\CheckSuite === false) {
                $this->checkSuite = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\CheckSuite($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀CheckSuite());
            }
            return $this->checkSuite->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaac;
        }
        webhooks_aaaac:
        try {
            if ($this->codeScanningAlert instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\CodeScanningAlert === false) {
                $this->codeScanningAlert = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\CodeScanningAlert($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀CodeScanningAlert());
            }
            return $this->codeScanningAlert->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaad;
        }
        webhooks_aaaad:
        try {
            if ($this->commitComment instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\CommitComment === false) {
                $this->commitComment = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\CommitComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀CommitComment());
            }
            return $this->commitComment->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaae;
        }
        webhooks_aaaae:
        try {
            if ($this->create instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Create === false) {
                $this->create = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Create($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Create());
            }
            return $this->create->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaf;
        }
        webhooks_aaaaf:
        try {
            if ($this->delete instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Delete === false) {
                $this->delete = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Delete($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Delete());
            }
            return $this->delete->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaag;
        }
        webhooks_aaaag:
        try {
            if ($this->dependabotAlert instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\DependabotAlert === false) {
                $this->dependabotAlert = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\DependabotAlert($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀DependabotAlert());
            }
            return $this->dependabotAlert->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaah;
        }
        webhooks_aaaah:
        try {
            if ($this->deployKey instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\DeployKey === false) {
                $this->deployKey = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\DeployKey($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀DeployKey());
            }
            return $this->deployKey->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaai;
        }
        webhooks_aaaai:
        try {
            if ($this->deployment instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Deployment === false) {
                $this->deployment = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Deployment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Deployment());
            }
            return $this->deployment->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaj;
        }
        webhooks_aaaaj:
        try {
            if ($this->deploymentStatus instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\DeploymentStatus === false) {
                $this->deploymentStatus = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\DeploymentStatus($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀DeploymentStatus());
            }
            return $this->deploymentStatus->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaak;
        }
        webhooks_aaaak:
        try {
            if ($this->discussion instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Discussion === false) {
                $this->discussion = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Discussion($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Discussion());
            }
            return $this->discussion->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaal;
        }
        webhooks_aaaal:
        try {
            if ($this->discussionComment instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\DiscussionComment === false) {
                $this->discussionComment = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\DiscussionComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀DiscussionComment());
            }
            return $this->discussionComment->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaam;
        }
        webhooks_aaaam:
        try {
            if ($this->fork instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Fork === false) {
                $this->fork = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Fork($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Fork());
            }
            return $this->fork->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaan;
        }
        webhooks_aaaan:
        try {
            if ($this->githubAppAuthorization instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\GithubAppAuthorization === false) {
                $this->githubAppAuthorization = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\GithubAppAuthorization($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀GithubAppAuthorization());
            }
            return $this->githubAppAuthorization->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaao;
        }
        webhooks_aaaao:
        try {
            if ($this->gollum instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Gollum === false) {
                $this->gollum = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Gollum($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Gollum());
            }
            return $this->gollum->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaap;
        }
        webhooks_aaaap:
        try {
            if ($this->installation instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Installation === false) {
                $this->installation = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Installation($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Installation());
            }
            return $this->installation->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaq;
        }
        webhooks_aaaaq:
        try {
            if ($this->installationRepositories instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\InstallationRepositories === false) {
                $this->installationRepositories = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\InstallationRepositories($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀InstallationRepositories());
            }
            return $this->installationRepositories->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaar;
        }
        webhooks_aaaar:
        try {
            if ($this->installationTarget instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\InstallationTarget === false) {
                $this->installationTarget = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\InstallationTarget($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀InstallationTarget());
            }
            return $this->installationTarget->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaas;
        }
        webhooks_aaaas:
        try {
            if ($this->issueComment instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\IssueComment === false) {
                $this->issueComment = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\IssueComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀IssueComment());
            }
            return $this->issueComment->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaat;
        }
        webhooks_aaaat:
        try {
            if ($this->issues instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Issues === false) {
                $this->issues = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Issues($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Issues());
            }
            return $this->issues->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaau;
        }
        webhooks_aaaau:
        try {
            if ($this->label instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Label === false) {
                $this->label = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Label($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Label());
            }
            return $this->label->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaav;
        }
        webhooks_aaaav:
        try {
            if ($this->marketplacePurchase instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\MarketplacePurchase === false) {
                $this->marketplacePurchase = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\MarketplacePurchase($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀MarketplacePurchase());
            }
            return $this->marketplacePurchase->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaw;
        }
        webhooks_aaaaw:
        try {
            if ($this->member instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Member === false) {
                $this->member = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Member($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Member());
            }
            return $this->member->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaax;
        }
        webhooks_aaaax:
        try {
            if ($this->membership instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Membership === false) {
                $this->membership = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Membership($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Membership());
            }
            return $this->membership->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaay;
        }
        webhooks_aaaay:
        try {
            if ($this->mergeGroup instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\MergeGroup === false) {
                $this->mergeGroup = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\MergeGroup($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀MergeGroup());
            }
            return $this->mergeGroup->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaz;
        }
        webhooks_aaaaz:
        try {
            if ($this->meta instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Meta === false) {
                $this->meta = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Meta($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Meta());
            }
            return $this->meta->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaba;
        }
        webhooks_aaaba:
        try {
            if ($this->milestone instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Milestone === false) {
                $this->milestone = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Milestone($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Milestone());
            }
            return $this->milestone->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabb;
        }
        webhooks_aaabb:
        try {
            if ($this->orgBlock instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\OrgBlock === false) {
                $this->orgBlock = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\OrgBlock($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀OrgBlock());
            }
            return $this->orgBlock->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabc;
        }
        webhooks_aaabc:
        try {
            if ($this->organization instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Organization === false) {
                $this->organization = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Organization($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Organization());
            }
            return $this->organization->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabd;
        }
        webhooks_aaabd:
        try {
            if ($this->package instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Package === false) {
                $this->package = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Package($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Package());
            }
            return $this->package->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabe;
        }
        webhooks_aaabe:
        try {
            if ($this->pageBuild instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\PageBuild === false) {
                $this->pageBuild = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\PageBuild($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀PageBuild());
            }
            return $this->pageBuild->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabf;
        }
        webhooks_aaabf:
        try {
            if ($this->ping instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Ping === false) {
                $this->ping = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Ping($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Ping());
            }
            return $this->ping->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabg;
        }
        webhooks_aaabg:
        try {
            if ($this->projectCard instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\ProjectCard === false) {
                $this->projectCard = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\ProjectCard($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀ProjectCard());
            }
            return $this->projectCard->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabh;
        }
        webhooks_aaabh:
        try {
            if ($this->project instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Project === false) {
                $this->project = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Project($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Project());
            }
            return $this->project->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabi;
        }
        webhooks_aaabi:
        try {
            if ($this->projectColumn instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\ProjectColumn === false) {
                $this->projectColumn = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\ProjectColumn($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀ProjectColumn());
            }
            return $this->projectColumn->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabj;
        }
        webhooks_aaabj:
        try {
            if ($this->projectsV2 instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\ProjectsV2 === false) {
                $this->projectsV2 = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\ProjectsV2($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀ProjectsV2());
            }
            return $this->projectsV2->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabk;
        }
        webhooks_aaabk:
        try {
            if ($this->projectsV2Item instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\ProjectsV2Item === false) {
                $this->projectsV2Item = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\ProjectsV2Item($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀ProjectsV2Item());
            }
            return $this->projectsV2Item->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabl;
        }
        webhooks_aaabl:
        try {
            if ($this->public instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Public_ === false) {
                $this->public = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Public_($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Public_());
            }
            return $this->public->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabm;
        }
        webhooks_aaabm:
        try {
            if ($this->pullRequest instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\PullRequest === false) {
                $this->pullRequest = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\PullRequest($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀PullRequest());
            }
            return $this->pullRequest->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabn;
        }
        webhooks_aaabn:
        try {
            if ($this->pullRequestReviewComment instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\PullRequestReviewComment === false) {
                $this->pullRequestReviewComment = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\PullRequestReviewComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀PullRequestReviewComment());
            }
            return $this->pullRequestReviewComment->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabo;
        }
        webhooks_aaabo:
        try {
            if ($this->pullRequestReview instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\PullRequestReview === false) {
                $this->pullRequestReview = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\PullRequestReview($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀PullRequestReview());
            }
            return $this->pullRequestReview->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabp;
        }
        webhooks_aaabp:
        try {
            if ($this->pullRequestReviewThread instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\PullRequestReviewThread === false) {
                $this->pullRequestReviewThread = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\PullRequestReviewThread($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀PullRequestReviewThread());
            }
            return $this->pullRequestReviewThread->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabq;
        }
        webhooks_aaabq:
        try {
            if ($this->push instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Push === false) {
                $this->push = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Push($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Push());
            }
            return $this->push->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabr;
        }
        webhooks_aaabr:
        try {
            if ($this->registryPackage instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\RegistryPackage === false) {
                $this->registryPackage = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\RegistryPackage($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀RegistryPackage());
            }
            return $this->registryPackage->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabs;
        }
        webhooks_aaabs:
        try {
            if ($this->release instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Release === false) {
                $this->release = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Release($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Release());
            }
            return $this->release->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabt;
        }
        webhooks_aaabt:
        try {
            if ($this->repository instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Repository === false) {
                $this->repository = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Repository($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Repository());
            }
            return $this->repository->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabu;
        }
        webhooks_aaabu:
        try {
            if ($this->repositoryDispatch instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\RepositoryDispatch === false) {
                $this->repositoryDispatch = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\RepositoryDispatch($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀RepositoryDispatch());
            }
            return $this->repositoryDispatch->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabv;
        }
        webhooks_aaabv:
        try {
            if ($this->repositoryImport instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\RepositoryImport === false) {
                $this->repositoryImport = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\RepositoryImport($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀RepositoryImport());
            }
            return $this->repositoryImport->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabw;
        }
        webhooks_aaabw:
        try {
            if ($this->repositoryVulnerabilityAlert instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\RepositoryVulnerabilityAlert === false) {
                $this->repositoryVulnerabilityAlert = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\RepositoryVulnerabilityAlert($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀RepositoryVulnerabilityAlert());
            }
            return $this->repositoryVulnerabilityAlert->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabx;
        }
        webhooks_aaabx:
        try {
            if ($this->secretScanningAlert instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\SecretScanningAlert === false) {
                $this->secretScanningAlert = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\SecretScanningAlert($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀SecretScanningAlert());
            }
            return $this->secretScanningAlert->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaby;
        }
        webhooks_aaaby:
        try {
            if ($this->secretScanningAlertLocation instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\SecretScanningAlertLocation === false) {
                $this->secretScanningAlertLocation = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\SecretScanningAlertLocation($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀SecretScanningAlertLocation());
            }
            return $this->secretScanningAlertLocation->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabz;
        }
        webhooks_aaabz:
        try {
            if ($this->securityAdvisory instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\SecurityAdvisory === false) {
                $this->securityAdvisory = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\SecurityAdvisory($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀SecurityAdvisory());
            }
            return $this->securityAdvisory->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaca;
        }
        webhooks_aaaca:
        try {
            if ($this->securityAndAnalysis instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\SecurityAndAnalysis === false) {
                $this->securityAndAnalysis = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\SecurityAndAnalysis($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀SecurityAndAnalysis());
            }
            return $this->securityAndAnalysis->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacb;
        }
        webhooks_aaacb:
        try {
            if ($this->sponsorship instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Sponsorship === false) {
                $this->sponsorship = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Sponsorship($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Sponsorship());
            }
            return $this->sponsorship->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacc;
        }
        webhooks_aaacc:
        try {
            if ($this->star instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Star === false) {
                $this->star = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Star($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Star());
            }
            return $this->star->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacd;
        }
        webhooks_aaacd:
        try {
            if ($this->status instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Status === false) {
                $this->status = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Status($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Status());
            }
            return $this->status->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaace;
        }
        webhooks_aaace:
        try {
            if ($this->teamAdd instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\TeamAdd === false) {
                $this->teamAdd = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\TeamAdd($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀TeamAdd());
            }
            return $this->teamAdd->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacf;
        }
        webhooks_aaacf:
        try {
            if ($this->team instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Team === false) {
                $this->team = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Team($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Team());
            }
            return $this->team->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacg;
        }
        webhooks_aaacg:
        try {
            if ($this->watch instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Watch === false) {
                $this->watch = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\Watch($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Watch());
            }
            return $this->watch->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaach;
        }
        webhooks_aaach:
        try {
            if ($this->workflowDispatch instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\WorkflowDispatch === false) {
                $this->workflowDispatch = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\WorkflowDispatch($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀WorkflowDispatch());
            }
            return $this->workflowDispatch->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaci;
        }
        webhooks_aaaci:
        try {
            if ($this->workflowJob instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\WorkflowJob === false) {
                $this->workflowJob = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\WorkflowJob($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀WorkflowJob());
            }
            return $this->workflowJob->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacj;
        }
        webhooks_aaacj:
        try {
            if ($this->workflowRun instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\WorkflowRun === false) {
                $this->workflowRun = new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook\WorkflowRun($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀WorkflowRun());
            }
            return $this->workflowRun->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaack;
        }
        webhooks_aaack:
        throw $error;
    }
}
