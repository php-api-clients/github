<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Codespace
{
    public const SCHEMA_JSON = '{"title":"Codespace","required":["id","name","environment_id","owner","billable_owner","repository","machine","prebuild","created_at","updated_at","last_used_at","state","url","git_status","location","idle_timeout_minutes","web_url","machines_url","start_url","stop_url","pulls_url","recent_folders"],"type":"object","properties":{"id":{"type":"integer","examples":[1]},"name":{"type":"string","description":"Automatically generated name of this codespace.","examples":["monalisa-octocat-hello-world-g4wpq6h95q"]},"display_name":{"type":["string","null"],"description":"Display name for this codespace.","examples":["bookish space pancake"]},"environment_id":{"type":["string","null"],"description":"UUID identifying this codespace\'s environment.","examples":["26a7c758-7299-4a73-b978-5a92a7ae98a0"]},"owner":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"billable_owner":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"repository":{"title":"Minimal Repository","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url"],"type":"object","properties":{"id":{"type":"integer","examples":[1296269]},"node_id":{"type":"string","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","examples":["Hello-World"]},"full_name":{"type":"string","examples":["octocat\\/Hello-World"]},"owner":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"private":{"type":"boolean"},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World"]},"description":{"type":["string","null"],"examples":["This your first repo!"]},"fork":{"type":"boolean"},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"]},"archive_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"]},"assignees_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"]},"blobs_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"]},"branches_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"]},"collaborators_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"]},"comments_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"]},"commits_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"]},"compare_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"]},"contents_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"]},"contributors_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"]},"deployments_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"]},"downloads_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"]},"events_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"]},"forks_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"]},"git_commits_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"]},"git_refs_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"]},"git_tags_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"]},"git_url":{"type":"string"},"issue_comment_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"]},"issue_events_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"]},"issues_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"]},"keys_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"]},"labels_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"]},"languages_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"]},"merges_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"]},"milestones_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"]},"notifications_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"]},"pulls_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"]},"releases_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"]},"ssh_url":{"type":"string"},"stargazers_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"]},"statuses_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"]},"subscribers_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"]},"subscription_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"]},"tags_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"]},"teams_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"]},"trees_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"]},"clone_url":{"type":"string"},"mirror_url":{"type":["string","null"]},"hooks_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"]},"svn_url":{"type":"string"},"homepage":{"type":["string","null"]},"language":{"type":["string","null"]},"forks_count":{"type":"integer"},"stargazers_count":{"type":"integer"},"watchers_count":{"type":"integer"},"size":{"type":"integer","description":"The size of the repository. Size is calculated hourly. When a repository is initially created, the size is 0."},"default_branch":{"type":"string"},"open_issues_count":{"type":"integer"},"is_template":{"type":"boolean"},"topics":{"type":"array","items":{"type":"string"}},"has_issues":{"type":"boolean"},"has_projects":{"type":"boolean"},"has_wiki":{"type":"boolean"},"has_pages":{"type":"boolean"},"has_downloads":{"type":"boolean"},"has_discussions":{"type":"boolean"},"archived":{"type":"boolean"},"disabled":{"type":"boolean"},"visibility":{"type":"string"},"pushed_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:06:43Z"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:01:12Z"]},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:14:43Z"]},"permissions":{"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}},"role_name":{"type":"string","examples":["admin"]},"temp_clone_token":{"type":"string"},"delete_branch_on_merge":{"type":"boolean"},"subscribers_count":{"type":"integer"},"network_count":{"type":"integer"},"code_of_conduct":{"title":"Code Of Conduct","required":["url","html_url","key","name"],"type":"object","properties":{"key":{"type":"string","examples":["contributor_covenant"]},"name":{"type":"string","examples":["Contributor Covenant"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/codes_of_conduct\\/contributor_covenant"]},"body":{"type":"string","examples":["# Contributor Covenant Code of Conduct\\n\\n## Our Pledge\\n\\nIn the interest of fostering an open and welcoming environment, we as contributors and maintainers pledge to making participation in our project and our community a harassment-free experience for everyone, regardless of age, body size, disability, ethnicity, gender identity and expression, level of experience, nationality, personal appearance, race, religion, or sexual identity and orientation.\\n\\n## Our Standards\\n\\nExamples of behavior that contributes to creating a positive environment include:\\n\\n* Using welcoming and inclusive language\\n* Being respectful of differing viewpoints and experiences\\n* Gracefully accepting constructive criticism\\n* Focusing on what is best for the community\\n* Showing empathy towards other community members\\n\\nExamples of unacceptable behavior by participants include:\\n\\n* The use of sexualized language or imagery and unwelcome sexual attention or advances\\n* Trolling, insulting\\/derogatory comments, and personal or political attacks\\n* Public or private harassment\\n* Publishing others\' private information, such as a physical or electronic address, without explicit permission\\n* Other conduct which could reasonably be considered inappropriate in a professional setting\\n\\n## Our Responsibilities\\n\\nProject maintainers are responsible for clarifying the standards of acceptable behavior and are expected to take appropriate and fair corrective action in response\\n                  to any instances of unacceptable behavior.\\n\\nProject maintainers have the right and responsibility to remove, edit, or reject comments, commits, code, wiki edits, issues, and other contributions that are not aligned to this Code of Conduct, or to ban temporarily or permanently any contributor for other behaviors that they deem inappropriate, threatening, offensive, or harmful.\\n\\n## Scope\\n\\nThis Code of Conduct applies both within project spaces and in public spaces when an individual is representing the project or its community. Examples of representing a project or community include using an official project e-mail address,\\n                  posting via an official social media account, or acting as an appointed representative at an online or offline event. Representation of a project may be further defined and clarified by project maintainers.\\n\\n## Enforcement\\n\\nInstances of abusive, harassing, or otherwise unacceptable behavior may be reported by contacting the project team at [EMAIL]. The project team will review and investigate all complaints, and will respond in a way that it deems appropriate to the circumstances. The project team is obligated to maintain confidentiality with regard to the reporter of an incident. Further details of specific enforcement policies may be posted separately.\\n\\nProject maintainers who do not follow or enforce the Code of Conduct in good faith may face temporary or permanent repercussions as determined by other members of the project\'s leadership.\\n\\n## Attribution\\n\\nThis Code of Conduct is adapted from the [Contributor Covenant][homepage], version 1.4, available at [http:\\/\\/contributor-covenant.org\\/version\\/1\\/4][version]\\n\\n[homepage]: http:\\/\\/contributor-covenant.org\\n[version]: http:\\/\\/contributor-covenant.org\\/version\\/1\\/4\\/\\n"]},"html_url":{"type":["string","null"],"format":"uri"}},"description":"Code Of Conduct"},"license":{"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":"string"},"node_id":{"type":"string"}}},"forks":{"type":"integer","examples":[0]},"open_issues":{"type":"integer","examples":[0]},"watchers":{"type":"integer","examples":[0]},"allow_forking":{"type":"boolean"},"web_commit_signoff_required":{"type":"boolean","examples":[false]},"security_and_analysis":{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}}}},"description":"Minimal Repository"},"machine":{"anyOf":[{"type":"null"},{"title":"Codespace machine","required":["name","display_name","operating_system","storage_in_bytes","memory_in_bytes","cpus","prebuild_availability"],"type":"object","properties":{"name":{"type":"string","description":"The name of the machine.","examples":["standardLinux"]},"display_name":{"type":"string","description":"The display name of the machine includes cores, memory, and storage.","examples":["4 cores, 8 GB RAM, 64 GB storage"]},"operating_system":{"type":"string","description":"The operating system of the machine.","examples":["linux"]},"storage_in_bytes":{"type":"integer","description":"How much storage is available to the codespace.","examples":[68719476736]},"memory_in_bytes":{"type":"integer","description":"How much memory is available to the codespace.","examples":[8589934592]},"cpus":{"type":"integer","description":"How many cores are available to the codespace.","examples":[4]},"prebuild_availability":{"enum":["none","ready","in_progress",null],"type":["string","null"],"description":"Whether a prebuild is currently available when creating a codespace for this machine and repository. If a branch was not specified as a ref, the default branch will be assumed. Value will be \\"null\\" if prebuilds are not supported or prebuild availability could not be determined. Value will be \\"none\\" if no prebuild is available. Latest values \\"ready\\" and \\"in_progress\\" indicate the prebuild availability status.","examples":["ready"]}},"description":"A description of the machine powering a codespace."}]},"devcontainer_path":{"type":["string","null"],"description":"Path to devcontainer.json from repo root used to create Codespace.","examples":[".devcontainer\\/example\\/devcontainer.json"]},"prebuild":{"type":["boolean","null"],"description":"Whether the codespace was created from a prebuild.","examples":[false]},"created_at":{"type":"string","format":"date-time","examples":["2011-01-26T19:01:12Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2011-01-26T19:01:12Z"]},"last_used_at":{"type":"string","description":"Last known time this codespace was started.","format":"date-time","examples":["2011-01-26T19:01:12Z"]},"state":{"enum":["Unknown","Created","Queued","Provisioning","Available","Awaiting","Unavailable","Deleted","Moved","Shutdown","Archived","Starting","ShuttingDown","Failed","Exporting","Updating","Rebuilding"],"type":"string","description":"State of this codespace.","examples":["Available"]},"url":{"type":"string","description":"API URL for this codespace.","format":"uri"},"git_status":{"type":"object","properties":{"ahead":{"type":"integer","description":"The number of commits the local repository is ahead of the remote.","examples":[0]},"behind":{"type":"integer","description":"The number of commits the local repository is behind the remote.","examples":[0]},"has_unpushed_changes":{"type":"boolean","description":"Whether the local repository has unpushed changes."},"has_uncommitted_changes":{"type":"boolean","description":"Whether the local repository has uncommitted changes."},"ref":{"type":"string","description":"The current branch (or SHA if in detached HEAD state) of the local repository.","examples":["main"]}},"description":"Details about the codespace\'s git repository."},"location":{"enum":["EastUs","SouthEastAsia","WestEurope","WestUs2"],"type":"string","description":"The Azure region where this codespace is located.","examples":["WestUs2"]},"idle_timeout_minutes":{"type":["integer","null"],"description":"The number of minutes of inactivity after which this codespace will be automatically stopped.","examples":[60]},"web_url":{"type":"string","description":"URL to access this codespace on the web.","format":"uri"},"machines_url":{"type":"string","description":"API URL to access available alternate machine types for this codespace.","format":"uri"},"start_url":{"type":"string","description":"API URL to start this codespace.","format":"uri"},"stop_url":{"type":"string","description":"API URL to stop this codespace.","format":"uri"},"pulls_url":{"type":["string","null"],"description":"API URL for the Pull Request associated with this codespace, if any.","format":"uri"},"recent_folders":{"type":"array","items":{"type":"string"}},"runtime_constraints":{"type":"object","properties":{"allowed_port_privacy_settings":{"type":["array","null"],"items":{"type":"string"},"description":"The privacy settings a user can select from when forwarding a port."}}},"pending_operation":{"type":["boolean","null"],"description":"Whether or not a codespace has a pending async operation. This would mean that the codespace is temporarily unavailable. The only thing that you can do with a codespace in this state is delete it."},"pending_operation_disabled_reason":{"type":["string","null"],"description":"Text to show user when codespace is disabled by a pending operation"},"idle_timeout_notice":{"type":["string","null"],"description":"Text to show user when codespace idle timeout minutes has been overriden by an organization policy"},"retention_period_minutes":{"type":["integer","null"],"description":"Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).","examples":[60]},"retention_expires_at":{"type":["string","null"],"description":"When a codespace will be auto-deleted based on the \\"retention_period_minutes\\" and \\"last_used_at\\"","format":"date-time","examples":["2011-01-26T20:01:12Z"]},"last_known_stop_notice":{"type":["string","null"],"description":"The text to display to a user when a codespace has been stopped for a potentially actionable reason.","examples":["you\'ve used 100% of your spending limit for Codespaces"]}},"description":"A codespace."}';
    public const SCHEMA_TITLE = 'Codespace';
    public const SCHEMA_DESCRIPTION = 'A codespace.';
    private int $id;
    /**
     * Automatically generated name of this codespace.
     */
    private string $name;
    /**
     * Display name for this codespace.
     */
    private $display_name;
    /**
     * UUID identifying this codespace's environment.
     */
    private $environment_id;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $owner;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $billable_owner;
    /**
     * Minimal Repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository $repository;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217 $machine;
    /**
     * Path to devcontainer.json from repo root used to create Codespace.
     */
    private $devcontainer_path;
    /**
     * Whether the codespace was created from a prebuild.
     */
    private $prebuild;
    private string $created_at;
    private string $updated_at;
    /**
     * Last known time this codespace was started.
     */
    private string $last_used_at;
    /**
     * State of this codespace.
     */
    private string $state;
    /**
     * API URL for this codespace.
     */
    private string $url;
    /**
     * Details about the codespace's git repository.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C142001D17E3Ea0E82E5552Eedbd699D1::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C142001D17E3Ea0E82E5552Eedbd699D1 $git_status;
    /**
     * The Azure region where this codespace is located.
     */
    private string $location;
    /**
     * The number of minutes of inactivity after which this codespace will be automatically stopped.
     */
    private $idle_timeout_minutes;
    /**
     * URL to access this codespace on the web.
     */
    private string $web_url;
    /**
     * API URL to access available alternate machine types for this codespace.
     */
    private string $machines_url;
    /**
     * API URL to start this codespace.
     */
    private string $start_url;
    /**
     * API URL to stop this codespace.
     */
    private string $stop_url;
    /**
     * API URL for the Pull Request associated with this codespace, if any.
     */
    private $pulls_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $recent_folders = array();
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD34F4F2E4Fff1066Aa7Cd8F52Cc7E7E7::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD34F4F2E4Fff1066Aa7Cd8F52Cc7E7E7 $runtime_constraints = null;
    /**
     * Whether or not a codespace has a pending async operation. This would mean that the codespace is temporarily unavailable. The only thing that you can do with a codespace in this state is delete it.
     */
    private $pending_operation;
    /**
     * Text to show user when codespace is disabled by a pending operation
     */
    private $pending_operation_disabled_reason;
    /**
     * Text to show user when codespace idle timeout minutes has been overriden by an organization policy
     */
    private $idle_timeout_notice;
    /**
     * Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).
     */
    private $retention_period_minutes;
    /**
     * When a codespace will be auto-deleted based on the "retention_period_minutes" and "last_used_at"
     */
    private $retention_expires_at;
    /**
     * The text to display to a user when a codespace has been stopped for a potentially actionable reason.
     */
    private $last_known_stop_notice;
    public function id() : int
    {
        return $this->id;
    }
    /**
     * Automatically generated name of this codespace.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Display name for this codespace.
     */
    public function display_name()
    {
        return $this->display_name;
    }
    /**
     * UUID identifying this codespace's environment.
     */
    public function environment_id()
    {
        return $this->environment_id;
    }
    /**
     * A GitHub user.
     */
    public function owner() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->owner;
    }
    /**
     * A GitHub user.
     */
    public function billable_owner() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->billable_owner;
    }
    /**
     * Minimal Repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository
    {
        return $this->repository;
    }
    public function machine() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217
    {
        return $this->machine;
    }
    /**
     * Path to devcontainer.json from repo root used to create Codespace.
     */
    public function devcontainer_path()
    {
        return $this->devcontainer_path;
    }
    /**
     * Whether the codespace was created from a prebuild.
     */
    public function prebuild()
    {
        return $this->prebuild;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * Last known time this codespace was started.
     */
    public function last_used_at() : string
    {
        return $this->last_used_at;
    }
    /**
     * State of this codespace.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * API URL for this codespace.
     */
    public function url() : string
    {
        return $this->url;
    }
    /**
     * Details about the codespace's git repository.
     */
    public function git_status() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C142001D17E3Ea0E82E5552Eedbd699D1
    {
        return $this->git_status;
    }
    /**
     * The Azure region where this codespace is located.
     */
    public function location() : string
    {
        return $this->location;
    }
    /**
     * The number of minutes of inactivity after which this codespace will be automatically stopped.
     */
    public function idle_timeout_minutes()
    {
        return $this->idle_timeout_minutes;
    }
    /**
     * URL to access this codespace on the web.
     */
    public function web_url() : string
    {
        return $this->web_url;
    }
    /**
     * API URL to access available alternate machine types for this codespace.
     */
    public function machines_url() : string
    {
        return $this->machines_url;
    }
    /**
     * API URL to start this codespace.
     */
    public function start_url() : string
    {
        return $this->start_url;
    }
    /**
     * API URL to stop this codespace.
     */
    public function stop_url() : string
    {
        return $this->stop_url;
    }
    /**
     * API URL for the Pull Request associated with this codespace, if any.
     */
    public function pulls_url()
    {
        return $this->pulls_url;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function recent_folders() : array
    {
        return $this->recent_folders;
    }
    public function runtime_constraints() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD34F4F2E4Fff1066Aa7Cd8F52Cc7E7E7
    {
        return $this->runtime_constraints;
    }
    /**
     * Whether or not a codespace has a pending async operation. This would mean that the codespace is temporarily unavailable. The only thing that you can do with a codespace in this state is delete it.
     */
    public function pending_operation()
    {
        return $this->pending_operation;
    }
    /**
     * Text to show user when codespace is disabled by a pending operation
     */
    public function pending_operation_disabled_reason()
    {
        return $this->pending_operation_disabled_reason;
    }
    /**
     * Text to show user when codespace idle timeout minutes has been overriden by an organization policy
     */
    public function idle_timeout_notice()
    {
        return $this->idle_timeout_notice;
    }
    /**
     * Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).
     */
    public function retention_period_minutes()
    {
        return $this->retention_period_minutes;
    }
    /**
     * When a codespace will be auto-deleted based on the "retention_period_minutes" and "last_used_at"
     */
    public function retention_expires_at()
    {
        return $this->retention_expires_at;
    }
    /**
     * The text to display to a user when a codespace has been stopped for a potentially actionable reason.
     */
    public function last_known_stop_notice()
    {
        return $this->last_known_stop_notice;
    }
}
