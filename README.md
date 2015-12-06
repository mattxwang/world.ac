#world.ac
Here's the repository for http://world.ac


We use the [Bootstrap](http://getbootstrap.com) for a lot of the site.

## [To-Do](TODO.md)
List of what we need to do now.
## [Future Plans](PLAN.md)
List of futures that we should implement before the conference starts, but aren't urgent.

## [Changelog](CHANGELOG.md)
A full changelog can be found at the Releases tab.

##Etiquette
###Files
* Please put all files in their respective folders (i.e. images in /img). 
* Test projects should not be pushed into the live website; instead, they should be either pushed to a different branch, the /test folder (this one typically holds the big, current to-do task), or a test_FILENAME version.
* Multi-word filenames should use an underscore, such as multi_word_filename.js

###Coding
* All viewable pages need to be .php files.
* Please reference navbar.php/footer.php in every user-based page. In addition, please remember to import all of the correct JavaScript and CSS files.
* Please keep mobile viewability in mind. Bootstrap is a specialized mobile framework. Often, this means using [Bootstrap-created elements](http://getbootstrap.com/components/), which scale with [mobile resolutions](http://getbootstrap.com/css/#responsive-utilities). 
* Comment all of your code! While it isn't immediately necessary, this website will be handed down eventually; we need to make sure our website makes sense.

###Convention
* Please try your best to comment relatively thoroughly on big commits. One big comment, followed by several nonchalant comments is fine.
* Please sync/pull the latest changes BEFORE starting coding. In addition, please push all changes made on the webserver to the github repo (git push origin master/git push devel master).
* After a completely new functionality is fully implemented and added, please do not destabilize it. Wait for a release to be published before moving onto the next project.

