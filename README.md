# Brand starter theme based on Underscores with TailwindCSS integrated

- WordPress 5.0.X
- PostCSS
- Tailwindcss ^1.0.5 (already include, but in case: "npm install tailwindcss --save-dev")

## Getting Started
1. git clone git@gitlab.com:umichcreative/brand.git (only use the first time you set up local environment)
1. cd brand
1. git fetch origin master (to get the latest files from the master branch)
1. git branch develop (create develop branch)
1. git checkout develop
1. lando start
1. cd web/wp-content/themes/brand
1. npm install (skip if you have already set up your local environment)
1. npm start (this will set up watches for changes to your CSS, JS, and PHP files)
1. View site using the npm generated URL for preview [https://brand.lndo.site](https://brand.lndo.site) to utilize BrowserSync

## Finishing the Day
1. Command + C (to shutdown local node server)
1. go back to the "brand" project root folder
1. lando stop _or_ lando poweroff (to shutdown **ALL** lando projects running on your machine)
1. git status
1. git stash (if you want to save your changes locally for later use)
1. git add .
1. git commit -m "**_commit message_**"
1. git push origin develop (to push changes to the remote repo)
1. git checkout master
1. git branch develop -D (deleting the develop branch)
1. Merge request through [brand GitLab repo](https://gitlab.com/umichcreative/brand/-/branches)

## Resources
- [TailwindCSS default configs](https://github.com/tailwindcss/tailwindcss/blob/master/stubs/defaultConfig.stub.js)
- [Underscores/_s on GitHub](https://github.com/automattic/_s)
- [TailwindCSS Docs](https://www.youtube.com/redirect?q=https%3A%2F%2Ftailwindcss.com%2Fdocs%2Finstallation%2F&redir_token=Zt0oOKTYIlt8QgJ3zy4CtrGwcYR8MTU2MzkwMzAxMkAxNTYzODE2NjEy&v=TWzp_gDh5EU&event=video_description)
- [Larvel Mix Docs](https://www.youtube.com/redirect?q=https%3A%2F%2Flaravel-mix.com%2Fdocs%2F4.0%2Finstallation&redir_token=Zt0oOKTYIlt8QgJ3zy4CtrGwcYR8MTU2MzkwMzAxMkAxNTYzODE2NjEy&v=TWzp_gDh5EU&event=video_description)
- [Lando WordPress Docs](https://docs.devwithlando.io/tutorials/wordpress.html)


## Tutorials on YouTube for WordPress theme with _s and TailwindCSS
- 5/25/2019 [Setting up TailwindCSS in a WordPress theme (Underscores)](https://www.youtube.com/watch?v=TWzp_gDh5EU) by Brian Furfie
   - [Final package.json with scripts on GitHub](https://www.youtube.com/redirect?q=https%3A%2F%2Fgist.github.com%2Fbenfurfie%2Fd484e7c906948f0889861263bcfaa845&redir_token=Zt0oOKTYIlt8QgJ3zy4CtrGwcYR8MTU2MzkwMzAxMkAxNTYzODE2NjEy&v=TWzp_gDh5EU&event=video_description) includes Laravel
- [9/21/2018 Stream - WordPress Theme Development with TailwindCSS](https://www.youtube.com/watch?v=XgcqnznRx6E) by Daron Spence
- 12/2/2017 [Tutorial Series: WordPress Theme with TailwindCSS and Underscores](https://www.youtube.com/playlist?list=PLht-7jHewMA4KfgZGHNyEx3mD-OJjaasM) by Chris Perko

### Important Note

wp-config.php > define('WP_DEBUG', true);  **NEED TO SET TO "false" in production**

TailwindCSS uses FlexBox (no CSS Grid).

### Other stuff
- [timber/starter-theme](https://github.com/timber/starter-theme) _s based basic theme with template files in twig
