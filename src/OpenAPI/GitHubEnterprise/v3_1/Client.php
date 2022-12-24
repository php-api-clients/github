<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1;

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
    public function meta() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function enterpriseAdmin() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function apps() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function oauthAuthorizations() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function codesOfConduct() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodesOfConduct
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodesOfConduct($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function emojis() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Emojis
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Emojis($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function activity() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function gists() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function gitignore() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gitignore
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gitignore($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function issues() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function licenses() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Licenses
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Licenses($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function markdown() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Markdown
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Markdown($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function orgs() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function actions() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function projects() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function repos() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function teams() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function reactions() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function rateLimit() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\RateLimit
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\RateLimit($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function checks() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function codeScanning() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function git() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function pulls() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function secretScanning() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function search() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function users() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    /**
     * @return \React\Promise\PromiseInterface<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Root|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ApiOverview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CFe0E025D5275E9287953D2E7A5709091|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GlobalHook|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GlobalHook2|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C6995Add8574F7A46789A279B14Ad85Ee|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\LdapMappingTeam|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CDa64E2C4Ce7D17A902567C224954928C|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\LdapMappingUser|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrganizationSimple|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CA5445A08E16D224F94859Ebaf785C18A|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C65Ebc59Eb4594424D33Eb572Bf0F6074|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveEnvironment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB0962D50Ed9A137436E89Ffb414475Ff|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveEnvironmentDownloadStatus|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C07E882Ea0E45D146C811Edf7A6Ef97Ac|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveHook|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB1B2Ac0975610A6033678C50B86Bdaa8|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Announcement|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\LicenseInfo|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseOverview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseCommentOverview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseGistOverview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseHookOverview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseIssueOverview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseMilestoneOverview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseOrganizationOverview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterprisePageOverview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterprisePullRequestOverview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseRepositoryOverview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseUserOverview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ActionsEnterprisePermissions|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C97D27B6C6F32A8747Affd4557F33C1D0|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SelectedActions|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C6Fb5D4F8F68Fdd141Dd186A23703Ff63|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RunnerGroupsEnterprise|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5F3B5341Fe53998B5Bf27243A42Db029|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C70992A2B1985E0F30Bf3Dc67Ba7A9E62|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C948655Af6C42D69A42F49158Df1C3402|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\AuthenticationToken|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Runner|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CAea8D6D376273Ce8F2C859B906Bda275|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrgPreReceiveHook|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CDddce390B7F2724E8478B23666A28Fbe|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RepositoryPreReceiveHook|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ConfigurationStatus|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MaintenanceStatus|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseSettings|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C68A5344Ab36B95B4B0C7809494B837E6|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Integration|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE85B3748Bf81A8B922Fc20907Fe13121|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\WebhookConfig|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C9Fcd92383Ece53798B97E15E32465997|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Installation|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\InstallationToken|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF7083F2220Fb0E3E75045Cde3758Adca|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C1E682172E06C99Beca9Feaef46B2C84F|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ContentReferenceAttachment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5C91Adca674B8B2139054218168F68Fe|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C7Bee6D1Dc141458A3B4A51C5D6F672A7|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD51Dfba53B03787E606Db2B1C77Bd235|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CBbd9Fe55A2Ac9Dca2B2B1D2A31529C14|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ApplicationGrant|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C143D8483Bf88427Ecdccf31C4B84Df34|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeOfConduct|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C79A542C60Fea0A939B2Ff6241Fc22Cd9|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Fd6E453Dc7B52E8F6B265D51Bf386Cd|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Feed|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C75Db304031A03Ad629E272C776541184|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C7B1F87F42Ca7F4E6F27Ed1Bcbfcee301|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Thread|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ThreadSubscription|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CBb2225Af6E99D16Bed119602E3D89950|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RepositorySubscription|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C9C42C689A0054B75A8Dec6Bcd543Dc1C|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C8D13A2018821C89360F78Fa638427Ff2|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C485Ae05Bd8B66Cc48Dd15Ae5E9B10Fa9|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C79943Fe85C25F431Efb1B11F05E23B2A|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C090B236755F844A0F7865497949Ad2C6|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD7C4628D526D62D8495C7C6Cbef013C7|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C6Bce17Cb99Cf7E94C9Bf312073E67Aac|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C7963F2668518F2C5D22Fc6Aa55968A4F|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C642B01Abf64A30C3Ca41978Cd87Df086|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BaseGist|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitignoreTemplate|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD3C0A11593838100Ff11Bc6F47Fe722F|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Issue|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CCa185F2A6F66259196B181929D452801|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF30892F62F05068Ec4Bfc9F73B3Efb36|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueEvent|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C19Bb64D5Fd748787676B161Fe37F2739|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF6Cb5B7Edce4664A8577Da4F85980E9D|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Label|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE2Af2Ba6A7Deffb56F18Cd68Ca2D4Dd8|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Milestone|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD8C95C094316027Eaa26C6Eaf9500Ad8|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\License|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\LicenseContent|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C16A0Bf31F9803C1B457B513761D3D296|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrganizationFull|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C197505B37575Ae3739584A4C9Efe0801|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB67C6Ee16Ad4A7D622A946776B49230E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C617261Cc21F6F7Ff1311625A265A01Af|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ActionsOrganizationPermissions|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C93449899E100509F50A0F7952B2F2Eb7|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CEa6F9A65671822A0987E6600E25Efc0B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RunnerGroupsOrg|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CDdaa6Ec087452677De6846Ef563Fa06D|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB0601E51Fc03Ef9031D3Dad84Cee821B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C6Fd51E546F4Dbe120D78A3534B76Ce0E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ActionsPublicKey|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrganizationActionsSecret|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EmptyObject|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C23364A3Cd8807Cb5B7484843C7A3D6B5|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C1A91B16Fbf38476A7587Bb22E0507C4B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Artifact|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Job|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ActionsRepositoryPermissions|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C1Ff801D411600B3Ccc9D9C95835A8959|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\WorkflowRun|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C33Ec992D5C5A124A238Bc487Da638017|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C58E2D92A7Aba442Fdb0A439Eb965962E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ActionsSecret|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE25F066E8D67A0F40D61Cb64Df1Cebf6|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Workflow|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C21B137D26D4A6C1E727205Ff2694Ca25|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Project|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF694556E3Cc88993A89F1Ed7Afdf4E13|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2F32Ad791Ebef4439Dfb273837Ce0D99|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C84C5Bf99Acadc6Ec8B2A32F2014E1E35|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProjectColumn|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C05869185A1Ae8F764F599573Ffe43267|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProjectCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C338B4411A0Be86E1C6C9A568915F6984|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Repository|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C263Cdb7F5A42Fa1855B6A1Cf10A3A09E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BranchWithProtection|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BranchProtection|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranch|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchPullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\StatusCheckPolicy|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BranchRestrictionPolicy|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB58C0Be877496548Df797B5B11C3816E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF0Be24F8597Ad4528456Ed5061738A45|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RepositoryInvitation|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RepositoryCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C8D3D4Ebb8582De080E9051A8Acffbed8|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2Fce5Fb56D535A059D420B509Bed9Af8|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C44F966765547C3442B15293D242E13E2|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C8508F6Ae7E9Fb82136B64B1341E8F58B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CombinedCommitStatus|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C1F1E0Aa71E630F87D06D6088191F1113|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CommitComparison|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ContentTree|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4C3B8B55E91675Ede834Ec846030F434|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\FileCommit|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CA7Ca0Fcacca5Fd9Bfaa0D26Cc7352Dca|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C845B0A725D585B0Eb70Ea1E123E677Ba|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Deployment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB4651B937071Bfb661227726852E33F2|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\DeploymentStatus|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C93398D574890C20220765464A6827F0C|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Hook|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5F31Fb82C3925014Cec980C132E3D578|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC93D724F8E2Cec316C29Db0959D273Ce|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\DeployKey|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Language|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Page|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C87Cfd323615D443Cf6C479Ef42785772|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PageBuildStatus|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PageBuild|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ContentFile|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3Ed85De40527A2Abb9F07311C2E6Cf5E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Release|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReleaseAsset|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE87A6A239Dc140547Ff9387A1Cee8B2D|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C9Bf7717E69D86Ca1B138987Fdb5033B6|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C06431446E4E9E28A63Fd6A22436F7D82|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C1B686Ae216Eb18B911E06049800E96B8|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ParticipationStats|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Status|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CEc94E54447F15Bea9F91Abe39Ef7B5F6|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Topic|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MinimalRepository|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C0307B81625Ab65Df14180Ca2Bb515F88|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamDiscussion|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C43Ec5D53Fa9C0088B332Ac40F204Bd98|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamDiscussionComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamMembership|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C909932Bc1B0Dbc19636Da1F9F96A30Fe|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamProject|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamRepository|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C7B27057C39385Db15D1Ce7418415Efdc|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3F4Fe37391Cca10E2Ea0B2B850605Fd2|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RateLimitOverview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CheckRun|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C33D2984B495081F1F782F0Bdbed8A0E5|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CheckSuite|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CheckSuitePreference|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC909573C594C3Dc4B79Ed90092F93B7B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CDffd072C914Dc2B1D6Cc6D2A68487943|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD617Ac0Fc5D00Cd18806Bc4A09Eb5E80|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAlert|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC78B9C183723A3Bb5Ac53690424C6377|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C194F0B3Bd602Ecab93A3De60D872E768|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAnalysis|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2F9C313De3F7Bfd4586Bcc096B11A634|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAnalysisDeletion|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningSarifsReceipt|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningSarifsStatus|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ShortBlob|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Blob|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C313800Aa2E76Bd5B3C9753E9E9Ae9Ee3|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitTag|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitTree|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C9565403D0Df74C88267D0Dec13A2C190|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CBd10796Debc7920F91B5617Afd47F727|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestMergeResult|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReviewRequest|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestSimple|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CA1672Bc52D881E5E118Aedd018082Bd7|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C7E23Ff976Bcd2D81Ad2A279D076Fb67F|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C85292Fc9E41C40C0D074E7211C2D2Ff9|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SecretScanningAlert|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C320890Ae93274Fed008A425E66Ea7C9B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4Afa3Cfaa7Deb82A5Bba90222E0475Bc|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C53E0D8Ff9344Bbdf0F27Aa7903572859|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3D0B1A33D0E21B9449553352Ee4C6C9D|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Ff7B0517D3Daa69359Aac91Ef639Eec|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C050Dfd1E0C4A60Cde55137Ec4864C709|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC9971B26A226492E08644Fd99C1917A6|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CFa9375D5B4Dfa8F391595615Bd0Addf4|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PrivateUser|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD51E01Cc5874C6066A75A0Fc85B55D9B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4Be7352D2188Dd21500E563C327Cd0D4|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GpgKey|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C8569D1C942B35A48Ce04Dca29B28Fb71|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Key|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Hovercard|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5C26E46Afe4Dc8D40051D9776F160A55>
     */
    public function call(string $call, array $params = array())
    {
        switch ($call) {
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\Root_::OPERATION_MATCH:
                $operation = $this->meta()->root_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Root {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\Get_::OPERATION_MATCH:
                $operation = $this->meta()->get_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ApiOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\GetOctocat_::OPERATION_MATCH:
                $operation = $this->meta()->getOctocat_($params['s']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\GetZen_::OPERATION_MATCH:
                $operation = $this->meta()->getZen_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListGlobalWebhooks_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listGlobalWebhooks_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CFe0E025D5275E9287953D2E7A5709091 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateGlobalWebhook_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createGlobalWebhook_($params['accept']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GlobalHook {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetGlobalWebhook_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getGlobalWebhook_($params['accept'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GlobalHook {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteGlobalWebhook_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deleteGlobalWebhook_($params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateGlobalWebhook_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updateGlobalWebhook_($params['accept'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GlobalHook2 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\PingGlobalWebhook_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->pingGlobalWebhook_($params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPublicKeys_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listPublicKeys_($params['per_page'], $params['page'], $params['direction'], $params['sort'], $params['since']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C6995Add8574F7A46789A279B14Ad85Ee {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePublicKey_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deletePublicKey_($params['key_ids']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateLdapMappingForTeam_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updateLdapMappingForTeam_($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\LdapMappingTeam {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SyncLdapMappingForTeam_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->syncLdapMappingForTeam_($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CDa64E2C4Ce7D17A902567C224954928C {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateLdapMappingForUser_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updateLdapMappingForUser_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\LdapMappingUser {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SyncLdapMappingForUser_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->syncLdapMappingForUser_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CDa64E2C4Ce7D17A902567C224954928C {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateOrg_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createOrg_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrganizationSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateOrgName_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updateOrgName_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CA5445A08E16D224F94859Ebaf785C18A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPreReceiveEnvironments_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listPreReceiveEnvironments_($params['per_page'], $params['page'], $params['direction'], $params['sort']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C65Ebc59Eb4594424D33Eb572Bf0F6074 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreatePreReceiveEnvironment_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createPreReceiveEnvironment_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveEnvironment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPreReceiveEnvironment_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getPreReceiveEnvironment_($params['pre_receive_environment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveEnvironment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deletePreReceiveEnvironment_($params['pre_receive_environment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB0962D50Ed9A137436E89Ffb414475Ff {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updatePreReceiveEnvironment_($params['pre_receive_environment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveEnvironment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB0962D50Ed9A137436E89Ffb414475Ff {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->startPreReceiveEnvironmentDownload_($params['pre_receive_environment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveEnvironmentDownloadStatus|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB0962D50Ed9A137436E89Ffb414475Ff {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getDownloadStatusForPreReceiveEnvironment_($params['pre_receive_environment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveEnvironmentDownloadStatus {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPreReceiveHooks_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listPreReceiveHooks_($params['per_page'], $params['page'], $params['direction'], $params['sort']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C07E882Ea0E45D146C811Edf7A6Ef97Ac {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreatePreReceiveHook_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createPreReceiveHook_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveHook {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPreReceiveHook_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getPreReceiveHook_($params['pre_receive_hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveHook {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePreReceiveHook_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deletePreReceiveHook_($params['pre_receive_hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdatePreReceiveHook_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updatePreReceiveHook_($params['pre_receive_hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveHook {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPersonalAccessTokens_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listPersonalAccessTokens_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB1B2Ac0975610A6033678C50B86Bdaa8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePersonalAccessToken_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deletePersonalAccessToken_($params['token_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateUser_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteUser_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deleteUser_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateUsernameForUser_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updateUsernameForUser_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CA5445A08E16D224F94859Ebaf785C18A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateImpersonationOAuthToken_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createImpersonationOAuthToken_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Authorization {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteImpersonationOAuthToken_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deleteImpersonationOAuthToken_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAnnouncement_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getAnnouncement_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Announcement {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveAnnouncement_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removeAnnouncement_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetAnnouncement_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setAnnouncement_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Announcement {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetLicenseInformation_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getLicenseInformation_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\LicenseInfo {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAllStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getAllStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetCommentStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getCommentStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseCommentOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetGistStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getGistStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseGistOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetHooksStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getHooksStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseHookOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetIssueStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getIssueStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseIssueOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetMilestoneStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getMilestoneStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseMilestoneOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetOrgStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getOrgStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseOrganizationOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPagesStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getPagesStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterprisePageOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPullRequestStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getPullRequestStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterprisePullRequestOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetRepoStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getRepoStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseRepositoryOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetUserStats_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getUserStats_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseUserOverview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getGithubActionsPermissionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ActionsEnterprisePermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setGithubActionsPermissionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelectedOrganizationsEnabledGithubActionsEnterprise_($params['enterprise'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C97D27B6C6F32A8747Affd4557F33C1D0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setSelectedOrganizationsEnabledGithubActionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->enableSelectedOrganizationGithubActionsEnterprise_($params['enterprise'], $params['org_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->disableSelectedOrganizationGithubActionsEnterprise_($params['enterprise'], $params['org_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getAllowedActionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SelectedActions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setAllowedActionsEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelfHostedRunnerGroupsForEnterprise_($params['enterprise'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C6Fb5D4F8F68Fdd141Dd186A23703Ff63 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createSelfHostedRunnerGroupForEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RunnerGroupsEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getSelfHostedRunnerGroupForEnterprise_($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RunnerGroupsEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deleteSelfHostedRunnerGroupFromEnterprise_($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updateSelfHostedRunnerGroupForEnterprise_($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RunnerGroupsEnterprise {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listOrgAccessToSelfHostedRunnerGroupInEnterprise_($params['enterprise'], $params['runner_group_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C97D27B6C6F32A8747Affd4557F33C1D0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setOrgAccessToSelfHostedRunnerGroupInEnterprise_($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->addOrgAccessToSelfHostedRunnerGroupInEnterprise_($params['enterprise'], $params['runner_group_id'], $params['org_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removeOrgAccessToSelfHostedRunnerGroupInEnterprise_($params['enterprise'], $params['runner_group_id'], $params['org_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelfHostedRunnersInGroupForEnterprise_($params['enterprise'], $params['runner_group_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5F3B5341Fe53998B5Bf27243A42Db029 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setSelfHostedRunnersInGroupForEnterprise_($params['enterprise'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->addSelfHostedRunnerToGroupForEnterprise_($params['enterprise'], $params['runner_group_id'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removeSelfHostedRunnerFromGroupForEnterprise_($params['enterprise'], $params['runner_group_id'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listSelfHostedRunnersForEnterprise_($params['enterprise'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C70992A2B1985E0F30Bf3Dc67Ba7A9E62 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listRunnerApplicationsForEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C948655Af6C42D69A42F49158Df1C3402 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createRegistrationTokenForEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createRemoveTokenForEnterprise_($params['enterprise']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getSelfHostedRunnerForEnterprise_($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Runner {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->deleteSelfHostedRunnerFromEnterprise_($params['enterprise'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPreReceiveHooksForOrg_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listPreReceiveHooksForOrg_($params['org'], $params['per_page'], $params['page'], $params['direction'], $params['sort']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CAea8D6D376273Ce8F2C859B906Bda275 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPreReceiveHookForOrg_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getPreReceiveHookForOrg_($params['org'], $params['pre_receive_hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrgPreReceiveHook {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrg_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removePreReceiveHookEnforcementForOrg_($params['org'], $params['pre_receive_hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrgPreReceiveHook {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updatePreReceiveHookEnforcementForOrg_($params['org'], $params['pre_receive_hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrgPreReceiveHook {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPreReceiveHooksForRepo_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->listPreReceiveHooksForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page'], $params['direction'], $params['sort']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CDddce390B7F2724E8478B23666A28Fbe {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPreReceiveHookForRepo_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getPreReceiveHookForRepo_($params['owner'], $params['repo'], $params['pre_receive_hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RepositoryPreReceiveHook {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepo_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removePreReceiveHookEnforcementForRepo_($params['owner'], $params['repo'], $params['pre_receive_hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RepositoryPreReceiveHook {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->updatePreReceiveHookEnforcementForRepo_($params['owner'], $params['repo'], $params['pre_receive_hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RepositoryPreReceiveHook {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetConfigurationStatus_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getConfigurationStatus_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ConfigurationStatus {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\StartConfigurationProcess_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->startConfigurationProcess_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetMaintenanceStatus_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getMaintenanceStatus_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MaintenanceStatus {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\EnableOrDisableMaintenanceMode_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->enableOrDisableMaintenanceMode_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MaintenanceStatus {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetSettings_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getSettings_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseSettings {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetSettings_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->setSettings_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAllAuthorizedSshKeys_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->getAllAuthorizedSshKeys_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C68A5344Ab36B95B4B0C7809494B837E6 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\AddAuthorizedSshKey_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->addAuthorizedSshKey_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C68A5344Ab36B95B4B0C7809494B837E6 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveAuthorizedSshKey_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->removeAuthorizedSshKey_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C68A5344Ab36B95B4B0C7809494B837E6 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateEnterpriseServerLicense_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->createEnterpriseServerLicense_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpgradeLicense_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->upgradeLicense_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\PromoteUserToBeSiteAdministrator_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->promoteUserToBeSiteAdministrator_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DemoteSiteAdministrator_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->demoteSiteAdministrator_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SuspendUser_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->suspendUser_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UnsuspendUser_::OPERATION_MATCH:
                $operation = $this->enterpriseAdmin()->unsuspendUser_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\GetAuthenticated_::OPERATION_MATCH:
                $operation = $this->apps()->getAuthenticated_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Integration {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\CreateFromManifest_::OPERATION_MATCH:
                $operation = $this->apps()->createFromManifest_($params['code']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE85B3748Bf81A8B922Fc20907Fe13121|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\GetWebhookConfigForApp_::OPERATION_MATCH:
                $operation = $this->apps()->getWebhookConfigForApp_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\UpdateWebhookConfigForApp_::OPERATION_MATCH:
                $operation = $this->apps()->updateWebhookConfigForApp_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\ListInstallations_::OPERATION_MATCH:
                $operation = $this->apps()->listInstallations_($params['per_page'], $params['page'], $params['since'], $params['outdated']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C9Fcd92383Ece53798B97E15E32465997 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\GetInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->getInstallation_($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Installation|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\DeleteInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->deleteInstallation_($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\CreateInstallationAccessToken_::OPERATION_MATCH:
                $operation = $this->apps()->createInstallationAccessToken_($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\InstallationToken|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\SuspendInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->suspendInstallation_($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\UnsuspendInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->unsuspendInstallation_($params['installation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\DeleteAuthorization_::OPERATION_MATCH:
                $operation = $this->apps()->deleteAuthorization_($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\RevokeGrantForApplication_::OPERATION_MATCH:
                $operation = $this->apps()->revokeGrantForApplication_($params['client_id'], $params['access_token']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\CheckToken_::OPERATION_MATCH:
                $operation = $this->apps()->checkToken_($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\DeleteToken_::OPERATION_MATCH:
                $operation = $this->apps()->deleteToken_($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\ResetToken_::OPERATION_MATCH:
                $operation = $this->apps()->resetToken_($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\ScopeToken_::OPERATION_MATCH:
                $operation = $this->apps()->scopeToken_($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\CheckAuthorization_::OPERATION_MATCH:
                $operation = $this->apps()->checkAuthorization_($params['client_id'], $params['access_token']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF7083F2220Fb0E3E75045Cde3758Adca|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\ResetAuthorization_::OPERATION_MATCH:
                $operation = $this->apps()->resetAuthorization_($params['client_id'], $params['access_token']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Authorization {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\RevokeAuthorizationForApplication_::OPERATION_MATCH:
                $operation = $this->apps()->revokeAuthorizationForApplication_($params['client_id'], $params['access_token']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\GetBySlug_::OPERATION_MATCH:
                $operation = $this->apps()->getBySlug_($params['app_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Integration|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\ListReposAccessibleToInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->listReposAccessibleToInstallation_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C1E682172E06C99Beca9Feaef46B2C84F|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\RevokeInstallationAccessToken_::OPERATION_MATCH:
                $operation = $this->apps()->revokeInstallationAccessToken_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\GetOrgInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->getOrgInstallation_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Installation {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\CreateContentAttachment_::OPERATION_MATCH:
                $operation = $this->apps()->createContentAttachment_($params['owner'], $params['repo'], $params['content_reference_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ContentReferenceAttachment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5C91Adca674B8B2139054218168F68Fe {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\GetRepoInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->getRepoInstallation_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Installation|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\ListInstallationsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->apps()->listInstallationsForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C7Bee6D1Dc141458A3B4A51C5D6F672A7|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\ListInstallationReposForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->apps()->listInstallationReposForAuthenticatedUser_($params['installation_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD51Dfba53B03787E606Db2B1C77Bd235|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\AddRepoToInstallationForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->apps()->addRepoToInstallationForAuthenticatedUser_($params['installation_id'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->apps()->removeRepoFromInstallationForAuthenticatedUser_($params['installation_id'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\GetUserInstallation_::OPERATION_MATCH:
                $operation = $this->apps()->getUserInstallation_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Installation {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\ListGrants_::OPERATION_MATCH:
                $operation = $this->oauthAuthorizations()->listGrants_($params['per_page'], $params['page'], $params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CBbd9Fe55A2Ac9Dca2B2B1D2A31529C14|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetGrant_::OPERATION_MATCH:
                $operation = $this->oauthAuthorizations()->getGrant_($params['grant_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ApplicationGrant|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\DeleteGrant_::OPERATION_MATCH:
                $operation = $this->oauthAuthorizations()->deleteGrant_($params['grant_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\ListAuthorizations_::OPERATION_MATCH:
                $operation = $this->oauthAuthorizations()->listAuthorizations_($params['per_page'], $params['page'], $params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB1B2Ac0975610A6033678C50B86Bdaa8|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\CreateAuthorization_::OPERATION_MATCH:
                $operation = $this->oauthAuthorizations()->createAuthorization_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetOrCreateAuthorizationForApp_::OPERATION_MATCH:
                $operation = $this->oauthAuthorizations()->getOrCreateAuthorizationForApp_($params['client_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint_::OPERATION_MATCH:
                $operation = $this->oauthAuthorizations()->getOrCreateAuthorizationForAppAndFingerprint_($params['client_id'], $params['fingerprint']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetAuthorization_::OPERATION_MATCH:
                $operation = $this->oauthAuthorizations()->getAuthorization_($params['authorization_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\DeleteAuthorization_::OPERATION_MATCH:
                $operation = $this->oauthAuthorizations()->deleteAuthorization_($params['authorization_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\UpdateAuthorization_::OPERATION_MATCH:
                $operation = $this->oauthAuthorizations()->updateAuthorization_($params['authorization_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Authorization|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodesOfConduct\GetAllCodesOfConduct_::OPERATION_MATCH:
                $operation = $this->codesOfConduct()->getAllCodesOfConduct_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C143D8483Bf88427Ecdccf31C4B84Df34 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodesOfConduct\GetConductCode_::OPERATION_MATCH:
                $operation = $this->codesOfConduct()->getConductCode_($params['key']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeOfConduct|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Emojis\Get_::OPERATION_MATCH:
                $operation = $this->emojis()->get_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C79A542C60Fea0A939B2Ff6241Fc22Cd9 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListPublicEvents_::OPERATION_MATCH:
                $operation = $this->activity()->listPublicEvents_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Fd6E453Dc7B52E8F6B265D51Bf386Cd|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\GetFeeds_::OPERATION_MATCH:
                $operation = $this->activity()->getFeeds_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Feed {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListPublicEventsForRepoNetwork_::OPERATION_MATCH:
                $operation = $this->activity()->listPublicEventsForRepoNetwork_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Fd6E453Dc7B52E8F6B265D51Bf386Cd|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListNotificationsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listNotificationsForAuthenticatedUser_($params['all'], $params['participating'], $params['since'], $params['before'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C75Db304031A03Ad629E272C776541184|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\MarkNotificationsAsRead_::OPERATION_MATCH:
                $operation = $this->activity()->markNotificationsAsRead_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C7B1F87F42Ca7F4E6F27Ed1Bcbfcee301|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\GetThread_::OPERATION_MATCH:
                $operation = $this->activity()->getThread_($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Thread|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\MarkThreadAsRead_::OPERATION_MATCH:
                $operation = $this->activity()->markThreadAsRead_($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->getThreadSubscriptionForAuthenticatedUser_($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ThreadSubscription|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\SetThreadSubscription_::OPERATION_MATCH:
                $operation = $this->activity()->setThreadSubscription_($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ThreadSubscription|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\DeleteThreadSubscription_::OPERATION_MATCH:
                $operation = $this->activity()->deleteThreadSubscription_($params['thread_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListPublicOrgEvents_::OPERATION_MATCH:
                $operation = $this->activity()->listPublicOrgEvents_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Fd6E453Dc7B52E8F6B265D51Bf386Cd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListRepoEvents_::OPERATION_MATCH:
                $operation = $this->activity()->listRepoEvents_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Fd6E453Dc7B52E8F6B265D51Bf386Cd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListRepoNotificationsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listRepoNotificationsForAuthenticatedUser_($params['owner'], $params['repo'], $params['all'], $params['participating'], $params['since'], $params['before'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C75Db304031A03Ad629E272C776541184 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\MarkRepoNotificationsAsRead_::OPERATION_MATCH:
                $operation = $this->activity()->markRepoNotificationsAsRead_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CA5445A08E16D224F94859Ebaf785C18A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListStargazersForRepo_::OPERATION_MATCH:
                $operation = $this->activity()->listStargazersForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CBb2225Af6E99D16Bed119602E3D89950|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListWatchersForRepo_::OPERATION_MATCH:
                $operation = $this->activity()->listWatchersForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\GetRepoSubscription_::OPERATION_MATCH:
                $operation = $this->activity()->getRepoSubscription_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RepositorySubscription|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\SetRepoSubscription_::OPERATION_MATCH:
                $operation = $this->activity()->setRepoSubscription_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RepositorySubscription {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\DeleteRepoSubscription_::OPERATION_MATCH:
                $operation = $this->activity()->deleteRepoSubscription_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListReposStarredByAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listReposStarredByAuthenticatedUser_($params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C9C42C689A0054B75A8Dec6Bcd543Dc1C|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C8D13A2018821C89360F78Fa638427Ff2|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\CheckRepoIsStarredByAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->checkRepoIsStarredByAuthenticatedUser_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\StarRepoForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->starRepoForAuthenticatedUser_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\UnstarRepoForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->unstarRepoForAuthenticatedUser_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListWatchedReposForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listWatchedReposForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C485Ae05Bd8B66Cc48Dd15Ae5E9B10Fa9|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListEventsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listEventsForAuthenticatedUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Fd6E453Dc7B52E8F6B265D51Bf386Cd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListOrgEventsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->activity()->listOrgEventsForAuthenticatedUser_($params['username'], $params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Fd6E453Dc7B52E8F6B265D51Bf386Cd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListPublicEventsForUser_::OPERATION_MATCH:
                $operation = $this->activity()->listPublicEventsForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Fd6E453Dc7B52E8F6B265D51Bf386Cd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListReceivedEventsForUser_::OPERATION_MATCH:
                $operation = $this->activity()->listReceivedEventsForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Fd6E453Dc7B52E8F6B265D51Bf386Cd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListReceivedPublicEventsForUser_::OPERATION_MATCH:
                $operation = $this->activity()->listReceivedPublicEventsForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Fd6E453Dc7B52E8F6B265D51Bf386Cd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListReposStarredByUser_::OPERATION_MATCH:
                $operation = $this->activity()->listReposStarredByUser_($params['username'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C79943Fe85C25F431Efb1B11F05E23B2A {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListReposWatchedByUser_::OPERATION_MATCH:
                $operation = $this->activity()->listReposWatchedByUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C485Ae05Bd8B66Cc48Dd15Ae5E9B10Fa9 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\List_::OPERATION_MATCH:
                $operation = $this->gists()->list_($params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C090B236755F844A0F7865497949Ad2C6|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\Create_::OPERATION_MATCH:
                $operation = $this->gists()->create_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\ListPublic_::OPERATION_MATCH:
                $operation = $this->gists()->listPublic_($params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C090B236755F844A0F7865497949Ad2C6|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\ListStarred_::OPERATION_MATCH:
                $operation = $this->gists()->listStarred_($params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C090B236755F844A0F7865497949Ad2C6|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\Get_::OPERATION_MATCH:
                $operation = $this->gists()->get_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD7C4628D526D62D8495C7C6Cbef013C7|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\Delete_::OPERATION_MATCH:
                $operation = $this->gists()->delete_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\Update_::OPERATION_MATCH:
                $operation = $this->gists()->update_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\ListComments_::OPERATION_MATCH:
                $operation = $this->gists()->listComments_($params['gist_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C6Bce17Cb99Cf7E94C9Bf312073E67Aac|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\CreateComment_::OPERATION_MATCH:
                $operation = $this->gists()->createComment_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\GetComment_::OPERATION_MATCH:
                $operation = $this->gists()->getComment_($params['gist_id'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD7C4628D526D62D8495C7C6Cbef013C7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\DeleteComment_::OPERATION_MATCH:
                $operation = $this->gists()->deleteComment_($params['gist_id'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\UpdateComment_::OPERATION_MATCH:
                $operation = $this->gists()->updateComment_($params['gist_id'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GistComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\ListCommits_::OPERATION_MATCH:
                $operation = $this->gists()->listCommits_($params['gist_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C7963F2668518F2C5D22Fc6Aa55968A4F|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\ListForks_::OPERATION_MATCH:
                $operation = $this->gists()->listForks_($params['gist_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C642B01Abf64A30C3Ca41978Cd87Df086|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\Fork_::OPERATION_MATCH:
                $operation = $this->gists()->fork_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BaseGist|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\CheckIsStarred_::OPERATION_MATCH:
                $operation = $this->gists()->checkIsStarred_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\Star_::OPERATION_MATCH:
                $operation = $this->gists()->star_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\Unstar_::OPERATION_MATCH:
                $operation = $this->gists()->unstar_($params['gist_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\GetRevision_::OPERATION_MATCH:
                $operation = $this->gists()->getRevision_($params['gist_id'], $params['sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GistSimple|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\ListForUser_::OPERATION_MATCH:
                $operation = $this->gists()->listForUser_($params['username'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C090B236755F844A0F7865497949Ad2C6|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gitignore\GetAllTemplates_::OPERATION_MATCH:
                $operation = $this->gitignore()->getAllTemplates_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gitignore\GetTemplate_::OPERATION_MATCH:
                $operation = $this->gitignore()->getTemplate_($params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitignoreTemplate {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\List_::OPERATION_MATCH:
                $operation = $this->issues()->list_($params['filter'], $params['state'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['collab'], $params['orgs'], $params['owned'], $params['pulls'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD3C0A11593838100Ff11Bc6F47Fe722F|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListForOrg_::OPERATION_MATCH:
                $operation = $this->issues()->listForOrg_($params['org'], $params['filter'], $params['state'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD3C0A11593838100Ff11Bc6F47Fe722F|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListAssignees_::OPERATION_MATCH:
                $operation = $this->issues()->listAssignees_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\CheckUserCanBeAssigned_::OPERATION_MATCH:
                $operation = $this->issues()->checkUserCanBeAssigned_($params['owner'], $params['repo'], $params['assignee']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListForRepo_::OPERATION_MATCH:
                $operation = $this->issues()->listForRepo_($params['owner'], $params['repo'], $params['milestone'], $params['state'], $params['assignee'], $params['creator'], $params['mentioned'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD3C0A11593838100Ff11Bc6F47Fe722F|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\Create_::OPERATION_MATCH:
                $operation = $this->issues()->create_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Issue|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListCommentsForRepo_::OPERATION_MATCH:
                $operation = $this->issues()->listCommentsForRepo_($params['owner'], $params['repo'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CCa185F2A6F66259196B181929D452801|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\GetComment_::OPERATION_MATCH:
                $operation = $this->issues()->getComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\DeleteComment_::OPERATION_MATCH:
                $operation = $this->issues()->deleteComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\UpdateComment_::OPERATION_MATCH:
                $operation = $this->issues()->updateComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListEventsForRepo_::OPERATION_MATCH:
                $operation = $this->issues()->listEventsForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF30892F62F05068Ec4Bfc9F73B3Efb36|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\GetEvent_::OPERATION_MATCH:
                $operation = $this->issues()->getEvent_($params['owner'], $params['repo'], $params['event_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueEvent|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\Get_::OPERATION_MATCH:
                $operation = $this->issues()->get_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Issue|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\Update_::OPERATION_MATCH:
                $operation = $this->issues()->update_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Issue|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\AddAssignees_::OPERATION_MATCH:
                $operation = $this->issues()->addAssignees_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Issue {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\RemoveAssignees_::OPERATION_MATCH:
                $operation = $this->issues()->removeAssignees_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Issue {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListComments_::OPERATION_MATCH:
                $operation = $this->issues()->listComments_($params['owner'], $params['repo'], $params['issue_number'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CCa185F2A6F66259196B181929D452801|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\CreateComment_::OPERATION_MATCH:
                $operation = $this->issues()->createComment_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListEvents_::OPERATION_MATCH:
                $operation = $this->issues()->listEvents_($params['owner'], $params['repo'], $params['issue_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C19Bb64D5Fd748787676B161Fe37F2739|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListLabelsOnIssue_::OPERATION_MATCH:
                $operation = $this->issues()->listLabelsOnIssue_($params['owner'], $params['repo'], $params['issue_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\SetLabels_::OPERATION_MATCH:
                $operation = $this->issues()->setLabels_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\AddLabels_::OPERATION_MATCH:
                $operation = $this->issues()->addLabels_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\RemoveAllLabels_::OPERATION_MATCH:
                $operation = $this->issues()->removeAllLabels_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\RemoveLabel_::OPERATION_MATCH:
                $operation = $this->issues()->removeLabel_($params['owner'], $params['repo'], $params['issue_number'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\Lock_::OPERATION_MATCH:
                $operation = $this->issues()->lock_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\Unlock_::OPERATION_MATCH:
                $operation = $this->issues()->unlock_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListEventsForTimeline_::OPERATION_MATCH:
                $operation = $this->issues()->listEventsForTimeline_($params['owner'], $params['repo'], $params['issue_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF6Cb5B7Edce4664A8577Da4F85980E9D|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListLabelsForRepo_::OPERATION_MATCH:
                $operation = $this->issues()->listLabelsForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\CreateLabel_::OPERATION_MATCH:
                $operation = $this->issues()->createLabel_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Label|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\GetLabel_::OPERATION_MATCH:
                $operation = $this->issues()->getLabel_($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Label|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\DeleteLabel_::OPERATION_MATCH:
                $operation = $this->issues()->deleteLabel_($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\UpdateLabel_::OPERATION_MATCH:
                $operation = $this->issues()->updateLabel_($params['owner'], $params['repo'], $params['name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Label {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListMilestones_::OPERATION_MATCH:
                $operation = $this->issues()->listMilestones_($params['owner'], $params['repo'], $params['state'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE2Af2Ba6A7Deffb56F18Cd68Ca2D4Dd8|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\CreateMilestone_::OPERATION_MATCH:
                $operation = $this->issues()->createMilestone_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Milestone|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\GetMilestone_::OPERATION_MATCH:
                $operation = $this->issues()->getMilestone_($params['owner'], $params['repo'], $params['milestone_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Milestone|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\DeleteMilestone_::OPERATION_MATCH:
                $operation = $this->issues()->deleteMilestone_($params['owner'], $params['repo'], $params['milestone_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\UpdateMilestone_::OPERATION_MATCH:
                $operation = $this->issues()->updateMilestone_($params['owner'], $params['repo'], $params['milestone_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Milestone {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListLabelsForMilestone_::OPERATION_MATCH:
                $operation = $this->issues()->listLabelsForMilestone_($params['owner'], $params['repo'], $params['milestone_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Be59A7A1Ee94D23Bf8E81Fd9Bf53239 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->issues()->listForAuthenticatedUser_($params['filter'], $params['state'], $params['labels'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD3C0A11593838100Ff11Bc6F47Fe722F|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Licenses\GetAllCommonlyUsed_::OPERATION_MATCH:
                $operation = $this->licenses()->getAllCommonlyUsed_($params['featured'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD8C95C094316027Eaa26C6Eaf9500Ad8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Licenses\Get_::OPERATION_MATCH:
                $operation = $this->licenses()->get_($params['license']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\License|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Licenses\GetForRepo_::OPERATION_MATCH:
                $operation = $this->licenses()->getForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\LicenseContent {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Markdown\Render_::OPERATION_MATCH:
                $operation = $this->markdown()->render_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Markdown\RenderRaw_::OPERATION_MATCH:
                $operation = $this->markdown()->renderRaw_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\List_::OPERATION_MATCH:
                $operation = $this->orgs()->list_($params['since'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C16A0Bf31F9803C1B457B513761D3D296 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\Get_::OPERATION_MATCH:
                $operation = $this->orgs()->get_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrganizationFull|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\Update_::OPERATION_MATCH:
                $operation = $this->orgs()->update_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrganizationFull|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C197505B37575Ae3739584A4C9Efe0801|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\ListWebhooks_::OPERATION_MATCH:
                $operation = $this->orgs()->listWebhooks_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB67C6Ee16Ad4A7D622A946776B49230E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\CreateWebhook_::OPERATION_MATCH:
                $operation = $this->orgs()->createWebhook_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\GetWebhook_::OPERATION_MATCH:
                $operation = $this->orgs()->getWebhook_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\DeleteWebhook_::OPERATION_MATCH:
                $operation = $this->orgs()->deleteWebhook_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\UpdateWebhook_::OPERATION_MATCH:
                $operation = $this->orgs()->updateWebhook_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrgHook|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\GetWebhookConfigForOrg_::OPERATION_MATCH:
                $operation = $this->orgs()->getWebhookConfigForOrg_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\UpdateWebhookConfigForOrg_::OPERATION_MATCH:
                $operation = $this->orgs()->updateWebhookConfigForOrg_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\PingWebhook_::OPERATION_MATCH:
                $operation = $this->orgs()->pingWebhook_($params['org'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\ListAppInstallations_::OPERATION_MATCH:
                $operation = $this->orgs()->listAppInstallations_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C7Bee6D1Dc141458A3B4A51C5D6F672A7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\ListMembers_::OPERATION_MATCH:
                $operation = $this->orgs()->listMembers_($params['org'], $params['filter'], $params['role'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\CheckMembershipForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->checkMembershipForUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\RemoveMember_::OPERATION_MATCH:
                $operation = $this->orgs()->removeMember_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\GetMembershipForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->getMembershipForUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\SetMembershipForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->setMembershipForUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\RemoveMembershipForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->removeMembershipForUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\ListOutsideCollaborators_::OPERATION_MATCH:
                $operation = $this->orgs()->listOutsideCollaborators_($params['org'], $params['filter'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\ConvertMemberToOutsideCollaborator_::OPERATION_MATCH:
                $operation = $this->orgs()->convertMemberToOutsideCollaborator_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\RemoveOutsideCollaborator_::OPERATION_MATCH:
                $operation = $this->orgs()->removeOutsideCollaborator_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\ListPublicMembers_::OPERATION_MATCH:
                $operation = $this->orgs()->listPublicMembers_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\CheckPublicMembershipForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->checkPublicMembershipForUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\SetPublicMembershipForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->setPublicMembershipForAuthenticatedUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->removePublicMembershipForAuthenticatedUser_($params['org'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\ListMembershipsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->listMembershipsForAuthenticatedUser_($params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C617261Cc21F6F7Ff1311625A265A01Af|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\GetMembershipForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->getMembershipForAuthenticatedUser_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\UpdateMembershipForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->updateMembershipForAuthenticatedUser_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrgMembership|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\ListForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->orgs()->listForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C16A0Bf31F9803C1B457B513761D3D296|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\ListForUser_::OPERATION_MATCH:
                $operation = $this->orgs()->listForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C16A0Bf31F9803C1B457B513761D3D296 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetGithubActionsPermissionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->getGithubActionsPermissionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ActionsOrganizationPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetGithubActionsPermissionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->setGithubActionsPermissionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->listSelectedRepositoriesEnabledGithubActionsOrganization_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C93449899E100509F50A0F7952B2F2Eb7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->setSelectedRepositoriesEnabledGithubActionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->enableSelectedRepositoryGithubActionsOrganization_($params['org'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->disableSelectedRepositoryGithubActionsOrganization_($params['org'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetAllowedActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->getAllowedActionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SelectedActions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetAllowedActionsOrganization_::OPERATION_MATCH:
                $operation = $this->actions()->setAllowedActionsOrganization_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnerGroupsForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->listSelfHostedRunnerGroupsForOrg_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CEa6F9A65671822A0987E6600E25Efc0B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateSelfHostedRunnerGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->createSelfHostedRunnerGroupForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RunnerGroupsOrg {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetSelfHostedRunnerGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->getSelfHostedRunnerGroupForOrg_($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RunnerGroupsOrg {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg_::OPERATION_MATCH:
                $operation = $this->actions()->deleteSelfHostedRunnerGroupFromOrg_($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->updateSelfHostedRunnerGroupForOrg_($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RunnerGroupsOrg {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg_::OPERATION_MATCH:
                $operation = $this->actions()->listRepoAccessToSelfHostedRunnerGroupInOrg_($params['org'], $params['runner_group_id'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CDdaa6Ec087452677De6846Ef563Fa06D {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg_::OPERATION_MATCH:
                $operation = $this->actions()->setRepoAccessToSelfHostedRunnerGroupInOrg_($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddRepoAccessToSelfHostedRunnerGroupInOrg_::OPERATION_MATCH:
                $operation = $this->actions()->addRepoAccessToSelfHostedRunnerGroupInOrg_($params['org'], $params['runner_group_id'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg_::OPERATION_MATCH:
                $operation = $this->actions()->removeRepoAccessToSelfHostedRunnerGroupInOrg_($params['org'], $params['runner_group_id'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnersInGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->listSelfHostedRunnersInGroupForOrg_($params['org'], $params['runner_group_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5F3B5341Fe53998B5Bf27243A42Db029 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetSelfHostedRunnersInGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->setSelfHostedRunnersInGroupForOrg_($params['org'], $params['runner_group_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddSelfHostedRunnerToGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->addSelfHostedRunnerToGroupForOrg_($params['org'], $params['runner_group_id'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveSelfHostedRunnerFromGroupForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->removeSelfHostedRunnerFromGroupForOrg_($params['org'], $params['runner_group_id'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnersForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->listSelfHostedRunnersForOrg_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB0601E51Fc03Ef9031D3Dad84Cee821B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRunnerApplicationsForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->listRunnerApplicationsForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C948655Af6C42D69A42F49158Df1C3402 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRegistrationTokenForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->createRegistrationTokenForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRemoveTokenForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->createRemoveTokenForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetSelfHostedRunnerForOrg_::OPERATION_MATCH:
                $operation = $this->actions()->getSelfHostedRunnerForOrg_($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Runner {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteSelfHostedRunnerFromOrg_::OPERATION_MATCH:
                $operation = $this->actions()->deleteSelfHostedRunnerFromOrg_($params['org'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListOrgSecrets_::OPERATION_MATCH:
                $operation = $this->actions()->listOrgSecrets_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C6Fd51E546F4Dbe120D78A3534B76Ce0E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetOrgPublicKey_::OPERATION_MATCH:
                $operation = $this->actions()->getOrgPublicKey_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ActionsPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->getOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\OrganizationActionsSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateOrUpdateOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->createOrUpdateOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EmptyObject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->deleteOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelectedReposForOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->listSelectedReposForOrgSecret_($params['org'], $params['secret_name'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C23364A3Cd8807Cb5B7484843C7A3D6B5 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetSelectedReposForOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->setSelectedReposForOrgSecret_($params['org'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddSelectedRepoToOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->addSelectedRepoToOrgSecret_($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveSelectedRepoFromOrgSecret_::OPERATION_MATCH:
                $operation = $this->actions()->removeSelectedRepoFromOrgSecret_($params['org'], $params['secret_name'], $params['repository_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListArtifactsForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->listArtifactsForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C1A91B16Fbf38476A7587Bb22E0507C4B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetArtifact_::OPERATION_MATCH:
                $operation = $this->actions()->getArtifact_($params['owner'], $params['repo'], $params['artifact_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Artifact {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteArtifact_::OPERATION_MATCH:
                $operation = $this->actions()->deleteArtifact_($params['owner'], $params['repo'], $params['artifact_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadArtifact_::OPERATION_MATCH:
                $operation = $this->actions()->downloadArtifact_($params['owner'], $params['repo'], $params['artifact_id'], $params['archive_format']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetJobForWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->getJobForWorkflowRun_($params['owner'], $params['repo'], $params['job_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Job {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadJobLogsForWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->downloadJobLogsForWorkflowRun_($params['owner'], $params['repo'], $params['job_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetGithubActionsPermissionsRepository_::OPERATION_MATCH:
                $operation = $this->actions()->getGithubActionsPermissionsRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ActionsRepositoryPermissions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetGithubActionsPermissionsRepository_::OPERATION_MATCH:
                $operation = $this->actions()->setGithubActionsPermissionsRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetAllowedActionsRepository_::OPERATION_MATCH:
                $operation = $this->actions()->getAllowedActionsRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SelectedActions {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetAllowedActionsRepository_::OPERATION_MATCH:
                $operation = $this->actions()->setAllowedActionsRepository_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnersForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->listSelfHostedRunnersForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB0601E51Fc03Ef9031D3Dad84Cee821B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRunnerApplicationsForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->listRunnerApplicationsForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C948655Af6C42D69A42F49158Df1C3402 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRegistrationTokenForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->createRegistrationTokenForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRemoveTokenForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->createRemoveTokenForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\AuthenticationToken {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetSelfHostedRunnerForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->getSelfHostedRunnerForRepo_($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Runner {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteSelfHostedRunnerFromRepo_::OPERATION_MATCH:
                $operation = $this->actions()->deleteSelfHostedRunnerFromRepo_($params['owner'], $params['repo'], $params['runner_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListWorkflowRunsForRepo_::OPERATION_MATCH:
                $operation = $this->actions()->listWorkflowRunsForRepo_($params['owner'], $params['repo'], $params['actor'], $params['branch'], $params['event'], $params['status'], $params['per_page'], $params['page'], $params['created'], $params['exclude_pull_requests']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C1Ff801D411600B3Ccc9D9C95835A8959 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflowRun_($params['owner'], $params['repo'], $params['run_id'], $params['exclude_pull_requests']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\WorkflowRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->deleteWorkflowRun_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListWorkflowRunArtifacts_::OPERATION_MATCH:
                $operation = $this->actions()->listWorkflowRunArtifacts_($params['owner'], $params['repo'], $params['run_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C1A91B16Fbf38476A7587Bb22E0507C4B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CancelWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->cancelWorkflowRun_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListJobsForWorkflowRun_::OPERATION_MATCH:
                $operation = $this->actions()->listJobsForWorkflowRun_($params['owner'], $params['repo'], $params['run_id'], $params['filter'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C33Ec992D5C5A124A238Bc487Da638017 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadWorkflowRunLogs_::OPERATION_MATCH:
                $operation = $this->actions()->downloadWorkflowRunLogs_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteWorkflowRunLogs_::OPERATION_MATCH:
                $operation = $this->actions()->deleteWorkflowRunLogs_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ReRunWorkflow_::OPERATION_MATCH:
                $operation = $this->actions()->reRunWorkflow_($params['owner'], $params['repo'], $params['run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRepoSecrets_::OPERATION_MATCH:
                $operation = $this->actions()->listRepoSecrets_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C58E2D92A7Aba442Fdb0A439Eb965962E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetRepoPublicKey_::OPERATION_MATCH:
                $operation = $this->actions()->getRepoPublicKey_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ActionsPublicKey {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetRepoSecret_::OPERATION_MATCH:
                $operation = $this->actions()->getRepoSecret_($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ActionsSecret {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateOrUpdateRepoSecret_::OPERATION_MATCH:
                $operation = $this->actions()->createOrUpdateRepoSecret_($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteRepoSecret_::OPERATION_MATCH:
                $operation = $this->actions()->deleteRepoSecret_($params['owner'], $params['repo'], $params['secret_name']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRepoWorkflows_::OPERATION_MATCH:
                $operation = $this->actions()->listRepoWorkflows_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE25F066E8D67A0F40D61Cb64Df1Cebf6 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetWorkflow_::OPERATION_MATCH:
                $operation = $this->actions()->getWorkflow_($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Workflow {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DisableWorkflow_::OPERATION_MATCH:
                $operation = $this->actions()->disableWorkflow_($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateWorkflowDispatch_::OPERATION_MATCH:
                $operation = $this->actions()->createWorkflowDispatch_($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\EnableWorkflow_::OPERATION_MATCH:
                $operation = $this->actions()->enableWorkflow_($params['owner'], $params['repo'], $params['workflow_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListWorkflowRuns_::OPERATION_MATCH:
                $operation = $this->actions()->listWorkflowRuns_($params['owner'], $params['repo'], $params['workflow_id'], $params['actor'], $params['branch'], $params['event'], $params['status'], $params['per_page'], $params['page'], $params['created'], $params['exclude_pull_requests']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C1Ff801D411600B3Ccc9D9C95835A8959 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListForOrg_::OPERATION_MATCH:
                $operation = $this->projects()->listForOrg_($params['org'], $params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C21B137D26D4A6C1E727205Ff2694Ca25|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateForOrg_::OPERATION_MATCH:
                $operation = $this->projects()->createForOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Project|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\GetCard_::OPERATION_MATCH:
                $operation = $this->projects()->getCard_($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\DeleteCard_::OPERATION_MATCH:
                $operation = $this->projects()->deleteCard_($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF694556E3Cc88993A89F1Ed7Afdf4E13|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\UpdateCard_::OPERATION_MATCH:
                $operation = $this->projects()->updateCard_($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\MoveCard_::OPERATION_MATCH:
                $operation = $this->projects()->moveCard_($params['card_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2F32Ad791Ebef4439Dfb273837Ce0D99|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C84C5Bf99Acadc6Ec8B2A32F2014E1E35|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\GetColumn_::OPERATION_MATCH:
                $operation = $this->projects()->getColumn_($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProjectColumn|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\DeleteColumn_::OPERATION_MATCH:
                $operation = $this->projects()->deleteColumn_($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\UpdateColumn_::OPERATION_MATCH:
                $operation = $this->projects()->updateColumn_($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProjectColumn|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListCards_::OPERATION_MATCH:
                $operation = $this->projects()->listCards_($params['column_id'], $params['archived_state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C05869185A1Ae8F764F599573Ffe43267|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateCard_::OPERATION_MATCH:
                $operation = $this->projects()->createCard_($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProjectCard|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C197505B37575Ae3739584A4C9Efe0801|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C84C5Bf99Acadc6Ec8B2A32F2014E1E35 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\MoveColumn_::OPERATION_MATCH:
                $operation = $this->projects()->moveColumn_($params['column_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\Get_::OPERATION_MATCH:
                $operation = $this->projects()->get_($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Project|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\Delete_::OPERATION_MATCH:
                $operation = $this->projects()->delete_($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF694556E3Cc88993A89F1Ed7Afdf4E13|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\Update_::OPERATION_MATCH:
                $operation = $this->projects()->update_($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Project|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF694556E3Cc88993A89F1Ed7Afdf4E13|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListCollaborators_::OPERATION_MATCH:
                $operation = $this->projects()->listCollaborators_($params['project_id'], $params['affiliation'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\AddCollaborator_::OPERATION_MATCH:
                $operation = $this->projects()->addCollaborator_($params['project_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\RemoveCollaborator_::OPERATION_MATCH:
                $operation = $this->projects()->removeCollaborator_($params['project_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\GetPermissionForUser_::OPERATION_MATCH:
                $operation = $this->projects()->getPermissionForUser_($params['project_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProjectCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListColumns_::OPERATION_MATCH:
                $operation = $this->projects()->listColumns_($params['project_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C338B4411A0Be86E1C6C9A568915F6984|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateColumn_::OPERATION_MATCH:
                $operation = $this->projects()->createColumn_($params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProjectColumn|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListForRepo_::OPERATION_MATCH:
                $operation = $this->projects()->listForRepo_($params['owner'], $params['repo'], $params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C21B137D26D4A6C1E727205Ff2694Ca25|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateForRepo_::OPERATION_MATCH:
                $operation = $this->projects()->createForRepo_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Project|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->projects()->createForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Project|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5C91Adca674B8B2139054218168F68Fe {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListForUser_::OPERATION_MATCH:
                $operation = $this->projects()->listForUser_($params['username'], $params['state'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C21B137D26D4A6C1E727205Ff2694Ca25|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListForOrg_::OPERATION_MATCH:
                $operation = $this->repos()->listForOrg_($params['org'], $params['type'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C485Ae05Bd8B66Cc48Dd15Ae5E9B10Fa9 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateInOrg_::OPERATION_MATCH:
                $operation = $this->repos()->createInOrg_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Repository|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\Get_::OPERATION_MATCH:
                $operation = $this->repos()->get_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\Delete_::OPERATION_MATCH:
                $operation = $this->repos()->delete_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\Update_::OPERATION_MATCH:
                $operation = $this->repos()->update_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListBranches_::OPERATION_MATCH:
                $operation = $this->repos()->listBranches_($params['owner'], $params['repo'], $params['protected'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C263Cdb7F5A42Fa1855B6A1Cf10A3A09E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetBranch_::OPERATION_MATCH:
                $operation = $this->repos()->getBranch_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BranchWithProtection|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->getBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BranchProtection|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->updateBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranch|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->deleteBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAdminBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->getAdminBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchAdminEnforced {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\SetAdminBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->setAdminBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchAdminEnforced {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteAdminBranchProtection_::OPERATION_MATCH:
                $operation = $this->repos()->deleteAdminBranchProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetPullRequestReviewProtection_::OPERATION_MATCH:
                $operation = $this->repos()->getPullRequestReviewProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchPullRequestReview {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeletePullRequestReviewProtection_::OPERATION_MATCH:
                $operation = $this->repos()->deletePullRequestReviewProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdatePullRequestReviewProtection_::OPERATION_MATCH:
                $operation = $this->repos()->updatePullRequestReviewProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchPullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCommitSignatureProtection_::OPERATION_MATCH:
                $operation = $this->repos()->getCommitSignatureProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateCommitSignatureProtection_::OPERATION_MATCH:
                $operation = $this->repos()->createCommitSignatureProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteCommitSignatureProtection_::OPERATION_MATCH:
                $operation = $this->repos()->deleteCommitSignatureProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetStatusChecksProtection_::OPERATION_MATCH:
                $operation = $this->repos()->getStatusChecksProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\StatusCheckPolicy|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveStatusCheckProtection_::OPERATION_MATCH:
                $operation = $this->repos()->removeStatusCheckProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateStatusCheckProtection_::OPERATION_MATCH:
                $operation = $this->repos()->updateStatusCheckProtection_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\StatusCheckPolicy|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAllStatusCheckContexts_::OPERATION_MATCH:
                $operation = $this->repos()->getAllStatusCheckContexts_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\SetStatusCheckContexts_::OPERATION_MATCH:
                $operation = $this->repos()->setStatusCheckContexts_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddStatusCheckContexts_::OPERATION_MATCH:
                $operation = $this->repos()->addStatusCheckContexts_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveStatusCheckContexts_::OPERATION_MATCH:
                $operation = $this->repos()->removeStatusCheckContexts_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD98264Cbbbcfb6B301Bd754C28B7483E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->getAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BranchRestrictionPolicy|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->deleteAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAppsWithAccessToProtectedBranch_::OPERATION_MATCH:
                $operation = $this->repos()->getAppsWithAccessToProtectedBranch_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB58C0Be877496548Df797B5B11C3816E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\SetAppAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->setAppAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB58C0Be877496548Df797B5B11C3816E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddAppAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->addAppAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB58C0Be877496548Df797B5B11C3816E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveAppAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->removeAppAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB58C0Be877496548Df797B5B11C3816E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetTeamsWithAccessToProtectedBranch_::OPERATION_MATCH:
                $operation = $this->repos()->getTeamsWithAccessToProtectedBranch_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\SetTeamAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->setTeamAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddTeamAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->addTeamAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveTeamAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->removeTeamAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetUsersWithAccessToProtectedBranch_::OPERATION_MATCH:
                $operation = $this->repos()->getUsersWithAccessToProtectedBranch_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\SetUserAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->setUserAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddUserAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->addUserAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveUserAccessRestrictions_::OPERATION_MATCH:
                $operation = $this->repos()->removeUserAccessRestrictions_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RenameBranch_::OPERATION_MATCH:
                $operation = $this->repos()->renameBranch_($params['owner'], $params['repo'], $params['branch']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BranchWithProtection|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCollaborators_::OPERATION_MATCH:
                $operation = $this->repos()->listCollaborators_($params['owner'], $params['repo'], $params['affiliation'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF0Be24F8597Ad4528456Ed5061738A45|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CheckCollaborator_::OPERATION_MATCH:
                $operation = $this->repos()->checkCollaborator_($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddCollaborator_::OPERATION_MATCH:
                $operation = $this->repos()->addCollaborator_($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RepositoryInvitation|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveCollaborator_::OPERATION_MATCH:
                $operation = $this->repos()->removeCollaborator_($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCollaboratorPermissionLevel_::OPERATION_MATCH:
                $operation = $this->repos()->getCollaboratorPermissionLevel_($params['owner'], $params['repo'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RepositoryCollaboratorPermission|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCommitCommentsForRepo_::OPERATION_MATCH:
                $operation = $this->repos()->listCommitCommentsForRepo_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C8D3D4Ebb8582De080E9051A8Acffbed8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCommitComment_::OPERATION_MATCH:
                $operation = $this->repos()->getCommitComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteCommitComment_::OPERATION_MATCH:
                $operation = $this->repos()->deleteCommitComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateCommitComment_::OPERATION_MATCH:
                $operation = $this->repos()->updateCommitComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCommits_::OPERATION_MATCH:
                $operation = $this->repos()->listCommits_($params['owner'], $params['repo'], $params['sha'], $params['path'], $params['author'], $params['since'], $params['until'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2Fce5Fb56D535A059D420B509Bed9Af8|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListBranchesForHeadCommit_::OPERATION_MATCH:
                $operation = $this->repos()->listBranchesForHeadCommit_($params['owner'], $params['repo'], $params['commit_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C44F966765547C3442B15293D242E13E2|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCommentsForCommit_::OPERATION_MATCH:
                $operation = $this->repos()->listCommentsForCommit_($params['owner'], $params['repo'], $params['commit_sha'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C8D3D4Ebb8582De080E9051A8Acffbed8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateCommitComment_::OPERATION_MATCH:
                $operation = $this->repos()->createCommitComment_($params['owner'], $params['repo'], $params['commit_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CommitComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListPullRequestsAssociatedWithCommit_::OPERATION_MATCH:
                $operation = $this->repos()->listPullRequestsAssociatedWithCommit_($params['owner'], $params['repo'], $params['commit_sha'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C8508F6Ae7E9Fb82136B64B1341E8F58B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCommit_::OPERATION_MATCH:
                $operation = $this->repos()->getCommit_($params['owner'], $params['repo'], $params['page'], $params['per_page'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCombinedStatusForRef_::OPERATION_MATCH:
                $operation = $this->repos()->getCombinedStatusForRef_($params['owner'], $params['repo'], $params['ref'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CombinedCommitStatus|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCommitStatusesForRef_::OPERATION_MATCH:
                $operation = $this->repos()->listCommitStatusesForRef_($params['owner'], $params['repo'], $params['ref'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C1F1E0Aa71E630F87D06D6088191F1113|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CompareCommits_::OPERATION_MATCH:
                $operation = $this->repos()->compareCommits_($params['owner'], $params['repo'], $params['basehead']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CommitComparison|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetContent_::OPERATION_MATCH:
                $operation = $this->repos()->getContent_($params['owner'], $params['repo'], $params['path'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ContentTree|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4C3B8B55E91675Ede834Ec846030F434|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateOrUpdateFileContents_::OPERATION_MATCH:
                $operation = $this->repos()->createOrUpdateFileContents_($params['owner'], $params['repo'], $params['path']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\FileCommit|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteFile_::OPERATION_MATCH:
                $operation = $this->repos()->deleteFile_($params['owner'], $params['repo'], $params['path']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\FileCommit|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListContributors_::OPERATION_MATCH:
                $operation = $this->repos()->listContributors_($params['owner'], $params['repo'], $params['anon'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CA7Ca0Fcacca5Fd9Bfaa0D26Cc7352Dca|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListDeployments_::OPERATION_MATCH:
                $operation = $this->repos()->listDeployments_($params['owner'], $params['repo'], $params['sha'], $params['ref'], $params['task'], $params['environment'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C845B0A725D585B0Eb70Ea1E123E677Ba {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateDeployment_::OPERATION_MATCH:
                $operation = $this->repos()->createDeployment_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Deployment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C7B1F87F42Ca7F4E6F27Ed1Bcbfcee301|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetDeployment_::OPERATION_MATCH:
                $operation = $this->repos()->getDeployment_($params['owner'], $params['repo'], $params['deployment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Deployment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteDeployment_::OPERATION_MATCH:
                $operation = $this->repos()->deleteDeployment_($params['owner'], $params['repo'], $params['deployment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListDeploymentStatuses_::OPERATION_MATCH:
                $operation = $this->repos()->listDeploymentStatuses_($params['owner'], $params['repo'], $params['deployment_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB4651B937071Bfb661227726852E33F2|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateDeploymentStatus_::OPERATION_MATCH:
                $operation = $this->repos()->createDeploymentStatus_($params['owner'], $params['repo'], $params['deployment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\DeploymentStatus|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetDeploymentStatus_::OPERATION_MATCH:
                $operation = $this->repos()->getDeploymentStatus_($params['owner'], $params['repo'], $params['deployment_id'], $params['status_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\DeploymentStatus|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateDispatchEvent_::OPERATION_MATCH:
                $operation = $this->repos()->createDispatchEvent_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListForks_::OPERATION_MATCH:
                $operation = $this->repos()->listForks_($params['owner'], $params['repo'], $params['sort'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C485Ae05Bd8B66Cc48Dd15Ae5E9B10Fa9|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateFork_::OPERATION_MATCH:
                $operation = $this->repos()->createFork_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\FullRepository|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListWebhooks_::OPERATION_MATCH:
                $operation = $this->repos()->listWebhooks_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C93398D574890C20220765464A6827F0C|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->createWebhook_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Hook|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->getWebhook_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Hook|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->deleteWebhook_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->updateWebhook_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Hook|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetWebhookConfigForRepo_::OPERATION_MATCH:
                $operation = $this->repos()->getWebhookConfigForRepo_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateWebhookConfigForRepo_::OPERATION_MATCH:
                $operation = $this->repos()->updateWebhookConfigForRepo_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\WebhookConfig {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\PingWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->pingWebhook_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\TestPushWebhook_::OPERATION_MATCH:
                $operation = $this->repos()->testPushWebhook_($params['owner'], $params['repo'], $params['hook_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListInvitations_::OPERATION_MATCH:
                $operation = $this->repos()->listInvitations_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5F31Fb82C3925014Cec980C132E3D578 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteInvitation_::OPERATION_MATCH:
                $operation = $this->repos()->deleteInvitation_($params['owner'], $params['repo'], $params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateInvitation_::OPERATION_MATCH:
                $operation = $this->repos()->updateInvitation_($params['owner'], $params['repo'], $params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RepositoryInvitation {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListDeployKeys_::OPERATION_MATCH:
                $operation = $this->repos()->listDeployKeys_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC93D724F8E2Cec316C29Db0959D273Ce {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateDeployKey_::OPERATION_MATCH:
                $operation = $this->repos()->createDeployKey_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\DeployKey|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetDeployKey_::OPERATION_MATCH:
                $operation = $this->repos()->getDeployKey_($params['owner'], $params['repo'], $params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\DeployKey|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteDeployKey_::OPERATION_MATCH:
                $operation = $this->repos()->deleteDeployKey_($params['owner'], $params['repo'], $params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListLanguages_::OPERATION_MATCH:
                $operation = $this->repos()->listLanguages_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Language {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\Merge_::OPERATION_MATCH:
                $operation = $this->repos()->merge_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetPages_::OPERATION_MATCH:
                $operation = $this->repos()->getPages_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Page|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateInformationAboutPagesSite_::OPERATION_MATCH:
                $operation = $this->repos()->updateInformationAboutPagesSite_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreatePagesSite_::OPERATION_MATCH:
                $operation = $this->repos()->createPagesSite_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Page|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeletePagesSite_::OPERATION_MATCH:
                $operation = $this->repos()->deletePagesSite_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListPagesBuilds_::OPERATION_MATCH:
                $operation = $this->repos()->listPagesBuilds_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C87Cfd323615D443Cf6C479Ef42785772 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RequestPagesBuild_::OPERATION_MATCH:
                $operation = $this->repos()->requestPagesBuild_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PageBuildStatus {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetLatestPagesBuild_::OPERATION_MATCH:
                $operation = $this->repos()->getLatestPagesBuild_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PageBuild {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetPagesBuild_::OPERATION_MATCH:
                $operation = $this->repos()->getPagesBuild_($params['owner'], $params['repo'], $params['build_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PageBuild {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetReadme_::OPERATION_MATCH:
                $operation = $this->repos()->getReadme_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ContentFile|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetReadmeInDirectory_::OPERATION_MATCH:
                $operation = $this->repos()->getReadmeInDirectory_($params['owner'], $params['repo'], $params['dir'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ContentFile|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListReleases_::OPERATION_MATCH:
                $operation = $this->repos()->listReleases_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3Ed85De40527A2Abb9F07311C2E6Cf5E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateRelease_::OPERATION_MATCH:
                $operation = $this->repos()->createRelease_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Release|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetReleaseAsset_::OPERATION_MATCH:
                $operation = $this->repos()->getReleaseAsset_($params['owner'], $params['repo'], $params['asset_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReleaseAsset|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteReleaseAsset_::OPERATION_MATCH:
                $operation = $this->repos()->deleteReleaseAsset_($params['owner'], $params['repo'], $params['asset_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateReleaseAsset_::OPERATION_MATCH:
                $operation = $this->repos()->updateReleaseAsset_($params['owner'], $params['repo'], $params['asset_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReleaseAsset {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetLatestRelease_::OPERATION_MATCH:
                $operation = $this->repos()->getLatestRelease_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Release {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetReleaseByTag_::OPERATION_MATCH:
                $operation = $this->repos()->getReleaseByTag_($params['owner'], $params['repo'], $params['tag']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Release|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetRelease_::OPERATION_MATCH:
                $operation = $this->repos()->getRelease_($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Release|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteRelease_::OPERATION_MATCH:
                $operation = $this->repos()->deleteRelease_($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateRelease_::OPERATION_MATCH:
                $operation = $this->repos()->updateRelease_($params['owner'], $params['repo'], $params['release_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Release {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListReleaseAssets_::OPERATION_MATCH:
                $operation = $this->repos()->listReleaseAssets_($params['owner'], $params['repo'], $params['release_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE87A6A239Dc140547Ff9387A1Cee8B2D {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UploadReleaseAsset_::OPERATION_MATCH:
                $operation = $this->repos()->uploadReleaseAsset_($params['owner'], $params['repo'], $params['release_id'], $params['name'], $params['label']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReleaseAsset {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCodeFrequencyStats_::OPERATION_MATCH:
                $operation = $this->repos()->getCodeFrequencyStats_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C9Bf7717E69D86Ca1B138987Fdb5033B6|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCommitActivityStats_::OPERATION_MATCH:
                $operation = $this->repos()->getCommitActivityStats_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C06431446E4E9E28A63Fd6A22436F7D82|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetContributorsStats_::OPERATION_MATCH:
                $operation = $this->repos()->getContributorsStats_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C1B686Ae216Eb18B911E06049800E96B8|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetParticipationStats_::OPERATION_MATCH:
                $operation = $this->repos()->getParticipationStats_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ParticipationStats|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetPunchCardStats_::OPERATION_MATCH:
                $operation = $this->repos()->getPunchCardStats_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C9Bf7717E69D86Ca1B138987Fdb5033B6 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateCommitStatus_::OPERATION_MATCH:
                $operation = $this->repos()->createCommitStatus_($params['owner'], $params['repo'], $params['sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Status {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListTags_::OPERATION_MATCH:
                $operation = $this->repos()->listTags_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CEc94E54447F15Bea9F91Abe39Ef7B5F6 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DownloadTarballArchive_::OPERATION_MATCH:
                $operation = $this->repos()->downloadTarballArchive_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListTeams_::OPERATION_MATCH:
                $operation = $this->repos()->listTeams_($params['owner'], $params['repo'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAllTopics_::OPERATION_MATCH:
                $operation = $this->repos()->getAllTopics_($params['owner'], $params['repo'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Topic|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5C91Adca674B8B2139054218168F68Fe {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ReplaceAllTopics_::OPERATION_MATCH:
                $operation = $this->repos()->replaceAllTopics_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Topic|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5C91Adca674B8B2139054218168F68Fe {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\Transfer_::OPERATION_MATCH:
                $operation = $this->repos()->transfer_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MinimalRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DownloadZipballArchive_::OPERATION_MATCH:
                $operation = $this->repos()->downloadZipballArchive_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateUsingTemplate_::OPERATION_MATCH:
                $operation = $this->repos()->createUsingTemplate_($params['template_owner'], $params['template_repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Repository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListPublic_::OPERATION_MATCH:
                $operation = $this->repos()->listPublic_($params['since'], $params['visibility']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C485Ae05Bd8B66Cc48Dd15Ae5E9B10Fa9|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->repos()->listForAuthenticatedUser_($params['visibility'], $params['affiliation'], $params['type'], $params['sort'], $params['direction'], $params['per_page'], $params['page'], $params['since'], $params['before']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C9C42C689A0054B75A8Dec6Bcd543Dc1C|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->repos()->createForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Repository|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ScimError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListInvitationsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->repos()->listInvitationsForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5F31Fb82C3925014Cec980C132E3D578|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeclineInvitationForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->repos()->declineInvitationForAuthenticatedUser_($params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AcceptInvitationForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->repos()->acceptInvitationForAuthenticatedUser_($params['invitation_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListForUser_::OPERATION_MATCH:
                $operation = $this->repos()->listForUser_($params['username'], $params['type'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C485Ae05Bd8B66Cc48Dd15Ae5E9B10Fa9 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\List_::OPERATION_MATCH:
                $operation = $this->teams()->list_($params['org'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\Create_::OPERATION_MATCH:
                $operation = $this->teams()->create_($params['org']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetByName_::OPERATION_MATCH:
                $operation = $this->teams()->getByName_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->deleteInOrg_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->updateInOrg_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamFull {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListDiscussionsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionsInOrg_($params['org'], $params['team_slug'], $params['direction'], $params['per_page'], $params['page'], $params['pinned']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C0307B81625Ab65Df14180Ca2Bb515F88 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CreateDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionInOrg_($params['org'], $params['team_slug']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionInOrg_($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionInOrg_($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionInOrg_($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListDiscussionCommentsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionCommentsInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C43Ec5D53Fa9C0088B332Ac40F204Bd98 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CreateDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListMembersInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listMembersInOrg_($params['org'], $params['team_slug'], $params['role'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetMembershipForUserInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->getMembershipForUserInOrg_($params['org'], $params['team_slug'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamMembership {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateMembershipForUserInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateMembershipForUserInOrg_($params['org'], $params['team_slug'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamMembership {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveMembershipForUserInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->removeMembershipForUserInOrg_($params['org'], $params['team_slug'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListProjectsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listProjectsInOrg_($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C909932Bc1B0Dbc19636Da1F9F96A30Fe {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CheckPermissionsForProjectInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForProjectInOrg_($params['org'], $params['team_slug'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamProject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateProjectPermissionsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateProjectPermissionsInOrg_($params['org'], $params['team_slug'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveProjectInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->removeProjectInOrg_($params['org'], $params['team_slug'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListReposInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listReposInOrg_($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C485Ae05Bd8B66Cc48Dd15Ae5E9B10Fa9 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CheckPermissionsForRepoInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForRepoInOrg_($params['org'], $params['team_slug'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateRepoPermissionsInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateRepoPermissionsInOrg_($params['org'], $params['team_slug'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveRepoInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->removeRepoInOrg_($params['org'], $params['team_slug'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListChildInOrg_::OPERATION_MATCH:
                $operation = $this->teams()->listChildInOrg_($params['org'], $params['team_slug'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->getLegacy_($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->deleteLegacy_($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->updateLegacy_($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamFull|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListDiscussionsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionsLegacy_($params['team_id'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C0307B81625Ab65Df14180Ca2Bb515F88 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CreateDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionLegacy_($params['team_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionLegacy_($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionLegacy_($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionLegacy_($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamDiscussion {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListDiscussionCommentsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listDiscussionCommentsLegacy_($params['team_id'], $params['discussion_number'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C43Ec5D53Fa9C0088B332Ac40F204Bd98 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CreateDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->createDiscussionCommentLegacy_($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->getDiscussionCommentLegacy_($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->deleteDiscussionCommentLegacy_($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->updateDiscussionCommentLegacy_($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamDiscussionComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListMembersLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listMembersLegacy_($params['team_id'], $params['role'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetMemberLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->getMemberLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddMemberLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->addMemberLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveMemberLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->removeMemberLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetMembershipForUserLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->getMembershipForUserLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamMembership|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateMembershipForUserLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateMembershipForUserLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamMembership|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveMembershipForUserLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->removeMembershipForUserLegacy_($params['team_id'], $params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListProjectsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listProjectsLegacy_($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C909932Bc1B0Dbc19636Da1F9F96A30Fe|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CheckPermissionsForProjectLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForProjectLegacy_($params['team_id'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamProject {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateProjectPermissionsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateProjectPermissionsLegacy_($params['team_id'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveProjectLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->removeProjectLegacy_($params['team_id'], $params['project_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListReposLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listReposLegacy_($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C485Ae05Bd8B66Cc48Dd15Ae5E9B10Fa9|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CheckPermissionsForRepoLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->checkPermissionsForRepoLegacy_($params['team_id'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamRepository {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateRepoPermissionsLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->addOrUpdateRepoPermissionsLegacy_($params['team_id'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveRepoLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->removeRepoLegacy_($params['team_id'], $params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListChildLegacy_::OPERATION_MATCH:
                $operation = $this->teams()->listChildLegacy_($params['team_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->teams()->listForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C7B27057C39385Db15D1Ce7418415Efdc|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->reactions()->listForTeamDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3F4Fe37391Cca10E2Ea0B2B850605Fd2 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionCommentInOrg_::OPERATION_MATCH:
                $operation = $this->reactions()->createForTeamDiscussionCommentInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForTeamDiscussionComment_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForTeamDiscussionComment_($params['org'], $params['team_slug'], $params['discussion_number'], $params['comment_number'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->reactions()->listForTeamDiscussionInOrg_($params['org'], $params['team_slug'], $params['discussion_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3F4Fe37391Cca10E2Ea0B2B850605Fd2 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionInOrg_::OPERATION_MATCH:
                $operation = $this->reactions()->createForTeamDiscussionInOrg_($params['org'], $params['team_slug'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForTeamDiscussion_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForTeamDiscussion_($params['org'], $params['team_slug'], $params['discussion_number'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteLegacy_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteLegacy_($params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForCommitComment_::OPERATION_MATCH:
                $operation = $this->reactions()->listForCommitComment_($params['owner'], $params['repo'], $params['comment_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3F4Fe37391Cca10E2Ea0B2B850605Fd2|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForCommitComment_::OPERATION_MATCH:
                $operation = $this->reactions()->createForCommitComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5C91Adca674B8B2139054218168F68Fe {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForCommitComment_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForCommitComment_($params['owner'], $params['repo'], $params['comment_id'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForIssueComment_::OPERATION_MATCH:
                $operation = $this->reactions()->listForIssueComment_($params['owner'], $params['repo'], $params['comment_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3F4Fe37391Cca10E2Ea0B2B850605Fd2|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForIssueComment_::OPERATION_MATCH:
                $operation = $this->reactions()->createForIssueComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForIssueComment_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForIssueComment_($params['owner'], $params['repo'], $params['comment_id'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForIssue_::OPERATION_MATCH:
                $operation = $this->reactions()->listForIssue_($params['owner'], $params['repo'], $params['issue_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3F4Fe37391Cca10E2Ea0B2B850605Fd2|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForIssue_::OPERATION_MATCH:
                $operation = $this->reactions()->createForIssue_($params['owner'], $params['repo'], $params['issue_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForIssue_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForIssue_($params['owner'], $params['repo'], $params['issue_number'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForPullRequestReviewComment_::OPERATION_MATCH:
                $operation = $this->reactions()->listForPullRequestReviewComment_($params['owner'], $params['repo'], $params['comment_id'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3F4Fe37391Cca10E2Ea0B2B850605Fd2|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForPullRequestReviewComment_::OPERATION_MATCH:
                $operation = $this->reactions()->createForPullRequestReviewComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Reaction|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForPullRequestComment_::OPERATION_MATCH:
                $operation = $this->reactions()->deleteForPullRequestComment_($params['owner'], $params['repo'], $params['comment_id'], $params['reaction_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->reactions()->listForTeamDiscussionCommentLegacy_($params['team_id'], $params['discussion_number'], $params['comment_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3F4Fe37391Cca10E2Ea0B2B850605Fd2 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionCommentLegacy_::OPERATION_MATCH:
                $operation = $this->reactions()->createForTeamDiscussionCommentLegacy_($params['team_id'], $params['discussion_number'], $params['comment_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->reactions()->listForTeamDiscussionLegacy_($params['team_id'], $params['discussion_number'], $params['content'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3F4Fe37391Cca10E2Ea0B2B850605Fd2 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionLegacy_::OPERATION_MATCH:
                $operation = $this->reactions()->createForTeamDiscussionLegacy_($params['team_id'], $params['discussion_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Reaction {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\RateLimit\Get_::OPERATION_MATCH:
                $operation = $this->rateLimit()->get_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RateLimitOverview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks\Create_::OPERATION_MATCH:
                $operation = $this->checks()->create_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CheckRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks\Get_::OPERATION_MATCH:
                $operation = $this->checks()->get_($params['owner'], $params['repo'], $params['check_run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CheckRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks\Update_::OPERATION_MATCH:
                $operation = $this->checks()->update_($params['owner'], $params['repo'], $params['check_run_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CheckRun {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks\ListAnnotations_::OPERATION_MATCH:
                $operation = $this->checks()->listAnnotations_($params['owner'], $params['repo'], $params['check_run_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C33D2984B495081F1F782F0Bdbed8A0E5 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks\CreateSuite_::OPERATION_MATCH:
                $operation = $this->checks()->createSuite_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CheckSuite {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks\SetSuitesPreferences_::OPERATION_MATCH:
                $operation = $this->checks()->setSuitesPreferences_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CheckSuitePreference {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks\GetSuite_::OPERATION_MATCH:
                $operation = $this->checks()->getSuite_($params['owner'], $params['repo'], $params['check_suite_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CheckSuite {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks\ListForSuite_::OPERATION_MATCH:
                $operation = $this->checks()->listForSuite_($params['owner'], $params['repo'], $params['check_suite_id'], $params['check_name'], $params['status'], $params['filter'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC909573C594C3Dc4B79Ed90092F93B7B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks\RerequestSuite_::OPERATION_MATCH:
                $operation = $this->checks()->rerequestSuite_($params['owner'], $params['repo'], $params['check_suite_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE1799B925032A0F88Bb3139534B34Fe7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks\ListForRef_::OPERATION_MATCH:
                $operation = $this->checks()->listForRef_($params['owner'], $params['repo'], $params['ref'], $params['check_name'], $params['status'], $params['filter'], $params['per_page'], $params['page'], $params['app_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC909573C594C3Dc4B79Ed90092F93B7B {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks\ListSuitesForRef_::OPERATION_MATCH:
                $operation = $this->checks()->listSuitesForRef_($params['owner'], $params['repo'], $params['ref'], $params['app_id'], $params['check_name'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CDffd072C914Dc2B1D6Cc6D2A68487943 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\ListAlertsForRepo_::OPERATION_MATCH:
                $operation = $this->codeScanning()->listAlertsForRepo_($params['owner'], $params['repo'], $params['tool_name'], $params['tool_guid'], $params['page'], $params['per_page'], $params['ref'], $params['state']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD617Ac0Fc5D00Cd18806Bc4A09Eb5E80|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetAlert_::OPERATION_MATCH:
                $operation = $this->codeScanning()->getAlert_($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAlert|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\UpdateAlert_::OPERATION_MATCH:
                $operation = $this->codeScanning()->updateAlert_($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAlert|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\ListAlertInstances_::OPERATION_MATCH:
                $operation = $this->codeScanning()->listAlertInstances_($params['owner'], $params['repo'], $params['alert_number'], $params['page'], $params['per_page'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC78B9C183723A3Bb5Ac53690424C6377|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\ListRecentAnalyses_::OPERATION_MATCH:
                $operation = $this->codeScanning()->listRecentAnalyses_($params['owner'], $params['repo'], $params['tool_name'], $params['tool_guid'], $params['page'], $params['per_page'], $params['ref'], $params['sarif_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C194F0B3Bd602Ecab93A3De60D872E768|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetAnalysis_::OPERATION_MATCH:
                $operation = $this->codeScanning()->getAnalysis_($params['owner'], $params['repo'], $params['analysis_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAnalysis|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2F9C313De3F7Bfd4586Bcc096B11A634|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\DeleteAnalysis_::OPERATION_MATCH:
                $operation = $this->codeScanning()->deleteAnalysis_($params['owner'], $params['repo'], $params['analysis_id'], $params['confirm_delete']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAnalysisDeletion|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\UploadSarif_::OPERATION_MATCH:
                $operation = $this->codeScanning()->uploadSarif_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningSarifsReceipt|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetSarif_::OPERATION_MATCH:
                $operation = $this->codeScanning()->getSarif_($params['owner'], $params['repo'], $params['sarif_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningSarifsStatus|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\CreateBlob_::OPERATION_MATCH:
                $operation = $this->git()->createBlob_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ShortBlob|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\GetBlob_::OPERATION_MATCH:
                $operation = $this->git()->getBlob_($params['owner'], $params['repo'], $params['file_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Blob|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\CreateCommit_::OPERATION_MATCH:
                $operation = $this->git()->createCommit_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\GetCommit_::OPERATION_MATCH:
                $operation = $this->git()->getCommit_($params['owner'], $params['repo'], $params['commit_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\ListMatchingRefs_::OPERATION_MATCH:
                $operation = $this->git()->listMatchingRefs_($params['owner'], $params['repo'], $params['ref'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C313800Aa2E76Bd5B3C9753E9E9Ae9Ee3 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\GetRef_::OPERATION_MATCH:
                $operation = $this->git()->getRef_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\CreateRef_::OPERATION_MATCH:
                $operation = $this->git()->createRef_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\DeleteRef_::OPERATION_MATCH:
                $operation = $this->git()->deleteRef_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\UpdateRef_::OPERATION_MATCH:
                $operation = $this->git()->updateRef_($params['owner'], $params['repo'], $params['ref']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitRef|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\CreateTag_::OPERATION_MATCH:
                $operation = $this->git()->createTag_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitTag|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\GetTag_::OPERATION_MATCH:
                $operation = $this->git()->getTag_($params['owner'], $params['repo'], $params['tag_sha']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitTag|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\CreateTree_::OPERATION_MATCH:
                $operation = $this->git()->createTree_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitTree|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\GetTree_::OPERATION_MATCH:
                $operation = $this->git()->getTree_($params['owner'], $params['repo'], $params['tree_sha'], $params['recursive']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitTree|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\List_::OPERATION_MATCH:
                $operation = $this->pulls()->list_($params['owner'], $params['repo'], $params['state'], $params['head'], $params['base'], $params['sort'], $params['direction'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C8508F6Ae7E9Fb82136B64B1341E8F58B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Create_::OPERATION_MATCH:
                $operation = $this->pulls()->create_($params['owner'], $params['repo']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviewCommentsForRepo_::OPERATION_MATCH:
                $operation = $this->pulls()->listReviewCommentsForRepo_($params['owner'], $params['repo'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C9565403D0Df74C88267D0Dec13A2C190 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\GetReviewComment_::OPERATION_MATCH:
                $operation = $this->pulls()->getReviewComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\DeleteReviewComment_::OPERATION_MATCH:
                $operation = $this->pulls()->deleteReviewComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\UpdateReviewComment_::OPERATION_MATCH:
                $operation = $this->pulls()->updateReviewComment_($params['owner'], $params['repo'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReviewComment {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Get_::OPERATION_MATCH:
                $operation = $this->pulls()->get_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Update_::OPERATION_MATCH:
                $operation = $this->pulls()->update_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequest|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviewComments_::OPERATION_MATCH:
                $operation = $this->pulls()->listReviewComments_($params['owner'], $params['repo'], $params['pull_number'], $params['sort'], $params['direction'], $params['since'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C9565403D0Df74C88267D0Dec13A2C190 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReviewComment_::OPERATION_MATCH:
                $operation = $this->pulls()->createReviewComment_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReplyForReviewComment_::OPERATION_MATCH:
                $operation = $this->pulls()->createReplyForReviewComment_($params['owner'], $params['repo'], $params['pull_number'], $params['comment_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReviewComment|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListCommits_::OPERATION_MATCH:
                $operation = $this->pulls()->listCommits_($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2Fce5Fb56D535A059D420B509Bed9Af8 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListFiles_::OPERATION_MATCH:
                $operation = $this->pulls()->listFiles_($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CBd10796Debc7920F91B5617Afd47F727|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CheckIfMerged_::OPERATION_MATCH:
                $operation = $this->pulls()->checkIfMerged_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Merge_::OPERATION_MATCH:
                $operation = $this->pulls()->merge_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestMergeResult|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C378515F7728150Fe48B2Fa76970A57B1|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListRequestedReviewers_::OPERATION_MATCH:
                $operation = $this->pulls()->listRequestedReviewers_($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReviewRequest {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\RequestReviewers_::OPERATION_MATCH:
                $operation = $this->pulls()->requestReviewers_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestSimple|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\RemoveRequestedReviewers_::OPERATION_MATCH:
                $operation = $this->pulls()->removeRequestedReviewers_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestSimple|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviews_::OPERATION_MATCH:
                $operation = $this->pulls()->listReviews_($params['owner'], $params['repo'], $params['pull_number'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CA1672Bc52D881E5E118Aedd018082Bd7 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReview_::OPERATION_MATCH:
                $operation = $this->pulls()->createReview_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\GetReview_::OPERATION_MATCH:
                $operation = $this->pulls()->getReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\UpdateReview_::OPERATION_MATCH:
                $operation = $this->pulls()->updateReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\DeletePendingReview_::OPERATION_MATCH:
                $operation = $this->pulls()->deletePendingReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListCommentsForReview_::OPERATION_MATCH:
                $operation = $this->pulls()->listCommentsForReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C7E23Ff976Bcd2D81Ad2A279D076Fb67F|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\DismissReview_::OPERATION_MATCH:
                $operation = $this->pulls()->dismissReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\SubmitReview_::OPERATION_MATCH:
                $operation = $this->pulls()->submitReview_($params['owner'], $params['repo'], $params['pull_number'], $params['review_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReview|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationErrorSimple {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\UpdateBranch_::OPERATION_MATCH:
                $operation = $this->pulls()->updateBranch_($params['owner'], $params['repo'], $params['pull_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CA5445A08E16D224F94859Ebaf785C18A|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\ListAlertsForRepo_::OPERATION_MATCH:
                $operation = $this->secretScanning()->listAlertsForRepo_($params['owner'], $params['repo'], $params['state'], $params['secret_type'], $params['resolution'], $params['page'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C85292Fc9E41C40C0D074E7211C2D2Ff9|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\GetAlert_::OPERATION_MATCH:
                $operation = $this->secretScanning()->getAlert_($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SecretScanningAlert|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\UpdateAlert_::OPERATION_MATCH:
                $operation = $this->secretScanning()->updateAlert_($params['owner'], $params['repo'], $params['alert_number']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SecretScanningAlert|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search\Code_::OPERATION_MATCH:
                $operation = $this->search()->code_($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C320890Ae93274Fed008A425E66Ea7C9B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search\Commits_::OPERATION_MATCH:
                $operation = $this->search()->commits_($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4Afa3Cfaa7Deb82A5Bba90222E0475Bc {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search\IssuesAndPullRequests_::OPERATION_MATCH:
                $operation = $this->search()->issuesAndPullRequests_($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C53E0D8Ff9344Bbdf0F27Aa7903572859|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search\Labels_::OPERATION_MATCH:
                $operation = $this->search()->labels_($params['repository_id'], $params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3D0B1A33D0E21B9449553352Ee4C6C9D|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search\Repos_::OPERATION_MATCH:
                $operation = $this->search()->repos_($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5Ff7B0517D3Daa69359Aac91Ef639Eec|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search\Topics_::OPERATION_MATCH:
                $operation = $this->search()->topics_($params['q'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C050Dfd1E0C4A60Cde55137Ec4864C709|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5C91Adca674B8B2139054218168F68Fe {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search\Users_::OPERATION_MATCH:
                $operation = $this->search()->users_($params['q'], $params['sort'], $params['order'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC9971B26A226492E08644Fd99C1917A6|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CC04A13C6627Df95Bf0Cb989A4326F2F0|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetAuthenticated_::OPERATION_MATCH:
                $operation = $this->users()->getAuthenticated_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CFa9375D5B4Dfa8F391595615Bd0Addf4|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\UpdateAuthenticated_::OPERATION_MATCH:
                $operation = $this->users()->updateAuthenticated_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PrivateUser|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListEmailsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listEmailsForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD51E01Cc5874C6066A75A0Fc85B55D9B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\AddEmailForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->addEmailForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD51E01Cc5874C6066A75A0Fc85B55D9B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\DeleteEmailForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->deleteEmailForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListFollowersForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listFollowersForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListFollowedByAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listFollowedByAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\CheckPersonIsFollowedByAuthenticated_::OPERATION_MATCH:
                $operation = $this->users()->checkPersonIsFollowedByAuthenticated_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\Follow_::OPERATION_MATCH:
                $operation = $this->users()->follow_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\Unfollow_::OPERATION_MATCH:
                $operation = $this->users()->unfollow_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListGpgKeysForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listGpgKeysForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4Be7352D2188Dd21500E563C327Cd0D4|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\CreateGpgKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->createGpgKeyForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GpgKey|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetGpgKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->getGpgKeyForAuthenticatedUser_($params['gpg_key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GpgKey|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\DeleteGpgKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->deleteGpgKeyForAuthenticatedUser_($params['gpg_key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListPublicSshKeysForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listPublicSshKeysForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C8569D1C942B35A48Ce04Dca29B28Fb71|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\CreatePublicSshKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->createPublicSshKeyForAuthenticatedUser_();
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Key|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetPublicSshKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->getPublicSshKeyForAuthenticatedUser_($params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Key|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\DeletePublicSshKeyForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->deletePublicSshKeyForAuthenticatedUser_($params['key_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListPublicEmailsForAuthenticatedUser_::OPERATION_MATCH:
                $operation = $this->users()->listPublicEmailsForAuthenticatedUser_($params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD51E01Cc5874C6066A75A0Fc85B55D9B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\List_::OPERATION_MATCH:
                $operation = $this->users()->list_($params['since'], $params['per_page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetByUsername_::OPERATION_MATCH:
                $operation = $this->users()->getByUsername_($params['username']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CFa9375D5B4Dfa8F391595615Bd0Addf4|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListFollowersForUser_::OPERATION_MATCH:
                $operation = $this->users()->listFollowersForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListFollowingForUser_::OPERATION_MATCH:
                $operation = $this->users()->listFollowingForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C776678935D0668Dfc7146933Bb775F6E {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\CheckFollowingForUser_::OPERATION_MATCH:
                $operation = $this->users()->checkFollowingForUser_($params['username'], $params['target_user']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListGpgKeysForUser_::OPERATION_MATCH:
                $operation = $this->users()->listGpgKeysForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4Be7352D2188Dd21500E563C327Cd0D4 {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetContextForUser_::OPERATION_MATCH:
                $operation = $this->users()->getContextForUser_($params['username'], $params['subject_type'], $params['subject_id']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Hovercard|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError {
                    return $operation->createResponse($response);
                });
                break;
            case \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListPublicKeysForUser_::OPERATION_MATCH:
                $operation = $this->users()->listPublicKeysForUser_($params['username'], $params['per_page'], $params['page']);
                $request = $operation->createRequest();
                return $this->browser->request($request->getMethod(), $request->getUri(), $request->getHeaders(), $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5C26E46Afe4Dc8D40051D9776F160A55 {
                    return $operation->createResponse($response);
                });
                break;
        }
    }
}
