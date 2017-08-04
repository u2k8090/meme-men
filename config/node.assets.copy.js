'use strict';

import cpx from 'cpx';
import moment from 'moment';
import chalk from 'chalk';
import { config } from '../package.json';

let path = config.assets;
let wordpress = config.wordpress

cpx.watch(
    `${path.src}/**/{*.jpg,*.png,*.gif,*.svg,*.css,*.otf}`,
    wordpress.enable ? `${wordpress.dist}/assets` : path.dist,
    { update:true } //options
).on("copy",(e)=>{
    console.log(`[${chalk.blue('Copy')}] ${e.srcPath} ${chalk.gray('-------->')} ${e.dstPath} [${chalk.white.bold(moment().format('HH:mm:ss'))}]`);
}).on("remove",(e)=>{
    console.log(`[${chalk.blue('Remove')}] ${e.path} [${chalk.white.bold(moment().format('HH:mm:ss'))}]`);
});

cpx.watch(
    `${path.src}/temp/*.php`,
    wordpress.enable ? wordpress.dist : path.dist,
    { update:true } //options
).on("copy",(e)=>{
    console.log(`[${chalk.blue('Copy')}] ${e.srcPath} ${chalk.gray('-------->')} ${e.dstPath} [${chalk.white.bold(moment().format('HH:mm:ss'))}]`);
}).on("remove",(e)=>{
    console.log(`[${chalk.blue('Remove')}] ${e.path} [${chalk.white.bold(moment().format('HH:mm:ss'))}]`);
});
