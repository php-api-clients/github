<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom;

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
    public function meta() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function apps() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function codesOfConduct() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function emojis() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Emojis
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Emojis($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function enterpriseAdmin() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function actions() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function codeScanning() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function secretScanning() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function dependabot() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function billing() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function activity() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function gists() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function gitignore() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function issues() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function licenses() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function markdown() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function orgs() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function oidc() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function codespaces() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function interactions() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function migrations() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function packages() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function projects() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function repos() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function teams() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function reactions() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function rateLimit() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\RateLimit
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\RateLimit($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function checks() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function dependencyGraph() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function git() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function pulls() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function search() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function users() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    /**
     * @return \React\Promise\PromiseInterface<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Root|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77490811Ec6Aee423Cd64C22A2B5B5E5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C437E8818Bedc1D1C6A8A7E209Db56381|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0E8E1845F1Bc82Ea0E7B36D0Bb6E996D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C46B4Faf08De395E78Aaa4B63456Ddd07|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InstallationToken|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C63C9C8546093Eddc0F7344B17E26F896|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCc2Fa361959F5C2Ebcc542Ddf2E3A261|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C85Daf15E4Fca630425Ab45E2Aba40600|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDe13F0F1A91E8C86F2C1D90E147490E2|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CEc27Dba3202C5D416335209B147A39D5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9A3B6Ded8E470Eab041E356Ef497Aeec|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C143D8483Bf88427Ecdccf31C4B84Df34|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeOfConduct|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C79A542C60Fea0A939B2Ff6241Fc22Cd9|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ServerStatistics|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsEnterprisePermissions|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7Ccdeb8D72C56F2084Ef071E7F398831|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SelectedActions|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB4Cf212608E86Be945Cb26F0Ee883938|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerGroupsEnterprise|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5F3B5341Fe53998B5Bf27243A42Db029|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C70992A2B1985E0F30Bf3Dc67Ba7A9E62|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C948655Af6C42D69A42F49158Df1C3402|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageOrgEnterprise|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsGetDefaultWorkflowPermissions|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA766240607F2714081157433E87Abe14|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsOrganizationPermissions|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD86C4818976F8F12B2C9B0E896F6291C|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C11Bbc0C404E1Dacac67952032Beda7Ae|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerGroupsOrg|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD14Fa06Dcf5B5738F5504197E7609Eb5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB0601E51Fc03Ef9031D3Dad84Cee821B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Fd51E546F4Dbe120D78A3534B76Ce0E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsPublicKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationActionsSecret|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDf642215E2806C848A16Ef294379Be7A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1A91B16Fbf38476A7587Bb22E0507C4B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Artifact|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageByRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheList|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Job|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OidcCustomSubRepo|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsRepositoryPermissions|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsWorkflowAccessToRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3F96264280F4E42Bbb4A3Def4C7Bc4E1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C80B828E2203976Fb215Dd2159A745230|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB20125C2E2C4A492F2Eb5Ef9E4F52Eb8|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C59Fc918Ad52E8Aa18611814E35E7Da47|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6C1Be1B26A14C84Ab35C32Ee2E0Fcd2A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRunUsage|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C58E2D92A7Aba442Fdb0A439Eb965962E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsSecret|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE25F066E8D67A0F40D61Cb64Df1Cebf6|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Workflow|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C66C0E6C0739Ea290Bab603396Ea44C1C|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBc37E871E17Fe903B1C649F1083B8F2A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC78B9C183723A3Bb5Ac53690424C6377|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAa25296392E3D9Ad52Fb8E4Fe1451324|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAnalysis|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2F9C313De3F7Bfd4586Bcc096B11A634|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAnalysisDeletion|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5615C8F18C6A5Dde87A6B6Ce3B6B4Bdd|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningCodeqlDatabase|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningSarifsReceipt|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningSarifsStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EnterpriseSecurityAnalysisSettings|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFd814D7C5E2Ff25C0Eb53A2330D6Ae5C|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCb085D9Ebc5899512C96124178Febdda|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C454A8B9E7Fb48Afa72B1Fe7B69Cb356F|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDe3Dabb9C272759Fc560De14Ac7712B1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD473A10774432Df37Acb22F4Ded22Ffb|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotPublicKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationDependabotSecret|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C85584C8E40Be29Bdd8560E2B325Bf492|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7895A235Cda3D308743D24C28426Bd8D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotSecret|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AdvancedSecurityActiveCommitters|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsBillingUsage|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackagesBillingUsage|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CombinedBillingUsage|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Feed|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC0Fbffa58E240B1E3B02B30C16Ca715A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7B1F87F42Ca7F4E6F27Ed1Bcbfcee301|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Thread|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ThreadSubscription|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA5445A08E16D224F94859Ebaf785C18A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF19Ab2103D1Cee92F695Dd9D475183C0|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositorySubscription|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAf9Ce4Aef95F91Ba5Bb8937E005A4Bf1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCa3B5A6Ea5F1333A83F449A6Fd97Dc6D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0C798Ad00F8D3C55Cbd869Ea186B67D0|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C43F872E018E0D7Ee6Ab48Ae6B947F23A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD7C4628D526D62D8495C7C6Cbef013C7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9589B48D06725Dd205Dd68F2Cb85C975|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C43Aae5Cfe9D6C3E12Bb4133Ab827C5B9|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0B3930309F9C72E778A65961Ebbc74Ef|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitignoreTemplate|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBabf466417Ca3993Bac6Dc221711A46E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7Ddbb99E798Ea46E16037A3B2A8616D6|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C91F9Dffd45F76F907A2408Dfb98A8958|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueEvent|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3E04B60Abe35C284A39A331B5A490Adf|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6875E80E7A2F2A7E54Face53445Dd736|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Label|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7E88818B96F4B827A88Bdffeb546E221|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Milestone|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD8C95C094316027Eaa26C6Eaf9500Ad8|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseContent|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD25549Cde7Ef111A37D0A59E619F994A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C19Eb4036F8A42F3C5B379E759Ef04C69|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C197505B37575Ae3739584A4C9Efe0801|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationCustomRepositoryRole|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C292Eea0D3E06B707B2B60E9Fa544B678|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1A135545778A6D3F051B1125A78Fd35C|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C8C7417Cb08B593A169C0D2A998Ca13C8|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationInvitation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7Eb9Ad2993C99C60Bc995556Bf16C836|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDfc9Ce9066Fbb36Ecf1129974E678B26|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OidcCustomSub|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C99A344Bb924Dc8320E4Bc765919868F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE2D72762D5496B28A74Db5Be33944579|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesPublicKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesOrgSecret|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3258430Cc798035Cd54C186Bcc49C1F3|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDcad5E8F2Eec4De5B5Cb16Bffb04Ba48|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFc45C706Ec04C4547F6921E839268B9B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C28C9367Cd9884680C4B3F55F87F3Dfd1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepoCodespacesSecret|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C60C051Ca0D5D3B740Bd08E439D5315E1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesUserPublicKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesSecret|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespaceExportDetails|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFa125E0Ae31E9C155F33Bc899Ee2A17F|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InteractionLimitResponse|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C48B3C8D5Bb6D982Db53C27240Ef5E5B4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF937F3514A781A237E7E511Bc6974285|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PorterAuthor|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC2674569Ad4Aaeb221366Afde4669340|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF3D5Dbb128F908794438D8455A198Be4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Package|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C20F464Eb74B57Bb1070Bc9803667E3C3|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAb0747A9430Dc79D395Cf3A981F7F590|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF694556E3Cc88993A89F1Ed7Afdf4E13|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2F32Ad791Ebef4439Dfb273837Ce0D99|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C84C5Bf99Acadc6Ec8B2A32F2014E1E35|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectColumn|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C802A2Aa52727B9F7C501777Ea4F9E4A3|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C338B4411A0Be86E1C6C9A568915F6984|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C17C7343Ca9Be26E0B6160460Fc53E98B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Autolink|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF51Df0E3Ba8C9D41Aff6C2Dae92F8477|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchWithProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranch|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchPullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C81C377Bf6B21Ffcf535B9A46Dc81E5F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeownersErrors|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C8Cfb8Cb2505342C5Aa9B51775D830635|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositoryInvitation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositoryCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDb6974Aa7Ac26B1Fccca8566752Cd2D3|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C844E23F82575A50855510A97A1C68898|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C44F966765547C3442B15293D242E13E2|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Afdcb273A556616D8867Fd50A161738|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CombinedCommitStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1Ac05Dc4833Fe01C300C8C2729Df70Ad|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommunityProfile|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComparison|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentTree|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C96Bca9F5F23C9286Db2F0596100Bc507|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA7Ca0Fcacca5Fd9Bfaa0D26Cc7352Dca|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Deployment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C75F4Dcd10Cf090Fdc9118C43Cb1F9Acb|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3502Cc2A1Ef0B1884Bcdfcf828660Ec4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Environment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAb60B6A9C2C98408237190D09Ed58803|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6E5961982487E4570Ac7Cd969C273Cdd|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF20275E051D790E6Ec04687F05E98F03|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE8D2B89E98E676346A45560E7E331E0A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeployKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Language|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MergedUpstream|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Page|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6D863E2F1F1Ab47D84D0Ed073F49Df30|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuildStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuild|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageDeployment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHealthCheck|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentFile|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD0C2695E7C5F50Ea337C2965Ffe11E6D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseNotesContent|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0Db7312560Abfd79A4Bfefef0A3Baef7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9Bf7717E69D86Ca1B138987Fdb5033B6|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C06431446E4E9E28A63Fd6A22436F7D82|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0B4Ef1B3E0499Cc08F846Cd359C05D76|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ParticipationStats|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Status|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CEc94E54447F15Bea9F91Abe39Ef7B5F6|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE85527Aa1D6903Db89F29Ddfaed8F90F|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TagProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Topic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CloneTraffic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2Fe03Fbd1Bce5975C0731D749A144878|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0637F403D979870Da0B4B4832D880Aa4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ViewTraffic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C48C27F99490Bb9F6F3Fe1Ca3B71E7D81|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5730D3B2Ef04C7A9B60Fe46C96Fa0B20|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C039E6Cf714Fc77Af55Cad65Fde5A5718|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C45206B806A9565Db2Ebe89Ea38D6Dc95|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimitOverview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C33D2984B495081F1F782F0Bdbed8A0E5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckSuite|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckSuitePreference|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C60F581B56E9Cea5Bd326503D1C6D1B0F|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFbc8Dc67261Ec91736E48C1Cf35B8429|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependencyGraphDiff|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C8638D96643Fcf5Ffcb917886B51C84Eb|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ShortBlob|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Blob|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitCommit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C313800Aa2E76Bd5B3C9753E9E9Ae9Ee3|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTag|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTree|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF89C208Bbcc1Fa8Cdfabfebbde8Ab772|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBd10796Debc7920F91B5617Afd47F727|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMergeResult|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewRequest|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9808Acb55D1D6De88353B547A6D24167|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFb4596C0Fc740434Cef2371747A626Ed|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CEba9Ffad53Bf3D07A128329D2F082D34|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1866497B9C15615Ec03A90Fac4282D1B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2Ad43Aedc57E80Fd3A21B0Feba475487|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3D0B1A33D0E21B9449553352Ee4C6C9D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB71A98Bede90C5E5046C1Ef70586Ae6F|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C050Dfd1E0C4A60Cde55137Ec4864C709|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC9971B26A226492E08644Fd99C1917A6|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFa9375D5B4Dfa8F391595615Bd0Addf4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PrivateUser|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD51E01Cc5874C6066A75A0Fc85B55D9B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0F67251Be1Ebeacdc9100Fcc0Bd1D93E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C8569D1C942B35A48Ce04Dca29B28Fb71|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Key|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C015E31Db5815A354C246A2918708Fa5E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SshSigningKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hovercard|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5C26E46Afe4Dc8D40051D9776F160A55>
     */
    public function call(string $call, array $params = array())
    {
        switch ($call) {
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Root_::OPERATION_MATCH:
                $operation = $this->meta()->root_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Root {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Get_::OPERATION_MATCH:
                $operation = $this->meta()->get_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetOctocat_::OPERATION_MATCH:
                $operation = $this->meta()->getOctocat_($params['s']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetAllVersions_::OPERATION_MATCH:
                $operation = $this->meta()->getAllVersions_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77490811Ec6Aee423Cd64C22A2B5B5E5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetZen_::OPERATION_MATCH:
                $operation = $this->meta()->getZen_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetAuthenticated_::OPERATION_MATCH:
                $operation = $this->apps()->getAuthenticated_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateFromManifest_::OPERATION_MATCH:
                $operation = $this->apps()->createFromManifest_($params['code']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C437E8818Bedc1D1C6A8A7E209Db56381|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookConfigForApp_::OPERATION_MATCH:
                $operation = $this->apps()->getWebhookConfigForApp_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UpdateWebhookConfigForApp_::OPERATION_MATCH:
                $operation = $this->apps()->updateWebhookConfigForApp_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListWebhookDeliveries_::OPERATION_MATCH:
                $operation = $this->apps()->listWebhookDeliveries_($params['per_page'], $params['cursor'], $params['redelivery']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0E8E1845F1Bc82Ea0E7B36D0Bb6E996D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookDelivery_::OPERATION_MATCH:
                $operation = $this->apps()->getWebhookDelivery_($params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RedeliverWebhookDelivery_::OPERATION_MATCH:
                $operation = $this->apps()->redeliverWebhookDelivery_($params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallations_::OPERATION_MATCH:
                $operation = $this->apps()->listInstallations_($params['per_page'], $params['page'], $params['since'], $params['outdated']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C46B4Faf08De395E78Aaa4B63456Ddd07 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->getInstallation_($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->deleteInstallation_($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateInstallationAccessToken_::OPERATION_MATCH:
                $operation = $this->apps()->createInstallationAccessToken_($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InstallationToken|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\SuspendInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->suspendInstallation_($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UnsuspendInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->unsuspendInstallation_($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteAuthorization_::OPERATION_MATCH:
                $operation = $this->apps()->deleteAuthorization_($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CheckToken_::OPERATION_MATCH:
                $operation = $this->apps()->checkToken_($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteToken_::OPERATION_MATCH:
                $operation = $this->apps()->deleteToken_($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ResetToken_::OPERATION_MATCH:
                $operation = $this->apps()->resetToken_($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ScopeToken_::OPERATION_MATCH:
                $operation = $this->apps()->scopeToken_($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetBySlug_::OPERATION_MATCH:
                $operation = $this->apps()->getBySlug_($params['app_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListReposAccessibleToInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->listReposAccessibleToInstallation_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C63C9C8546093Eddc0F7344B17E26F896|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeInstallationAccessToken_::OPERATION_MATCH:
                $operation = $this->apps()->revokeInstallationAccessToken_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccount_::OPERATION_MATCH:
                $operation = $this->apps()->getSubscriptionPlanForAccount_($params['account_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlans_::OPERATION_MATCH:
                $operation = $this->apps()->listPlans_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCc2Fa361959F5C2Ebcc542Ddf2E3A261|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlan_::OPERATION_MATCH:
                $operation = $this->apps()->listAccountsForPlan_($params['plan_id'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C85Daf15E4Fca630425Ab45E2Aba40600|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccountStubbed_::OPERATION_MATCH:
                $operation = $this->apps()->getSubscriptionPlanForAccountStubbed_($params['account_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlansStubbed_::OPERATION_MATCH:
                $operation = $this->apps()->listPlansStubbed_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCc2Fa361959F5C2Ebcc542Ddf2E3A261|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlanStubbed_::OPERATION_MATCH:
                $operation = $this->apps()->listAccountsForPlanStubbed_($params['plan_id'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C85Daf15E4Fca630425Ab45E2Aba40600|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetOrgInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->getOrgInstallation_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetRepoInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->getRepoInstallation_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->apps()->listInstallationsForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDe13F0F1A91E8C86F2C1D90E147490E2|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationReposForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->apps()->listInstallationReposForAuthenticatedUser_($params['installation_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CEc27Dba3202C5D416335209B147A39D5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\AddRepoToInstallationForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->apps()->addRepoToInstallationForAuthenticatedUser_($params['installation_id'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->apps()->removeRepoFromInstallationForAuthenticatedUser_($params['installation_id'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->apps()->listSubscriptionsForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9A3B6Ded8E470Eab041E356Ef497Aeec|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUserStubbed_::OPERATION_MATCH:
                $operation = $this->apps()->listSubscriptionsForAuthenticatedUserStubbed_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9A3B6Ded8E470Eab041E356Ef497Aeec|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetUserInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->getUserInstallation_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetAllCodesOfConduct_::OPERATION_MATCH:
                $operation = $this->codesOfConduct()->getAllCodesOfConduct_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C143D8483Bf88427Ecdccf31C4B84Df34 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetConductCode_::OPERATION_MATCH:
                $operation = $this->codesOfConduct()->getConductCode_($params['key']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeOfConduct|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Emojis\Get_::OPERATION_MATCH:
                $operation = $this->emojis()->get_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C79A542C60Fea0A939B2Ff6241Fc22Cd9 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetServerStatistics_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getServerStatistics_($params['enterprise_or_org'], $params['date_start'], $params['date_end']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ServerStatistics {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getGithubActionsPermissionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsEnterprisePermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setGithubActionsPermissionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelectedOrganizationsEnabledGithubActionsEnterprise_($params['enterprise'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7Ccdeb8D72C56F2084Ef071E7F398831 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setSelectedOrganizationsEnabledGithubActionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->enableSelectedOrganizationGithubActionsEnterprise_($params['enterprise'], $params['org_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->disableSelectedOrganizationGithubActionsEnterprise_($params['enterprise'], $params['org_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getAllowedActionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SelectedActions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setAllowedActionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelfHostedRunnerGroupsForEnterprise_($params['enterprise'], $params['per_page'], $params['page'], $params['visible_to_organization']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB4Cf212608E86Be945Cb26F0Ee883938 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createSelfHostedRunnerGroupForEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerGroupsEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getSelfHostedRunnerGroupForEnterprise_($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerGroupsEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deleteSelfHostedRunnerGroupFromEnterprise_($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updateSelfHostedRunnerGroupForEnterprise_($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerGroupsEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listOrgAccessToSelfHostedRunnerGroupInEnterprise_($params['enterprise'], $params['runner_group_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7Ccdeb8D72C56F2084Ef071E7F398831 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setOrgAccessToSelfHostedRunnerGroupInEnterprise_($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->addOrgAccessToSelfHostedRunnerGroupInEnterprise_($params['enterprise'], $params['runner_group_id'], $params['org_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removeOrgAccessToSelfHostedRunnerGroupInEnterprise_($params['enterprise'], $params['runner_group_id'], $params['org_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelfHostedRunnersInGroupForEnterprise_($params['enterprise'], $params['runner_group_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5F3B5341Fe53998B5Bf27243A42Db029 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setSelfHostedRunnersInGroupForEnterprise_($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->addSelfHostedRunnerToGroupForEnterprise_($params['enterprise'], $params['runner_group_id'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removeSelfHostedRunnerFromGroupForEnterprise_($params['enterprise'], $params['runner_group_id'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelfHostedRunnersForEnterprise_($params['enterprise'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C70992A2B1985E0F30Bf3Dc67Ba7A9E62 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listRunnerApplicationsForEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C948655Af6C42D69A42F49158Df1C3402 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createRegistrationTokenForEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createRemoveTokenForEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getSelfHostedRunnerForEnterprise_($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deleteSelfHostedRunnerFromEnterprise_($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listLabelsForSelfHostedRunnerForEnterprise_($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetCustomLabelsForSelfHostedRunnerForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setCustomLabelsForSelfHostedRunnerForEnterprise_($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->addCustomLabelsToSelfHostedRunnerForEnterprise_($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removeAllCustomLabelsFromSelfHostedRunnerForEnterprise_($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removeCustomLabelFromSelfHostedRunnerForEnterprise_($params['enterprise'], $params['runner_id'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageForEnterprise_::OPERATION_MATCH:
                $operation = $this->actions()->getActionsCacheUsageForEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageOrgEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsEnterprise_::OPERATION_MATCH:
                $operation = $this->actions()->getGithubActionsDefaultWorkflowPermissionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsGetDefaultWorkflowPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsEnterprise_::OPERATION_MATCH:
                $operation = $this->actions()->setGithubActionsDefaultWorkflowPermissionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->getActionsCacheUsageForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageOrgEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageByRepoForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->getActionsCacheUsageByRepoForOrg_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA766240607F2714081157433E87Abe14 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->getGithubActionsPermissionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsOrganizationPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->setGithubActionsPermissionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->listSelectedRepositoriesEnabledGithubActionsOrganization_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD86C4818976F8F12B2C9B0E896F6291C {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->setSelectedRepositoriesEnabledGithubActionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->enableSelectedRepositoryGithubActionsOrganization_($params['org'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->disableSelectedRepositoryGithubActionsOrganization_($params['org'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->getAllowedActionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SelectedActions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->setAllowedActionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->getGithubActionsDefaultWorkflowPermissionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsGetDefaultWorkflowPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->setGithubActionsDefaultWorkflowPermissionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnerGroupsForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->listSelfHostedRunnerGroupsForOrg_($params['org'], $params['per_page'], $params['page'], $params['visible_to_repository']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C11Bbc0C404E1Dacac67952032Beda7Ae {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateSelfHostedRunnerGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->createSelfHostedRunnerGroupForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerGroupsOrg {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->getSelfHostedRunnerGroupForOrg_($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerGroupsOrg {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg_::OPERATION_MATCH:
                $operation = $this->actions()->deleteSelfHostedRunnerGroupFromOrg_($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->updateSelfHostedRunnerGroupForOrg_($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerGroupsOrg {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg_::OPERATION_MATCH:
                $operation = $this->actions()->listRepoAccessToSelfHostedRunnerGroupInOrg_($params['org'], $params['runner_group_id'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD14Fa06Dcf5B5738F5504197E7609Eb5 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg_::OPERATION_MATCH:
                $operation = $this->actions()->setRepoAccessToSelfHostedRunnerGroupInOrg_($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg_::OPERATION_MATCH:
                $operation = $this->actions()->removeRepoAccessToSelfHostedRunnerGroupInOrg_($params['org'], $params['runner_group_id'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersInGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->listSelfHostedRunnersInGroupForOrg_($params['org'], $params['runner_group_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5F3B5341Fe53998B5Bf27243A42Db029 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelfHostedRunnersInGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->setSelfHostedRunnersInGroupForOrg_($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelfHostedRunnerToGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->addSelfHostedRunnerToGroupForOrg_($params['org'], $params['runner_group_id'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelfHostedRunnerFromGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->removeSelfHostedRunnerFromGroupForOrg_($params['org'], $params['runner_group_id'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->listSelfHostedRunnersForOrg_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB0601E51Fc03Ef9031D3Dad84Cee821B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->listRunnerApplicationsForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C948655Af6C42D69A42F49158Df1C3402 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->createRegistrationTokenForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->createRemoveTokenForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->getSelfHostedRunnerForOrg_($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromOrg_::OPERATION_MATCH:
                $operation = $this->actions()->deleteSelfHostedRunnerFromOrg_($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->listLabelsForSelfHostedRunnerForOrg_($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->setCustomLabelsForSelfHostedRunnerForOrg_($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->addCustomLabelsToSelfHostedRunnerForOrg_($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->removeAllCustomLabelsFromSelfHostedRunnerForOrg_($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->removeCustomLabelFromSelfHostedRunnerForOrg_($params['org'], $params['runner_id'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListOrgSecrets_::OPERATION_MATCH:
                $operation = $this->actions()->listOrgSecrets_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Fd51E546F4Dbe120D78A3534B76Ce0E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgPublicKey_::OPERATION_MATCH:
                $operation = $this->actions()->getOrgPublicKey_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->getOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationActionsSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->createOrUpdateOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->deleteOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedReposForOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->listSelectedReposForOrgSecret_($params['org'], $params['secret_name'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDf642215E2806C848A16Ef294379Be7A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedReposForOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->setSelectedReposForOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelectedRepoToOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->addSelectedRepoToOrgSecret_($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelectedRepoFromOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->removeSelectedRepoFromOrgSecret_($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListArtifactsForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->listArtifactsForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1A91B16Fbf38476A7587Bb22E0507C4B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetArtifact_::OPERATION_MATCH:
                $operation = $this->actions()->getArtifact_($params['owner'], $params['repo'], $params['artifact_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Artifact {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteArtifact_::OPERATION_MATCH:
                $operation = $this->actions()->deleteArtifact_($params['owner'], $params['repo'], $params['artifact_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadArtifact_::OPERATION_MATCH:
                $operation = $this->actions()->downloadArtifact_($params['owner'], $params['repo'], $params['artifact_id'], $params['archive_format']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsage_::OPERATION_MATCH:
                $operation = $this->actions()->getActionsCacheUsage_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageByRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheList_::OPERATION_MATCH:
                $operation = $this->actions()->getActionsCacheList_($params['owner'], $params['repo'], $params['per_page'], $params['page'], $params['ref'], $params['key'], $params['sort'], $params['direction']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheList {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheByKey_::OPERATION_MATCH:
                $operation = $this->actions()->deleteActionsCacheByKey_($params['owner'], $params['repo'], $params['key'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheList {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheById_::OPERATION_MATCH:
                $operation = $this->actions()->deleteActionsCacheById_($params['owner'], $params['repo'], $params['cache_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetJobForWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->getJobForWorkflowRun_($params['owner'], $params['repo'], $params['job_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Job {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadJobLogsForWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->downloadJobLogsForWorkflowRun_($params['owner'], $params['repo'], $params['job_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunJobForWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->reRunJobForWorkflowRun_($params['owner'], $params['repo'], $params['job_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetCustomOidcSubClaimForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->getCustomOidcSubClaimForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OidcCustomSubRepo|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomOidcSubClaimForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->setCustomOidcSubClaimForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsRepository_::OPERATION_MATCH:
                $operation = $this->actions()->getGithubActionsPermissionsRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsRepositoryPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsRepository_::OPERATION_MATCH:
                $operation = $this->actions()->setGithubActionsPermissionsRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowAccessToRepository_::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflowAccessToRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsWorkflowAccessToRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetWorkflowAccessToRepository_::OPERATION_MATCH:
                $operation = $this->actions()->setWorkflowAccessToRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsRepository_::OPERATION_MATCH:
                $operation = $this->actions()->getAllowedActionsRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SelectedActions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsRepository_::OPERATION_MATCH:
                $operation = $this->actions()->setAllowedActionsRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository_::OPERATION_MATCH:
                $operation = $this->actions()->getGithubActionsDefaultWorkflowPermissionsRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsGetDefaultWorkflowPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository_::OPERATION_MATCH:
                $operation = $this->actions()->setGithubActionsDefaultWorkflowPermissionsRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->listSelfHostedRunnersForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB0601E51Fc03Ef9031D3Dad84Cee821B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->listRunnerApplicationsForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C948655Af6C42D69A42F49158Df1C3402 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->createRegistrationTokenForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->createRemoveTokenForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->getSelfHostedRunnerForRepo_($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromRepo_::OPERATION_MATCH:
                $operation = $this->actions()->deleteSelfHostedRunnerFromRepo_($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->listLabelsForSelfHostedRunnerForRepo_($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->setCustomLabelsForSelfHostedRunnerForRepo_($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->addCustomLabelsToSelfHostedRunnerForRepo_($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->removeAllCustomLabelsFromSelfHostedRunnerForRepo_($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->removeCustomLabelFromSelfHostedRunnerForRepo_($params['owner'], $params['repo'], $params['runner_id'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRunsForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->listWorkflowRunsForRepo_($params['owner'], $params['repo'], $params['actor'], $params['branch'], $params['event'], $params['status'], $params['per_page'], $params['page'], $params['created'], $params['exclude_pull_requests'], $params['check_suite_id'], $params['head_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3F96264280F4E42Bbb4A3Def4C7Bc4E1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflowRun_($params['owner'], $params['repo'], $params['run_id'], $params['exclude_pull_requests']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->deleteWorkflowRun_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetReviewsForRun_::OPERATION_MATCH:
                $operation = $this->actions()->getReviewsForRun_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C80B828E2203976Fb215Dd2159A745230 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ApproveWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->approveWorkflowRun_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRunArtifacts_::OPERATION_MATCH:
                $operation = $this->actions()->listWorkflowRunArtifacts_($params['owner'], $params['repo'], $params['run_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1A91B16Fbf38476A7587Bb22E0507C4B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunAttempt_::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflowRunAttempt_($params['owner'], $params['repo'], $params['run_id'], $params['attempt_number'], $params['exclude_pull_requests']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListJobsForWorkflowRunAttempt_::OPERATION_MATCH:
                $operation = $this->actions()->listJobsForWorkflowRunAttempt_($params['owner'], $params['repo'], $params['run_id'], $params['attempt_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB20125C2E2C4A492F2Eb5Ef9E4F52Eb8|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadWorkflowRunAttemptLogs_::OPERATION_MATCH:
                $operation = $this->actions()->downloadWorkflowRunAttemptLogs_($params['owner'], $params['repo'], $params['run_id'], $params['attempt_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CancelWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->cancelWorkflowRun_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListJobsForWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->listJobsForWorkflowRun_($params['owner'], $params['repo'], $params['run_id'], $params['filter'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB20125C2E2C4A492F2Eb5Ef9E4F52Eb8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadWorkflowRunLogs_::OPERATION_MATCH:
                $operation = $this->actions()->downloadWorkflowRunLogs_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRunLogs_::OPERATION_MATCH:
                $operation = $this->actions()->deleteWorkflowRunLogs_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetPendingDeploymentsForRun_::OPERATION_MATCH:
                $operation = $this->actions()->getPendingDeploymentsForRun_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C59Fc918Ad52E8Aa18611814E35E7Da47 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReviewPendingDeploymentsForRun_::OPERATION_MATCH:
                $operation = $this->actions()->reviewPendingDeploymentsForRun_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6C1Be1B26A14C84Ab35C32Ee2E0Fcd2A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunWorkflow_::OPERATION_MATCH:
                $operation = $this->actions()->reRunWorkflow_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunWorkflowFailedJobs_::OPERATION_MATCH:
                $operation = $this->actions()->reRunWorkflowFailedJobs_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunUsage_::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflowRunUsage_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRunUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoSecrets_::OPERATION_MATCH:
                $operation = $this->actions()->listRepoSecrets_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C58E2D92A7Aba442Fdb0A439Eb965962E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoPublicKey_::OPERATION_MATCH:
                $operation = $this->actions()->getRepoPublicKey_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoSecret_::OPERATION_MATCH:
                $operation = $this->actions()->getRepoSecret_($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateRepoSecret_::OPERATION_MATCH:
                $operation = $this->actions()->createOrUpdateRepoSecret_($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteRepoSecret_::OPERATION_MATCH:
                $operation = $this->actions()->deleteRepoSecret_($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoWorkflows_::OPERATION_MATCH:
                $operation = $this->actions()->listRepoWorkflows_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE25F066E8D67A0F40D61Cb64Df1Cebf6 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflow_::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflow_($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Workflow {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DisableWorkflow_::OPERATION_MATCH:
                $operation = $this->actions()->disableWorkflow_($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateWorkflowDispatch_::OPERATION_MATCH:
                $operation = $this->actions()->createWorkflowDispatch_($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableWorkflow_::OPERATION_MATCH:
                $operation = $this->actions()->enableWorkflow_($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRuns_::OPERATION_MATCH:
                $operation = $this->actions()->listWorkflowRuns_($params['owner'], $params['repo'], $params['workflow_id'], $params['actor'], $params['branch'], $params['event'], $params['status'], $params['per_page'], $params['page'], $params['created'], $params['exclude_pull_requests'], $params['check_suite_id'], $params['head_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3F96264280F4E42Bbb4A3Def4C7Bc4E1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowUsage_::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflowUsage_($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListEnvironmentSecrets_::OPERATION_MATCH:
                $operation = $this->actions()->listEnvironmentSecrets_($params['repository_id'], $params['environment_name'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C58E2D92A7Aba442Fdb0A439Eb965962E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentPublicKey_::OPERATION_MATCH:
                $operation = $this->actions()->getEnvironmentPublicKey_($params['repository_id'], $params['environment_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentSecret_::OPERATION_MATCH:
                $operation = $this->actions()->getEnvironmentSecret_($params['repository_id'], $params['environment_name'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateEnvironmentSecret_::OPERATION_MATCH:
                $operation = $this->actions()->createOrUpdateEnvironmentSecret_($params['repository_id'], $params['environment_name'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentSecret_::OPERATION_MATCH:
                $operation = $this->actions()->deleteEnvironmentSecret_($params['repository_id'], $params['environment_name'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForEnterprise_::OPERATION_MATCH:
                $operation = $this->codeScanning()->listAlertsForEnterprise_($params['enterprise'], $params['tool_name'], $params['tool_guid'], $params['before'], $params['after'], $params['page'], $params['per_page'], $params['direction'], $params['state'], $params['sort']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C66C0E6C0739Ea290Bab603396Ea44C1C|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForOrg_::OPERATION_MATCH:
                $operation = $this->codeScanning()->listAlertsForOrg_($params['org'], $params['tool_name'], $params['tool_guid'], $params['before'], $params['after'], $params['page'], $params['per_page'], $params['direction'], $params['state'], $params['sort'], $params['severity']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C66C0E6C0739Ea290Bab603396Ea44C1C|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForRepo_::OPERATION_MATCH:
                $operation = $this->codeScanning()->listAlertsForRepo_($params['owner'], $params['repo'], $params['tool_name'], $params['tool_guid'], $params['page'], $params['per_page'], $params['ref'], $params['direction'], $params['sort'], $params['state'], $params['severity']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBc37E871E17Fe903B1C649F1083B8F2A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetAlert_::OPERATION_MATCH:
                $operation = $this->codeScanning()->getAlert_($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UpdateAlert_::OPERATION_MATCH:
                $operation = $this->codeScanning()->updateAlert_($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertInstances_::OPERATION_MATCH:
                $operation = $this->codeScanning()->listAlertInstances_($params['owner'], $params['repo'], $params['alert_number'], $params['page'], $params['per_page'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC78B9C183723A3Bb5Ac53690424C6377|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListRecentAnalyses_::OPERATION_MATCH:
                $operation = $this->codeScanning()->listRecentAnalyses_($params['owner'], $params['repo'], $params['tool_name'], $params['tool_guid'], $params['page'], $params['per_page'], $params['ref'], $params['sarif_id'], $params['direction'], $params['sort']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAa25296392E3D9Ad52Fb8E4Fe1451324|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetAnalysis_::OPERATION_MATCH:
                $operation = $this->codeScanning()->getAnalysis_($params['owner'], $params['repo'], $params['analysis_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAnalysis|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2F9C313De3F7Bfd4586Bcc096B11A634|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\DeleteAnalysis_::OPERATION_MATCH:
                $operation = $this->codeScanning()->deleteAnalysis_($params['owner'], $params['repo'], $params['analysis_id'], $params['confirm_delete']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAnalysisDeletion|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListCodeqlDatabases_::OPERATION_MATCH:
                $operation = $this->codeScanning()->listCodeqlDatabases_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5615C8F18C6A5Dde87A6B6Ce3B6B4Bdd|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetCodeqlDatabase_::OPERATION_MATCH:
                $operation = $this->codeScanning()->getCodeqlDatabase_($params['owner'], $params['repo'], $params['language']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningCodeqlDatabase|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UploadSarif_::OPERATION_MATCH:
                $operation = $this->codeScanning()->uploadSarif_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningSarifsReceipt|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetSarif_::OPERATION_MATCH:
                $operation = $this->codeScanning()->getSarif_($params['owner'], $params['repo'], $params['sarif_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningSarifsStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetSecurityAnalysisSettingsForEnterprise_::OPERATION_MATCH:
                $operation = $this->secretScanning()->getSecurityAnalysisSettingsForEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EnterpriseSecurityAnalysisSettings|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise_::OPERATION_MATCH:
                $operation = $this->secretScanning()->patchSecurityAnalysisSettingsForEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForEnterprise_::OPERATION_MATCH:
                $operation = $this->secretScanning()->listAlertsForEnterprise_($params['enterprise'], $params['state'], $params['secret_type'], $params['resolution'], $params['sort'], $params['direction'], $params['per_page'], $params['before'], $params['after']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFd814D7C5E2Ff25C0Eb53A2330D6Ae5C|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\PostSecurityProductEnablementForEnterprise_::OPERATION_MATCH:
                $operation = $this->secretScanning()->postSecurityProductEnablementForEnterprise_($params['enterprise'], $params['security_product'], $params['enablement']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForOrg_::OPERATION_MATCH:
                $operation = $this->secretScanning()->listAlertsForOrg_($params['org'], $params['state'], $params['secret_type'], $params['resolution'], $params['sort'], $params['direction'], $params['page'], $params['per_page'], $params['before'], $params['after']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFd814D7C5E2Ff25C0Eb53A2330D6Ae5C|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForRepo_::OPERATION_MATCH:
                $operation = $this->secretScanning()->listAlertsForRepo_($params['owner'], $params['repo'], $params['state'], $params['secret_type'], $params['resolution'], $params['sort'], $params['direction'], $params['page'], $params['per_page'], $params['before'], $params['after']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCb085D9Ebc5899512C96124178Febdda|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetAlert_::OPERATION_MATCH:
                $operation = $this->secretScanning()->getAlert_($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\UpdateAlert_::OPERATION_MATCH:
                $operation = $this->secretScanning()->updateAlert_($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListLocationsForAlert_::OPERATION_MATCH:
                $operation = $this->secretScanning()->listLocationsForAlert_($params['owner'], $params['repo'], $params['alert_number'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C454A8B9E7Fb48Afa72B1Fe7B69Cb356F|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForEnterprise_::OPERATION_MATCH:
                $operation = $this->dependabot()->listAlertsForEnterprise_($params['enterprise'], $params['state'], $params['severity'], $params['ecosystem'], $params['package'], $params['scope'], $params['sort'], $params['direction'], $params['before'], $params['after'], $params['first'], $params['last'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDe3Dabb9C272759Fc560De14Ac7712B1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForOrg_::OPERATION_MATCH:
                $operation = $this->dependabot()->listAlertsForOrg_($params['org'], $params['state'], $params['severity'], $params['ecosystem'], $params['package'], $params['scope'], $params['sort'], $params['direction'], $params['before'], $params['after'], $params['first'], $params['last'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDe3Dabb9C272759Fc560De14Ac7712B1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListOrgSecrets_::OPERATION_MATCH:
                $operation = $this->dependabot()->listOrgSecrets_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD473A10774432Df37Acb22F4Ded22Ffb {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetOrgPublicKey_::OPERATION_MATCH:
                $operation = $this->dependabot()->getOrgPublicKey_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetOrgSecret_::OPERATION_MATCH:
                $operation = $this->dependabot()->getOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationDependabotSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateOrgSecret_::OPERATION_MATCH:
                $operation = $this->dependabot()->createOrUpdateOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteOrgSecret_::OPERATION_MATCH:
                $operation = $this->dependabot()->deleteOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListSelectedReposForOrgSecret_::OPERATION_MATCH:
                $operation = $this->dependabot()->listSelectedReposForOrgSecret_($params['org'], $params['secret_name'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDf642215E2806C848A16Ef294379Be7A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\SetSelectedReposForOrgSecret_::OPERATION_MATCH:
                $operation = $this->dependabot()->setSelectedReposForOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\AddSelectedRepoToOrgSecret_::OPERATION_MATCH:
                $operation = $this->dependabot()->addSelectedRepoToOrgSecret_($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\RemoveSelectedRepoFromOrgSecret_::OPERATION_MATCH:
                $operation = $this->dependabot()->removeSelectedRepoFromOrgSecret_($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForRepo_::OPERATION_MATCH:
                $operation = $this->dependabot()->listAlertsForRepo_($params['owner'], $params['repo'], $params['state'], $params['severity'], $params['ecosystem'], $params['package'], $params['manifest'], $params['scope'], $params['sort'], $params['direction'], $params['page'], $params['per_page'], $params['before'], $params['after'], $params['first'], $params['last']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C85584C8E40Be29Bdd8560E2B325Bf492|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetAlert_::OPERATION_MATCH:
                $operation = $this->dependabot()->getAlert_($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\UpdateAlert_::OPERATION_MATCH:
                $operation = $this->dependabot()->updateAlert_($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListRepoSecrets_::OPERATION_MATCH:
                $operation = $this->dependabot()->listRepoSecrets_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7895A235Cda3D308743D24C28426Bd8D {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoPublicKey_::OPERATION_MATCH:
                $operation = $this->dependabot()->getRepoPublicKey_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoSecret_::OPERATION_MATCH:
                $operation = $this->dependabot()->getRepoSecret_($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateRepoSecret_::OPERATION_MATCH:
                $operation = $this->dependabot()->createOrUpdateRepoSecret_($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteRepoSecret_::OPERATION_MATCH:
                $operation = $this->dependabot()->deleteRepoSecret_($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubAdvancedSecurityBillingGhe_::OPERATION_MATCH:
                $operation = $this->billing()->getGithubAdvancedSecurityBillingGhe_($params['enterprise'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AdvancedSecurityActiveCommitters|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingOrg_::OPERATION_MATCH:
                $operation = $this->billing()->getGithubActionsBillingOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubAdvancedSecurityBillingOrg_::OPERATION_MATCH:
                $operation = $this->billing()->getGithubAdvancedSecurityBillingOrg_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AdvancedSecurityActiveCommitters|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingOrg_::OPERATION_MATCH:
                $operation = $this->billing()->getGithubPackagesBillingOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackagesBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingOrg_::OPERATION_MATCH:
                $operation = $this->billing()->getSharedStorageBillingOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CombinedBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingUser_::OPERATION_MATCH:
                $operation = $this->billing()->getGithubActionsBillingUser_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingUser_::OPERATION_MATCH:
                $operation = $this->billing()->getGithubPackagesBillingUser_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackagesBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingUser_::OPERATION_MATCH:
                $operation = $this->billing()->getSharedStorageBillingUser_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CombinedBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEvents_::OPERATION_MATCH:
                $operation = $this->activity()->listPublicEvents_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetFeeds_::OPERATION_MATCH:
                $operation = $this->activity()->getFeeds_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Feed {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEventsForRepoNetwork_::OPERATION_MATCH:
                $operation = $this->activity()->listPublicEventsForRepoNetwork_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListNotificationsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listNotificationsForAuthenticatedUser_($params['all'], $params['participating'], $params['since'], $params['before'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC0Fbffa58E240B1E3B02B30C16Ca715A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkNotificationsAsRead_::OPERATION_MATCH:
                $operation = $this->activity()->markNotificationsAsRead_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7B1F87F42Ca7F4E6F27Ed1Bcbfcee301|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThread_::OPERATION_MATCH:
                $operation = $this->activity()->getThread_($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Thread|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkThreadAsRead_::OPERATION_MATCH:
                $operation = $this->activity()->markThreadAsRead_($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->getThreadSubscriptionForAuthenticatedUser_($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ThreadSubscription|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\SetThreadSubscription_::OPERATION_MATCH:
                $operation = $this->activity()->setThreadSubscription_($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ThreadSubscription|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\DeleteThreadSubscription_::OPERATION_MATCH:
                $operation = $this->activity()->deleteThreadSubscription_($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicOrgEvents_::OPERATION_MATCH:
                $operation = $this->activity()->listPublicOrgEvents_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListRepoEvents_::OPERATION_MATCH:
                $operation = $this->activity()->listRepoEvents_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListRepoNotificationsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listRepoNotificationsForAuthenticatedUser_($params['owner'], $params['repo'], $params['all'], $params['participating'], $params['since'], $params['before'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC0Fbffa58E240B1E3B02B30C16Ca715A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkRepoNotificationsAsRead_::OPERATION_MATCH:
                $operation = $this->activity()->markRepoNotificationsAsRead_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA5445A08E16D224F94859Ebaf785C18A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListStargazersForRepo_::OPERATION_MATCH:
                $operation = $this->activity()->listStargazersForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF19Ab2103D1Cee92F695Dd9D475183C0|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListWatchersForRepo_::OPERATION_MATCH:
                $operation = $this->activity()->listWatchersForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetRepoSubscription_::OPERATION_MATCH:
                $operation = $this->activity()->getRepoSubscription_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositorySubscription|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\SetRepoSubscription_::OPERATION_MATCH:
                $operation = $this->activity()->setRepoSubscription_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositorySubscription {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\DeleteRepoSubscription_::OPERATION_MATCH:
                $operation = $this->activity()->deleteRepoSubscription_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReposStarredByAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listReposStarredByAuthenticatedUser_($params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAf9Ce4Aef95F91Ba5Bb8937E005A4Bf1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCa3B5A6Ea5F1333A83F449A6Fd97Dc6D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\CheckRepoIsStarredByAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->checkRepoIsStarredByAuthenticatedUser_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\StarRepoForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->starRepoForAuthenticatedUser_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\UnstarRepoForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->unstarRepoForAuthenticatedUser_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListWatchedReposForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listWatchedReposForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListEventsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listEventsForAuthenticatedUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListOrgEventsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listOrgEventsForAuthenticatedUser_($params['username'], $params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEventsForUser_::OPERATION_MATCH:
                $operation = $this->activity()->listPublicEventsForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReceivedEventsForUser_::OPERATION_MATCH:
                $operation = $this->activity()->listReceivedEventsForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReceivedPublicEventsForUser_::OPERATION_MATCH:
                $operation = $this->activity()->listReceivedPublicEventsForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReposStarredByUser_::OPERATION_MATCH:
                $operation = $this->activity()->listReposStarredByUser_($params['username'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0C798Ad00F8D3C55Cbd869Ea186B67D0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReposWatchedByUser_::OPERATION_MATCH:
                $operation = $this->activity()->listReposWatchedByUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\List_::OPERATION_MATCH:
                $operation = $this->gists()->list_($params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C43F872E018E0D7Ee6Ab48Ae6B947F23A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Create_::OPERATION_MATCH:
                $operation = $this->gists()->create_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListPublic_::OPERATION_MATCH:
                $operation = $this->gists()->listPublic_($params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C43F872E018E0D7Ee6Ab48Ae6B947F23A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListStarred_::OPERATION_MATCH:
                $operation = $this->gists()->listStarred_($params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C43F872E018E0D7Ee6Ab48Ae6B947F23A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Get_::OPERATION_MATCH:
                $operation = $this->gists()->get_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD7C4628D526D62D8495C7C6Cbef013C7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Delete_::OPERATION_MATCH:
                $operation = $this->gists()->delete_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Update_::OPERATION_MATCH:
                $operation = $this->gists()->update_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListComments_::OPERATION_MATCH:
                $operation = $this->gists()->listComments_($params['gist_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9589B48D06725Dd205Dd68F2Cb85C975|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\CreateComment_::OPERATION_MATCH:
                $operation = $this->gists()->createComment_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetComment_::OPERATION_MATCH:
                $operation = $this->gists()->getComment_($params['gist_id'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD7C4628D526D62D8495C7C6Cbef013C7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\DeleteComment_::OPERATION_MATCH:
                $operation = $this->gists()->deleteComment_($params['gist_id'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\UpdateComment_::OPERATION_MATCH:
                $operation = $this->gists()->updateComment_($params['gist_id'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListCommits_::OPERATION_MATCH:
                $operation = $this->gists()->listCommits_($params['gist_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C43Aae5Cfe9D6C3E12Bb4133Ab827C5B9|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListForks_::OPERATION_MATCH:
                $operation = $this->gists()->listForks_($params['gist_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0B3930309F9C72E778A65961Ebbc74Ef|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Fork_::OPERATION_MATCH:
                $operation = $this->gists()->fork_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\CheckIsStarred_::OPERATION_MATCH:
                $operation = $this->gists()->checkIsStarred_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Star_::OPERATION_MATCH:
                $operation = $this->gists()->star_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Unstar_::OPERATION_MATCH:
                $operation = $this->gists()->unstar_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetRevision_::OPERATION_MATCH:
                $operation = $this->gists()->getRevision_($params['gist_id'], $params['sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListForUser_::OPERATION_MATCH:
                $operation = $this->gists()->listForUser_($params['username'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C43F872E018E0D7Ee6Ab48Ae6B947F23A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetAllTemplates_::OPERATION_MATCH:
                $operation = $this->gitignore()->getAllTemplates_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetTemplate_::OPERATION_MATCH:
                $operation = $this->gitignore()->getTemplate_($params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitignoreTemplate {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\List_::OPERATION_MATCH:
                $operation = $this->issues()->list_($params['filter'], $params['state'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['collab'], $params['orgs'], $params['owned'], $params['pulls'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBabf466417Ca3993Bac6Dc221711A46E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForOrg_::OPERATION_MATCH:
                $operation = $this->issues()->listForOrg_($params['org'], $params['filter'], $params['state'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBabf466417Ca3993Bac6Dc221711A46E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListAssignees_::OPERATION_MATCH:
                $operation = $this->issues()->listAssignees_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CheckUserCanBeAssigned_::OPERATION_MATCH:
                $operation = $this->issues()->checkUserCanBeAssigned_($params['owner'], $params['repo'], $params['assignee']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForRepo_::OPERATION_MATCH:
                $operation = $this->issues()->listForRepo_($params['owner'], $params['repo'], $params['milestone'], $params['state'], $params['assignee'], $params['creator'], $params['mentioned'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBabf466417Ca3993Bac6Dc221711A46E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Create_::OPERATION_MATCH:
                $operation = $this->issues()->create_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListCommentsForRepo_::OPERATION_MATCH:
                $operation = $this->issues()->listCommentsForRepo_($params['owner'], $params['repo'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7Ddbb99E798Ea46E16037A3B2A8616D6|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetComment_::OPERATION_MATCH:
                $operation = $this->issues()->getComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteComment_::OPERATION_MATCH:
                $operation = $this->issues()->deleteComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateComment_::OPERATION_MATCH:
                $operation = $this->issues()->updateComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEventsForRepo_::OPERATION_MATCH:
                $operation = $this->issues()->listEventsForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C91F9Dffd45F76F907A2408Dfb98A8958|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetEvent_::OPERATION_MATCH:
                $operation = $this->issues()->getEvent_($params['owner'], $params['repo'], $params['event_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueEvent|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Get_::OPERATION_MATCH:
                $operation = $this->issues()->get_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Update_::OPERATION_MATCH:
                $operation = $this->issues()->update_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\AddAssignees_::OPERATION_MATCH:
                $operation = $this->issues()->addAssignees_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveAssignees_::OPERATION_MATCH:
                $operation = $this->issues()->removeAssignees_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListComments_::OPERATION_MATCH:
                $operation = $this->issues()->listComments_($params['owner'], $params['repo'], $params['issue_number'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7Ddbb99E798Ea46E16037A3B2A8616D6|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateComment_::OPERATION_MATCH:
                $operation = $this->issues()->createComment_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEvents_::OPERATION_MATCH:
                $operation = $this->issues()->listEvents_($params['owner'], $params['repo'], $params['issue_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3E04B60Abe35C284A39A331B5A490Adf|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsOnIssue_::OPERATION_MATCH:
                $operation = $this->issues()->listLabelsOnIssue_($params['owner'], $params['repo'], $params['issue_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\SetLabels_::OPERATION_MATCH:
                $operation = $this->issues()->setLabels_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\AddLabels_::OPERATION_MATCH:
                $operation = $this->issues()->addLabels_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveAllLabels_::OPERATION_MATCH:
                $operation = $this->issues()->removeAllLabels_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveLabel_::OPERATION_MATCH:
                $operation = $this->issues()->removeLabel_($params['owner'], $params['repo'], $params['issue_number'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Lock_::OPERATION_MATCH:
                $operation = $this->issues()->lock_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Unlock_::OPERATION_MATCH:
                $operation = $this->issues()->unlock_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEventsForTimeline_::OPERATION_MATCH:
                $operation = $this->issues()->listEventsForTimeline_($params['owner'], $params['repo'], $params['issue_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6875E80E7A2F2A7E54Face53445Dd736|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsForRepo_::OPERATION_MATCH:
                $operation = $this->issues()->listLabelsForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateLabel_::OPERATION_MATCH:
                $operation = $this->issues()->createLabel_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Label|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetLabel_::OPERATION_MATCH:
                $operation = $this->issues()->getLabel_($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Label|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteLabel_::OPERATION_MATCH:
                $operation = $this->issues()->deleteLabel_($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateLabel_::OPERATION_MATCH:
                $operation = $this->issues()->updateLabel_($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Label {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListMilestones_::OPERATION_MATCH:
                $operation = $this->issues()->listMilestones_($params['owner'], $params['repo'], $params['state'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7E88818B96F4B827A88Bdffeb546E221|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateMilestone_::OPERATION_MATCH:
                $operation = $this->issues()->createMilestone_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Milestone|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetMilestone_::OPERATION_MATCH:
                $operation = $this->issues()->getMilestone_($params['owner'], $params['repo'], $params['milestone_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Milestone|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteMilestone_::OPERATION_MATCH:
                $operation = $this->issues()->deleteMilestone_($params['owner'], $params['repo'], $params['milestone_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateMilestone_::OPERATION_MATCH:
                $operation = $this->issues()->updateMilestone_($params['owner'], $params['repo'], $params['milestone_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Milestone {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsForMilestone_::OPERATION_MATCH:
                $operation = $this->issues()->listLabelsForMilestone_($params['owner'], $params['repo'], $params['milestone_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->issues()->listForAuthenticatedUser_($params['filter'], $params['state'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBabf466417Ca3993Bac6Dc221711A46E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses\GetAllCommonlyUsed_::OPERATION_MATCH:
                $operation = $this->licenses()->getAllCommonlyUsed_($params['featured'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD8C95C094316027Eaa26C6Eaf9500Ad8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses\Get_::OPERATION_MATCH:
                $operation = $this->licenses()->get_($params['license']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses\GetForRepo_::OPERATION_MATCH:
                $operation = $this->licenses()->getForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseContent {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\Render_::OPERATION_MATCH:
                $operation = $this->markdown()->render_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\RenderRaw_::OPERATION_MATCH:
                $operation = $this->markdown()->renderRaw_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\List_::OPERATION_MATCH:
                $operation = $this->orgs()->list_($params['since'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD25549Cde7Ef111A37D0A59E619F994A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListCustomRoles_::OPERATION_MATCH:
                $operation = $this->orgs()->listCustomRoles_($params['organization_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C19Eb4036F8A42F3C5B379E759Ef04C69 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Get_::OPERATION_MATCH:
                $operation = $this->orgs()->get_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Update_::OPERATION_MATCH:
                $operation = $this->orgs()->update_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C197505B37575Ae3739584A4C9Efe0801|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListBlockedUsers_::OPERATION_MATCH:
                $operation = $this->orgs()->listBlockedUsers_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckBlockedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->checkBlockedUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\BlockUser_::OPERATION_MATCH:
                $operation = $this->orgs()->blockUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UnblockUser_::OPERATION_MATCH:
                $operation = $this->orgs()->unblockUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateCustomRole_::OPERATION_MATCH:
                $operation = $this->orgs()->createCustomRole_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationCustomRepositoryRole|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetCustomRole_::OPERATION_MATCH:
                $operation = $this->orgs()->getCustomRole_($params['org'], $params['role_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationCustomRepositoryRole|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\DeleteCustomRole_::OPERATION_MATCH:
                $operation = $this->orgs()->deleteCustomRole_($params['org'], $params['role_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateCustomRole_::OPERATION_MATCH:
                $operation = $this->orgs()->updateCustomRole_($params['org'], $params['role_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationCustomRepositoryRole|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListFailedInvitations_::OPERATION_MATCH:
                $operation = $this->orgs()->listFailedInvitations_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C292Eea0D3E06B707B2B60E9Fa544B678|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListFineGrainedPermissions_::OPERATION_MATCH:
                $operation = $this->orgs()->listFineGrainedPermissions_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1A135545778A6D3F051B1125A78Fd35C {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhooks_::OPERATION_MATCH:
                $operation = $this->orgs()->listWebhooks_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C8C7417Cb08B593A169C0D2A998Ca13C8|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateWebhook_::OPERATION_MATCH:
                $operation = $this->orgs()->createWebhook_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhook_::OPERATION_MATCH:
                $operation = $this->orgs()->getWebhook_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\DeleteWebhook_::OPERATION_MATCH:
                $operation = $this->orgs()->deleteWebhook_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhook_::OPERATION_MATCH:
                $operation = $this->orgs()->updateWebhook_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookConfigForOrg_::OPERATION_MATCH:
                $operation = $this->orgs()->getWebhookConfigForOrg_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhookConfigForOrg_::OPERATION_MATCH:
                $operation = $this->orgs()->updateWebhookConfigForOrg_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhookDeliveries_::OPERATION_MATCH:
                $operation = $this->orgs()->listWebhookDeliveries_($params['org'], $params['hook_id'], $params['per_page'], $params['cursor'], $params['redelivery']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0E8E1845F1Bc82Ea0E7B36D0Bb6E996D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookDelivery_::OPERATION_MATCH:
                $operation = $this->orgs()->getWebhookDelivery_($params['org'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RedeliverWebhookDelivery_::OPERATION_MATCH:
                $operation = $this->orgs()->redeliverWebhookDelivery_($params['org'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\PingWebhook_::OPERATION_MATCH:
                $operation = $this->orgs()->pingWebhook_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListAppInstallations_::OPERATION_MATCH:
                $operation = $this->orgs()->listAppInstallations_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDe13F0F1A91E8C86F2C1D90E147490E2 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPendingInvitations_::OPERATION_MATCH:
                $operation = $this->orgs()->listPendingInvitations_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C292Eea0D3E06B707B2B60E9Fa544B678|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateInvitation_::OPERATION_MATCH:
                $operation = $this->orgs()->createInvitation_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationInvitation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CancelInvitation_::OPERATION_MATCH:
                $operation = $this->orgs()->cancelInvitation_($params['org'], $params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListInvitationTeams_::OPERATION_MATCH:
                $operation = $this->orgs()->listInvitationTeams_($params['org'], $params['invitation_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembers_::OPERATION_MATCH:
                $operation = $this->orgs()->listMembers_($params['org'], $params['filter'], $params['role'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckMembershipForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->checkMembershipForUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMember_::OPERATION_MATCH:
                $operation = $this->orgs()->removeMember_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->getMembershipForUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetMembershipForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->setMembershipForUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMembershipForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->removeMembershipForUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListOutsideCollaborators_::OPERATION_MATCH:
                $operation = $this->orgs()->listOutsideCollaborators_($params['org'], $params['filter'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ConvertMemberToOutsideCollaborator_::OPERATION_MATCH:
                $operation = $this->orgs()->convertMemberToOutsideCollaborator_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveOutsideCollaborator_::OPERATION_MATCH:
                $operation = $this->orgs()->removeOutsideCollaborator_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPublicMembers_::OPERATION_MATCH:
                $operation = $this->orgs()->listPublicMembers_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckPublicMembershipForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->checkPublicMembershipForUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetPublicMembershipForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->setPublicMembershipForAuthenticatedUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->removePublicMembershipForAuthenticatedUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListSecurityManagerTeams_::OPERATION_MATCH:
                $operation = $this->orgs()->listSecurityManagerTeams_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7Eb9Ad2993C99C60Bc995556Bf16C836 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\AddSecurityManagerTeam_::OPERATION_MATCH:
                $operation = $this->orgs()->addSecurityManagerTeam_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveSecurityManagerTeam_::OPERATION_MATCH:
                $operation = $this->orgs()->removeSecurityManagerTeam_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos_::OPERATION_MATCH:
                $operation = $this->orgs()->enableOrDisableSecurityProductOnAllOrgRepos_($params['org'], $params['security_product'], $params['enablement']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembershipsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->listMembershipsForAuthenticatedUser_($params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDfc9Ce9066Fbb36Ecf1129974E678B26|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->getMembershipForAuthenticatedUser_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateMembershipForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->updateMembershipForAuthenticatedUser_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->listForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD25549Cde7Ef111A37D0A59E619F994A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->listForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD25549Cde7Ef111A37D0A59E619F994A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\GetOidcCustomSubTemplateForOrg_::OPERATION_MATCH:
                $operation = $this->oidc()->getOidcCustomSubTemplateForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OidcCustomSub {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\UpdateOidcCustomSubTemplateForOrg_::OPERATION_MATCH:
                $operation = $this->oidc()->updateOidcCustomSubTemplateForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInOrganization_::OPERATION_MATCH:
                $operation = $this->codespaces()->listInOrganization_($params['per_page'], $params['page'], $params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C99A344Bb924Dc8320E4Bc765919868F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetCodespacesBilling_::OPERATION_MATCH:
                $operation = $this->codespaces()->setCodespacesBilling_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListOrgSecrets_::OPERATION_MATCH:
                $operation = $this->codespaces()->listOrgSecrets_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE2D72762D5496B28A74Db5Be33944579 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetOrgPublicKey_::OPERATION_MATCH:
                $operation = $this->codespaces()->getOrgPublicKey_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetOrgSecret_::OPERATION_MATCH:
                $operation = $this->codespaces()->getOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesOrgSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateOrgSecret_::OPERATION_MATCH:
                $operation = $this->codespaces()->createOrUpdateOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteOrgSecret_::OPERATION_MATCH:
                $operation = $this->codespaces()->deleteOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSelectedReposForOrgSecret_::OPERATION_MATCH:
                $operation = $this->codespaces()->listSelectedReposForOrgSecret_($params['org'], $params['secret_name'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDf642215E2806C848A16Ef294379Be7A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetSelectedReposForOrgSecret_::OPERATION_MATCH:
                $operation = $this->codespaces()->setSelectedReposForOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddSelectedRepoToOrgSecret_::OPERATION_MATCH:
                $operation = $this->codespaces()->addSelectedRepoToOrgSecret_($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveSelectedRepoFromOrgSecret_::OPERATION_MATCH:
                $operation = $this->codespaces()->removeSelectedRepoFromOrgSecret_($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetCodespacesForUserInOrg_::OPERATION_MATCH:
                $operation = $this->codespaces()->getCodespacesForUserInOrg_($params['per_page'], $params['page'], $params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C99A344Bb924Dc8320E4Bc765919868F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteFromOrganization_::OPERATION_MATCH:
                $operation = $this->codespaces()->deleteFromOrganization_($params['org'], $params['username'], $params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopInOrganization_::OPERATION_MATCH:
                $operation = $this->codespaces()->stopInOrganization_($params['org'], $params['username'], $params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInRepositoryForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->listInRepositoryForAuthenticatedUser_($params['per_page'], $params['page'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C99A344Bb924Dc8320E4Bc765919868F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithRepoForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->createWithRepoForAuthenticatedUser_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->listDevcontainersInRepositoryForAuthenticatedUser_($params['per_page'], $params['page'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3258430Cc798035Cd54C186Bcc49C1F3|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RepoMachinesForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->repoMachinesForAuthenticatedUser_($params['owner'], $params['repo'], $params['location'], $params['client_ip']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDcad5E8F2Eec4De5B5Cb16Bffb04Ba48|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\PreFlightWithRepoForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->preFlightWithRepoForAuthenticatedUser_($params['owner'], $params['repo'], $params['ref'], $params['client_ip']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFc45C706Ec04C4547F6921E839268B9B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepoSecrets_::OPERATION_MATCH:
                $operation = $this->codespaces()->listRepoSecrets_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C28C9367Cd9884680C4B3F55F87F3Dfd1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoPublicKey_::OPERATION_MATCH:
                $operation = $this->codespaces()->getRepoPublicKey_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoSecret_::OPERATION_MATCH:
                $operation = $this->codespaces()->getRepoSecret_($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepoCodespacesSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateRepoSecret_::OPERATION_MATCH:
                $operation = $this->codespaces()->createOrUpdateRepoSecret_($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteRepoSecret_::OPERATION_MATCH:
                $operation = $this->codespaces()->deleteRepoSecret_($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithPrForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->createWithPrForAuthenticatedUser_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->listForAuthenticatedUser_($params['per_page'], $params['page'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C99A344Bb924Dc8320E4Bc765919868F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->createForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSecretsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->listSecretsForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C60C051Ca0D5D3B740Bd08E439D5315E1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetPublicKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->getPublicKeyForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesUserPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetSecretForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->getSecretForAuthenticatedUser_($params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateSecretForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->createOrUpdateSecretForAuthenticatedUser_($params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteSecretForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->deleteSecretForAuthenticatedUser_($params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepositoriesForSecretForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->listRepositoriesForSecretForAuthenticatedUser_($params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDf642215E2806C848A16Ef294379Be7A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetRepositoriesForSecretForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->setRepositoriesForSecretForAuthenticatedUser_($params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddRepositoryForSecretForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->addRepositoryForSecretForAuthenticatedUser_($params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->removeRepositoryForSecretForAuthenticatedUser_($params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->getForAuthenticatedUser_($params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->deleteForAuthenticatedUser_($params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\UpdateForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->updateForAuthenticatedUser_($params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ExportForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->exportForAuthenticatedUser_($params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespaceExportDetails|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetExportDetailsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->getExportDetailsForAuthenticatedUser_($params['codespace_name'], $params['export_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespaceExportDetails|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CodespaceMachinesForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->codespaceMachinesForAuthenticatedUser_($params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDcad5E8F2Eec4De5B5Cb16Bffb04Ba48|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StartForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->startForAuthenticatedUser_($params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->codespaces()->stopForAuthenticatedUser_($params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForOrg_::OPERATION_MATCH:
                $operation = $this->interactions()->getRestrictionsForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFa125E0Ae31E9C155F33Bc899Ee2A17F {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForOrg_::OPERATION_MATCH:
                $operation = $this->interactions()->setRestrictionsForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InteractionLimitResponse|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForOrg_::OPERATION_MATCH:
                $operation = $this->interactions()->removeRestrictionsForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForRepo_::OPERATION_MATCH:
                $operation = $this->interactions()->getRestrictionsForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFa125E0Ae31E9C155F33Bc899Ee2A17F {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForRepo_::OPERATION_MATCH:
                $operation = $this->interactions()->setRestrictionsForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InteractionLimitResponse {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForRepo_::OPERATION_MATCH:
                $operation = $this->interactions()->removeRestrictionsForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->interactions()->getRestrictionsForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFa125E0Ae31E9C155F33Bc899Ee2A17F {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->interactions()->setRestrictionsForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InteractionLimitResponse|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->interactions()->removeRestrictionsForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForOrg_::OPERATION_MATCH:
                $operation = $this->migrations()->listForOrg_($params['org'], $params['per_page'], $params['page'], $params['exclude']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C48B3C8D5Bb6D982Db53C27240Ef5E5B4 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForOrg_::OPERATION_MATCH:
                $operation = $this->migrations()->startForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForOrg_::OPERATION_MATCH:
                $operation = $this->migrations()->getStatusForOrg_($params['org'], $params['migration_id'], $params['exclude']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DownloadArchiveForOrg_::OPERATION_MATCH:
                $operation = $this->migrations()->downloadArchiveForOrg_($params['org'], $params['migration_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForOrg_::OPERATION_MATCH:
                $operation = $this->migrations()->deleteArchiveForOrg_($params['org'], $params['migration_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForOrg_::OPERATION_MATCH:
                $operation = $this->migrations()->unlockRepoForOrg_($params['org'], $params['migration_id'], $params['repo_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForOrg_::OPERATION_MATCH:
                $operation = $this->migrations()->listReposForOrg_($params['org'], $params['migration_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetImportStatus_::OPERATION_MATCH:
                $operation = $this->migrations()->getImportStatus_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartImport_::OPERATION_MATCH:
                $operation = $this->migrations()->startImport_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\CancelImport_::OPERATION_MATCH:
                $operation = $this->migrations()->cancelImport_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UpdateImport_::OPERATION_MATCH:
                $operation = $this->migrations()->updateImport_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetCommitAuthors_::OPERATION_MATCH:
                $operation = $this->migrations()->getCommitAuthors_($params['owner'], $params['repo'], $params['since']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF937F3514A781A237E7E511Bc6974285|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\MapCommitAuthor_::OPERATION_MATCH:
                $operation = $this->migrations()->mapCommitAuthor_($params['owner'], $params['repo'], $params['author_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PorterAuthor|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetLargeFiles_::OPERATION_MATCH:
                $operation = $this->migrations()->getLargeFiles_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC2674569Ad4Aaeb221366Afde4669340|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\SetLfsPreference_::OPERATION_MATCH:
                $operation = $this->migrations()->setLfsPreference_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->migrations()->listForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C48B3C8D5Bb6D982Db53C27240Ef5E5B4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->migrations()->startForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->migrations()->getStatusForAuthenticatedUser_($params['migration_id'], $params['exclude']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetArchiveForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->migrations()->getArchiveForAuthenticatedUser_($params['migration_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->migrations()->deleteArchiveForAuthenticatedUser_($params['migration_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->migrations()->unlockRepoForAuthenticatedUser_($params['migration_id'], $params['repo_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->migrations()->listReposForAuthenticatedUser_($params['migration_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForOrganization_::OPERATION_MATCH:
                $operation = $this->packages()->listPackagesForOrganization_($params['package_type'], $params['org'], $params['visibility']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF3D5Dbb128F908794438D8455A198Be4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForOrganization_::OPERATION_MATCH:
                $operation = $this->packages()->getPackageForOrganization_($params['package_type'], $params['package_name'], $params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Package {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForOrg_::OPERATION_MATCH:
                $operation = $this->packages()->deletePackageForOrg_($params['package_type'], $params['package_name'], $params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForOrg_::OPERATION_MATCH:
                $operation = $this->packages()->restorePackageForOrg_($params['package_type'], $params['package_name'], $params['org'], $params['token']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByOrg_::OPERATION_MATCH:
                $operation = $this->packages()->getAllPackageVersionsForPackageOwnedByOrg_($params['package_type'], $params['package_name'], $params['org'], $params['page'], $params['per_page'], $params['state']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C20F464Eb74B57Bb1070Bc9803667E3C3|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForOrganization_::OPERATION_MATCH:
                $operation = $this->packages()->getPackageVersionForOrganization_($params['package_type'], $params['package_name'], $params['org'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForOrg_::OPERATION_MATCH:
                $operation = $this->packages()->deletePackageVersionForOrg_($params['package_type'], $params['package_name'], $params['org'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForOrg_::OPERATION_MATCH:
                $operation = $this->packages()->restorePackageVersionForOrg_($params['package_type'], $params['package_name'], $params['org'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->packages()->listPackagesForAuthenticatedUser_($params['package_type'], $params['visibility']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF3D5Dbb128F908794438D8455A198Be4 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->packages()->getPackageForAuthenticatedUser_($params['package_type'], $params['package_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Package {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->packages()->deletePackageForAuthenticatedUser_($params['package_type'], $params['package_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->packages()->restorePackageForAuthenticatedUser_($params['package_type'], $params['package_name'], $params['token']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->packages()->getAllPackageVersionsForPackageOwnedByAuthenticatedUser_($params['package_type'], $params['package_name'], $params['page'], $params['per_page'], $params['state']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C20F464Eb74B57Bb1070Bc9803667E3C3|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->packages()->getPackageVersionForAuthenticatedUser_($params['package_type'], $params['package_name'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->packages()->deletePackageVersionForAuthenticatedUser_($params['package_type'], $params['package_name'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->packages()->restorePackageVersionForAuthenticatedUser_($params['package_type'], $params['package_name'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForUser_::OPERATION_MATCH:
                $operation = $this->packages()->listPackagesForUser_($params['package_type'], $params['visibility'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF3D5Dbb128F908794438D8455A198Be4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForUser_::OPERATION_MATCH:
                $operation = $this->packages()->getPackageForUser_($params['package_type'], $params['package_name'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Package {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForUser_::OPERATION_MATCH:
                $operation = $this->packages()->deletePackageForUser_($params['package_type'], $params['package_name'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForUser_::OPERATION_MATCH:
                $operation = $this->packages()->restorePackageForUser_($params['package_type'], $params['package_name'], $params['username'], $params['token']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByUser_::OPERATION_MATCH:
                $operation = $this->packages()->getAllPackageVersionsForPackageOwnedByUser_($params['package_type'], $params['package_name'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C20F464Eb74B57Bb1070Bc9803667E3C3|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForUser_::OPERATION_MATCH:
                $operation = $this->packages()->getPackageVersionForUser_($params['package_type'], $params['package_name'], $params['package_version_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForUser_::OPERATION_MATCH:
                $operation = $this->packages()->deletePackageVersionForUser_($params['package_type'], $params['package_name'], $params['username'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForUser_::OPERATION_MATCH:
                $operation = $this->packages()->restorePackageVersionForUser_($params['package_type'], $params['package_name'], $params['username'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForOrg_::OPERATION_MATCH:
                $operation = $this->projects()->listForOrg_($params['org'], $params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAb0747A9430Dc79D395Cf3A981F7F590|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForOrg_::OPERATION_MATCH:
                $operation = $this->projects()->createForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetCard_::OPERATION_MATCH:
                $operation = $this->projects()->getCard_($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteCard_::OPERATION_MATCH:
                $operation = $this->projects()->deleteCard_($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF694556E3Cc88993A89F1Ed7Afdf4E13|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateCard_::OPERATION_MATCH:
                $operation = $this->projects()->updateCard_($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveCard_::OPERATION_MATCH:
                $operation = $this->projects()->moveCard_($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2F32Ad791Ebef4439Dfb273837Ce0D99|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C84C5Bf99Acadc6Ec8B2A32F2014E1E35|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetColumn_::OPERATION_MATCH:
                $operation = $this->projects()->getColumn_($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectColumn|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteColumn_::OPERATION_MATCH:
                $operation = $this->projects()->deleteColumn_($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateColumn_::OPERATION_MATCH:
                $operation = $this->projects()->updateColumn_($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectColumn|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListCards_::OPERATION_MATCH:
                $operation = $this->projects()->listCards_($params['column_id'], $params['archived_state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C802A2Aa52727B9F7C501777Ea4F9E4A3|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateCard_::OPERATION_MATCH:
                $operation = $this->projects()->createCard_($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C197505B37575Ae3739584A4C9Efe0801|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C84C5Bf99Acadc6Ec8B2A32F2014E1E35 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveColumn_::OPERATION_MATCH:
                $operation = $this->projects()->moveColumn_($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Get_::OPERATION_MATCH:
                $operation = $this->projects()->get_($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Delete_::OPERATION_MATCH:
                $operation = $this->projects()->delete_($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF694556E3Cc88993A89F1Ed7Afdf4E13|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Update_::OPERATION_MATCH:
                $operation = $this->projects()->update_($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF694556E3Cc88993A89F1Ed7Afdf4E13|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListCollaborators_::OPERATION_MATCH:
                $operation = $this->projects()->listCollaborators_($params['project_id'], $params['affiliation'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\AddCollaborator_::OPERATION_MATCH:
                $operation = $this->projects()->addCollaborator_($params['project_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\RemoveCollaborator_::OPERATION_MATCH:
                $operation = $this->projects()->removeCollaborator_($params['project_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetPermissionForUser_::OPERATION_MATCH:
                $operation = $this->projects()->getPermissionForUser_($params['project_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListColumns_::OPERATION_MATCH:
                $operation = $this->projects()->listColumns_($params['project_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C338B4411A0Be86E1C6C9A568915F6984|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateColumn_::OPERATION_MATCH:
                $operation = $this->projects()->createColumn_($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectColumn|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForRepo_::OPERATION_MATCH:
                $operation = $this->projects()->listForRepo_($params['owner'], $params['repo'], $params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAb0747A9430Dc79D395Cf3A981F7F590|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForRepo_::OPERATION_MATCH:
                $operation = $this->projects()->createForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->projects()->createForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForUser_::OPERATION_MATCH:
                $operation = $this->projects()->listForUser_($params['username'], $params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAb0747A9430Dc79D395Cf3A981F7F590|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForOrg_::OPERATION_MATCH:
                $operation = $this->repos()->listForOrg_($params['org'], $params['type'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateInOrg_::OPERATION_MATCH:
                $operation = $this->repos()->createInOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Get_::OPERATION_MATCH:
                $operation = $this->repos()->get_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Delete_::OPERATION_MATCH:
                $operation = $this->repos()->delete_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Update_::OPERATION_MATCH:
                $operation = $this->repos()->update_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListAutolinks_::OPERATION_MATCH:
                $operation = $this->repos()->listAutolinks_($params['owner'], $params['repo'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C17C7343Ca9Be26E0B6160460Fc53E98B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateAutolink_::OPERATION_MATCH:
                $operation = $this->repos()->createAutolink_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Autolink|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAutolink_::OPERATION_MATCH:
                $operation = $this->repos()->getAutolink_($params['owner'], $params['repo'], $params['autolink_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Autolink|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAutolink_::OPERATION_MATCH:
                $operation = $this->repos()->deleteAutolink_($params['owner'], $params['repo'], $params['autolink_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableAutomatedSecurityFixes_::OPERATION_MATCH:
                $operation = $this->repos()->enableAutomatedSecurityFixes_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableAutomatedSecurityFixes_::OPERATION_MATCH:
                $operation = $this->repos()->disableAutomatedSecurityFixes_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListBranches_::OPERATION_MATCH:
                $operation = $this->repos()->listBranches_($params['owner'], $params['repo'], $params['protected'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF51Df0E3Ba8C9D41Aff6C2Dae92F8477|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetBranch_::OPERATION_MATCH:
                $operation = $this->repos()->getBranch_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchWithProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->getBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->updateBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranch|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->deleteBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAdminBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->getAdminBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchAdminEnforced {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetAdminBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->setAdminBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchAdminEnforced {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAdminBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->deleteAdminBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPullRequestReviewProtection_::OPERATION_MATCH:
                $operation = $this->repos()->getPullRequestReviewProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchPullRequestReview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeletePullRequestReviewProtection_::OPERATION_MATCH:
                $operation = $this->repos()->deletePullRequestReviewProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdatePullRequestReviewProtection_::OPERATION_MATCH:
                $operation = $this->repos()->updatePullRequestReviewProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchPullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitSignatureProtection_::OPERATION_MATCH:
                $operation = $this->repos()->getCommitSignatureProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitSignatureProtection_::OPERATION_MATCH:
                $operation = $this->repos()->createCommitSignatureProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteCommitSignatureProtection_::OPERATION_MATCH:
                $operation = $this->repos()->deleteCommitSignatureProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetStatusChecksProtection_::OPERATION_MATCH:
                $operation = $this->repos()->getStatusChecksProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveStatusCheckProtection_::OPERATION_MATCH:
                $operation = $this->repos()->removeStatusCheckProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateStatusCheckProtection_::OPERATION_MATCH:
                $operation = $this->repos()->updateStatusCheckProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllStatusCheckContexts_::OPERATION_MATCH:
                $operation = $this->repos()->getAllStatusCheckContexts_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetStatusCheckContexts_::OPERATION_MATCH:
                $operation = $this->repos()->setStatusCheckContexts_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddStatusCheckContexts_::OPERATION_MATCH:
                $operation = $this->repos()->addStatusCheckContexts_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveStatusCheckContexts_::OPERATION_MATCH:
                $operation = $this->repos()->removeStatusCheckContexts_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->getAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->deleteAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAppsWithAccessToProtectedBranch_::OPERATION_MATCH:
                $operation = $this->repos()->getAppsWithAccessToProtectedBranch_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C81C377Bf6B21Ffcf535B9A46Dc81E5F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetAppAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->setAppAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C81C377Bf6B21Ffcf535B9A46Dc81E5F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddAppAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->addAppAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C81C377Bf6B21Ffcf535B9A46Dc81E5F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveAppAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->removeAppAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C81C377Bf6B21Ffcf535B9A46Dc81E5F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTeamsWithAccessToProtectedBranch_::OPERATION_MATCH:
                $operation = $this->repos()->getTeamsWithAccessToProtectedBranch_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetTeamAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->setTeamAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddTeamAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->addTeamAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveTeamAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->removeTeamAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetUsersWithAccessToProtectedBranch_::OPERATION_MATCH:
                $operation = $this->repos()->getUsersWithAccessToProtectedBranch_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetUserAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->setUserAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddUserAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->addUserAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveUserAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->removeUserAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RenameBranch_::OPERATION_MATCH:
                $operation = $this->repos()->renameBranch_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchWithProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CodeownersErrors_::OPERATION_MATCH:
                $operation = $this->repos()->codeownersErrors_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeownersErrors {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCollaborators_::OPERATION_MATCH:
                $operation = $this->repos()->listCollaborators_($params['owner'], $params['repo'], $params['affiliation'], $params['permission'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C8Cfb8Cb2505342C5Aa9B51775D830635|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CheckCollaborator_::OPERATION_MATCH:
                $operation = $this->repos()->checkCollaborator_($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddCollaborator_::OPERATION_MATCH:
                $operation = $this->repos()->addCollaborator_($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositoryInvitation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveCollaborator_::OPERATION_MATCH:
                $operation = $this->repos()->removeCollaborator_($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCollaboratorPermissionLevel_::OPERATION_MATCH:
                $operation = $this->repos()->getCollaboratorPermissionLevel_($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositoryCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommitCommentsForRepo_::OPERATION_MATCH:
                $operation = $this->repos()->listCommitCommentsForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDb6974Aa7Ac26B1Fccca8566752Cd2D3 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitComment_::OPERATION_MATCH:
                $operation = $this->repos()->getCommitComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteCommitComment_::OPERATION_MATCH:
                $operation = $this->repos()->deleteCommitComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateCommitComment_::OPERATION_MATCH:
                $operation = $this->repos()->updateCommitComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommits_::OPERATION_MATCH:
                $operation = $this->repos()->listCommits_($params['owner'], $params['repo'], $params['sha'], $params['path'], $params['author'], $params['since'], $params['until'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C844E23F82575A50855510A97A1C68898|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListBranchesForHeadCommit_::OPERATION_MATCH:
                $operation = $this->repos()->listBranchesForHeadCommit_($params['owner'], $params['repo'], $params['commit_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C44F966765547C3442B15293D242E13E2|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommentsForCommit_::OPERATION_MATCH:
                $operation = $this->repos()->listCommentsForCommit_($params['owner'], $params['repo'], $params['commit_sha'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDb6974Aa7Ac26B1Fccca8566752Cd2D3 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitComment_::OPERATION_MATCH:
                $operation = $this->repos()->createCommitComment_($params['owner'], $params['repo'], $params['commit_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPullRequestsAssociatedWithCommit_::OPERATION_MATCH:
                $operation = $this->repos()->listPullRequestsAssociatedWithCommit_($params['owner'], $params['repo'], $params['commit_sha'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Afdcb273A556616D8867Fd50A161738 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommit_::OPERATION_MATCH:
                $operation = $this->repos()->getCommit_($params['owner'], $params['repo'], $params['page'], $params['per_page'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCombinedStatusForRef_::OPERATION_MATCH:
                $operation = $this->repos()->getCombinedStatusForRef_($params['owner'], $params['repo'], $params['ref'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CombinedCommitStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommitStatusesForRef_::OPERATION_MATCH:
                $operation = $this->repos()->listCommitStatusesForRef_($params['owner'], $params['repo'], $params['ref'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1Ac05Dc4833Fe01C300C8C2729Df70Ad|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommunityProfileMetrics_::OPERATION_MATCH:
                $operation = $this->repos()->getCommunityProfileMetrics_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommunityProfile {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CompareCommits_::OPERATION_MATCH:
                $operation = $this->repos()->compareCommits_($params['owner'], $params['repo'], $params['page'], $params['per_page'], $params['basehead']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComparison|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetContent_::OPERATION_MATCH:
                $operation = $this->repos()->getContent_($params['owner'], $params['repo'], $params['path'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentTree|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C96Bca9F5F23C9286Db2F0596100Bc507|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateFileContents_::OPERATION_MATCH:
                $operation = $this->repos()->createOrUpdateFileContents_($params['owner'], $params['repo'], $params['path']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteFile_::OPERATION_MATCH:
                $operation = $this->repos()->deleteFile_($params['owner'], $params['repo'], $params['path']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListContributors_::OPERATION_MATCH:
                $operation = $this->repos()->listContributors_($params['owner'], $params['repo'], $params['anon'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA7Ca0Fcacca5Fd9Bfaa0D26Cc7352Dca|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeployments_::OPERATION_MATCH:
                $operation = $this->repos()->listDeployments_($params['owner'], $params['repo'], $params['sha'], $params['ref'], $params['task'], $params['environment'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6C1Be1B26A14C84Ab35C32Ee2E0Fcd2A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeployment_::OPERATION_MATCH:
                $operation = $this->repos()->createDeployment_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Deployment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7B1F87F42Ca7F4E6F27Ed1Bcbfcee301|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeployment_::OPERATION_MATCH:
                $operation = $this->repos()->getDeployment_($params['owner'], $params['repo'], $params['deployment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Deployment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteDeployment_::OPERATION_MATCH:
                $operation = $this->repos()->deleteDeployment_($params['owner'], $params['repo'], $params['deployment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeploymentStatuses_::OPERATION_MATCH:
                $operation = $this->repos()->listDeploymentStatuses_($params['owner'], $params['repo'], $params['deployment_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C75F4Dcd10Cf090Fdc9118C43Cb1F9Acb|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeploymentStatus_::OPERATION_MATCH:
                $operation = $this->repos()->createDeploymentStatus_($params['owner'], $params['repo'], $params['deployment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeploymentStatus_::OPERATION_MATCH:
                $operation = $this->repos()->getDeploymentStatus_($params['owner'], $params['repo'], $params['deployment_id'], $params['status_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDispatchEvent_::OPERATION_MATCH:
                $operation = $this->repos()->createDispatchEvent_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllEnvironments_::OPERATION_MATCH:
                $operation = $this->repos()->getAllEnvironments_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3502Cc2A1Ef0B1884Bcdfcf828660Ec4 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetEnvironment_::OPERATION_MATCH:
                $operation = $this->repos()->getEnvironment_($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Environment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateEnvironment_::OPERATION_MATCH:
                $operation = $this->repos()->createOrUpdateEnvironment_($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Environment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAnEnvironment_::OPERATION_MATCH:
                $operation = $this->repos()->deleteAnEnvironment_($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeploymentBranchPolicies_::OPERATION_MATCH:
                $operation = $this->repos()->listDeploymentBranchPolicies_($params['owner'], $params['repo'], $params['environment_name'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAb60B6A9C2C98408237190D09Ed58803 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeploymentBranchPolicy_::OPERATION_MATCH:
                $operation = $this->repos()->createDeploymentBranchPolicy_($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeploymentBranchPolicy_::OPERATION_MATCH:
                $operation = $this->repos()->getDeploymentBranchPolicy_($params['owner'], $params['repo'], $params['environment_name'], $params['branch_policy_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateDeploymentBranchPolicy_::OPERATION_MATCH:
                $operation = $this->repos()->updateDeploymentBranchPolicy_($params['owner'], $params['repo'], $params['environment_name'], $params['branch_policy_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteDeploymentBranchPolicy_::OPERATION_MATCH:
                $operation = $this->repos()->deleteDeploymentBranchPolicy_($params['owner'], $params['repo'], $params['environment_name'], $params['branch_policy_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForks_::OPERATION_MATCH:
                $operation = $this->repos()->listForks_($params['owner'], $params['repo'], $params['sort'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateFork_::OPERATION_MATCH:
                $operation = $this->repos()->createFork_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListWebhooks_::OPERATION_MATCH:
                $operation = $this->repos()->listWebhooks_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6E5961982487E4570Ac7Cd969C273Cdd|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->createWebhook_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->getWebhook_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->deleteWebhook_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->updateWebhook_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhookConfigForRepo_::OPERATION_MATCH:
                $operation = $this->repos()->getWebhookConfigForRepo_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateWebhookConfigForRepo_::OPERATION_MATCH:
                $operation = $this->repos()->updateWebhookConfigForRepo_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListWebhookDeliveries_::OPERATION_MATCH:
                $operation = $this->repos()->listWebhookDeliveries_($params['owner'], $params['repo'], $params['hook_id'], $params['per_page'], $params['cursor'], $params['redelivery']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0E8E1845F1Bc82Ea0E7B36D0Bb6E996D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhookDelivery_::OPERATION_MATCH:
                $operation = $this->repos()->getWebhookDelivery_($params['owner'], $params['repo'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RedeliverWebhookDelivery_::OPERATION_MATCH:
                $operation = $this->repos()->redeliverWebhookDelivery_($params['owner'], $params['repo'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\PingWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->pingWebhook_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\TestPushWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->testPushWebhook_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListInvitations_::OPERATION_MATCH:
                $operation = $this->repos()->listInvitations_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF20275E051D790E6Ec04687F05E98F03 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteInvitation_::OPERATION_MATCH:
                $operation = $this->repos()->deleteInvitation_($params['owner'], $params['repo'], $params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateInvitation_::OPERATION_MATCH:
                $operation = $this->repos()->updateInvitation_($params['owner'], $params['repo'], $params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositoryInvitation {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeployKeys_::OPERATION_MATCH:
                $operation = $this->repos()->listDeployKeys_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE8D2B89E98E676346A45560E7E331E0A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeployKey_::OPERATION_MATCH:
                $operation = $this->repos()->createDeployKey_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeployKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeployKey_::OPERATION_MATCH:
                $operation = $this->repos()->getDeployKey_($params['owner'], $params['repo'], $params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeployKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteDeployKey_::OPERATION_MATCH:
                $operation = $this->repos()->deleteDeployKey_($params['owner'], $params['repo'], $params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListLanguages_::OPERATION_MATCH:
                $operation = $this->repos()->listLanguages_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Language {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableLfsForRepo_::OPERATION_MATCH:
                $operation = $this->repos()->enableLfsForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableLfsForRepo_::OPERATION_MATCH:
                $operation = $this->repos()->disableLfsForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\MergeUpstream_::OPERATION_MATCH:
                $operation = $this->repos()->mergeUpstream_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MergedUpstream {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Merge_::OPERATION_MATCH:
                $operation = $this->repos()->merge_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPages_::OPERATION_MATCH:
                $operation = $this->repos()->getPages_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Page|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateInformationAboutPagesSite_::OPERATION_MATCH:
                $operation = $this->repos()->updateInformationAboutPagesSite_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreatePagesSite_::OPERATION_MATCH:
                $operation = $this->repos()->createPagesSite_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Page|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeletePagesSite_::OPERATION_MATCH:
                $operation = $this->repos()->deletePagesSite_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPagesBuilds_::OPERATION_MATCH:
                $operation = $this->repos()->listPagesBuilds_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6D863E2F1F1Ab47D84D0Ed073F49Df30 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RequestPagesBuild_::OPERATION_MATCH:
                $operation = $this->repos()->requestPagesBuild_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuildStatus {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetLatestPagesBuild_::OPERATION_MATCH:
                $operation = $this->repos()->getLatestPagesBuild_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuild {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPagesBuild_::OPERATION_MATCH:
                $operation = $this->repos()->getPagesBuild_($params['owner'], $params['repo'], $params['build_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuild {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreatePagesDeployment_::OPERATION_MATCH:
                $operation = $this->repos()->createPagesDeployment_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageDeployment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPagesHealthCheck_::OPERATION_MATCH:
                $operation = $this->repos()->getPagesHealthCheck_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHealthCheck|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReadme_::OPERATION_MATCH:
                $operation = $this->repos()->getReadme_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentFile|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReadmeInDirectory_::OPERATION_MATCH:
                $operation = $this->repos()->getReadmeInDirectory_($params['owner'], $params['repo'], $params['dir'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentFile|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListReleases_::OPERATION_MATCH:
                $operation = $this->repos()->listReleases_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD0C2695E7C5F50Ea337C2965Ffe11E6D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateRelease_::OPERATION_MATCH:
                $operation = $this->repos()->createRelease_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseAsset_::OPERATION_MATCH:
                $operation = $this->repos()->getReleaseAsset_($params['owner'], $params['repo'], $params['asset_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteReleaseAsset_::OPERATION_MATCH:
                $operation = $this->repos()->deleteReleaseAsset_($params['owner'], $params['repo'], $params['asset_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateReleaseAsset_::OPERATION_MATCH:
                $operation = $this->repos()->updateReleaseAsset_($params['owner'], $params['repo'], $params['asset_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GenerateReleaseNotes_::OPERATION_MATCH:
                $operation = $this->repos()->generateReleaseNotes_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseNotesContent|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetLatestRelease_::OPERATION_MATCH:
                $operation = $this->repos()->getLatestRelease_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseByTag_::OPERATION_MATCH:
                $operation = $this->repos()->getReleaseByTag_($params['owner'], $params['repo'], $params['tag']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetRelease_::OPERATION_MATCH:
                $operation = $this->repos()->getRelease_($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteRelease_::OPERATION_MATCH:
                $operation = $this->repos()->deleteRelease_($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateRelease_::OPERATION_MATCH:
                $operation = $this->repos()->updateRelease_($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListReleaseAssets_::OPERATION_MATCH:
                $operation = $this->repos()->listReleaseAssets_($params['owner'], $params['repo'], $params['release_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0Db7312560Abfd79A4Bfefef0A3Baef7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UploadReleaseAsset_::OPERATION_MATCH:
                $operation = $this->repos()->uploadReleaseAsset_($params['owner'], $params['repo'], $params['release_id'], $params['name'], $params['label']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCodeFrequencyStats_::OPERATION_MATCH:
                $operation = $this->repos()->getCodeFrequencyStats_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9Bf7717E69D86Ca1B138987Fdb5033B6|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitActivityStats_::OPERATION_MATCH:
                $operation = $this->repos()->getCommitActivityStats_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C06431446E4E9E28A63Fd6A22436F7D82|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetContributorsStats_::OPERATION_MATCH:
                $operation = $this->repos()->getContributorsStats_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0B4Ef1B3E0499Cc08F846Cd359C05D76|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetParticipationStats_::OPERATION_MATCH:
                $operation = $this->repos()->getParticipationStats_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ParticipationStats|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPunchCardStats_::OPERATION_MATCH:
                $operation = $this->repos()->getPunchCardStats_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9Bf7717E69D86Ca1B138987Fdb5033B6 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitStatus_::OPERATION_MATCH:
                $operation = $this->repos()->createCommitStatus_($params['owner'], $params['repo'], $params['sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Status {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListTags_::OPERATION_MATCH:
                $operation = $this->repos()->listTags_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CEc94E54447F15Bea9F91Abe39Ef7B5F6 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListTagProtection_::OPERATION_MATCH:
                $operation = $this->repos()->listTagProtection_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE85527Aa1D6903Db89F29Ddfaed8F90F|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateTagProtection_::OPERATION_MATCH:
                $operation = $this->repos()->createTagProtection_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TagProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteTagProtection_::OPERATION_MATCH:
                $operation = $this->repos()->deleteTagProtection_($params['owner'], $params['repo'], $params['tag_protection_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DownloadTarballArchive_::OPERATION_MATCH:
                $operation = $this->repos()->downloadTarballArchive_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListTeams_::OPERATION_MATCH:
                $operation = $this->repos()->listTeams_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllTopics_::OPERATION_MATCH:
                $operation = $this->repos()->getAllTopics_($params['owner'], $params['repo'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Topic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ReplaceAllTopics_::OPERATION_MATCH:
                $operation = $this->repos()->replaceAllTopics_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Topic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetClones_::OPERATION_MATCH:
                $operation = $this->repos()->getClones_($params['owner'], $params['repo'], $params['per']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CloneTraffic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTopPaths_::OPERATION_MATCH:
                $operation = $this->repos()->getTopPaths_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2Fe03Fbd1Bce5975C0731D749A144878|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTopReferrers_::OPERATION_MATCH:
                $operation = $this->repos()->getTopReferrers_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0637F403D979870Da0B4B4832D880Aa4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetViews_::OPERATION_MATCH:
                $operation = $this->repos()->getViews_($params['owner'], $params['repo'], $params['per']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ViewTraffic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Transfer_::OPERATION_MATCH:
                $operation = $this->repos()->transfer_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CheckVulnerabilityAlerts_::OPERATION_MATCH:
                $operation = $this->repos()->checkVulnerabilityAlerts_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableVulnerabilityAlerts_::OPERATION_MATCH:
                $operation = $this->repos()->enableVulnerabilityAlerts_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableVulnerabilityAlerts_::OPERATION_MATCH:
                $operation = $this->repos()->disableVulnerabilityAlerts_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DownloadZipballArchive_::OPERATION_MATCH:
                $operation = $this->repos()->downloadZipballArchive_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateUsingTemplate_::OPERATION_MATCH:
                $operation = $this->repos()->createUsingTemplate_($params['template_owner'], $params['template_repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPublic_::OPERATION_MATCH:
                $operation = $this->repos()->listPublic_($params['since']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->repos()->listForAuthenticatedUser_($params['visibility'], $params['affiliation'], $params['type'], $params['sort'], $params['direction'], $params['per_page'], $params['page'], $params['since'], $params['before']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAf9Ce4Aef95F91Ba5Bb8937E005A4Bf1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->repos()->createForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListInvitationsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->repos()->listInvitationsForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF20275E051D790E6Ec04687F05E98F03|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeclineInvitationForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->repos()->declineInvitationForAuthenticatedUser_($params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AcceptInvitationForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->repos()->acceptInvitationForAuthenticatedUser_($params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForUser_::OPERATION_MATCH:
                $operation = $this->repos()->listForUser_($params['username'], $params['type'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\List_::OPERATION_MATCH:
                $operation = $this->teams()->list_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\Create_::OPERATION_MATCH:
                $operation = $this->teams()->create_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetByName_::OPERATION_MATCH:
                $operation = $this->teams()->getByName_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->deleteInOrg_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->updateInOrg_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionsInOrg_($params['org'], $params['team_slug'], $params['direction'], $params['per_page'], $params['page'], $params['pinned']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C48C27F99490Bb9F6F3Fe1Ca3B71E7D81 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionInOrg_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionInOrg_($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionInOrg_($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionInOrg_($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionCommentsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionCommentsInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5730D3B2Ef04C7A9B60Fe46C96Fa0B20 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListPendingInvitationsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listPendingInvitationsInOrg_($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C292Eea0D3E06B707B2B60E9Fa544B678 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListMembersInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listMembersInOrg_($params['org'], $params['team_slug'], $params['role'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMembershipForUserInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->getMembershipForUserInOrg_($params['org'], $params['team_slug'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateMembershipForUserInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateMembershipForUserInOrg_($params['org'], $params['team_slug'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMembershipForUserInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->removeMembershipForUserInOrg_($params['org'], $params['team_slug'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListProjectsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listProjectsInOrg_($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C039E6Cf714Fc77Af55Cad65Fde5A5718 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForProjectInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForProjectInOrg_($params['org'], $params['team_slug'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateProjectPermissionsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateProjectPermissionsInOrg_($params['org'], $params['team_slug'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveProjectInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->removeProjectInOrg_($params['org'], $params['team_slug'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListReposInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listReposInOrg_($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForRepoInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForRepoInOrg_($params['org'], $params['team_slug'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateRepoPermissionsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateRepoPermissionsInOrg_($params['org'], $params['team_slug'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveRepoInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->removeRepoInOrg_($params['org'], $params['team_slug'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListChildInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listChildInOrg_($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->getLegacy_($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->deleteLegacy_($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->updateLegacy_($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionsLegacy_($params['team_id'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C48C27F99490Bb9F6F3Fe1Ca3B71E7D81 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionLegacy_($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionLegacy_($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionLegacy_($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionLegacy_($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionCommentsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionCommentsLegacy_($params['team_id'], $params['discussion_number'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5730D3B2Ef04C7A9B60Fe46C96Fa0B20 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionCommentLegacy_($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionCommentLegacy_($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionCommentLegacy_($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionCommentLegacy_($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListPendingInvitationsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listPendingInvitationsLegacy_($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C292Eea0D3E06B707B2B60E9Fa544B678 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListMembersLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listMembersLegacy_($params['team_id'], $params['role'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMemberLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->getMemberLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddMemberLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->addMemberLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMemberLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->removeMemberLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMembershipForUserLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->getMembershipForUserLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateMembershipForUserLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateMembershipForUserLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMembershipForUserLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->removeMembershipForUserLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListProjectsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listProjectsLegacy_($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C039E6Cf714Fc77Af55Cad65Fde5A5718|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForProjectLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForProjectLegacy_($params['team_id'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateProjectPermissionsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateProjectPermissionsLegacy_($params['team_id'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveProjectLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->removeProjectLegacy_($params['team_id'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListReposLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listReposLegacy_($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForRepoLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForRepoLegacy_($params['team_id'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateRepoPermissionsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateRepoPermissionsLegacy_($params['team_id'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveRepoLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->removeRepoLegacy_($params['team_id'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListChildLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listChildLegacy_($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->teams()->listForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C45206B806A9565Db2Ebe89Ea38D6Dc95|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->reactions()->listForTeamDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->reactions()->createForTeamDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForTeamDiscussionComment_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForTeamDiscussionComment_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->reactions()->listForTeamDiscussionInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->reactions()->createForTeamDiscussionInOrg_($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForTeamDiscussion_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForTeamDiscussion_($params['org'], $params['team_slug'], $params['discussion_number'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForCommitComment_::OPERATION_MATCH:
                $operation = $this->reactions()->listForCommitComment_($params['owner'], $params['repo'], $params['comment_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForCommitComment_::OPERATION_MATCH:
                $operation = $this->reactions()->createForCommitComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForCommitComment_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForCommitComment_($params['owner'], $params['repo'], $params['comment_id'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForIssueComment_::OPERATION_MATCH:
                $operation = $this->reactions()->listForIssueComment_($params['owner'], $params['repo'], $params['comment_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForIssueComment_::OPERATION_MATCH:
                $operation = $this->reactions()->createForIssueComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForIssueComment_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForIssueComment_($params['owner'], $params['repo'], $params['comment_id'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForIssue_::OPERATION_MATCH:
                $operation = $this->reactions()->listForIssue_($params['owner'], $params['repo'], $params['issue_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForIssue_::OPERATION_MATCH:
                $operation = $this->reactions()->createForIssue_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForIssue_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForIssue_($params['owner'], $params['repo'], $params['issue_number'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForPullRequestReviewComment_::OPERATION_MATCH:
                $operation = $this->reactions()->listForPullRequestReviewComment_($params['owner'], $params['repo'], $params['comment_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForPullRequestReviewComment_::OPERATION_MATCH:
                $operation = $this->reactions()->createForPullRequestReviewComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForPullRequestComment_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForPullRequestComment_($params['owner'], $params['repo'], $params['comment_id'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForRelease_::OPERATION_MATCH:
                $operation = $this->reactions()->listForRelease_($params['owner'], $params['repo'], $params['release_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForRelease_::OPERATION_MATCH:
                $operation = $this->reactions()->createForRelease_($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForRelease_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForRelease_($params['owner'], $params['repo'], $params['release_id'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->reactions()->listForTeamDiscussionCommentLegacy_($params['team_id'], $params['discussion_number'], $params['comment_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->reactions()->createForTeamDiscussionCommentLegacy_($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->reactions()->listForTeamDiscussionLegacy_($params['team_id'], $params['discussion_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->reactions()->createForTeamDiscussionLegacy_($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\RateLimit\Get_::OPERATION_MATCH:
                $operation = $this->rateLimit()->get_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimitOverview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Create_::OPERATION_MATCH:
                $operation = $this->checks()->create_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Get_::OPERATION_MATCH:
                $operation = $this->checks()->get_($params['owner'], $params['repo'], $params['check_run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Update_::OPERATION_MATCH:
                $operation = $this->checks()->update_($params['owner'], $params['repo'], $params['check_run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListAnnotations_::OPERATION_MATCH:
                $operation = $this->checks()->listAnnotations_($params['owner'], $params['repo'], $params['check_run_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C33D2984B495081F1F782F0Bdbed8A0E5 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestRun_::OPERATION_MATCH:
                $operation = $this->checks()->rerequestRun_($params['owner'], $params['repo'], $params['check_run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\CreateSuite_::OPERATION_MATCH:
                $operation = $this->checks()->createSuite_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckSuite {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\SetSuitesPreferences_::OPERATION_MATCH:
                $operation = $this->checks()->setSuitesPreferences_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckSuitePreference {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\GetSuite_::OPERATION_MATCH:
                $operation = $this->checks()->getSuite_($params['owner'], $params['repo'], $params['check_suite_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckSuite {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListForSuite_::OPERATION_MATCH:
                $operation = $this->checks()->listForSuite_($params['owner'], $params['repo'], $params['check_suite_id'], $params['check_name'], $params['status'], $params['filter'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C60F581B56E9Cea5Bd326503D1C6D1B0F {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestSuite_::OPERATION_MATCH:
                $operation = $this->checks()->rerequestSuite_($params['owner'], $params['repo'], $params['check_suite_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListForRef_::OPERATION_MATCH:
                $operation = $this->checks()->listForRef_($params['owner'], $params['repo'], $params['ref'], $params['check_name'], $params['status'], $params['filter'], $params['per_page'], $params['page'], $params['app_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C60F581B56E9Cea5Bd326503D1C6D1B0F {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListSuitesForRef_::OPERATION_MATCH:
                $operation = $this->checks()->listSuitesForRef_($params['owner'], $params['repo'], $params['ref'], $params['app_id'], $params['check_name'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFbc8Dc67261Ec91736E48C1Cf35B8429 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\DiffRange_::OPERATION_MATCH:
                $operation = $this->dependencyGraph()->diffRange_($params['owner'], $params['repo'], $params['basehead'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependencyGraphDiff|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\CreateRepositorySnapshot_::OPERATION_MATCH:
                $operation = $this->dependencyGraph()->createRepositorySnapshot_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C8638D96643Fcf5Ffcb917886B51C84Eb {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateBlob_::OPERATION_MATCH:
                $operation = $this->git()->createBlob_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ShortBlob|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetBlob_::OPERATION_MATCH:
                $operation = $this->git()->getBlob_($params['owner'], $params['repo'], $params['file_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Blob|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateCommit_::OPERATION_MATCH:
                $operation = $this->git()->createCommit_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitCommit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetCommit_::OPERATION_MATCH:
                $operation = $this->git()->getCommit_($params['owner'], $params['repo'], $params['commit_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitCommit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\ListMatchingRefs_::OPERATION_MATCH:
                $operation = $this->git()->listMatchingRefs_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C313800Aa2E76Bd5B3C9753E9E9Ae9Ee3 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetRef_::OPERATION_MATCH:
                $operation = $this->git()->getRef_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateRef_::OPERATION_MATCH:
                $operation = $this->git()->createRef_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\DeleteRef_::OPERATION_MATCH:
                $operation = $this->git()->deleteRef_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\UpdateRef_::OPERATION_MATCH:
                $operation = $this->git()->updateRef_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateTag_::OPERATION_MATCH:
                $operation = $this->git()->createTag_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTag|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetTag_::OPERATION_MATCH:
                $operation = $this->git()->getTag_($params['owner'], $params['repo'], $params['tag_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTag|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateTree_::OPERATION_MATCH:
                $operation = $this->git()->createTree_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTree|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetTree_::OPERATION_MATCH:
                $operation = $this->git()->getTree_($params['owner'], $params['repo'], $params['tree_sha'], $params['recursive']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTree|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\List_::OPERATION_MATCH:
                $operation = $this->pulls()->list_($params['owner'], $params['repo'], $params['state'], $params['head'], $params['base'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Afdcb273A556616D8867Fd50A161738|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Create_::OPERATION_MATCH:
                $operation = $this->pulls()->create_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviewCommentsForRepo_::OPERATION_MATCH:
                $operation = $this->pulls()->listReviewCommentsForRepo_($params['owner'], $params['repo'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF89C208Bbcc1Fa8Cdfabfebbde8Ab772 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReviewComment_::OPERATION_MATCH:
                $operation = $this->pulls()->getReviewComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeleteReviewComment_::OPERATION_MATCH:
                $operation = $this->pulls()->deleteReviewComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReviewComment_::OPERATION_MATCH:
                $operation = $this->pulls()->updateReviewComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Get_::OPERATION_MATCH:
                $operation = $this->pulls()->get_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Update_::OPERATION_MATCH:
                $operation = $this->pulls()->update_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviewComments_::OPERATION_MATCH:
                $operation = $this->pulls()->listReviewComments_($params['owner'], $params['repo'], $params['pull_number'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF89C208Bbcc1Fa8Cdfabfebbde8Ab772 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReviewComment_::OPERATION_MATCH:
                $operation = $this->pulls()->createReviewComment_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReplyForReviewComment_::OPERATION_MATCH:
                $operation = $this->pulls()->createReplyForReviewComment_($params['owner'], $params['repo'], $params['pull_number'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListCommits_::OPERATION_MATCH:
                $operation = $this->pulls()->listCommits_($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C844E23F82575A50855510A97A1C68898 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListFiles_::OPERATION_MATCH:
                $operation = $this->pulls()->listFiles_($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBd10796Debc7920F91B5617Afd47F727|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CheckIfMerged_::OPERATION_MATCH:
                $operation = $this->pulls()->checkIfMerged_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Merge_::OPERATION_MATCH:
                $operation = $this->pulls()->merge_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMergeResult|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListRequestedReviewers_::OPERATION_MATCH:
                $operation = $this->pulls()->listRequestedReviewers_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewRequest {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RequestReviewers_::OPERATION_MATCH:
                $operation = $this->pulls()->requestReviewers_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RemoveRequestedReviewers_::OPERATION_MATCH:
                $operation = $this->pulls()->removeRequestedReviewers_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviews_::OPERATION_MATCH:
                $operation = $this->pulls()->listReviews_($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9808Acb55D1D6De88353B547A6D24167 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReview_::OPERATION_MATCH:
                $operation = $this->pulls()->createReview_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReview_::OPERATION_MATCH:
                $operation = $this->pulls()->getReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReview_::OPERATION_MATCH:
                $operation = $this->pulls()->updateReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeletePendingReview_::OPERATION_MATCH:
                $operation = $this->pulls()->deletePendingReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListCommentsForReview_::OPERATION_MATCH:
                $operation = $this->pulls()->listCommentsForReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFb4596C0Fc740434Cef2371747A626Ed|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DismissReview_::OPERATION_MATCH:
                $operation = $this->pulls()->dismissReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\SubmitReview_::OPERATION_MATCH:
                $operation = $this->pulls()->submitReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateBranch_::OPERATION_MATCH:
                $operation = $this->pulls()->updateBranch_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA5445A08E16D224F94859Ebaf785C18A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Code_::OPERATION_MATCH:
                $operation = $this->search()->code_($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CEba9Ffad53Bf3D07A128329D2F082D34|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Commits_::OPERATION_MATCH:
                $operation = $this->search()->commits_($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1866497B9C15615Ec03A90Fac4282D1B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\IssuesAndPullRequests_::OPERATION_MATCH:
                $operation = $this->search()->issuesAndPullRequests_($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2Ad43Aedc57E80Fd3A21B0Feba475487|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Labels_::OPERATION_MATCH:
                $operation = $this->search()->labels_($params['repository_id'], $params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3D0B1A33D0E21B9449553352Ee4C6C9D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Repos_::OPERATION_MATCH:
                $operation = $this->search()->repos_($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB71A98Bede90C5E5046C1Ef70586Ae6F|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Topics_::OPERATION_MATCH:
                $operation = $this->search()->topics_($params['q'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C050Dfd1E0C4A60Cde55137Ec4864C709 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Users_::OPERATION_MATCH:
                $operation = $this->search()->users_($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC9971B26A226492E08644Fd99C1917A6|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetAuthenticated_::OPERATION_MATCH:
                $operation = $this->users()->getAuthenticated_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFa9375D5B4Dfa8F391595615Bd0Addf4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UpdateAuthenticated_::OPERATION_MATCH:
                $operation = $this->users()->updateAuthenticated_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PrivateUser|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListBlockedByAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listBlockedByAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckBlocked_::OPERATION_MATCH:
                $operation = $this->users()->checkBlocked_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Block_::OPERATION_MATCH:
                $operation = $this->users()->block_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unblock_::OPERATION_MATCH:
                $operation = $this->users()->unblock_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\SetPrimaryEmailVisibilityForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->setPrimaryEmailVisibilityForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD51E01Cc5874C6066A75A0Fc85B55D9B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListEmailsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listEmailsForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD51E01Cc5874C6066A75A0Fc85B55D9B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\AddEmailForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->addEmailForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD51E01Cc5874C6066A75A0Fc85B55D9B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteEmailForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->deleteEmailForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowersForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listFollowersForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowedByAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listFollowedByAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckPersonIsFollowedByAuthenticated_::OPERATION_MATCH:
                $operation = $this->users()->checkPersonIsFollowedByAuthenticated_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Follow_::OPERATION_MATCH:
                $operation = $this->users()->follow_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unfollow_::OPERATION_MATCH:
                $operation = $this->users()->unfollow_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listGpgKeysForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0F67251Be1Ebeacdc9100Fcc0Bd1D93E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreateGpgKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->createGpgKeyForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetGpgKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->getGpgKeyForAuthenticatedUser_($params['gpg_key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteGpgKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->deleteGpgKeyForAuthenticatedUser_($params['gpg_key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicSshKeysForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listPublicSshKeysForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C8569D1C942B35A48Ce04Dca29B28Fb71|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreatePublicSshKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->createPublicSshKeyForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Key|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetPublicSshKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->getPublicSshKeyForAuthenticatedUser_($params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Key|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeletePublicSshKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->deletePublicSshKeyForAuthenticatedUser_($params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicEmailsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listPublicEmailsForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD51E01Cc5874C6066A75A0Fc85B55D9B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListSshSigningKeysForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listSshSigningKeysForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C015E31Db5815A354C246A2918708Fa5E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreateSshSigningKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->createSshSigningKeyForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SshSigningKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetSshSigningKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->getSshSigningKeyForAuthenticatedUser_($params['ssh_signing_key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SshSigningKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteSshSigningKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->deleteSshSigningKeyForAuthenticatedUser_($params['ssh_signing_key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\List_::OPERATION_MATCH:
                $operation = $this->users()->list_($params['since'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetByUsername_::OPERATION_MATCH:
                $operation = $this->users()->getByUsername_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFa9375D5B4Dfa8F391595615Bd0Addf4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowersForUser_::OPERATION_MATCH:
                $operation = $this->users()->listFollowersForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowingForUser_::OPERATION_MATCH:
                $operation = $this->users()->listFollowingForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckFollowingForUser_::OPERATION_MATCH:
                $operation = $this->users()->checkFollowingForUser_($params['username'], $params['target_user']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForUser_::OPERATION_MATCH:
                $operation = $this->users()->listGpgKeysForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0F67251Be1Ebeacdc9100Fcc0Bd1D93E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetContextForUser_::OPERATION_MATCH:
                $operation = $this->users()->getContextForUser_($params['username'], $params['subject_type'], $params['subject_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hovercard|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicKeysForUser_::OPERATION_MATCH:
                $operation = $this->users()->listPublicKeysForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5C26E46Afe4Dc8D40051D9776F160A55 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListSshSigningKeysForUser_::OPERATION_MATCH:
                $operation = $this->users()->listSshSigningKeysForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C015E31Db5815A354C246A2918708Fa5E {
                    return $operation->createResponse($response);
                });
                break;
        }
    }
}
