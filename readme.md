# ![Dummy](https://raw.githubusercontent.com/dummy-team/dummy/gh-pages/img/dummy.png)

This toolkit is a collection of [Wordpress](https://wordpress.org) components to help you add customs and flexibles contents to the [Wordpress](https://wordpress.org) back-end.
Because the contributors don't have to know how to code, they should not have to write complex shortcodes. To help us with that, [Visual Composer](http://vc.wpbakery.com/) provides an easy way to build custom back-end interface. [Timber](http://upstatement.com/timber/) will add a solid template system ([Twig](http://twig.sensiolabs.org/)) to keep the shortcode logic away from your view, so there is no need to dive into the PHP to edit the rendered HTML.  

[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/dummy-team/dummy?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=body_badge)

Since there are build upon [Visual Composer](http://vc.wpbakery.com/) and [Timber](http://upstatement.com/timber/), you'll need to install these before using these components.  
The easiest way to do so is to plug them to the [wp-dummy-twig](https://github.com/dummy-team/wp-dummy-twig/). If you don't want to use [Visual Composer](http://vc.wpbakery.com/), you can still use them by excluding the `vc_map` configuration. Timber however is what will produce the output of the shortcodes, so I highly recommand to use it.

## Usage
### [wp-dummy-twig](https://github.com/dummy-team/wp-dummy-twig/)
Copy the component folder into `lib/shortcodes/` and require it in the `autoload.php` file.
The component will then be available in the components list under the dummy category.

### In any other wordpress
Install the [Timber](https://wordpress.org/plugins/timber-library/) plugin, then copy the folder where you want and require the `autoload.php` file in the `function.php`, remove the `vc_map.php` file and inclusion. The shortcode should now be parsed and rendered.


## Components

| Component | Description |
| --------- | ----------- |
|  [dtnews](dummy-team/wp-components/components/dt_news/)  | List news |
