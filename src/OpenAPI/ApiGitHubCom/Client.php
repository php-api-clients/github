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
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Root::OPERATION_MATCH:
                $operation = $this->meta()->root();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Root {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Get::OPERATION_MATCH:
                $operation = $this->meta()->get();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetOctocat::OPERATION_MATCH:
                $operation = $this->meta()->getOctocat($params['s']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetAllVersions::OPERATION_MATCH:
                $operation = $this->meta()->getAllVersions();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77490811Ec6Aee423Cd64C22A2B5B5E5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetZen::OPERATION_MATCH:
                $operation = $this->meta()->getZen();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetAuthenticated::OPERATION_MATCH:
                $operation = $this->apps()->getAuthenticated();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateFromManifest::OPERATION_MATCH:
                $operation = $this->apps()->createFromManifest($params['code']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C437E8818Bedc1D1C6A8A7E209Db56381|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookConfigForApp::OPERATION_MATCH:
                $operation = $this->apps()->getWebhookConfigForApp();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UpdateWebhookConfigForApp::OPERATION_MATCH:
                $operation = $this->apps()->updateWebhookConfigForApp();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListWebhookDeliveries::OPERATION_MATCH:
                $operation = $this->apps()->listWebhookDeliveries($params['per_page'], $params['cursor'], $params['redelivery']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0E8E1845F1Bc82Ea0E7B36D0Bb6E996D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookDelivery::OPERATION_MATCH:
                $operation = $this->apps()->getWebhookDelivery($params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RedeliverWebhookDelivery::OPERATION_MATCH:
                $operation = $this->apps()->redeliverWebhookDelivery($params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallations::OPERATION_MATCH:
                $operation = $this->apps()->listInstallations($params['per_page'], $params['page'], $params['since'], $params['outdated']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C46B4Faf08De395E78Aaa4B63456Ddd07 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetInstallation::OPERATION_MATCH:
                $operation = $this->apps()->getInstallation($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteInstallation::OPERATION_MATCH:
                $operation = $this->apps()->deleteInstallation($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateInstallationAccessToken::OPERATION_MATCH:
                $operation = $this->apps()->createInstallationAccessToken($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InstallationToken|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\SuspendInstallation::OPERATION_MATCH:
                $operation = $this->apps()->suspendInstallation($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UnsuspendInstallation::OPERATION_MATCH:
                $operation = $this->apps()->unsuspendInstallation($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteAuthorization::OPERATION_MATCH:
                $operation = $this->apps()->deleteAuthorization($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CheckToken::OPERATION_MATCH:
                $operation = $this->apps()->checkToken($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteToken::OPERATION_MATCH:
                $operation = $this->apps()->deleteToken($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ResetToken::OPERATION_MATCH:
                $operation = $this->apps()->resetToken($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ScopeToken::OPERATION_MATCH:
                $operation = $this->apps()->scopeToken($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetBySlug::OPERATION_MATCH:
                $operation = $this->apps()->getBySlug($params['app_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListReposAccessibleToInstallation::OPERATION_MATCH:
                $operation = $this->apps()->listReposAccessibleToInstallation($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C63C9C8546093Eddc0F7344B17E26F896|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeInstallationAccessToken::OPERATION_MATCH:
                $operation = $this->apps()->revokeInstallationAccessToken();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccount::OPERATION_MATCH:
                $operation = $this->apps()->getSubscriptionPlanForAccount($params['account_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlans::OPERATION_MATCH:
                $operation = $this->apps()->listPlans($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCc2Fa361959F5C2Ebcc542Ddf2E3A261|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlan::OPERATION_MATCH:
                $operation = $this->apps()->listAccountsForPlan($params['plan_id'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C85Daf15E4Fca630425Ab45E2Aba40600|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccountStubbed::OPERATION_MATCH:
                $operation = $this->apps()->getSubscriptionPlanForAccountStubbed($params['account_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlansStubbed::OPERATION_MATCH:
                $operation = $this->apps()->listPlansStubbed($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCc2Fa361959F5C2Ebcc542Ddf2E3A261|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlanStubbed::OPERATION_MATCH:
                $operation = $this->apps()->listAccountsForPlanStubbed($params['plan_id'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C85Daf15E4Fca630425Ab45E2Aba40600|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetOrgInstallation::OPERATION_MATCH:
                $operation = $this->apps()->getOrgInstallation($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetRepoInstallation::OPERATION_MATCH:
                $operation = $this->apps()->getRepoInstallation($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationsForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->apps()->listInstallationsForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDe13F0F1A91E8C86F2C1D90E147490E2|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationReposForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->apps()->listInstallationReposForAuthenticatedUser($params['installation_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CEc27Dba3202C5D416335209B147A39D5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\AddRepoToInstallationForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->apps()->addRepoToInstallationForAuthenticatedUser($params['installation_id'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->apps()->removeRepoFromInstallationForAuthenticatedUser($params['installation_id'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->apps()->listSubscriptionsForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9A3B6Ded8E470Eab041E356Ef497Aeec|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUserStubbed::OPERATION_MATCH:
                $operation = $this->apps()->listSubscriptionsForAuthenticatedUserStubbed($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9A3B6Ded8E470Eab041E356Ef497Aeec|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetUserInstallation::OPERATION_MATCH:
                $operation = $this->apps()->getUserInstallation($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetAllCodesOfConduct::OPERATION_MATCH:
                $operation = $this->codesOfConduct()->getAllCodesOfConduct();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C143D8483Bf88427Ecdccf31C4B84Df34 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetConductCode::OPERATION_MATCH:
                $operation = $this->codesOfConduct()->getConductCode($params['key']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeOfConduct|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Emojis\Get::OPERATION_MATCH:
                $operation = $this->emojis()->get();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C79A542C60Fea0A939B2Ff6241Fc22Cd9 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetServerStatistics::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getServerStatistics($params['enterprise_or_org'], $params['date_start'], $params['date_end']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ServerStatistics {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getGithubActionsPermissionsEnterprise($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsEnterprisePermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setGithubActionsPermissionsEnterprise($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelectedOrganizationsEnabledGithubActionsEnterprise($params['enterprise'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7Ccdeb8D72C56F2084Ef071E7F398831 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setSelectedOrganizationsEnabledGithubActionsEnterprise($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->enableSelectedOrganizationGithubActionsEnterprise($params['enterprise'], $params['org_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->disableSelectedOrganizationGithubActionsEnterprise($params['enterprise'], $params['org_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getAllowedActionsEnterprise($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SelectedActions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setAllowedActionsEnterprise($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelfHostedRunnerGroupsForEnterprise($params['enterprise'], $params['per_page'], $params['page'], $params['visible_to_organization']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB4Cf212608E86Be945Cb26F0Ee883938 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createSelfHostedRunnerGroupForEnterprise($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerGroupsEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getSelfHostedRunnerGroupForEnterprise($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerGroupsEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deleteSelfHostedRunnerGroupFromEnterprise($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updateSelfHostedRunnerGroupForEnterprise($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerGroupsEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listOrgAccessToSelfHostedRunnerGroupInEnterprise($params['enterprise'], $params['runner_group_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7Ccdeb8D72C56F2084Ef071E7F398831 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setOrgAccessToSelfHostedRunnerGroupInEnterprise($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->addOrgAccessToSelfHostedRunnerGroupInEnterprise($params['enterprise'], $params['runner_group_id'], $params['org_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removeOrgAccessToSelfHostedRunnerGroupInEnterprise($params['enterprise'], $params['runner_group_id'], $params['org_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelfHostedRunnersInGroupForEnterprise($params['enterprise'], $params['runner_group_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5F3B5341Fe53998B5Bf27243A42Db029 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setSelfHostedRunnersInGroupForEnterprise($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->addSelfHostedRunnerToGroupForEnterprise($params['enterprise'], $params['runner_group_id'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removeSelfHostedRunnerFromGroupForEnterprise($params['enterprise'], $params['runner_group_id'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelfHostedRunnersForEnterprise($params['enterprise'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C70992A2B1985E0F30Bf3Dc67Ba7A9E62 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listRunnerApplicationsForEnterprise($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C948655Af6C42D69A42F49158Df1C3402 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createRegistrationTokenForEnterprise($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createRemoveTokenForEnterprise($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getSelfHostedRunnerForEnterprise($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deleteSelfHostedRunnerFromEnterprise($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listLabelsForSelfHostedRunnerForEnterprise($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetCustomLabelsForSelfHostedRunnerForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setCustomLabelsForSelfHostedRunnerForEnterprise($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->addCustomLabelsToSelfHostedRunnerForEnterprise($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removeAllCustomLabelsFromSelfHostedRunnerForEnterprise($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removeCustomLabelFromSelfHostedRunnerForEnterprise($params['enterprise'], $params['runner_id'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageForEnterprise::OPERATION_MATCH:
                $operation = $this->actions()->getActionsCacheUsageForEnterprise($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageOrgEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsEnterprise::OPERATION_MATCH:
                $operation = $this->actions()->getGithubActionsDefaultWorkflowPermissionsEnterprise($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsGetDefaultWorkflowPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsEnterprise::OPERATION_MATCH:
                $operation = $this->actions()->setGithubActionsDefaultWorkflowPermissionsEnterprise($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageForOrg::OPERATION_MATCH:
                $operation = $this->actions()->getActionsCacheUsageForOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageOrgEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageByRepoForOrg::OPERATION_MATCH:
                $operation = $this->actions()->getActionsCacheUsageByRepoForOrg($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA766240607F2714081157433E87Abe14 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsOrganization::OPERATION_MATCH:
                $operation = $this->actions()->getGithubActionsPermissionsOrganization($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsOrganizationPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsOrganization::OPERATION_MATCH:
                $operation = $this->actions()->setGithubActionsPermissionsOrganization($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization::OPERATION_MATCH:
                $operation = $this->actions()->listSelectedRepositoriesEnabledGithubActionsOrganization($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD86C4818976F8F12B2C9B0E896F6291C {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization::OPERATION_MATCH:
                $operation = $this->actions()->setSelectedRepositoriesEnabledGithubActionsOrganization($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization::OPERATION_MATCH:
                $operation = $this->actions()->enableSelectedRepositoryGithubActionsOrganization($params['org'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization::OPERATION_MATCH:
                $operation = $this->actions()->disableSelectedRepositoryGithubActionsOrganization($params['org'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsOrganization::OPERATION_MATCH:
                $operation = $this->actions()->getAllowedActionsOrganization($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SelectedActions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsOrganization::OPERATION_MATCH:
                $operation = $this->actions()->setAllowedActionsOrganization($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization::OPERATION_MATCH:
                $operation = $this->actions()->getGithubActionsDefaultWorkflowPermissionsOrganization($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsGetDefaultWorkflowPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization::OPERATION_MATCH:
                $operation = $this->actions()->setGithubActionsDefaultWorkflowPermissionsOrganization($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnerGroupsForOrg::OPERATION_MATCH:
                $operation = $this->actions()->listSelfHostedRunnerGroupsForOrg($params['org'], $params['per_page'], $params['page'], $params['visible_to_repository']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C11Bbc0C404E1Dacac67952032Beda7Ae {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateSelfHostedRunnerGroupForOrg::OPERATION_MATCH:
                $operation = $this->actions()->createSelfHostedRunnerGroupForOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerGroupsOrg {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerGroupForOrg::OPERATION_MATCH:
                $operation = $this->actions()->getSelfHostedRunnerGroupForOrg($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerGroupsOrg {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg::OPERATION_MATCH:
                $operation = $this->actions()->deleteSelfHostedRunnerGroupFromOrg($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg::OPERATION_MATCH:
                $operation = $this->actions()->updateSelfHostedRunnerGroupForOrg($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerGroupsOrg {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg::OPERATION_MATCH:
                $operation = $this->actions()->listRepoAccessToSelfHostedRunnerGroupInOrg($params['org'], $params['runner_group_id'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD14Fa06Dcf5B5738F5504197E7609Eb5 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg::OPERATION_MATCH:
                $operation = $this->actions()->setRepoAccessToSelfHostedRunnerGroupInOrg($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg::OPERATION_MATCH:
                $operation = $this->actions()->removeRepoAccessToSelfHostedRunnerGroupInOrg($params['org'], $params['runner_group_id'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersInGroupForOrg::OPERATION_MATCH:
                $operation = $this->actions()->listSelfHostedRunnersInGroupForOrg($params['org'], $params['runner_group_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5F3B5341Fe53998B5Bf27243A42Db029 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelfHostedRunnersInGroupForOrg::OPERATION_MATCH:
                $operation = $this->actions()->setSelfHostedRunnersInGroupForOrg($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelfHostedRunnerToGroupForOrg::OPERATION_MATCH:
                $operation = $this->actions()->addSelfHostedRunnerToGroupForOrg($params['org'], $params['runner_group_id'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelfHostedRunnerFromGroupForOrg::OPERATION_MATCH:
                $operation = $this->actions()->removeSelfHostedRunnerFromGroupForOrg($params['org'], $params['runner_group_id'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForOrg::OPERATION_MATCH:
                $operation = $this->actions()->listSelfHostedRunnersForOrg($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB0601E51Fc03Ef9031D3Dad84Cee821B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForOrg::OPERATION_MATCH:
                $operation = $this->actions()->listRunnerApplicationsForOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C948655Af6C42D69A42F49158Df1C3402 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForOrg::OPERATION_MATCH:
                $operation = $this->actions()->createRegistrationTokenForOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForOrg::OPERATION_MATCH:
                $operation = $this->actions()->createRemoveTokenForOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForOrg::OPERATION_MATCH:
                $operation = $this->actions()->getSelfHostedRunnerForOrg($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromOrg::OPERATION_MATCH:
                $operation = $this->actions()->deleteSelfHostedRunnerFromOrg($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg::OPERATION_MATCH:
                $operation = $this->actions()->listLabelsForSelfHostedRunnerForOrg($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForOrg::OPERATION_MATCH:
                $operation = $this->actions()->setCustomLabelsForSelfHostedRunnerForOrg($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForOrg::OPERATION_MATCH:
                $operation = $this->actions()->addCustomLabelsToSelfHostedRunnerForOrg($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg::OPERATION_MATCH:
                $operation = $this->actions()->removeAllCustomLabelsFromSelfHostedRunnerForOrg($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg::OPERATION_MATCH:
                $operation = $this->actions()->removeCustomLabelFromSelfHostedRunnerForOrg($params['org'], $params['runner_id'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListOrgSecrets::OPERATION_MATCH:
                $operation = $this->actions()->listOrgSecrets($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Fd51E546F4Dbe120D78A3534B76Ce0E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgPublicKey::OPERATION_MATCH:
                $operation = $this->actions()->getOrgPublicKey($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgSecret::OPERATION_MATCH:
                $operation = $this->actions()->getOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationActionsSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateOrgSecret::OPERATION_MATCH:
                $operation = $this->actions()->createOrUpdateOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteOrgSecret::OPERATION_MATCH:
                $operation = $this->actions()->deleteOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedReposForOrgSecret::OPERATION_MATCH:
                $operation = $this->actions()->listSelectedReposForOrgSecret($params['org'], $params['secret_name'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDf642215E2806C848A16Ef294379Be7A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedReposForOrgSecret::OPERATION_MATCH:
                $operation = $this->actions()->setSelectedReposForOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelectedRepoToOrgSecret::OPERATION_MATCH:
                $operation = $this->actions()->addSelectedRepoToOrgSecret($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelectedRepoFromOrgSecret::OPERATION_MATCH:
                $operation = $this->actions()->removeSelectedRepoFromOrgSecret($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListArtifactsForRepo::OPERATION_MATCH:
                $operation = $this->actions()->listArtifactsForRepo($params['owner'], $params['repo'], $params['per_page'], $params['page'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1A91B16Fbf38476A7587Bb22E0507C4B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetArtifact::OPERATION_MATCH:
                $operation = $this->actions()->getArtifact($params['owner'], $params['repo'], $params['artifact_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Artifact {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteArtifact::OPERATION_MATCH:
                $operation = $this->actions()->deleteArtifact($params['owner'], $params['repo'], $params['artifact_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadArtifact::OPERATION_MATCH:
                $operation = $this->actions()->downloadArtifact($params['owner'], $params['repo'], $params['artifact_id'], $params['archive_format']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsage::OPERATION_MATCH:
                $operation = $this->actions()->getActionsCacheUsage($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageByRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheList::OPERATION_MATCH:
                $operation = $this->actions()->getActionsCacheList($params['owner'], $params['repo'], $params['per_page'], $params['page'], $params['ref'], $params['key'], $params['sort'], $params['direction']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheList {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheByKey::OPERATION_MATCH:
                $operation = $this->actions()->deleteActionsCacheByKey($params['owner'], $params['repo'], $params['key'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheList {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheById::OPERATION_MATCH:
                $operation = $this->actions()->deleteActionsCacheById($params['owner'], $params['repo'], $params['cache_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetJobForWorkflowRun::OPERATION_MATCH:
                $operation = $this->actions()->getJobForWorkflowRun($params['owner'], $params['repo'], $params['job_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Job {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadJobLogsForWorkflowRun::OPERATION_MATCH:
                $operation = $this->actions()->downloadJobLogsForWorkflowRun($params['owner'], $params['repo'], $params['job_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunJobForWorkflowRun::OPERATION_MATCH:
                $operation = $this->actions()->reRunJobForWorkflowRun($params['owner'], $params['repo'], $params['job_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetCustomOidcSubClaimForRepo::OPERATION_MATCH:
                $operation = $this->actions()->getCustomOidcSubClaimForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OidcCustomSubRepo|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomOidcSubClaimForRepo::OPERATION_MATCH:
                $operation = $this->actions()->setCustomOidcSubClaimForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsRepository::OPERATION_MATCH:
                $operation = $this->actions()->getGithubActionsPermissionsRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsRepositoryPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsRepository::OPERATION_MATCH:
                $operation = $this->actions()->setGithubActionsPermissionsRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowAccessToRepository::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflowAccessToRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsWorkflowAccessToRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetWorkflowAccessToRepository::OPERATION_MATCH:
                $operation = $this->actions()->setWorkflowAccessToRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsRepository::OPERATION_MATCH:
                $operation = $this->actions()->getAllowedActionsRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SelectedActions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsRepository::OPERATION_MATCH:
                $operation = $this->actions()->setAllowedActionsRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository::OPERATION_MATCH:
                $operation = $this->actions()->getGithubActionsDefaultWorkflowPermissionsRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsGetDefaultWorkflowPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository::OPERATION_MATCH:
                $operation = $this->actions()->setGithubActionsDefaultWorkflowPermissionsRepository($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForRepo::OPERATION_MATCH:
                $operation = $this->actions()->listSelfHostedRunnersForRepo($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB0601E51Fc03Ef9031D3Dad84Cee821B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForRepo::OPERATION_MATCH:
                $operation = $this->actions()->listRunnerApplicationsForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C948655Af6C42D69A42F49158Df1C3402 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForRepo::OPERATION_MATCH:
                $operation = $this->actions()->createRegistrationTokenForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForRepo::OPERATION_MATCH:
                $operation = $this->actions()->createRemoveTokenForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForRepo::OPERATION_MATCH:
                $operation = $this->actions()->getSelfHostedRunnerForRepo($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromRepo::OPERATION_MATCH:
                $operation = $this->actions()->deleteSelfHostedRunnerFromRepo($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForRepo::OPERATION_MATCH:
                $operation = $this->actions()->listLabelsForSelfHostedRunnerForRepo($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForRepo::OPERATION_MATCH:
                $operation = $this->actions()->setCustomLabelsForSelfHostedRunnerForRepo($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForRepo::OPERATION_MATCH:
                $operation = $this->actions()->addCustomLabelsToSelfHostedRunnerForRepo($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo::OPERATION_MATCH:
                $operation = $this->actions()->removeAllCustomLabelsFromSelfHostedRunnerForRepo($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo::OPERATION_MATCH:
                $operation = $this->actions()->removeCustomLabelFromSelfHostedRunnerForRepo($params['owner'], $params['repo'], $params['runner_id'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C465Ffe2283692C35B7E35Cd3F31B8C6B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRunsForRepo::OPERATION_MATCH:
                $operation = $this->actions()->listWorkflowRunsForRepo($params['owner'], $params['repo'], $params['actor'], $params['branch'], $params['event'], $params['status'], $params['per_page'], $params['page'], $params['created'], $params['exclude_pull_requests'], $params['check_suite_id'], $params['head_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3F96264280F4E42Bbb4A3Def4C7Bc4E1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRun::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflowRun($params['owner'], $params['repo'], $params['run_id'], $params['exclude_pull_requests']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRun::OPERATION_MATCH:
                $operation = $this->actions()->deleteWorkflowRun($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetReviewsForRun::OPERATION_MATCH:
                $operation = $this->actions()->getReviewsForRun($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C80B828E2203976Fb215Dd2159A745230 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ApproveWorkflowRun::OPERATION_MATCH:
                $operation = $this->actions()->approveWorkflowRun($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRunArtifacts::OPERATION_MATCH:
                $operation = $this->actions()->listWorkflowRunArtifacts($params['owner'], $params['repo'], $params['run_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1A91B16Fbf38476A7587Bb22E0507C4B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunAttempt::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflowRunAttempt($params['owner'], $params['repo'], $params['run_id'], $params['attempt_number'], $params['exclude_pull_requests']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListJobsForWorkflowRunAttempt::OPERATION_MATCH:
                $operation = $this->actions()->listJobsForWorkflowRunAttempt($params['owner'], $params['repo'], $params['run_id'], $params['attempt_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB20125C2E2C4A492F2Eb5Ef9E4F52Eb8|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadWorkflowRunAttemptLogs::OPERATION_MATCH:
                $operation = $this->actions()->downloadWorkflowRunAttemptLogs($params['owner'], $params['repo'], $params['run_id'], $params['attempt_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CancelWorkflowRun::OPERATION_MATCH:
                $operation = $this->actions()->cancelWorkflowRun($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListJobsForWorkflowRun::OPERATION_MATCH:
                $operation = $this->actions()->listJobsForWorkflowRun($params['owner'], $params['repo'], $params['run_id'], $params['filter'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB20125C2E2C4A492F2Eb5Ef9E4F52Eb8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadWorkflowRunLogs::OPERATION_MATCH:
                $operation = $this->actions()->downloadWorkflowRunLogs($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRunLogs::OPERATION_MATCH:
                $operation = $this->actions()->deleteWorkflowRunLogs($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetPendingDeploymentsForRun::OPERATION_MATCH:
                $operation = $this->actions()->getPendingDeploymentsForRun($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C59Fc918Ad52E8Aa18611814E35E7Da47 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReviewPendingDeploymentsForRun::OPERATION_MATCH:
                $operation = $this->actions()->reviewPendingDeploymentsForRun($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6C1Be1B26A14C84Ab35C32Ee2E0Fcd2A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunWorkflow::OPERATION_MATCH:
                $operation = $this->actions()->reRunWorkflow($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunWorkflowFailedJobs::OPERATION_MATCH:
                $operation = $this->actions()->reRunWorkflowFailedJobs($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunUsage::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflowRunUsage($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRunUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoSecrets::OPERATION_MATCH:
                $operation = $this->actions()->listRepoSecrets($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C58E2D92A7Aba442Fdb0A439Eb965962E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoPublicKey::OPERATION_MATCH:
                $operation = $this->actions()->getRepoPublicKey($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoSecret::OPERATION_MATCH:
                $operation = $this->actions()->getRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateRepoSecret::OPERATION_MATCH:
                $operation = $this->actions()->createOrUpdateRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteRepoSecret::OPERATION_MATCH:
                $operation = $this->actions()->deleteRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoWorkflows::OPERATION_MATCH:
                $operation = $this->actions()->listRepoWorkflows($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE25F066E8D67A0F40D61Cb64Df1Cebf6 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflow::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflow($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Workflow {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DisableWorkflow::OPERATION_MATCH:
                $operation = $this->actions()->disableWorkflow($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateWorkflowDispatch::OPERATION_MATCH:
                $operation = $this->actions()->createWorkflowDispatch($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableWorkflow::OPERATION_MATCH:
                $operation = $this->actions()->enableWorkflow($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRuns::OPERATION_MATCH:
                $operation = $this->actions()->listWorkflowRuns($params['owner'], $params['repo'], $params['workflow_id'], $params['actor'], $params['branch'], $params['event'], $params['status'], $params['per_page'], $params['page'], $params['created'], $params['exclude_pull_requests'], $params['check_suite_id'], $params['head_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3F96264280F4E42Bbb4A3Def4C7Bc4E1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowUsage::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflowUsage($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListEnvironmentSecrets::OPERATION_MATCH:
                $operation = $this->actions()->listEnvironmentSecrets($params['repository_id'], $params['environment_name'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C58E2D92A7Aba442Fdb0A439Eb965962E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentPublicKey::OPERATION_MATCH:
                $operation = $this->actions()->getEnvironmentPublicKey($params['repository_id'], $params['environment_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentSecret::OPERATION_MATCH:
                $operation = $this->actions()->getEnvironmentSecret($params['repository_id'], $params['environment_name'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateEnvironmentSecret::OPERATION_MATCH:
                $operation = $this->actions()->createOrUpdateEnvironmentSecret($params['repository_id'], $params['environment_name'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentSecret::OPERATION_MATCH:
                $operation = $this->actions()->deleteEnvironmentSecret($params['repository_id'], $params['environment_name'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForEnterprise::OPERATION_MATCH:
                $operation = $this->codeScanning()->listAlertsForEnterprise($params['enterprise'], $params['tool_name'], $params['tool_guid'], $params['before'], $params['after'], $params['page'], $params['per_page'], $params['direction'], $params['state'], $params['sort']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C66C0E6C0739Ea290Bab603396Ea44C1C|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForOrg::OPERATION_MATCH:
                $operation = $this->codeScanning()->listAlertsForOrg($params['org'], $params['tool_name'], $params['tool_guid'], $params['before'], $params['after'], $params['page'], $params['per_page'], $params['direction'], $params['state'], $params['sort'], $params['severity']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C66C0E6C0739Ea290Bab603396Ea44C1C|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForRepo::OPERATION_MATCH:
                $operation = $this->codeScanning()->listAlertsForRepo($params['owner'], $params['repo'], $params['tool_name'], $params['tool_guid'], $params['page'], $params['per_page'], $params['ref'], $params['direction'], $params['sort'], $params['state'], $params['severity']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBc37E871E17Fe903B1C649F1083B8F2A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetAlert::OPERATION_MATCH:
                $operation = $this->codeScanning()->getAlert($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UpdateAlert::OPERATION_MATCH:
                $operation = $this->codeScanning()->updateAlert($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertInstances::OPERATION_MATCH:
                $operation = $this->codeScanning()->listAlertInstances($params['owner'], $params['repo'], $params['alert_number'], $params['page'], $params['per_page'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC78B9C183723A3Bb5Ac53690424C6377|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListRecentAnalyses::OPERATION_MATCH:
                $operation = $this->codeScanning()->listRecentAnalyses($params['owner'], $params['repo'], $params['tool_name'], $params['tool_guid'], $params['page'], $params['per_page'], $params['ref'], $params['sarif_id'], $params['direction'], $params['sort']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAa25296392E3D9Ad52Fb8E4Fe1451324|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetAnalysis::OPERATION_MATCH:
                $operation = $this->codeScanning()->getAnalysis($params['owner'], $params['repo'], $params['analysis_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAnalysis|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2F9C313De3F7Bfd4586Bcc096B11A634|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\DeleteAnalysis::OPERATION_MATCH:
                $operation = $this->codeScanning()->deleteAnalysis($params['owner'], $params['repo'], $params['analysis_id'], $params['confirm_delete']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAnalysisDeletion|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListCodeqlDatabases::OPERATION_MATCH:
                $operation = $this->codeScanning()->listCodeqlDatabases($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5615C8F18C6A5Dde87A6B6Ce3B6B4Bdd|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetCodeqlDatabase::OPERATION_MATCH:
                $operation = $this->codeScanning()->getCodeqlDatabase($params['owner'], $params['repo'], $params['language']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningCodeqlDatabase|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UploadSarif::OPERATION_MATCH:
                $operation = $this->codeScanning()->uploadSarif($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningSarifsReceipt|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetSarif::OPERATION_MATCH:
                $operation = $this->codeScanning()->getSarif($params['owner'], $params['repo'], $params['sarif_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningSarifsStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetSecurityAnalysisSettingsForEnterprise::OPERATION_MATCH:
                $operation = $this->secretScanning()->getSecurityAnalysisSettingsForEnterprise($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EnterpriseSecurityAnalysisSettings|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise::OPERATION_MATCH:
                $operation = $this->secretScanning()->patchSecurityAnalysisSettingsForEnterprise($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForEnterprise::OPERATION_MATCH:
                $operation = $this->secretScanning()->listAlertsForEnterprise($params['enterprise'], $params['state'], $params['secret_type'], $params['resolution'], $params['sort'], $params['direction'], $params['per_page'], $params['before'], $params['after']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFd814D7C5E2Ff25C0Eb53A2330D6Ae5C|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\PostSecurityProductEnablementForEnterprise::OPERATION_MATCH:
                $operation = $this->secretScanning()->postSecurityProductEnablementForEnterprise($params['enterprise'], $params['security_product'], $params['enablement']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForOrg::OPERATION_MATCH:
                $operation = $this->secretScanning()->listAlertsForOrg($params['org'], $params['state'], $params['secret_type'], $params['resolution'], $params['sort'], $params['direction'], $params['page'], $params['per_page'], $params['before'], $params['after']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFd814D7C5E2Ff25C0Eb53A2330D6Ae5C|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForRepo::OPERATION_MATCH:
                $operation = $this->secretScanning()->listAlertsForRepo($params['owner'], $params['repo'], $params['state'], $params['secret_type'], $params['resolution'], $params['sort'], $params['direction'], $params['page'], $params['per_page'], $params['before'], $params['after']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCb085D9Ebc5899512C96124178Febdda|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetAlert::OPERATION_MATCH:
                $operation = $this->secretScanning()->getAlert($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\UpdateAlert::OPERATION_MATCH:
                $operation = $this->secretScanning()->updateAlert($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListLocationsForAlert::OPERATION_MATCH:
                $operation = $this->secretScanning()->listLocationsForAlert($params['owner'], $params['repo'], $params['alert_number'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C454A8B9E7Fb48Afa72B1Fe7B69Cb356F|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForEnterprise::OPERATION_MATCH:
                $operation = $this->dependabot()->listAlertsForEnterprise($params['enterprise'], $params['state'], $params['severity'], $params['ecosystem'], $params['package'], $params['scope'], $params['sort'], $params['direction'], $params['before'], $params['after'], $params['first'], $params['last'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDe3Dabb9C272759Fc560De14Ac7712B1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForOrg::OPERATION_MATCH:
                $operation = $this->dependabot()->listAlertsForOrg($params['org'], $params['state'], $params['severity'], $params['ecosystem'], $params['package'], $params['scope'], $params['sort'], $params['direction'], $params['before'], $params['after'], $params['first'], $params['last'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDe3Dabb9C272759Fc560De14Ac7712B1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListOrgSecrets::OPERATION_MATCH:
                $operation = $this->dependabot()->listOrgSecrets($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD473A10774432Df37Acb22F4Ded22Ffb {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetOrgPublicKey::OPERATION_MATCH:
                $operation = $this->dependabot()->getOrgPublicKey($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetOrgSecret::OPERATION_MATCH:
                $operation = $this->dependabot()->getOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationDependabotSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateOrgSecret::OPERATION_MATCH:
                $operation = $this->dependabot()->createOrUpdateOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteOrgSecret::OPERATION_MATCH:
                $operation = $this->dependabot()->deleteOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListSelectedReposForOrgSecret::OPERATION_MATCH:
                $operation = $this->dependabot()->listSelectedReposForOrgSecret($params['org'], $params['secret_name'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDf642215E2806C848A16Ef294379Be7A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\SetSelectedReposForOrgSecret::OPERATION_MATCH:
                $operation = $this->dependabot()->setSelectedReposForOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\AddSelectedRepoToOrgSecret::OPERATION_MATCH:
                $operation = $this->dependabot()->addSelectedRepoToOrgSecret($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\RemoveSelectedRepoFromOrgSecret::OPERATION_MATCH:
                $operation = $this->dependabot()->removeSelectedRepoFromOrgSecret($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForRepo::OPERATION_MATCH:
                $operation = $this->dependabot()->listAlertsForRepo($params['owner'], $params['repo'], $params['state'], $params['severity'], $params['ecosystem'], $params['package'], $params['manifest'], $params['scope'], $params['sort'], $params['direction'], $params['page'], $params['per_page'], $params['before'], $params['after'], $params['first'], $params['last']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C85584C8E40Be29Bdd8560E2B325Bf492|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetAlert::OPERATION_MATCH:
                $operation = $this->dependabot()->getAlert($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\UpdateAlert::OPERATION_MATCH:
                $operation = $this->dependabot()->updateAlert($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlert|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListRepoSecrets::OPERATION_MATCH:
                $operation = $this->dependabot()->listRepoSecrets($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7895A235Cda3D308743D24C28426Bd8D {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoPublicKey::OPERATION_MATCH:
                $operation = $this->dependabot()->getRepoPublicKey($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoSecret::OPERATION_MATCH:
                $operation = $this->dependabot()->getRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateRepoSecret::OPERATION_MATCH:
                $operation = $this->dependabot()->createOrUpdateRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteRepoSecret::OPERATION_MATCH:
                $operation = $this->dependabot()->deleteRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubAdvancedSecurityBillingGhe::OPERATION_MATCH:
                $operation = $this->billing()->getGithubAdvancedSecurityBillingGhe($params['enterprise'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AdvancedSecurityActiveCommitters|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingOrg::OPERATION_MATCH:
                $operation = $this->billing()->getGithubActionsBillingOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubAdvancedSecurityBillingOrg::OPERATION_MATCH:
                $operation = $this->billing()->getGithubAdvancedSecurityBillingOrg($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AdvancedSecurityActiveCommitters|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingOrg::OPERATION_MATCH:
                $operation = $this->billing()->getGithubPackagesBillingOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackagesBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingOrg::OPERATION_MATCH:
                $operation = $this->billing()->getSharedStorageBillingOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CombinedBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingUser::OPERATION_MATCH:
                $operation = $this->billing()->getGithubActionsBillingUser($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingUser::OPERATION_MATCH:
                $operation = $this->billing()->getGithubPackagesBillingUser($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackagesBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingUser::OPERATION_MATCH:
                $operation = $this->billing()->getSharedStorageBillingUser($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CombinedBillingUsage {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEvents::OPERATION_MATCH:
                $operation = $this->activity()->listPublicEvents($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetFeeds::OPERATION_MATCH:
                $operation = $this->activity()->getFeeds();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Feed {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEventsForRepoNetwork::OPERATION_MATCH:
                $operation = $this->activity()->listPublicEventsForRepoNetwork($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListNotificationsForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->activity()->listNotificationsForAuthenticatedUser($params['all'], $params['participating'], $params['since'], $params['before'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC0Fbffa58E240B1E3B02B30C16Ca715A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkNotificationsAsRead::OPERATION_MATCH:
                $operation = $this->activity()->markNotificationsAsRead();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7B1F87F42Ca7F4E6F27Ed1Bcbfcee301|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThread::OPERATION_MATCH:
                $operation = $this->activity()->getThread($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Thread|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkThreadAsRead::OPERATION_MATCH:
                $operation = $this->activity()->markThreadAsRead($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->activity()->getThreadSubscriptionForAuthenticatedUser($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ThreadSubscription|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\SetThreadSubscription::OPERATION_MATCH:
                $operation = $this->activity()->setThreadSubscription($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ThreadSubscription|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\DeleteThreadSubscription::OPERATION_MATCH:
                $operation = $this->activity()->deleteThreadSubscription($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicOrgEvents::OPERATION_MATCH:
                $operation = $this->activity()->listPublicOrgEvents($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListRepoEvents::OPERATION_MATCH:
                $operation = $this->activity()->listRepoEvents($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListRepoNotificationsForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->activity()->listRepoNotificationsForAuthenticatedUser($params['owner'], $params['repo'], $params['all'], $params['participating'], $params['since'], $params['before'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC0Fbffa58E240B1E3B02B30C16Ca715A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkRepoNotificationsAsRead::OPERATION_MATCH:
                $operation = $this->activity()->markRepoNotificationsAsRead($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA5445A08E16D224F94859Ebaf785C18A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListStargazersForRepo::OPERATION_MATCH:
                $operation = $this->activity()->listStargazersForRepo($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF19Ab2103D1Cee92F695Dd9D475183C0|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListWatchersForRepo::OPERATION_MATCH:
                $operation = $this->activity()->listWatchersForRepo($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetRepoSubscription::OPERATION_MATCH:
                $operation = $this->activity()->getRepoSubscription($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositorySubscription|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\SetRepoSubscription::OPERATION_MATCH:
                $operation = $this->activity()->setRepoSubscription($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositorySubscription {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\DeleteRepoSubscription::OPERATION_MATCH:
                $operation = $this->activity()->deleteRepoSubscription($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReposStarredByAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->activity()->listReposStarredByAuthenticatedUser($params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAf9Ce4Aef95F91Ba5Bb8937E005A4Bf1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCa3B5A6Ea5F1333A83F449A6Fd97Dc6D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\CheckRepoIsStarredByAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->activity()->checkRepoIsStarredByAuthenticatedUser($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\StarRepoForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->activity()->starRepoForAuthenticatedUser($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\UnstarRepoForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->activity()->unstarRepoForAuthenticatedUser($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListWatchedReposForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->activity()->listWatchedReposForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListEventsForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->activity()->listEventsForAuthenticatedUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListOrgEventsForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->activity()->listOrgEventsForAuthenticatedUser($params['username'], $params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEventsForUser::OPERATION_MATCH:
                $operation = $this->activity()->listPublicEventsForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReceivedEventsForUser::OPERATION_MATCH:
                $operation = $this->activity()->listReceivedEventsForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReceivedPublicEventsForUser::OPERATION_MATCH:
                $operation = $this->activity()->listReceivedPublicEventsForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C77B6F7F3Cbae57A68282612C955E918E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReposStarredByUser::OPERATION_MATCH:
                $operation = $this->activity()->listReposStarredByUser($params['username'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0C798Ad00F8D3C55Cbd869Ea186B67D0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReposWatchedByUser::OPERATION_MATCH:
                $operation = $this->activity()->listReposWatchedByUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\List::OPERATION_MATCH:
                $operation = $this->gists()->list($params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C43F872E018E0D7Ee6Ab48Ae6B947F23A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Create::OPERATION_MATCH:
                $operation = $this->gists()->create();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListPublic::OPERATION_MATCH:
                $operation = $this->gists()->listPublic($params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C43F872E018E0D7Ee6Ab48Ae6B947F23A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListStarred::OPERATION_MATCH:
                $operation = $this->gists()->listStarred($params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C43F872E018E0D7Ee6Ab48Ae6B947F23A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Get::OPERATION_MATCH:
                $operation = $this->gists()->get($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD7C4628D526D62D8495C7C6Cbef013C7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Delete::OPERATION_MATCH:
                $operation = $this->gists()->delete($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Update::OPERATION_MATCH:
                $operation = $this->gists()->update($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListComments::OPERATION_MATCH:
                $operation = $this->gists()->listComments($params['gist_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9589B48D06725Dd205Dd68F2Cb85C975|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\CreateComment::OPERATION_MATCH:
                $operation = $this->gists()->createComment($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetComment::OPERATION_MATCH:
                $operation = $this->gists()->getComment($params['gist_id'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD7C4628D526D62D8495C7C6Cbef013C7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\DeleteComment::OPERATION_MATCH:
                $operation = $this->gists()->deleteComment($params['gist_id'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\UpdateComment::OPERATION_MATCH:
                $operation = $this->gists()->updateComment($params['gist_id'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListCommits::OPERATION_MATCH:
                $operation = $this->gists()->listCommits($params['gist_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C43Aae5Cfe9D6C3E12Bb4133Ab827C5B9|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListForks::OPERATION_MATCH:
                $operation = $this->gists()->listForks($params['gist_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0B3930309F9C72E778A65961Ebbc74Ef|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Fork::OPERATION_MATCH:
                $operation = $this->gists()->fork($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\CheckIsStarred::OPERATION_MATCH:
                $operation = $this->gists()->checkIsStarred($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Star::OPERATION_MATCH:
                $operation = $this->gists()->star($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Unstar::OPERATION_MATCH:
                $operation = $this->gists()->unstar($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetRevision::OPERATION_MATCH:
                $operation = $this->gists()->getRevision($params['gist_id'], $params['sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListForUser::OPERATION_MATCH:
                $operation = $this->gists()->listForUser($params['username'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C43F872E018E0D7Ee6Ab48Ae6B947F23A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetAllTemplates::OPERATION_MATCH:
                $operation = $this->gitignore()->getAllTemplates();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetTemplate::OPERATION_MATCH:
                $operation = $this->gitignore()->getTemplate($params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitignoreTemplate {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\List::OPERATION_MATCH:
                $operation = $this->issues()->list($params['filter'], $params['state'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['collab'], $params['orgs'], $params['owned'], $params['pulls'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBabf466417Ca3993Bac6Dc221711A46E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForOrg::OPERATION_MATCH:
                $operation = $this->issues()->listForOrg($params['org'], $params['filter'], $params['state'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBabf466417Ca3993Bac6Dc221711A46E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListAssignees::OPERATION_MATCH:
                $operation = $this->issues()->listAssignees($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CheckUserCanBeAssigned::OPERATION_MATCH:
                $operation = $this->issues()->checkUserCanBeAssigned($params['owner'], $params['repo'], $params['assignee']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForRepo::OPERATION_MATCH:
                $operation = $this->issues()->listForRepo($params['owner'], $params['repo'], $params['milestone'], $params['state'], $params['assignee'], $params['creator'], $params['mentioned'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBabf466417Ca3993Bac6Dc221711A46E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Create::OPERATION_MATCH:
                $operation = $this->issues()->create($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListCommentsForRepo::OPERATION_MATCH:
                $operation = $this->issues()->listCommentsForRepo($params['owner'], $params['repo'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7Ddbb99E798Ea46E16037A3B2A8616D6|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetComment::OPERATION_MATCH:
                $operation = $this->issues()->getComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteComment::OPERATION_MATCH:
                $operation = $this->issues()->deleteComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateComment::OPERATION_MATCH:
                $operation = $this->issues()->updateComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEventsForRepo::OPERATION_MATCH:
                $operation = $this->issues()->listEventsForRepo($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C91F9Dffd45F76F907A2408Dfb98A8958|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetEvent::OPERATION_MATCH:
                $operation = $this->issues()->getEvent($params['owner'], $params['repo'], $params['event_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueEvent|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Get::OPERATION_MATCH:
                $operation = $this->issues()->get($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Update::OPERATION_MATCH:
                $operation = $this->issues()->update($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\AddAssignees::OPERATION_MATCH:
                $operation = $this->issues()->addAssignees($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveAssignees::OPERATION_MATCH:
                $operation = $this->issues()->removeAssignees($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListComments::OPERATION_MATCH:
                $operation = $this->issues()->listComments($params['owner'], $params['repo'], $params['issue_number'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7Ddbb99E798Ea46E16037A3B2A8616D6|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateComment::OPERATION_MATCH:
                $operation = $this->issues()->createComment($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEvents::OPERATION_MATCH:
                $operation = $this->issues()->listEvents($params['owner'], $params['repo'], $params['issue_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3E04B60Abe35C284A39A331B5A490Adf|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsOnIssue::OPERATION_MATCH:
                $operation = $this->issues()->listLabelsOnIssue($params['owner'], $params['repo'], $params['issue_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\SetLabels::OPERATION_MATCH:
                $operation = $this->issues()->setLabels($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\AddLabels::OPERATION_MATCH:
                $operation = $this->issues()->addLabels($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveAllLabels::OPERATION_MATCH:
                $operation = $this->issues()->removeAllLabels($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveLabel::OPERATION_MATCH:
                $operation = $this->issues()->removeLabel($params['owner'], $params['repo'], $params['issue_number'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Lock::OPERATION_MATCH:
                $operation = $this->issues()->lock($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Unlock::OPERATION_MATCH:
                $operation = $this->issues()->unlock($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEventsForTimeline::OPERATION_MATCH:
                $operation = $this->issues()->listEventsForTimeline($params['owner'], $params['repo'], $params['issue_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6875E80E7A2F2A7E54Face53445Dd736|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsForRepo::OPERATION_MATCH:
                $operation = $this->issues()->listLabelsForRepo($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateLabel::OPERATION_MATCH:
                $operation = $this->issues()->createLabel($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Label|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetLabel::OPERATION_MATCH:
                $operation = $this->issues()->getLabel($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Label|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteLabel::OPERATION_MATCH:
                $operation = $this->issues()->deleteLabel($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateLabel::OPERATION_MATCH:
                $operation = $this->issues()->updateLabel($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Label {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListMilestones::OPERATION_MATCH:
                $operation = $this->issues()->listMilestones($params['owner'], $params['repo'], $params['state'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7E88818B96F4B827A88Bdffeb546E221|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateMilestone::OPERATION_MATCH:
                $operation = $this->issues()->createMilestone($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Milestone|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetMilestone::OPERATION_MATCH:
                $operation = $this->issues()->getMilestone($params['owner'], $params['repo'], $params['milestone_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Milestone|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteMilestone::OPERATION_MATCH:
                $operation = $this->issues()->deleteMilestone($params['owner'], $params['repo'], $params['milestone_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateMilestone::OPERATION_MATCH:
                $operation = $this->issues()->updateMilestone($params['owner'], $params['repo'], $params['milestone_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Milestone {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsForMilestone::OPERATION_MATCH:
                $operation = $this->issues()->listLabelsForMilestone($params['owner'], $params['repo'], $params['milestone_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->issues()->listForAuthenticatedUser($params['filter'], $params['state'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBabf466417Ca3993Bac6Dc221711A46E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses\GetAllCommonlyUsed::OPERATION_MATCH:
                $operation = $this->licenses()->getAllCommonlyUsed($params['featured'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD8C95C094316027Eaa26C6Eaf9500Ad8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses\Get::OPERATION_MATCH:
                $operation = $this->licenses()->get($params['license']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses\GetForRepo::OPERATION_MATCH:
                $operation = $this->licenses()->getForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseContent {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\Render::OPERATION_MATCH:
                $operation = $this->markdown()->render();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\RenderRaw::OPERATION_MATCH:
                $operation = $this->markdown()->renderRaw();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\List::OPERATION_MATCH:
                $operation = $this->orgs()->list($params['since'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD25549Cde7Ef111A37D0A59E619F994A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListCustomRoles::OPERATION_MATCH:
                $operation = $this->orgs()->listCustomRoles($params['organization_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C19Eb4036F8A42F3C5B379E759Ef04C69 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Get::OPERATION_MATCH:
                $operation = $this->orgs()->get($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Update::OPERATION_MATCH:
                $operation = $this->orgs()->update($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C197505B37575Ae3739584A4C9Efe0801|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListBlockedUsers::OPERATION_MATCH:
                $operation = $this->orgs()->listBlockedUsers($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckBlockedUser::OPERATION_MATCH:
                $operation = $this->orgs()->checkBlockedUser($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\BlockUser::OPERATION_MATCH:
                $operation = $this->orgs()->blockUser($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UnblockUser::OPERATION_MATCH:
                $operation = $this->orgs()->unblockUser($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateCustomRole::OPERATION_MATCH:
                $operation = $this->orgs()->createCustomRole($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationCustomRepositoryRole|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetCustomRole::OPERATION_MATCH:
                $operation = $this->orgs()->getCustomRole($params['org'], $params['role_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationCustomRepositoryRole|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\DeleteCustomRole::OPERATION_MATCH:
                $operation = $this->orgs()->deleteCustomRole($params['org'], $params['role_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateCustomRole::OPERATION_MATCH:
                $operation = $this->orgs()->updateCustomRole($params['org'], $params['role_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationCustomRepositoryRole|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListFailedInvitations::OPERATION_MATCH:
                $operation = $this->orgs()->listFailedInvitations($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C292Eea0D3E06B707B2B60E9Fa544B678|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListFineGrainedPermissions::OPERATION_MATCH:
                $operation = $this->orgs()->listFineGrainedPermissions($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1A135545778A6D3F051B1125A78Fd35C {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhooks::OPERATION_MATCH:
                $operation = $this->orgs()->listWebhooks($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C8C7417Cb08B593A169C0D2A998Ca13C8|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateWebhook::OPERATION_MATCH:
                $operation = $this->orgs()->createWebhook($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhook::OPERATION_MATCH:
                $operation = $this->orgs()->getWebhook($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\DeleteWebhook::OPERATION_MATCH:
                $operation = $this->orgs()->deleteWebhook($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhook::OPERATION_MATCH:
                $operation = $this->orgs()->updateWebhook($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookConfigForOrg::OPERATION_MATCH:
                $operation = $this->orgs()->getWebhookConfigForOrg($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhookConfigForOrg::OPERATION_MATCH:
                $operation = $this->orgs()->updateWebhookConfigForOrg($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhookDeliveries::OPERATION_MATCH:
                $operation = $this->orgs()->listWebhookDeliveries($params['org'], $params['hook_id'], $params['per_page'], $params['cursor'], $params['redelivery']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0E8E1845F1Bc82Ea0E7B36D0Bb6E996D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookDelivery::OPERATION_MATCH:
                $operation = $this->orgs()->getWebhookDelivery($params['org'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RedeliverWebhookDelivery::OPERATION_MATCH:
                $operation = $this->orgs()->redeliverWebhookDelivery($params['org'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\PingWebhook::OPERATION_MATCH:
                $operation = $this->orgs()->pingWebhook($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListAppInstallations::OPERATION_MATCH:
                $operation = $this->orgs()->listAppInstallations($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDe13F0F1A91E8C86F2C1D90E147490E2 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPendingInvitations::OPERATION_MATCH:
                $operation = $this->orgs()->listPendingInvitations($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C292Eea0D3E06B707B2B60E9Fa544B678|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateInvitation::OPERATION_MATCH:
                $operation = $this->orgs()->createInvitation($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationInvitation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CancelInvitation::OPERATION_MATCH:
                $operation = $this->orgs()->cancelInvitation($params['org'], $params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListInvitationTeams::OPERATION_MATCH:
                $operation = $this->orgs()->listInvitationTeams($params['org'], $params['invitation_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembers::OPERATION_MATCH:
                $operation = $this->orgs()->listMembers($params['org'], $params['filter'], $params['role'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckMembershipForUser::OPERATION_MATCH:
                $operation = $this->orgs()->checkMembershipForUser($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMember::OPERATION_MATCH:
                $operation = $this->orgs()->removeMember($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForUser::OPERATION_MATCH:
                $operation = $this->orgs()->getMembershipForUser($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetMembershipForUser::OPERATION_MATCH:
                $operation = $this->orgs()->setMembershipForUser($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMembershipForUser::OPERATION_MATCH:
                $operation = $this->orgs()->removeMembershipForUser($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListOutsideCollaborators::OPERATION_MATCH:
                $operation = $this->orgs()->listOutsideCollaborators($params['org'], $params['filter'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ConvertMemberToOutsideCollaborator::OPERATION_MATCH:
                $operation = $this->orgs()->convertMemberToOutsideCollaborator($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveOutsideCollaborator::OPERATION_MATCH:
                $operation = $this->orgs()->removeOutsideCollaborator($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPublicMembers::OPERATION_MATCH:
                $operation = $this->orgs()->listPublicMembers($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckPublicMembershipForUser::OPERATION_MATCH:
                $operation = $this->orgs()->checkPublicMembershipForUser($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetPublicMembershipForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->orgs()->setPublicMembershipForAuthenticatedUser($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->orgs()->removePublicMembershipForAuthenticatedUser($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListSecurityManagerTeams::OPERATION_MATCH:
                $operation = $this->orgs()->listSecurityManagerTeams($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7Eb9Ad2993C99C60Bc995556Bf16C836 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\AddSecurityManagerTeam::OPERATION_MATCH:
                $operation = $this->orgs()->addSecurityManagerTeam($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveSecurityManagerTeam::OPERATION_MATCH:
                $operation = $this->orgs()->removeSecurityManagerTeam($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos::OPERATION_MATCH:
                $operation = $this->orgs()->enableOrDisableSecurityProductOnAllOrgRepos($params['org'], $params['security_product'], $params['enablement']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembershipsForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->orgs()->listMembershipsForAuthenticatedUser($params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDfc9Ce9066Fbb36Ecf1129974E678B26|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->orgs()->getMembershipForAuthenticatedUser($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateMembershipForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->orgs()->updateMembershipForAuthenticatedUser($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->orgs()->listForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD25549Cde7Ef111A37D0A59E619F994A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForUser::OPERATION_MATCH:
                $operation = $this->orgs()->listForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD25549Cde7Ef111A37D0A59E619F994A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\GetOidcCustomSubTemplateForOrg::OPERATION_MATCH:
                $operation = $this->oidc()->getOidcCustomSubTemplateForOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OidcCustomSub {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\UpdateOidcCustomSubTemplateForOrg::OPERATION_MATCH:
                $operation = $this->oidc()->updateOidcCustomSubTemplateForOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInOrganization::OPERATION_MATCH:
                $operation = $this->codespaces()->listInOrganization($params['per_page'], $params['page'], $params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C99A344Bb924Dc8320E4Bc765919868F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetCodespacesBilling::OPERATION_MATCH:
                $operation = $this->codespaces()->setCodespacesBilling($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListOrgSecrets::OPERATION_MATCH:
                $operation = $this->codespaces()->listOrgSecrets($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE2D72762D5496B28A74Db5Be33944579 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetOrgPublicKey::OPERATION_MATCH:
                $operation = $this->codespaces()->getOrgPublicKey($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetOrgSecret::OPERATION_MATCH:
                $operation = $this->codespaces()->getOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesOrgSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateOrgSecret::OPERATION_MATCH:
                $operation = $this->codespaces()->createOrUpdateOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteOrgSecret::OPERATION_MATCH:
                $operation = $this->codespaces()->deleteOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSelectedReposForOrgSecret::OPERATION_MATCH:
                $operation = $this->codespaces()->listSelectedReposForOrgSecret($params['org'], $params['secret_name'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDf642215E2806C848A16Ef294379Be7A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetSelectedReposForOrgSecret::OPERATION_MATCH:
                $operation = $this->codespaces()->setSelectedReposForOrgSecret($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddSelectedRepoToOrgSecret::OPERATION_MATCH:
                $operation = $this->codespaces()->addSelectedRepoToOrgSecret($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveSelectedRepoFromOrgSecret::OPERATION_MATCH:
                $operation = $this->codespaces()->removeSelectedRepoFromOrgSecret($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetCodespacesForUserInOrg::OPERATION_MATCH:
                $operation = $this->codespaces()->getCodespacesForUserInOrg($params['per_page'], $params['page'], $params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C99A344Bb924Dc8320E4Bc765919868F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteFromOrganization::OPERATION_MATCH:
                $operation = $this->codespaces()->deleteFromOrganization($params['org'], $params['username'], $params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopInOrganization::OPERATION_MATCH:
                $operation = $this->codespaces()->stopInOrganization($params['org'], $params['username'], $params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInRepositoryForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->listInRepositoryForAuthenticatedUser($params['per_page'], $params['page'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C99A344Bb924Dc8320E4Bc765919868F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithRepoForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->createWithRepoForAuthenticatedUser($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->listDevcontainersInRepositoryForAuthenticatedUser($params['per_page'], $params['page'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3258430Cc798035Cd54C186Bcc49C1F3|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RepoMachinesForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->repoMachinesForAuthenticatedUser($params['owner'], $params['repo'], $params['location'], $params['client_ip']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDcad5E8F2Eec4De5B5Cb16Bffb04Ba48|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\PreFlightWithRepoForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->preFlightWithRepoForAuthenticatedUser($params['owner'], $params['repo'], $params['ref'], $params['client_ip']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFc45C706Ec04C4547F6921E839268B9B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepoSecrets::OPERATION_MATCH:
                $operation = $this->codespaces()->listRepoSecrets($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C28C9367Cd9884680C4B3F55F87F3Dfd1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoPublicKey::OPERATION_MATCH:
                $operation = $this->codespaces()->getRepoPublicKey($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoSecret::OPERATION_MATCH:
                $operation = $this->codespaces()->getRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepoCodespacesSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateRepoSecret::OPERATION_MATCH:
                $operation = $this->codespaces()->createOrUpdateRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteRepoSecret::OPERATION_MATCH:
                $operation = $this->codespaces()->deleteRepoSecret($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithPrForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->createWithPrForAuthenticatedUser($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->listForAuthenticatedUser($params['per_page'], $params['page'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C99A344Bb924Dc8320E4Bc765919868F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->createForAuthenticatedUser();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSecretsForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->listSecretsForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C60C051Ca0D5D3B740Bd08E439D5315E1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetPublicKeyForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->getPublicKeyForAuthenticatedUser();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesUserPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetSecretForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->getSecretForAuthenticatedUser($params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateSecretForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->createOrUpdateSecretForAuthenticatedUser($params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteSecretForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->deleteSecretForAuthenticatedUser($params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepositoriesForSecretForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->listRepositoriesForSecretForAuthenticatedUser($params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDf642215E2806C848A16Ef294379Be7A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetRepositoriesForSecretForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->setRepositoriesForSecretForAuthenticatedUser($params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddRepositoryForSecretForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->addRepositoryForSecretForAuthenticatedUser($params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->removeRepositoryForSecretForAuthenticatedUser($params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->getForAuthenticatedUser($params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->deleteForAuthenticatedUser($params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\UpdateForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->updateForAuthenticatedUser($params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ExportForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->exportForAuthenticatedUser($params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespaceExportDetails|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetExportDetailsForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->getExportDetailsForAuthenticatedUser($params['codespace_name'], $params['export_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespaceExportDetails|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CodespaceMachinesForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->codespaceMachinesForAuthenticatedUser($params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDcad5E8F2Eec4De5B5Cb16Bffb04Ba48|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StartForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->startForAuthenticatedUser($params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->codespaces()->stopForAuthenticatedUser($params['codespace_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForOrg::OPERATION_MATCH:
                $operation = $this->interactions()->getRestrictionsForOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFa125E0Ae31E9C155F33Bc899Ee2A17F {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForOrg::OPERATION_MATCH:
                $operation = $this->interactions()->setRestrictionsForOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InteractionLimitResponse|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForOrg::OPERATION_MATCH:
                $operation = $this->interactions()->removeRestrictionsForOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForRepo::OPERATION_MATCH:
                $operation = $this->interactions()->getRestrictionsForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFa125E0Ae31E9C155F33Bc899Ee2A17F {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForRepo::OPERATION_MATCH:
                $operation = $this->interactions()->setRestrictionsForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InteractionLimitResponse {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForRepo::OPERATION_MATCH:
                $operation = $this->interactions()->removeRestrictionsForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->interactions()->getRestrictionsForAuthenticatedUser();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFa125E0Ae31E9C155F33Bc899Ee2A17F {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->interactions()->setRestrictionsForAuthenticatedUser();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\InteractionLimitResponse|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->interactions()->removeRestrictionsForAuthenticatedUser();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForOrg::OPERATION_MATCH:
                $operation = $this->migrations()->listForOrg($params['org'], $params['per_page'], $params['page'], $params['exclude']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C48B3C8D5Bb6D982Db53C27240Ef5E5B4 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForOrg::OPERATION_MATCH:
                $operation = $this->migrations()->startForOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForOrg::OPERATION_MATCH:
                $operation = $this->migrations()->getStatusForOrg($params['org'], $params['migration_id'], $params['exclude']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DownloadArchiveForOrg::OPERATION_MATCH:
                $operation = $this->migrations()->downloadArchiveForOrg($params['org'], $params['migration_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForOrg::OPERATION_MATCH:
                $operation = $this->migrations()->deleteArchiveForOrg($params['org'], $params['migration_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForOrg::OPERATION_MATCH:
                $operation = $this->migrations()->unlockRepoForOrg($params['org'], $params['migration_id'], $params['repo_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForOrg::OPERATION_MATCH:
                $operation = $this->migrations()->listReposForOrg($params['org'], $params['migration_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetImportStatus::OPERATION_MATCH:
                $operation = $this->migrations()->getImportStatus($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartImport::OPERATION_MATCH:
                $operation = $this->migrations()->startImport($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\CancelImport::OPERATION_MATCH:
                $operation = $this->migrations()->cancelImport($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UpdateImport::OPERATION_MATCH:
                $operation = $this->migrations()->updateImport($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetCommitAuthors::OPERATION_MATCH:
                $operation = $this->migrations()->getCommitAuthors($params['owner'], $params['repo'], $params['since']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF937F3514A781A237E7E511Bc6974285|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\MapCommitAuthor::OPERATION_MATCH:
                $operation = $this->migrations()->mapCommitAuthor($params['owner'], $params['repo'], $params['author_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PorterAuthor|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetLargeFiles::OPERATION_MATCH:
                $operation = $this->migrations()->getLargeFiles($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC2674569Ad4Aaeb221366Afde4669340|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\SetLfsPreference::OPERATION_MATCH:
                $operation = $this->migrations()->setLfsPreference($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->migrations()->listForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C48B3C8D5Bb6D982Db53C27240Ef5E5B4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->migrations()->startForAuthenticatedUser();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->migrations()->getStatusForAuthenticatedUser($params['migration_id'], $params['exclude']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetArchiveForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->migrations()->getArchiveForAuthenticatedUser($params['migration_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->migrations()->deleteArchiveForAuthenticatedUser($params['migration_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->migrations()->unlockRepoForAuthenticatedUser($params['migration_id'], $params['repo_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->migrations()->listReposForAuthenticatedUser($params['migration_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForOrganization::OPERATION_MATCH:
                $operation = $this->packages()->listPackagesForOrganization($params['package_type'], $params['org'], $params['visibility']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF3D5Dbb128F908794438D8455A198Be4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForOrganization::OPERATION_MATCH:
                $operation = $this->packages()->getPackageForOrganization($params['package_type'], $params['package_name'], $params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Package {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForOrg::OPERATION_MATCH:
                $operation = $this->packages()->deletePackageForOrg($params['package_type'], $params['package_name'], $params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForOrg::OPERATION_MATCH:
                $operation = $this->packages()->restorePackageForOrg($params['package_type'], $params['package_name'], $params['org'], $params['token']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByOrg::OPERATION_MATCH:
                $operation = $this->packages()->getAllPackageVersionsForPackageOwnedByOrg($params['package_type'], $params['package_name'], $params['org'], $params['page'], $params['per_page'], $params['state']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C20F464Eb74B57Bb1070Bc9803667E3C3|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForOrganization::OPERATION_MATCH:
                $operation = $this->packages()->getPackageVersionForOrganization($params['package_type'], $params['package_name'], $params['org'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForOrg::OPERATION_MATCH:
                $operation = $this->packages()->deletePackageVersionForOrg($params['package_type'], $params['package_name'], $params['org'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForOrg::OPERATION_MATCH:
                $operation = $this->packages()->restorePackageVersionForOrg($params['package_type'], $params['package_name'], $params['org'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->packages()->listPackagesForAuthenticatedUser($params['package_type'], $params['visibility']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF3D5Dbb128F908794438D8455A198Be4 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->packages()->getPackageForAuthenticatedUser($params['package_type'], $params['package_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Package {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->packages()->deletePackageForAuthenticatedUser($params['package_type'], $params['package_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->packages()->restorePackageForAuthenticatedUser($params['package_type'], $params['package_name'], $params['token']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->packages()->getAllPackageVersionsForPackageOwnedByAuthenticatedUser($params['package_type'], $params['package_name'], $params['page'], $params['per_page'], $params['state']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C20F464Eb74B57Bb1070Bc9803667E3C3|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->packages()->getPackageVersionForAuthenticatedUser($params['package_type'], $params['package_name'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->packages()->deletePackageVersionForAuthenticatedUser($params['package_type'], $params['package_name'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->packages()->restorePackageVersionForAuthenticatedUser($params['package_type'], $params['package_name'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForUser::OPERATION_MATCH:
                $operation = $this->packages()->listPackagesForUser($params['package_type'], $params['visibility'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF3D5Dbb128F908794438D8455A198Be4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForUser::OPERATION_MATCH:
                $operation = $this->packages()->getPackageForUser($params['package_type'], $params['package_name'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Package {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForUser::OPERATION_MATCH:
                $operation = $this->packages()->deletePackageForUser($params['package_type'], $params['package_name'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForUser::OPERATION_MATCH:
                $operation = $this->packages()->restorePackageForUser($params['package_type'], $params['package_name'], $params['username'], $params['token']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByUser::OPERATION_MATCH:
                $operation = $this->packages()->getAllPackageVersionsForPackageOwnedByUser($params['package_type'], $params['package_name'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C20F464Eb74B57Bb1070Bc9803667E3C3|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForUser::OPERATION_MATCH:
                $operation = $this->packages()->getPackageVersionForUser($params['package_type'], $params['package_name'], $params['package_version_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForUser::OPERATION_MATCH:
                $operation = $this->packages()->deletePackageVersionForUser($params['package_type'], $params['package_name'], $params['username'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForUser::OPERATION_MATCH:
                $operation = $this->packages()->restorePackageVersionForUser($params['package_type'], $params['package_name'], $params['username'], $params['package_version_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForOrg::OPERATION_MATCH:
                $operation = $this->projects()->listForOrg($params['org'], $params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAb0747A9430Dc79D395Cf3A981F7F590|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForOrg::OPERATION_MATCH:
                $operation = $this->projects()->createForOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetCard::OPERATION_MATCH:
                $operation = $this->projects()->getCard($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteCard::OPERATION_MATCH:
                $operation = $this->projects()->deleteCard($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF694556E3Cc88993A89F1Ed7Afdf4E13|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateCard::OPERATION_MATCH:
                $operation = $this->projects()->updateCard($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveCard::OPERATION_MATCH:
                $operation = $this->projects()->moveCard($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2F32Ad791Ebef4439Dfb273837Ce0D99|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C84C5Bf99Acadc6Ec8B2A32F2014E1E35|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetColumn::OPERATION_MATCH:
                $operation = $this->projects()->getColumn($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectColumn|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteColumn::OPERATION_MATCH:
                $operation = $this->projects()->deleteColumn($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateColumn::OPERATION_MATCH:
                $operation = $this->projects()->updateColumn($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectColumn|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListCards::OPERATION_MATCH:
                $operation = $this->projects()->listCards($params['column_id'], $params['archived_state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C802A2Aa52727B9F7C501777Ea4F9E4A3|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateCard::OPERATION_MATCH:
                $operation = $this->projects()->createCard($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C197505B37575Ae3739584A4C9Efe0801|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C84C5Bf99Acadc6Ec8B2A32F2014E1E35 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveColumn::OPERATION_MATCH:
                $operation = $this->projects()->moveColumn($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Get::OPERATION_MATCH:
                $operation = $this->projects()->get($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Delete::OPERATION_MATCH:
                $operation = $this->projects()->delete($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF694556E3Cc88993A89F1Ed7Afdf4E13|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Update::OPERATION_MATCH:
                $operation = $this->projects()->update($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF694556E3Cc88993A89F1Ed7Afdf4E13|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListCollaborators::OPERATION_MATCH:
                $operation = $this->projects()->listCollaborators($params['project_id'], $params['affiliation'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\AddCollaborator::OPERATION_MATCH:
                $operation = $this->projects()->addCollaborator($params['project_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\RemoveCollaborator::OPERATION_MATCH:
                $operation = $this->projects()->removeCollaborator($params['project_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetPermissionForUser::OPERATION_MATCH:
                $operation = $this->projects()->getPermissionForUser($params['project_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListColumns::OPERATION_MATCH:
                $operation = $this->projects()->listColumns($params['project_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C338B4411A0Be86E1C6C9A568915F6984|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateColumn::OPERATION_MATCH:
                $operation = $this->projects()->createColumn($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectColumn|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForRepo::OPERATION_MATCH:
                $operation = $this->projects()->listForRepo($params['owner'], $params['repo'], $params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAb0747A9430Dc79D395Cf3A981F7F590|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForRepo::OPERATION_MATCH:
                $operation = $this->projects()->createForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->projects()->createForAuthenticatedUser();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForUser::OPERATION_MATCH:
                $operation = $this->projects()->listForUser($params['username'], $params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAb0747A9430Dc79D395Cf3A981F7F590|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForOrg::OPERATION_MATCH:
                $operation = $this->repos()->listForOrg($params['org'], $params['type'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateInOrg::OPERATION_MATCH:
                $operation = $this->repos()->createInOrg($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Get::OPERATION_MATCH:
                $operation = $this->repos()->get($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Delete::OPERATION_MATCH:
                $operation = $this->repos()->delete($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Update::OPERATION_MATCH:
                $operation = $this->repos()->update($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListAutolinks::OPERATION_MATCH:
                $operation = $this->repos()->listAutolinks($params['owner'], $params['repo'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C17C7343Ca9Be26E0B6160460Fc53E98B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateAutolink::OPERATION_MATCH:
                $operation = $this->repos()->createAutolink($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Autolink|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAutolink::OPERATION_MATCH:
                $operation = $this->repos()->getAutolink($params['owner'], $params['repo'], $params['autolink_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Autolink|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAutolink::OPERATION_MATCH:
                $operation = $this->repos()->deleteAutolink($params['owner'], $params['repo'], $params['autolink_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableAutomatedSecurityFixes::OPERATION_MATCH:
                $operation = $this->repos()->enableAutomatedSecurityFixes($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableAutomatedSecurityFixes::OPERATION_MATCH:
                $operation = $this->repos()->disableAutomatedSecurityFixes($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListBranches::OPERATION_MATCH:
                $operation = $this->repos()->listBranches($params['owner'], $params['repo'], $params['protected'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF51Df0E3Ba8C9D41Aff6C2Dae92F8477|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetBranch::OPERATION_MATCH:
                $operation = $this->repos()->getBranch($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchWithProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetBranchProtection::OPERATION_MATCH:
                $operation = $this->repos()->getBranchProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateBranchProtection::OPERATION_MATCH:
                $operation = $this->repos()->updateBranchProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranch|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteBranchProtection::OPERATION_MATCH:
                $operation = $this->repos()->deleteBranchProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAdminBranchProtection::OPERATION_MATCH:
                $operation = $this->repos()->getAdminBranchProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchAdminEnforced {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetAdminBranchProtection::OPERATION_MATCH:
                $operation = $this->repos()->setAdminBranchProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchAdminEnforced {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAdminBranchProtection::OPERATION_MATCH:
                $operation = $this->repos()->deleteAdminBranchProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPullRequestReviewProtection::OPERATION_MATCH:
                $operation = $this->repos()->getPullRequestReviewProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchPullRequestReview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeletePullRequestReviewProtection::OPERATION_MATCH:
                $operation = $this->repos()->deletePullRequestReviewProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdatePullRequestReviewProtection::OPERATION_MATCH:
                $operation = $this->repos()->updatePullRequestReviewProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchPullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitSignatureProtection::OPERATION_MATCH:
                $operation = $this->repos()->getCommitSignatureProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitSignatureProtection::OPERATION_MATCH:
                $operation = $this->repos()->createCommitSignatureProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteCommitSignatureProtection::OPERATION_MATCH:
                $operation = $this->repos()->deleteCommitSignatureProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetStatusChecksProtection::OPERATION_MATCH:
                $operation = $this->repos()->getStatusChecksProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveStatusCheckProtection::OPERATION_MATCH:
                $operation = $this->repos()->removeStatusCheckProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateStatusCheckProtection::OPERATION_MATCH:
                $operation = $this->repos()->updateStatusCheckProtection($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllStatusCheckContexts::OPERATION_MATCH:
                $operation = $this->repos()->getAllStatusCheckContexts($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetStatusCheckContexts::OPERATION_MATCH:
                $operation = $this->repos()->setStatusCheckContexts($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddStatusCheckContexts::OPERATION_MATCH:
                $operation = $this->repos()->addStatusCheckContexts($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveStatusCheckContexts::OPERATION_MATCH:
                $operation = $this->repos()->removeStatusCheckContexts($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAccessRestrictions::OPERATION_MATCH:
                $operation = $this->repos()->getAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAccessRestrictions::OPERATION_MATCH:
                $operation = $this->repos()->deleteAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAppsWithAccessToProtectedBranch::OPERATION_MATCH:
                $operation = $this->repos()->getAppsWithAccessToProtectedBranch($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C81C377Bf6B21Ffcf535B9A46Dc81E5F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetAppAccessRestrictions::OPERATION_MATCH:
                $operation = $this->repos()->setAppAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C81C377Bf6B21Ffcf535B9A46Dc81E5F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddAppAccessRestrictions::OPERATION_MATCH:
                $operation = $this->repos()->addAppAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C81C377Bf6B21Ffcf535B9A46Dc81E5F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveAppAccessRestrictions::OPERATION_MATCH:
                $operation = $this->repos()->removeAppAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C81C377Bf6B21Ffcf535B9A46Dc81E5F5|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTeamsWithAccessToProtectedBranch::OPERATION_MATCH:
                $operation = $this->repos()->getTeamsWithAccessToProtectedBranch($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetTeamAccessRestrictions::OPERATION_MATCH:
                $operation = $this->repos()->setTeamAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddTeamAccessRestrictions::OPERATION_MATCH:
                $operation = $this->repos()->addTeamAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveTeamAccessRestrictions::OPERATION_MATCH:
                $operation = $this->repos()->removeTeamAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetUsersWithAccessToProtectedBranch::OPERATION_MATCH:
                $operation = $this->repos()->getUsersWithAccessToProtectedBranch($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetUserAccessRestrictions::OPERATION_MATCH:
                $operation = $this->repos()->setUserAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddUserAccessRestrictions::OPERATION_MATCH:
                $operation = $this->repos()->addUserAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveUserAccessRestrictions::OPERATION_MATCH:
                $operation = $this->repos()->removeUserAccessRestrictions($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RenameBranch::OPERATION_MATCH:
                $operation = $this->repos()->renameBranch($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchWithProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CodeownersErrors::OPERATION_MATCH:
                $operation = $this->repos()->codeownersErrors($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeownersErrors {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCollaborators::OPERATION_MATCH:
                $operation = $this->repos()->listCollaborators($params['owner'], $params['repo'], $params['affiliation'], $params['permission'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C8Cfb8Cb2505342C5Aa9B51775D830635|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CheckCollaborator::OPERATION_MATCH:
                $operation = $this->repos()->checkCollaborator($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddCollaborator::OPERATION_MATCH:
                $operation = $this->repos()->addCollaborator($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositoryInvitation|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveCollaborator::OPERATION_MATCH:
                $operation = $this->repos()->removeCollaborator($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCollaboratorPermissionLevel::OPERATION_MATCH:
                $operation = $this->repos()->getCollaboratorPermissionLevel($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositoryCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommitCommentsForRepo::OPERATION_MATCH:
                $operation = $this->repos()->listCommitCommentsForRepo($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDb6974Aa7Ac26B1Fccca8566752Cd2D3 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitComment::OPERATION_MATCH:
                $operation = $this->repos()->getCommitComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteCommitComment::OPERATION_MATCH:
                $operation = $this->repos()->deleteCommitComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateCommitComment::OPERATION_MATCH:
                $operation = $this->repos()->updateCommitComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommits::OPERATION_MATCH:
                $operation = $this->repos()->listCommits($params['owner'], $params['repo'], $params['sha'], $params['path'], $params['author'], $params['since'], $params['until'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C844E23F82575A50855510A97A1C68898|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListBranchesForHeadCommit::OPERATION_MATCH:
                $operation = $this->repos()->listBranchesForHeadCommit($params['owner'], $params['repo'], $params['commit_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C44F966765547C3442B15293D242E13E2|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommentsForCommit::OPERATION_MATCH:
                $operation = $this->repos()->listCommentsForCommit($params['owner'], $params['repo'], $params['commit_sha'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDb6974Aa7Ac26B1Fccca8566752Cd2D3 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitComment::OPERATION_MATCH:
                $operation = $this->repos()->createCommitComment($params['owner'], $params['repo'], $params['commit_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPullRequestsAssociatedWithCommit::OPERATION_MATCH:
                $operation = $this->repos()->listPullRequestsAssociatedWithCommit($params['owner'], $params['repo'], $params['commit_sha'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Afdcb273A556616D8867Fd50A161738 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommit::OPERATION_MATCH:
                $operation = $this->repos()->getCommit($params['owner'], $params['repo'], $params['page'], $params['per_page'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCombinedStatusForRef::OPERATION_MATCH:
                $operation = $this->repos()->getCombinedStatusForRef($params['owner'], $params['repo'], $params['ref'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CombinedCommitStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommitStatusesForRef::OPERATION_MATCH:
                $operation = $this->repos()->listCommitStatusesForRef($params['owner'], $params['repo'], $params['ref'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1Ac05Dc4833Fe01C300C8C2729Df70Ad|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommunityProfileMetrics::OPERATION_MATCH:
                $operation = $this->repos()->getCommunityProfileMetrics($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommunityProfile {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CompareCommits::OPERATION_MATCH:
                $operation = $this->repos()->compareCommits($params['owner'], $params['repo'], $params['page'], $params['per_page'], $params['basehead']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitComparison|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetContent::OPERATION_MATCH:
                $operation = $this->repos()->getContent($params['owner'], $params['repo'], $params['path'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentTree|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C96Bca9F5F23C9286Db2F0596100Bc507|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateFileContents::OPERATION_MATCH:
                $operation = $this->repos()->createOrUpdateFileContents($params['owner'], $params['repo'], $params['path']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteFile::OPERATION_MATCH:
                $operation = $this->repos()->deleteFile($params['owner'], $params['repo'], $params['path']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListContributors::OPERATION_MATCH:
                $operation = $this->repos()->listContributors($params['owner'], $params['repo'], $params['anon'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA7Ca0Fcacca5Fd9Bfaa0D26Cc7352Dca|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeployments::OPERATION_MATCH:
                $operation = $this->repos()->listDeployments($params['owner'], $params['repo'], $params['sha'], $params['ref'], $params['task'], $params['environment'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6C1Be1B26A14C84Ab35C32Ee2E0Fcd2A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeployment::OPERATION_MATCH:
                $operation = $this->repos()->createDeployment($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Deployment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C7B1F87F42Ca7F4E6F27Ed1Bcbfcee301|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeployment::OPERATION_MATCH:
                $operation = $this->repos()->getDeployment($params['owner'], $params['repo'], $params['deployment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Deployment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteDeployment::OPERATION_MATCH:
                $operation = $this->repos()->deleteDeployment($params['owner'], $params['repo'], $params['deployment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeploymentStatuses::OPERATION_MATCH:
                $operation = $this->repos()->listDeploymentStatuses($params['owner'], $params['repo'], $params['deployment_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C75F4Dcd10Cf090Fdc9118C43Cb1F9Acb|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeploymentStatus::OPERATION_MATCH:
                $operation = $this->repos()->createDeploymentStatus($params['owner'], $params['repo'], $params['deployment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeploymentStatus::OPERATION_MATCH:
                $operation = $this->repos()->getDeploymentStatus($params['owner'], $params['repo'], $params['deployment_id'], $params['status_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentStatus|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDispatchEvent::OPERATION_MATCH:
                $operation = $this->repos()->createDispatchEvent($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllEnvironments::OPERATION_MATCH:
                $operation = $this->repos()->getAllEnvironments($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3502Cc2A1Ef0B1884Bcdfcf828660Ec4 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetEnvironment::OPERATION_MATCH:
                $operation = $this->repos()->getEnvironment($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Environment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateEnvironment::OPERATION_MATCH:
                $operation = $this->repos()->createOrUpdateEnvironment($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Environment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAnEnvironment::OPERATION_MATCH:
                $operation = $this->repos()->deleteAnEnvironment($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeploymentBranchPolicies::OPERATION_MATCH:
                $operation = $this->repos()->listDeploymentBranchPolicies($params['owner'], $params['repo'], $params['environment_name'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAb60B6A9C2C98408237190D09Ed58803 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeploymentBranchPolicy::OPERATION_MATCH:
                $operation = $this->repos()->createDeploymentBranchPolicy($params['owner'], $params['repo'], $params['environment_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeploymentBranchPolicy::OPERATION_MATCH:
                $operation = $this->repos()->getDeploymentBranchPolicy($params['owner'], $params['repo'], $params['environment_name'], $params['branch_policy_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateDeploymentBranchPolicy::OPERATION_MATCH:
                $operation = $this->repos()->updateDeploymentBranchPolicy($params['owner'], $params['repo'], $params['environment_name'], $params['branch_policy_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteDeploymentBranchPolicy::OPERATION_MATCH:
                $operation = $this->repos()->deleteDeploymentBranchPolicy($params['owner'], $params['repo'], $params['environment_name'], $params['branch_policy_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForks::OPERATION_MATCH:
                $operation = $this->repos()->listForks($params['owner'], $params['repo'], $params['sort'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateFork::OPERATION_MATCH:
                $operation = $this->repos()->createFork($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListWebhooks::OPERATION_MATCH:
                $operation = $this->repos()->listWebhooks($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6E5961982487E4570Ac7Cd969C273Cdd|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateWebhook::OPERATION_MATCH:
                $operation = $this->repos()->createWebhook($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhook::OPERATION_MATCH:
                $operation = $this->repos()->getWebhook($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteWebhook::OPERATION_MATCH:
                $operation = $this->repos()->deleteWebhook($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateWebhook::OPERATION_MATCH:
                $operation = $this->repos()->updateWebhook($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhookConfigForRepo::OPERATION_MATCH:
                $operation = $this->repos()->getWebhookConfigForRepo($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateWebhookConfigForRepo::OPERATION_MATCH:
                $operation = $this->repos()->updateWebhookConfigForRepo($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListWebhookDeliveries::OPERATION_MATCH:
                $operation = $this->repos()->listWebhookDeliveries($params['owner'], $params['repo'], $params['hook_id'], $params['per_page'], $params['cursor'], $params['redelivery']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0E8E1845F1Bc82Ea0E7B36D0Bb6E996D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhookDelivery::OPERATION_MATCH:
                $operation = $this->repos()->getWebhookDelivery($params['owner'], $params['repo'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RedeliverWebhookDelivery::OPERATION_MATCH:
                $operation = $this->repos()->redeliverWebhookDelivery($params['owner'], $params['repo'], $params['hook_id'], $params['delivery_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\PingWebhook::OPERATION_MATCH:
                $operation = $this->repos()->pingWebhook($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\TestPushWebhook::OPERATION_MATCH:
                $operation = $this->repos()->testPushWebhook($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListInvitations::OPERATION_MATCH:
                $operation = $this->repos()->listInvitations($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF20275E051D790E6Ec04687F05E98F03 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteInvitation::OPERATION_MATCH:
                $operation = $this->repos()->deleteInvitation($params['owner'], $params['repo'], $params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateInvitation::OPERATION_MATCH:
                $operation = $this->repos()->updateInvitation($params['owner'], $params['repo'], $params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositoryInvitation {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeployKeys::OPERATION_MATCH:
                $operation = $this->repos()->listDeployKeys($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE8D2B89E98E676346A45560E7E331E0A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeployKey::OPERATION_MATCH:
                $operation = $this->repos()->createDeployKey($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeployKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeployKey::OPERATION_MATCH:
                $operation = $this->repos()->getDeployKey($params['owner'], $params['repo'], $params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeployKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteDeployKey::OPERATION_MATCH:
                $operation = $this->repos()->deleteDeployKey($params['owner'], $params['repo'], $params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListLanguages::OPERATION_MATCH:
                $operation = $this->repos()->listLanguages($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Language {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableLfsForRepo::OPERATION_MATCH:
                $operation = $this->repos()->enableLfsForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableLfsForRepo::OPERATION_MATCH:
                $operation = $this->repos()->disableLfsForRepo($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\MergeUpstream::OPERATION_MATCH:
                $operation = $this->repos()->mergeUpstream($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MergedUpstream {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Merge::OPERATION_MATCH:
                $operation = $this->repos()->merge($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPages::OPERATION_MATCH:
                $operation = $this->repos()->getPages($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Page|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateInformationAboutPagesSite::OPERATION_MATCH:
                $operation = $this->repos()->updateInformationAboutPagesSite($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreatePagesSite::OPERATION_MATCH:
                $operation = $this->repos()->createPagesSite($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Page|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeletePagesSite::OPERATION_MATCH:
                $operation = $this->repos()->deletePagesSite($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPagesBuilds::OPERATION_MATCH:
                $operation = $this->repos()->listPagesBuilds($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6D863E2F1F1Ab47D84D0Ed073F49Df30 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RequestPagesBuild::OPERATION_MATCH:
                $operation = $this->repos()->requestPagesBuild($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuildStatus {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetLatestPagesBuild::OPERATION_MATCH:
                $operation = $this->repos()->getLatestPagesBuild($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuild {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPagesBuild::OPERATION_MATCH:
                $operation = $this->repos()->getPagesBuild($params['owner'], $params['repo'], $params['build_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuild {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreatePagesDeployment::OPERATION_MATCH:
                $operation = $this->repos()->createPagesDeployment($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageDeployment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPagesHealthCheck::OPERATION_MATCH:
                $operation = $this->repos()->getPagesHealthCheck($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHealthCheck|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReadme::OPERATION_MATCH:
                $operation = $this->repos()->getReadme($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentFile|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReadmeInDirectory::OPERATION_MATCH:
                $operation = $this->repos()->getReadmeInDirectory($params['owner'], $params['repo'], $params['dir'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentFile|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListReleases::OPERATION_MATCH:
                $operation = $this->repos()->listReleases($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD0C2695E7C5F50Ea337C2965Ffe11E6D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateRelease::OPERATION_MATCH:
                $operation = $this->repos()->createRelease($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseAsset::OPERATION_MATCH:
                $operation = $this->repos()->getReleaseAsset($params['owner'], $params['repo'], $params['asset_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteReleaseAsset::OPERATION_MATCH:
                $operation = $this->repos()->deleteReleaseAsset($params['owner'], $params['repo'], $params['asset_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateReleaseAsset::OPERATION_MATCH:
                $operation = $this->repos()->updateReleaseAsset($params['owner'], $params['repo'], $params['asset_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GenerateReleaseNotes::OPERATION_MATCH:
                $operation = $this->repos()->generateReleaseNotes($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseNotesContent|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetLatestRelease::OPERATION_MATCH:
                $operation = $this->repos()->getLatestRelease($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseByTag::OPERATION_MATCH:
                $operation = $this->repos()->getReleaseByTag($params['owner'], $params['repo'], $params['tag']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetRelease::OPERATION_MATCH:
                $operation = $this->repos()->getRelease($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteRelease::OPERATION_MATCH:
                $operation = $this->repos()->deleteRelease($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateRelease::OPERATION_MATCH:
                $operation = $this->repos()->updateRelease($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListReleaseAssets::OPERATION_MATCH:
                $operation = $this->repos()->listReleaseAssets($params['owner'], $params['repo'], $params['release_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0Db7312560Abfd79A4Bfefef0A3Baef7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UploadReleaseAsset::OPERATION_MATCH:
                $operation = $this->repos()->uploadReleaseAsset($params['owner'], $params['repo'], $params['release_id'], $params['name'], $params['label']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCodeFrequencyStats::OPERATION_MATCH:
                $operation = $this->repos()->getCodeFrequencyStats($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9Bf7717E69D86Ca1B138987Fdb5033B6|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitActivityStats::OPERATION_MATCH:
                $operation = $this->repos()->getCommitActivityStats($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C06431446E4E9E28A63Fd6A22436F7D82|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetContributorsStats::OPERATION_MATCH:
                $operation = $this->repos()->getContributorsStats($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0B4Ef1B3E0499Cc08F846Cd359C05D76|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetParticipationStats::OPERATION_MATCH:
                $operation = $this->repos()->getParticipationStats($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ParticipationStats|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPunchCardStats::OPERATION_MATCH:
                $operation = $this->repos()->getPunchCardStats($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9Bf7717E69D86Ca1B138987Fdb5033B6 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitStatus::OPERATION_MATCH:
                $operation = $this->repos()->createCommitStatus($params['owner'], $params['repo'], $params['sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Status {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListTags::OPERATION_MATCH:
                $operation = $this->repos()->listTags($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CEc94E54447F15Bea9F91Abe39Ef7B5F6 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListTagProtection::OPERATION_MATCH:
                $operation = $this->repos()->listTagProtection($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE85527Aa1D6903Db89F29Ddfaed8F90F|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateTagProtection::OPERATION_MATCH:
                $operation = $this->repos()->createTagProtection($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TagProtection|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteTagProtection::OPERATION_MATCH:
                $operation = $this->repos()->deleteTagProtection($params['owner'], $params['repo'], $params['tag_protection_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DownloadTarballArchive::OPERATION_MATCH:
                $operation = $this->repos()->downloadTarballArchive($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListTeams::OPERATION_MATCH:
                $operation = $this->repos()->listTeams($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllTopics::OPERATION_MATCH:
                $operation = $this->repos()->getAllTopics($params['owner'], $params['repo'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Topic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ReplaceAllTopics::OPERATION_MATCH:
                $operation = $this->repos()->replaceAllTopics($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Topic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetClones::OPERATION_MATCH:
                $operation = $this->repos()->getClones($params['owner'], $params['repo'], $params['per']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CloneTraffic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTopPaths::OPERATION_MATCH:
                $operation = $this->repos()->getTopPaths($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2Fe03Fbd1Bce5975C0731D749A144878|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTopReferrers::OPERATION_MATCH:
                $operation = $this->repos()->getTopReferrers($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0637F403D979870Da0B4B4832D880Aa4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetViews::OPERATION_MATCH:
                $operation = $this->repos()->getViews($params['owner'], $params['repo'], $params['per']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ViewTraffic|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Transfer::OPERATION_MATCH:
                $operation = $this->repos()->transfer($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CheckVulnerabilityAlerts::OPERATION_MATCH:
                $operation = $this->repos()->checkVulnerabilityAlerts($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableVulnerabilityAlerts::OPERATION_MATCH:
                $operation = $this->repos()->enableVulnerabilityAlerts($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableVulnerabilityAlerts::OPERATION_MATCH:
                $operation = $this->repos()->disableVulnerabilityAlerts($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DownloadZipballArchive::OPERATION_MATCH:
                $operation = $this->repos()->downloadZipballArchive($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateUsingTemplate::OPERATION_MATCH:
                $operation = $this->repos()->createUsingTemplate($params['template_owner'], $params['template_repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPublic::OPERATION_MATCH:
                $operation = $this->repos()->listPublic($params['since']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->repos()->listForAuthenticatedUser($params['visibility'], $params['affiliation'], $params['type'], $params['sort'], $params['direction'], $params['per_page'], $params['page'], $params['since'], $params['before']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CAf9Ce4Aef95F91Ba5Bb8937E005A4Bf1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->repos()->createForAuthenticatedUser();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListInvitationsForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->repos()->listInvitationsForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF20275E051D790E6Ec04687F05E98F03|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeclineInvitationForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->repos()->declineInvitationForAuthenticatedUser($params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AcceptInvitationForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->repos()->acceptInvitationForAuthenticatedUser($params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForUser::OPERATION_MATCH:
                $operation = $this->repos()->listForUser($params['username'], $params['type'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\List::OPERATION_MATCH:
                $operation = $this->teams()->list($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\Create::OPERATION_MATCH:
                $operation = $this->teams()->create($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetByName::OPERATION_MATCH:
                $operation = $this->teams()->getByName($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteInOrg::OPERATION_MATCH:
                $operation = $this->teams()->deleteInOrg($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateInOrg::OPERATION_MATCH:
                $operation = $this->teams()->updateInOrg($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionsInOrg::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionsInOrg($params['org'], $params['team_slug'], $params['direction'], $params['per_page'], $params['page'], $params['pinned']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C48C27F99490Bb9F6F3Fe1Ca3B71E7D81 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionInOrg::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionInOrg($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionInOrg::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionInOrg($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionInOrg::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionInOrg($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionInOrg::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionInOrg($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionCommentsInOrg::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionCommentsInOrg($params['org'], $params['team_slug'], $params['discussion_number'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5730D3B2Ef04C7A9B60Fe46C96Fa0B20 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionCommentInOrg::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionCommentInOrg($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionCommentInOrg::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionCommentInOrg($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionCommentInOrg::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionCommentInOrg($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionCommentInOrg::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionCommentInOrg($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListPendingInvitationsInOrg::OPERATION_MATCH:
                $operation = $this->teams()->listPendingInvitationsInOrg($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C292Eea0D3E06B707B2B60E9Fa544B678 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListMembersInOrg::OPERATION_MATCH:
                $operation = $this->teams()->listMembersInOrg($params['org'], $params['team_slug'], $params['role'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMembershipForUserInOrg::OPERATION_MATCH:
                $operation = $this->teams()->getMembershipForUserInOrg($params['org'], $params['team_slug'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateMembershipForUserInOrg::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateMembershipForUserInOrg($params['org'], $params['team_slug'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMembershipForUserInOrg::OPERATION_MATCH:
                $operation = $this->teams()->removeMembershipForUserInOrg($params['org'], $params['team_slug'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListProjectsInOrg::OPERATION_MATCH:
                $operation = $this->teams()->listProjectsInOrg($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C039E6Cf714Fc77Af55Cad65Fde5A5718 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForProjectInOrg::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForProjectInOrg($params['org'], $params['team_slug'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateProjectPermissionsInOrg::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateProjectPermissionsInOrg($params['org'], $params['team_slug'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveProjectInOrg::OPERATION_MATCH:
                $operation = $this->teams()->removeProjectInOrg($params['org'], $params['team_slug'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListReposInOrg::OPERATION_MATCH:
                $operation = $this->teams()->listReposInOrg($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForRepoInOrg::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForRepoInOrg($params['org'], $params['team_slug'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateRepoPermissionsInOrg::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateRepoPermissionsInOrg($params['org'], $params['team_slug'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveRepoInOrg::OPERATION_MATCH:
                $operation = $this->teams()->removeRepoInOrg($params['org'], $params['team_slug'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListChildInOrg::OPERATION_MATCH:
                $operation = $this->teams()->listChildInOrg($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetLegacy::OPERATION_MATCH:
                $operation = $this->teams()->getLegacy($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteLegacy::OPERATION_MATCH:
                $operation = $this->teams()->deleteLegacy($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateLegacy::OPERATION_MATCH:
                $operation = $this->teams()->updateLegacy($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionsLegacy::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionsLegacy($params['team_id'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C48C27F99490Bb9F6F3Fe1Ca3B71E7D81 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionLegacy::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionLegacy($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionLegacy::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionLegacy($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionLegacy::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionLegacy($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionLegacy::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionLegacy($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionCommentsLegacy::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionCommentsLegacy($params['team_id'], $params['discussion_number'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5730D3B2Ef04C7A9B60Fe46C96Fa0B20 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionCommentLegacy::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionCommentLegacy($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionCommentLegacy::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionCommentLegacy($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionCommentLegacy::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionCommentLegacy($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionCommentLegacy::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionCommentLegacy($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListPendingInvitationsLegacy::OPERATION_MATCH:
                $operation = $this->teams()->listPendingInvitationsLegacy($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C292Eea0D3E06B707B2B60E9Fa544B678 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListMembersLegacy::OPERATION_MATCH:
                $operation = $this->teams()->listMembersLegacy($params['team_id'], $params['role'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMemberLegacy::OPERATION_MATCH:
                $operation = $this->teams()->getMemberLegacy($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddMemberLegacy::OPERATION_MATCH:
                $operation = $this->teams()->addMemberLegacy($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMemberLegacy::OPERATION_MATCH:
                $operation = $this->teams()->removeMemberLegacy($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMembershipForUserLegacy::OPERATION_MATCH:
                $operation = $this->teams()->getMembershipForUserLegacy($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateMembershipForUserLegacy::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateMembershipForUserLegacy($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMembershipForUserLegacy::OPERATION_MATCH:
                $operation = $this->teams()->removeMembershipForUserLegacy($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListProjectsLegacy::OPERATION_MATCH:
                $operation = $this->teams()->listProjectsLegacy($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C039E6Cf714Fc77Af55Cad65Fde5A5718|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForProjectLegacy::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForProjectLegacy($params['team_id'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateProjectPermissionsLegacy::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateProjectPermissionsLegacy($params['team_id'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveProjectLegacy::OPERATION_MATCH:
                $operation = $this->teams()->removeProjectLegacy($params['team_id'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListReposLegacy::OPERATION_MATCH:
                $operation = $this->teams()->listReposLegacy($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CCd764B09345F726F6916Da17C8289460|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForRepoLegacy::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForRepoLegacy($params['team_id'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateRepoPermissionsLegacy::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateRepoPermissionsLegacy($params['team_id'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveRepoLegacy::OPERATION_MATCH:
                $operation = $this->teams()->removeRepoLegacy($params['team_id'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListChildLegacy::OPERATION_MATCH:
                $operation = $this->teams()->listChildLegacy($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->teams()->listForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C45206B806A9565Db2Ebe89Ea38D6Dc95|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionCommentInOrg::OPERATION_MATCH:
                $operation = $this->reactions()->listForTeamDiscussionCommentInOrg($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionCommentInOrg::OPERATION_MATCH:
                $operation = $this->reactions()->createForTeamDiscussionCommentInOrg($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForTeamDiscussionComment::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForTeamDiscussionComment($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionInOrg::OPERATION_MATCH:
                $operation = $this->reactions()->listForTeamDiscussionInOrg($params['org'], $params['team_slug'], $params['discussion_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionInOrg::OPERATION_MATCH:
                $operation = $this->reactions()->createForTeamDiscussionInOrg($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForTeamDiscussion::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForTeamDiscussion($params['org'], $params['team_slug'], $params['discussion_number'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForCommitComment::OPERATION_MATCH:
                $operation = $this->reactions()->listForCommitComment($params['owner'], $params['repo'], $params['comment_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForCommitComment::OPERATION_MATCH:
                $operation = $this->reactions()->createForCommitComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForCommitComment::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForCommitComment($params['owner'], $params['repo'], $params['comment_id'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForIssueComment::OPERATION_MATCH:
                $operation = $this->reactions()->listForIssueComment($params['owner'], $params['repo'], $params['comment_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForIssueComment::OPERATION_MATCH:
                $operation = $this->reactions()->createForIssueComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForIssueComment::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForIssueComment($params['owner'], $params['repo'], $params['comment_id'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForIssue::OPERATION_MATCH:
                $operation = $this->reactions()->listForIssue($params['owner'], $params['repo'], $params['issue_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForIssue::OPERATION_MATCH:
                $operation = $this->reactions()->createForIssue($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForIssue::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForIssue($params['owner'], $params['repo'], $params['issue_number'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForPullRequestReviewComment::OPERATION_MATCH:
                $operation = $this->reactions()->listForPullRequestReviewComment($params['owner'], $params['repo'], $params['comment_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForPullRequestReviewComment::OPERATION_MATCH:
                $operation = $this->reactions()->createForPullRequestReviewComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForPullRequestComment::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForPullRequestComment($params['owner'], $params['repo'], $params['comment_id'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForRelease::OPERATION_MATCH:
                $operation = $this->reactions()->listForRelease($params['owner'], $params['repo'], $params['release_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForRelease::OPERATION_MATCH:
                $operation = $this->reactions()->createForRelease($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForRelease::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForRelease($params['owner'], $params['repo'], $params['release_id'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionCommentLegacy::OPERATION_MATCH:
                $operation = $this->reactions()->listForTeamDiscussionCommentLegacy($params['team_id'], $params['discussion_number'], $params['comment_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionCommentLegacy::OPERATION_MATCH:
                $operation = $this->reactions()->createForTeamDiscussionCommentLegacy($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionLegacy::OPERATION_MATCH:
                $operation = $this->reactions()->listForTeamDiscussionLegacy($params['team_id'], $params['discussion_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionLegacy::OPERATION_MATCH:
                $operation = $this->reactions()->createForTeamDiscussionLegacy($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\RateLimit\Get::OPERATION_MATCH:
                $operation = $this->rateLimit()->get();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimitOverview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Create::OPERATION_MATCH:
                $operation = $this->checks()->create($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Get::OPERATION_MATCH:
                $operation = $this->checks()->get($params['owner'], $params['repo'], $params['check_run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Update::OPERATION_MATCH:
                $operation = $this->checks()->update($params['owner'], $params['repo'], $params['check_run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListAnnotations::OPERATION_MATCH:
                $operation = $this->checks()->listAnnotations($params['owner'], $params['repo'], $params['check_run_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C33D2984B495081F1F782F0Bdbed8A0E5 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestRun::OPERATION_MATCH:
                $operation = $this->checks()->rerequestRun($params['owner'], $params['repo'], $params['check_run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\CreateSuite::OPERATION_MATCH:
                $operation = $this->checks()->createSuite($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckSuite {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\SetSuitesPreferences::OPERATION_MATCH:
                $operation = $this->checks()->setSuitesPreferences($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckSuitePreference {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\GetSuite::OPERATION_MATCH:
                $operation = $this->checks()->getSuite($params['owner'], $params['repo'], $params['check_suite_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckSuite {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListForSuite::OPERATION_MATCH:
                $operation = $this->checks()->listForSuite($params['owner'], $params['repo'], $params['check_suite_id'], $params['check_name'], $params['status'], $params['filter'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C60F581B56E9Cea5Bd326503D1C6D1B0F {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestSuite::OPERATION_MATCH:
                $operation = $this->checks()->rerequestSuite($params['owner'], $params['repo'], $params['check_suite_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListForRef::OPERATION_MATCH:
                $operation = $this->checks()->listForRef($params['owner'], $params['repo'], $params['ref'], $params['check_name'], $params['status'], $params['filter'], $params['per_page'], $params['page'], $params['app_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C60F581B56E9Cea5Bd326503D1C6D1B0F {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListSuitesForRef::OPERATION_MATCH:
                $operation = $this->checks()->listSuitesForRef($params['owner'], $params['repo'], $params['ref'], $params['app_id'], $params['check_name'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFbc8Dc67261Ec91736E48C1Cf35B8429 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\DiffRange::OPERATION_MATCH:
                $operation = $this->dependencyGraph()->diffRange($params['owner'], $params['repo'], $params['basehead'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependencyGraphDiff|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\CreateRepositorySnapshot::OPERATION_MATCH:
                $operation = $this->dependencyGraph()->createRepositorySnapshot($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C8638D96643Fcf5Ffcb917886B51C84Eb {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateBlob::OPERATION_MATCH:
                $operation = $this->git()->createBlob($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ShortBlob|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetBlob::OPERATION_MATCH:
                $operation = $this->git()->getBlob($params['owner'], $params['repo'], $params['file_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Blob|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateCommit::OPERATION_MATCH:
                $operation = $this->git()->createCommit($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitCommit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetCommit::OPERATION_MATCH:
                $operation = $this->git()->getCommit($params['owner'], $params['repo'], $params['commit_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitCommit|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\ListMatchingRefs::OPERATION_MATCH:
                $operation = $this->git()->listMatchingRefs($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C313800Aa2E76Bd5B3C9753E9E9Ae9Ee3 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetRef::OPERATION_MATCH:
                $operation = $this->git()->getRef($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateRef::OPERATION_MATCH:
                $operation = $this->git()->createRef($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\DeleteRef::OPERATION_MATCH:
                $operation = $this->git()->deleteRef($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\UpdateRef::OPERATION_MATCH:
                $operation = $this->git()->updateRef($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateTag::OPERATION_MATCH:
                $operation = $this->git()->createTag($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTag|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetTag::OPERATION_MATCH:
                $operation = $this->git()->getTag($params['owner'], $params['repo'], $params['tag_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTag|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateTree::OPERATION_MATCH:
                $operation = $this->git()->createTree($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTree|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetTree::OPERATION_MATCH:
                $operation = $this->git()->getTree($params['owner'], $params['repo'], $params['tree_sha'], $params['recursive']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTree|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\List::OPERATION_MATCH:
                $operation = $this->pulls()->list($params['owner'], $params['repo'], $params['state'], $params['head'], $params['base'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Afdcb273A556616D8867Fd50A161738|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Create::OPERATION_MATCH:
                $operation = $this->pulls()->create($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviewCommentsForRepo::OPERATION_MATCH:
                $operation = $this->pulls()->listReviewCommentsForRepo($params['owner'], $params['repo'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF89C208Bbcc1Fa8Cdfabfebbde8Ab772 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReviewComment::OPERATION_MATCH:
                $operation = $this->pulls()->getReviewComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeleteReviewComment::OPERATION_MATCH:
                $operation = $this->pulls()->deleteReviewComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReviewComment::OPERATION_MATCH:
                $operation = $this->pulls()->updateReviewComment($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Get::OPERATION_MATCH:
                $operation = $this->pulls()->get($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Update::OPERATION_MATCH:
                $operation = $this->pulls()->update($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviewComments::OPERATION_MATCH:
                $operation = $this->pulls()->listReviewComments($params['owner'], $params['repo'], $params['pull_number'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF89C208Bbcc1Fa8Cdfabfebbde8Ab772 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReviewComment::OPERATION_MATCH:
                $operation = $this->pulls()->createReviewComment($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReplyForReviewComment::OPERATION_MATCH:
                $operation = $this->pulls()->createReplyForReviewComment($params['owner'], $params['repo'], $params['pull_number'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListCommits::OPERATION_MATCH:
                $operation = $this->pulls()->listCommits($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C844E23F82575A50855510A97A1C68898 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListFiles::OPERATION_MATCH:
                $operation = $this->pulls()->listFiles($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBd10796Debc7920F91B5617Afd47F727|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CheckIfMerged::OPERATION_MATCH:
                $operation = $this->pulls()->checkIfMerged($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Merge::OPERATION_MATCH:
                $operation = $this->pulls()->merge($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMergeResult|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListRequestedReviewers::OPERATION_MATCH:
                $operation = $this->pulls()->listRequestedReviewers($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewRequest {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RequestReviewers::OPERATION_MATCH:
                $operation = $this->pulls()->requestReviewers($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RemoveRequestedReviewers::OPERATION_MATCH:
                $operation = $this->pulls()->removeRequestedReviewers($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviews::OPERATION_MATCH:
                $operation = $this->pulls()->listReviews($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9808Acb55D1D6De88353B547A6D24167 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReview::OPERATION_MATCH:
                $operation = $this->pulls()->createReview($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReview::OPERATION_MATCH:
                $operation = $this->pulls()->getReview($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReview::OPERATION_MATCH:
                $operation = $this->pulls()->updateReview($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeletePendingReview::OPERATION_MATCH:
                $operation = $this->pulls()->deletePendingReview($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListCommentsForReview::OPERATION_MATCH:
                $operation = $this->pulls()->listCommentsForReview($params['owner'], $params['repo'], $params['pull_number'], $params['review_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFb4596C0Fc740434Cef2371747A626Ed|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DismissReview::OPERATION_MATCH:
                $operation = $this->pulls()->dismissReview($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\SubmitReview::OPERATION_MATCH:
                $operation = $this->pulls()->submitReview($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateBranch::OPERATION_MATCH:
                $operation = $this->pulls()->updateBranch($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA5445A08E16D224F94859Ebaf785C18A|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Code::OPERATION_MATCH:
                $operation = $this->search()->code($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CEba9Ffad53Bf3D07A128329D2F082D34|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Commits::OPERATION_MATCH:
                $operation = $this->search()->commits($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1866497B9C15615Ec03A90Fac4282D1B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\IssuesAndPullRequests::OPERATION_MATCH:
                $operation = $this->search()->issuesAndPullRequests($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2Ad43Aedc57E80Fd3A21B0Feba475487|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Labels::OPERATION_MATCH:
                $operation = $this->search()->labels($params['repository_id'], $params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3D0B1A33D0E21B9449553352Ee4C6C9D|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Repos::OPERATION_MATCH:
                $operation = $this->search()->repos($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CB71A98Bede90C5E5046C1Ef70586Ae6F|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Topics::OPERATION_MATCH:
                $operation = $this->search()->topics($params['q'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C050Dfd1E0C4A60Cde55137Ec4864C709 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Users::OPERATION_MATCH:
                $operation = $this->search()->users($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC9971B26A226492E08644Fd99C1917A6|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetAuthenticated::OPERATION_MATCH:
                $operation = $this->users()->getAuthenticated();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFa9375D5B4Dfa8F391595615Bd0Addf4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UpdateAuthenticated::OPERATION_MATCH:
                $operation = $this->users()->updateAuthenticated();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PrivateUser|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListBlockedByAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->listBlockedByAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckBlocked::OPERATION_MATCH:
                $operation = $this->users()->checkBlocked($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Block::OPERATION_MATCH:
                $operation = $this->users()->block($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unblock::OPERATION_MATCH:
                $operation = $this->users()->unblock($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\SetPrimaryEmailVisibilityForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->setPrimaryEmailVisibilityForAuthenticatedUser();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD51E01Cc5874C6066A75A0Fc85B55D9B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListEmailsForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->listEmailsForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD51E01Cc5874C6066A75A0Fc85B55D9B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\AddEmailForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->addEmailForAuthenticatedUser();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD51E01Cc5874C6066A75A0Fc85B55D9B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteEmailForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->deleteEmailForAuthenticatedUser();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowersForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->listFollowersForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowedByAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->listFollowedByAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckPersonIsFollowedByAuthenticated::OPERATION_MATCH:
                $operation = $this->users()->checkPersonIsFollowedByAuthenticated($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Follow::OPERATION_MATCH:
                $operation = $this->users()->follow($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unfollow::OPERATION_MATCH:
                $operation = $this->users()->unfollow($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->listGpgKeysForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0F67251Be1Ebeacdc9100Fcc0Bd1D93E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreateGpgKeyForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->createGpgKeyForAuthenticatedUser();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetGpgKeyForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->getGpgKeyForAuthenticatedUser($params['gpg_key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteGpgKeyForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->deleteGpgKeyForAuthenticatedUser($params['gpg_key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicSshKeysForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->listPublicSshKeysForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C8569D1C942B35A48Ce04Dca29B28Fb71|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreatePublicSshKeyForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->createPublicSshKeyForAuthenticatedUser();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Key|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetPublicSshKeyForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->getPublicSshKeyForAuthenticatedUser($params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Key|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeletePublicSshKeyForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->deletePublicSshKeyForAuthenticatedUser($params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicEmailsForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->listPublicEmailsForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD51E01Cc5874C6066A75A0Fc85B55D9B|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListSshSigningKeysForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->listSshSigningKeysForAuthenticatedUser($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C015E31Db5815A354C246A2918708Fa5E|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreateSshSigningKeyForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->createSshSigningKeyForAuthenticatedUser();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SshSigningKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetSshSigningKeyForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->getSshSigningKeyForAuthenticatedUser($params['ssh_signing_key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SshSigningKey|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteSshSigningKeyForAuthenticatedUser::OPERATION_MATCH:
                $operation = $this->users()->deleteSshSigningKeyForAuthenticatedUser($params['ssh_signing_key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\List::OPERATION_MATCH:
                $operation = $this->users()->list($params['since'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetByUsername::OPERATION_MATCH:
                $operation = $this->users()->getByUsername($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFa9375D5B4Dfa8F391595615Bd0Addf4|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowersForUser::OPERATION_MATCH:
                $operation = $this->users()->listFollowersForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowingForUser::OPERATION_MATCH:
                $operation = $this->users()->listFollowingForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C34568Fbad6459B5C1F84F7D986317072 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckFollowingForUser::OPERATION_MATCH:
                $operation = $this->users()->checkFollowingForUser($params['username'], $params['target_user']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForUser::OPERATION_MATCH:
                $operation = $this->users()->listGpgKeysForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C0F67251Be1Ebeacdc9100Fcc0Bd1D93E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetContextForUser::OPERATION_MATCH:
                $operation = $this->users()->getContextForUser($params['username'], $params['subject_type'], $params['subject_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hovercard|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicKeysForUser::OPERATION_MATCH:
                $operation = $this->users()->listPublicKeysForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5C26E46Afe4Dc8D40051D9776F160A55 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListSshSigningKeysForUser::OPERATION_MATCH:
                $operation = $this->users()->listSshSigningKeysForUser($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C015E31Db5815A354C246A2918708Fa5E {
                    return $operation->createResponse($response);
                });
                break;
        }
    }
}
