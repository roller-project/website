var shell = require('shelljs')

console.log('bundling WebApp components')
shell.exec('webpack -p')
