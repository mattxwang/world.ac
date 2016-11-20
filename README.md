# [world.ac](http://world.ac)
[![Build Status](https://travis-ci.org/malsf21/world.ac.svg?branch=master)](https://travis-ci.org/malsf21/world.ac)

## The World Affairs Conference Website

Hello there! Welcome to the repository for the World Affairs Conference (WAC).

## What's WAC?

According to our website,

> The World Affairs Conference (WAC) is Canada's oldest annual student-run current affairs conference.

WAC is an annual event where thousands of students in Ontario gather to hear some of the brightest minds in Canada (and in the world) discuss important current affairs topics, such as technology, politics, and ethics.

## What Does This Website Do?

Good question! This website displays information about WAC for delegates, advisors, and speakers. Hopefully, we make it easy for all of you to learn about what exactly WAC is, what it's about, when it is, and all those other useful tidbits of information.

In addition, we also do registration through the website (though that source code will be closed-source, for now). It makes it easier for advisors to register for WAC, and also means we cut down less trees. Awesome!

## Development Notes

So you want to contribute to WAC? Great! We're aiming to have a full documentation set on how to edit this website, but in the meanwhile, we have a little guide for you.

### Quick Pointers

* Our production-ready version of the website is stored in `stable`, which is available for viewing at [world.ac](http://world.ac).
* Our testing-but-stable version of the website is stored in `master`. It's viewable on our webserver, but for development purposes only.
* All other branches are not officially available on the web. Instead, you'll have to build and run them yourself. Refer to our setup section for more information.

### Setup

Want to help us out with the WAC website? No problem! Here's what you need:

* [Ruby](https://www.ruby-lang.org/en/), to install [Jekyll](https://jekyllrb.com)
* [Jekyll](https://jekyllrb.com), to build and run the website
* [Git](https://git-scm.com/), to clone this repository
* A Browser, to view the website of course!

First things first, we need to install Jekyll. We assume that you have Git and Ruby installed. If you don't, please visit the links above to install them. We also assume you're using a [Unix-based system](https://en.wikipedia.org/wiki/Unix); if you aren't, follow jekyll's alternatives instruction page.

Type in your command line:
```
gem install jekyll
```

After Jekyll completes its setup, clone the git repository:
```
git clone https://github.com/malsf21/world.ac.git
```

Then, cd into the repository:
```
cd world.ac
```

Inside the repository, all you'll need to do is "serve" the site. Type the following into your command line:
```
jekyll serve
```

After that, you should get a response that looks something like this:

```
jekyll serve
Configuration file: /Users/matthew.wang/github/world.ac/_config.yml
            Source: /Users/matthew.wang/github/world.ac
       Destination: /Users/matthew.wang/github/world.ac/_site
 Incremental build: disabled. Enable with --incremental
      Generating...
                    done in 0.605 seconds.
 Auto-regeneration: enabled for '/Users/matthew.wang/github/world.ac'
Configuration file: /Users/matthew.wang/github/world.ac/_config.yml
    Server address: http://127.0.0.1:4000/
  Server running... press ctrl-c to stop.

```

Visit what follows the "Server address:" line (which is normally [http://127.0.0.1:4000/](http://127.0.0.1:4000/), but that might change soon)!

*Note: On `dev`/`master` branches, it might be be `127.0.0.1:4000/wactest/` or `127.0.0.1:4000/wac/`, but on `stable` branches it will most likely be just `127.0.0.1:4000`. Double check just to be sure!*

And voila! Everything should work for you. If something isn't, please let me know on our [issues tracker](https://github.com/malsf21/world.ac/issues).
