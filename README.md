# Constructive Developer Evaluation Project

## Wordpress
* cd into the `wp` folder
* Run `lando start`. This will create https://alemadlei-bedrock.lndo.site.
* Copy `.lando.env` to `.env`
* Run `lando composer install`
* Go to the URL and install Wordpress.
* Create at least 10 published posts and at least 2 drafts.
* Enable the `My REST` plugin at https://alemadlei-bedrock.lndo.site/wp/wp-admin/plugins.php
* Confirm you can see the JSON response at https://alemadlei-bedrock.lndo.site/wp-json/my-rest/posts
* `Evaluation Note:` Describe some existing mechanisms or plugins which could have been used instead of writing
  a custom plugin.
  * Instead of using one's own REST endpoint (which just gets raw data) we could use the already existing JSON API.
In the local install this can be found at https://alemadlei-bedrock.lndo.site/wp-json/wp/v2/posts. It has the advantage that 
  it already provides rendered content plus a lot of additional information.

## Drupal

* Run `lando start` on the wp folder. This will create https://alemadlei-drupal10.lndo.site.
* Create the `sites/default/files` folder and set permissions with `chmod -R 777`
* Run `lando composer install`
* Install from config `lando drush si -y --existing-config`.
* Run `lando drush cron`  (this has to be done after posts have been created on the Wordpress site. We use cron as we
* would on a real server by adding a drush call to crontab).
* Go to https://alemadlei-drupal10.lndo.site/wp-articles and check articles are shown.
* `Evaluation note:` Confirm items are separated by an `<hr>`.

`Evaluation note`: To ensure content is updated constantly, run cron constantly. On a server this could be done with crontab.