<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE;

final class Client
{
    private readonly \React\Http\Browser $browser;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct()
    {
        $this->browser = new \React\Http\Browser();
        $this->requestSchemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        $this->responseSchemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_RESPONSE);
    }
    public function meta() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function enterpriseAdmin() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function apps() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function codesOfConduct() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function emojis() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Emojis
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Emojis($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function secretScanning() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function activity() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function gists() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function gitignore() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function issues() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function licenses() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function markdown() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function orgs() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function actions() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function codeScanning() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function teams() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function migrations() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function projects() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function repos() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function reactions() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function rateLimit() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\RateLimit
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\RateLimit($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function checks() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function git() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function pulls() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function search() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function users() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    /**
     * @return \React\Promise\PromiseInterface<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Root|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ApiOverview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CFe0E025D5275E9287953D2E7A5709091|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GlobalHook|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GlobalHook2|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9Ac0Dc3D8Fa53070C193E614C3Ccf983|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationSimple|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CA5445A08E16D224F94859Ebaf785C18A|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C65Ebc59Eb4594424D33Eb572Bf0F6074|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PreReceiveEnvironment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB0962D50Ed9A137436E89Ffb414475Ff|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PreReceiveEnvironmentDownloadStatus|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C37E8A7Aa8C78554A8B1D6Fa8De43F4E3|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Announcement|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LicenseInfo|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseOverview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseCommentOverview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseGistOverview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseHookOverview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseIssueOverview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseMilestoneOverview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseOrganizationOverview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterprisePageOverview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterprisePullRequestOverview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseRepositoryOverview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseUserOverview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ActionsEnterprisePermissions|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7Ccdeb8D72C56F2084Ef071E7F398831|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SelectedActions|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C6Fb5D4F8F68Fdd141Dd186A23703Ff63|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RunnerGroupsEnterprise|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5F3B5341Fe53998B5Bf27243A42Db029|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C70992A2B1985E0F30Bf3Dc67Ba7A9E62|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C948655Af6C42D69A42F49158Df1C3402|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\AuthenticationToken|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Runner|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0F2007B235Be140C866E9B1Ed7599397|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Integration|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C437E8818Bedc1D1C6A8A7E209Db56381|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookConfig|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0E8E1845F1Bc82Ea0E7B36D0Bb6E996D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\HookDelivery|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C373F64Ccd0Cdcbf7536D9D4B2825086F|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Installation|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\InstallationToken|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB4B5Fe24744A15F679F75B51A38Da1E8|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF3F9791Dc6C0736F702Edf3F2695127E|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC245133E837A8Cb3C2C89E1Abdb58Ec8|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C143D8483Bf88427Ecdccf31C4B84Df34|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeOfConduct|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C79A542C60Fea0A939B2Ff6241Fc22Cd9|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C53409250E408491504Dd8C9F172Eedc9|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C1Ddb8Aa1Bb2Dcd068A5A48B192622822|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SecretScanningAlert|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C454A8B9E7Fb48Afa72B1Fe7B69Cb356F|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Feed|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB3B896D115C7798C7Fa79Dc0C79Ac374|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7B1F87F42Ca7F4E6F27Ed1Bcbfcee301|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Thread|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ThreadSubscription|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7C2A5959A24Dcb803B839Bc895C85676|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF19Ab2103D1Cee92F695Dd9D475183C0|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RepositorySubscription|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C85D101740437432Cb16Cbc95C48C3B2B|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C52B8D9Df930E5B816545B59589440747|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9686A175419B2612A00Fa370A7B4F6E8|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C39E07Efd1Aaecd69E2118Dc2F2671Ad8|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C43F872E018E0D7Ee6Ab48Ae6B947F23A|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD7C4628D526D62D8495C7C6Cbef013C7|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9589B48D06725Dd205Dd68F2Cb85C975|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C43Aae5Cfe9D6C3E12Bb4133Ab827C5B9|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0B3930309F9C72E778A65961Ebbc74Ef|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BaseGist|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitignoreTemplate|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2E199B5567389Cbddaf6E6E74F72979D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7Ddbb99E798Ea46E16037A3B2A8616D6|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C59Cb7D1390Ff81628624D579E6B02F52|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEvent|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C3E04B60Abe35C284A39A331B5A490Adf|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF88416Cf49E88Fe8490562434857Fe6D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Label|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7E88818B96F4B827A88Bdffeb546E221|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Milestone|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD8C95C094316027Eaa26C6Eaf9500Ad8|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\License|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LicenseContent|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD25549Cde7Ef111A37D0A59E619F994A|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationFull|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C197505B37575Ae3739584A4C9Efe0801|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C8C7417Cb08B593A169C0D2A998Ca13C8|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDfc9Ce9066Fbb36Ecf1129974E678B26|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ActionsOrganizationPermissions|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CCba4212A0Fe87926486C4330Bcc8781C|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CEa6F9A65671822A0987E6600E25Efc0B|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RunnerGroupsOrg|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB0601E51Fc03Ef9031D3Dad84Cee821B|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C6Fd51E546F4Dbe120D78A3534B76Ce0E|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ActionsPublicKey|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationActionsSecret|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB27Ea936103B51575Be1F0Bc6F8249Fc|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C1A91B16Fbf38476A7587Bb22E0507C4B|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Artifact|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Job|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ActionsRepositoryPermissions|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD7329Ab973781212826444Ceb224858F|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WorkflowRun|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB20125C2E2C4A492F2Eb5Ef9E4F52Eb8|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WorkflowRunUsage|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C58E2D92A7Aba442Fdb0A439Eb965962E|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ActionsSecret|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE25F066E8D67A0F40D61Cb64Df1Cebf6|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Workflow|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WorkflowUsage|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C95B2Cc8F5B5132A3C1C64C470B8D71Ce|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C6Ac9Ea82Ad01Ed328Afeb1B849A27D31|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAlert|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC78B9C183723A3Bb5Ac53690424C6377|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CAa25296392E3D9Ad52Fb8E4Fe1451324|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAnalysis|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2F9C313De3F7Bfd4586Bcc096B11A634|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAnalysisDeletion|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningSarifsReceipt|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningSarifsStatus|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroup|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroups|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C48C27F99490Bb9F6F3Fe1Ca3B71E7D81|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamDiscussion|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5730D3B2Ef04C7A9B60Fe46C96Fa0B20|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamDiscussionComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamMembership|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C039E6Cf714Fc77Af55Cad65Fde5A5718|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamProject|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamRepository|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C45206B806A9565Db2Ebe89Ea38D6Dc95|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C151719B1D838F28343A49E7Cd1A72B30|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Migration|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CAb0747A9430Dc79D395Cf3A981F7F590|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Project|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF694556E3Cc88993A89F1Ed7Afdf4E13|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2F32Ad791Ebef4439Dfb273837Ce0D99|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C84C5Bf99Acadc6Ec8B2A32F2014E1E35|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProjectColumn|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C802A2Aa52727B9F7C501777Ea4F9E4A3|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProjectCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C338B4411A0Be86E1C6C9A568915F6984|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC2368E7F36Bc72644F85F363C9F3F007|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Autolink|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CAf8612A85B49Bafff2D3413829Bd98C7|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BranchWithProtection|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BranchProtection|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranch|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranchPullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\StatusCheckPolicy|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BranchRestrictionPolicy|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C81C377Bf6B21Ffcf535B9A46Dc81E5F5|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeownersErrors|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CEdf0E9A7B54Cc6534Fb24Bc4Cd94Dd1D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RepositoryInvitation|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RepositoryCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDb6974Aa7Ac26B1Fccca8566752Cd2D3|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C844E23F82575A50855510A97A1C68898|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C44F966765547C3442B15293D242E13E2|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2A208909Ef0D9A76Edabd421B01Ca6A2|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Commit|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CombinedCommitStatus|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C1Ac05Dc4833Fe01C300C8C2729Df70Ad|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CommitComparison|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ContentTree|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C96Bca9F5F23C9286Db2F0596100Bc507|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\FileCommit|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CA7Ca0Fcacca5Fd9Bfaa0D26Cc7352Dca|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C6C1Be1B26A14C84Ab35C32Ee2E0Fcd2A|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Deployment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C75F4Dcd10Cf090Fdc9118C43Cb1F9Acb|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeploymentStatus|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C3502Cc2A1Ef0B1884Bcdfcf828660Ec4|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Environment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CAb60B6A9C2C98408237190D09Ed58803|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeploymentBranchPolicy|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF5Ad100B032D2B4F14799737E32Fefd4|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Hook|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD6211D26Dd2907633D30E0F5F0237500|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC93D724F8E2Cec316C29Db0959D273Ce|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeployKey|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Language|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\MergedUpstream|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Page|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C6D863E2F1F1Ab47D84D0Ed073F49Df30|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PageBuildStatus|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PageBuild|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ContentFile|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD0C2695E7C5F50Ea337C2965Ffe11E6D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Release|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ReleaseAsset|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0Db7312560Abfd79A4Bfefef0A3Baef7|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9Bf7717E69D86Ca1B138987Fdb5033B6|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C06431446E4E9E28A63Fd6A22436F7D82|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0B4Ef1B3E0499Cc08F846Cd359C05D76|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ParticipationStats|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Status|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CEc94E54447F15Bea9F91Abe39Ef7B5F6|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Topic|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\MinimalRepository|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5C91Adca674B8B2139054218168F68Fe|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RateLimitOverview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CheckRun|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C33D2984B495081F1F782F0Bdbed8A0E5|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CheckSuite|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CheckSuitePreference|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C60F581B56E9Cea5Bd326503D1C6D1B0F|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDbc41257F83748969Cced25F894424Cd|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ShortBlob|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Blob|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitCommit|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C313800Aa2E76Bd5B3C9753E9E9Ae9Ee3|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitTag|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitTree|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF89C208Bbcc1Fa8Cdfabfebbde8Ab772|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CBd10796Debc7920F91B5617Afd47F727|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestMergeResult|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReviewRequest|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestSimple|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9808Acb55D1D6De88353B547A6D24167|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CFb4596C0Fc740434Cef2371747A626Ed|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDd991Af25805D9830Db3Ab08B503E725|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C22056F0250254Dfc8Db5706A60B6044E|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C8A0535601F5F7C2Ac2B92903899F3126|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C3D0B1A33D0E21B9449553352Ee4C6C9D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB71A98Bede90C5E5046C1Ef70586Ae6F|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C050Dfd1E0C4A60Cde55137Ec4864C709|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC9971B26A226492E08644Fd99C1917A6|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CFa9375D5B4Dfa8F391595615Bd0Addf4|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PrivateUser|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C4Be7352D2188Dd21500E563C327Cd0D4|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GpgKey|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C8569D1C942B35A48Ce04Dca29B28Fb71|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Key|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Hovercard|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5C26E46Afe4Dc8D40051D9776F160A55>
     */
    public function call(string $call, array $params = array())
    {
        switch ($call) {
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta\Root_::OPERATION_MATCH:
                $operation = $this->meta()->root_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Root {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta\Get_::OPERATION_MATCH:
                $operation = $this->meta()->get_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ApiOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta\GetOctocat_::OPERATION_MATCH:
                $operation = $this->meta()->getOctocat_($params['s']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta\GetZen_::OPERATION_MATCH:
                $operation = $this->meta()->getZen_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListGlobalWebhooks_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listGlobalWebhooks_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CFe0E025D5275E9287953D2E7A5709091 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateGlobalWebhook_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createGlobalWebhook_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GlobalHook {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGlobalWebhook_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getGlobalWebhook_($params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GlobalHook {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteGlobalWebhook_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deleteGlobalWebhook_($params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateGlobalWebhook_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updateGlobalWebhook_($params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GlobalHook2 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\PingGlobalWebhook_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->pingGlobalWebhook_($params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListPublicKeys_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listPublicKeys_($params['per_page'], $params['page'], $params['direction'], $params['sort'], $params['since']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9Ac0Dc3D8Fa53070C193E614C3Ccf983 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePublicKey_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deletePublicKey_($params['key_ids']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateOrg_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createOrg_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateOrgName_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updateOrgName_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CA5445A08E16D224F94859Ebaf785C18A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListPreReceiveEnvironments_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listPreReceiveEnvironments_($params['per_page'], $params['page'], $params['direction'], $params['sort']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C65Ebc59Eb4594424D33Eb572Bf0F6074 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreatePreReceiveEnvironment_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createPreReceiveEnvironment_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PreReceiveEnvironment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetPreReceiveEnvironment_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getPreReceiveEnvironment_($params['pre_receive_environment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PreReceiveEnvironment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deletePreReceiveEnvironment_($params['pre_receive_environment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB0962D50Ed9A137436E89Ffb414475Ff {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updatePreReceiveEnvironment_($params['pre_receive_environment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PreReceiveEnvironment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB0962D50Ed9A137436E89Ffb414475Ff {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->startPreReceiveEnvironmentDownload_($params['pre_receive_environment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PreReceiveEnvironmentDownloadStatus|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB0962D50Ed9A137436E89Ffb414475Ff {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getDownloadStatusForPreReceiveEnvironment_($params['pre_receive_environment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PreReceiveEnvironmentDownloadStatus {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListPersonalAccessTokens_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listPersonalAccessTokens_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C37E8A7Aa8C78554A8B1D6Fa8De43F4E3 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePersonalAccessToken_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deletePersonalAccessToken_($params['token_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteUser_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deleteUser_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateImpersonationOAuthToken_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createImpersonationOAuthToken_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Authorization {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteImpersonationOAuthToken_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deleteImpersonationOAuthToken_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAnnouncement_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getAnnouncement_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Announcement {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\RemoveAnnouncement_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removeAnnouncement_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetAnnouncement_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setAnnouncement_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Announcement {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetLicenseInformation_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getLicenseInformation_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LicenseInfo {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAllStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getAllStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetCommentStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getCommentStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseCommentOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGistStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getGistStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseGistOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetHooksStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getHooksStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseHookOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetIssueStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getIssueStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseIssueOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetMilestoneStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getMilestoneStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseMilestoneOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetOrgStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getOrgStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseOrganizationOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetPagesStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getPagesStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterprisePageOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetPullRequestStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getPullRequestStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterprisePullRequestOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetRepoStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getRepoStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseRepositoryOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetUserStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getUserStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseUserOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getGithubActionsPermissionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ActionsEnterprisePermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setGithubActionsPermissionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelectedOrganizationsEnabledGithubActionsEnterprise_($params['enterprise'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7Ccdeb8D72C56F2084Ef071E7F398831 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setSelectedOrganizationsEnabledGithubActionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->enableSelectedOrganizationGithubActionsEnterprise_($params['enterprise'], $params['org_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->disableSelectedOrganizationGithubActionsEnterprise_($params['enterprise'], $params['org_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getAllowedActionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SelectedActions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setAllowedActionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelfHostedRunnerGroupsForEnterprise_($params['enterprise'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C6Fb5D4F8F68Fdd141Dd186A23703Ff63 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createSelfHostedRunnerGroupForEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RunnerGroupsEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getSelfHostedRunnerGroupForEnterprise_($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RunnerGroupsEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deleteSelfHostedRunnerGroupFromEnterprise_($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updateSelfHostedRunnerGroupForEnterprise_($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RunnerGroupsEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelfHostedRunnersInGroupForEnterprise_($params['enterprise'], $params['runner_group_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5F3B5341Fe53998B5Bf27243A42Db029 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setSelfHostedRunnersInGroupForEnterprise_($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->addSelfHostedRunnerToGroupForEnterprise_($params['enterprise'], $params['runner_group_id'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removeSelfHostedRunnerFromGroupForEnterprise_($params['enterprise'], $params['runner_group_id'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelfHostedRunnersForEnterprise_($params['enterprise'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C70992A2B1985E0F30Bf3Dc67Ba7A9E62 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listRunnerApplicationsForEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C948655Af6C42D69A42F49158Df1C3402 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createRegistrationTokenForEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createRemoveTokenForEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getSelfHostedRunnerForEnterprise_($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Runner {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deleteSelfHostedRunnerFromEnterprise_($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAuditLog_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getAuditLog_($params['enterprise'], $params['phrase'], $params['after'], $params['before'], $params['order'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0F2007B235Be140C866E9B1Ed7599397 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SuspendUser_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->suspendUser_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UnsuspendUser_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->unsuspendUser_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetAuthenticated_::OPERATION_MATCH:
                $operation = $this->apps()->getAuthenticated_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Integration {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CreateFromManifest_::OPERATION_MATCH:
                $operation = $this->apps()->createFromManifest_($params['code']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C437E8818Bedc1D1C6A8A7E209Db56381|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookConfigForApp_::OPERATION_MATCH:
                $operation = $this->apps()->getWebhookConfigForApp_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UpdateWebhookConfigForApp_::OPERATION_MATCH:
                $operation = $this->apps()->updateWebhookConfigForApp_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListWebhookDeliveries_::OPERATION_MATCH:
                $operation = $this->apps()->listWebhookDeliveries_($params['per_page'], $params['cursor'], $params['redelivery']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0E8E1845F1Bc82Ea0E7B36D0Bb6E996D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookDelivery_::OPERATION_MATCH:
                $operation = $this->apps()->getWebhookDelivery_($params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\HookDelivery|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RedeliverWebhookDelivery_::OPERATION_MATCH:
                $operation = $this->apps()->redeliverWebhookDelivery_($params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallations_::OPERATION_MATCH:
                $operation = $this->apps()->listInstallations_($params['per_page'], $params['page'], $params['since'], $params['outdated']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C373F64Ccd0Cdcbf7536D9D4B2825086F {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->getInstallation_($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Installation|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->deleteInstallation_($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CreateInstallationAccessToken_::OPERATION_MATCH:
                $operation = $this->apps()->createInstallationAccessToken_($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\InstallationToken|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\SuspendInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->suspendInstallation_($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UnsuspendInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->unsuspendInstallation_($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteAuthorization_::OPERATION_MATCH:
                $operation = $this->apps()->deleteAuthorization_($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CheckToken_::OPERATION_MATCH:
                $operation = $this->apps()->checkToken_($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteToken_::OPERATION_MATCH:
                $operation = $this->apps()->deleteToken_($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetToken_::OPERATION_MATCH:
                $operation = $this->apps()->resetToken_($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetAuthorization_::OPERATION_MATCH:
                $operation = $this->apps()->resetAuthorization_($params['client_id'], $params['access_token']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Authorization {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetBySlug_::OPERATION_MATCH:
                $operation = $this->apps()->getBySlug_($params['app_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Integration|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListReposAccessibleToInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->listReposAccessibleToInstallation_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB4B5Fe24744A15F679F75B51A38Da1E8|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RevokeInstallationAccessToken_::OPERATION_MATCH:
                $operation = $this->apps()->revokeInstallationAccessToken_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetOrgInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->getOrgInstallation_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Installation {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetRepoInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->getRepoInstallation_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Installation|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->apps()->listInstallationsForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF3F9791Dc6C0736F702Edf3F2695127E|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationReposForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->apps()->listInstallationReposForAuthenticatedUser_($params['installation_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC245133E837A8Cb3C2C89E1Abdb58Ec8|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\AddRepoToInstallationForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->apps()->addRepoToInstallationForAuthenticatedUser_($params['installation_id'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->apps()->removeRepoFromInstallationForAuthenticatedUser_($params['installation_id'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetUserInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->getUserInstallation_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Installation {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct\GetAllCodesOfConduct_::OPERATION_MATCH:
                $operation = $this->codesOfConduct()->getAllCodesOfConduct_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C143D8483Bf88427Ecdccf31C4B84Df34 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct\GetConductCode_::OPERATION_MATCH:
                $operation = $this->codesOfConduct()->getConductCode_($params['key']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeOfConduct|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Emojis\Get_::OPERATION_MATCH:
                $operation = $this->emojis()->get_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C79A542C60Fea0A939B2Ff6241Fc22Cd9 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\ListAlertsForEnterprise_::OPERATION_MATCH:
                $operation = $this->secretScanning()->listAlertsForEnterprise_($params['enterprise'], $params['state'], $params['secret_type'], $params['resolution'], $params['sort'], $params['direction'], $params['per_page'], $params['before'], $params['after']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C53409250E408491504Dd8C9F172Eedc9|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\ListAlertsForRepo_::OPERATION_MATCH:
                $operation = $this->secretScanning()->listAlertsForRepo_($params['owner'], $params['repo'], $params['state'], $params['secret_type'], $params['resolution'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C1Ddb8Aa1Bb2Dcd068A5A48B192622822|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\GetAlert_::OPERATION_MATCH:
                $operation = $this->secretScanning()->getAlert_($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SecretScanningAlert|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\UpdateAlert_::OPERATION_MATCH:
                $operation = $this->secretScanning()->updateAlert_($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SecretScanningAlert|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\ListLocationsForAlert_::OPERATION_MATCH:
                $operation = $this->secretScanning()->listLocationsForAlert_($params['owner'], $params['repo'], $params['alert_number'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C454A8B9E7Fb48Afa72B1Fe7B69Cb356F|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetFeeds_::OPERATION_MATCH:
                $operation = $this->activity()->getFeeds_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Feed {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListNotificationsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listNotificationsForAuthenticatedUser_($params['all'], $params['participating'], $params['since'], $params['before'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB3B896D115C7798C7Fa79Dc0C79Ac374|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\MarkNotificationsAsRead_::OPERATION_MATCH:
                $operation = $this->activity()->markNotificationsAsRead_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7B1F87F42Ca7F4E6F27Ed1Bcbfcee301|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetThread_::OPERATION_MATCH:
                $operation = $this->activity()->getThread_($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Thread|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\MarkThreadAsRead_::OPERATION_MATCH:
                $operation = $this->activity()->markThreadAsRead_($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->getThreadSubscriptionForAuthenticatedUser_($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ThreadSubscription|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\SetThreadSubscription_::OPERATION_MATCH:
                $operation = $this->activity()->setThreadSubscription_($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ThreadSubscription|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\DeleteThreadSubscription_::OPERATION_MATCH:
                $operation = $this->activity()->deleteThreadSubscription_($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListRepoEvents_::OPERATION_MATCH:
                $operation = $this->activity()->listRepoEvents_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7C2A5959A24Dcb803B839Bc895C85676 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListRepoNotificationsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listRepoNotificationsForAuthenticatedUser_($params['owner'], $params['repo'], $params['all'], $params['participating'], $params['since'], $params['before'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB3B896D115C7798C7Fa79Dc0C79Ac374 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\MarkRepoNotificationsAsRead_::OPERATION_MATCH:
                $operation = $this->activity()->markRepoNotificationsAsRead_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CA5445A08E16D224F94859Ebaf785C18A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListStargazersForRepo_::OPERATION_MATCH:
                $operation = $this->activity()->listStargazersForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF19Ab2103D1Cee92F695Dd9D475183C0|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListWatchersForRepo_::OPERATION_MATCH:
                $operation = $this->activity()->listWatchersForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetRepoSubscription_::OPERATION_MATCH:
                $operation = $this->activity()->getRepoSubscription_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RepositorySubscription|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\SetRepoSubscription_::OPERATION_MATCH:
                $operation = $this->activity()->setRepoSubscription_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RepositorySubscription {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\DeleteRepoSubscription_::OPERATION_MATCH:
                $operation = $this->activity()->deleteRepoSubscription_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposStarredByAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listReposStarredByAuthenticatedUser_($params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C85D101740437432Cb16Cbc95C48C3B2B|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C52B8D9Df930E5B816545B59589440747|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\CheckRepoIsStarredByAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->checkRepoIsStarredByAuthenticatedUser_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\StarRepoForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->starRepoForAuthenticatedUser_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\UnstarRepoForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->unstarRepoForAuthenticatedUser_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListWatchedReposForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listWatchedReposForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9686A175419B2612A00Fa370A7B4F6E8|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListEventsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listEventsForAuthenticatedUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7C2A5959A24Dcb803B839Bc895C85676 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListOrgEventsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listOrgEventsForAuthenticatedUser_($params['username'], $params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7C2A5959A24Dcb803B839Bc895C85676 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposStarredByUser_::OPERATION_MATCH:
                $operation = $this->activity()->listReposStarredByUser_($params['username'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C39E07Efd1Aaecd69E2118Dc2F2671Ad8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposWatchedByUser_::OPERATION_MATCH:
                $operation = $this->activity()->listReposWatchedByUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9686A175419B2612A00Fa370A7B4F6E8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\List_::OPERATION_MATCH:
                $operation = $this->gists()->list_($params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C43F872E018E0D7Ee6Ab48Ae6B947F23A|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Create_::OPERATION_MATCH:
                $operation = $this->gists()->create_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListPublic_::OPERATION_MATCH:
                $operation = $this->gists()->listPublic_($params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C43F872E018E0D7Ee6Ab48Ae6B947F23A|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListStarred_::OPERATION_MATCH:
                $operation = $this->gists()->listStarred_($params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C43F872E018E0D7Ee6Ab48Ae6B947F23A|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Get_::OPERATION_MATCH:
                $operation = $this->gists()->get_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD7C4628D526D62D8495C7C6Cbef013C7|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Delete_::OPERATION_MATCH:
                $operation = $this->gists()->delete_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Update_::OPERATION_MATCH:
                $operation = $this->gists()->update_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListComments_::OPERATION_MATCH:
                $operation = $this->gists()->listComments_($params['gist_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9589B48D06725Dd205Dd68F2Cb85C975|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\CreateComment_::OPERATION_MATCH:
                $operation = $this->gists()->createComment_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\GetComment_::OPERATION_MATCH:
                $operation = $this->gists()->getComment_($params['gist_id'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD7C4628D526D62D8495C7C6Cbef013C7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\DeleteComment_::OPERATION_MATCH:
                $operation = $this->gists()->deleteComment_($params['gist_id'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\UpdateComment_::OPERATION_MATCH:
                $operation = $this->gists()->updateComment_($params['gist_id'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListCommits_::OPERATION_MATCH:
                $operation = $this->gists()->listCommits_($params['gist_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C43Aae5Cfe9D6C3E12Bb4133Ab827C5B9|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListForks_::OPERATION_MATCH:
                $operation = $this->gists()->listForks_($params['gist_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0B3930309F9C72E778A65961Ebbc74Ef|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Fork_::OPERATION_MATCH:
                $operation = $this->gists()->fork_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BaseGist|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\CheckIsStarred_::OPERATION_MATCH:
                $operation = $this->gists()->checkIsStarred_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Star_::OPERATION_MATCH:
                $operation = $this->gists()->star_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Unstar_::OPERATION_MATCH:
                $operation = $this->gists()->unstar_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\GetRevision_::OPERATION_MATCH:
                $operation = $this->gists()->getRevision_($params['gist_id'], $params['sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListForUser_::OPERATION_MATCH:
                $operation = $this->gists()->listForUser_($params['username'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C43F872E018E0D7Ee6Ab48Ae6B947F23A|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetAllTemplates_::OPERATION_MATCH:
                $operation = $this->gitignore()->getAllTemplates_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetTemplate_::OPERATION_MATCH:
                $operation = $this->gitignore()->getTemplate_($params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitignoreTemplate {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\List_::OPERATION_MATCH:
                $operation = $this->issues()->list_($params['filter'], $params['state'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['collab'], $params['orgs'], $params['owned'], $params['pulls'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2E199B5567389Cbddaf6E6E74F72979D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListForOrg_::OPERATION_MATCH:
                $operation = $this->issues()->listForOrg_($params['org'], $params['filter'], $params['state'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2E199B5567389Cbddaf6E6E74F72979D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListAssignees_::OPERATION_MATCH:
                $operation = $this->issues()->listAssignees_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\CheckUserCanBeAssigned_::OPERATION_MATCH:
                $operation = $this->issues()->checkUserCanBeAssigned_($params['owner'], $params['repo'], $params['assignee']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListForRepo_::OPERATION_MATCH:
                $operation = $this->issues()->listForRepo_($params['owner'], $params['repo'], $params['milestone'], $params['state'], $params['assignee'], $params['creator'], $params['mentioned'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2E199B5567389Cbddaf6E6E74F72979D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\Create_::OPERATION_MATCH:
                $operation = $this->issues()->create_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListCommentsForRepo_::OPERATION_MATCH:
                $operation = $this->issues()->listCommentsForRepo_($params['owner'], $params['repo'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7Ddbb99E798Ea46E16037A3B2A8616D6|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\GetComment_::OPERATION_MATCH:
                $operation = $this->issues()->getComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\DeleteComment_::OPERATION_MATCH:
                $operation = $this->issues()->deleteComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\UpdateComment_::OPERATION_MATCH:
                $operation = $this->issues()->updateComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListEventsForRepo_::OPERATION_MATCH:
                $operation = $this->issues()->listEventsForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C59Cb7D1390Ff81628624D579E6B02F52|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\GetEvent_::OPERATION_MATCH:
                $operation = $this->issues()->getEvent_($params['owner'], $params['repo'], $params['event_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEvent|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\Get_::OPERATION_MATCH:
                $operation = $this->issues()->get_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\Update_::OPERATION_MATCH:
                $operation = $this->issues()->update_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\AddAssignees_::OPERATION_MATCH:
                $operation = $this->issues()->addAssignees_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\RemoveAssignees_::OPERATION_MATCH:
                $operation = $this->issues()->removeAssignees_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListComments_::OPERATION_MATCH:
                $operation = $this->issues()->listComments_($params['owner'], $params['repo'], $params['issue_number'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7Ddbb99E798Ea46E16037A3B2A8616D6|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\CreateComment_::OPERATION_MATCH:
                $operation = $this->issues()->createComment_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListEvents_::OPERATION_MATCH:
                $operation = $this->issues()->listEvents_($params['owner'], $params['repo'], $params['issue_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C3E04B60Abe35C284A39A331B5A490Adf|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListLabelsOnIssue_::OPERATION_MATCH:
                $operation = $this->issues()->listLabelsOnIssue_($params['owner'], $params['repo'], $params['issue_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\SetLabels_::OPERATION_MATCH:
                $operation = $this->issues()->setLabels_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\AddLabels_::OPERATION_MATCH:
                $operation = $this->issues()->addLabels_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\RemoveAllLabels_::OPERATION_MATCH:
                $operation = $this->issues()->removeAllLabels_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\RemoveLabel_::OPERATION_MATCH:
                $operation = $this->issues()->removeLabel_($params['owner'], $params['repo'], $params['issue_number'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\Lock_::OPERATION_MATCH:
                $operation = $this->issues()->lock_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\Unlock_::OPERATION_MATCH:
                $operation = $this->issues()->unlock_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListEventsForTimeline_::OPERATION_MATCH:
                $operation = $this->issues()->listEventsForTimeline_($params['owner'], $params['repo'], $params['issue_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF88416Cf49E88Fe8490562434857Fe6D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListLabelsForRepo_::OPERATION_MATCH:
                $operation = $this->issues()->listLabelsForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\CreateLabel_::OPERATION_MATCH:
                $operation = $this->issues()->createLabel_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Label|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\GetLabel_::OPERATION_MATCH:
                $operation = $this->issues()->getLabel_($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Label|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\DeleteLabel_::OPERATION_MATCH:
                $operation = $this->issues()->deleteLabel_($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\UpdateLabel_::OPERATION_MATCH:
                $operation = $this->issues()->updateLabel_($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Label {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListMilestones_::OPERATION_MATCH:
                $operation = $this->issues()->listMilestones_($params['owner'], $params['repo'], $params['state'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7E88818B96F4B827A88Bdffeb546E221|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\CreateMilestone_::OPERATION_MATCH:
                $operation = $this->issues()->createMilestone_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Milestone|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\GetMilestone_::OPERATION_MATCH:
                $operation = $this->issues()->getMilestone_($params['owner'], $params['repo'], $params['milestone_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Milestone|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\DeleteMilestone_::OPERATION_MATCH:
                $operation = $this->issues()->deleteMilestone_($params['owner'], $params['repo'], $params['milestone_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\UpdateMilestone_::OPERATION_MATCH:
                $operation = $this->issues()->updateMilestone_($params['owner'], $params['repo'], $params['milestone_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Milestone {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListLabelsForMilestone_::OPERATION_MATCH:
                $operation = $this->issues()->listLabelsForMilestone_($params['owner'], $params['repo'], $params['milestone_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->issues()->listForAuthenticatedUser_($params['filter'], $params['state'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2E199B5567389Cbddaf6E6E74F72979D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetAllCommonlyUsed_::OPERATION_MATCH:
                $operation = $this->licenses()->getAllCommonlyUsed_($params['featured'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD8C95C094316027Eaa26C6Eaf9500Ad8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\Get_::OPERATION_MATCH:
                $operation = $this->licenses()->get_($params['license']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\License|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetForRepo_::OPERATION_MATCH:
                $operation = $this->licenses()->getForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LicenseContent {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown\Render_::OPERATION_MATCH:
                $operation = $this->markdown()->render_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown\RenderRaw_::OPERATION_MATCH:
                $operation = $this->markdown()->renderRaw_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\List_::OPERATION_MATCH:
                $operation = $this->orgs()->list_($params['since'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD25549Cde7Ef111A37D0A59E619F994A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\Get_::OPERATION_MATCH:
                $operation = $this->orgs()->get_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationFull|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\Update_::OPERATION_MATCH:
                $operation = $this->orgs()->update_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationFull|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C197505B37575Ae3739584A4C9Efe0801|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetAuditLog_::OPERATION_MATCH:
                $operation = $this->orgs()->getAuditLog_($params['org'], $params['phrase'], $params['after'], $params['before'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0F2007B235Be140C866E9B1Ed7599397 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListWebhooks_::OPERATION_MATCH:
                $operation = $this->orgs()->listWebhooks_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C8C7417Cb08B593A169C0D2A998Ca13C8|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\CreateWebhook_::OPERATION_MATCH:
                $operation = $this->orgs()->createWebhook_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetWebhook_::OPERATION_MATCH:
                $operation = $this->orgs()->getWebhook_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\DeleteWebhook_::OPERATION_MATCH:
                $operation = $this->orgs()->deleteWebhook_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\UpdateWebhook_::OPERATION_MATCH:
                $operation = $this->orgs()->updateWebhook_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetWebhookConfigForOrg_::OPERATION_MATCH:
                $operation = $this->orgs()->getWebhookConfigForOrg_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\UpdateWebhookConfigForOrg_::OPERATION_MATCH:
                $operation = $this->orgs()->updateWebhookConfigForOrg_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListWebhookDeliveries_::OPERATION_MATCH:
                $operation = $this->orgs()->listWebhookDeliveries_($params['org'], $params['hook_id'], $params['per_page'], $params['cursor'], $params['redelivery']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0E8E1845F1Bc82Ea0E7B36D0Bb6E996D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetWebhookDelivery_::OPERATION_MATCH:
                $operation = $this->orgs()->getWebhookDelivery_($params['org'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\HookDelivery|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RedeliverWebhookDelivery_::OPERATION_MATCH:
                $operation = $this->orgs()->redeliverWebhookDelivery_($params['org'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\PingWebhook_::OPERATION_MATCH:
                $operation = $this->orgs()->pingWebhook_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListAppInstallations_::OPERATION_MATCH:
                $operation = $this->orgs()->listAppInstallations_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF3F9791Dc6C0736F702Edf3F2695127E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListMembers_::OPERATION_MATCH:
                $operation = $this->orgs()->listMembers_($params['org'], $params['filter'], $params['role'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\CheckMembershipForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->checkMembershipForUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemoveMember_::OPERATION_MATCH:
                $operation = $this->orgs()->removeMember_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetMembershipForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->getMembershipForUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\SetMembershipForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->setMembershipForUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemoveMembershipForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->removeMembershipForUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListOutsideCollaborators_::OPERATION_MATCH:
                $operation = $this->orgs()->listOutsideCollaborators_($params['org'], $params['filter'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ConvertMemberToOutsideCollaborator_::OPERATION_MATCH:
                $operation = $this->orgs()->convertMemberToOutsideCollaborator_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemoveOutsideCollaborator_::OPERATION_MATCH:
                $operation = $this->orgs()->removeOutsideCollaborator_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListMembershipsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->listMembershipsForAuthenticatedUser_($params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDfc9Ce9066Fbb36Ecf1129974E678B26|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetMembershipForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->getMembershipForAuthenticatedUser_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\UpdateMembershipForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->updateMembershipForAuthenticatedUser_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->listForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD25549Cde7Ef111A37D0A59E619F994A|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->listForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD25549Cde7Ef111A37D0A59E619F994A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetGithubActionsPermissionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->getGithubActionsPermissionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ActionsOrganizationPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetGithubActionsPermissionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->setGithubActionsPermissionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->listSelectedRepositoriesEnabledGithubActionsOrganization_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CCba4212A0Fe87926486C4330Bcc8781C {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->setSelectedRepositoriesEnabledGithubActionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->enableSelectedRepositoryGithubActionsOrganization_($params['org'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->disableSelectedRepositoryGithubActionsOrganization_($params['org'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetAllowedActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->getAllowedActionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SelectedActions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetAllowedActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->setAllowedActionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelfHostedRunnerGroupsForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->listSelfHostedRunnerGroupsForOrg_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CEa6F9A65671822A0987E6600E25Efc0B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateSelfHostedRunnerGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->createSelfHostedRunnerGroupForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RunnerGroupsOrg {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetSelfHostedRunnerGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->getSelfHostedRunnerGroupForOrg_($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RunnerGroupsOrg {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg_::OPERATION_MATCH:
                $operation = $this->actions()->deleteSelfHostedRunnerGroupFromOrg_($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->updateSelfHostedRunnerGroupForOrg_($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RunnerGroupsOrg {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\AddSelfHostedRunnerToGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->addSelfHostedRunnerToGroupForOrg_($params['org'], $params['runner_group_id'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelfHostedRunnersForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->listSelfHostedRunnersForOrg_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB0601E51Fc03Ef9031D3Dad84Cee821B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRunnerApplicationsForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->listRunnerApplicationsForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C948655Af6C42D69A42F49158Df1C3402 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRegistrationTokenForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->createRegistrationTokenForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRemoveTokenForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->createRemoveTokenForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetSelfHostedRunnerForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->getSelfHostedRunnerForOrg_($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Runner {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerFromOrg_::OPERATION_MATCH:
                $operation = $this->actions()->deleteSelfHostedRunnerFromOrg_($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListOrgSecrets_::OPERATION_MATCH:
                $operation = $this->actions()->listOrgSecrets_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C6Fd51E546F4Dbe120D78A3534B76Ce0E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetOrgPublicKey_::OPERATION_MATCH:
                $operation = $this->actions()->getOrgPublicKey_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ActionsPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->getOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationActionsSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateOrUpdateOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->createOrUpdateOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->deleteOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelectedReposForOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->listSelectedReposForOrgSecret_($params['org'], $params['secret_name'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB27Ea936103B51575Be1F0Bc6F8249Fc {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetSelectedReposForOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->setSelectedReposForOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\AddSelectedRepoToOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->addSelectedRepoToOrgSecret_($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\RemoveSelectedRepoFromOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->removeSelectedRepoFromOrgSecret_($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListArtifactsForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->listArtifactsForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C1A91B16Fbf38476A7587Bb22E0507C4B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetArtifact_::OPERATION_MATCH:
                $operation = $this->actions()->getArtifact_($params['owner'], $params['repo'], $params['artifact_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Artifact {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteArtifact_::OPERATION_MATCH:
                $operation = $this->actions()->deleteArtifact_($params['owner'], $params['repo'], $params['artifact_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadArtifact_::OPERATION_MATCH:
                $operation = $this->actions()->downloadArtifact_($params['owner'], $params['repo'], $params['artifact_id'], $params['archive_format']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetJobForWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->getJobForWorkflowRun_($params['owner'], $params['repo'], $params['job_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Job {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadJobLogsForWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->downloadJobLogsForWorkflowRun_($params['owner'], $params['repo'], $params['job_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetGithubActionsPermissionsRepository_::OPERATION_MATCH:
                $operation = $this->actions()->getGithubActionsPermissionsRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ActionsRepositoryPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetGithubActionsPermissionsRepository_::OPERATION_MATCH:
                $operation = $this->actions()->setGithubActionsPermissionsRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetAllowedActionsRepository_::OPERATION_MATCH:
                $operation = $this->actions()->getAllowedActionsRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SelectedActions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetAllowedActionsRepository_::OPERATION_MATCH:
                $operation = $this->actions()->setAllowedActionsRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelfHostedRunnersForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->listSelfHostedRunnersForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB0601E51Fc03Ef9031D3Dad84Cee821B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRunnerApplicationsForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->listRunnerApplicationsForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C948655Af6C42D69A42F49158Df1C3402 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRegistrationTokenForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->createRegistrationTokenForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRemoveTokenForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->createRemoveTokenForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetSelfHostedRunnerForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->getSelfHostedRunnerForRepo_($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Runner {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerFromRepo_::OPERATION_MATCH:
                $operation = $this->actions()->deleteSelfHostedRunnerFromRepo_($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRunsForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->listWorkflowRunsForRepo_($params['owner'], $params['repo'], $params['actor'], $params['branch'], $params['event'], $params['status'], $params['per_page'], $params['page'], $params['created'], $params['exclude_pull_requests']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD7329Ab973781212826444Ceb224858F {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflowRun_($params['owner'], $params['repo'], $params['run_id'], $params['exclude_pull_requests']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WorkflowRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->deleteWorkflowRun_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRunArtifacts_::OPERATION_MATCH:
                $operation = $this->actions()->listWorkflowRunArtifacts_($params['owner'], $params['repo'], $params['run_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C1A91B16Fbf38476A7587Bb22E0507C4B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowRunAttempt_::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflowRunAttempt_($params['owner'], $params['repo'], $params['run_id'], $params['attempt_number'], $params['exclude_pull_requests']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WorkflowRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListJobsForWorkflowRunAttempt_::OPERATION_MATCH:
                $operation = $this->actions()->listJobsForWorkflowRunAttempt_($params['owner'], $params['repo'], $params['run_id'], $params['attempt_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB20125C2E2C4A492F2Eb5Ef9E4F52Eb8|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadWorkflowRunAttemptLogs_::OPERATION_MATCH:
                $operation = $this->actions()->downloadWorkflowRunAttemptLogs_($params['owner'], $params['repo'], $params['run_id'], $params['attempt_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CancelWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->cancelWorkflowRun_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListJobsForWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->listJobsForWorkflowRun_($params['owner'], $params['repo'], $params['run_id'], $params['filter'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB20125C2E2C4A492F2Eb5Ef9E4F52Eb8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadWorkflowRunLogs_::OPERATION_MATCH:
                $operation = $this->actions()->downloadWorkflowRunLogs_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteWorkflowRunLogs_::OPERATION_MATCH:
                $operation = $this->actions()->deleteWorkflowRunLogs_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ReRunWorkflow_::OPERATION_MATCH:
                $operation = $this->actions()->reRunWorkflow_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowRunUsage_::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflowRunUsage_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WorkflowRunUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRepoSecrets_::OPERATION_MATCH:
                $operation = $this->actions()->listRepoSecrets_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C58E2D92A7Aba442Fdb0A439Eb965962E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetRepoPublicKey_::OPERATION_MATCH:
                $operation = $this->actions()->getRepoPublicKey_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ActionsPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetRepoSecret_::OPERATION_MATCH:
                $operation = $this->actions()->getRepoSecret_($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ActionsSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateOrUpdateRepoSecret_::OPERATION_MATCH:
                $operation = $this->actions()->createOrUpdateRepoSecret_($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteRepoSecret_::OPERATION_MATCH:
                $operation = $this->actions()->deleteRepoSecret_($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRepoWorkflows_::OPERATION_MATCH:
                $operation = $this->actions()->listRepoWorkflows_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE25F066E8D67A0F40D61Cb64Df1Cebf6 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflow_::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflow_($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Workflow {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DisableWorkflow_::OPERATION_MATCH:
                $operation = $this->actions()->disableWorkflow_($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateWorkflowDispatch_::OPERATION_MATCH:
                $operation = $this->actions()->createWorkflowDispatch_($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\EnableWorkflow_::OPERATION_MATCH:
                $operation = $this->actions()->enableWorkflow_($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRuns_::OPERATION_MATCH:
                $operation = $this->actions()->listWorkflowRuns_($params['owner'], $params['repo'], $params['workflow_id'], $params['actor'], $params['branch'], $params['event'], $params['status'], $params['per_page'], $params['page'], $params['created'], $params['exclude_pull_requests']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD7329Ab973781212826444Ceb224858F {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowUsage_::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflowUsage_($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WorkflowUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListAlertsForOrg_::OPERATION_MATCH:
                $operation = $this->codeScanning()->listAlertsForOrg_($params['org'], $params['tool_name'], $params['tool_guid'], $params['before'], $params['after'], $params['page'], $params['per_page'], $params['direction'], $params['state'], $params['sort']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C95B2Cc8F5B5132A3C1C64C470B8D71Ce|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListAlertsForRepo_::OPERATION_MATCH:
                $operation = $this->codeScanning()->listAlertsForRepo_($params['owner'], $params['repo'], $params['tool_name'], $params['tool_guid'], $params['page'], $params['per_page'], $params['ref'], $params['direction'], $params['sort'], $params['state']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C6Ac9Ea82Ad01Ed328Afeb1B849A27D31|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetAlert_::OPERATION_MATCH:
                $operation = $this->codeScanning()->getAlert_($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAlert|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\UpdateAlert_::OPERATION_MATCH:
                $operation = $this->codeScanning()->updateAlert_($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAlert|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListAlertInstances_::OPERATION_MATCH:
                $operation = $this->codeScanning()->listAlertInstances_($params['owner'], $params['repo'], $params['alert_number'], $params['page'], $params['per_page'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC78B9C183723A3Bb5Ac53690424C6377|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListRecentAnalyses_::OPERATION_MATCH:
                $operation = $this->codeScanning()->listRecentAnalyses_($params['owner'], $params['repo'], $params['tool_name'], $params['tool_guid'], $params['page'], $params['per_page'], $params['ref'], $params['sarif_id'], $params['direction'], $params['sort']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CAa25296392E3D9Ad52Fb8E4Fe1451324|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetAnalysis_::OPERATION_MATCH:
                $operation = $this->codeScanning()->getAnalysis_($params['owner'], $params['repo'], $params['analysis_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAnalysis|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2F9C313De3F7Bfd4586Bcc096B11A634|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\DeleteAnalysis_::OPERATION_MATCH:
                $operation = $this->codeScanning()->deleteAnalysis_($params['owner'], $params['repo'], $params['analysis_id'], $params['confirm_delete']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAnalysisDeletion|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\UploadSarif_::OPERATION_MATCH:
                $operation = $this->codeScanning()->uploadSarif_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningSarifsReceipt|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetSarif_::OPERATION_MATCH:
                $operation = $this->codeScanning()->getSarif_($params['owner'], $params['repo'], $params['sarif_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningSarifsStatus|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ExternalIdpGroupInfoForOrg_::OPERATION_MATCH:
                $operation = $this->teams()->externalIdpGroupInfoForOrg_($params['org'], $params['group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroup {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListExternalIdpGroupsForOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listExternalIdpGroupsForOrg_($params['org'], $params['per_page'], $params['page'], $params['display_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroups {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\List_::OPERATION_MATCH:
                $operation = $this->teams()->list_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\Create_::OPERATION_MATCH:
                $operation = $this->teams()->create_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetByName_::OPERATION_MATCH:
                $operation = $this->teams()->getByName_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->deleteInOrg_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->updateInOrg_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionsInOrg_($params['org'], $params['team_slug'], $params['direction'], $params['per_page'], $params['page'], $params['pinned']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C48C27F99490Bb9F6F3Fe1Ca3B71E7D81 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionInOrg_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionInOrg_($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionInOrg_($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionInOrg_($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionCommentsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionCommentsInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5730D3B2Ef04C7A9B60Fe46C96Fa0B20 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UnlinkExternalIdpGroupFromTeamForOrg_::OPERATION_MATCH:
                $operation = $this->teams()->unlinkExternalIdpGroupFromTeamForOrg_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\LinkExternalIdpGroupToTeamForOrg_::OPERATION_MATCH:
                $operation = $this->teams()->linkExternalIdpGroupToTeamForOrg_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroup {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListMembersInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listMembersInOrg_($params['org'], $params['team_slug'], $params['role'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetMembershipForUserInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->getMembershipForUserInOrg_($params['org'], $params['team_slug'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamMembership {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateMembershipForUserInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateMembershipForUserInOrg_($params['org'], $params['team_slug'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamMembership {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveMembershipForUserInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->removeMembershipForUserInOrg_($params['org'], $params['team_slug'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListProjectsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listProjectsInOrg_($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C039E6Cf714Fc77Af55Cad65Fde5A5718 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForProjectInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForProjectInOrg_($params['org'], $params['team_slug'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamProject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateProjectPermissionsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateProjectPermissionsInOrg_($params['org'], $params['team_slug'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveProjectInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->removeProjectInOrg_($params['org'], $params['team_slug'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListReposInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listReposInOrg_($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9686A175419B2612A00Fa370A7B4F6E8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForRepoInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForRepoInOrg_($params['org'], $params['team_slug'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateRepoPermissionsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateRepoPermissionsInOrg_($params['org'], $params['team_slug'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveRepoInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->removeRepoInOrg_($params['org'], $params['team_slug'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListChildInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listChildInOrg_($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->getLegacy_($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->deleteLegacy_($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->updateLegacy_($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionsLegacy_($params['team_id'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C48C27F99490Bb9F6F3Fe1Ca3B71E7D81 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionLegacy_($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionLegacy_($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionLegacy_($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionLegacy_($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionCommentsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionCommentsLegacy_($params['team_id'], $params['discussion_number'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5730D3B2Ef04C7A9B60Fe46C96Fa0B20 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionCommentLegacy_($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionCommentLegacy_($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionCommentLegacy_($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionCommentLegacy_($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListMembersLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listMembersLegacy_($params['team_id'], $params['role'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetMemberLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->getMemberLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddMemberLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->addMemberLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveMemberLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->removeMemberLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetMembershipForUserLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->getMembershipForUserLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamMembership|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateMembershipForUserLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateMembershipForUserLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamMembership|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveMembershipForUserLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->removeMembershipForUserLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListProjectsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listProjectsLegacy_($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C039E6Cf714Fc77Af55Cad65Fde5A5718|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForProjectLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForProjectLegacy_($params['team_id'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamProject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateProjectPermissionsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateProjectPermissionsLegacy_($params['team_id'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveProjectLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->removeProjectLegacy_($params['team_id'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListReposLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listReposLegacy_($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9686A175419B2612A00Fa370A7B4F6E8|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForRepoLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForRepoLegacy_($params['team_id'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateRepoPermissionsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateRepoPermissionsLegacy_($params['team_id'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveRepoLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->removeRepoLegacy_($params['team_id'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListChildLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listChildLegacy_($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->teams()->listForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C45206B806A9565Db2Ebe89Ea38D6Dc95|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListForOrg_::OPERATION_MATCH:
                $operation = $this->migrations()->listForOrg_($params['org'], $params['per_page'], $params['page'], $params['exclude']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C151719B1D838F28343A49E7Cd1A72B30 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\StartForOrg_::OPERATION_MATCH:
                $operation = $this->migrations()->startForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Migration|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\GetStatusForOrg_::OPERATION_MATCH:
                $operation = $this->migrations()->getStatusForOrg_($params['org'], $params['migration_id'], $params['exclude']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Migration|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->migrations()->listForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C151719B1D838F28343A49E7Cd1A72B30|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\StartForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->migrations()->startForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Migration|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\GetArchiveForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->migrations()->getArchiveForAuthenticatedUser_($params['migration_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListReposForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->migrations()->listReposForAuthenticatedUser_($params['migration_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9686A175419B2612A00Fa370A7B4F6E8|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListForOrg_::OPERATION_MATCH:
                $operation = $this->projects()->listForOrg_($params['org'], $params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CAb0747A9430Dc79D395Cf3A981F7F590|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateForOrg_::OPERATION_MATCH:
                $operation = $this->projects()->createForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Project|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetCard_::OPERATION_MATCH:
                $operation = $this->projects()->getCard_($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\DeleteCard_::OPERATION_MATCH:
                $operation = $this->projects()->deleteCard_($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF694556E3Cc88993A89F1Ed7Afdf4E13|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\UpdateCard_::OPERATION_MATCH:
                $operation = $this->projects()->updateCard_($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\MoveCard_::OPERATION_MATCH:
                $operation = $this->projects()->moveCard_($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2F32Ad791Ebef4439Dfb273837Ce0D99|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C84C5Bf99Acadc6Ec8B2A32F2014E1E35|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetColumn_::OPERATION_MATCH:
                $operation = $this->projects()->getColumn_($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProjectColumn|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\DeleteColumn_::OPERATION_MATCH:
                $operation = $this->projects()->deleteColumn_($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\UpdateColumn_::OPERATION_MATCH:
                $operation = $this->projects()->updateColumn_($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProjectColumn|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListCards_::OPERATION_MATCH:
                $operation = $this->projects()->listCards_($params['column_id'], $params['archived_state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C802A2Aa52727B9F7C501777Ea4F9E4A3|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateCard_::OPERATION_MATCH:
                $operation = $this->projects()->createCard_($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C197505B37575Ae3739584A4C9Efe0801|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C84C5Bf99Acadc6Ec8B2A32F2014E1E35 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\MoveColumn_::OPERATION_MATCH:
                $operation = $this->projects()->moveColumn_($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\Get_::OPERATION_MATCH:
                $operation = $this->projects()->get_($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Project|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\Delete_::OPERATION_MATCH:
                $operation = $this->projects()->delete_($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF694556E3Cc88993A89F1Ed7Afdf4E13|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\Update_::OPERATION_MATCH:
                $operation = $this->projects()->update_($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Project|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF694556E3Cc88993A89F1Ed7Afdf4E13|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListCollaborators_::OPERATION_MATCH:
                $operation = $this->projects()->listCollaborators_($params['project_id'], $params['affiliation'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\AddCollaborator_::OPERATION_MATCH:
                $operation = $this->projects()->addCollaborator_($params['project_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\RemoveCollaborator_::OPERATION_MATCH:
                $operation = $this->projects()->removeCollaborator_($params['project_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetPermissionForUser_::OPERATION_MATCH:
                $operation = $this->projects()->getPermissionForUser_($params['project_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProjectCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListColumns_::OPERATION_MATCH:
                $operation = $this->projects()->listColumns_($params['project_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C338B4411A0Be86E1C6C9A568915F6984|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateColumn_::OPERATION_MATCH:
                $operation = $this->projects()->createColumn_($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProjectColumn|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListForRepo_::OPERATION_MATCH:
                $operation = $this->projects()->listForRepo_($params['owner'], $params['repo'], $params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CAb0747A9430Dc79D395Cf3A981F7F590|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateForRepo_::OPERATION_MATCH:
                $operation = $this->projects()->createForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Project|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->projects()->createForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Project|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListForUser_::OPERATION_MATCH:
                $operation = $this->projects()->listForUser_($params['username'], $params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CAb0747A9430Dc79D395Cf3A981F7F590|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListForOrg_::OPERATION_MATCH:
                $operation = $this->repos()->listForOrg_($params['org'], $params['type'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9686A175419B2612A00Fa370A7B4F6E8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateInOrg_::OPERATION_MATCH:
                $operation = $this->repos()->createInOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Get_::OPERATION_MATCH:
                $operation = $this->repos()->get_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Delete_::OPERATION_MATCH:
                $operation = $this->repos()->delete_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Update_::OPERATION_MATCH:
                $operation = $this->repos()->update_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListAutolinks_::OPERATION_MATCH:
                $operation = $this->repos()->listAutolinks_($params['owner'], $params['repo'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC2368E7F36Bc72644F85F363C9F3F007 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateAutolink_::OPERATION_MATCH:
                $operation = $this->repos()->createAutolink_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Autolink|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAutolink_::OPERATION_MATCH:
                $operation = $this->repos()->getAutolink_($params['owner'], $params['repo'], $params['autolink_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Autolink|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteAutolink_::OPERATION_MATCH:
                $operation = $this->repos()->deleteAutolink_($params['owner'], $params['repo'], $params['autolink_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListBranches_::OPERATION_MATCH:
                $operation = $this->repos()->listBranches_($params['owner'], $params['repo'], $params['protected'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CAf8612A85B49Bafff2D3413829Bd98C7|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetBranch_::OPERATION_MATCH:
                $operation = $this->repos()->getBranch_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BranchWithProtection|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->getBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BranchProtection|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->updateBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranch|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->deleteBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAdminBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->getAdminBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranchAdminEnforced {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\SetAdminBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->setAdminBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranchAdminEnforced {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteAdminBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->deleteAdminBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetPullRequestReviewProtection_::OPERATION_MATCH:
                $operation = $this->repos()->getPullRequestReviewProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranchPullRequestReview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeletePullRequestReviewProtection_::OPERATION_MATCH:
                $operation = $this->repos()->deletePullRequestReviewProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdatePullRequestReviewProtection_::OPERATION_MATCH:
                $operation = $this->repos()->updatePullRequestReviewProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranchPullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCommitSignatureProtection_::OPERATION_MATCH:
                $operation = $this->repos()->getCommitSignatureProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateCommitSignatureProtection_::OPERATION_MATCH:
                $operation = $this->repos()->createCommitSignatureProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteCommitSignatureProtection_::OPERATION_MATCH:
                $operation = $this->repos()->deleteCommitSignatureProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetStatusChecksProtection_::OPERATION_MATCH:
                $operation = $this->repos()->getStatusChecksProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\StatusCheckPolicy|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveStatusCheckProtection_::OPERATION_MATCH:
                $operation = $this->repos()->removeStatusCheckProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateStatusCheckProtection_::OPERATION_MATCH:
                $operation = $this->repos()->updateStatusCheckProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\StatusCheckPolicy|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAllStatusCheckContexts_::OPERATION_MATCH:
                $operation = $this->repos()->getAllStatusCheckContexts_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\SetStatusCheckContexts_::OPERATION_MATCH:
                $operation = $this->repos()->setStatusCheckContexts_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AddStatusCheckContexts_::OPERATION_MATCH:
                $operation = $this->repos()->addStatusCheckContexts_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveStatusCheckContexts_::OPERATION_MATCH:
                $operation = $this->repos()->removeStatusCheckContexts_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->getAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BranchRestrictionPolicy|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->deleteAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAppsWithAccessToProtectedBranch_::OPERATION_MATCH:
                $operation = $this->repos()->getAppsWithAccessToProtectedBranch_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C81C377Bf6B21Ffcf535B9A46Dc81E5F5|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\SetAppAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->setAppAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C81C377Bf6B21Ffcf535B9A46Dc81E5F5|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AddAppAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->addAppAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C81C377Bf6B21Ffcf535B9A46Dc81E5F5|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveAppAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->removeAppAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C81C377Bf6B21Ffcf535B9A46Dc81E5F5|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetTeamsWithAccessToProtectedBranch_::OPERATION_MATCH:
                $operation = $this->repos()->getTeamsWithAccessToProtectedBranch_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\SetTeamAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->setTeamAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AddTeamAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->addTeamAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveTeamAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->removeTeamAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetUsersWithAccessToProtectedBranch_::OPERATION_MATCH:
                $operation = $this->repos()->getUsersWithAccessToProtectedBranch_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\SetUserAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->setUserAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AddUserAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->addUserAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveUserAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->removeUserAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CodeownersErrors_::OPERATION_MATCH:
                $operation = $this->repos()->codeownersErrors_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeownersErrors {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListCollaborators_::OPERATION_MATCH:
                $operation = $this->repos()->listCollaborators_($params['owner'], $params['repo'], $params['affiliation'], $params['permission'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CEdf0E9A7B54Cc6534Fb24Bc4Cd94Dd1D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CheckCollaborator_::OPERATION_MATCH:
                $operation = $this->repos()->checkCollaborator_($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AddCollaborator_::OPERATION_MATCH:
                $operation = $this->repos()->addCollaborator_($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RepositoryInvitation|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveCollaborator_::OPERATION_MATCH:
                $operation = $this->repos()->removeCollaborator_($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCollaboratorPermissionLevel_::OPERATION_MATCH:
                $operation = $this->repos()->getCollaboratorPermissionLevel_($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RepositoryCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListCommitCommentsForRepo_::OPERATION_MATCH:
                $operation = $this->repos()->listCommitCommentsForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDb6974Aa7Ac26B1Fccca8566752Cd2D3 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCommitComment_::OPERATION_MATCH:
                $operation = $this->repos()->getCommitComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteCommitComment_::OPERATION_MATCH:
                $operation = $this->repos()->deleteCommitComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateCommitComment_::OPERATION_MATCH:
                $operation = $this->repos()->updateCommitComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListCommits_::OPERATION_MATCH:
                $operation = $this->repos()->listCommits_($params['owner'], $params['repo'], $params['sha'], $params['path'], $params['author'], $params['since'], $params['until'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C844E23F82575A50855510A97A1C68898|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListBranchesForHeadCommit_::OPERATION_MATCH:
                $operation = $this->repos()->listBranchesForHeadCommit_($params['owner'], $params['repo'], $params['commit_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C44F966765547C3442B15293D242E13E2|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListCommentsForCommit_::OPERATION_MATCH:
                $operation = $this->repos()->listCommentsForCommit_($params['owner'], $params['repo'], $params['commit_sha'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDb6974Aa7Ac26B1Fccca8566752Cd2D3 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateCommitComment_::OPERATION_MATCH:
                $operation = $this->repos()->createCommitComment_($params['owner'], $params['repo'], $params['commit_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListPullRequestsAssociatedWithCommit_::OPERATION_MATCH:
                $operation = $this->repos()->listPullRequestsAssociatedWithCommit_($params['owner'], $params['repo'], $params['commit_sha'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2A208909Ef0D9A76Edabd421B01Ca6A2 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCommit_::OPERATION_MATCH:
                $operation = $this->repos()->getCommit_($params['owner'], $params['repo'], $params['page'], $params['per_page'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Commit|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCombinedStatusForRef_::OPERATION_MATCH:
                $operation = $this->repos()->getCombinedStatusForRef_($params['owner'], $params['repo'], $params['ref'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CombinedCommitStatus|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListCommitStatusesForRef_::OPERATION_MATCH:
                $operation = $this->repos()->listCommitStatusesForRef_($params['owner'], $params['repo'], $params['ref'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C1Ac05Dc4833Fe01C300C8C2729Df70Ad|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CompareCommits_::OPERATION_MATCH:
                $operation = $this->repos()->compareCommits_($params['owner'], $params['repo'], $params['page'], $params['per_page'], $params['basehead']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CommitComparison|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetContent_::OPERATION_MATCH:
                $operation = $this->repos()->getContent_($params['owner'], $params['repo'], $params['path'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ContentTree|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C96Bca9F5F23C9286Db2F0596100Bc507|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateOrUpdateFileContents_::OPERATION_MATCH:
                $operation = $this->repos()->createOrUpdateFileContents_($params['owner'], $params['repo'], $params['path']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\FileCommit|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteFile_::OPERATION_MATCH:
                $operation = $this->repos()->deleteFile_($params['owner'], $params['repo'], $params['path']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\FileCommit|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListContributors_::OPERATION_MATCH:
                $operation = $this->repos()->listContributors_($params['owner'], $params['repo'], $params['anon'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CA7Ca0Fcacca5Fd9Bfaa0D26Cc7352Dca|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListDeployments_::OPERATION_MATCH:
                $operation = $this->repos()->listDeployments_($params['owner'], $params['repo'], $params['sha'], $params['ref'], $params['task'], $params['environment'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C6C1Be1B26A14C84Ab35C32Ee2E0Fcd2A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateDeployment_::OPERATION_MATCH:
                $operation = $this->repos()->createDeployment_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Deployment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7B1F87F42Ca7F4E6F27Ed1Bcbfcee301|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetDeployment_::OPERATION_MATCH:
                $operation = $this->repos()->getDeployment_($params['owner'], $params['repo'], $params['deployment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Deployment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteDeployment_::OPERATION_MATCH:
                $operation = $this->repos()->deleteDeployment_($params['owner'], $params['repo'], $params['deployment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListDeploymentStatuses_::OPERATION_MATCH:
                $operation = $this->repos()->listDeploymentStatuses_($params['owner'], $params['repo'], $params['deployment_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C75F4Dcd10Cf090Fdc9118C43Cb1F9Acb|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateDeploymentStatus_::OPERATION_MATCH:
                $operation = $this->repos()->createDeploymentStatus_($params['owner'], $params['repo'], $params['deployment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeploymentStatus|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetDeploymentStatus_::OPERATION_MATCH:
                $operation = $this->repos()->getDeploymentStatus_($params['owner'], $params['repo'], $params['deployment_id'], $params['status_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeploymentStatus|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateDispatchEvent_::OPERATION_MATCH:
                $operation = $this->repos()->createDispatchEvent_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAllEnvironments_::OPERATION_MATCH:
                $operation = $this->repos()->getAllEnvironments_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C3502Cc2A1Ef0B1884Bcdfcf828660Ec4 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetEnvironment_::OPERATION_MATCH:
                $operation = $this->repos()->getEnvironment_($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Environment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateOrUpdateEnvironment_::OPERATION_MATCH:
                $operation = $this->repos()->createOrUpdateEnvironment_($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Environment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteAnEnvironment_::OPERATION_MATCH:
                $operation = $this->repos()->deleteAnEnvironment_($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListDeploymentBranchPolicies_::OPERATION_MATCH:
                $operation = $this->repos()->listDeploymentBranchPolicies_($params['owner'], $params['repo'], $params['environment_name'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CAb60B6A9C2C98408237190D09Ed58803 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateDeploymentBranchPolicy_::OPERATION_MATCH:
                $operation = $this->repos()->createDeploymentBranchPolicy_($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeploymentBranchPolicy {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetDeploymentBranchPolicy_::OPERATION_MATCH:
                $operation = $this->repos()->getDeploymentBranchPolicy_($params['owner'], $params['repo'], $params['environment_name'], $params['branch_policy_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeploymentBranchPolicy {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateDeploymentBranchPolicy_::OPERATION_MATCH:
                $operation = $this->repos()->updateDeploymentBranchPolicy_($params['owner'], $params['repo'], $params['environment_name'], $params['branch_policy_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeploymentBranchPolicy {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteDeploymentBranchPolicy_::OPERATION_MATCH:
                $operation = $this->repos()->deleteDeploymentBranchPolicy_($params['owner'], $params['repo'], $params['environment_name'], $params['branch_policy_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListForks_::OPERATION_MATCH:
                $operation = $this->repos()->listForks_($params['owner'], $params['repo'], $params['sort'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9686A175419B2612A00Fa370A7B4F6E8|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateFork_::OPERATION_MATCH:
                $operation = $this->repos()->createFork_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListWebhooks_::OPERATION_MATCH:
                $operation = $this->repos()->listWebhooks_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF5Ad100B032D2B4F14799737E32Fefd4|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->createWebhook_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Hook|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->getWebhook_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Hook|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->deleteWebhook_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->updateWebhook_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Hook|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetWebhookConfigForRepo_::OPERATION_MATCH:
                $operation = $this->repos()->getWebhookConfigForRepo_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateWebhookConfigForRepo_::OPERATION_MATCH:
                $operation = $this->repos()->updateWebhookConfigForRepo_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListWebhookDeliveries_::OPERATION_MATCH:
                $operation = $this->repos()->listWebhookDeliveries_($params['owner'], $params['repo'], $params['hook_id'], $params['per_page'], $params['cursor'], $params['redelivery']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0E8E1845F1Bc82Ea0E7B36D0Bb6E996D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetWebhookDelivery_::OPERATION_MATCH:
                $operation = $this->repos()->getWebhookDelivery_($params['owner'], $params['repo'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\HookDelivery|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RedeliverWebhookDelivery_::OPERATION_MATCH:
                $operation = $this->repos()->redeliverWebhookDelivery_($params['owner'], $params['repo'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\PingWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->pingWebhook_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\TestPushWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->testPushWebhook_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListInvitations_::OPERATION_MATCH:
                $operation = $this->repos()->listInvitations_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD6211D26Dd2907633D30E0F5F0237500 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteInvitation_::OPERATION_MATCH:
                $operation = $this->repos()->deleteInvitation_($params['owner'], $params['repo'], $params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateInvitation_::OPERATION_MATCH:
                $operation = $this->repos()->updateInvitation_($params['owner'], $params['repo'], $params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RepositoryInvitation {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListDeployKeys_::OPERATION_MATCH:
                $operation = $this->repos()->listDeployKeys_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC93D724F8E2Cec316C29Db0959D273Ce {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateDeployKey_::OPERATION_MATCH:
                $operation = $this->repos()->createDeployKey_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeployKey|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetDeployKey_::OPERATION_MATCH:
                $operation = $this->repos()->getDeployKey_($params['owner'], $params['repo'], $params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeployKey|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteDeployKey_::OPERATION_MATCH:
                $operation = $this->repos()->deleteDeployKey_($params['owner'], $params['repo'], $params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListLanguages_::OPERATION_MATCH:
                $operation = $this->repos()->listLanguages_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Language {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\EnableLfsForRepo_::OPERATION_MATCH:
                $operation = $this->repos()->enableLfsForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DisableLfsForRepo_::OPERATION_MATCH:
                $operation = $this->repos()->disableLfsForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\MergeUpstream_::OPERATION_MATCH:
                $operation = $this->repos()->mergeUpstream_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\MergedUpstream {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Merge_::OPERATION_MATCH:
                $operation = $this->repos()->merge_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Commit|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetPages_::OPERATION_MATCH:
                $operation = $this->repos()->getPages_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Page|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateInformationAboutPagesSite_::OPERATION_MATCH:
                $operation = $this->repos()->updateInformationAboutPagesSite_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreatePagesSite_::OPERATION_MATCH:
                $operation = $this->repos()->createPagesSite_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Page|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeletePagesSite_::OPERATION_MATCH:
                $operation = $this->repos()->deletePagesSite_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListPagesBuilds_::OPERATION_MATCH:
                $operation = $this->repos()->listPagesBuilds_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C6D863E2F1F1Ab47D84D0Ed073F49Df30 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RequestPagesBuild_::OPERATION_MATCH:
                $operation = $this->repos()->requestPagesBuild_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PageBuildStatus {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetLatestPagesBuild_::OPERATION_MATCH:
                $operation = $this->repos()->getLatestPagesBuild_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PageBuild {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetPagesBuild_::OPERATION_MATCH:
                $operation = $this->repos()->getPagesBuild_($params['owner'], $params['repo'], $params['build_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PageBuild {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetReadme_::OPERATION_MATCH:
                $operation = $this->repos()->getReadme_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ContentFile|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetReadmeInDirectory_::OPERATION_MATCH:
                $operation = $this->repos()->getReadmeInDirectory_($params['owner'], $params['repo'], $params['dir'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ContentFile|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListReleases_::OPERATION_MATCH:
                $operation = $this->repos()->listReleases_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD0C2695E7C5F50Ea337C2965Ffe11E6D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateRelease_::OPERATION_MATCH:
                $operation = $this->repos()->createRelease_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Release|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetReleaseAsset_::OPERATION_MATCH:
                $operation = $this->repos()->getReleaseAsset_($params['owner'], $params['repo'], $params['asset_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ReleaseAsset|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteReleaseAsset_::OPERATION_MATCH:
                $operation = $this->repos()->deleteReleaseAsset_($params['owner'], $params['repo'], $params['asset_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateReleaseAsset_::OPERATION_MATCH:
                $operation = $this->repos()->updateReleaseAsset_($params['owner'], $params['repo'], $params['asset_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ReleaseAsset {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetLatestRelease_::OPERATION_MATCH:
                $operation = $this->repos()->getLatestRelease_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Release {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetReleaseByTag_::OPERATION_MATCH:
                $operation = $this->repos()->getReleaseByTag_($params['owner'], $params['repo'], $params['tag']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Release|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetRelease_::OPERATION_MATCH:
                $operation = $this->repos()->getRelease_($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Release|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteRelease_::OPERATION_MATCH:
                $operation = $this->repos()->deleteRelease_($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateRelease_::OPERATION_MATCH:
                $operation = $this->repos()->updateRelease_($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Release {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListReleaseAssets_::OPERATION_MATCH:
                $operation = $this->repos()->listReleaseAssets_($params['owner'], $params['repo'], $params['release_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0Db7312560Abfd79A4Bfefef0A3Baef7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UploadReleaseAsset_::OPERATION_MATCH:
                $operation = $this->repos()->uploadReleaseAsset_($params['owner'], $params['repo'], $params['release_id'], $params['name'], $params['label']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ReleaseAsset {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCodeFrequencyStats_::OPERATION_MATCH:
                $operation = $this->repos()->getCodeFrequencyStats_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9Bf7717E69D86Ca1B138987Fdb5033B6|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCommitActivityStats_::OPERATION_MATCH:
                $operation = $this->repos()->getCommitActivityStats_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C06431446E4E9E28A63Fd6A22436F7D82|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetContributorsStats_::OPERATION_MATCH:
                $operation = $this->repos()->getContributorsStats_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0B4Ef1B3E0499Cc08F846Cd359C05D76|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetParticipationStats_::OPERATION_MATCH:
                $operation = $this->repos()->getParticipationStats_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ParticipationStats|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetPunchCardStats_::OPERATION_MATCH:
                $operation = $this->repos()->getPunchCardStats_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9Bf7717E69D86Ca1B138987Fdb5033B6 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateCommitStatus_::OPERATION_MATCH:
                $operation = $this->repos()->createCommitStatus_($params['owner'], $params['repo'], $params['sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Status {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListTags_::OPERATION_MATCH:
                $operation = $this->repos()->listTags_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CEc94E54447F15Bea9F91Abe39Ef7B5F6 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DownloadTarballArchive_::OPERATION_MATCH:
                $operation = $this->repos()->downloadTarballArchive_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListTeams_::OPERATION_MATCH:
                $operation = $this->repos()->listTeams_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAllTopics_::OPERATION_MATCH:
                $operation = $this->repos()->getAllTopics_($params['owner'], $params['repo'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Topic|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ReplaceAllTopics_::OPERATION_MATCH:
                $operation = $this->repos()->replaceAllTopics_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Topic|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Transfer_::OPERATION_MATCH:
                $operation = $this->repos()->transfer_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\MinimalRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DownloadZipballArchive_::OPERATION_MATCH:
                $operation = $this->repos()->downloadZipballArchive_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateUsingTemplate_::OPERATION_MATCH:
                $operation = $this->repos()->createUsingTemplate_($params['template_owner'], $params['template_repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->repos()->listForAuthenticatedUser_($params['visibility'], $params['affiliation'], $params['type'], $params['sort'], $params['direction'], $params['per_page'], $params['page'], $params['since'], $params['before']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C85D101740437432Cb16Cbc95C48C3B2B|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->repos()->createForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListInvitationsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->repos()->listInvitationsForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD6211D26Dd2907633D30E0F5F0237500|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeclineInvitationForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->repos()->declineInvitationForAuthenticatedUser_($params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AcceptInvitationForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->repos()->acceptInvitationForAuthenticatedUser_($params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListForUser_::OPERATION_MATCH:
                $operation = $this->repos()->listForUser_($params['username'], $params['type'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9686A175419B2612A00Fa370A7B4F6E8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForTeamDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->reactions()->listForTeamDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForTeamDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->reactions()->createForTeamDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForTeamDiscussionComment_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForTeamDiscussionComment_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForTeamDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->reactions()->listForTeamDiscussionInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForTeamDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->reactions()->createForTeamDiscussionInOrg_($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForTeamDiscussion_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForTeamDiscussion_($params['org'], $params['team_slug'], $params['discussion_number'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForCommitComment_::OPERATION_MATCH:
                $operation = $this->reactions()->listForCommitComment_($params['owner'], $params['repo'], $params['comment_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForCommitComment_::OPERATION_MATCH:
                $operation = $this->reactions()->createForCommitComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5C91Adca674B8B2139054218168F68Fe {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForCommitComment_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForCommitComment_($params['owner'], $params['repo'], $params['comment_id'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForIssueComment_::OPERATION_MATCH:
                $operation = $this->reactions()->listForIssueComment_($params['owner'], $params['repo'], $params['comment_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForIssueComment_::OPERATION_MATCH:
                $operation = $this->reactions()->createForIssueComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForIssueComment_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForIssueComment_($params['owner'], $params['repo'], $params['comment_id'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForIssue_::OPERATION_MATCH:
                $operation = $this->reactions()->listForIssue_($params['owner'], $params['repo'], $params['issue_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForIssue_::OPERATION_MATCH:
                $operation = $this->reactions()->createForIssue_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForIssue_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForIssue_($params['owner'], $params['repo'], $params['issue_number'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForPullRequestReviewComment_::OPERATION_MATCH:
                $operation = $this->reactions()->listForPullRequestReviewComment_($params['owner'], $params['repo'], $params['comment_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForPullRequestReviewComment_::OPERATION_MATCH:
                $operation = $this->reactions()->createForPullRequestReviewComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForPullRequestComment_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForPullRequestComment_($params['owner'], $params['repo'], $params['comment_id'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForRelease_::OPERATION_MATCH:
                $operation = $this->reactions()->listForRelease_($params['owner'], $params['repo'], $params['release_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5C91Adca674B8B2139054218168F68Fe {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForRelease_::OPERATION_MATCH:
                $operation = $this->reactions()->createForRelease_($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForRelease_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForRelease_($params['owner'], $params['repo'], $params['release_id'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\RateLimit\Get_::OPERATION_MATCH:
                $operation = $this->rateLimit()->get_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RateLimitOverview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\Create_::OPERATION_MATCH:
                $operation = $this->checks()->create_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CheckRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\Get_::OPERATION_MATCH:
                $operation = $this->checks()->get_($params['owner'], $params['repo'], $params['check_run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CheckRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\Update_::OPERATION_MATCH:
                $operation = $this->checks()->update_($params['owner'], $params['repo'], $params['check_run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CheckRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\ListAnnotations_::OPERATION_MATCH:
                $operation = $this->checks()->listAnnotations_($params['owner'], $params['repo'], $params['check_run_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C33D2984B495081F1F782F0Bdbed8A0E5 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\RerequestRun_::OPERATION_MATCH:
                $operation = $this->checks()->rerequestRun_($params['owner'], $params['repo'], $params['check_run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\CreateSuite_::OPERATION_MATCH:
                $operation = $this->checks()->createSuite_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CheckSuite {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\SetSuitesPreferences_::OPERATION_MATCH:
                $operation = $this->checks()->setSuitesPreferences_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CheckSuitePreference {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\GetSuite_::OPERATION_MATCH:
                $operation = $this->checks()->getSuite_($params['owner'], $params['repo'], $params['check_suite_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CheckSuite {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\ListForSuite_::OPERATION_MATCH:
                $operation = $this->checks()->listForSuite_($params['owner'], $params['repo'], $params['check_suite_id'], $params['check_name'], $params['status'], $params['filter'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C60F581B56E9Cea5Bd326503D1C6D1B0F {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\RerequestSuite_::OPERATION_MATCH:
                $operation = $this->checks()->rerequestSuite_($params['owner'], $params['repo'], $params['check_suite_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\ListForRef_::OPERATION_MATCH:
                $operation = $this->checks()->listForRef_($params['owner'], $params['repo'], $params['ref'], $params['check_name'], $params['status'], $params['filter'], $params['per_page'], $params['page'], $params['app_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C60F581B56E9Cea5Bd326503D1C6D1B0F {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\ListSuitesForRef_::OPERATION_MATCH:
                $operation = $this->checks()->listSuitesForRef_($params['owner'], $params['repo'], $params['ref'], $params['app_id'], $params['check_name'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDbc41257F83748969Cced25F894424Cd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateBlob_::OPERATION_MATCH:
                $operation = $this->git()->createBlob_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ShortBlob|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetBlob_::OPERATION_MATCH:
                $operation = $this->git()->getBlob_($params['owner'], $params['repo'], $params['file_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Blob|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateCommit_::OPERATION_MATCH:
                $operation = $this->git()->createCommit_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitCommit|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetCommit_::OPERATION_MATCH:
                $operation = $this->git()->getCommit_($params['owner'], $params['repo'], $params['commit_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitCommit|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\ListMatchingRefs_::OPERATION_MATCH:
                $operation = $this->git()->listMatchingRefs_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C313800Aa2E76Bd5B3C9753E9E9Ae9Ee3 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetRef_::OPERATION_MATCH:
                $operation = $this->git()->getRef_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateRef_::OPERATION_MATCH:
                $operation = $this->git()->createRef_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\DeleteRef_::OPERATION_MATCH:
                $operation = $this->git()->deleteRef_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\UpdateRef_::OPERATION_MATCH:
                $operation = $this->git()->updateRef_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateTag_::OPERATION_MATCH:
                $operation = $this->git()->createTag_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitTag|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetTag_::OPERATION_MATCH:
                $operation = $this->git()->getTag_($params['owner'], $params['repo'], $params['tag_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitTag|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateTree_::OPERATION_MATCH:
                $operation = $this->git()->createTree_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitTree|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetTree_::OPERATION_MATCH:
                $operation = $this->git()->getTree_($params['owner'], $params['repo'], $params['tree_sha'], $params['recursive']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitTree|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\List_::OPERATION_MATCH:
                $operation = $this->pulls()->list_($params['owner'], $params['repo'], $params['state'], $params['head'], $params['base'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2A208909Ef0D9A76Edabd421B01Ca6A2|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\Create_::OPERATION_MATCH:
                $operation = $this->pulls()->create_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\ListReviewCommentsForRepo_::OPERATION_MATCH:
                $operation = $this->pulls()->listReviewCommentsForRepo_($params['owner'], $params['repo'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF89C208Bbcc1Fa8Cdfabfebbde8Ab772 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\GetReviewComment_::OPERATION_MATCH:
                $operation = $this->pulls()->getReviewComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\DeleteReviewComment_::OPERATION_MATCH:
                $operation = $this->pulls()->deleteReviewComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\UpdateReviewComment_::OPERATION_MATCH:
                $operation = $this->pulls()->updateReviewComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReviewComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\Get_::OPERATION_MATCH:
                $operation = $this->pulls()->get_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\Update_::OPERATION_MATCH:
                $operation = $this->pulls()->update_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\ListReviewComments_::OPERATION_MATCH:
                $operation = $this->pulls()->listReviewComments_($params['owner'], $params['repo'], $params['pull_number'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CF89C208Bbcc1Fa8Cdfabfebbde8Ab772 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\CreateReviewComment_::OPERATION_MATCH:
                $operation = $this->pulls()->createReviewComment_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\CreateReplyForReviewComment_::OPERATION_MATCH:
                $operation = $this->pulls()->createReplyForReviewComment_($params['owner'], $params['repo'], $params['pull_number'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\ListCommits_::OPERATION_MATCH:
                $operation = $this->pulls()->listCommits_($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C844E23F82575A50855510A97A1C68898 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\ListFiles_::OPERATION_MATCH:
                $operation = $this->pulls()->listFiles_($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CBd10796Debc7920F91B5617Afd47F727|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\CheckIfMerged_::OPERATION_MATCH:
                $operation = $this->pulls()->checkIfMerged_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\Merge_::OPERATION_MATCH:
                $operation = $this->pulls()->merge_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestMergeResult|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\ListRequestedReviewers_::OPERATION_MATCH:
                $operation = $this->pulls()->listRequestedReviewers_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReviewRequest {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\RequestReviewers_::OPERATION_MATCH:
                $operation = $this->pulls()->requestReviewers_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestSimple|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\RemoveRequestedReviewers_::OPERATION_MATCH:
                $operation = $this->pulls()->removeRequestedReviewers_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestSimple|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\ListReviews_::OPERATION_MATCH:
                $operation = $this->pulls()->listReviews_($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9808Acb55D1D6De88353B547A6D24167 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\CreateReview_::OPERATION_MATCH:
                $operation = $this->pulls()->createReview_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\GetReview_::OPERATION_MATCH:
                $operation = $this->pulls()->getReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\UpdateReview_::OPERATION_MATCH:
                $operation = $this->pulls()->updateReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\DeletePendingReview_::OPERATION_MATCH:
                $operation = $this->pulls()->deletePendingReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\ListCommentsForReview_::OPERATION_MATCH:
                $operation = $this->pulls()->listCommentsForReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CFb4596C0Fc740434Cef2371747A626Ed|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\DismissReview_::OPERATION_MATCH:
                $operation = $this->pulls()->dismissReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\SubmitReview_::OPERATION_MATCH:
                $operation = $this->pulls()->submitReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\UpdateBranch_::OPERATION_MATCH:
                $operation = $this->pulls()->updateBranch_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CA5445A08E16D224F94859Ebaf785C18A|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Code_::OPERATION_MATCH:
                $operation = $this->search()->code_($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDd991Af25805D9830Db3Ab08B503E725|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Commits_::OPERATION_MATCH:
                $operation = $this->search()->commits_($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C22056F0250254Dfc8Db5706A60B6044E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\IssuesAndPullRequests_::OPERATION_MATCH:
                $operation = $this->search()->issuesAndPullRequests_($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C8A0535601F5F7C2Ac2B92903899F3126|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Labels_::OPERATION_MATCH:
                $operation = $this->search()->labels_($params['repository_id'], $params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C3D0B1A33D0E21B9449553352Ee4C6C9D|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Repos_::OPERATION_MATCH:
                $operation = $this->search()->repos_($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CB71A98Bede90C5E5046C1Ef70586Ae6F|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Topics_::OPERATION_MATCH:
                $operation = $this->search()->topics_($params['q'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C050Dfd1E0C4A60Cde55137Ec4864C709 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Users_::OPERATION_MATCH:
                $operation = $this->search()->users_($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC9971B26A226492E08644Fd99C1917A6|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetAuthenticated_::OPERATION_MATCH:
                $operation = $this->users()->getAuthenticated_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CFa9375D5B4Dfa8F391595615Bd0Addf4|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\UpdateAuthenticated_::OPERATION_MATCH:
                $operation = $this->users()->updateAuthenticated_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PrivateUser|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowersForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listFollowersForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowedByAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listFollowedByAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckPersonIsFollowedByAuthenticated_::OPERATION_MATCH:
                $operation = $this->users()->checkPersonIsFollowedByAuthenticated_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Follow_::OPERATION_MATCH:
                $operation = $this->users()->follow_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Unfollow_::OPERATION_MATCH:
                $operation = $this->users()->unfollow_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listGpgKeysForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C4Be7352D2188Dd21500E563C327Cd0D4|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreateGpgKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->createGpgKeyForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GpgKey|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetGpgKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->getGpgKeyForAuthenticatedUser_($params['gpg_key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GpgKey|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeleteGpgKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->deleteGpgKeyForAuthenticatedUser_($params['gpg_key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListPublicSshKeysForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listPublicSshKeysForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C8569D1C942B35A48Ce04Dca29B28Fb71|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreatePublicSshKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->createPublicSshKeyForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Key|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetPublicSshKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->getPublicSshKeyForAuthenticatedUser_($params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Key|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeletePublicSshKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->deletePublicSshKeyForAuthenticatedUser_($params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\List_::OPERATION_MATCH:
                $operation = $this->users()->list_($params['since'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetByUsername_::OPERATION_MATCH:
                $operation = $this->users()->getByUsername_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CFa9375D5B4Dfa8F391595615Bd0Addf4|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowersForUser_::OPERATION_MATCH:
                $operation = $this->users()->listFollowersForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowingForUser_::OPERATION_MATCH:
                $operation = $this->users()->listFollowingForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckFollowingForUser_::OPERATION_MATCH:
                $operation = $this->users()->checkFollowingForUser_($params['username'], $params['target_user']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForUser_::OPERATION_MATCH:
                $operation = $this->users()->listGpgKeysForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C4Be7352D2188Dd21500E563C327Cd0D4 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetContextForUser_::OPERATION_MATCH:
                $operation = $this->users()->getContextForUser_($params['username'], $params['subject_type'], $params['subject_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Hovercard|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListPublicKeysForUser_::OPERATION_MATCH:
                $operation = $this->users()->listPublicKeysForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5C26E46Afe4Dc8D40051D9776F160A55 {
                    return $operation->createResponse($response);
                });
                break;
        }
    }
}
