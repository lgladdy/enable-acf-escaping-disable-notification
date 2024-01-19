## ACF Enable Escaping & Disable Notification Plugin

In ACF 6.2.5, the plugin began warning users whenever it detected the value being output was not correctly escaped when using the ACF shortcode, `the_field` or `the_sub_field`

In ACF 6.2.7 due for release in February 2024, ACF will automatically begin escaping the value when `the_field` or `the_sub_field` is used.

This plugin will enable the new escaping behaviour early to help you test your sites, and disable the admin notification for when fields are modified.

You could use this with the [debug plugin](https://github.com/lgladdy/acf-escaping-debug-plugin) we've also released, which will let you view when content modification happens.
