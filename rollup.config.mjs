import { defineConfig } from 'rollup';
import { babel } from '@rollup/plugin-babel';
import terser from '@rollup/plugin-terser';
import replace from '@rollup/plugin-replace';
import resolve from '@rollup/plugin-node-resolve';
import commonjs from '@rollup/plugin-commonjs';
import postcss from 'rollup-plugin-postcss';

export function WPFleet(/** @type {string} */ name) {
  return defineConfig({
    input: {
      [name]: `src/${name}/main.js`,
    },

    output: {
      dir: 'trunk/assets/bundle',
      entryFileNames: '[name].js',
      format: 'iife'
    },

    treeshake: true,

    plugins: [
      postcss({
        extract: true,
        modules: false,
        minimize: true,
        use: ['sass']
      }),

      resolve(),

      commonjs(),

      replace({
        preventAssignment: true,
        'process.env.NODE_ENV': "'production'"
      }),

      babel({
        presets: ['@babel/preset-env'],
        babelHelpers: 'bundled'
      }),

      terser()
    ]
  });
}

export default [
  WPFleet('core'),
  WPFleet('admin'),
  WPFleet('front'),
];
