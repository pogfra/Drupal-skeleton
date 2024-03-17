import gulp from "gulp";
import { css } from "./gulp/css.mjs";
import { js } from "./gulp/js.mjs";
import { svgstore } from "./gulp/svgstore.mjs";



const { series, parallel } = gulp;

const watchers = async () => {
  css.watch();
  js.watch();
  svgstore.watch();
};

const build = series(svgstore, parallel(css, js));
const doWatch = series(build, watchers);

export { css, js, svgstore, build, doWatch as watch, doWatch as default };
