BootstrapBundle
===============

This bundle provides the "Twitter Bootstrap" framework written in SCSS(https://github.com/jlong/sass-twitter-bootstrap) and Javascript for the Symfony2 framework.

##Install
Add the bundle to your AppKernel::registerBundles() method and run assets:install.
```php
        class AppKernel extends Kernel
        {
            public function registerBundles()
            {   
                $bundles = array(
                    
                    new lx\BoostrapBundle\lxBoostrapBundle,
                    
                );
            }
        }
```

Then go to your config.yml and add %assetic.sass.sources.bootstrap% to your **compass** load paths.

**Please note:** Through the fact that the syfmony/AsseticBundle does not provide the possibility to add load paths in the config you have to use compass as filter.

```yaml
assetic:
    filters:
        sass: #this wont work
            load_paths:
                - %bootstrap_sources%
        compass: #this works fine
            load_paths:
                - %bootstrap_sources%
	
```

##Use
Just import the files with a twitter prefix.
```sass
        @import "twitter/boostrap";
        @import "twitter/responsive";
```

        BootstrapBundle/
            js/
            scss/
            Resources/
                public
                    images/

For further instructions see: http://symfony.com/doc/2.0/cookbook/assetic/asset_management.html

*Please note:* This only a use simplification of https://github.com/jlong/sass-twitter-bootstrap and https://github.com/twitter/bootstrap for the Symfony2 framework.