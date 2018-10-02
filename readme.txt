=== Log For Docker ===
Contributors: Kazunao_Anahara
Tags: docker,log
Tested up to: 4.9
Requires PHP: 7.0
Requires at least: 1.0
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Add a method that can be written to Docker's log.

== Description ==

If you enable this plugin, nothing happens.
WordPress must be running in Docker environment.
You need to add code.

There are two methods.

`Log_For_Docker::log( $message );`

or

`Log_For_Docker::error( $message );`

== Frequently Asked Questions ==

= Installation =

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Describe the logs output to functions.php.

= How to check logs =

At the terminal.

`docker logs [container_name]`