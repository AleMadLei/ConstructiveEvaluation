# Constructive Developer Evaluation Project

## Wordpress
* Run `lando start` on the wp folder. This will create https://bedrock.lndo.site.
* Copy `.lando.env` to `.env`
* Go to the URL and install Wordpress.
* Create at least 10 published posts and at least 2 drafts.
* Enable the `My REST` plugin at https://bedrock.lndo.site/wp/wp-admin/plugins.php
* Confirm you can see the JSON response at https://bedrock.lndo.site/wp-json/my-rest/posts
* `Evaluation Note:` Describe some existing mechanisms or plugins which could have been used instead of writing
  a custom plugin.
  * Instead of using one's own REST endpoint (which just gets raw data) we could use the already existing JSON API.
In the local install this can be found at https://bedrock.lndo.site/wp-json/wp/v2/posts. It has the advantage that 
  it already provides rendered content plus a lot of additional information.