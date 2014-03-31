shoelace-theme
==============

Latest Readme updae: December 7th, 2013
Work in progress branch is wip-0.0.0

**View the demo here:** http://shoelace-theme.helloerik.com/

A sparse, nuts and bolts parent theme kit for WordPress using Bootstrap 3.

### Cloning the Repository

***This theme is meant to be cloned from Github.*** Downloading the ZIP will not work without lots of headache. To check out the theme, be sure to get the Library submodule, which contains hybrid-core files.

To do this check out the repository with the following commands:

    git clone https://github.com/erikflowers/shoelace-theme.git
    git submodule init
    git submodule update

### Hybrid

This theme will be built on the Hybrid-Base parent starter theme, which uses the Hybrid-Core framework

Hybrid Base: http://themehybrid.com/themes/hybrid-base
Hybrid Core: http://themehybrid.com/hybrid-core

This will be a **very** sparse theme. It's not meant to be a theme you use without customizing it. It will lay all the framwork for the php side of a theme, and then the CSS and HTML side of Bootstrap 3, but other than that, it's vanilla.

### Less

This will include comprehensive LESS files that you will add to and compile - there will not be a standalone CSS file other than the initial LESS compile. To customize, you will use the LESS files that import the bootstrap files.

It will also include a bunch of mixins and variable recipes that are additional to the Bootstrap mixins. I've found and made a handful of very useful mixins that will be a part of the Shoelace-theme. 

### Navwalker Addition

This theme will also include the Bootstrap NavWalker: https://github.com/twittem/wp-bootstrap-navwalker. This will allow the main nav to have 1 level of dropdowns, which is all Bootstrap 3 has. This part is tricky and I may need some php help =)

### Free and Open

This is an open source theme and project so anyone with ideas can contribute and join. The theme will be actively updated as Bootstrap is updated, and will also be updated along with the Hybrid-Base and Hybrid-Core framework. 

Feel free to join, email, or tweet at me
erik@helloerik.com
@Erik_UX
