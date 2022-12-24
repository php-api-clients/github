<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class BranchProtection
{
    public const SCHEMA_JSON = '{"title":"Branch Protection","type":"object","properties":{"url":{"type":"string"},"enabled":{"type":"boolean"},"required_status_checks":{"title":"Protected Branch Required Status Check","required":["contexts"],"type":"object","properties":{"url":{"type":"string"},"enforcement_level":{"type":"string"},"contexts":{"type":"array","items":{"type":"string"}},"contexts_url":{"type":"string"},"strict":{"type":"boolean"}},"description":"Protected Branch Required Status Check"},"enforce_admins":{"title":"Protected Branch Admin Enforced","required":["url","enabled"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/enforce_admins"]},"enabled":{"type":"boolean","examples":[true]}},"description":"Protected Branch Admin Enforced"},"required_pull_request_reviews":{"title":"Protected Branch Pull Request Review","required":["dismiss_stale_reviews","require_code_owner_reviews"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/dismissal_restrictions"]},"dismissal_restrictions":{"type":"object","properties":{"users":{"type":"array","items":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"Simple User"},"description":"The list of users with review dismissal access."},"teams":{"type":"array","items":{"title":"Team","required":["id","node_id","url","members_url","name","description","permission","html_url","repositories_url","slug","parent"],"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"slug":{"type":"string"},"description":{"type":["string","null"]},"privacy":{"type":"string"},"permission":{"type":"string"},"permissions":{"required":["pull","triage","push","maintain","admin"],"type":"object","properties":{"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"},"admin":{"type":"boolean"}}},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"]},"members_url":{"type":"string"},"repositories_url":{"type":"string","format":"uri"},"parent":{"anyOf":[{"type":"null"},{"title":"Team Simple","required":["id","node_id","url","members_url","name","description","permission","html_url","repositories_url","slug"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the team","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VGVhbTE="]},"url":{"type":"string","description":"URL for the team","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1"]},"members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}"]},"name":{"type":"string","description":"Name of the team","examples":["Justice League"]},"description":{"type":["string","null"],"description":"Description of the team","examples":["A great team."]},"permission":{"type":"string","description":"Permission that the team will have for its repositories","examples":["admin"]},"privacy":{"type":"string","description":"The level of privacy this team should have","examples":["closed"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"]},"repositories_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos"]},"slug":{"type":"string","examples":["justice-league"]},"ldap_dn":{"type":"string","description":"Distinguished Name (DN) that team maps to within LDAP environment","examples":["uid=example,ou=users,dc=github,dc=com"]}},"description":"Groups of organization members that gives permissions on specified repositories."}]}},"description":"Groups of organization members that gives permissions on specified repositories."},"description":"The list of teams with review dismissal access."},"apps":{"type":"array","items":{"title":"GitHub app","required":["id","node_id","owner","name","description","external_url","html_url","created_at","updated_at","permissions","events"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the GitHub app","examples":[37]},"slug":{"type":"string","description":"The slug name of the GitHub app","examples":["probot-owners"]},"node_id":{"type":"string","examples":["MDExOkludGVncmF0aW9uMQ=="]},"owner":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"Simple User"}]},"name":{"type":"string","description":"The name of the GitHub app","examples":["Probot Owners"]},"description":{"type":["string","null"],"examples":["The description of the app."]},"external_url":{"type":"string","format":"uri","examples":["https:\\/\\/example.com"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/apps\\/super-ci"]},"created_at":{"type":"string","format":"date-time","examples":["2017-07-08T16:18:44-04:00"]},"updated_at":{"type":"string","format":"date-time","examples":["2017-07-08T16:18:44-04:00"]},"permissions":{"type":"object","properties":{"issues":{"type":"string"},"checks":{"type":"string"},"metadata":{"type":"string"},"contents":{"type":"string"},"deployments":{"type":"string"}},"description":"The set of permissions for the GitHub app","example":{"issues":"read","deployments":"write"},"additionalProperties":{"type":"string"}},"events":{"type":"array","items":{"type":"string"},"description":"The list of events for the GitHub app","examples":["label","deployment"]},"installations_count":{"type":"integer","description":"The number of installations associated with the GitHub app","examples":[5]},"client_id":{"type":"string","examples":["\\"Iv1.25b5d1e65ffc4022\\""]},"client_secret":{"type":"string","examples":["\\"1d4b2097ac622ba702d19de498f005747a8b21d3\\""]},"webhook_secret":{"type":["string","null"],"examples":["\\"6fba8f2fc8a7e8f2cca5577eddd82ca7586b3b6b\\""]},"pem":{"type":"string","examples":["\\"-----BEGIN RSA PRIVATE KEY-----\\\\nMIIEogIBAAKCAQEArYxrNYD\\/iT5CZVpRJu4rBKmmze3PVmT\\/gCo2ATUvDvZTPTey\\\\nxcGJ3vvrJXazKk06pN05TN29o98jrYz4cengG3YGsXPNEpKsIrEl8NhbnxapEnM9\\\\nJCMRe0P5JcPsfZlX6hmiT7136GRWiGOUba2X9+HKh8QJVLG5rM007TBER9\\/z9mWm\\\\nrJuNh+m5l320oBQY\\/Qq3A7wzdEfZw8qm\\/mIN0FCeoXH1L6B8xXWaAYBwhTEh6SSn\\\\nZHlO1Xu1JWDmAvBCi0RO5aRSKM8q9QEkvvHP4yweAtK3N8+aAbZ7ovaDhyGz8r6r\\\\nzhU1b8Uo0Z2ysf503WqzQgIajr7Fry7\\/kUwpgQIDAQABAoIBADwJp80Ko1xHPZDy\\\\nfcCKBDfIuPvkmSW6KumbsLMaQv1aGdHDwwTGv3t0ixSay8CGlxMRtRDyZPib6SvQ\\\\n6OH\\/lpfpbMdW2ErkksgtoIKBVrDilfrcAvrNZu7NxRNbhCSvN8q0s4ICecjbbVQh\\\\nnueSdlA6vGXbW58BHMq68uRbHkP+k+mM9U0mDJ1HMch67wlg5GbayVRt63H7R2+r\\\\nVxcna7B80J\\/lCEjIYZznawgiTvp3MSanTglqAYi+m1EcSsP14bJIB9vgaxS79kTu\\\\noiSo93leJbBvuGo8QEiUqTwMw4tDksmkLsoqNKQ1q9P7LZ9DGcujtPy4EZsamSJT\\\\ny8OJt0ECgYEA2lxOxJsQk2kI325JgKFjo92mQeUObIvPfSNWUIZQDTjniOI6Gv63\\\\nGLWVFrZcvQBWjMEQraJA9xjPbblV8PtfO87MiJGLWCHFxmPz2dzoedN+2Coxom8m\\\\nV95CLz8QUShuao6u\\/RYcvUaZEoYs5bHcTmy5sBK80JyEmafJPtCQVxMCgYEAy3ar\\\\nZr3yv4xRPEPMat4rseswmuMooSaK3SKub19WFI5IAtB\\/e7qR1Rj9JhOGcZz+OQrl\\\\nT78O2OFYlgOIkJPvRMrPpK5V9lslc7tz1FSh3BZMRGq5jSyD7ETSOQ0c8T2O\\/s7v\\\\nbeEPbVbDe4mwvM24XByH0GnWveVxaDl51ABD65sCgYB3ZAspUkOA5egVCh8kNpnd\\\\nSd6SnuQBE3ySRlT2WEnCwP9Ph6oPgn+oAfiPX4xbRqkL8q\\/k0BdHQ4h+zNwhk7+h\\\\nWtPYRAP1Xxnc\\/F+jGjb+DVaIaKGU18MWPg7f+FI6nampl3Q0KvfxwX0GdNhtio8T\\\\nTj1E+SnFwh56SRQuxSh2gwKBgHKjlIO5NtNSflsUYFM+hyQiPiqnHzddfhSG+\\/3o\\\\nm5nNaSmczJesUYreH5San7\\/YEy2UxAugvP7aSY2MxB+iGsiJ9WD2kZzTUlDZJ7RV\\\\nUzWsoqBR+eZfVJ2FUWWvy8TpSG6trh4dFxImNtKejCR1TREpSiTV3Zb1dmahK9GV\\\\nrK9NAoGAbBxRLoC01xfxCTgt5BDiBcFVh4fp5yYKwavJPLzHSpuDOrrI9jDn1oKN\\\\nonq5sDU1i391zfQvdrbX4Ova48BN+B7p63FocP\\/MK5tyyBoT8zQEk2+vWDOw7H\\/Z\\\\nu5dTCPxTIsoIwUw1I+7yIxqJzLPFgR2gVBwY1ra\\/8iAqCj+zeBw=\\\\n-----END RSA PRIVATE KEY-----\\\\n\\""]}},"description":"GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."},"description":"The list of apps with review dismissal access."},"url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/repos\\/the-org\\/an-org-repo\\/branches\\/master\\/protection\\/dismissal_restrictions\\""]},"users_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/repos\\/the-org\\/an-org-repo\\/branches\\/master\\/protection\\/dismissal_restrictions\\/users\\""]},"teams_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/repos\\/the-org\\/an-org-repo\\/branches\\/master\\/protection\\/dismissal_restrictions\\/teams\\""]}}},"dismiss_stale_reviews":{"type":"boolean","examples":[true]},"require_code_owner_reviews":{"type":"boolean","examples":[true]},"required_approving_review_count":{"maximum":6,"minimum":1,"type":"integer","examples":[2]}},"description":"Protected Branch Pull Request Review"},"restrictions":{"title":"Branch Restriction Policy","required":["url","users_url","teams_url","apps_url","users","teams","apps"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"users_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"apps_url":{"type":"string","format":"uri"},"users":{"type":"array","items":{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string"},"gravatar_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"organizations_url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"received_events_url":{"type":"string"},"type":{"type":"string"},"site_admin":{"type":"boolean"}}}},"teams":{"type":"array","items":{"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"name":{"type":"string"},"slug":{"type":"string"},"description":{"type":["string","null"]},"privacy":{"type":"string"},"permission":{"type":"string"},"members_url":{"type":"string"},"repositories_url":{"type":"string"},"parent":{"type":["string","null"]}}}},"apps":{"type":"array","items":{"type":"object","properties":{"id":{"type":"integer"},"slug":{"type":"string"},"node_id":{"type":"string"},"owner":{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"hooks_url":{"type":"string"},"issues_url":{"type":"string"},"members_url":{"type":"string"},"public_members_url":{"type":"string"},"avatar_url":{"type":"string"},"description":{"type":"string"},"gravatar_id":{"type":"string","examples":["\\"\\""]},"html_url":{"type":"string","examples":["\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\""]},"followers_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\""]},"following_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\""]},"gists_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\""]},"starred_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\""]},"subscriptions_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\""]},"organizations_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\""]},"received_events_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\""]},"type":{"type":"string","examples":["\\"Organization\\""]},"site_admin":{"type":"boolean","examples":[false]}}},"name":{"type":"string"},"description":{"type":"string"},"external_url":{"type":"string"},"html_url":{"type":"string"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"permissions":{"type":"object","properties":{"metadata":{"type":"string"},"contents":{"type":"string"},"issues":{"type":"string"},"single_file":{"type":"string"}}},"events":{"type":"array","items":{"type":"string"}}}}}},"description":"Branch Restriction Policy"},"required_linear_history":{"type":"object","properties":{"enabled":{"type":"boolean"}}},"allow_force_pushes":{"type":"object","properties":{"enabled":{"type":"boolean"}}},"allow_deletions":{"type":"object","properties":{"enabled":{"type":"boolean"}}},"block_creations":{"type":"object","properties":{"enabled":{"type":"boolean"}}},"required_conversation_resolution":{"type":"object","properties":{"enabled":{"type":"boolean"}}},"name":{"type":"string","examples":["\\"branch\\/with\\/protection\\""]},"protection_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/repos\\/owner-79e94e2d36b3fd06a32bb213\\/AAA_Public_Repo\\/branches\\/branch\\/with\\/protection\\/protection\\""]},"required_signatures":{"required":["url","enabled"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_signatures"]},"enabled":{"type":"boolean","examples":[true]}}}},"description":"Branch Protection"}';
    public const SCHEMA_TITLE = 'Branch Protection';
    public const SCHEMA_DESCRIPTION = 'Branch Protection';
    private string $url;
    private bool $enabled;
    /**
     * Protected Branch Required Status Check
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchRequiredStatusCheck::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchRequiredStatusCheck $required_status_checks;
    /**
     * Protected Branch Admin Enforced
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchAdminEnforced::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchAdminEnforced $enforce_admins;
    /**
     * Protected Branch Pull Request Review
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchPullRequestReview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchPullRequestReview $required_pull_request_reviews;
    /**
     * Branch Restriction Policy
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BranchRestrictionPolicy::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BranchRestrictionPolicy $restrictions;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8 $required_linear_history;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8 $allow_force_pushes;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8 $allow_deletions;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8 $block_creations;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8 $required_conversation_resolution;
    private string $name;
    private string $protection_url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF50Ed86844C35399Ef6Ae62851A21942::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF50Ed86844C35399Ef6Ae62851A21942 $required_signatures;
    public function url() : string
    {
        return $this->url;
    }
    public function enabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Protected Branch Required Status Check
     */
    public function required_status_checks() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchRequiredStatusCheck
    {
        return $this->required_status_checks;
    }
    /**
     * Protected Branch Admin Enforced
     */
    public function enforce_admins() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchAdminEnforced
    {
        return $this->enforce_admins;
    }
    /**
     * Protected Branch Pull Request Review
     */
    public function required_pull_request_reviews() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchPullRequestReview
    {
        return $this->required_pull_request_reviews;
    }
    /**
     * Branch Restriction Policy
     */
    public function restrictions() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BranchRestrictionPolicy
    {
        return $this->restrictions;
    }
    public function required_linear_history() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8
    {
        return $this->required_linear_history;
    }
    public function allow_force_pushes() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8
    {
        return $this->allow_force_pushes;
    }
    public function allow_deletions() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8
    {
        return $this->allow_deletions;
    }
    public function block_creations() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8
    {
        return $this->block_creations;
    }
    public function required_conversation_resolution() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8
    {
        return $this->required_conversation_resolution;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function protection_url() : string
    {
        return $this->protection_url;
    }
    public function required_signatures() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF50Ed86844C35399Ef6Ae62851A21942
    {
        return $this->required_signatures;
    }
}
