<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class IssueComment
{
    public const SCHEMA_JSON = '{"title":"Issue Comment","required":["id","node_id","html_url","issue_url","author_association","user","url","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the issue comment","examples":[42]},"node_id":{"type":"string"},"url":{"type":"string","description":"URL for the issue comment","format":"uri","examples":["https:\\/\\/api.github.com\\/repositories\\/42\\/issues\\/comments\\/1"]},"body":{"type":"string","description":"Contents of the issue comment","examples":["What version of Safari were you using when you observed this bug?"]},"body_text":{"type":"string"},"body_html":{"type":"string"},"html_url":{"type":"string","format":"uri"},"user":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"created_at":{"type":"string","format":"date-time","examples":["2011-04-14T16:00:49Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2011-04-14T16:00:49Z"]},"issue_url":{"type":"string","format":"uri"},"author_association":{"title":"author_association","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository.","examples":["OWNER"]},"performed_via_github_app":{"anyOf":[{"type":"null"},{"title":"GitHub app","required":["id","node_id","owner","name","description","external_url","html_url","created_at","updated_at","permissions","events"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the GitHub app","examples":[37]},"slug":{"type":"string","description":"The slug name of the GitHub app","examples":["probot-owners"]},"node_id":{"type":"string","examples":["MDExOkludGVncmF0aW9uMQ=="]},"owner":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"name":{"type":"string","description":"The name of the GitHub app","examples":["Probot Owners"]},"description":{"type":["string","null"],"examples":["The description of the app."]},"external_url":{"type":"string","format":"uri","examples":["https:\\/\\/example.com"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/apps\\/super-ci"]},"created_at":{"type":"string","format":"date-time","examples":["2017-07-08T16:18:44-04:00"]},"updated_at":{"type":"string","format":"date-time","examples":["2017-07-08T16:18:44-04:00"]},"permissions":{"type":"object","properties":{"issues":{"type":"string"},"checks":{"type":"string"},"metadata":{"type":"string"},"contents":{"type":"string"},"deployments":{"type":"string"}},"description":"The set of permissions for the GitHub app","example":{"issues":"read","deployments":"write"},"additionalProperties":{"type":"string"}},"events":{"type":"array","items":{"type":"string"},"description":"The list of events for the GitHub app","examples":["label","deployment"]},"installations_count":{"type":"integer","description":"The number of installations associated with the GitHub app","examples":[5]},"client_id":{"type":"string","examples":["\\"Iv1.25b5d1e65ffc4022\\""]},"client_secret":{"type":"string","examples":["\\"1d4b2097ac622ba702d19de498f005747a8b21d3\\""]},"webhook_secret":{"type":["string","null"],"examples":["\\"6fba8f2fc8a7e8f2cca5577eddd82ca7586b3b6b\\""]},"pem":{"type":"string","examples":["\\"-----BEGIN RSA PRIVATE KEY-----\\\\nMIIEogIBAAKCAQEArYxrNYD\\/iT5CZVpRJu4rBKmmze3PVmT\\/gCo2ATUvDvZTPTey\\\\nxcGJ3vvrJXazKk06pN05TN29o98jrYz4cengG3YGsXPNEpKsIrEl8NhbnxapEnM9\\\\nJCMRe0P5JcPsfZlX6hmiT7136GRWiGOUba2X9+HKh8QJVLG5rM007TBER9\\/z9mWm\\\\nrJuNh+m5l320oBQY\\/Qq3A7wzdEfZw8qm\\/mIN0FCeoXH1L6B8xXWaAYBwhTEh6SSn\\\\nZHlO1Xu1JWDmAvBCi0RO5aRSKM8q9QEkvvHP4yweAtK3N8+aAbZ7ovaDhyGz8r6r\\\\nzhU1b8Uo0Z2ysf503WqzQgIajr7Fry7\\/kUwpgQIDAQABAoIBADwJp80Ko1xHPZDy\\\\nfcCKBDfIuPvkmSW6KumbsLMaQv1aGdHDwwTGv3t0ixSay8CGlxMRtRDyZPib6SvQ\\\\n6OH\\/lpfpbMdW2ErkksgtoIKBVrDilfrcAvrNZu7NxRNbhCSvN8q0s4ICecjbbVQh\\\\nnueSdlA6vGXbW58BHMq68uRbHkP+k+mM9U0mDJ1HMch67wlg5GbayVRt63H7R2+r\\\\nVxcna7B80J\\/lCEjIYZznawgiTvp3MSanTglqAYi+m1EcSsP14bJIB9vgaxS79kTu\\\\noiSo93leJbBvuGo8QEiUqTwMw4tDksmkLsoqNKQ1q9P7LZ9DGcujtPy4EZsamSJT\\\\ny8OJt0ECgYEA2lxOxJsQk2kI325JgKFjo92mQeUObIvPfSNWUIZQDTjniOI6Gv63\\\\nGLWVFrZcvQBWjMEQraJA9xjPbblV8PtfO87MiJGLWCHFxmPz2dzoedN+2Coxom8m\\\\nV95CLz8QUShuao6u\\/RYcvUaZEoYs5bHcTmy5sBK80JyEmafJPtCQVxMCgYEAy3ar\\\\nZr3yv4xRPEPMat4rseswmuMooSaK3SKub19WFI5IAtB\\/e7qR1Rj9JhOGcZz+OQrl\\\\nT78O2OFYlgOIkJPvRMrPpK5V9lslc7tz1FSh3BZMRGq5jSyD7ETSOQ0c8T2O\\/s7v\\\\nbeEPbVbDe4mwvM24XByH0GnWveVxaDl51ABD65sCgYB3ZAspUkOA5egVCh8kNpnd\\\\nSd6SnuQBE3ySRlT2WEnCwP9Ph6oPgn+oAfiPX4xbRqkL8q\\/k0BdHQ4h+zNwhk7+h\\\\nWtPYRAP1Xxnc\\/F+jGjb+DVaIaKGU18MWPg7f+FI6nampl3Q0KvfxwX0GdNhtio8T\\\\nTj1E+SnFwh56SRQuxSh2gwKBgHKjlIO5NtNSflsUYFM+hyQiPiqnHzddfhSG+\\/3o\\\\nm5nNaSmczJesUYreH5San7\\/YEy2UxAugvP7aSY2MxB+iGsiJ9WD2kZzTUlDZJ7RV\\\\nUzWsoqBR+eZfVJ2FUWWvy8TpSG6trh4dFxImNtKejCR1TREpSiTV3Zb1dmahK9GV\\\\nrK9NAoGAbBxRLoC01xfxCTgt5BDiBcFVh4fp5yYKwavJPLzHSpuDOrrI9jDn1oKN\\\\nonq5sDU1i391zfQvdrbX4Ova48BN+B7p63FocP\\/MK5tyyBoT8zQEk2+vWDOw7H\\/Z\\\\nu5dTCPxTIsoIwUw1I+7yIxqJzLPFgR2gVBwY1ra\\/8iAqCj+zeBw=\\\\n-----END RSA PRIVATE KEY-----\\\\n\\""]}},"description":"GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."}]},"reactions":{"title":"Reaction Rollup","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"total_count":{"type":"integer"},"+1":{"type":"integer"},"-1":{"type":"integer"},"laugh":{"type":"integer"},"confused":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"eyes":{"type":"integer"},"rocket":{"type":"integer"}}}},"description":"Comments provide a way for people to collaborate on an issue."}';
    public const SCHEMA_TITLE = 'Issue Comment';
    public const SCHEMA_DESCRIPTION = 'Comments provide a way for people to collaborate on an issue.';
    public const SCHEMA_EXAMPLE_DATA = '{"id":42,"node_id":"generated_node_id","url":"https:\\/\\/api.github.com\\/repositories\\/42\\/issues\\/comments\\/1","body":"What version of Safari were you using when you observed this bug?","body_text":"generated_body_text","body_html":"generated_body_html","html_url":"generated_html_url","user":null,"created_at":"2011-04-14T16:00:49Z","updated_at":"2011-04-14T16:00:49Z","issue_url":"generated_issue_url","author_association":"OWNER","performed_via_github_app":null,"reactions":{"url":"generated_url","total_count":13,"_PLUSES_1":13,"_MINUS_1":13,"laugh":13,"confused":13,"heart":13,"hooray":13,"eyes":13,"rocket":13}}';
    /**
     * id: Unique identifier of the issue comment
     * url: URL for the issue comment
     * body: Contents of the issue comment
     * author_association: How the author is associated with the repository.
     */
    public function __construct(public ?int $id, public ?string $node_id, public ?string $url, public string $body, public string $body_text, public string $body_html, public ?string $html_url, public mixed $user, public ?string $created_at, public ?string $updated_at, public ?string $issue_url, public ?string $author_association, public mixed $performed_via_github_app, public Schema\ReactionRollup $reactions)
    {
    }
}
