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
* All other branches are not officially available on the web. Instead, you'll have to build and run them yourself. Refer to our setup section for more information.

### Setup

*Note: This guide assumes you're using a unix system. If you aren't (e.g. Windows), this setup method is currently unsupported.*

Setting up the WAC website on a local machine is simple. All you need to do is copy-paste a few commands into your command line.

First thing you need is the repository. Clone it with this command:

```bash
git clone --depth=1 https://github.com/malsf21/world.ac.git &&
cd world.ac
```

To setup your machine to run the server, you'll need the tools of the trade. The tools we use are:

* [Ruby](https://www.ruby-lang.org/en/), to build our site
* [Bundler](https://bundler.io/), to install our ruby dependencies
* [Git](https://git-scm.com/), to clone this repository
* A Browser, to view the website of course!

Bundler installs these Ruby Dependencies:
* [Jekyll](https://jekyllrb.com), to build and run the website
* [Sass](http://sass-lang.com/), to write CSS better
* [Rake](https://github.com/ruby/rake), to help us check our code
* [HTML Proofer](https://github.com/gjtorikian/html-proofer), to help us check our HTML

If you're using a mac, Ruby comes pre-installed. That makes installing our dependencies pretty easy! (If you don't have ruby installed, you can find instructions [on their website](https://www.ruby-lang.org/en/)).

To install our ruby dependencies, you need [Bundler](https://bundler.io/). You can install it with:

```
gem install bundler
```

Next step is to setup our dependencies. Just run `./setup.sh`. Boom. Done. `setup.sh` runs `bundle`, which is why it's required for installation, as well as pulling a few libraries from the internet.

To actually see the website, run `start.sh`. Visit what follows the "Server address:" line (which is normally [http://127.0.0.1:4000/](http://127.0.0.1:4000/), but that might change soon)!

And voila! Everything should work for you. If something isn't, please let one of us know on our [issues tracker](https://github.com/malsf21/world.ac/issues).
