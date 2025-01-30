# pdxchambers-cms
To compile the less files:
First install a less compiler. I used the less npm package `npm install -g less`
If you want to have less poll for your changes and automatically compile on save, install less-watch-compiler as well `npm install -g less-watch-compiler`
then during development, run the command `less-watch-compiler`, a config for less-watch-compiler is included to provide it with the correct paths to watch.