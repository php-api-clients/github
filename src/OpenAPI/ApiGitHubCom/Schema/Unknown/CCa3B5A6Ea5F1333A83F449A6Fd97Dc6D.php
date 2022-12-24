<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CCa3B5A6Ea5F1333A83F449A6Fd97Dc6D
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Starred Repository","required":["starred_at","repo"],"type":"object","properties":{"starred_at":{"type":"string","format":"date-time"},"repo":{"title":"Repository","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url","clone_url","default_branch","forks","forks_count","git_url","has_downloads","has_issues","has_projects","has_wiki","has_pages","homepage","language","archived","disabled","mirror_url","open_issues","open_issues_count","license","pushed_at","size","ssh_url","stargazers_count","svn_url","watchers","watchers_count","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the repository","examples":[42]},"node_id":{"type":"string","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","description":"The name of the repository.","examples":["Team Environment"]},"full_name":{"type":"string","examples":["octocat\\/Hello-World"]},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]},"organization":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"forks":{"type":"integer"},"permissions":{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"}}},"owner":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"private":{"type":"boolean","description":"Whether the repository is private or public.","default":false},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World"]},"description":{"type":["string","null"],"examples":["This your first repo!"]},"fork":{"type":"boolean"},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"]},"archive_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"]},"assignees_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"]},"blobs_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"]},"branches_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"]},"collaborators_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"]},"comments_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"]},"commits_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"]},"compare_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"]},"contents_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"]},"contributors_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"]},"deployments_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"]},"downloads_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"]},"events_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"]},"forks_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"]},"git_commits_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"]},"git_refs_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"]},"git_tags_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"]},"git_url":{"type":"string","examples":["git:github.com\\/octocat\\/Hello-World.git"]},"issue_comment_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"]},"issue_events_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"]},"issues_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"]},"keys_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"]},"labels_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"]},"languages_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"]},"merges_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"]},"milestones_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"]},"notifications_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"]},"pulls_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"]},"releases_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"]},"ssh_url":{"type":"string","examples":["git@github.com:octocat\\/Hello-World.git"]},"stargazers_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"]},"statuses_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"]},"subscribers_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"]},"subscription_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"]},"tags_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"]},"teams_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"]},"trees_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"]},"clone_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World.git"]},"mirror_url":{"type":["string","null"],"format":"uri","examples":["git:git.example.com\\/octocat\\/Hello-World"]},"hooks_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"]},"svn_url":{"type":"string","format":"uri","examples":["https:\\/\\/svn.github.com\\/octocat\\/Hello-World"]},"homepage":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/github.com"]},"language":{"type":["string","null"]},"forks_count":{"type":"integer","examples":[9]},"stargazers_count":{"type":"integer","examples":[80]},"watchers_count":{"type":"integer","examples":[80]},"size":{"type":"integer","description":"The size of the repository. Size is calculated hourly. When a repository is initially created, the size is 0.","examples":[108]},"default_branch":{"type":"string","description":"The default branch of the repository.","examples":["master"]},"open_issues_count":{"type":"integer","examples":[0]},"is_template":{"type":"boolean","description":"Whether this repository acts as a template that can be used to generate new repositories.","default":false,"examples":[true]},"topics":{"type":"array","items":{"type":"string"}},"has_issues":{"type":"boolean","description":"Whether issues are enabled.","default":true,"examples":[true]},"has_projects":{"type":"boolean","description":"Whether projects are enabled.","default":true,"examples":[true]},"has_wiki":{"type":"boolean","description":"Whether the wiki is enabled.","default":true,"examples":[true]},"has_pages":{"type":"boolean"},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true,"examples":[true]},"has_discussions":{"type":"boolean","description":"Whether discussions are enabled.","default":false,"examples":[true]},"archived":{"type":"boolean","description":"Whether the repository is archived.","default":false},"disabled":{"type":"boolean","description":"Returns whether or not this repository disabled."},"visibility":{"type":"string","description":"The repository visibility: public, private, or internal.","default":"public"},"pushed_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:06:43Z"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:01:12Z"]},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:14:43Z"]},"allow_rebase_merge":{"type":"boolean","description":"Whether to allow rebase merges for pull requests.","default":true,"examples":[true]},"template_repository":{"type":["object","null"],"properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"full_name":{"type":"string"},"owner":{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string"},"gravatar_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"organizations_url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"received_events_url":{"type":"string"},"type":{"type":"string"},"site_admin":{"type":"boolean"}}},"private":{"type":"boolean"},"html_url":{"type":"string"},"description":{"type":"string"},"fork":{"type":"boolean"},"url":{"type":"string"},"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string"},"deployments_url":{"type":"string"},"downloads_url":{"type":"string"},"events_url":{"type":"string"},"forks_url":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"git_url":{"type":"string"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string"},"merges_url":{"type":"string"},"milestones_url":{"type":"string"},"notifications_url":{"type":"string"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"ssh_url":{"type":"string"},"stargazers_url":{"type":"string"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string"},"subscription_url":{"type":"string"},"tags_url":{"type":"string"},"teams_url":{"type":"string"},"trees_url":{"type":"string"},"clone_url":{"type":"string"},"mirror_url":{"type":"string"},"hooks_url":{"type":"string"},"svn_url":{"type":"string"},"homepage":{"type":"string"},"language":{"type":"string"},"forks_count":{"type":"integer"},"stargazers_count":{"type":"integer"},"watchers_count":{"type":"integer"},"size":{"type":"integer"},"default_branch":{"type":"string"},"open_issues_count":{"type":"integer"},"is_template":{"type":"boolean"},"topics":{"type":"array","items":{"type":"string"}},"has_issues":{"type":"boolean"},"has_projects":{"type":"boolean"},"has_wiki":{"type":"boolean"},"has_pages":{"type":"boolean"},"has_downloads":{"type":"boolean"},"archived":{"type":"boolean"},"disabled":{"type":"boolean"},"visibility":{"type":"string"},"pushed_at":{"type":"string"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"permissions":{"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}},"allow_rebase_merge":{"type":"boolean"},"temp_clone_token":{"type":"string"},"allow_squash_merge":{"type":"boolean"},"allow_auto_merge":{"type":"boolean"},"delete_branch_on_merge":{"type":"boolean"},"allow_update_branch":{"type":"boolean"},"use_squash_pr_title_as_default":{"type":"boolean"},"squash_merge_commit_title":{"enum":["PR_TITLE","COMMIT_OR_PR_TITLE"],"type":"string","description":"The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."},"squash_merge_commit_message":{"enum":["PR_BODY","COMMIT_MESSAGES","BLANK"],"type":"string","description":"The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."},"merge_commit_title":{"enum":["PR_TITLE","MERGE_MESSAGE"],"type":"string","description":"The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."},"merge_commit_message":{"enum":["PR_BODY","PR_TITLE","BLANK"],"type":"string","description":"The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."},"allow_merge_commit":{"type":"boolean"},"subscribers_count":{"type":"integer"},"network_count":{"type":"integer"}}},"temp_clone_token":{"type":"string"},"allow_squash_merge":{"type":"boolean","description":"Whether to allow squash merges for pull requests.","default":true,"examples":[true]},"allow_auto_merge":{"type":"boolean","description":"Whether to allow Auto-merge to be used on pull requests.","default":false,"examples":[false]},"delete_branch_on_merge":{"type":"boolean","description":"Whether to delete head branches when pull requests are merged","default":false,"examples":[false]},"allow_update_branch":{"type":"boolean","description":"Whether or not a pull request head branch that is behind its base branch can always be updated even if it is not required to be up to date before merging.","default":false,"examples":[false]},"use_squash_pr_title_as_default":{"type":"boolean","description":"Whether a squash merge commit can use the pull request title as default. **This property has been deprecated. Please use `squash_merge_commit_title` instead.","default":false,"deprecated":true},"squash_merge_commit_title":{"enum":["PR_TITLE","COMMIT_OR_PR_TITLE"],"type":"string","description":"The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."},"squash_merge_commit_message":{"enum":["PR_BODY","COMMIT_MESSAGES","BLANK"],"type":"string","description":"The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."},"merge_commit_title":{"enum":["PR_TITLE","MERGE_MESSAGE"],"type":"string","description":"The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."},"merge_commit_message":{"enum":["PR_BODY","PR_TITLE","BLANK"],"type":"string","description":"The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."},"allow_merge_commit":{"type":"boolean","description":"Whether to allow merge commits for pull requests.","default":true,"examples":[true]},"allow_forking":{"type":"boolean","description":"Whether to allow forking this repo"},"web_commit_signoff_required":{"type":"boolean","description":"Whether to require contributors to sign off on web-based commits","default":false},"subscribers_count":{"type":"integer"},"network_count":{"type":"integer"},"open_issues":{"type":"integer"},"watchers":{"type":"integer"},"master_branch":{"type":"string"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:42Z\\""]},"anonymous_access_enabled":{"type":"boolean","description":"Whether anonymous git access is enabled for this repository"}},"description":"A repository on GitHub."}},"description":"Starred Repository"}}';
    public const SCHEMA_TITLE = 'c_ca3b5a6ea5f1333a83f449a6fd97dc6d';
    public const SCHEMA_DESCRIPTION = '';
}
